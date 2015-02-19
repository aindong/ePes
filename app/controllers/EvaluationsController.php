<?php

class EvaluationsController extends \BaseController {

	/**
	 * Display a listing of evaluations
	 *
	 * @return Response
	 */
	public function index()
	{
		$evaluations = Evaluation::all();

		return View::make('admin.evaluations.index', compact('evaluations'));
	}

	/**
	 * Show the form for creating a new evaluation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.evaluations.create');
	}

	/**
	 * Store a newly created evaluation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Evaluation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Evaluation::create($data);

		return Redirect::route('admin.evaluations.index');
	}

	/**
	 * Display the specified evaluation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$evaluation = Evaluation::findOrFail($id);

		return View::make('admin.evaluations.show', compact('evaluation'));
	}

	/**
	 * Show the form for editing the specified evaluation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$evaluation = Evaluation::find($id);

		return View::make('admin.evaluations.edit', compact('evaluation'));
	}

	/**
	 * Update the specified evaluation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$evaluation = Evaluation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Evaluation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$evaluation->update($data);

		return Redirect::route('admin.evaluations.index');
	}

	/**
	 * Remove the specified evaluation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Evaluation::destroy($id);

		return Redirect::route('admin.evaluations.index');
	}

}
