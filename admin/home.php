<?php
require ('../scripts/phpMaster.php');
$auth = new Auth(); //Creates objects for Auth methods.
$auth->adminland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
echoDefaultHTML();

//FUNCTION ZONE
function echoDefaultHTML() {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>Admin Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Manage Complaints">
		<meta name="author" content="Riley W.F and Richard O">
		<link rel="stylesheet" type="text/css" href="../styles/mystyle.css">
		<script src="../scripts/script.js"> </script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="scripts/DataTables-1.10.5/media/css/jquery.dataTables.css">
        <!-- Our Script File -->
        <script src="../scripts/data_tables.js"></script>
        <script src="../scripts/script.js"></script>
		';
	include '../libs/header.html';
	include '../libs/menuButtons.html';
	echo '
	</head>
	<body>';


		echo '

	</head>
	<body>
		<h1>
		Admin Home
		userlvl: ' . $_SESSION['userlvl'] . '
		account_id: ' . $_SESSION["account_id"] . '
		</h1>

		

		
	</body>';
	echo '
	
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	</div>
	</div>
	</div>
	


	<div class="row">
	<div class="col-sm-6 btn-group btn-group-lg">
	<br> 
	<br> 
	<p>
	<pre>
	a
	whole 
	lot 
	of 
	space 
	to 
	fill
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</pre>
	</div>
	</div>
	</html>
	';
		include '../libs/footer.php';
echo '
	</body>
</html>';
}
?>
