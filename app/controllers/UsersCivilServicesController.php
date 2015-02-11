<?php

class UsersCivilServicesController extends \BaseController {

	/**
	 * Display a listing of userscivilservices
	 *
	 * @return Response
	 */
	public function index()
	{
		$userscivilservices = Userscivilservice::all();

		return View::make('userscivilservices.index', compact('userscivilservices'));
	}

	/**
	 * Show the form for creating a new userscivilservice
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userscivilservices.create');
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

		Userscivilservice::create($data);

		return Redirect::route('userscivilservices.index');
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

		return View::make('userscivilservices.show', compact('userscivilservice'));
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

		return View::make('userscivilservices.edit', compact('userscivilservice'));
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

		return Redirect::route('userscivilservices.index');
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

		return Redirect::route('userscivilservices.index');
	}

}
