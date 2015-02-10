<?php

class UsersChildrensController extends \BaseController {

	/**
	 * Display a listing of userschildrens
	 *
	 * @return Response
	 */
	public function index()
	{
		$userschildrens = Userschildren::all();

		return View::make('userschildrens.index', compact('userschildrens'));
	}

	/**
	 * Show the form for creating a new userschildren
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userschildrens.create');
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

		Userschildren::create($data);

		return Redirect::route('userschildrens.index');
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

		return View::make('userschildrens.show', compact('userschildren'));
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

		return View::make('userschildrens.edit', compact('userschildren'));
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

		return Redirect::route('userschildrens.index');
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

		return Redirect::route('userschildrens.index');
	}

}
