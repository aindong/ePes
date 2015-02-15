<?php

class UsersEducationsController extends \BaseController {

	/**
	 * Display a listing of userseducations
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$educations = Userseducation::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.userseducations.index', compact('educations'));
	}

	/**
	 * Show the form for creating a new userseducation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.userseducations.create');
	}

	/**
	 * Store a newly created userseducation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Userseducation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		Userseducation::create($data);

		return Redirect::route('employees.pds.educations.index');
	}

	/**
	 * Display the specified userseducation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userseducation = Userseducation::findOrFail($id);

		return View::make('employees.userseducations.show', compact('userseducation'));
	}

	/**
	 * Show the form for editing the specified userseducation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userseducation = Userseducation::find($id);

		return View::make('employees.userseducations.edit', compact('userseducation'));
	}

	/**
	 * Update the specified userseducation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$userseducation = Userseducation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Userseducation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$userseducation->update($data);

		return Redirect::route('employees.pds.educations.index');
	}

	/**
	 * Remove the specified userseducation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Userseducation::destroy($id);

		return Redirect::route('employees.pds.educations.index');
	}

}
