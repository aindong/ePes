<?php

class UsersHobbiesController extends \BaseController {

	/**
	 * Display a listing of usershobbies
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usershobbies = UsersHobby::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersHobbies.index', compact('usershobbies'));
	}

	/**
	 * Show the form for creating a new usershobby
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersHobbies.create');
	}

	/**
	 * Store a newly created usershobby in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersHobby::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		UsersHobby::create($data);
        Session::flash('success', 'Successfully added a new skill/hobby');
		return Redirect::route('employees.pds.hobbies.index');
	}

	/**
	 * Display the specified usershobby.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usershobby = UsersHobby::findOrFail($id);

		return View::make('employees.usersHobbies.show', compact('usershobby'));
	}

	/**
	 * Show the form for editing the specified usershobby.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usershobby = UsersHobby::find($id);
        Session::flash('success', 'Successfully updated a hobby/skill');
		return View::make('employees.usersHobbies.edit', compact('usershobby'));
	}

	/**
	 * Update the specified usershobby in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usershobby = UsersHobby::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersHobby::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usershobby->update($data);

		return Redirect::route('employees.pds.hobbies.index');
	}

	/**
	 * Remove the specified usershobby from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		UsersHobby::destroy($id);

		return Redirect::route('employees.pds.hobbies.index');
	}

}
