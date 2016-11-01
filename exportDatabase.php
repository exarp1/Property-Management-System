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
		<title>export database</title>
	</head>
	<body>
		<h1>EXPORT DATABASE</h1>

	</body>
	</html>
	';
}
?>
