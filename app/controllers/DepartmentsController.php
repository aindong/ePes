<?php

class DepartmentsController extends \BaseController {

	/**
	 * Display a listing of departments
	 *
	 * @return Response
	 */
	public function index()
	{
		$departments = Department::all();

		return View::make('departments.index', compact('departments'));
	}

	/**
	 * Show the form for creating a new department
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('departments.create');
	}

	/**
	 * Store a newly created department in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Department::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Department::create($data);

		return Redirect::route('departments.index');
	}

	/**
	 * Display the specified department.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$department = Department::findOrFail($id);

		return View::make('departments.show', compact('department'));
	}

	/**
	 * Show the form for editing the specified department.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$department = Department::find($id);

		return View::make('departments.edit', compact('department'));
	}

	/**
	 * Update the specified department in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$department = Department::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Department::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$department->update($data);

		return Redirect::route('departments.index');
	}

	/**
	 * Remove the specified department from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Department::destroy($id);

		return Redirect::route('departments.index');
	}

}
