<?php

class UsersWorkExperiencesController extends \BaseController {

	/**
	 * Display a listing of usersworkexperiences
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usersworkexperiences = UsersWorkExperience::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersWorkExperiences.index', compact('usersworkexperiences'));
	}

	/**
	 * Show the form for creating a new usersworkexperience
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersWorkExperiences.create');
	}

	/**
	 * Store a newly created usersworkexperience in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersWorkExperience::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		UsersWorkExperience::create($data);

		return Redirect::route('employees.pds.work-experiences.index');
	}

	/**
	 * Display the specified usersworkexperience.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersworkexperience = UsersWorkExperience::findOrFail($id);

		return View::make('employees.usersWorkExperiences.show', compact('usersworkexperience'));
	}

	/**
	 * Show the form for editing the specified usersworkexperience.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersworkexperience = UsersWorkExperience::find($id);

		return View::make('employees.usersWorkExperiences.edit', compact('usersworkexperience'));
	}

	/**
	 * Update the specified usersworkexperience in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersworkexperience = UsersWorkExperience::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersWorkExperience::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersworkexperience->update($data);

		return Redirect::route('employees.pds.work-experiences.index');
	}

	/**
	 * Remove the specified usersworkexperience from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		UsersWorkExperience::destroy($id);

		return Redirect::route('employees.pds.work-experiences.index');
	}

}
