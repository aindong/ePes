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
		$usersaccomplishments = UsersAccomplishment::where('employee_no', '=', $employee_no)->get();

		return View::make('employees.usersAccomplishments.index', compact('usersaccomplishments'));
	}

	/**
	 * Show the form for creating a new usersaccomplishment
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.usersAccomplishments.create');
	}

	/**
	 * Store a newly created usersaccomplishment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), UsersAccomplishment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		UsersAccomplishment::create($data);
        Session::flash('success', 'Successfully added a new accomplishment');
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
		$usersaccomplishment = UsersAccomplishment::findOrFail($id);

		return View::make('employees.usersAccomplishments.show', compact('usersaccomplishment'));
	}

	/**
	 * Show the form for editing the specified usersaccomplishment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersaccomplishment = UsersAccomplishment::find($id);

		return View::make('employees.usersAccomplishments.edit', compact('usersaccomplishment'));
	}

	/**
	 * Update the specified usersaccomplishment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersaccomplishment = UsersAccomplishment::findOrFail($id);

		$validator = Validator::make($data = Input::all(), UsersAccomplishment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersaccomplishment->update($data);
        Session::flash('success', 'Successfully updated an accomplishments');
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
		UsersAccomplishment::destroy($id);

		return Redirect::route('employees.accomplishments.index');
	}

}
