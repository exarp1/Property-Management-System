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
		<title>Create Building Work Orders</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Create Workorders">
		<meta name="author" content="Richard O">
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
		<script src="../scripts/script.js"> </script>

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">

		<!-- jQuery -->
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<!-- DataTables -->
		<script type="text/javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>';


	// This loads the dataTable API
	echo '
		</head>
		<body>
		';

	include 'libs/header.html';
	include 'libs/menuButtons.html';

	echo '
		<div class="container col-sm-12 ">
		<h1>Create A Building Work Order</h1>

		<div class="col-sm-12">
			<p><textarea cols="40" rows="10" name="workOrderText">blah blah blah address of building will go here: 
			it is posted from the "create Workorder" form.</textarea></p>
		   </div>
		
		<hr></hr>
		<h1>Work Order Details</h1>
		<div class="row">
		   <div class="col-sm-6">
		   <p>Work Order ID:</p>
		   </div>
		   <div class="col-sm-6">
		   <p id="workOrderID"> 1234 </p>
		   </div>
		</div>
		<div class="row">
		   <div class="col-sm-6">
		   <p>Work Order #:</p>
		   </div>
		   <div class="col-sm-6">
		   <p><input type="text" name="workOrderNumber" value="1234341234"></input></p>
		   </div>
		</div>
		<div class="row">
		   <div class="col-sm-6">
		   <p>Work to be done:</p>
		   </div>
		   <div class="col-sm-6">
			<p><textarea cols="60" rows="10" name="workOrderText">blah blah blah lots of work to be done.</textarea></p>
		   </div>
		</div>


		<!--control buttons -->
		<div class = "container">
		<div class = "row">
		<div class = "col-sm-12 btn-group">
		<br>
		<br>
		<!--function calls here for changing the status field -->
		<!-- we might be able to just use the dataTables to change the status thorugh OnClick()-->
		<a href="/createWorkorder.php" class="btn-lg btn-primary" role="button">Submit</a>
		<a href="/admin/home.php" class="btn-lg btn-primary" role="button">Exit</a>
		</div>
		</div>
		</div>


		<!-- Default links to return to main menu or exit -->
		<div class="row">
		<div class="col-sm-6 btn-group btn-group-lg">
		<br> 
		<br> 
		<a href="/admin/home.php" class="btn-lg btn-primary" role="button">Home</a>
		<a href="/logout.php" class="btn-lg btn-primary" role="button">Logout</a>
		</div>
		</div>

		</body>
		</html> ';
}// end echoDefaultHTML()

?>
