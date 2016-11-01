// I've basically removed this having it in an external javascript file has cause 
// me nothing but grief.
/**var buildingTable;
var curRow;
var unitTable;
var tenantTable;

$(document).ready(function(){
	/// manageRentals.php --- The building Table
	$('#BuildingTable').dataTable({
		"bProcessing": false,
		"ajax": {
			"url": "scripts/process.php",
			"data": {
				"method": "BuildingData",
			}
		}	
	});

	/// manageRentals.php --- The unit Table
	//$('#Unit').html('<table class="display" id="UnitTable"></table>');
	//$('#UnitTable').dataTable({
	/*	"initComplete": function() {
			unitTable = $('#UnitTable').DataTable();
		},
		//"data": rentalData,
		"columns": [
			{ "title": "Building ID", "data": "building_id" },
			{ "title": "Tenant ID", "data": "tenant_id"	},
			{ "title": "Unit ID", "data": "unit_id" },
			{ "title": "Unit Number", "data": "unit_number" },
			{ "title": "Rental Status", "data": "status" },
			{ "title": "Unit Notes", "data": "unit_notes" }
		],
		"columnDefs": [
			//{ "targets": [0], "visible": false, "searchable": true },
			//{ "targets": [1], "visible": false, "searchable": true }
		]
	//});
	// manageRentals.php --- The Tenant Table
	//$('#Tenant').html('<table class="display" id="TenantTable"></table>');
	//$('#TenantTable').dataTable({
	/*	"initComplete": function() {
			tenantTable = $('#TenantTable').DataTable();
		},
		//"data": tenantData,
		"columns": [
			{ "title": "Tenant ID", "data": "tenant_id" },
			{ "title": "Account ID", "data": "account_id" },
			{ "title": "First Name", "data": "firstname" },
			{ "title": "Last Name", "data": "lastname" },
			{ "title": "Phone #", "data": "home_phone" },
			{ "title": "Email", "data": "email" },
			{ "title": "Notes", "data": "tenant_notes" }
		],
		"columnDefs": [
		{ "targets": [0], "visible": false, "searchable": false },
		{ "targets": [1], "visible": false, "searchable": true }
		]
	//});

	/*$('#BuildingTable').on('click', 'tr', function() {
		var theRow = buildingTable.row(this).data();
		console.log(theRow.building_id);
		unitTable.column('building_id', true, true, true).search(theRow.building_id).draw();
	});



	/// manageComplaints.php
	//$('#Complaint').html('<table class="display" id="ComplaintTable"></table>');
	//$('#ComplaintTable').dataTable({
	/*	//"data": complaintData,
		"columns": [
			{ "title": "First Name", "data": "firstname" },
			{ "title": "Last Name", "data": "lastname" },
			{ "title": "Status", "data": "status" },
			{ "title": "Complaint", "data": "complaint" }
		]
	//});

});


/*

		"initComplete": function() {
			buildingTable = $('#BuildingTable').DataTable();
		},
		"columns": [
			{ "title": "Building ID", "data": "building_id" },
			{ "title": "Name", "data": "name" },
			{ "title": "Address", "data": "address" },
			{ "title": "Province", "data": "province" },
			{ "title": "Notes", "data": "building_notes" }
		],
		"columnDefs": [
			//{ "targets": [0], "visible": false, "searchable": true }
		]
*/