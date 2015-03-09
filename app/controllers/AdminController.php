<?php

class AdminController extends BaseController {

    public function index()
    {
        return View::make('admin.dashboard');
    }

    public function skillSearch()
    {
        $users = User::join('usersbios', 'users.employee_no', '=', 'usersbios.employee_no')
            ->join('usershobbies', 'users.employee_no', '=', 'usershobbies.employee_no')
            ->groupBy('users.employee_no')
            ->get();

        return View::make('admin.jobsearch')
            ->with('users', $users);
    }

    public function accomplishments()
    {
        $departments = Department::all();

        $departmentList = [];
        foreach($departments as $key => $department) {
            $departmentList[$department->id] = $department->name;
        }

        if (Input::has('department')) {
            $department = Input::get('department');
            $users = User::where('department_id', '=', $department)
                ->where('role_id', '=', 4)->get();
        } else {
            $users = User::where('role_id', '=', 4)->get();
        }

        return View::make('supervisors.accomplishments', compact('users'))
            ->with('departments', $departmentList);
    }

    public function pes()
    {
        $evaluations = Evaluation::all();

        $schedules = [];
        foreach ($evaluations as $key => $evaluation) {
            $schedules[$evaluation['id']] = date('M d Y', strtotime($evaluation['start_at'])) . ' - ' . date('M d Y', strtotime($evaluation['end_at']));
        }

        if (Input::has('schedule')) {
            $sched = Input::get('schedule');
            $results = Pes::where('evaluation_id', '=', $sched)->where('status', '=', 'active')->get();
        } else {
            $results = Pes::where('status', '=', 'active')->get();
        }

        $finals = [];
        foreach ($results as $result) {
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

        return View::make('admin.pes')
            ->with('schedules', $schedules)
            ->with('finals', $finals);
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
                ->where('status', '=', 'confirmed')
                ->get();
        } else {
            $accomplishments = UsersAccomplishment::where('employee_no', '=', $id)
                ->where('status', '=', 'confirmed')
                ->get();
        }

        //print_r($accomplishments);
        return View::make('supervisors.singleaccomplishments', compact('accomplishments'))
            ->with('employee_no', $id);
    }
}
