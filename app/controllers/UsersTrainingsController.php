<?php

class UsersTrainingsController extends \BaseController {

	/**
	 * Display a listing of userstrainings
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$userstrainings = UsersTraining::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersTrainings.index', compact('userstrainings'));
	}

	/**
	 * Show the form for creating a new userstraining
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersTrainings.create');
	}

	/**
	 * Store a newly created userstraining in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersTraining::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		UsersTraining::create($data);
        Session::flash('success', 'Successfully added a training');
		return Redirect::route('employees.pds.trainings.index');
	}

	/**
	 * Display the specified userstraining.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userstraining = UsersTraining::findOrFail($id);

		return View::make('employees.usersTrainings.show', compact('userstraining'));
	}

	/**
	 * Show the form for editing the specified userstraining.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userstraining = UsersTraining::find($id);

		return View::make('employees.usersTrainings.edit', compact('userstraining'));
	}

	/**
	 * Update the specified userstraining in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$userstraining = UsersTraining::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersTraining::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$userstraining->update($data);
        Session::flash('success', 'Successfully updated a training');
		return Redirect::route('employees.pds.trainings.index');
	}

	/**
	 * Remove the specified userstraining from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		UsersTraining::destroy($id);

		return Redirect::route('employees.pds.trainings.index');
	}

}
