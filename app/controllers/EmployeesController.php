<?php

class EmployeesController extends \BaseController {


    public function index()
    {
        $jobvacancies = Jobvacancy::all();

        return View::make('employees.dashboard', compact('jobvacancies'));
    }

    public function pes()
    {
        $evaluations = Evaluation::all();

        $schedules = [];
        foreach ($evaluations as $key => $evaluation) {
            $schedules[$evaluation['id']] = date('M d Y', strtotime($evaluation['start_at'])) . ' - ' . date('M d Y', strtotime($evaluation['end_at']));
        }
        $employee_no = Auth::getUser()->employee_no;

        if (Input::has('schedule')) {
            $sched = Input::get('schedule');
            $results = Pes::where('evaluation_id', '=', $sched)
                ->where('employee_no', '=', $employee_no)
                ->get();
        } else {
            $results = Pes::where('employee_no', '=', $employee_no)->get();
        }

        $finals = [];
        foreach ($results as $result) {
            $performance = (((int)$result->q1 + (int)$result->q2 + (int)$result->q3) / 3) * 0.7;
            $critical    = (((int)$result->q4 + (int)$result->q5 + (int)$result->q6 + (int)$result->q7
                        + (int)$result->q8 + (int)$result->q9 + (int)$result->q10) / 7) * 0.3;
            $overall     = (int)$performance + (int)$critical;

            $adjective = 'P';
            if ($overall > 8) {
                $adjective = 'O (OUTSTANDING)';
            } else if ($overall > 6 && $overall <= 8) {
                $adjective = 'VS (VERY SATISFACTORY)';
            } else if ($overall > 4 && $overall <= 6) {
                $adjective = 'S (SATISFACTORY)';
            } else if ($overall > 2 && $overall <= 4) {
                $adjective = 'U (UNSATISFACTORY)';
            } else if ($overall <= 2) {
                $adjective = 'P (POOR)';
            }

            $finals[] = [
                'employee_no' => $result->employee_no,
                'name'        => $result->user->bio->lastname . ', ' . $result->user->bio->firstname,
                'performance' => $performance,
                'critical'    => $critical,
                'overall'     => $overall,
                'adjective'   => $adjective
            ];
        }

        return View::make('admin.pes')
            ->with('schedules', $schedules)
            ->with('finals', $finals);
    }
}