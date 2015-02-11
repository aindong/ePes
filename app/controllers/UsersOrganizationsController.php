<?php

class UsersOrganizationsController extends \BaseController {

	/**
	 * Display a listing of usersorganizations
	 *
	 * @return Response
	 */
	public function index()
	{
		$usersorganizations = Usersorganization::all();

		return View::make('usersorganizations.index', compact('usersorganizations'));
	}

	/**
	 * Show the form for creating a new usersorganization
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usersorganizations.create');
	}

	/**
	 * Store a newly created usersorganization in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersorganization::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usersorganization::create($data);

		return Redirect::route('usersorganizations.index');
	}

	/**
	 * Display the specified usersorganization.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersorganization = Usersorganization::findOrFail($id);

		return View::make('usersorganizations.show', compact('usersorganization'));
	}

	/**
	 * Show the form for editing the specified usersorganization.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersorganization = Usersorganization::find($id);

		return View::make('usersorganizations.edit', compact('usersorganization'));
	}

	/**
	 * Update the specified usersorganization in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersorganization = Usersorganization::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersorganization::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersorganization->update($data);

		return Redirect::route('usersorganizations.index');
	}

	/**
	 * Remove the specified usersorganization from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersorganization::destroy($id);

		return Redirect::route('usersorganizations.index');
	}

}
