<?php
require ('scripts/phpMaster.php');
$auth = new Auth(); //Creates objects for Auth methods.
$auth->loginland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
if (ISSET($_POST['user']) & ISSET($_POST['password'])) {  
	$sqlLib = new SQL(); //Creates objects for interactions with SQL methods.
	$array = $sqlLib->getAccountRecordSQL($_POST['user']); //SQL Command getAccountRecordSQL
    if (password_verify($_POST['password'], $array["hash"])) { //Check Password & start session if true
		session_start();
        $_SESSION["userlvl"]   = $array["userlvl"];
        $_SESSION["account_id"] = $array["account_id"];
		if ($_SESSION["userlvl"] == 1)header("Location: admin/home.php");  //Sends user to adminhome if admin
        else header("Location: tenant/home.php"); //Else goes to tenanthome
        die();
    } else echoBadLoginHTML();
} else echoDefaultHTML();



//FUNCTION ZONE
function echoDefaultHTML() {
	echo '
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Login Page">
		<meta name="author" content="Riley Weasel Fat">
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
		<!-- bootstrap stuff -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		';
		include 'libs/header.html';
		echo '
		<div class="container-fluid">
			<!-- Top part of website -->
			<div class="container">
			</div>
			<!-- Login form -->
			<div class="container" id="LoginArea">
				<div class="row col-centered row-centered">
					<!-- current user login -->
					<div class="col-xs-6 col-min">
						<h1 class="text-center">Current user login</h1>
						<!-- Login stuff-->
						<form action="index.php" method="post">
							<!-- username -->
							<div class="form-group">
              					<label for="user">Name: </label>
              					<input name="user" placeholder="username" type="text" class="form-control" id="user" required/>
            				</div>
            				<!-- password -->
            				<div class="form-group">
              					<label for="password">Password: </label>
              					<input name="password" placeholder="password" type="password" class="form-control" id="password" required/>
           			 		</div>
           			 		<!-- Submit button -->
           			 		<button type="submit" class="btn-lg btn-primary">Login</button>
           			 	</form>
					</div>
					<!-- new user login -->
					<div class="col-xs-6 col-centered col-min">
						<h1 class="text-top">New user?</h1>
						<!-- apply button -->
						<a href="/newApplication.php" class="btn-lg btn-primary" role="button">Apply</a>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>';
}
function echoBadLoginHTML() {
	echo '
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Login Page">
		<meta name="author" content="Riley Weasel Fat">
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
		<!-- bootstrap stuff -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container-fluid">
			<!-- Top part of website -->
			<div class="container">
			</div>
			<!-- Login form -->
			<div class="container" id="LoginArea">
				<div class="row col-centered row-centered">
					<!-- current user login -->
					<div class="col-xs-6 col-min">
						<h1 class="text-center">Current user login</h1>
						<p id="ErrorMessage">Incorrect username or password!!</p>
						<!-- Login stuff-->
						<form action="index.php" method="post">
							<!-- username -->
							<div class="form-group">
              					<label for="user">Name: </label>
              					<input name="user" placeholder="username" type="text" class="form-control" id="user" required/>
            				</div>
            				<!-- password -->
            				<div class="form-group">
              					<label for="password">Password: </label>
              					<input name="password" placeholder="password" type="password" class="form-control" id="password" required/>
           			 		</div>
           			 		<!-- Submit button -->
           			 		<button type="submit" class="btn-default center">Submit</button>
           			 	</form>
					</div>
					<!-- new user login -->
					<div class="col-xs-6 col-centered col-min">
						<h1 class="text-top">New user?</h1>
						<!-- apply button -->
						<button type="submit" class="btn-default btn-lg" value="Redirect">Apply</button>
					</div>
				</div>
			</div>
		</div>
		<!-- DO NOT INCLUDE THIS NEXT DIV WHICH IS THE TEST AREA ON SOFTWARE RELEASE -->
		<div class="container" style="text-align: center;">
			<a href="test.html">Test Area</a><br />
		</div>
	</body>
</html>';
}
?>
