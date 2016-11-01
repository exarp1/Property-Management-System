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
		<title>Edit Unit</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Manage Buildings"> 	<!-- Change the contents of the content="" to a description of the page -->
		<meta name="author" content="E.Schwanke"> <!-- insert your name into the content if your the author -->
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css"> <!-- if you make a new .css insert where it is located in the href tag -->
		<!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
		<body>
				';
		include "libs/header.html";
		echo'
			<div class = "container">
		
							<h1>Edit Unit</h1>
		
					
					<div class = "row">
						<div class = "col-xs-3">
							<p>Building ID<p>
						</div>
						<div class = "col-xs-9">
							<p id = "BiuldingID">The selected building ID(use ID = BuildingID)</p>
						</div>
					</div>
	
		<br>
		<br>
		
			<div class = "row">
						<div class = "col-xs-3">
							<p>Building Address<p>
						</div>
						<div class = "col-xs-9">
							<p id = "BiuldingID">The selected building ID(use ID = BuildingAddress)</p>
						</div>
			</div>
			
			<br>
			<br>
					
					
				<div class = "row btn-group">
					<div class="col-xs-3">
						<button type = "button" class = "btn btn-primary" id = "UnitEditExit">Exit</button> 
					</div>
					<div class="col-xs-3">
						<button type = "button" class = "btn btn-primary" id = "UnitEditSaveAndExit">Save and Exit</button> 
					</div>
				</div>
			
			</div>
		</body>
</html>
	';
}
?>
