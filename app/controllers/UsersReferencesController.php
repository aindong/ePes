<?php

class UsersReferencesController extends \BaseController {

	/**
	 * Display a listing of usersreferences
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usersreferences = Usersreference::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersreferences.index', compact('usersreferences'));
	}

	/**
	 * Show the form for creating a new usersreference
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersreferences.create');
	}

	/**
	 * Store a newly created usersreference in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersreference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		Usersreference::create($data);

		return Redirect::route('employees.usersreferences.index');
	}

	/**
	 * Display the specified usersreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersreference = Usersreference::findOrFail($id);

		return View::make('employees.usersreferences.show', compact('usersreference'));
	}

	/**
	 * Show the form for editing the specified usersreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersreference = Usersreference::find($id);

		return View::make('employees.usersreferences.edit', compact('usersreference'));
	}

	/**
	 * Update the specified usersreference in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersreference = Usersreference::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersreference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersreference->update($data);

		return Redirect::route('employees.usersreferences.index');
	}

	/**
	 * Remove the specified usersreference from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersreference::destroy($id);

		return Redirect::route('employees.usersreferences.index');
	}

}
