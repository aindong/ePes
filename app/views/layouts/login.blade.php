<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Tarlac Online Employee Performance Evaluation System</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #000;
	font-family: Arial;
	font-size: 12px;
	overflow: hidden;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(/images/tarlac-capitol.jpg);
	background-position: center;
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: -1;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: #000;
}

::-moz-input-placeholder{
   color: #000;
}

.logo img {
	margin-top: -35px;
}
</style>

	<link rel="stylesheet" href="/packages/bootstrap/css/bootstrap.min.css"/>
    <script src="/js/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>

      @if(Session::has('error'))
	  <div class="alert alert-danger">
		  {{ Session::get('error') }}
	  </div>
	  @endif

		<div class="grad"></div>
		<div class="header">
			<div class="logo"><img src="/images/logo.png"></div>
		</div>
		<br>
  		{{ Form::open(['url' => '/login', 'method' => 'post', 'class' => 'loginForm']) }}
		<div class="login">
			<legend>User Authentication</legend>
			<input type="text" placeholder="username" name="employee_no" class="form-control"><br>
			<input type="password" placeholder="password" name="password" class="form-control"><br>
			<input type="submit" class="btn btn-primary" value="Login">
			<button class="btn btn-default showRegister" type="button">Register</button>
		</div>
		{{ Form::close() }}

	  {{ Form::open(['url' => '/register', 'method' => 'post', 'class' => 'registerForm']) }}
	  <div class="login">
		  <legend>Registration</legend>
		  <input type="text" placeholder="username" name="employee_no" class="form-control" required="required"><br>
		  <input type="password" placeholder="password" name="password" class="form-control" required="required"><br>
		  <input type="submit" class="btn btn-primary" value="Register" class="form-control">
		  <button class="btn btn-default showLogin" type="button">Login</button>
	  </div>
	  {{ Form::close() }}

  <script src='/js/jquery.js'></script>

  <script>
	  $(function() {
		  var registerForm = $('.registerForm'),
			  loginForm	   = $('.loginForm'),
			  showLogin    = $('.showLogin'),
			  showRegister = $('.showRegister');


		  registerForm.fadeOut();

		  showLogin.on('click', function(e) {
			  registerForm.fadeOut();
			  loginForm.fadeIn();
		  });

		  showRegister.on('click', function(e) {
			  loginForm.fadeOut();
			  registerForm.fadeIn();
		  });
	  });
  </script>

</body>

</html>