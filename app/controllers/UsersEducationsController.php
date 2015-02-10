<?php

class UsersEducationsController extends \BaseController {

	/**
	 * Display a listing of userseducations
	 *
	 * @return Response
	 */
	public function index()
	{
		$userseducations = Userseducation::all();

		return View::make('userseducations.index', compact('userseducations'));
	}

	/**
	 * Show the form for creating a new userseducation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userseducations.create');
	}

	/**
	 * Store a newly created userseducation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Userseducation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Userseducation::create($data);

		return Redirect::route('userseducations.index');
	}

	/**
	 * Display the specified userseducation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userseducation = Userseducation::findOrFail($id);

		return View::make('userseducations.show', compact('userseducation'));
	}

	/**
	 * Show the form for editing the specified userseducation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userseducation = Userseducation::find($id);

		return View::make('userseducations.edit', compact('userseducation'));
	}

	/**
	 * Update the specified userseducation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$userseducation = Userseducation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Userseducation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$userseducation->update($data);

		return Redirect::route('userseducations.index');
	}

	/**
	 * Remove the specified userseducation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Userseducation::destroy($id);

		return Redirect::route('userseducations.index');
	}

}
