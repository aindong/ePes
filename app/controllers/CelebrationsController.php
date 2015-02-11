<?php

class CelebrationsController extends \BaseController {

	/**
	 * Display a listing of celebrations
	 *
	 * @return Response
	 */
	public function index()
	{
		$celebrations = Celebration::all();

		return View::make('admin.celebrations.index', compact('celebrations'));
	}

	/**
	 * Show the form for creating a new celebration
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.celebrations.create');
	}

	/**
	 * Store a newly created celebration in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Celebration::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Celebration::create($data);

		return Redirect::route('admin.celebrations.index');
	}

	/**
	 * Display the specified celebration.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$celebration = Celebration::findOrFail($id);

		return View::make('admin.celebrations.show', compact('celebration'));
	}

	/**
	 * Show the form for editing the specified celebration.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$celebration = Celebration::find($id);

		return View::make('admin.celebrations.edit', compact('celebration'));
	}

	/**
	 * Update the specified celebration in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$celebration = Celebration::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Celebration::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$celebration->update($data);

		return Redirect::route('admin.celebrations.index');
	}

	/**
	 * Remove the specified celebration from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Celebration::destroy($id);

		return Redirect::route('admin.celebrations.index');
	}

}
