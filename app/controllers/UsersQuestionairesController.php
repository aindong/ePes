<?php

class UsersQuestionairesController extends \BaseController {

	/**
	 * Display a listing of usersquestionaires
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_no = Auth::getUser()->employee_no;
		$usersquestionaires = Usersquestionaire::where('employee_no', '=', $employee_no)->get();

		return View::make('usersquestionaires.index', compact('usersquestionaires'));
	}

	/**
	 * Show the form for creating a new usersquestionaire
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usersquestionaires.create');
	}

	/**
	 * Store a newly created usersquestionaire in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usersquestionaire::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$data['employee_no'] = Auth::getUser()->employee_no;

		Usersquestionaire::create($data);

		return Redirect::route('usersquestionaires.index');
	}

	/**
	 * Display the specified usersquestionaire.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usersquestionaire = Usersquestionaire::findOrFail($id);

		return View::make('usersquestionaires.show', compact('usersquestionaire'));
	}

	/**
	 * Show the form for editing the specified usersquestionaire.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usersquestionaire = Usersquestionaire::find($id);

		return View::make('usersquestionaires.edit', compact('usersquestionaire'));
	}

	/**
	 * Update the specified usersquestionaire in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usersquestionaire = Usersquestionaire::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usersquestionaire::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usersquestionaire->update($data);

		return Redirect::route('usersquestionaires.index');
	}

	/**
	 * Remove the specified usersquestionaire from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usersquestionaire::destroy($id);

		return Redirect::route('usersquestionaires.index');
	}

}
