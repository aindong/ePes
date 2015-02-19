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
