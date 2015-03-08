<?php

class CelebrationsController extends \BaseController {

	/**
	 * Display a listing of celebrations
	 *
	 * @return Response
	 */
	public function index()
	{
		$celebrations = Celebration::all();

		return View::make('admin.celebrations.index', compact('celebrations'));
	}

    /**
     * Display a listing of the resource.
     * GET /events
     *
     * @return Response
     */
    public function events()
    {
        $events = Celebration::all();

        $result = [];
        foreach ($events as $event) {
            $result[] = [
                'id'    => $event->id,
                'title' => $event->name,
                'start' => $event['start_at'],
                'end'   => $event['end_at']
            ];
        }

        return Response::json($result);
    }

    public function eventsSingle($id)
    {
        $event = Celebration::findOrFail($id);

        return Response::json($event);
    }

	/**
	 * Show the form for creating a new celebration
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.celebrations.create');
	}

	/**
	 * Store a newly created celebration in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Celebration::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}


        // convert start_at and end _at to store in mysql
//        $test = date('Y-m-d H:i:s', strtotime($data['start_at']));
//        print_r($test); exit;
//        $data['end_at'] = date('Y-m-d H:i:s', strtotime($data['end_at']) );
//        print_r($data); exit;
		Celebration::create($data);

		return Redirect::route('admin.events.index');
	}

	/**
	 * Display the specified celebration.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$celebration = Celebration::findOrFail($id);

		return View::make('admin.celebrations.show', compact('celebration'));
	}

	/**
	 * Show the form for editing the specified celebration.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$celebration = Celebration::find($id);

		return View::make('admin.celebrations.edit', compact('celebration'));
	}

	/**
	 * Update the specified celebration in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$celebration = Celebration::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Celebration::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

//        // convert start_at and end _at to store in mysql
//        $data['start_at'] = date('Y-m-d H:i:s', strtotime($data['start_at']));
//        $data['end_at'] = date('Y-m-d H:i:s', strtotime($data['end_at']) );

		$celebration->update($data);

		return Redirect::route('admin.events.index');
	}

	/**
	 * Remove the specified celebration from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Celebration::destroy($id);

		return Redirect::route('admin.events.index');
	}

}
