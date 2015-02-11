<?php

class JobvacanciesController extends \BaseController {

	/**
	 * Display a listing of jobvacanies
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobvacanies = Jobvacancy::all();

		return View::make('admin.jobvacancies.index', compact('jobvacancies'));
	}

	/**
	 * Show the form for creating a new jobvacany
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.jobvacancies.create');
	}

	/**
	 * Store a newly created jobvacany in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Jobvacancy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Jobvacancy::create($data);

		return Redirect::route('admin.jobvacancies.index');
	}

	/**
	 * Display the specified jobvacany.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$jobvacany = Jobvacancy::findOrFail($id);

		return View::make('admin.jobvacancies.show', compact('jobvacany'));
	}

	/**
	 * Show the form for editing the specified jobvacany.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jobvacany = Jobvacancy::find($id);

		return View::make('admin.jobvacancies.edit', compact('jobvacany'));
	}

	/**
	 * Update the specified jobvacany in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$jobvacany = Jobvacancy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Jobvacancy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$jobvacany->update($data);

		return Redirect::route('admin.jobvacancies.index');
	}

	/**
	 * Remove the specified jobvacany from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Jobvacancy::destroy($id);

		return Redirect::route('admin.jobvacancies.index');
	}

}
