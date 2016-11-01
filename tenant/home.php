<?php
require ('../scripts/phpMaster.php');
$auth = new Auth(); //Creates objects for Auth methods.
$auth->userland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
echoDefaultHTML();

//FUNCTION ZONE
function echoDefaultHTML() {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<h1>Home</h1>
		userlvl: ' . $_SESSION['userlvl'] . '<br>
		account_id: ' . $_SESSION["account_id"] . '<br>
		<br>
		<a href="tennentComplaint.php">Create Complaint</a><br>
		<br>
		<a href="changePassword.php">Change Password</a><br>
		<a href="../logout.php">Logout</a>
	</body>
	</html>
	';
}
?>
