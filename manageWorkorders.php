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
		<title>Manage Work Orders</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Manage Workorders">
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
		echoJavascript();
	// This loads the dataTable API
	echo '
		<script>
		$(document).ready( function () {
				$("#workorder").dataTable({
					"initComplete": function() {
					var api = this.api();
					api.$(\'td\').click( function () {
						api.search( this.innerHTML ).draw();
					} );
				},
					"data": workOrderData,
					"columns": [
					{ "title": "Work Order ID", "data": "workorder_id" },
					{ "title": "Complaint ID", "data": "complaint_id" },
					{ "title": "Status", "data": "completed" },
					{ "title": "Details", "data": "work_details" }
					]
				});
		});
	</script>
		</head>
		<body>
		';

	include 'libs/header.html';
	include 'libs/menuButtons.html';

	echo '
		<div class="container ">
			<h1>Work Orders</h1>
			<table id="workorder" class="display">

			</table>

			<!--Complaints buttons -->
			<div class = "container">
				<div class = "row">
						<br>
						<br>
						<a href="/createWorkorder.php" class="btn-lg btn-primary" role="button">Create Workorder</a>
						<a href="/editWorkorder.php" class="btn-lg btn-success" role="button">Edit Workorder</a>
				</div>
			</div>


	
		</div>
		</body>
		</html> ';
}// end echoDefaultHTML()
function echoJavascript() {
	$sqlLib = new SQL();
	$string = $sqlLib->getAllWorkOrdersInJson();
	echo '<script>';
	echo $string;
	echo '</script>';
}
?>
