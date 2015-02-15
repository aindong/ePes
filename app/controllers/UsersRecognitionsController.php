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
		$usersrecognitions = Usersrecognition::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersrecognitions.index', compact('usersrecognitions'));
	}

	/**
	 * Show the form for creating a new usersrecognition
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersrecognitions.create');
	}

	/**
	 * Store a newly created usersrecognition in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersrecognition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		Usersrecognition::create($data);

		return Redirect::route('employees.usersrecognitions.index');
	}

	/**
	 * Display the specified usersrecognition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersrecognition = Usersrecognition::findOrFail($id);

		return View::make('employees.usersrecognitions.show', compact('usersrecognition'));
	}

	/**
	 * Show the form for editing the specified usersrecognition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersrecognition = Usersrecognition::find($id);

		return View::make('employees.usersrecognitions.edit', compact('usersrecognition'));
	}

	/**
	 * Update the specified usersrecognition in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersrecognition = Usersrecognition::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersrecognition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersrecognition->update($data);

		return Redirect::route('employees.usersrecognitions.index');
	}

	/**
	 * Remove the specified usersrecognition from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersrecognition::destroy($id);

		return Redirect::route('employees.usersrecognitions.index');
	}

}
