<?php

class AdminController extends BaseController {

    public function index()
    {
        return View::make('admin.dashboard');
    }

    public function accomplishments()
    {

        if (Input::has('department')) {
            $department = Input::get('department');
            $users = User::where('department_id', '=', $department)->get();
        } else {
            $users = User::all();
        }

        return View::make('supervisors.accomplishments', compact('users'));
    }

    public function pes()
    {
        $evaluations = Evaluation::all();

        $schedules = [];
        foreach ($evaluations as $key => $evaluation) {
            $schedules[$evaluation['id']] = date('M d Y', strtotime($evaluation['start_at'])) . ' - ' . date('M d Y', strtotime($evaluation['end_at']));
        }

        if (Input::has('schedule')) {
            $sched = Input::get('schedule');
            $results = Pes::where('evaluation_id', '=', $sched)->get();
        } else {
            $results = Pes::All();
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
                'id'          => $result->id,
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

    public function singleAccomplishments($id)
    {

        $from = '';
        $to   = '';

        if (Input::has('from') && Input::has('to')) {
            $from = strtotime(Input::get('from'));
            $to = strtotime(Input::get('to'));

            $range = [
                \Carbon\Carbon::createFromTimestamp($from),
                \Carbon\Carbon::createFromTimestamp($to)
            ];

            $accomplishments = UsersAccomplishment::where('employee_no', '=', $id)
                ->whereBetween('dateto', $range)
                ->get();
        } else {
            $accomplishments = UsersAccomplishment::where('employee_no', '=', $id)->get();
        }

        //print_r($accomplishments);
        return View::make('supervisors.singleaccomplishments', compact('accomplishments'));
    }
}
