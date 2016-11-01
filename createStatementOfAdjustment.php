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
		<title>Statement of Adjustment</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Statement of Adjustment"> 	<!-- Change the contents of the content="" to a description of the page -->
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
		<div class="container" id="StatementOfAdjustment"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1> Statement of Adjustment</h1>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-right">
					Date: <input type = "date" name = "AdjustmentDate" id = "AdjustmentDate">
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
				<div class = "col-xs-12 text-left">
					Details;
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type = "text" name = "AdjustmentDetails" id = "AdjustmentDetails">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					The security deposit in the amount <input type = "text" name = "SecurityDeposit" id = "SecurityDeposit"> will be used for the following:
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type = "text" name = "DepositDetails" id = "DepositDetails">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					Total: <input type = "text" name = "TotalRefund" id = "TotalRefund">
				</div>
			</div>
		</div>
	</body>
</html>
	';
}
?>
