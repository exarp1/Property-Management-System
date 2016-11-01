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
		<title>Rental Check List (Move Out)</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Rental Check List (Move Out)"> 	<!-- Change the contents of the content="" to a description of the page -->
		<meta name="author" content="E.Schwanke"> <!-- insert your name into the content if your the author -->
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css"> <!-- if you make a new .css insert where it is located in the href tag -->
		<!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		';
		include 'libs/header.html';
		echo'
	</head>
	<body>
		<div class="container" id="RentalCheckListMoveOut"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1>Rental Check List (Move Out)</h1>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "ArrangeTimeAndDate" id ="ArrangeTimeAndDate"> Arrange time and date for move out inspection with tenant.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CompleteMoveOut" id ="CompleteMoveOut"> Complete move out inspection report.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "InventoryFurnitureReport" id ="InventoryFurnitureReport"> Complete a move out inventory / furniture report if applicable.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TenantsNewMailing" id ="TenantsNewMailing"> Get tenants new mailing address.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TenantCopyOfInspection" id ="TenantCopyOfInspection"> Give tenant copy of inspection report.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TenantCopyOfInventory" id ="TenantCopyOfInventory"> Give tenant copy of inventory / furniture report.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "SendDamageDeposit" id ="SendDamageDeposit"> Send damage deposit and statement of adjustment to new address or last known.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TakeMeterReadings" id ="TakeMeterReadings"> Take meter readings.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TakeMultiplePictures" id ="TakeMultiplePictures"> Take multiple pictures of each room.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CreatePDFfile" id ="CreatePDFfile"> Create PDF file of Move out inspection.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" name = "Exit" id = "Exit" onclick = "">Exit</button> 
				</div>
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" name = "Save" id = "Save" onclick = "">Save</button> 
				</div>
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" name = "SaveAndPrint" id = "SaveAndPrint" onclick = "">Save and Print</button> 
				</div>
			</div>
		</div>
		
	</body>
</html>
	';
}
?>
