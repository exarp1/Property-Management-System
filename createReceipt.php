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
		<title>Cleaning List</title> 	<!-- Change Title to the page you\'re working on-->
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
	<!-- Body contents here -->
	<body>
		';
		include 'libs/header.html';
		echo'
		<div class="container" id="Cash Receipt"> <!-- Unique name will help in the future if we just want to edit a certain area -->
				<div class = "row">
					<div class = "col-xs-12 text-center">
						<h1>Cash Receipt</h1>
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-12 text-right">
						Date: <input type = "date" name = "receiptDate" id = "receiptDate">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6 text-left">
						From: <input type = "text" name = "tenantName" id = "tenantName">
					</div>
					<div class = "col-xs-6 text-left">
						<input type = "text" name = "cashAmountNumber" id = "cashAmountNumber">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-12 text-left">
						Amount: <input type = "text" name = "receiptAmountText" id = "receiptAmountText">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-12 text-left">
						Purpose: <input type = "text" name = "receiptAmountText" id = "receiptAmountText">
					</div>
				</div>	
				<div class = "row">
					<div class = "col-xs-12 text-left">
						</br>
						<input type = "radio" class = "paymentType" name = "paymentType" id = "cashRadio" checked>Cash
						<input type = "radio" class = "paymentType" name = "paymentType" id = "chequeRadio">Cheque
						<input type = "radio" class = "paymentType" name = "paymentType" id = "moneyOrderRadio">Money Order
					</div>
				</div>	
				<div class = "row">
					<div class = "col-xs-6 text-right">
<!--	Insert siganture block here -->
					</div>
					<div class = "col-xs-6 text-right">
						<button type="button" class="btn btn-primary" id ="Exit">Exit</button>
						<button type="button" class="btn btn-primary" id ="Save">Save</button>
						<button type="button" class="btn btn-primary" id ="SaveAndPrint">Save and Print</button>
					</div>
				</div>
			</div>
	</body>
</html>
	';
}
?>
