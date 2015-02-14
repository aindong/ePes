<?php

class UsersVoluntaryWorksController extends \BaseController {

	/**
	 * Display a listing of usersvoluntaryworks
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$voluntaryworks = Usersvoluntarywork::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersvoluntaryworks.index', compact('voluntaryworks'));
	}

	/**
	 * Show the form for creating a new usersvoluntarywork
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersvoluntaryworks.create');
	}

	/**
	 * Store a newly created usersvoluntarywork in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersvoluntarywork::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usersvoluntarywork::create($data);

		return Redirect::route('employees.pds.voluntary-works.index');
	}

	/**
	 * Display the specified usersvoluntarywork.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersvoluntarywork = Usersvoluntarywork::findOrFail($id);

		return View::make('employees.usersvoluntaryworks.show', compact('usersvoluntarywork'));
	}

	/**
	 * Show the form for editing the specified usersvoluntarywork.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersvoluntarywork = Usersvoluntarywork::find($id);

		return View::make('employees.usersvoluntaryworks.edit', compact('usersvoluntarywork'));
	}

	/**
	 * Update the specified usersvoluntarywork in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersvoluntarywork = Usersvoluntarywork::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersvoluntarywork::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersvoluntarywork->update($data);

		return Redirect::route('employees.pds.voluntary-works.index');
	}

	/**
	 * Remove the specified usersvoluntarywork from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersvoluntarywork::destroy($id);

		return Redirect::route('employees.pds.voluntary-works.index');
	}

}
