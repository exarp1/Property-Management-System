<?php
	require('../scripts/phpMaster.php');
	$auth = new Auth();
	$auth->adminland();
?>

<html>
	<head>
		<title>Manage Complaints</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Manage Complaints">
		<meta name="author" content="Riley W.F and Richard O">
		<link rel="stylesheet" type="text/css" href="../styles/mystyle.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
		<!-- DataTables -->
		<script type="text/javascript" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
		<script src="script.js"></script>
		<script id="complaintScript"></script>
	</head>

	<body>
		<?php include '../libs/header.html'; ?>
		<?php include '../libs/menuButtons.html'; ?>

		<div class="container col-sm-12">
			<h1>Complaint System Overview</h1>
			<div id="Complaint">
			</div>

			<div class="container">
				<div class="row">
					<div class="col-sm-12 btn-group">
						<a href="#" class="btn-lg btn-success" role="button">Create Work Order</a>
						<a href="#" class="btn-lg btn-success" role="button">Upgrade complaint status</a>
						<a href="#" class="btn-lg btn-success" role="button">Create Work Order</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>