<?php

class EmployeesController extends \BaseController {


    public function index()
    {
        $jobvacancies = Jobvacancy::all();

        return View::make('employees.dashboard', compact('jobvacancies'));
    }
}