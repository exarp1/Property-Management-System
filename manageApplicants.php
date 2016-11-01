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
		<title>Manage Tenants</title> 	<!-- Change Title to the page youre working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Application"> 	<!-- Change the contents of the content="" to a description of the page -->
		<meta name="author" content="E.Schwanke"> <!-- insert your name into the content if your the author -->
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css"> <!-- if you make a new .css insert where it is located in the href tag -->
		<!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="scripts/DataTables-1.10.5/media/css/jquery.dataTables.css">		  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.js"></script>		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>
		<!-- Our Script File -->
		<script src="scripts/data_tables.js"></script>';
		echo echoJavascript();
		echo'
		<script>
		$(document).ready(function() {
			$(\'#BuildingTable\').dataTable({
				"initComplete": function() {
					var api = this.api();
					api.$(\'td\').click( function () {
						api.search( this.innerHTML ).draw();
					} );
				},
				"data": buildingData,
				"columns": [
					{ "title": "ID", "data": "building_id" },
					{ "title": "Name", "data": "name" },
					{ "title": "Address", "data": "address" },
					{ "title": "City", "data": "city" },
					{ "title": "Province", "data": "province" },
					{ "title": "Notes", "data": "building_notes" }
				]
			});
			$(\'#UnitTable\').dataTable({
				"initComplete": function() {
					var api = this.api();
					api.$(\'td\').click( function () {
						api.search( this.innerHTML ).draw();
					} );
				},
				"data": unitData,
				"columns": [
					{ "title": "ID", "data": "unit_id" },
					{ "title": "Building ID", "data": "building_id" },
					{ "title": "Unit Number", "data": "unit_number" },
					{ "title": "Notes", "data": "unit_notes" }
				]
			});
			$(\'#TenantTable\').dataTable({
				"initComplete": function() {
					var api = this.api();
					api.$(\'td\').click( function () {
						api.search( this.innerHTML ).draw();
					} );
				},
				"data": tenantData,
				"columns": [
					{ "title": "Tenant ID", "data": "account_id" },
					{ "title": "First Name", "data": "firstname" },
					{ "title": "Last Name", "data": "lastname" },
					{ "title": "Home Phone", "data": "home_phone" },
					{"title": "Email", "data": "email"},
					{"title": "Notes", "data": "tenant_notes"}
					]
			});
		});
	</script>';
		include 'libs/header.html';
		include 'libs/menuButtons.html';
		echo '
	</head>
	<body>
		<div class = "container">
			<div class "row">
				<div class = "col-xs-12">
					<h1> Manage Tenants </h1>
				</div>
			</div>
			<div class "row">
				<div class = "col-xs-9">
					Select a Building
				</div>
				<div class = "col-xs-3">
					<button type="button" class="btn btn-primary" id ="ClearSelection">Clear Selection</button>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12">
					<table id="BuildingTable">
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12">
					Select a Unit
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12">
					<table id="UnitTable">
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12">
					Select a Tenant to Manage
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12">
					<table id="TenantTable">
					</table>
				</div>
			</div>
			<ul class="nav nav-tabs" role="tablist">
			<li><a href="manageTenants.php">Applicants</a></li>
			<li class = "active"><a href="manageApplicants.php">Current Tenant Actions</a></li>
			<li><a href="manageNotices.php">Notices</a></li>
			<li><a href="manageAccounts.php">Manage Accounts</a></li>        
			</ul>
			<div class = "row">
				<div class = "col-xs-12">
					</br>
					<button type="button" class="btn btn-primary" id ="CleaningList">Cleaning List</button>
					<button type="button" class="btn btn-primary" id ="InspectionReport">Inspection Report</button>
					<button type="button" class="btn btn-primary" id ="MoveOutReport">Move Out Report</button>
					<button type="button" class="btn btn-primary" id ="RentIncrease">Rent Increase</button>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12">
					</br>
					<button type="button" class="btn btn-primary" id ="RentReceipt">Rent Receipt</button>
					<button type="button" class="btn btn-primary" id ="MoveInReport">Move In Report</button>
					<button type="button" class="btn btn-primary" id ="PetPolicy">Pet Policy</button>
					<button type="button" class="btn btn-primary" id ="StatementOfAdjustment">Statement Of Adjustment</button>
				</div>
			</div>
			
		</div>
	</body>
</html>
	';
}

function echoJavaScript() {
$sqlLib = new SQL();
$string = $sqlLib->getAllBuildingRecordsInJson();
$string2 = $sqlLib->getAllUnitRecordsInJson();
$string3 = $sqlLib->getAllTenantsInJson();

echo '<script>
';
echo $string;
echo $string2;
echo $string3;
echo '
</script>';
}
?>
