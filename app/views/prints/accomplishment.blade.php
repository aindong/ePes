<html>
<head>
    <link rel="stylesheet" href="/packages/bootstrap/css/bootstrap.min.css"/>
    <style>
        body {
            background-color: #fff;
            color: #000;
            font-family: Georgia, "Times New Roman", Times, serif;
        }
        h1, h2 {
            font-size: 14px;
            line-height: 0.2em;
            font-weight: 700;
        }
        li p {
            color: #000;
        }
        .center {
            text-align: center;
        }

        p {
            line-height: 0.5em;
        }

        hr {
            margin-top: 30px;
        }
        
        .logo {
            float: left;
        }

        .clear-both {
            clear: both;
        }
        .footer {
            position: absolute;
            bottom: 0;
        }
    </style>
    <title>Employees Accomplishments</title>
</head>
<body>
    <div class="container">
        <br/>
        <div class="header">
            <div>
                <div class="logo">
                    <img src="/images/tarlac.jpg" alt="" height="100" width="100" style="margin-bottom: 5px; margin-left: 10px;"/>
                </div>

                <div class="header-content">
                    <p class="center">Republic of the Philippines</p>
                    <p class="center" style="font-weight: 600; font-size: 14px;">Province of Tarlac</p>
                    <p class="center">Tarlac</p>

                    <br/>
                    <p class="center" style="font-weight: 600; font-size: 14px;">{{ $employee->department->name }}</p>
                </div>
            </div>
        </div>

        <hr/>

        <div class="clear-both"></div>

        <h1 style="text-align: center">Accomplishment Report</h1>
        <h2 style="text-align: center">{{ date('M d', strtotime(Input::get('from'))) }} - {{ date('M d, Y', strtotime(Input::get('to'))) }}</h2>

        <ul>
            @foreach($accomplishments as $accomplishment)
                <li><p>{{ $accomplishment->accomplishment }}</p></li>
            @endforeach
        </ul>

        <div class="footer">
            <div class="prepared">
                <p>Prepared by: </p>
                <br/>
                {{ $employee->bio->firstname }} {{ $employee->bio->lastname }}<br/>
                {{ $employee->position }}
            </div>
        </div>
    </div>

    <script src="/js/jquery.js"></script>
    <script src="/packages/bootstrap/js/bootstrap.min.js"></script>

    <script>
        function printMe() {
            window.print();
        }
    </script>
</body>
</html>