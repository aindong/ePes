<?php

class UsersAccomplishmentsController extends \BaseController {

	/**
	 * Display a listing of usersaccomplishments
	 *
	 * @return Response
	 */
	public function index()
	{
		$usersaccomplishments = Usersaccomplishment::all();

		return View::make('usersaccomplishments.index', compact('usersaccomplishments'));
	}

	/**
	 * Show the form for creating a new usersaccomplishment
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usersaccomplishments.create');
	}

	/**
	 * Store a newly created usersaccomplishment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersaccomplishment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usersaccomplishment::create($data);

		return Redirect::route('usersaccomplishments.index');
	}

	/**
	 * Display the specified usersaccomplishment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersaccomplishment = Usersaccomplishment::findOrFail($id);

		return View::make('usersaccomplishments.show', compact('usersaccomplishment'));
	}

	/**
	 * Show the form for editing the specified usersaccomplishment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersaccomplishment = Usersaccomplishment::find($id);

		return View::make('usersaccomplishments.edit', compact('usersaccomplishment'));
	}

	/**
	 * Update the specified usersaccomplishment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersaccomplishment = Usersaccomplishment::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersaccomplishment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersaccomplishment->update($data);

		return Redirect::route('usersaccomplishments.index');
	}

	/**
	 * Remove the specified usersaccomplishment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersaccomplishment::destroy($id);

		return Redirect::route('usersaccomplishments.index');
	}

}
