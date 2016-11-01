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
		<div class="container" id="manageBuildings"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1>Cleaning List</h1>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<input type = "checkbox" name = "cleanRefrigerator" id = "cleanRefrigerator"> Clean in, out, behind and under the fridge and defrost and clean the freezer.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">			
					<input type = "checkbox" name = "leaveRefrigeratorOpen" id = "leaveRefrigeratorOpen"> Leave the fridge doors open if the power has been turned off.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "cleanStove" id = "cleanStove"> Clean in, out, behind and under the stove and clean the oven and burners on the stove.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "washCupboards" id = "washCupboards"> Wash the cupboards inside and outside.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">	
					<input type = "checkbox" name = "cleanWindowTracks" id = "cleanWindowTracks"> Clean inside and outside of all windows/tracks, closet doors/tracks and patio doors/tracks.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "cleanWindows" id = "cleanWindows"> Wash windows inside and out.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "cleanWindowScreens" id = "cleanWindowScreens"> Wash window screens.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "washWalls" id = "washWalls"> Wash walls.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "washFloors" id = "washFloors"> Wash floors.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "dustWindowCoverings" id = "dustWindowCoverings"> Dust all window coverings.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "dustFansVents" id = "dustFansVents"> Dust and wash fans/vents, light fixtures.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "replaceBulbs" id = "replaceBulbs"> Replace burnt out light bulbs.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "checkSmokeDetector" id = "checkSmokeDetector"> Check the smoke detector, replace batteries as needed.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "cleanBathroom" id = "cleanBathroom"> Clean bathroom thoroughly including the tub, tile, sink, vanity, mirror, medicine cabinet, cupboards and toilet.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "vacuumCarpets" id = "vacuumCarpets"> Vacuum and clean the carpets.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "cleanUpPatio" id = "cleanUpPatio"> Clean up and sweep exterior patio area and steps.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "cleanParkingArea" id = "cleanParkingArea"> Clean parking area.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "changeFurnaceFilter" id = "changeFurnaceFilter"> Change furnace filter.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "changeWaterFilter" id = "changeWaterFilter"> Change water filter.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">		
					<input type = "checkbox" name = "shovelWalkway" id = "shovelWalkway"> Shovel Walkway.
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
