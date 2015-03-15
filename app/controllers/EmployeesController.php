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

            $firstname = '';
            $lastname  = '';
            if (isset($result->user->bio->lastname)) {
                $lastname = $result->user->bio->lastname;
            }

            if (isset($result->user->bio->firstname)) {
                $firstname = $result->user->bio->firstname;
            }

            $finals[] = [
                'id'          => $result->id,
                'employee_no' => $result->employee_no,
                'name'        => $lastname . ', ' . $firstname,
                'performance' => $performance,
                'critical'    => $critical,
                'overall'     => $overall,
                'adjective'   => $adjective,
                'status'      => $result->status,
                'evaluator'   => $result->evaluator->firstname . ' ' . $result->evaluator->lastname
            ];
        }

        return View::make('admin.pes')
            ->with('schedules', $schedules)
            ->with('finals', $finals);
    }

    public function pesSingle($id)
    {
        $evaluation = Pes::findOrFail($id);
        $user = User::where('employee_no', '=', $evaluation->employee_no)->first();
        return View::make('admin.pes-single')
            ->with('evaluation', $evaluation)
            ->with('user', $user);
    }

    public function submitPes($id)
    {
        $pes = Pes::findOrFail($id);
        $pes->status = 'active';
        $pes->save();

        Session::flash('success', 'Evaluation was successfully confirmed and submitted to HR.');
        return Redirect::to('/employees/pes');
    }

    // PRINTS
    public function printAccomplishment()
    {
        if(!Input::has('employee_no')) {
            return Redirect::back();
        }
        $from = \Carbon\Carbon::today();
        $to   = \Carbon\Carbon::today();

        $range  = [
            $from,
            $to
        ];

        if(Input::has('from') && Input::has('to')) {
            $from  = strtotime(Input::get('from'));
            $to    = strtotime(Input::get('to'));

            $range = [
                \Carbon\Carbon::createFromTimestamp($from),
                \Carbon\Carbon::createFromTimestamp($to)
            ];
        }

        $employee_no = Input::get('employee_no');

        $accomplishments = UsersAccomplishment::where('employee_no', '=', $employee_no)
            ->whereBetween('dateto', $range)
            ->get();

        $employee = User::where('employee_no', $employee_no)->first();

        $supervisor = User::where('role_id', 2)->where('department_id', $employee->department_id)->first();

        return View::make('prints.accomplishment')->with('accomplishments', $accomplishments)
            ->with('employee', $employee)
            ->with('supervisor', $supervisor);
    }

    public function printPes()
    {
        $eval_id     = Input::get('eval_id');

        $pes = Pes::findOrFail($eval_id);

        $employee = User::where('employee_no', $pes->employee_no)->first();

        $supervisor = User::where('department_id', $employee->department_id)->first();

        return View::make('prints.pes')->with('evaluation', $pes)
            ->with('user', $employee);
    }
}