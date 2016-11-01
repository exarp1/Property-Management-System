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
		<title>Inspection Report</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Inspection Report"> 	<!-- Change the contents of the content="" to a description of the page -->
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
		.numberInput
		{
			width:4em;
		}
		input type = "number"
		{
			width:3em;
		}
		table, th, td		
		{
			border: 1px solid black;
			border-collapse: collapse;
		}
		legend
		{
			border-style:none;
			margin:0px;
			margin-left:25px;
			width:inherit;
		}
		fieldset
		{
		border:2px groove;
		}

		legend
		{
		color:black ;
		}	 
	</style>
	<!-- Body contents here -->
	<body>
		<div class="container" id="InspectionReport"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1>Inspection Report</h1>
				</div>
			</div>
			<hr></hr>
			<div class = "row">
				<div class = "col-xs-6 text-center">
					Date: <input type = "date" name = "moveInDate" id = "moveInDate">
				</div>
				<div class = "col-xs-6 text-center">
					Time: <input type = "time" name = "moveInTime" id = "moveInTime">
				</div>
				<div class = "col-xs-6 text-center">
					Date: <input type = "date" name = "moveOutDate" id = "moveOutDate">
				</div>
				<div class = "col-xs-6 text-center">
					Time: <input type = "time" name = "moveOutDate" id = "moveOutDate">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					</br>
					<input type = "radio" class = "moveType" name = "moveType" id = "moveIn" checked>Move In
					<input type = "radio" class = "moveType" name = "moveType" id = "moveOut">Move Out
					<hr></hr>	
				</div>
			</div>	
	
			<div class = "col-xs-12 text-left">
				Tenant
						
			</div>	

			<div class = "col-xs-12 text-center">
				Name: <input type = "text" name = "tenantName" id = "tenantName">
			</div>
			<div class = "col-xs-12 text-center">
				Unit No: <input type = "text" name = "tenantUnitNo" id = "tenantUnitNo">
			</div>
			<div class = "col-xs-12 text-center">
				City: <input type = "text" name = "tenantCity" id = "tenantCity">	
				<hr></hr>
			</div>

			<div class = "col-xs-12 text-center">
				Describe the condition of every area by number and add comments where applicable.
			</div>
			<div class = "col-xs-12 text-center">
				1. Clean / OK 2. Needs Cleaning 3. Needs Painting 4. Needs Repair 5. Missing
			<hr></hr>	
			
			<table>
				<tr>
					<th> Area </th>
					<th> Condition </th>
					<th> Notes</th>
					<th> Area </th>
					<th> Condition </th>
					<th> Notes</th>
				</tr>
				<tr>
					<td> Kitchen </td>
					<td>  </td>
					<td> </td>
					<td> Entrance / Hall / Stairwell </td>
					<td>  </td>
					<td> </td>
				</tr>
				<tr>
					<td> Stove </td>
					<td><input type = "number" class = "numberInput" name = "StoveCondition" id = "StoveCondition"></td>
					<td><input type = "text" name = "StoveNotes" id = "StoveNotes">	</td>
					<td> Doors / Closet </td>
					<td><input type = "number" class = "numberInput" name = "doorsClosetsCondition" id = "doorsClosetsCondition"></td>
					<td><input type = "text" name = "doorsClosetsNotes" id = "doorsClosetsNotes"></td>
				</tr>
				<tr>
					<td> Fridge </td>
					<td><input type = "number" class = "numberInput" name = "FridgeCondition" id = "FridgeCondition"></td>
					<td><input type = "text" name = "FridgeNotes" id = "FridgeNotes">	</td>
					<td> Walls / Stairwell </td>
					<td><input type = "number" class = "numberInput" name = "WallsStairwellCondition" id = "WallsStairwellCondition"></td>
					<td><input type = "text" name = "WallsStairwellNotes" id = "WallsStairwellNotes"></td>
				</tr>
				<tr>
					<td> Dishwasher </td>
					<td><input type = "number" class = "numberInput" name = "DishwasherCondition" id = "DishwasherCondition"></td>
					<td><input type = "text" name = "DishwasherNotes" id = "DishwasherNotes">	</td>
					<td> Floors / Stairs </td>
					<td><input type = "number" class = "numberInput" name = "FloorsStairsCondition" id = "FloorsStairsCondition"></td>
					<td><input type = "text" name = "FloorsStairsNotes" id = "FloorsStairsNotes"></td>
				</tr>
				<tr>
					<td> Counter-tops / Sink </td>
					<td><input type = "number" class = "numberInput" name = "Counter-topsSinkCondition" id = "Counter-topsSinkCondition"></td>
					<td><input type = "text" name = "Counter-topsSinkNotes" id = "Counter-topsSinkNotes"></td>
					<td> General </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
					<td> Walls / Ceiling </td>
					<td><input type = "number" class = "numberInput" name = "KitchenWallsCeilingsCondition" id = "KitchenWallsCeilingCondition"></td>
					<td><input type = "text" name = "KitchenWallsCeilingNotes" id = "KitchenWallsCeilingNotes"></td>
					<td> Furnace / Water Heater </td>
					<td><input type = "number" class = "numberInput" name = "FurnaceWaterHeaterCondition" id = "FurnaceWaterHeaterCondition"></td>
					<td><input type = "text" name = "FurnaceWaterHeaterNotes" id = "FurnaceWaterHeaterNotes"></td>
				</tr>
				<tr>
					<td> Floors </td>
					<td><input type = "number" class = "numberInput" name = "FloorsCondition" id = "FloorsCondition"></td>
					<td><input type = "text" name = "FloorsNotes" id = "FloorsNotes"></td>
					<td> Balcony: Door / Screen </td>
					<td><input type = "number" class = "numberInput" name = "BalconyDoorScreenCondition" id = "BalconyDoorScreenCondition"></td>
					<td><input type = "text" name = "BalconyDoorScreenNotes" id = "BalconyDoorScreenNotes"></td>
				</tr>
				<tr>
					<td> Windows / Screens </td>
					<td><input type = "number" class = "numberInput" name = "WindowsScreensCondition" id = "WindowsScreensCondition"></td>
					<td><input type = "text" name = "WindowsScreensNotes" id = "WindowsScreensNotes">	</td>
					<td> Storage / Basement </td>
					<td><input type = "number" class = "numberInput" name = "StorageBasementCondition" id = "StorageBasementCondition"></td>
					<td><input type = "text" name = "StorageBasementNotes" id = "StorageBasementNotes"></td>
				</tr>
				<tr>
					<td> Light Fixtures </td>
					<td><input type = "number" class = "numberInput" name = "LightFixturesCondition" id = "LightFixturesCondition"></td>
					<td><input type = "text" name = "LightFixturesNotes" id = "LightFixturesNotes"></td>
					<td> Yard / Fence </td>
					<td><input type = "number" class = "numberInput" name = "YardFenceCondition" id = "YardFenceCondition"></td>
					<td><input type = "text" name = "YardFenceNotes" id = "YardFenceNotes"></td>
				</tr>
				<tr>
					<td></br> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
					<td> Living Room </td>
					<td> </td>
					<td> </td>
					<td> Dining Room </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
					<td>  Walls / Ceiling </td>
					<td><input type = "number" class = "numberInput" name = "LivingRoomWallsCeilingsCondition" id = "LivingRoomWallsCeilingCondition"></td>
					<td><input type = "text" name = "LivingRoomWallsCeilingNotes" id = "LivingRoomWallsCeilingNotes"></td>
					<td> Walls / Ceiling </td>
					<td><input type = "number" class = "numberInput" name = "DiningRoomWallsCeilingsCondition" id = "DiningRoomWallsCeilingsCondition"></td>
					<td><input type = "text" name = "DiningRoomWallsCeilingsNotes" id = "DiningRoomWallsCeilingsNotes"></td>
				</tr>
				<tr>
					<td>  Drapes / Rods </td>
					<td><input type = "number" class = "numberInput" name = "LivingRoomDrapesRodsCondition" id = "LivingRoomDrapesRodsCondition"></td>
					<td><input type = "text" name = "LivingRoomDrapesRodsNotes" id = "LivingRoomDrapesRodsNotes"></td>
					<td> Drapes / Rods </td>
					<td><input type = "number" class = "numberInput" name = "DiningRoomDrapesRodsCondition" id = "DiningRoomDrapesRodsCondition"></td>
					<td><input type = "text" name = "DiningRoomDrapesRodsNotes" id = "DiningRoomDrapesRodsNotes"></td>
				</tr>
				<tr>
					<td>  Light Fixtures </td>
					<td><input type = "number" class = "numberInput" name = "LivingRoomLightFixturesCondition" id = "LivingRoomLightFixturesCondition"></td>
					<td><input type = "text" name = "LivingRoomLightFixturesNotes" id = "LivingRoomLightFixturesNotes"></td>
					<td> Light Fixtures </td>
					<td><input type = "number" class = "numberInput" name = "DiningRoomLightFixturesCondition" id = "DiningRoomLightFixturesCondition"></td>
					<td><input type = "text" name = "DiningRoomLightFixturesNotes" id = "DiningRoomLightFixturesNotes"></td>
				</tr>
				<tr>
					<td>  Windows / Screens </td>
					<td><input type = "number" class = "numberInput" name = "LivingRoomWindowsScreensCondition" id = "LivingRoomWindowsScreensCondition"></td>
					<td><input type = "text" name = "LivingRoomLightWindowsScreensNotes" id = "LivingRoomWindowsScreensNotes"></td>
					<td> Windows / Screens </td>
					<td><input type = "number" class = "numberInput" name = "DiningRoomWindowsScreensCondition" id = "DiningRoomWindowsScreensCondition"></td>
					<td><input type = "text" name = "DiningRoomWindowsScreensNotes" id = "DiningRoomWindowsScreensNotes"></td>
				</tr>
				<tr>
					<td></br> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
					<td> Bathroom (Master) </td>
					<td> </td>
					<td> </td>
					<td> Bath (Main) </td>
					<td> </td>
					<td> </td>
				</tr>
				<tr>
					<td>  Walls Ceiling </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterWallsCeilingCondition" id = "BathroomMasterWallsCeilingCondition"></td>
					<td><input type = "text" name = "BathroomMasterWallsCeilingNotes" id = "BathroomMasterWallsCeilingNotes"></td>
					<td> Walls Ceiling </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainWallsCeilingCondition" id = "BathroomMainWallsCeilingCondition"></td>
					<td><input type = "text" name = "BathroomMainWallsCeilingNotes" id = "BathroomMainWallsCeilingNotes"></td>
				</tr>
				<tr>
					<td>  Floors </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterFloorsCondition" id = "BathroomMasterFloorsCondition"></td>
					<td><input type = "text" name = "BathroomMasterFloorsNotes" id = "BathroomMasterFloorsNotes"></td>
					<td> Floors </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainFloorsCondition" id = "BathroomMainFloorsCondition"></td>
					<td><input type = "text" name = "BathroomMainFloorsNotes" id = "BathroomMainFloorsNotes"></td>
				</tr>
				<tr>
					<td>  Toilet </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterToiletCondition" id = "BathroomMasterToiletCondition"></td>
					<td><input type = "text" name = "BathroomMasterToiletNotes" id = "BathroomMasterToiletNotes"></td>
					<td> Toilet </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainToiletCondition" id = "BathroomMainToiletCondition"></td>
					<td><input type = "text" name = "BathroomMainToiletNotes" id = "BathroomMainToiletNotes"></td>
				</tr>
				<tr>
					<td>  Bathtub / Shower </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterBathtubShowerCondition" id = "BathroomMasterBathtubShowerCondition"></td>
					<td><input type = "text" name = "BathroomMasterBathtubShowerNotes" id = "BathroomMasterBathtubShowerNotes"></td>
					<td> Bathtub / Shower </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainBathtubShowerCondition" id = "BathroomMainBathtubShowerCondition"></td>
					<td><input type = "text" name = "BathroomMainBathtubShowerNotes" id = "BathroomMainBathtubShowerNotes"></td>
				</tr>
				<tr>
					<td>  Sink / Vanity / Mirror </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterSinkVanityMirrorCondition" id = "BathroomMasterSinkVanityMirrorCondition"></td>
					<td><input type = "text" name = "BathroomMasterSinkVanityMirrorNotes" id = "BathroomMasterSinkVanityMirrorNotes"></td>
					<td> Sink / Vanity / Mirror </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainSinkVanityMirrorCondition" id = "BathroomMainBSinkVanityMirrorCondition"></td>
					<td><input type = "text" name = "BathroomMainSinkVanityMirrorNotes" id = "BathroomMainSinkVanityMirrorNotes"></td>
				</tr>
				<tr>
					<td>  Ceiling / Fan </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterCeilingFanCondition" id = "BathroomMasterCeilingFanCondition"></td>
					<td><input type = "text" name = "BathroomMasterCeilingFanNotes" id = "BathroomMasterCeilingFanNotes"></td>
					<td> Ceiling / Fan </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainCeilingFanCondition" id = "BathroomMainCeilingFanCondition"></td>
					<td><input type = "text" name = "BathroomMainCeilingFanNotes" id = "BathroomMainCeilingFanNotes"></td>
				</tr>
				<tr>
					<td>  Light Fixtures </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterLightFixturesCondition" id = "BathroomMasterLightFixturesCondition"></td>
					<td><input type = "text" name = "BathroomMasterLightFixturesNotes" id = "BathroomMasterLightFixturesNotes"></td>
					<td> Light Fixtures </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainLightFixturesCondition" id = "BathroomMainLightFixturesCondition"></td>
					<td><input type = "text" name = "BathroomMainLightFixturesNotes" id = "BathroomMainLightFixturesNotes"></td>
				</tr>
				<tr>
					<td>  Doors / Window / Screen </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMasterDoorsWindowScreenCondition" id = "BathroomMasterDoorsWindowScreenCondition"></td>
					<td><input type = "text" name = "BathroomMasterDoorsWindowScreenNotes" id = "BathroomMasterDoorsWindowScreenNotes"></td>
					<td> Doors / Window / Screen </td>
					<td><input type = "number" class = "numberInput" name = "BathroomMainDoorsWindowScreenCondition" id = "BathroomMainDoorsWindowScreenCondition"></td>
					<td><input type = "text" name = "BathroomMainDoorsWindowScreenNotes" id = "BathroomMainDoorsWindowScreenNotes"></td>
				</tr>
			</table>
			</br>
			
			<table>
				<tr>
					<th> Bedrooms </th>
					<th> Master Condition </th>
					<th> Notes </th>
					<th> Second Condition </th>
					<th> Notes </th>
					<th> Third Condition </th>
					<th> Notes </th>
					<th> Fourth Condition </th>
					<th> Notes </th>
				</tr>
				<tr>
					<td>  Walls / Ceiling </td>
					<td><input type = "number" class = "numberInput" name = "MasterWallsCeilingCondition" id = "MasterWallsCeilingCondition"></td>
					<td><input type = "text" name = "MasterWallsCeilingNotes" id = "MasterWallsCeilingNotes"></td>
					<td><input type = "number" class = "numberInput" name = "SecondWallsCeilingCondition" id = "SecondWallsCeilingCondition"></td>
					<td><input type = "text" name = "SecondWallsCeilingNotes" id = "SecondWallsCeilingNotes"></td>
					<td><input type = "number" class = "numberInput" name = "ThirdWallsCeilingCondition" id = "ThirdWallsCeilingCondition"></td>
					<td><input type = "text" name = "ThirdWallsCeilingNotes" id = "ThirdWallsCeilingNotes"></td>
					<td><input type = "number" class = "numberInput" name = "FourthWallsCeilingCondition" id = "FourthWallsCeilingCondition"></td>
					<td><input type = "text" name = "FourthWallsCeilingNotes" id = "FourthWallsCeilingNotes"></td>
				</tr>
				<tr>
					<td>  Floor / Carpet </td>
					<td><input type = "number" class = "numberInput" name = "MasterFloorCarpetCondition" id = "MasterFloorCarpetCondition"></td>
					<td><input type = "text" name = "MasterFloorCarpetNotes" id = "MasterFloorCarpetNotes"></td>
					<td><input type = "number" class = "numberInput" name = "SecondFloorCarpetCondition" id = "SecondFloorCarpetCondition"></td>
					<td><input type = "text" name = "SecondFloorCarpetNotes" id = "SecondFloorCarpetNotes"></td>
					<td><input type = "number" class = "numberInput" name = "ThirdFloorCarpetCondition" id = "ThirdFloorCarpetCondition"></td>
					<td><input type = "text" name = "ThirdFloorCarpetNotes" id = "ThirdFloorCarpetNotes"></td>
					<td><input type = "number" class = "numberInput" name = "FourthFloorCarpetCondition" id = "FourthFloorCarpetCondition"></td>
					<td><input type = "text" name = "FourthFloorCarpetNotes" id = "FourthFloorCarpetNotes"></td>
				</tr>
				<tr>
					<td>  Drapes / Rods </td>
					<td><input type = "number" class = "numberInput" name = "MasterDrapesRodsCondition" id = "MasterDrapesRodsCondition"></td>
					<td><input type = "text" name = "MasterDrapesRodsNotes" id = "MasterDrapesRodsNotes"></td>
					<td><input type = "number" class = "numberInput" name = "SecondDrapesRodsCondition" id = "SecondDrapesRodsCondition"></td>
					<td><input type = "text" name = "SecondDrapesRodsNotes" id = "SecondDrapesRodsNotes"></td>
					<td><input type = "number" class = "numberInput" name = "ThirdDrapesRodsCondition" id = "ThirdDrapesRodsCondition"></td>
					<td><input type = "text" name = "ThirdDrapesRodsNotes" id = "ThirdDrapesRodsNotes"></td>
					<td><input type = "number" class = "numberInput" name = "FourthDrapesRodsCondition" id = "FourthDrapesRodsCondition"></td>
					<td><input type = "text" name = "FourthDrapesRodsNotes" id = "FourthDrapesRodsNotes"></td>
				</tr>
				<tr>
					<td>  Light Fixtures </td>
					<td><input type = "number" class = "numberInput" name = "MasterLightFixturesCondition" id = "MasterLightFixturesCondition"></td>
					<td><input type = "text" name = "MasterLightFixturesNotes" id = "MasterLightFixturesNotes"></td>
					<td><input type = "number" class = "numberInput" name = "SecondLightFixturesCondition" id = "SecondLightFixturesCondition"></td>
					<td><input type = "text" name = "SecondLightFixturesNotes" id = "SecondLightFixturesNotes"></td>
					<td><input type = "number" class = "numberInput" name = "ThirdLightFixturesCondition" id = "ThirdLightFixturesCondition"></td>
					<td><input type = "text" name = "ThirdLightFixturesNotes" id = "ThirdLightFixturesNotes"></td>
					<td><input type = "number" class = "numberInput" name = "FourthLightFixturesCondition" id = "FourthLightFixturesCondition"></td>
					<td><input type = "text" name = "FourthLightFixturesNotes" id = "FourthLightFixturesNotes"></td>
				</tr>
				<tr>
					<td>  Doors </td>
					<td><input type = "number" class = "numberInput" name = "MasterDoorsCondition" id = "MasterDoorsCondition"></td>
					<td><input type = "text" name = "MasterDoorsNotes" id = "MasterDoorsNotes"></td>
					<td><input type = "number" class = "numberInput" name = "SecondDoorsCondition" id = "SecondDoorsCondition"></td>
					<td><input type = "text" name = "SecondDoorsNotes" id = "SecondDoorsNotes"></td>
					<td><input type = "number" class = "numberInput" name = "ThirdDoorsCondition" id = "ThirdDoorsCondition"></td>
					<td><input type = "text" name = "ThirdDoorsNotes" id = "ThirdDoorsNotes"></td>
					<td><input type = "number" class = "numberInput" name = "FourthDoorsCondition" id = "FourthDoorsCondition"></td>
					<td><input type = "text" name = "FourthDoorsNotes" id = "FourthDoorsNotes"></td>
				</tr>
				<tr>
					<td>  Windows / Screens </td>
					<td><input type = "number" class = "numberInput" name = "MasterWindowsScreensCondition" id = "MasterWindowsScreensCondition"></td>
					<td><input type = "text" name = "MasterWindowsScreensNotes" id = "MasterWindowsScreensNotes"></td>
					<td><input type = "number" class = "numberInput" name = "SecondWindowsScreensCondition" id = "SecondWindowsScreensCondition"></td>
					<td><input type = "text" name = "SecondWindowsScreensNotes" id = "SecondWindowsScreensNotes"></td>
					<td><input type = "number" class = "numberInput" name = "ThirdWindowsScreensCondition" id = "ThirdWindowsScreensCondition"></td>
					<td><input type = "text" name = "ThirdWindowsScreensNotes" id = "ThirdWindowsScreensNotes"></td>
					<td><input type = "number" class = "numberInput" name = "FourthWindowsScreensCondition" id = "FourthWindowsScreensCondition"></td>
					<td><input type = "text" name = "FourthWindowsScreensNotes" id = "FourthWindowsScreensNotes"></td>
				</tr>
			</table>
			
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					<input type="checkbox" name = "Smoke Detector" id ="Smoke Detector">Smoke Detector</button>
					<input type = "text" name = "TenantInitials" id = "TenantInitials">
					</br>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>Keys:</br>
					<input type="checkbox" name = "MoveIn" id ="MoveIn"> Move In 
					<input type="checkbox" name = "MoveOut" id ="MoveOut"> Move Out
					<input type="checkbox" name = "BuildingDoor" id ="BuildingDoor"> Building Door
					<input type="checkbox" name = "MailBox" id ="MailBox"> Mail Box 
					<input type="checkbox" name = "Unit" id ="Unit"> Unit </button>
					<input type="checkbox" name = "Garage" id ="Garage"> Garage 
					</br>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					Reason For Moving: <input type = "text" name = "ReasonForMoving" id = "ReasonForMoving">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					Forwarding Address: <input type = "text" name = "ForwardingAddress" id = "ForwardingAddress">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					Inspection should be completed when the premises are vacant unless the Landlord and Tenant or their
					agents otherwise agree
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
						<h5><b>LANDLORD\'S STATEMENT: PLEASE SIGN ONLY THE ONE THAT APPLIES:</b></h5>
					</br>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					1. Statement with agent PRESENT:
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
		
					The inspection of the premises was conducted on:
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<table>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Inspector</th>
							<th>Signature of Landlord / Agent</th>
						</tr>
						<tr>
							<td><input type = "date" name = "inspectionDate" id = "inspectionDate"></td>
							<td><input type = "time" name = "inspectionTime" id = "inspectionTime"></td>
							<td><input type = "text" name = "inspector" id = "inspector"></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					2. Statement with agent ABSENT:
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
		
					The inspection of the premises was conducted on:
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<table>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Inspector</th>
							<th>Signature of Landlord / Agent</th>
						</tr>
						<tr>
							<td><input type = "date" name = "inspectionDate" id = "inspectionDate"></td>
							<td><input type = "time" name = "inspectionTime" id = "inspectionTime"></td>
							<td><input type = "text" name = "inspector" id = "inspector"></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					</br>
						<h5><b>TENANT\'S STATEMENT: PLEASE SIGN ONLY THE ONE THAT APPLIES:</b></h5>
				
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<table>
						<tr>
							<th>Statement</th>
							<th>Signature</th>
						</tr>
						<tr>
							<td>1.) I agree that this report fairly represents the condition of the premises </td>
							<td></td>
							</br>
						</tr>
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<table>
						<tr>
							<th>Statement</th>
							<th>Signature</th>
						</tr>
						<tr>
							<td>2.) I disagree that this report fairly represents the condition of the premises </td>
							<td></td>
							</br>
						</tr>
					</table>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-left">
					<table>
						<tr>
							<th>Statement</th>
							<th>Signature</th>
						</tr>
						<tr>
							<td>3.) The tenant\'s agent present at the time of the inspection refused to sign
							the tenant\'s statement</br>REASONS: </td>
							<td></td>
							</br>
						</tr>
					</table>
					</br></br>
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
