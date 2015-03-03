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
		$usersreferences = UsersReference::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersReferences.index', compact('usersreferences'));
	}

	/**
	 * Show the form for creating a new usersreference
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersReferences.create');
	}

	/**
	 * Store a newly created usersreference in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersReference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		UsersReference::create($data);
        Session::flash('success', 'Successfully added a reference');
		return Redirect::route('employees.pds.references.index');
	}

	/**
	 * Display the specified usersreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersreference = UsersReference::findOrFail($id);

		return View::make('employees.usersReferences.show', compact('usersreference'));
	}

	/**
	 * Show the form for editing the specified usersreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersreference = UsersReference::find($id);

		return View::make('employees.usersReferences.edit', compact('usersreference'));
	}

	/**
	 * Update the specified usersreference in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersreference = UsersReference::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersReference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersreference->update($data);
        Session::flash('success', 'Successfully updated a reference');
		return Redirect::route('employees.pds.references.index');
	}

	/**
	 * Remove the specified usersreference from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		UsersReference::destroy($id);

		return Redirect::route('employees.pds.references.index');
	}

}
