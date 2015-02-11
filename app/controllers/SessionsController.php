<?php


class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function login()
	{
		$data = Input::all();

		$attempt = Auth::attempt([
			'employee_no' 	=> $data['employee_no'],
			'password'		=> $data['password']
		]);

		if (Auth::check() == false) {
			Session::flash('error', 'Invalid user credentials please check your username or password');
			return Redirect::back();
		}

		$user = Auth::getUser();

		$log = new AuditTrail();
		$log->user_id	= Auth::getUser()->id;
		$log->action 	= 'User has logged in';
		$log->save();

		// Roles distinction
		if ($user->role->name == 'admin') {
			return Redirect::to('/admin');
		} else if ($user->role->name == 'employee') {
			return Redirect::to('/employees');
		} else if ($user->role->name == 'department head' || $user->role->name == 'supervisor') {
			return Redirect::to('/supervisors');
		}

		Session::flash('error', 'Invalid user credentials please check your username or password');
		return Redirect::back();
	}


	/**
	 * Logout an authenticated user
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function logout()
	{
//		$log = new AuditTrail();
//		$log->user_id	= Auth::getUser()->id;
//		$log->action 	= 'User has logged out';
//		$log->save();

		Auth::logout();
		return Redirect::to('/');
	}


}