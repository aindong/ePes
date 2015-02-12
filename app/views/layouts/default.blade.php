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
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.css"/>
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
                    <li class="<?php echo Request::is('admin/users*') ? 'active' : ''; ?>"><a href="/admin/users">Users</a></li>
                    <li class="<?php echo Request::is('admin/events*') ? 'active' : ''; ?>"><a href="/admin/events">Events</a></li>
                    <li class="<?php echo Request::is('admin/jobvacancies*') ? 'active' : ''; ?>"><a href="/admin/jobvacancies">Job Vacancies</a></li>
                    <li class="<?php echo Request::is('admin/pes*') ? 'active' : ''; ?>"><a href="/admin/pes">Performance Evaluations Reports</a></li>
                    <li class="<?php echo Request::is('admin/accomplishments*') ? 'active' : ''; ?>"><a href="/admin/accomplishments">Accomplishment Reports</a></li>
                    <li class="<?php echo Request::is('admin/logs*') ? 'active' : ''; ?>"><a href="/admin/logs">Audit Trail</a></li>
                </ul>
                @elseif(Auth::getUser()->role->name == 'employee')
                    <ul class="nav navbar-nav">
                        <li  class="<?php echo Request::is('employees') ? 'active' : ''; ?>"><a href="/employees">Home <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown <?php echo Request::is('employees/pes*') ? 'active' : ''; ?>">
                            <a href="/employees/pes" data-toggle="dropdown" role="button" aria-expanded="false">Personal Data Sheet  <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/employees/bios">Bio</a></li>
                                <li><a href="#">Family Background</a></li>
                                <li><a href="#">Educational Background</a></li>
                                <li><a href="#">Civil Service</a></li>
                                <li><a href="#">Work Experience</a></li>
                                <li><a href="#">Voluntary Work</a></li>
                                <li><a href="#">Training</a></li>
                                <li><a href="#">Hobby</a></li>
                                <li><a href="#">Recognition</a></li>
                                <li><a href="#">Organization</a></li>
                                <li><a href="#">Other Questions</a></li>
                                <li><a href="#">Reference</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo Request::is('supervisors/pes*') ? 'active' : ''; ?>"><a href="#">Accomplishments</a></li>
                        <li class="<?php echo Request::is('supervisors/pes*') ? 'active' : ''; ?>"><a href="#">Performance Evaluation Results</a></li>
                    </ul>
                @elseif(Auth::getUser()->role->name == 'supervisor')
                    <ul class="nav navbar-nav">
                        <li class="<?php echo Request::is('supervisors') ? 'active' : ''; ?>"><a href="/supervisors">Home</a></li>
                        <li class="<?php echo Request::is('supervisors/accomplishments*') ? 'active' : ''; ?>"><a href="/supervisors/accomplishments">Accomplishment Reports</a></li>
                        <li class="<?php echo Request::is('supervisors/pes*') ? 'active' : ''; ?>"><a href="/supervisors/pes">Evaluate an employee</a></li>
                    </ul>
                @endif
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main">
        <div class="container">
            @yield('content')
        </div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/packages/bootstrap/js/bootstrap.min.js"></script>
<script src="/packages/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<script src="/js/bootstrap-datetimepicker.js"></script>
<script src="/js/moment.js"></script>
<script src="/packages/FullCalendar/fullcalendar.min.js"></script>
@yield('page-script')
</body>
</html>