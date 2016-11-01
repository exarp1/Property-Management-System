<?php
	if (!ISSET($_POST[""])) {
		foreach(getallheaders() as $name => $value) {
			echo "$name: $value\n";
		}
	echo 'Requires post data!';
	die();
	}
	require ('../phpMaster.php');
	$auth = new Auth(); //Creates objects for Auth methods.
	$auth->adminland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
	$sqlLib = new SQL();
	//echo $sqlLib->();
?>
