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
		<title>Edit Buildings</title> 	<!-- Change Title to the page you\'re working on-->
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
			<div class = "container">
				<div class = "row">
					<div class = "col-xs-12">
						<h1>Edit Buildings</h1>
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-12">
						Name: <input type = "text" id = "BuildingName">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-12">
						Address: <input type = "text" id = "BuildingAddress">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-12">
						City: <input type = "text" id = "BuildingCity">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Province: <input type = "text" id = "BuildingProvince"> 
					</div>
					<div class = "col-xs-6">
						Postal Code: <input type = "text" id = "BuildingPostalCode"> 
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-12">
						Notes: <input type = "text" id = "BuildingNotes"> 
					</div>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-6">
					<button type = "button" class = "btn btn-primary" id = "BuildingEditExit">Exit</button> 
				</div>
				<div class = "col-xs-6">
					<button type = "button" class = "btn btn-primary" id = "BuildingEditSaveAndExit">Save and Exit</button> 
				</div>
			</div>
		</body>
</html>
	';
}
?>
