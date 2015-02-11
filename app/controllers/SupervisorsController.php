<?php

class SupervisorsController extends \BaseController {


    public function index()
    {
        return View::make('supervisors.dashboard');
    }
}