<?php
   require ('scripts/phpMaster.php');
   $auth = new Auth(); //Creates objects for Auth methods.
   $auth->adminland(); //Options: shareland, adminland, userland, loginland. This opens the session if one exists.
   echoDefaultHTML();
   //echoJavaScript();

   //FUNCTION ZONE
   function echoDefaultHTML() 
   {
	  echo '
	  <!DOCTYPE html>
	  <html>
		 <head>
			<title>Edit Accounts</title>   

			<!-- Do not edit this -->
			<meta charset="UTF-8">          
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="updateTenantInfo">
			<meta name="author" content="R.OBrien">
			<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
			<!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			<!-- DataTables CSS -->
			<link rel="stylesheet" type="text/css" href="scripts/DataTables-1.10.5/media/css/jquery.dataTables.css">
			<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.js"></script>
			<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>
			<!-- Our Script File -->';
			echoJavaScript();
			echo '
			<script src="scripts/data_tables.js"></script>
			<script src="scripts/script.js"></script>
		 </head>
		 <body>';
			include 'libs/header.html';
			include 'libs/menuButtons.html';
			echo '  
			<div class="container">
			   <h1>Update Tenant Information</h1>

			   <div class="row">
				  <div class="col-sm-3">
					 Application Date:
				  </div>
				  <div class="col-sm-3">
					 <input id="applicationDate" value="69/69/69" />
				  </div>
				  <div class="col-sm-3">
					 Home Phone:
				  </div>
				  <div class="col-sm-3">
					 <input id="homePhone" value="(403) 555-1212" />
				  </div>
			   </div>

			   <br>

			   <div class="row">
				  <div class="col-sm-3">
					 Exit Date:
				  </div>
				  <div class="col-sm-3">
					 <input id="exitDate" value="69/69/69" />
				  </div>
				  <div class="col-sm-3">
					 Cell Phone:
				  </div>
				  <div class="col-sm-3">
					 <input id="cellPhone" value="(403) 555-1212" />
				  </div>
			   </div>

			   <br>

			   <div class="row">
				  <div class="col-sm-3">
					 First Name:
				  </div>
				  <div class="col-sm-3">
					 <input id="firstName" value="Bob" />
				  </div>
				  <div class="col-sm-3">
					 E-Mail:
				  </div>
				  <div class="col-sm-3">
					 <input id="email" value="asdf@asdf.com" />
				  </div>
			   </div>

			   <br>

			   <div class="row">
				  <div class="col-sm-3">
					 Last Name:
				  </div>
				  <div class="col-sm-3">
					 <input id="lastName" value="TheBuilder" />
				  </div>
				  <div class="col-sm-3">
					 Driver\'s Licence:
				  </div>
				  <div class="col-sm-3">
					 <input id="driversLicence" value="s65465432164" />
				  </div>
			   </div>

			   <br>

			   <div class="row">
				  <div class="col-sm-3">
					 Notes:
				  </div>
				  <div class="col-sm-3">
					 <textarea id="tenantNotes" rows="8" cols="80">
					 </textarea>
				  </div>
			   </div>

			   <br>

			   <div class="row">
				  <div class="col-sm-6">
					 <input type="checkbox" name="willPayDeposit" value="No"> 
					 &nbsp Willing to pay Application Deposit?<br>
				  </div>

			   </div>

			   <br>
			   <br>
			   
			   <!--control buttons -->
				  <div class = "container">
					 <div class = "row">
						<div class = "col-sm-12 btn-group">
						   <br>
						   <br>
						   <a href="/admin/home.php" class="btn-lg btn-primary" role="button">Exit</a>
						   <a href="/createWorkorder.php" class="btn-lg btn-primary" role="button">Save and Exit</a>
						</div>
					 </div>
				  </div>


			</div>
			

		 </body>
	  </html> ';

   }
   function echoJavaScript() {
	  $sqlLib = new SQL();
	  $string = $sqlLib->getAllBuildingRecordsInJson();
	  $string2 = $sqlLib->getAllUnitRecordsInJson();
	  echo '<script>
		 ';
		 echo $string;
		 echo $string2;
		 echo $string3;
		 echo '
	  </script>';
   }

?>

