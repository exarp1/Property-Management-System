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
			<title>Manage Complaints</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Manage Complaints">
			<meta name="author" content="Riley W.F and Richard O">
			<link rel="stylesheet" type="text/css" href="styles/mystyle.css">

			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
			<!-- DataTables CSS -->
			<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
			<!-- jQuery -->
			<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			<!-- DataTables -->
			<script type="text/javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
			'; echoJavaScript(); echo '
			<script>
			   $(document).ready(function() {
					 $(\'#complaint\').dataTable({
						   "initComplete": function() {
								 var api = this.api();
								 api.$(\'td\').click( function () {
									   api.search( this.innerHTML ).draw();
								 } );
						   },
						   "data": complaintData,
						   "columns": [
						   { "title": "Name", "data": "firstname" },
						   { "title": "Last Name", "data": "lastname" },
						   { "title": "Status", "data": "status" },
						   { "title": "Complaint", "data": "complaint" }
						   ],
						   "columnDefs": [
						   { 	
								 "render": function(data, type, row){
									   return row.firstname + \' \' + row.lastname;
								 },
								 "targets": 0
						   },
						   { "visible": false, "targets": [1]}
						   ]
					 });
			   });
			</script>
		 </head>
		 <body>';
			include 'libs/header.html';
			include 'libs/menuButtons.html';
			echo '
			<div class="container" id="manageComplaints">
			   <div class="row">
				  <h1>Complaint System Overview</h1>
				  <table id="complaint">
				  </table>
			   </div>

			   <div class="row">
					 <a href="createComplaintWorkorder.php" class="btn-lg btn-success" role="button">Create Work Order</a>
					 <a href="#" class="btn-lg btn-success" role="button">Upgrade complaint status</a>
					 <a href="#" class="btn-lg btn-success" role="button">Downgrade complaint status</a>
			   </div> <!-- end row -->

			</div>
		 </body>
	  </html> ';
   }// end echoDefaultHTML()

   function echoJavaScript() {
	  $sqlLib = new SQL();
	  $string = $sqlLib->getUnresolvedComplaintsInJson();

	  echo '<script>
		 ';
		 echo $string;
		 echo '
	  </script>';
   }
?>
