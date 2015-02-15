<?php

class UsersChildrensController extends \BaseController {

	/**
	 * Display a listing of userschildrens
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$userschildrens = Userschildren::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.userschildrens.index', compact('userschildrens'));
	}

	/**
	 * Show the form for creating a new userschildren
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.userschildrens.create');
	}

	/**
	 * Store a newly created userschildren in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Userschildren::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
		$data['employee_no'] = Auth::getUser()->employee_no;
		
		Userschildren::create($data);

		return Redirect::route('employees.userschildrens.index');
	}

	/**
	 * Display the specified userschildren.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userschildren = Userschildren::findOrFail($id);

		return View::make('employees.userschildrens.show', compact('userschildren'));
	}

	/**
	 * Show the form for editing the specified userschildren.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userschildren = Userschildren::find($id);

		return View::make('employees.userschildrens.edit', compact('userschildren'));
	}

	/**
	 * Update the specified userschildren in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$userschildren = Userschildren::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Userschildren::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$userschildren->update($data);

		return Redirect::route('employees.userschildrens.index');
	}

	/**
	 * Remove the specified userschildren from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Userschildren::destroy($id);

		return Redirect::route('employees.userschildrens.index');
	}

}
