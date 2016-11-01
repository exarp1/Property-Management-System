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
		<title>Create Work Orders</title>
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
		<script>
		// buildings table
		$(document).ready( function () {
				<!-- here is where you put the table ID -->
				$("#buildings").dataTable({
					"scrollY":	"350px",
					"scrollCollapse": true,
					"paging":		false
					} );
				} );
		
		// units table
				$(document).ready( function () {
		<!-- here is where you put the table ID -->
		$("#units").dataTable({
			"scrollY":	"350px",
			"scrollCollapse": true,
			"paging":		false
			} );
		} );
	</script>';
		include 'libs/header.html';
		include 'libs/menuButtons.html';
		echo '
		</head>
		
		<body>
		<div class="container">
	
			<h1> Select either a Building or a Unit to maintain below: </h1>
			<h2>Select a Building</h2>
			<table id="buildings" class="display">
				<thead>
					<tr>
						<th>Work Order ID</th>
						<th>Building ID</th>
						<th>Unit ID</th>
						<th>Complaint ID</th>
						<th>Work Complete</th>
						<th>Work Remaining</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td>12345678</td>
					<td>12345678</td>
					<td>12345678</td>
					<td>1234</td>
					<td>Here is the work that has been completed</td>
					<td>Here is the work that remains to be done</td>
					</tr>
					
					<tr>
					<td>12345678</td>
					<td>12345678</td>
					<td>12345678</td>
					<td>1234</td>
					<td>Here is the work that has been completed</td>
					<td>Here is the work that remains to be done</td>
					</tr>
					
					<tr>
					<td>12345678</td>
					<td>12345678</td>
					<td>12345678</td>
					<td>1234</td>
					<td>Here is the work that has been completed</td>
					<td>Here is the work that remains to be done</td>
					</tr>
					
					<tr>
					<td>12345678</td>
					<td>12345678</td>
					<td>12345678</td>
					<td>1234</td>
					<td>Here is the work that has been completed</td>
					<td>Here is the work that remains to be done</td>
					</tr>
					
					<tr>
					<td>12345678</td>
					<td>12345678</td>
					<td>12345678</td>
					<td>1234</td>
					<td>Here is the work that has been completed</td>
					<td>Here is the work that remains to be done</td>
					</tr>
					
					<tr>
					<td>12345678</td>
					<td>12345678</td>
					<td>12345678</td>
					<td>1234</td>
					<td>Here is the work that has been completed</td>
					<td>Here is the work that remains to be done</td>
					</tr>
					
					<tr>
					<td>12345678</td>
					<td>12345678</td>
					<td>12345678</td>
					<td>1234</td>
					<td>Here is the work that has been completed</td>
					<td>Here is the work that remains to be done</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Work Order ID</th>
						<th>Building ID</th>
						<th>Unit ID</th>
						<th>Complaint ID</th>
						<th>Work Complete</th>
						<th>Work Remaining</th>
					</tr>
				</tfoot>
			</table>
			
			<br>
			<br>
			
			<h2>Select a Unit</h2>
			<table id="units" class="display">
			<thead>
			<tr>
			<th>Work Order ID</th>
			<th>Building ID</th>
			<th>Unit ID</th>
			<th>Complaint ID</th>
			<th>Work Complete</th>
			<th>Work Remaining</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			</tbody>
			<tr>
			<td>12345678</td>
			<td>12345678</td>
			<td>12345678</td>
			<td>1234</td>
			<td>Here is the work that has been completed</td>
			<td>Here is the work that remains to be done</td>
			</tr>
			<tfoot>
			<tr>
			<th>Work Order ID</th>
			<th>Building ID</th>
			<th>Unit ID</th>
			<th>Complaint ID</th>
			<th>Work Complete</th>
			<th>Work Remaining</th>
			</tr>
			</tfoot>
			</table>

		<!--Complaints buttons -->
	
			<div class = "row">
			<div class = "col-sm-6">
			<br>
			<br>
			<a href="/createBuildingWorkorder.php" class="btn-lg btn-primary" role="button">Create Building Workorder</a>
			<a href="/createUnitWorkorder.php" class="btn-lg btn-primary" role="button">Create Unit Workorder</a>
			</div>
			</div>
			
			<br>
			<br>
			
				   <!--control buttons -->
				   
	  <div class = "row">
		 <div class = "col-sm-12 btn-group">

			<a href="/createWorkorder.php" class="btn-lg btn-primary" role="button">Submit</a>
			<a href="/admin/home.php" class="btn-lg btn-primary" role="button">Exit</a>
		 </div>
	  </div>
		
		</div>


		</body>
		</html> ';
}// end echoDefaultHTML()

?>
