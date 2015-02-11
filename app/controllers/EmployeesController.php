<?php

class EmployeesController extends \BaseController {


    public function index()
    {
        return View::make('employees.dashboard');
    }
}