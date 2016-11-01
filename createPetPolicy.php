<?php
require ('scripts/phpMaster.php');
$auth = new Auth(); //Creates objects for Auth methods.
$auth->adminland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
echoDefaultHTML();

//FUNCTION ZONE
function echoDefaultHTML() {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1></h1>
		<a href="changePassword.php">Change Password</a><br>
		<a href="logout.php">Logout</a>
	</body>
	</html>
	';
}
?>
