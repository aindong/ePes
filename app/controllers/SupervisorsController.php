<?php

class SupervisorsController extends \BaseController {


    public function index()
    {
        $user = User::findOrFail(Auth::getUser()->id);
        return View::make('supervisors.dashboard', compact('user'));
    }

    public function pes($id)
    {
        $user = User::where('employee_no', '=', $id)->first();

        $schedule = Evaluation::orderBy('id', 'desc')->first();

        if (time() >= strtotime($schedule->start_at) && time() <= strtotime($schedule->end_at)) {
            return View::make('supervisors.pes', compact('user'));
        } else {
            return Redirect::back();
        }

    }

    public function updateUser($id)
    {
        if ($id != Auth::getUser()->id) {
           Session::flash('error', 'Error updating profile');
           return Redirect::back()->withInput();
        }

        $user = User::findOrFail($id);
        $user->firstname = Input::get('firstname');
        $user->lastname  = Input::get('lastname');
        $user->save();

        Session::flash('success', 'Successfully updated your profile');
        return Redirect::back();
    }

    public function doPes($id)
    {
        $schedule = Evaluation::orderBy('id', 'desc')->first();

        $data = Input::all();

        $duplicate = Pes::where('employee_no', '=', $id)->where('evaluation_id', '=', $schedule->id)->get();

        if ($duplicate->count() > 0) {
            //print_r($duplicate);
            Session::flash('error', 'Sorry, you have already evaluated this employee on this evaluation period.');
            return Redirect::route('supervisors.user.list');

        }

        $pes = new Pes();
        $pes->employee_no    = $id;
        $pes->evaluation_id  = $schedule->id;
        $pes->user_id        = Auth::getUser()->id;
        $pes->status         = 'inactive';
        $pes->q1             = $data['q1'];
        $pes->q2             = $data['q2'];
        $pes->q3             = $data['q3'];
        $pes->q4             = $data['q4'];
        $pes->q5             = $data['q5'];
        $pes->q6             = $data['q6'];
        $pes->q7             = $data['q7'];
        $pes->q8             = $data['q8'];
        $pes->q9             = $data['q9'];
        $pes->q10            = $data['q10'];

        $pes->save();

        Session::flash('success', 'Successfully evaluated an employee with employee number of '.$id);
        return Redirect::route('supervisors.user.list');
    }

    public function accomplishments()
    {
        $users = User::where('department_id', '=', Auth::getUser()->department_id)->where('role_id', '=', 4)->get();

        $schedule = Evaluation::orderBy('id', 'desc')->first();
        $evaluation = false;

        if (time() >= strtotime($schedule->start_at) && time() <= strtotime($schedule->end_at)) {
            $evaluation = true;
        } else {
            $evaluation = false;
        }

        //echo $schedule->id . ' - '. strtotime($schedule->start_at) . ' - ' . time() . ' - ' . strtotime($schedule->end_at). ' ' . $evaluation; exit;

        return View::make('supervisors.accomplishments', compact('users'))
            ->with('evaluation', $evaluation);
    }

    public function confirmAccomplishments($id, $status)
    {
        $accomplishment = UsersAccomplishment::findOrFail($id);
        $accomplishment->status = $status;
        $accomplishment->save();

        Session::flash('success', 'Successfully changed an accomplishment status');
        return Redirect::back();
    }

    public function profile()
    {
        return View::make('supervisors.profile');
    }

    public function singleAccomplishments($id)
    {

        $from = '';
        $to   = '';

        if (Input::has('from') && Input::has('to')) {
            $from = strtotime(Input::get('from'));
            $to = strtotime(Input::get('to'));

            $range = [
                \Carbon\Carbon::createFromTimestamp($from),
                \Carbon\Carbon::createFromTimestamp($to)
            ];

            $accomplishments = UsersAccomplishment::where('employee_no', '=', $id)
                ->whereBetween('dateto', $range)
                ->get();
        } else {
            $accomplishments = UsersAccomplishment::where('employee_no', '=', $id)->get();
        }

        //print_r($accomplishments);
        return View::make('supervisors.singleaccomplishments', compact('accomplishments'))
            ->with('employee_no', $id);
    }

