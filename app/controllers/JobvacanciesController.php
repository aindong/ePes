<?php

class JobvacanciesController extends \BaseController {

	/**
	 * Display a listing of jobvacancies
	 *
	 * @return Response
	 */
	public function index()
	{
        $jobvacancies = Jobvacancy::all();

		return View::make('admin.jobvacancies.index', compact('jobvacancies'));
	}

    public function jobs($id)
    {
        $job = Jobvacancy::findOrFail($id);

        return Response::json($job, 200);
    }

	/**
	 * Show the form for creating a new jobvacancy
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.jobvacancies.create');
	}

	/**
	 * Store a newly created jobvacancy in storage.
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
		$jobvacancy = Jobvacancy::findOrFail($id);

		return View::make('admin.jobvacancies.show', compact('jobvacancy'));
	}

	/**
	 * Show the form for editing the specified jobvacany.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jobvacancy = Jobvacancy::find($id);

		return View::make('admin.jobvacancies.edit', compact('jobvacancy'));
	}

	/**
	 * Update the specified jobvacancy in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$jobvacancy = Jobvacancy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Jobvacancy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$jobvacancy->update($data);

		return Redirect::route('admin.jobvacancies.index');
	}

	/**
	 * Remove the specified jobvacancy from storage.
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
