<?php

class UsersBiosController extends \BaseController {

	/**
	 * Display a listing of usersbios
	 *
	 * @return Response
	 */
	public function index()
	{
		$usersbio = Usersbio::where('employee_no', '=', Auth::getUser()->employee_no)->first();
		if (!is_null($usersbio)) {
			return View::make('employees.usersbios.edit', compact('usersbio'));
		} else {
			return View::make('employees.usersbios.create');
		}
	}

	/**
	 * Show the form for creating a new usersbio
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersbios.create');
	}

	/**
	 * Store a newly created usersbio in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersbio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usersbio::create($data);

		return Redirect::route('employees.pds.usersbios.index');
	}

	/**
	 * Display the specified usersbio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersbio = Usersbio::findOrFail($id);

		return View::make('employees.usersbios.show', compact('usersbio'));
	}

	/**
	 * Show the form for editing the specified usersbio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersbio = Usersbio::find($id);

		return View::make('employees.usersbios.edit', compact('usersbio'));
	}

	/**
	 * Update the specified usersbio in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersbio = Usersbio::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersbio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersbio->update($data);

		return Redirect::route('employees.pds.usersbios.index');
	}

	/**
	 * Remove the specified usersbio from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersbio::destroy($id);

		return Redirect::route('employees.pds.usersbios.index');
	}

}
