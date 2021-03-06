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
			<title>Manage Rentals</title>   

        <!-- Do not edit this -->
        <meta charset="UTF-8">          
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Manage Buildings">
        <meta name="author" content="R.OBrien">
        <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
        <!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="scripts/DataTables-1.10.5/media/css/jquery.dataTables.css">		  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.js"></script>		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>';
		echo echoJavaScript();
		echo '
		<script>
			$(document).ready(function() {
				$(\'#manageRentals-Buildings\').dataTable({
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
				$(\'#manageRentals-Unit\').dataTable({
					"initComplete": function() {
					var api = this.api();
					api.$(\'td\').click( function () {
						api.search( this.innerHTML ).draw();
					} );
				},
					"data": rentalData,
					"columns": [
						{ "title": "Unit Number", "data": "unit_number" },
						{ "title": "Status", "data": "status" },
						{ "title": "Notes", "data": "unit_notes"}
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
		</script>
    </head>

    <body>';
			include 'libs/header.html';
			include 'libs/menuButtons.html';
	echo '
		</div>
			<div class="container">
				<div class="row">
					<div class="page-header col-sm-12 text-center"> 
						<h1>Manage Rentals</h1> 
					</div>
				</div>

				<!-- Begin building table code -->
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Buildings</h2>
						
						<table id="manageRentals-Buildings">
						</table>
					</div>
				</div>
				<!-- End table building code -->
				<br />
				<br />
				<br />
				<!-- Begin unit table code -->
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Units</h2>
						
						<table id="manageRentals-Unit">
						</table>
					</div>
				</div>
				<!-- End unit table code -->
				<br />
				<br />
				<br />
				<!-- Begin tenant table code -->
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Tenants</h2>
						
						<table id="TenantTable">
						</table>
					</div>
				</div>
				<!-- End tenant table code -->
				<!--Button row for REMOVE and ASSIGN tenants -->
                <div class = "container">
                    <div class = "row">
                        <div class = "col-sm-6 btn-group">
                                <b> Remove Assigned Tenant from Unit</b>
                                <button type="button" class="btn-lg btn-danger" id ="removeTenant">Remove</button>
                        </div>
                        <div class = "col-sm-6 btn-group">
                                <b>Assign Tenant to Unit</b>
                                <button type="button" class="btn-lg btn-warning" id ="assignTenant">Assign</button>
                        </div>
                    </div>
                </div>
			</div>
			<!-- End unit table code -->

			<br />
			<br />

			<!-- Begin ASSIGNED TENANT table code -->
			<div class="row">
			   <div class="table-responsive">
				  <table class="table" id="assignedTenants">
					 <h2 >Select an new Tenant to Remove</h2>
					 <thead>
						<tr>
						   <th>Unit ID</th>
						   <th>Unit number</th>
						   <th>Rental Status</th>
						   <th>Unit Notes</th>
						</tr>
					 </thead>
					 <tbody>

					 </tbody>
				  </table>
			   </div>
			</div>
			<!-- End UNASSIGNED tenant table code -->

			<br />
			<br />

			<!-- Begin UNASSIGNED TENANT table code -->
			<div class="row">
			   <div class="table-responsive">
				  <table class="table" id="unAssignedTenants">
					 <h2 >Select an new Tenant to Assign</h2>
					 <thead>
						<tr>
						   <th>Unit ID</th>
						   <th>Unit number</th>
						   <th>Rental Status</th>
						   <th>Unit Notes</th>
						</tr>
					 </thead>
					 <tbody>

					 </tbody>
				  </table>
			   </div>
			</div>
			<!-- End tenant table code -->

			<br />
			<br />

			<!--Button row for REMOVE and ASSIGN tenants -->
			<div class = "row">
			   <div class = "col-sm-6">
				  <button type="button" class="btn-lg btn-danger" id ="removeTenant">Remove Tenant From Unit</button>
				  <button type="button" class="btn-lg btn-warning" id ="assignTenant">Assign Tenant to Unit</button>
			   </div>
			</div>

			<br>
			<br>
			<br>
		 </div>
   </body>
</html>
';
}
function echoJavaScript() {
	$sqlLib = new SQL();
	$string = $sqlLib->getAllBuildingRecordsInJson();
    $string2 = $sqlLib->getRentals();
	$string3 = $sqlLib->getAllTenantsInJson();
	echo '<script>';
	echo $string;
    echo $string2;
	echo $string3;
	echo '</script>';
}
?>
