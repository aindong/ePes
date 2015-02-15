<?php

class UsersCivilServicesController extends \BaseController {

	/**
	 * Display a listing of userscivilservices
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$civilservices = Userscivilservice::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.userscivilservices.index', compact('civilservices'));
	}

	/**
	 * Show the form for creating a new userscivilservice
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.userscivilservices.create');
	}

	/**
	 * Store a newly created userscivilservice in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Userscivilservice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;
		
		Userscivilservice::create($data);

		return Redirect::route('employees.pds.civil-services.index');
	}

	/**
	 * Display the specified userscivilservice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userscivilservice = Userscivilservice::findOrFail($id);

		return View::make('employees.userscivilservices.show', compact('userscivilservice'));
	}

	/**
	 * Show the form for editing the specified userscivilservice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userscivilservice = Userscivilservice::find($id);

		return View::make('employees.userscivilservices.edit', compact('userscivilservice'));
	}

	/**
	 * Update the specified userscivilservice in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$userscivilservice = Userscivilservice::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Userscivilservice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$userscivilservice->update($data);

		return Redirect::route('employees.pds.civil-services.index');
	}

	/**
	 * Remove the specified userscivilservice from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Userscivilservice::destroy($id);

		return Redirect::route('employees.pds.civil-services.index');
	}

}
