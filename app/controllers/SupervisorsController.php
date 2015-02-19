<?php

class SupervisorsController extends \BaseController {


    public function index()
    {
        return View::make('supervisors.dashboard');
    }

    public function pes($id)
    {
        $user = User::where('employee_no', '=', $id)->first();

        return View::make('supervisors.pes', compact('user'));
    }

    public function doPes($id)
    {
        $schedule = Evaluation::latest()->first();

        $data = Input::all();

        $pes = new Pes();
        $pes->employee_no    = $id;
        $pes->evaluation_id  = $schedule->id;
        $pes->q1             = $data['q1'];
        $pes->q2             = $data['q2'];
        $pes->q3             = $data['q3'];
        $pes->q4             = $data['q4'];
        $pes->q5             = $data['q5'];
        $pes->q6             = $data['q6'];
        $pes->q7             = $data['q7'];
        $pes->q8             = $data['q8'];
        $pes->q9             = $data['q9'];
        $pes->q10            = $data['q10'];

        $pes->save();

        return Redirect::route('supervisors.user.list');
    }

    public function accomplishments()
    {
        $users = User::where('department_id', '=', Auth::getUser()->department_id)->get();
        return View::make('supervisors.accomplishments', compact('users'));
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