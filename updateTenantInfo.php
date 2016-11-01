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
		 <body>
			<div class="text-center">';
			   include 'libs/header.html';
			   include 'libs/menuButtons.html';
			   echo '  
			   <div class="container col-sm-12 ">
				  <h1>Update Tenant Information</h1>

				  <div class="row">
					 <div class="col-sm-6">
						<p>Application Date:</p>
					 </div>
					 <div class="col-sm-6">
						<input id="applicationDate" value="69/69/69" />
					 </div>
				  </div>

				  <div class="row">
					 <div class="col-sm-3">
						<p>Unit:</p>
					 </div>
					 <div class="col-sm-3">
						<p id="unitDetails"> Selected Unit Details </p>
					 </div>
				  </div>

				  <div class="row">
					 <div class="col-sm-3">
						<p>Tenant:</p>
					 </div>
					 <div class="col-sm-3">
						<p id="tenantDetails"> Selected Tenant Details </p>
					 </div>
				  </div>

				  <div class="row">
					 <div class="col-sm-3">
						<p>User Name:</p>
					 </div>
					 <div class="col-sm-3">
						<input type="text" id="userName" class="userName" value="some user name"></input>
					 </div>
				  </div>

				  <div class="row">
					 <div class="col-sm-3">
						<p>Password:</p>
					 </div>
					 <div class="col-sm-3">
						<input type="text" id="password" class="password" value="some password"></input>
					 </div>
				  </div>


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

