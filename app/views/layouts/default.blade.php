<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle or 'Users Dashboard' }}</title>

    <!-- Bootstrap -->
    <link href="/packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Datatables bootstrap css plugin -->
    <link rel="stylesheet" href="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.css"/>
    <!-- Datetimepicker bootstrap css plugin -->
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css"/>
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="/packages/FullCalendar/fullcalendar.min.css"/>
    <!-- MASTER CSS -->
    <link rel="stylesheet" href="/css/style.css"/>
    @yield('page-style')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .lock {
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0px;
            z-index: 100;
        }

        .lock h1 {
            text-align: center;
            margin-top: 100px;
            font-weight: 600;
        }

        .lock p {
            text-align: center;
            font-weight: 400;
        }

        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
            color: #468847;
            background-color: #DFF0D8;
            border: 1px solid #D6E9C6;
        }

        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border: 1px solid #EED3D7;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            font-size: 0.9em;
            line-height: 0.9em;
            opacity: 0;

            transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -webkit-transition: all .3s ease-in;
        }

        .parsley-errors-list.filled {
            opacity: 1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="" width="50" height="40" style="margin-top: -10px;"/></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @if(Auth::getUser()->role->name == 'admin')
                <ul class="nav navbar-nav">
                    <li class="<?php echo Request::is('admin') ? 'active' : ''; ?>"><a href="/admin">Home <span class="sr-only">(current)</span></a></li>
                    <li class="<?php echo Request::is('admin/departments*') ? 'active' : ''; ?>"><a href="/admin/departments">Departments</a></li>
                    <li class="<?php echo Request::is('admin/positions*') ? 'active' : ''; ?>"><a href="/admin/positions">Positions</a></li>
                    <li class="<?php echo Request::is('admin/users*') ? 'active' : ''; ?>"><a href="/admin/users">Employees</a></li>
                    <li class="<?php echo Request::is('admin/events*') ? 'active' : ''; ?>"><a href="/admin/events">Events</a></li>
                    <li class="<?php echo Request::is('admin/jobvacancies*') ? 'active' : ''; ?>"><a href="/admin/jobvacancies">Job Vacancies</a></li>
                    <li class="<?php echo Request::is('admin/evaluations*') ? 'active' : ''; ?>"><a href="/admin/evaluations">Evaluation Schedules</a></li>

                    <li class="dropdown <?php echo Request::is('admin/pes*') || Request::is('admin/accomplishments*') ? 'active' : ''; ?>">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Reports <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/admin/pes">Performance Evaluations Reports</a></li>
                            <li><a href="/admin/accomplishments">Accomplishment Reports</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo Request::is('admin/skillsearch*') ? 'active' : ''; ?>"><a href="/admin/skillsearch">Skill Search</a></li>

                    <li class="<?php echo Request::is('admin/logs*') ? 'active' : ''; ?>"><a href="/admin/logs">Audit Trail</a></li>
                </ul>
                @elseif(Auth::getUser()->role->name == 'employee')
                    <ul class="nav navbar-nav">
                        <li  class="<?php echo Request::is('employees') ? 'active' : ''; ?>"><a href="/employees">Home <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown <?php echo Request::is('employees/pds*') ? 'active' : ''; ?>">
                            <a href="/employees/pds/bios">Personal Data Sheet</a>
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="/employees/pds/bios">Bio</a></li>--}}
                                {{--<li><a href="#">Family Background</a></li>--}}
                                {{--<li><a href="#">Educational Background</a></li>--}}
                                {{--<li><a href="#">Civil Service</a></li>--}}
                                {{--<li><a href="#">Work Experience</a></li>--}}
                                {{--<li><a href="#">Voluntary Work</a></li>--}}
                                {{--<li><a href="#">Training</a></li>--}}
                                {{--<li><a href="#">Hobby</a></li>--}}
                                {{--<li><a href="#">Recognition</a></li>--}}
                                {{--<li><a href="#">Organization</a></li>--}}
                                {{--<li><a href="#">Other Questions</a></li>--}}
                                {{--<li><a href="#">Reference</a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li class="<?php echo Request::is('employees/accomplishments') ? 'active' : ''; ?>"><a href="/employees/accomplishments">Accomplishments</a></li>
                        <li class="<?php echo Request::is('employees/pes*') ? 'active' : ''; ?>"><a href="/employees/pes">Performance Evaluation Results</a></li>
                    </ul>
                @elseif(Auth::getUser()->role->name == 'supervisor')
                    <ul class="nav navbar-nav">
                        <li class="<?php echo Request::is('supervisors') ? 'active' : ''; ?>"><a href="/supervisors">Home</a></li>
                        <li class="<?php echo Request::is('supervisors/accomplishments*') ? 'active' : ''; ?>"><a href="/supervisors/accomplishments">Employees</a></li>
                        <li class="<?php echo Request::is('supervisors/pes-results*') ? 'active' : ''; ?>"><a href="/supervisors/pes-results">Performance Evaluation Results</a></li>
                    </ul>
                @endif
                <ul class="nav navbar-nav navbar-right">
                    <li><a href=""><i><b>{{ strtoupper(Auth::getUser()->employee_no) }}</b></i></a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main">
        @if(Request::is('employees/pds*'))
        <div class="rows">
            <aside class="col-md-2">
                <ul>
                    <li><a href="/employees/pds/bios">Personal Information</a></li>
                    <!-- <li><a href="#">Family Background</a></li> -->
                    <li><a href="/employees/pds/educations">Educational Background</a></li>
                    <li><a href="/employees/pds/civil-services">Civil Service</a></li>
                    <li><a href="/employees/pds/work-experiences">Work Experience</a></li>
                    <li><a href="/employees/pds/voluntary-works">Voluntary Work</a></li>
                    <li><a href="/employees/pds/trainings">Training</a></li>
                    <li><a href="/employees/pds/hobbies">Hobby/Skills</a></li>
                    <li><a href="/employees/pds/recognitions">Recognition</a></li>
                    <li><a href="/employees/pds/organizations">Organization</a></li>
                    {{--<li><a href="/employees/pds/questionaires">Other Questions</a></li>--}}
                    <li><a href="/employees/pds/references">Reference</a></li>
                </ul>
            </aside>

            <div class="container col-md-10">
                @yield('content')
            </div>
        </div>
        @else
            <div class="container">
                @yield('content')
            </div>
        @endif
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/packages/bootstrap/js/bootstrap.min.js"></script>
<script src="/packages/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/moment.js"></script>
<script src="/packages/FullCalendar/fullcalendar.min.js"></script>
<script src="/js/parseley.min.js"></script>
@yield('page-script')
</body>
</html>