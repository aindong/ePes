<?php

class UsersOrganizationsController extends \BaseController {

	/**
	 * Display a listing of usersorganizations
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usersorganizations = UsersOrganization::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersOrganizations.index', compact('usersorganizations'));
	}

	/**
	 * Show the form for creating a new usersorganization
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersOrganizations.create');
	}

	/**
	 * Store a newly created usersorganization in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersOrganization::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		UsersOrganization::create($data);
        Session::flash('success', 'Successfully added on organization');
		return Redirect::route('employees.pds.organizations.index');
	}

	/**
	 * Display the specified usersorganization.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersorganization = UsersOrganization::findOrFail($id);

		return View::make('employees.usersOrganizations.show', compact('usersorganization'));
	}

	/**
	 * Show the form for editing the specified usersorganization.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersorganization = UsersOrganization::find($id);

		return View::make('employees.usersOrganizations.edit', compact('usersorganization'));
	}

	/**
	 * Update the specified usersorganization in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersorganization = UsersOrganization::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersOrganization::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersorganization->update($data);
        Session::flash('success', 'Successfully updated an organization');
		return Redirect::route('employees.pds.organizations.index');
	}

	/**
	 * Remove the specified usersorganization from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		UsersOrganization::destroy($id);

		return Redirect::route('employees.pds.organizations.index');
	}

}
