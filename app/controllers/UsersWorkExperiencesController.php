<?php

class UsersWorkExperiencesController extends \BaseController {

	/**
	 * Display a listing of usersworkexperiences
	 *
	 * @return Response
	 */
	public function index()
	{
		$usersworkexperiences = Usersworkexperience::all();

		return View::make('usersworkexperiences.index', compact('usersworkexperiences'));
	}

	/**
	 * Show the form for creating a new usersworkexperience
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usersworkexperiences.create');
	}

	/**
	 * Store a newly created usersworkexperience in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersworkexperience::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usersworkexperience::create($data);

		return Redirect::route('usersworkexperiences.index');
	}

	/**
	 * Display the specified usersworkexperience.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersworkexperience = Usersworkexperience::findOrFail($id);

		return View::make('usersworkexperiences.show', compact('usersworkexperience'));
	}

	/**
	 * Show the form for editing the specified usersworkexperience.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersworkexperience = Usersworkexperience::find($id);

		return View::make('usersworkexperiences.edit', compact('usersworkexperience'));
	}

	/**
	 * Update the specified usersworkexperience in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersworkexperience = Usersworkexperience::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersworkexperience::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersworkexperience->update($data);

		return Redirect::route('usersworkexperiences.index');
	}

	/**
	 * Remove the specified usersworkexperience from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersworkexperience::destroy($id);

		return Redirect::route('usersworkexperiences.index');
	}

}
