<?php

class UsersHobbiesController extends \BaseController {

	/**
	 * Display a listing of usershobbies
	 *
	 * @return Response
	 */
	public function index()
	{
		$usershobbies = Usershobby::all();

		return View::make('usershobbies.index', compact('usershobbies'));
	}

	/**
	 * Show the form for creating a new usershobby
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usershobbies.create');
	}

	/**
	 * Store a newly created usershobby in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usershobby::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usershobby::create($data);

		return Redirect::route('usershobbies.index');
	}

	/**
	 * Display the specified usershobby.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usershobby = Usershobby::findOrFail($id);

		return View::make('usershobbies.show', compact('usershobby'));
	}

	/**
	 * Show the form for editing the specified usershobby.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usershobby = Usershobby::find($id);

		return View::make('usershobbies.edit', compact('usershobby'));
	}

	/**
	 * Update the specified usershobby in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usershobby = Usershobby::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usershobby::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usershobby->update($data);

		return Redirect::route('usershobbies.index');
	}

	/**
	 * Remove the specified usershobby from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usershobby::destroy($id);

		return Redirect::route('usershobbies.index');
	}

}
