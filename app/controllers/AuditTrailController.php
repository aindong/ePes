<?php

class AuditTrailController extends \BaseController {

	/**
	 * Display a listing of logs
	 *
	 * @return Response
	 */
	public function index()
	{
		$logs = Log::all();

		return View::make('admin.logs.index', compact('logs'));
	}

	/**
	 * Show the form for creating a new log
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.logs.create');
	}

	/**
	 * Store a newly created log in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Log::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Log::create($data);

		return Redirect::route('admin.logs.index');
	}

	/**
	 * Display the specified log.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$log = Log::findOrFail($id);

		return View::make('admin.logs.show', compact('log'));
	}

	/**
	 * Show the form for editing the specified log.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$log = Log::find($id);

		return View::make('admin.logs.edit', compact('log'));
	}

	/**
	 * Update the specified log in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$log = Log::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Log::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$log->update($data);

		return Redirect::route('admin.logs.index');
	}

	/**
	 * Remove the specified log from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Log::destroy($id);

		return Redirect::route('admin.logs.index');
	}

}
