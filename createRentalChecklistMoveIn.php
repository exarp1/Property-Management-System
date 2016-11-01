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
		<title>Rental Check List (Move In)</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Rental Check List (Move In)"> 	<!-- Change the contents of the content="" to a description of the page -->
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
	<style>	
	
	</style>
	<body>
		<div class="container" id="InspectionReport"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1>Rental Check List (Move In)</h1>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CompleteRentalApplication" id ="CompleteRentalApplication"> Complete Rental Application
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "GetDeposit" id ="GetDeposit"> Get Deposit with application
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CreditCheck" id ="CreditCheck"> Tell tenants a credit check will be performed, watch body language.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CallReferences" id ="CallReferences"> Call references, Ask if they where good renters, Would rent again?, Noisy? Damages.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TakeMultiplePictures" id ="TakeMultiplePictures"> Take multiple pictures of each room, appliances, furniture and inventory.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "Copy2forms" id ="Copy2forms"> Copy 2 forms of ID, both sides, same as app.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "GetCertifiedFunds" id ="GetCertifiedFunds"> Get certified funds for remaining security deposit.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "PostDatedChequeBegin" id ="PostDatedChequeBegin"> Post dated cheque for beginning day of rental period.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CompleteAMove-in" id ="CompleteAMove-in"> Complete a move-in inspection report.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CopyOfUtility" id ="CopyOfUtility"> Give tenant copy of Utility Contact Info.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "LeaseAgreement" id ="LeaseAgreement"> Complete lease agreement.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "Acknowledgement" id ="Acknowledgement"> Confirm tenant signed "Acknowledgement of receiving a copy of the lease."
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "MoveInInventory" id ="MoveInInventory"> Complete a move in inventory / furniture report if applicable.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TransferredUtilities" id ="TransferredUtilities"> Confirm tenant has transferred utilities in their own name, before giving keys.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "ProvideKeys" id ="ProvideKeys"> Provide keys or door code.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "LandlordsName" id ="LandlordsName"> Provide Landlords name and phone number or agent info.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "CopyOfTheLease" id ="CopyOfTheLease"> Provide a copy of the lease to the tenant.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "TakeMeterReadings" id ="TakeMeterReadings"> Take meter readings.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "ProvideCopyOfRules" id ="ProvideCopyOfRules"> Provide copy of rules.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "ProvideCleaningList" id ="ProvideCleaningList"> Provide cleaning list (in anticipation of the day they move out).
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "PostDatedChequeFirst" id ="PostDatedChequeFirst"> Post dated cheque for the first day of each month for 3 months.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "WelcomeLetter" id ="WelcomeLetter"> Welcome letter.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "SavePDFofApplication" id ="SavePDFofApplication"> Create and save PDF file of Application, Lease, Move-in inspection, furniture, pets. 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "DepositSecurityDep" id ="DepositSecurityDep"> Deposit security dep into ATB trust account.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type="checkbox" name = "DepositAllRentCheques" id ="DepositAllRentCheques"> Deposit all rent cheques into servus account.
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
