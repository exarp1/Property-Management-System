<?php
require ('scripts/phpMaster.php');
$auth = new Auth(); //Creates objects for Auth methods.
$auth->shareland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
if (ISSET($_POST['oldpassword']) & ISSET($_POST['newpassword']) & ISSET($_POST['newpassword2'])) {	
    if ($_POST['newpassword'] != $_POST['newpassword2']) {
        echoPasswordMismatchHTML();
        die();
    }
	$sqlLib = new SQL();
    $hash = $sqlLib->getAccountHashSQL($_SESSION["account_id"]);
    if (password_verify($_POST['oldpassword'], $hash)) {
        $newhash = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);    
		$sqlLib->setAccountPassSQL($newhash, $_SESSION["account_id"]);
        session_unset(); // remove all session variables 
        session_destroy(); // destroy the session
        echoPasswordChangedHTML();
		die();
    } else {
        echoBadPasswordHTML();
        die();
    }
} else {
	echoDefaultHTML();
    die();
}



//FUNCTION ZONE
function echoDefaultHTML() {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Change Password</title>
	</head>
	<body>
		<h1>Change Password</h1>
		<form action="changePassword.php" method="post">
			Current Password:<br>
			<input name="oldpassword" type="password" required/><br>
			New Password:<br>
			<input name="newpassword" type="password" required/><br>
			New Password:<br>
			<input name="newpassword2" type="password" required/><br>
			<br>
			<button type="submit">Submit</button>
		</form>
	</body>
	</html>
	';
}
function echoBadPasswordHTML() {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1>Login</h1>
		<p>Bad old password</p>
		<form action="changePassword.php" method="post">
			Current Password:<br>
			<input name="oldpassword" type="password" required/><br>
			New Password:<br>
			<input name="newpassword" type="password" required/><br>
			New Password:<br>
			<input name="newpassword2" type="password" required/><br>
			<br>
			<button type="submit">Submit</button>
		</form>
	</body>
	</html>
	';
}
function echoPasswordChangedHTML() {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Password Changed</title>
	</head>
	<body>
		<h1>Password Changed</h1>
		<a href="index.php">Login</a>
	</body>
	</html>
	';
}
function echoPasswordMismatchHTML() {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1>Login</h1>
		<p>New passwords dont match</p>
		<form action="changePassword.php" method="post">
			Current Password:<br>
			<input name="oldpassword" type="password" required/><br>
			New Password:<br>
			<input name="newpassword" type="password" required/><br>
			New Password:<br>
			<input name="newpassword2" type="password" required/><br>
			<br>
			<button type="submit">Submit</button>
		</form>
	</body>
	</html>
	';
}
?>
