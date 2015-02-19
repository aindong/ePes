<?php

class UsersBiosController extends \BaseController {

	/**
	 * Display a listing of usersbios
	 *
	 * @return Response
	 */
	public function index()
	{
		$usersbio = UsersBio::where('employee_no', '=', Auth::getUser()->employee_no)->first();
		if (!is_null($usersbio)) {
			return View::make('employees.usersBios.edit', compact('usersbio'));
		} else {
			return View::make('employees.usersBios.create');
		}
	}

	/**
	 * Show the form for creating a new usersbio
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersBios.create');
	}

	/**
	 * Store a newly created usersbio in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersBio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $data['employee_no'] = Auth::getUser()->employee_no;

		UsersBio::create($data);

		return Redirect::route('employees.pds.bios.index');
	}

	/**
	 * Display the specified usersbio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersbio = UsersBio::findOrFail($id);

		return View::make('employees.usersBios.show', compact('usersbio'));
	}

	/**
	 * Show the form for editing the specified usersbio.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersbio = UsersBio::find($id);

		return View::make('employees.usersBios.edit', compact('usersbio'));
	}

	/**
	 * Update the specified usersbio in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersbio = UsersBio::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersBio::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['employee_no'] = Auth::getUser()->employee_no;
		$usersbio->update($data);

		return Redirect::route('employees.pds.bios.index');
	}

	/**
	 * Remove the specified usersbio from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		UsersBio::destroy($id);

		return Redirect::route('employees.pds.bios.index');
	}

}
