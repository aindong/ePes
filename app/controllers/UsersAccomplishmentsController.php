<?php

class UsersAccomplishmentsController extends \BaseController {

	/**
	 * Display a listing of usersaccomplishments
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usersaccomplishments = Usersaccomplishment::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersaccomplishments.index', compact('usersaccomplishments'));
	}

	/**
	 * Show the form for creating a new usersaccomplishment
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersaccomplishments.create');
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

		$data['employee_no'] = Auth::getUser()->employee_no;

		Usersaccomplishment::create($data);

		return Redirect::route('employees.accomplishments.index');
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

		return View::make('employees.usersaccomplishments.show', compact('usersaccomplishment'));
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

		return View::make('employees.usersaccomplishments.edit', compact('usersaccomplishment'));
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

		return Redirect::route('employees.accomplishments.index');
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

		return Redirect::route('employees.accomplishments.index');
	}

}
