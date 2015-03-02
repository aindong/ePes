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

	public function register()
	{
		$data = Input::all();

        if ($data['password'] != $data['password2']) {
            Session::flash('error', 'Password confirmation does not match');
            return Redirect::back()->withInput();
        }

		$user = User::where('employee_no', '=', $data['employee_no'])->first();

		if (is_null($user)) {
			Session::flash('error', 'Sorry but we cant find that employee number on our database');
			return Redirect::back()->withInput();
		}

		$user->password = $data['password'];
		$user->save();

        Session::flash('success', 'Successfully registered! You can try to login now.k');
        return Redirect::back()->withInput();
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