///	<summary>
///	Enables datatables
///	</summary>
$(document).ready(function() {
	$('#Complaint').html('<table class="display" id="ComplaintTable"></table>');
	$('#ComplaintTable').dataTable({
		"data": complaintData,
		"columns": [
			{ "title": "First Name", "data": "firstname" },
			{ "title": "Last Name", "data": "lastname" },
			{ "title": "Status", "data": "status" },
			{ "title": "Complaint", "data": "complaint" }
		]
	});
});