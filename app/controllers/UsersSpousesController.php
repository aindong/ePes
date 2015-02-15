<?php

class UsersSpousesController extends \BaseController {

	/**
	 * Display a listing of usersspouses
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usersspouses = Usersspous::where('employee_no', '=', $employee_no)->get();

		return View::make('usersspouses.index', compact('usersspouses'));
	}

	/**
	 * Show the form for creating a new usersspous
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usersspouses.create');
	}

	/**
	 * Store a newly created usersspous in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersspous::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		Usersspous::create($data);

		return Redirect::route('usersspouses.index');
	}

	/**
	 * Display the specified usersspous.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersspous = Usersspous::findOrFail($id);

		return View::make('usersspouses.show', compact('usersspous'));
	}

	/**
	 * Show the form for editing the specified usersspous.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersspous = Usersspous::find($id);

		return View::make('usersspouses.edit', compact('usersspous'));
	}

	/**
	 * Update the specified usersspous in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersspous = Usersspous::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersspous::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersspous->update($data);

		return Redirect::route('usersspouses.index');
	}

	/**
	 * Remove the specified usersspous from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersspous::destroy($id);

		return Redirect::route('usersspouses.index');
	}

}
