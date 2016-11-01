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
		<title>Notice to Tenant to Enter</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Notice to Tenant to Enter"> 	<!-- Change the contents of the content="" to a description of the page -->
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
		<div class="container" id="NoticeToTenantToEnter"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1> Notice to Tenant to Enter</h1>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-right">
					Date: <input type = "date" name = "NoticeToEnterDate" id = "NoticeToEnterDate">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-6 text-center">
					Tenant 1: <input type = "text" name = "Tenant1Name" id = "Tenant1Name">
				</div>
				<div class = "col-xs-6 text-center">
					Tenant 2: <input type = "text" name = "Tenant2Name" id = "Tenant2Name">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					Address: <input type = "text" name = "TenantAddress" id = "TenantAddress">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					City: <input type = "text" name = "TenantCity" id = "TenantCity">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					This is to notify you that I intend to enter the premises.
				</div>
			</div>
			<div class = "row">	
				<div class = "col-xs-12 text-center">
					<input type = "text" name = "PremisesLocation" id = "PremisesLocation">
				</div>
			</div>
			<div class = "row">	
				<div class = "col-xs-12 text-center">
					On: <input type = "date" name = "EnterDate" id = "EnterDate"> between the hours of 
					<input type = "time" name = "EnterStartTime" id = "EnterStartTime"> and
					<input type = "time" name = "EnterEndTime" id = "EnterEndTime"> for the following purpose:
				</div>
			</div>
			<div class = "row">	
				<div class = "col-xs-12 text-center">
					<input type = "text" name = "EntryReason" id = "EntryReason">
				</div>
			</div>
			<div class = "row">	
				<div class = "col-xs-6 text-left">
					IMPORTANT NOTE: Written notice to enter premises must be served on the tenant at least 24 hours before the time of entry.
					Entry is only permitted between the hours of 8:00 AM, and 8:00 PM.
				</div>
				<div class = "col-xs-6 text-left">
					FOR FURTHER INFORMATION PLEASE CONTACT YOUR NEAREST LANDLORD AND TENENT ADVISORY BOARD
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
