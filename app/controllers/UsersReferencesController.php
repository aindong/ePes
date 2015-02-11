<?php

class UsersReferencesController extends \BaseController {

	/**
	 * Display a listing of usersreferences
	 *
	 * @return Response
	 */
	public function index()
	{
		$usersreferences = Usersreference::all();

		return View::make('usersreferences.index', compact('usersreferences'));
	}

	/**
	 * Show the form for creating a new usersreference
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usersreferences.create');
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

		Usersreference::create($data);

		return Redirect::route('usersreferences.index');
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

		return View::make('usersreferences.show', compact('usersreference'));
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

		return View::make('usersreferences.edit', compact('usersreference'));
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

		return Redirect::route('usersreferences.index');
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

		return Redirect::route('usersreferences.index');
	}

}
