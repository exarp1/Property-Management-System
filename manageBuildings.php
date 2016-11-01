<?php
require ('scripts/phpMaster.php');
$auth = new Auth(); //Creates objects for Auth methods.
$auth->adminland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
echoDefaultHTML();
echoJavaScript();


//FUNCTION ZONE
function echoDefaultHTML() {
	echo '
	<!DOCTYPE html>
<html>
	<head>
		<title>Manage Buildings</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Manage Buildings"> 	<!-- Change the contents of the content="" to a description of the page -->
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
		'; echo echoJavaScript(); echo '	
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
				"initComplete": function () {
					var api = this.api();
					api.$(\'td\').click( function () {
						api.search(this.innerHTML).draw();
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
		});
	</script>
	</head>
	<!-- Body contents here -->
	<body>
		';
		include 'libs/header.html';
		include 'libs/menuButtons.html';
		echo'
		<div class="container" id="manageBuildings"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12">
					<h1>Manage Buildings</h1>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12">
					<h3>Buildings</h3>
					<table id="BuildingTable">
					
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" id = "BuildingAddBuilding" onclick = "addBuilding.php">Add Building</button> 
				</div>
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" id = "BuildingEditBuilding" onclick = "editBuilding.php">Edit Building</button> 
				</div>
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" id = "BuildingDeleteBuilding" onclick = "deleteBuilding.php">Delete Building</button> 
				</div>
			</div>
			
			<div class = "row">
				<div class = "col-xs-12">
					<h3>Units</h3>
					<table id="UnitTable">
					
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" id = "BuildingAddUnit" onclick = "addUnit.php">Add Unit</button> 
				</div>
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" id = "BuildingEditUnit" onclick = "editUnit.php">Edit Unit</button> 
				</div>
				<div class = "col-xs-4">
					<button type = "button" class = "btn btn-primary" id = "BuildingDeleteUnit" onclick = "deleteUnit.php">Delete Unit</button> 
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

echo '<script>
';
echo $string;
echo $string2;
echo '
</script>';
}
?>
