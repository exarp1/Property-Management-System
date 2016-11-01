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
		<title>Manage Database</title>
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Manage Database"> 	<!-- Change the contents of the content="" to a description of the page -->
		<meta name="author" content="C.Roberts"> <!-- insert your name into the content if your the author -->
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css"> <!-- if you make a new .css insert where it is located in the href tag -->
		<link rel="stylesheet" type="text/css" href="styles/mystyleChris.css"> <!-- if you make a new .css insert where it is located in the href tag -->
		<!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<script src="scripts/jquery.min.js"></script>
		<script src="scripts/bootstrap.min.js"></script>
	</head>
	<body>
		';
		include "libs/header.html";
		include "libs/menuButtons.html";
		echo'
		<h1>Manage Database</h1>
		<div class="div-outline">
			<form method="post" enctype="multipart/form-data">
				<table width="350" border="0" cellpadding="1" cellspacing="1">
					<tr>
						<td width="246">
							<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
							<input name="userfile" type="file" id="userfile">
						</td>
						<td width="80">
							<input name="upload" type="submit" value="Upload-DoesNothing">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
	</html>
	';
}
?>
