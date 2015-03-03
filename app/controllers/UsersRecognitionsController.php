<?php

class UsersRecognitionsController extends \BaseController {

	/**
	 * Display a listing of usersrecognitions
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usersrecognitions = UsersRecognition::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersRecognitions.index', compact('usersrecognitions'));
	}

	/**
	 * Show the form for creating a new usersrecognition
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersRecognitions.create');
	}

	/**
	 * Store a newly created usersrecognition in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersRecognition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		UsersRecognition::create($data);
        Session::flash('success', 'Successfully added a recognition');
		return Redirect::route('employees.pds.recognitions.index');
	}

	/**
	 * Display the specified usersrecognition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersrecognition = UsersRecognition::findOrFail($id);

		return View::make('employees.usersRecognitions.show', compact('usersrecognition'));
	}

	/**
	 * Show the form for editing the specified usersrecognition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersrecognition = UsersRecognition::find($id);

		return View::make('employees.usersRecognitions.edit', compact('usersrecognition'));
	}

	/**
	 * Update the specified usersrecognition in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersrecognition = UsersRecognition::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersRecognition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersrecognition->update($data);
        Session::flash('success', 'Successfully updated a recognition');
		return Redirect::route('employees.pds.recognitions.index');
	}

	/**
	 * Remove the specified usersrecognition from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		UsersRecognition::destroy($id);

		return Redirect::route('employees.pds.recognitions.index');
	}

}