    public function viewPds($employee)
    {
        // Get user bio
        $bio = UsersBio::where('employee_no', '=', $employee)->first();

        // Get user education
        $educations = UsersEducation::where('employee_no', '=', $employee)->get();

        $education = [];

        foreach ($educations as $education) {
            switch ($education->level) {
                case 'elementary':
                    $education['elementary'] = $education;
                    break;
                case 'secondary':
                    $education['secondary']  = $education;
                    break;
                case 'vocational':
                    $education['vocational'] = $education;
                    break;
                case 'college':
                    $education['college']    = $education;
                    break;
                case 'graduate studies':
                    $education['graduate']   = $education;
                    break;
            }
        }

        // Get user civil service
        $civils = UsersCivilService::where('employee_no', '=', $employee)->get();

        // Get user work experience
        $works = UsersWorkExperience::where('employee_no', '=', $employee)->get();

        // Get user voluntary work
        $voluntary = UsersVoluntaryWork::where('employee_no', '=', $employee)->get();

        // Get user training
        $trainings = UsersTraining::where('employee_no', '=', $employee)->get();

        // Get user hobbies
        $hobbies = UsersHobby::where('employee_no', '=', $employee)->get();

        // Get user recognitions
        $recognitions = UsersRecognition::where('employee_no', '=', $employee)->get();

        // Get user organizations
        $organizations = UsersOrganization::where('employee_no', '=', $employee)->get();

        return View::make('supervisors.pds')
            ->with('bio', $bio)
            ->with('educations', $educations)
            ->with('works', $works)
            ->with('voluntary', $voluntary)
            ->with('trainings', $trainings)
            ->with('hobbies', $hobbies)
            ->with('recognitions', $recognitions)
            ->with('organizations', $organizations)
            ->with('civils', $civils);
    }

    public function pesSingle($id, $emp)
    {
        $evaluation = Pes::findOrFail($id);
        $user = User::where('employee_no', '=', $emp)->first();
        return View::make('admin.pes-single')
            ->with('evaluation', $evaluation)
            ->with('user', $user);
    }

    public function pesResults()
    {
        $evaluations = Evaluation::all();

        $schedules = [];
        foreach ($evaluations as $key => $evaluation) {
            $schedules[$evaluation['id']] = date('M d Y', strtotime($evaluation['start_at'])) . ' - ' . date('M d Y', strtotime($evaluation['end_at']));
        }
        $employee_no = Auth::getUser()->employee_no;

        if (Input::has('schedule')) {
            $sched = Input::get('schedule');
            $results = Pes::where('evaluation_id', '=', $sched)
                ->get();
        } else {
            $results = Pes::all();
        }

        $finals = [];
        foreach ($results as $result) {
            if ($result->user->department_id == Auth::getUser()->department_id) {
                $performance = (((int)$result->q1 + (int)$result->q2 + (int)$result->q3) / 3) * 0.7;
                $critical    = (((int)$result->q4 + (int)$result->q5 + (int)$result->q6 + (int)$result->q7
                            + (int)$result->q8 + (int)$result->q9 + (int)$result->q10) / 7) * 0.3;
                $overall     = (int)$performance + (int)$critical;

                $adjective = 'P';
                if ($overall > 8) {
                    $adjective = 'O (OUTSTANDING)';
                } else if ($overall > 6 && $overall <= 8) {
                    $adjective = 'VS (VERY SATISFACTORY)';
                } else if ($overall > 4 && $overall <= 6) {
                    $adjective = 'S (SATISFACTORY)';
                } else if ($overall > 2 && $overall <= 4) {
                    $adjective = 'U (UNSATISFACTORY)';
                } else if ($overall <= 2) {
                    $adjective = 'P (POOR)';
                }

                $firstname = '';
                $lastname  = '';
                if (isset($result->user->bio->lastname)) {
                    $lastname = $result->user->bio->lastname;
                }

                if (isset($result->user->bio->firstname)) {
                    $firstname = $result->user->bio->firstname;
                }

                $finals[] = [
                    'id'          => $result->id,
                    'employee_no' => $result->employee_no,
                    'name'        => $lastname . ', ' . $firstname,
                    'performance' => $performance,
                    'critical'    => $critical,
                    'overall'     => $overall,
                    'adjective'   => $adjective,
                    'status'      => $result->status,
                    'evaluator'   => $result->evaluator->firstname . ' ' . $result->evaluator->lastname
                ];
            }
        }

        return View::make('admin.pes')
            ->with('schedules', $schedules)
            ->with('finals', $finals);
    }
}