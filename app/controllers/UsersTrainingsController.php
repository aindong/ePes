<?php

class UsersTrainingsController extends \BaseController {

	/**
	 * Display a listing of userstrainings
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$userstrainings = Userstraining::where('employee_no', '=', $employee_no)->get();

		return View::make('userstrainings.index', compact('userstrainings'));
	}

	/**
	 * Show the form for creating a new userstraining
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userstrainings.create');
	}

	/**
	 * Store a newly created userstraining in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Userstraining::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		Userstraining::create($data);

		return Redirect::route('userstrainings.index');
	}

	/**
	 * Display the specified userstraining.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userstraining = Userstraining::findOrFail($id);

		return View::make('userstrainings.show', compact('userstraining'));
	}

	/**
	 * Show the form for editing the specified userstraining.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userstraining = Userstraining::find($id);

		return View::make('userstrainings.edit', compact('userstraining'));
	}

	/**
	 * Update the specified userstraining in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$userstraining = Userstraining::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Userstraining::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$userstraining->update($data);

		return Redirect::route('userstrainings.index');
	}

	/**
	 * Remove the specified userstraining from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Userstraining::destroy($id);

		return Redirect::route('userstrainings.index');
	}

}
