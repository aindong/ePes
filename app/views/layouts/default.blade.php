<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle or 'Users Dashboard' }}</title>

    <!-- Bootstrap -->
    <link href="/packages/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Departments</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Users</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Events</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Job Vacancies</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Performance Evaluations Reports</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Accomplishment Reports</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Audit Trail</a>
                    </li>
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" data-toggle="dropdown" role="button" aria-expanded="false">Accomplishment Report  <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu" role="menu">--}}
                            {{--<li><a href="#">Create Accomplishment</a></li>--}}
                            {{--<li><a href="#">View Accomplishment</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
                @endif
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main">
        @yield('content')
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/packages/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>