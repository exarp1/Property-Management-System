<?php
	include('scripts/phpMaster.php');
	require_once('scripts/tcpdf/tcpdf.php');
	
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Riley');
	$pdf->SetTitle('FAGGOT');
	$pdf->setPrintHeader(false);
	$pdf->AddPage();
	$pdf->lastPage();
	$html = '<div class = "container">
			<div class = "col-xs-12">
				<h1> Application For Rental Accommodation </h1>
			</div>
			<div class = "row"> 
				<div class = "col-xs-6">
					Primary Phone Number: <input type = "tel" name = "PrimaryPhone"id = "PrimaryPhone">
				</div>
				<div class = "col-xs-6">
					Primary EMail: '.$tenantNumber .'<input type = "email" name = "PrimaryEmail" id = "PrimaryEmail">
				</div>
			</div>
			<div class = "row"> 
				<div class = "col-xs-6">
					Secondary Phone Number: <input type = "tel" name = "SecondaryPhone" id = "SecondaryPhone">
				</div>
				<div class = "col-xs-6">
					Secondary EMail: <input type = "email" name = "SecondaryEmail" id = "SecondaryEmail">
				</div>
			</div>
			<fieldset>
				<legend>
					ACCOMODADION INFORMATION
				</legend>
				<div class = "col-xs-12">
					Address of premises to be leased: <input type = "text" name = "PrimaryAddress" id = "PrimaryAddress">
				</div>
				<div class = "col-xs-12">
					Do You have a Pet? <input type = "checkbox" name = "HavePet" id = "HavePet">
				</div>
				<div class = "col-xs-12">
					Name of Pet: <input type = "text" name = "PetName" id = "PetName">
				</div>
				<div class = "col-xs-12">
					Type of Pet: <input type = "text" name = "PetType" id = "PetType">
				</div>
				<div class = "col-xs-12">
					Number of occupants residing within the premises: <input type = "number" name = "NumOccupants" id = "NumOccupants" value = "1" min = "1" max = "20">
				</div>
				<div class = "col-xs-12">
					Number of Adults: <input type = "number" name = "NumAdults" id = "NumAdults" value = "1" min = "1" max = "20">
				</div>
				<div class = "col-xs-12">
					Number of Children: <input type = "number" name = "numChildren" id = "NumChildren" value = "1" min ="1" max = "20">
				</div>
				<div class = "col-xs-12">
					Required Date to Occupy: <input type = "date" name = "ReqDate" id = "ReqDate">
				</div>
				<div class = "col-xs-12">
					Would you be willing to rent the suit earlier if needed? <input type = "checkbox" name = "RentEarlier" id = "RentEarlier">
				</div>
			</fieldset>
			
			<fieldset>
			<legend>
				Personal Information of Applicant One
			</legend>
				<div class = "row">
					<div class = "col-xs-4">
						First Name <input type = "text" name = "App1FirstName" id = "App1FirstName">
					</div>
					<div class = "col-xs-4">
						Middle Name <input type = "text" name = "App1MiddleName" id = "App1MiddleName">
					</div>
					<div class = "col-xs-4">
						Last Name <input type = "text" name = "App1LastName" id = "App1LastName">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-4">
						Current Address <input type = "text" name = "App1CurrentAddress" id = "App1CurrentAddress">
					</div>
					<div class = "col-xs-4">
						Current City <input type = "text" name = "App1CurrentCity" id = "App1CurrentCity">
					</div>
					<div class = "col-xs-4">
						Current Province <input type = "text" name = "App1CurrentProvince" id = "App1CurrentProvince">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-4">
						Current Postal Code <input type = "text" name = "App1CurrentPostalCode" id = "App1CurrentPostalCode">
					</div>
					<div class = "col-xs-4">
						Drivers Licence # <input type = "text" name = "App1DriversLicence" id = "App1DriversLicence">
					</div>
					<div class = "col-xs-4">
						Drivers Licence Province <input type = "text" name = "App1DriversLicenceProvince" id = "App1DriversLicenceProvince">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						How long at current address <input type = "text" name = "App1HowLong" id = "App1HowLong">
					</div>
					<div class = "col-xs-6">
						Reason for leaving <input type = "text" name = "App1Reason" id = "App1Reason">
					</div>
				</div>
			</fieldset>
			
			<fieldset>
			<legend>
				Personal Information of Applicant Two
			</legend>
				<div class = "row">
					<div class = "col-xs-4">
						First Name <input type = "text" name = "App2FirstName" id = "App2FirstName">
					</div>
					<div class = "col-xs-4">
						Middle Name <input type = "text" name = "App2MiddleName" id = "App2MiddleName">
					</div>
					<div class = "col-xs-4">
						Last Name <input type = "text" name = "App2LastName" id = "App2LastName">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-4">
						Current Address <input type = "text" name = "App2CurrentAddress" id = "App2CurrentAddress">
					</div>
					<div class = "col-xs-4">
						Current City <input type = "text" name = "App2CurrentCity" id = "App2CurrentCity">
					</div>
					<div class = "col-xs-4">
						Current Province <input type = "text" name = "App2CurrentProvince" id = "App2CurrentProvince">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-4">
						Current Postal Code <input type = "text" name = "App2CurrentPostalCode" id = "App2CurrentPostalCode">
					</div>
					<div class = "col-xs-4">
						Drivers Licence # <input type = "text" name = "App2DriversLicence" id = "App2DriversLicence">
					</div>
					<div class = "col-xs-4">
						Drivers Licence Province <input type = "text" name = "App2DriversLicenceProvince" id = "App2DriversLicenceProvince">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						How long at current address <input type = "text" name = "App2HowLong" id = "App2HowLong">
					</div>
					<div class = "col-xs-6">
						Reason for leaving <input type = "text" name = "App2Reason" id = "App2Reason">
					</div>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>
					Applicant Deposit Statement
				</legend>
				<div class = "col-xs-12">
					<input type = "checkbox" name = "SubstantiateRequest" id = "SubstantiateRequest"> Check here if you are able to substantiate your request to 
					rent the said property by giving the landlord an application deposit today?
				</div>
				<div class = "col-xs-12">
					</br>
					I want to lease from BMC. At the above noted premises and as an indication of my good faith in making this offer, I hereby hand to the 
					Landlord the sum of: <input type = "text" name = "SubstantiateRequestAmount" id = "SubstantiateRequestAmount"> in the form of cheque, cash, money order, 
					or email transfer, as an Application Deposit for the rental of the said premises. This is with the understanding that if my application is 
					accepted, the deposit shall be retained by the Landlord as a "Rental Deposit" towards the damage deposit / first month\'s rent, in accordance 
					with the provisions of the Lease Agreement and if my application is not accepted by the Landlord the full application deposit will be refunded 
					to me. This is provided however, that if my offer is accepted and I cancel or breach the application of fail to execute the Lease Agreement 
					when prepared and presented, then I agree that the said deposit shall be absolutely forfeited to the Landlord. This shall be considered 
					liquidated damages.
				</div>
			</fieldset>
			
			<fieldset>
				<legend>
					Employment Information of Applicant One
				</legend>
				<div class = "row">
					<div class = "col-xs-6">
						Current Employer <input type = "text" name = "App1Employer" id = "App1Employer">
					</div>
					<div class = "col-xs-6">
						Position / Occupation <input type = "text" name = "App1Position" id = "App1Position">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Supervisor <input type = "text" name = "App1Supervisor" id = "App1Supervisor">
					</div>
					<div class = "col-xs-6">
						How Long <input type = "text" name = "App1EmploymentHowLong" id = "App1EmploymentHowLong">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Address <input type = "text" name = "App1EmploymentAddress" id = "App1EmploymentAddress">
					</div>
					<div class = "col-xs-6">
						Monthly Income <input type = "text" name = "App1MonthlyIncome" id = "App1MonthlyIncome">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						
					</div>
					<div class = "col-xs-6">
						Phone Number <input type = "tel" name = "App1EmploymentPhone" id = "App1EmploymentPhone">
					</div>
				</div>
								
				<div class = "row">
					<div class = "col-xs-6">
						Previous Employer <input type = "text" name = "App1PrevEmployer" id = "App1PrevEmployer">
					</div>
					<div class = "col-xs-6">
						Position / Occupation <input type = "text" name = "App1PrevPosition" id = "App1PrevPosition">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Supervisor <input type = "text" name = "App1PrevSupervisor" id = "App1PrevSupervisor">
					</div>
					<div class = "col-xs-6">
						How Long <input type = "text" name = "App1PrevEmploymentHowLong" id = "App1PrevEmploymentHowLong">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Address <input type = "text" name = "App1PrevEmploymentAddress" id = "App1PrevEmploymentAddress">
					</div>
					<div class = "col-xs-6">
						Monthly Income <input type = "text" name = "App1PrevMonthlyIncome" id = "App1PrevMonthlyIncome">
					</div>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>
					Employment Information of Applicant Two
				</legend>
				<div class = "row">
					<div class = "col-xs-6">
						Current Employer <input type = "text" name = "App2Employer" id = "App2Employer">
					</div>
					<div class = "col-xs-6">
						Position / Occupation <input type = "text" name = "App2Position" id = "App2Position">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Supervisor <input type = "text" name = "App2Supervisor" id = "App2Supervisor">
					</div>
					<div class = "col-xs-6">
						How Long <input type = "text" name = "App2EmploymentHowLong" id = "App2EmploymentHowLong">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Address <input type = "text" name = "App2EmploymentAddress" id = "App2EmploymentAddress">
					</div>
					<div class = "col-xs-6">
						Monthly Income <input type = "text" name = "App2MonthlyIncome" id = "App2MonthlyIncome">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						
					</div>
					<div class = "col-xs-6">
						Phone Number <input type = "tel" name = "App2EmploymentPhone" id = "App2EmploymentPhone">
					</div>
				</div>
								
				<div class = "row">
					<div class = "col-xs-6">
						Previous Employer <input type = "text" name = "App2PrevEmployer" id = "App2PrevEmployer">
					</div>
					<div class = "col-xs-6">
						Position / Occupation <input type = "text" name = "App2PrevPosition" id = "App2PrevPosition">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Supervisor <input type = "text" name = "App2PrevSupervisor" id = "App2PrevSupervisor">
					</div>
					<div class = "col-xs-6">
						How Long <input type = "text" name = "App2PrevEmploymentHowLong" id = "App2PrevEmploymentHowLong">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Address <input type = "text" name = "App2PrevEmploymentAddress" id = "App2PrevEmploymentAddress">
					</div>
					<div class = "col-xs-6">
						Monthly Income <input type = "text" name = "App2PrevMonthlyIncome" id = "App2PrevMonthlyIncome">
					</div>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>
					Rental History of Applicant One
				</legend>
				<div class = "row">
					<div class = "col-xs-6">
						Current Landlord <input type = "text" name = "App1CurrentLandlord" id = "App1CurrentLandlord">
					</div>
					<div class = "col-xs-6">
						Phone Number <input type = "tel" name = "App1CurrentLandlordPhone" id = "App1CurrentLandlordPhone">
					</div>
				</div>	
				<div class = "row">
					<div class = "col-xs-6">
						Former Landlord <input type = "text" name = "App1FormerLandlord" id = "App1FormerLandlord">
					</div>
					<div class = "col-xs-6">
						Phone Number <input type = "tel" name = "App1FormerLandlordPhone" id = "App1FormerLandlordPhone">
					</div>
				</div>	
			</fieldset>
			
			<fieldset>
				<legend>
					Rental History of Applicant Two
				</legend>
				<div class = "row">
					<div class = "col-xs-6">
						Current Landlord <input type = "text" name = "App2CurrentLandlord" id = "App2CurrentLandlord">
					</div>
					<div class = "col-xs-6">
						Phone Number <input type = "tel" name = "App2CurrentLandlordPhone" id = "App2CurrentLandlordPhone">
					</div>
				</div>	
				<div class = "row">
					<div class = "col-xs-6">
						Former Landlord <input type = "text" name = "App2FormerLandlord" id = "App2FormerLandlord">
					</div>
					<div class = "col-xs-6">
						Phone Number <input type = "tel" name = "App2FormerLandlordPhone" id = "App2FormerLandlordPhone">
					</div>
				</div>	
			</fieldset>
			
			<fieldset>
				<legend>
					Applicant Questionnaire (Check all that apply)
				</legend>
				<div class = "col-xs-12">
					<input type = "checkbox" name = "Evicted" id = "Evicted"> Have any of you ever been evicted or asked by a Landlord or his agent to leave a rented premises?
				</div>
				<div class = "col-xs-12">
					<input type = "checkbox" name = "CriminalRecord" id = "CriminalRecord"> Do any of the applicants have a criminal record?
				</div>
				<div class = "col-xs-12">
					<input type = "checkbox" name = "Drugs" id = "Drugs"> Do any of the applicants use drugs?
				</div>
				<div class = "col-xs-12">
					<input type = "checkbox" name = "Smoke" id = "Smoke"> Do any of the applicants smoke?
				</div>
			</fieldset>
			
			<fieldset>
				<legend>
					Emergency Contacts: 1 Relative, 1 Friend
				</legend>
				<div class = "row">
					<div class = "col-xs-6">
						Name: <input type = "text" name = "EmergencyContact1" id = "EmergencyContact1">
					</div>
					<div class = "col-xs-6">
						Name: <input type = "text" name = "EmergencyContact2" id = "EmergencyContact2">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Address: <input type = "text" name = "AddressContact1" id = "AddressContact1">
					</div>
					<div class = "col-xs-6">
						Address: <input type = "text" name = "AddressContact2" id = "AddressContact2">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Phone Number: <input type = "tel" name = "PhoneContact1" id = "PhoneContact1">
					</div>
					<div class = "col-xs-6">
						Phone Number: <input type = "tel" name = "PhoneContact2" id = "PhoneContact2">
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-6">
						Relationship: <input type = "tel" name = "RelationContact1" id = "RelationContact1">
					</div>
					<div class = "col-xs-6">
						Relationship: <input type = "tel" name = "RelationContact2" id = "RelationContact2">
					</div>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>
					Terms to be included in this lease agreement
				</legend>
				<div class = "row">
					<div class = "col-xs-2">
						1)NO PETS
					</div>
					<div class = "col-xs-10">
						No pets unless written permission given by Landlord; pets brought onto premesis without written consent will immediately
						be just cause for lease termination.
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-2">
						2)UTILITIES
					</div>
					<div class = "col-xs-10">
						All utilities are the tenants responsibility unless stated otherwise in the lease agreement. Utilities must be in the tenants 
						name prior to releasing keys.
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-2">
						3)INSURANCE
					</div>
					<div class = "col-xs-10">
						The tenant must insure their own belongings against damage / loss and have a liability clause. A copy of proof of insurance 
						must be given to the Landlord within 3 days of occupancy.
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-2">
						4)NON - SMOKING
					</div>
					<div class = "col-xs-10">
						The premises are NON - SMOKING
					</div>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>
					Applicant statement and assent to criminal record and credit check
				</legend>
				<div class = "col-xs-12">
							All statements that I have made in this application are true. I authorize the Landlord to do a credit check and criminal 
							background check. By signing this application ALL personal information is consensually given for use by us or our 
							appointed agents in respect to the application, subsequent tenancy, or on-file records in accordance to The Personal Information 
							Protection and Electronic Documents Act (PIPEDA 2004). This is to include and extend to the gathering of and consent to 
							access of account information and status for ALL utility companies that the Tenant(s) may enter into contracts with for the 
							duration and for periods after the termination of the tenancy to ensure accounts are in good and current standing during and at 
							the completion of the lease period.
					</div>
			</fieldset>
		
			<fieldset>
				<legend>
					Applicant Signatures
				</legend>
				<div class = "row">
					<div class = "col-xs-3" id = "AppSignature">
						Signature of Primary Applicant
					</div>
					<div class = "col-xs-9" id = "AppSignature">
						____________________________________________________________________
					</div>
				</div>
				<div class = "row">
					<div class = "col-xs-3" id = "AppSignature">
						Signature of Secondary Applicant
					</div>
					<div class = "col-xs-9" id = "AppSignature">
						____________________________________________________________________
					</div>
				</div>
			</fieldset>
			
			<div class = "row">
				<div class = "col-xs-10">
					By clicking submit, you agree with the terms of this application and authorise us to perform credit checks as required.
				</div>
				<div class = "col-xs-2">';
	$pdf->writeHTML($html, false, false, false, false, '');
	$pdf->Output('application.pdf', 'I');
?>