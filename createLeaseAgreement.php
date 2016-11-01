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
		<title>Manage Buildings</title> 	<!-- Change Title to the page you\'re working on-->
		<meta charset="UTF-8">			<!-- Do not edit this -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Do not edit this -->
		<meta name="description" content="Manage Buildings"> 	<!-- Change the contents of the content="" to a description of the page -->
		<meta name="author" content="E.Schwanke"> <!-- insert your name into the content if your the author -->
		<link rel="stylesheet" type="text/css" href="styles/mystyle.css"> <!-- if you make a new .css insert where it is located in the href tag -->
		<!-- bootstrap stuff - DO NOT EDIT THE NEXT 3 LINES -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- DataTables CSS -->
		<link rel="stylesheet" type="text/css" href="scripts/DataTables-1.10.5/media/css/jquery.dataTables.css">		  
		<!-- jQuery -->
		<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.js"></script>		  
		<!-- DataTables -->
		<script type="text/javascript" charset="utf8" src="scripts/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>
		<!-- Our Script File -->
		<script src="scripts/data_tables.js"></script>
		<script src="scripts/script.js"></script>	
		';
		include 'libs/header.html';
		echo'		
	</head>
	<!-- Body contents here -->
	<body>
		<div class="container" id="CreateLeaseAgreement"> <!-- Unique name will help in the future if we just want to edit a certain area -->
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h1>RESIDENTIAL TENANCY LEASE AGREEMENT </h1>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					THIS AGREEMENT, made in Duplicate this <input type = "date" name = "LeaseDate" id = "LeaseDate">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>BETWEEN:</h4>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					Built Management Corp.  (hereinafter referred to as the \'Landlord\)
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>AND</h4>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-3 text-center">
					<input type = "text" name = "App1FirstName" id = "App1FirstName">
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "text" name = "App1LastName" id = "App1LastName">
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "text" name = "App2FirstName" id = "App2FirstName">
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "text" name = "App2LastName" id = "App2LastName">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					 (hereinafter referred individually or collectively as the \'Tenant\') 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					THE LANDLORD AND THE TENANT AGREE AS FOLLOWS: 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>1. PREMISES: </h4>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					The Landlord subject to the conditions hereinafter mentioned, 
					hereby leases to the Tenant, address as follows: 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-3 text-center">
					<input type = "text" name = "UnitName" id = "UnitName">
				</div>
				<div class = "col-xs-2 text-center">
					<input type = "text" name = "Address" id = "Address">
				</div>
				<div class = "col-xs-2 text-center">
					<input type = "text" name = "City" id = "City">
				</div>
				<div class = "col-xs-2 text-center">
					<input type = "text" name = "Province" id = "Province">
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "text" name = "PostalCode" id = "PostalCode">
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					 (hereinafter called the \'Premises\') for use and occupation as 
					 residential premises only, subject to the terms and conditions 
					 set forth.
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>2. TERM: </h4>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					(a) This Agreement shall be for a fixed term commencing 12 o\'clock 
					noon on the first day of 
					<input type = "month" name = "LeaseStart" id = "LeaseStart"> and 
					ending at 12 o\'clock noon on the last day of 
					<input type = "month" name = "LeaseEnd" id = "LeaseEnd"> and no 
					notice shall be required of either the Landlord or the Tenant to 
					terminate the tenancy at the end of the fixed term. 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>3. RENT: </h4>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					The rent shall be <input type = "number" name = "Rent" id = "Rent">	
					Dollars per month and shall be due and payable in advance by the Tenant 
					to the Landlord at the Landlord\'s office as set out above, or at such 
					other address as specified by the Landlord from time to time, on the 
					FIRST DAY of each and every month during the Tenancy. When two or more 
					persons comprise the Tenant for the purposes of this Lease, the Landlord 
					may collect the rent due to the Landlord pursuant to this Lease from any 
					one, some or all of them; and their obligations hereunder shall be joint 
					as well as several. In the event that the Tenant takes possession of the 
					premises prior to the commencement date of this lease, the Tenant shall 
					pay to the Landlord for the Tenant\'s use and occupancy on a per diem 
					basis. It is agreed that the \'Tenancy Month\' hereby created begins on 
					the commencement date, notwithstanding that the Tenant may take possession
					or be obligated to pay rent prior to that date at a prorated amount of
					and all terms and conditions of this lease shall be in effect. If rent 
					is paid by cheque, the cheque shall be made payable to the Landlord as 
					noted above and should such cheque be returned to the Landlord by a bank 
					for any reason, the Landlord shall be entitled to add, as additional 
					rent a charge of $75.00 (for administrative expenses) which charge shall 
					be recoverable in the same manner as rent herein. In the event any cheque 
					provided by the Tenant to the Landlord is returned for non sufficient 
					funds, or fails to clear for any other reason, the Tenant at the 
					Landlord\'s request shall thereafter provide certified cheques for rent 
					and other payments due. 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>4. Additional Rent: </h4>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">	
					The Tenant agrees to pay to the Landlord when and as the same become 
					due and payable, without deduction or demand, all rentals and other 
					charges herein provided. The Tenant also agree to pay all damages and 
					expenses which the Landlord may suffer or incur by reason of any default 
					of the Tenant or failure on his part to comply with any of the provisions 
					of the Lease, including but not limited to costs and repairs, necessary 
					to re-lease the apartment, and any damages to the apartment or related 
					buildings, caused by any act of the Tenant, the Tenant\'s family, guests, 
					employees, invitees, licensees or other person or persons visiting the 
					Tenant or by any animal. Any charges under this paragraph shall be deemed 
					additional rent payable with the rents due as provided for in paragraph 
					3 of this agreement and shall be collectable as such by management 
					promptly as incurred. 
				</div>
			</div> 
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>5. Service Charges: </h4>
				</div>
			</div> 
			<div class = "row">
				<div class = "col-xs-12 text-center">
					Time is of the essence of this lease and the Tenant be deemed in default 
					in the event the Tenant failS to make rental payments including payment 
					of additional rentals on the date specified in paragraph 3. Landlord 
					shall be entitled to possession without further notice or demand for 
					rent, in the event of such default. Should the Landlord elect to accept 
					rental payments after such default occurs, Tenant shall pay additional 
					rental of <input type = "number" name = "AdditionalRent" id = "AdditionalRent"> 
					Dollars. Acceptance by the Landlord of late rental payments shall not 
					be deemed a waiver by the Landlord of its rights to declare a default 
					hereunder if the Tenant fails to make rental payments promptly as 
					herein provided. 
				</div>
			</div> 	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>6. PARKING: </h4>
				</div>
			</div> 	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					The Tenant shall pay monthly, in addition to the rent, in advance to the 
					Landlord at the Landlord\'s address as noted above, a rental of 
					<input type = "number" name = "ParkingFee" id = "ParkingFee"> dollars 
					per month for parking stall #. <input type = "number" name = "Stall" id = "Stall">
					on the FIRST day of each and every month of the term of this lease. 
					The Tenant may cancel the parking with one month\'s notice, given on or 
					before the last day of the month to be effective on the last day of the 
					following month. 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>7. APPLIANCES/FURNITURE: </h4>
				</div>
			</div> 		
			<div class = "row">
				<div class = "col-xs-12 text-center">
					The Landlord also leases to the Tenant, the following items, which the 
					Tenant agrees to keep clean and in good condition, ordinary wear expected.
				</div>
			</div> 
			<div class = "row">
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "Refrigerator" id = "Refrigerator">Refrigerator
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "Range" id = "Range">Range 
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "Dishwasher" id = "Dishwasher">Dishwasher
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "Microwave" id = "Microwave">Microwave 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "Range" id = "Range">Range 
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "HoodRange" id = "HoodRange">HoodRange 
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "ClothesWasher" id = "ClothesWasher">Clothes Washer     
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "Dryer" id = "Dryer">Dryer 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "Other" id = "Other">Other _______________________ 
				</div>
				<div class = "col-xs-3 text-center">
					<input type = "checkbox" name = "FurnishedSuite" id = "FurnishedSuite">Furnished Suite Schedule Attached  
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center"> 
					<h4>8. UTILITIES/SERVICES:</h4>
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center"> 
					The Tenant shall be responsible for all utilities other than utilities listed below.  
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>9. OTHER OCCUPANTS: </h4>
				</div>
			</div>		
			<div class = "row">
				<div class = "col-xs-12 text-center">
					The Tenant agrees that in addition to the Tenant(s) as noted above, the premises may 
					be occupied only by the following other persons: 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-left">
					</br>
					Name:
					</br>
					Name:
					</br>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">	
					Together with any natural increase in the Tenant\'s family, but in any event not 
					exceeding a total of 3 persons, unless the Landlord consents in writing to the 
					occupancy of the premises by some other or an additional person or persons. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>10. DEPOSIT: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">	
					The Tenant agrees to pay the Landlord a deposit of  It is agreed 
					between the Tenant and the Landlord that interest on the deposit shall be compounded 
					annually and be paid to the Tenant at the termination of the tenancy. The Landlord may 
					deduct from the security deposit any amounts that the Landlord seems necessary to 
					provide for: 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(a) repairing any damage or loss to the premises (including the building of which 
					the premises form a part and the ground of which the building forms a part), 
					fixtures, furniture, appliances and any other items leased pursuant to the Lease 
					which damages may have been caused by the Tenant or any person or persons invited 
					on the premises by the Tenant (Burns and other marks on carpets, furnishings and 
					walls shall not be considered normal wear and tear); or animal(s) or thing(s) 
					allowed in the building by the Tenant. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					(b) cleaning the premises and any property rented with it, (include but not limited 
					to professional cleaning of carpet and drapery) if the Tenant gives up possession 
					of the premises in such condition that the premises require cleaning; Professional 
					carpet cleaning must be done on completion of tenancy and receipt of such provided 
					to the landlord. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					(c) payment of rent owing to the Landlord by the Tenant upon the termination of 
					this Lease and; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					(d) the discharge of any other obligations or liabilities of the Tenant to the 
					Landlord. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					The Tenant is responsible for the amount of any damages or cleaning costs in 
					excess of the deposit. It is further agreed and understood that the Tenant cannot 
					apply the security deposit against any rent owing to the Landlord during the 
					tenancy. If the Tenant terminates this lease within three months of occupying the 
					premises, their deposit shall be forfeited to the Landlord as liquidated damages 
					to cover re-rental expenses and not as a penalty. If the Tenant does not give 
					proper notice or breaks the lease term, and the Landlord is able to re-rent the 
					premises a $200.00 re-rental fee shall be deducted from the deposit. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>11. TERMINATION: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					Except as otherwise provide for in the lease: 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					(a) The Landlord may terminate the tenancy by serving a written notice of 
					termination on the Tenant ON OR BEFORE THE LAST DAY OF ONE MONTH OF THE TENANCY 
					TO BE EFFECTIVE ON THE LAST DAY OF THE THIRD CONSECUTIVE, CLEAR MONTH FOLLOWING 
					THE DATE OF SERVICE OF THE NOTICE. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					OR 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					(b) The Landlord may terminate the tenancy by serving a written notice termination 
					on the Tenant ON OR BEFORE THE 90TH DAY BEFORE THE LAST DAY OF ANY TENANCY YEAR.
					The Tenant shall be liable for any expenses or loss incurred by the Landlord due 
					to the failure of the Tenant to vacate the apartment promptly at the termination 
					of the lease. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>12. TENANTS COVENANTS: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will pay the rent when due; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will comply with all safety standards, municipal bylaws, fire, 
					housing, sanitation and health regulations. The Tenant will not do, nor neglect 
					to do anything by which a safety, fire or health hazard is created; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not at any time use the premises as other than a residential 
					dwelling; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not willfully or negligently damage the premises, the building, 
					the grounds, or the furnishings/ equipment; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not create a nuisance or break any conditions or rules contained 
					in this lease; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not sublet, assign or re-rent the apartment nor leave guests in 
					charge of the premises nor have guests stay longer than one week; without written 
					consent of the landlord. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not in any significant manner interfere with rights of either 
					the Landlord or other tenants in the premises, the common areas or the property of 
					which they form a part; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not perform illegal acts or carry on illegal trade, business 
					or occupation in the premises, the common areas or the property of which they 
					form a part; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not endanger persons or property in the premises, the common 
					areas or the property of which they form a part; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will not do or permit significant damage to the premises, the 
					common areas or the property of which they form a part; The tenant will not horde 
					any items in the suite, floor areas MUST remain clear in case of fire.
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will maintain the premises and any property rented with it in 
					a reasonably clean condition;
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center"> 
					That the Tenant will vacate and leave the premises in the same or better 
					condition and repair at the expiration or termination of the tenancy; 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					That the Tenant will pay for steam cleaning of the carpets (must be done by 
					a professional steam cleaning company) upon vacating the premises. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					<h4>13. CONDITION OF PREMISES: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">			
					The Landlord and Tenant hereby agree to inspect the premises at the commencement 
					of the tenancy and upon termination of the tenancy and that the condition of the 
					premises at the aforesaid times will be noted on the Accommodation Inspection 
					Report which forms a part of the Lease. The Accommodation Inspection Report shall 
					be signed by both the Landlord and Tenant. In the event that the Tenant fails to 
					inspect the premises or sign the Accommodation Inspection Report, The Accommodation 
					Inspection Report as signed by the Landlord nonetheless shall be binding upon the 
					Tenant. The Accommodation Inspection Report may be used and relied upon by the 
					Landlord (where or not signed by the Tenant) as proof of the condition of the 
					premises at the time of inspection and in determining the appropriate deductions, 
					if any, to be taken by the Landlord from the deposit in accordance with Clause 10. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">			
					<h4>14. MAINTENANCE COSTS: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					The Tenant shall be responsible for the cost of repairing plugged toilets, 
					sinks, and drains, and for the cost of replacing all windows and screens broken 
					by the Tenant or their guests. The Tenant shall be responsible for replacing 
					light bulbs, fluorescent tubes, and stove fuses in their premises, broken toilet 
					seats, and any other damaged items. The Tenant shall be responsible for damages 
					caused by windows and doors being left open in inclement weather including costs 
					of repairing frozen pipes as well as repair and cleaning costs for damages caused 
					by broken pipes. The Tenant shall also be responsible for damages due to fire 
					caused by Tenant negligence i.e.: careless smoking, cooking, etc. The Tenant 
					agrees to immediately report to the Landlord any and all damage that may occur 
					to the premises throughout the continuance of this tenancy. Service calls due to 
					misuse of appliances or furniture will be back charged to the tenant(s) or charged 
					on site by the service company. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>15. AID IN MAINTENANCE: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					The Tenant shall cooperate with the Landlord in the care and maintenance of the 
					premises, building and grounds by promptly report to the Landlord any accident, 
					break, or defect in the water, heating, or electrical systems or in any part of 
					the building and its equipment. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>16. TENANT ISURANCE: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					It is a necessary and the absolute responsibility of the Tenant to insure the 
					Tenant\'s property on the premises against damage or loss to such property 
					occasioned by fire, theft, and other perils, which cause such damage or loss 
					and the tenant to include liability insurance. The Tenant\'s policy shall waive 
					all rights of subrogation against the Landlord and its servants, agents and 
					contractors; and the Tenant shall provide the landlord with a copy of the 
					insurance policy within 3 days of this agreement and upon demand at any time 
					by the landlord. The Tenant hereby waives and releases the Landlord from any 
					liability whatsoever for damage or loss to any persons or property whatsoever 
					which occurs in or in connection with the premises, the building and its 
					facilities, the grounds and parking lot, howsoever caused, including loss due 
					to negligence or fault of the Landlord or its servants, agents, or contractors 
					(Tenant to look to its own insurance and insurers for recovery of and protection 
					against any such loss or damage). Without limiting the generality of the 
					foregoing, the Landlord shall not be responsible for any loss of Tenant\'s 
					property in the premises or stored in the building due to any cause whatsoever. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>17. OVERHOLDING TENANTS: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					In the event the Tenant shall remain in the premises at the expiration or 
					termination of the term, this Lease shall not be deemed to be renewed and the 
					Tenant shall be deemed to be over-holding on a day-to-day basis. In addition 
					to any other remedy available to the Landlord, the Tenant shall pay damages for 
					use and occupation of the premises equal to double the rent payable hereunder 
					when calculated on a daily basis. The Over-holding Tenant will also be liable 
					for any damage suffered to the incoming tenant or damages suffered by Landlord 
					in respect to an incoming tenant. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>18. PREVIOUS TENANTS AND POSSESSION: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					If the Premises shall not be available for occupancy by the Tenant 
					(for any reason whatsoever) upon the date of commencement of the term of this 
					Lease, the rent shall not commence until the Premises are available for 
					occupancy and possession by the Tenant. When there is a delay, through no fault 
					of the Tenant two (2) or more weeks past the date of possession, the Landlord 
					and the Tenant shall each have the option of terminating the Lease at that time. 
					It is agreed that the Landlord shall not be liable to pay nor the Tenant be 
					entitled to receive compensation for any damages, loss, inconvenience, nuisance 
					or discomfort occasioned by the Premises are not available for possession and 
					occupancy. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>19. ABANDONMENT: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					Should the Tenant fail to take possession of the premises at the commencement 
					of the present lease, or abandon the premises before the termination of the 
					present lease, the Landlord may take possession without notice or demand and 
					re-lease the premises on such conditions as the Landlord may deem advisable, 
					without prejudice to the Landlord\'s right to recover rental which may be owing 
					and all claims for damages. Any furniture and effects remaining in the building 
					may at any time be sold by the Landlord to such persons and at such prices as 
					he may see fit and the net proceeds thereof shall be applied in reduction of 
					the Tenant indebtedness. If the Tenant abandons the premises prior to the 
					termination of this Lease, and without having given proper notice, rent due 
					and owing by the Tenant for the unexpired portion of the term of the Lease 
					shall become fully due and payable together with a re-rental fee of 
					Two Hundred ($200.00) Dollars. 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center"> 
					<h4>20. BREACH BY TENANT: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(a) If and whenever: 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(i) the rent hereby reserved or any pan thereof is not paid when due, or 
					there is non-payment of any other sums which the Tenant is obligated to 
					pay under the provisions hereof; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(ii) the term hereby granted, or any goods, chattels or equipment of the 
					Tenant shall be taken or be eligible in execution or in attachment or if a 
					Writ of Execution shall issue against the Tenant; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(iii) the Tenant shall become insolvent or commit an act of bankruptcy 
					or become bankrupt or take the benefit of any Act that may be in force for 
					bankrupt or insolvent debtors or become involved in voluntary winding up 
					proceedings or if a receiver shall be appointed for the property or affairs 
					of the Tenant; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(iv) the Tenant shall move or commence, attempt or threaten to move its 
					goods, chattels, and equipment out of the Premises or shall abandon the 
					Premises; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(v) the Tenant shall not observe, perform and keep each and every of 
					the covenants, agreements, provisions, stipulations and conditions herein 
					and in the said rules and regulations contained to be observed, performed 
					and kept by the Tenant; then and in any of such cases, at the option of the 
					Landlord, the full amount of the current month\'s and the next ensuing three 
					(3) month\'s monthly rent shall immediately become due and payable and the 
					Landlord may immediately disdain for same, together with any arrears then 
					unpaid; and the Landlord may on fourteen (14) days\' notice in writing to the 
					Tenant forthwith re-enter upon and take possession of the Premises or any 
					span thereof in the name of the whole and remove and sell the Tenant\'s 
					goods, chattels and equipment there from, any rule of law or equity to the 
					contrary notwithstanding; and the Landlord may seize and sell such goods, 
					chattels and equipment of the Tenant as are in the Premises as if they had 
					remained and been disdained upon the Premises, and such sale may be affected 
					in the discretion of the Landlord either by public auction or by private 
					treaty, and either in bulk or by individual item, or partly by one means 
					and partly by another, all as the Landlord in its entire discretion may decide. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					(b) The Landlord shall be entitled to or does re-enter, the Landlord may 
					terminate this Lease by giving fourteen (14) days\' notice thereof as aforesaid, 
					and in such event the Tenant shall accordingly vacate and surrender the Premises. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(c) That on the Landlord\'s becoming entitled to re-enter upon the premises 
					under any of the provisions of this Lease, the Landlord in addition to all other 
					rights shall have the right to enter the premises as agent of the Tenant either 
					by force or otherwise, without being liable for any prosecution there from, and 
					to re-let the Premises as the agent of the Tenant and to receive the rent there 
					from and as the agent of the Tenant to take possession of any furniture or other 
					property on the Premises and to sell the same at public or private sale without 
					notice and to apply the proceeds of such sale and any rent derived from 
					re-letting the premises on account of the rent under this Lease, and the Tenant 
					shall be liable to the Landlord for the deficiency, if any. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(d) That in the event it shall be necessary for the Landlord to retain the 
					services of a solicitor or any other proper person or agency for the purpose 
					of assisting the Landlord in enforcing any of its rights hereunder in the event 
					of default on the part of the Tenant or other event described in sub paragraph 
					(a) of this paragraph 17, the Tenant shall pay to the Landlord forthwith on demand, 
					and shall indemnify and save harmless the Landlord from and against, any and all 
					fees, disbursements and other charges whatsoever of such solicitor or other person 
					or agency (legal fees and disbursements to be paid by the Tenant on a solicitor 
					and-his-own client basis). 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(e) No reference to or exercise of any specific right or remedy by the Landlord 
					shall prejudice or preclude the Landlord from any other remedy in respect thereof, 
					whether allowed at law or equity or expressly provided for herein, No such remedy 
					shall be exclusive or dependent upon any other such remedy but the Landlord may 
					from time to time exercise anyone or more of such remedies independently or in 
					combination. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">			
					<h4>21. BREACH OF RULES: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					Any alleged infringement of a condition of this lease brought to the notice of 
					the Landlord will be promptly investigated and his decision will govern. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>22. LIABILITY FOR RENT: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					When two or more persons occupy the same premises, the Landlord may collect the full 
					rent from anyone of them. If and when any tenant(s) move out of the premises a written 
					notice must be given to the landlord with details of move out date, reason for moving, 
					forwarding address and phone number. In the event a notice is not received by the 
					landlord, the person will be treated as an existing tenant and be held responsible for 
					rent, damages, utilities, or any other costs related to the premises. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>23. RIGHT OF ENTRY: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					The Landlord shall have the right to enter the premises: 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(a) without notice or consent in the case of any emergency or in the event that the 
					Tenant has abandoned the premises; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(b) after giving written 24 hour notice to the Tenant, 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(i) to inspect the state of repair of the premises; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(ii) to make repairs to the premises; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(iii) to show the premises to prospective purchasers or mortgages of the 
					premises; or 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					(iv) to show the premises to prospective tenants after a notice of termination 
					has been served or during the last month of tenancy if the tenancy is for a fixed 
					term. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>24. HEAVY OBJECTS: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					The Landlord retains the right to prescribe the weight and proper position of 
					exceptionally heavy articles; and all damage done to the building by bringing or 
					keeping in or taking out any article shall be made good and paid for by the Tenant 
					who causes any articles to be brought or kept in or taken out of the building. Heavy 
					objects include but are not limited to pianos, etc. or any other object, which weighs 
					in excess of 50 lbs. per square foot of floor area occupied by said object. Written 
					permission must be obtained from the Landlord prior to brining a heavy object into 
					the building. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>25. NOTICE: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					Any notice respecting this lease may be given to the Landlord at the Landlord\'s 
					rental office in the city in which the premises is located (or such other address 
					as the Landlord may after this date designate) and may be given to the Tenant 
					either personal delivery to the Tenant (or one of them if there is more than one 
					Tenant) or by delivery to the Premises. The Tenant agrees that any notice to the 
					Landlord will only be effective upon the date of actual receipt by the Landlord\'s 
					rental office regardless of when mailed or sent by the Tenant. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>26. RULES AND REGULATIONS: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					The rules and regulations attached hereto, and any modification thereof or 
					amendments thereto which the Owner may hereafter from time to time adopt and 
					promulgate are considered a part of this lease, and the Tenant covenants that 
					said "rules and regulations" shall be adhered to by the Tenant, his employees, 
					invitees, and all other persons invited or uninvited by the Tenant into the 
					premises or on the adjoining property of the Landlord. Violation of any rules and 
					regulations shall be sufficient cause for termination of this lease by the Landlord, 
					and shall constitute a breach of this lease. In no event however, shall the 
					Landlord be liable to any Tenant for the violation by others of any rules and 
					regulations or the breach of any covenant or provision in any lease of any other 
					Tenant in the development of which the premises is a part. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>27. SEVERABILITY: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					If any clause of this lease is determined to be illegal, invalid or unenforceable 
					by any court of competent jurisdiction, the intention of the parties is that the 
					remaining clauses of this Lease shall not be affected and shall remain in full 
					force and effect. Any failure of the Owner to enforce any of the provisions or 
					restrictions herein contained shall in no way be deemed a waiver of the right to 
					do so thereafter or to insist upon strict compliance with the terms hereof. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>28. INTERPRETATION: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					Whenever the singular number of masculine gender is used in this agreement the 
					same shall be construed as including the plural and feminine and neuter respectively 
					where the fact or context so required. 
				</div>
			</div>
			<div class = "row">
				<div class = "col-xs-12 text-center"> 
					29. This Tenancy Contract and everything contained herein shall be binding upon and 
					ensure to the benefit of the parties hereto and the successors and assigns of the 
					Landlord; and the heirs, executors and permitted assigns of the Tenant. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					30. The Landlord shall not be responsible for statements made by its employees such 
					as caretakers, maintenance persons, cleaning stall, leasing persons, or contractors 
					where such statement are not in compliance with the Lease.
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					<h4>RULES AND REGULATIONS: </h4>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					Notwithstanding any other provisions for terminating this Lease, if, in the opinion 
					of the Landlord, the Tenant breaks any of the conditions contained herein including 
					the following, the Landlord may terminate this lease by giving the Tenant written 
					notice that the tenancy be terminated. Privacy and convenience are best achieved by 
					people living together, with some mutually agreed upon understandings. These 
					understanding have been set out as the following rules designed to help maintain 
					community appearance and tranquility. We use these rules as little as possible but 
					they are there to protect you and use if need be. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					1. COMBUSTIBLES: No storage of any combustibles or offensive goods, provisions, 
					or materials, shall be kept in the premises or building by the Tenant(s). The tenant 
					will not horde any items in the suite, floor areas MUST remain clear in case of fire.
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					2. GARBAGE. All refuse shall be securely wrapped and tied before being placed in 
					garbage cans. Where garbage chutes are provided, only refuse securely wrapped shall 
					be placed into the garbage chutes. Bottles and newspapers should be placed neatly in 
					a designated area. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					3. CONTAINER EXPLOSION: Bottles and pressurized cans shall be placed in the garbage 
					containers and not down garbage chutes. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					5. BOOTS AND RUBBERS: Boots and rubbers shall be removed at the entrance to the 
					building and taken into the Tenant(s) premises. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					6. ALTERATIONS: No alterations, painting or redecorating shall be done by Tenant(s). 
					Wallpapering is not permitted under any circumstances. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					7. NAILS: Tenants are permitted to use small finishing nails or nail supported 
					hooks as a means to secure pictures on walls. Tenant(s) are not permitted to drive 
					screws, hooks, etc. into or otherwise mutilate the walls, floors, ceiling or woodwork 
					in the premises. The use of glue-on or self-adhesive picture hangers is not permitted. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					8. LOCKS: No additional locks shall be placed upon any door of the premises without 
					the written consent of the Landlord. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					9. WINDOWS, BALCONIES: Tenant(s) will not shake, clean or hang any laundry, rugs, 
					mats, clothes, bedding, etc, from windows, balconies or landings; nor shall any 
					objects whatever be thrown or swept from windows or balconies. No flower boxes or 
					other objects are to be placed on window ledges or railings. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					10. WATER: The water shall not be left running unless in actual use. To prevent 
					flooding, shower curtains must be put inside the bathtub or tub/shower enclosure is 
					to be closed. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					11. HEATING: The Tenant(s) and those occupying under this lease shall not interfere 
					with the furnace heating apparatus or with the lights of the building which are not 
					within the premises. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					12. CHILDREN: Children are not allowed as Tenant(s) of the premises except where 
					the Owner has given its written consent. Children are not permitted in the laundry 
					room at any time. Children are not permitted to be unattended in common areas at any 
					time (children being any person under the age of 18 years). 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					14. ANIMALS: No pets or animals of any sort shall be allowed or kept in or about 
					the premises at any time. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					15. WIRING: No wires for electric lights, television or radio connections or otherwise 
					are to be introduced, nor the position of any existing wires altered, and the telephone 
					shall be permitted only at the place in the premises provided for the same. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					17. NOISE AND DISTURBANCES: Tenant(s) will not do or permit to be done in their 
					premises or in the building anything that is likely to disturb or be a nuisance to 
					the other Tenant(s) or neighbours. In particular, Tenant(s) shall not allow the 
					noise of their radio, T.V., musical instruments, cars, or guest(s) to disturb other 
					Tenant(s) during the day or night. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					18. OTHER RULES: Tenant(s) will obey any rules posted regarding the use and care 
					of the building, parking lot, laundry room and other facilities such as swimming 
					pool, playground. etc. that are provided for the use of Tenant(s). 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					19. DRAPES: Drapes, when provided by the Landlord, are not to be removed or 
					replaced by Tenant(s). Tinfoil is not permitted on the windows. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					20. SIGNS: Tenant(s) shall not display any signs, exterior lights or markings on 
					the premises, and no awnings or other projections shall be attached to the outside 
					walls of the building of which premises are a part. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					21. PLUMBING AND ELECTRICITY: Toilets, basins. etc. shall not be used for any 
					purpose other than those for which they were designed, nor shall any sweepings, 
					rubbish, rags or any other improper articles be placed into same. The electrical 
					system shall not be overloaded by Tenant(s). Any damage resulting from, misuse of 
					the aforementioned facilities, shall be corrected by Landlord at the expense of 
					Tenant(s). 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					22. LOCKS AND KEYS; Tenant(s) are prohibited from changing or in any way altering 
					locks installed on the doors of the premises. There shall be a charge made for lost 
					keys or keys which Tenant(s) fail to return. In the event Tenant(s) shall be locked 
					out and shall require services of Management on opening premises, Tenant(s) shall 
					pay a charge to be determined at the time for each such occurrence on holidays, 
					Saturdays, and between 5:00 p.m. and 5:00 a.m. weekdays, providing management at 
					its option is able to provide such service. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					23. DELIVERIES/MOVING: The delivery of furniture/large items to and from the 
					premises is permitted only between 9 a.m. to 5 p.m. daily except Sundays and 
					holidays. Removal of all packing cases, barrels, boxes and any other goods or 
					materials used in moving will be the responsibility of Tenant(s). Such items are 
					to be flattened and disposed of in the designated area. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					24. APPLIANCES: Tenant shall not install major appliances of any kind within, 
					on, or about the premises without the Landlord\'s written consent. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					25. ANTENNAS/SATELITE DISHES: Radio/television aerials or satellite dishes shall 
					not be placed or erected on the roof, balcony or exterior of the building. Amateur 
					radio transmission is prohibited within the development. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					26. PARKING: Tenant agrees to abide by the parking regulations which may be 
					established from time to time by the Landlord, and if the Landlord has designated 
					a space to park, Tenant shall park only in the space provided and shall notify all 
					guests of the regulations regarding parking, and to require guests to abide by such 
					parking regulations. Vehicles are not to be backed into parking stalls, if applicable. 
					Unlicensed, uninsured and/or inoperable vehicles parked on the Landlord\'s property 
					will be removed at the Tenant\'s expense. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					27. OTHER VEHICLES: No boats, trailers, campers, motorcycles, or vehicles larger 
					than a passenger automobile will be permitted within the development of which the 
					premise is part. Moreover, any type of non-operative vehicle will not be permitted 
					within the development of which the premises is a part and any such vehicle or any 
					of the properties mentioned in the preceding sentence may be removed by the Landlord 
					at the expense of the Tenant owning the same for storage or public or private sale, 
					at the election of the Landlord, and the Tenant owning same shall have no right of 
					recourse against the Landlord therefore. No repairing of automobiles, trailers, 
					boats, campers, or any other property of Tenant will be permitted on the property. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					28. STORAGE: No lighted candle or lamp shall be taken into storage areas. No 
					goods or materials of any kind or description that are combustible or would 
					increase the fire risk shall be stored herein and the Landlord will not be 
					responsible for any loss or damage thereto by fire, theft, or otherwise. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					29. ATTIRE: No person shall be permitted on or about the premises unless properly 
					attired. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					30. SOLICITING: Soliciting is strictly forbidden. It is requested that the Tenant 
					notify the office if a solicitor appears and appropriate action will be taken. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					31. NEGLECT OF DUTY: Tenant is respectfully requested to promptly report any neglect 
					of duty or any incivility on the part of the employees of Management, and any other 
					matters, which interfere in any way with the full enjoyment of the premises by the 
					Tenant. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					32. COLD TEMPERATURES: Tenant is advised that throughout the winter season it is 
					imperative that windows and balcony doors be kept securely closed when the outside 
					temperature is below freezing. Failure to do so may result in the freezing and/or 
					bursting of heating pipes. This will result in flooding of the suite (and possibly 
					other suites). DAMAGES RESULTING FROM FROZEN WATER PIPES ARE THE FINANCIAL 
					RESPONSIBILITY OF THE TENANT 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					33. WINDOWS AND BALCONY DOORS: Should be closed at any time when the premises 
					are left unattended. This will prevent any inadvertent flooding because of rains. 
					Should drapes, carpeting, or any other part of the premises or property become 
					damaged as a result of an infiltration of water through open doors or windows the 
					resulting damages will be the financial responsibility of the Tenant involved. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					34. GUESTS: Tenant(s) shall be responsible and liable for the conduct of their 
					guests. Acts of guest(s) in violation of the Lease or these Rules and Regulations 
					shall be deemed a default by Tenant. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					35. GROUNDS CARE & MAINTENANCE: The Tenant(s) is responsible for mowing of grass, 
					racking of leaves, trimming of shrubs, watering of flowers, removal of weeds and 
					keeping the grounds clear of clutter and or garbage. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					36. NEW RULES: The Landlord may from time to time make such other and further 
					reasonable rules for the care and cleanliness of the building and grounds and for 
					the comfort and convenience of the Tenant; and the Tenants, their families, visitors 
					and guests shall obey such rules. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					37. The Landlord reserves the right to cancel and terminate this lease within three 
					days of the lease being signed by the Tenant, whether or not the Tenant has occupied 
					the premises, if the Landlord in his sole discretion so decides. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		 
					38. This document is of no effect until signed by both the Landlord and the Tenant. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					The Tenancy created by this agreement is governed by the Residential Tenancies Act 
					and if there is a conflict between this agreement and the Act, the Act prevails. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					IN WITNESS WHEREOF the parties hereto have executed this Agreement as of the day and 
					year first above written. 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">		
					</br>
					Signed by the Landlord or Landlords Agent     ________________________________________
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">	
				</br>		
					Signed by the Tenant    ___________________________________________ Print Name________________________________
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">	
				</br>
					Signed by the Tenant    ___________________________________________  Print Name _______________________________
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">	
					</br>
					Signed by the Tenant    ___________________________________________ Print Name ________________________________
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">	
					</br>
					I hereby acknowledge receipt of a DUPLICATE ORIGINAL OF THIS AGREEMENT this _______ day of 
					___________________________, ______. 
		 
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">
					</br>
					Signature of Tenant  _________________________________ 
					</br>
				</div>
			</div>	
			<div class = "row">
				<div class = "col-xs-12 text-center">	 
					Failure to pay rent in full when due (First Day of Each Month) will result in the following: 
					Door hanger/Notification will be placed on the premises on the 2nd. Then a 14 day Eviction Notice 
					is issued on the 3rd. Tenant must contact Landlord immediately. Notice will be issued advising that 
					the premises will be shown for leasing. The first business day after Eviction Notice comes to term, 
					Order of Possession action will commence. Once obtained, all outstanding rent and legal costs will 
					be sent to the Landlord\'s Collection Agency for payment, which results in placement on the 
					Tenant(s) Credit Report. 	
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
