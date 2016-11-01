<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Forbidden</title> 	<!-- Change Title to the page you're working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="forbidden"> 	<!-- Change the contents of the content="" to a description of the page -->
		<meta name="author" content="Riley W.F"> <!-- insert your name into the content if your the author -->
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css"> <!-- if you make a new .css insert where it is located in the href tag -->
		<!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>

	<!-- Body contents here -->
	<body>
		<!-- remember to place your shit in divs use the ID tag with unique names to identify that area-->
		<div class="container"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<h1 class="text-center text-bold">Forbidden</h1>
		</div>
	</body>
</html>
