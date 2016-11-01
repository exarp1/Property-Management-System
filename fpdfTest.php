<?php
require('scripts/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->cell(40);
$pdf->Cell(10,10,'Application For Rental Accommodation');
				/*Primary Phone Number:
				Primary EMail:
				Secondary Phone Number:
				Secondary EMail:
				ACCOMODADION INFORMATION
				Address of premises to be leased:
				Do You have a Pet?
				Name of Pet:
				Type of Pet:
				Number of occupants residing within the premises:
				Number of Adults:
				Number of Children:
				Required Date to Occupy:
				Would you be willing to rent the suit earlier if needed?
				Personal Information of Applicant One
				First Name
				Middle Name
				Last Name
				Current Address
				Current City
Current Province
Current Postal Code
Drivers Licence #
Drivers Licence Province
How long at current address
Reason for leaving
Personal Information of Applicant Two
First Name
Middle Name
Last Name
Current Address
Current City
Current Province
Current Postal Code
Drivers Licence #
Drivers Licence Province
How long at current address
Reason for leaving
Applicant Deposit Statement
Check here if you are able to substantiate your request to rent the said property by giving the landlord an application deposit today?

I want to lease from BMC. At the above noted premises and as an indication of my good faith in making this offer, I hereby hand to the Landlord the sum of: in the form of cheque, cash, money order, or email transfer, as an Application Deposit for the rental of the said premises. This is with the understanding that if my application is accepted, the deposit shall be retained by the Landlord as a "Rental Deposit" towards the damage deposit / first months rent, in accordance with the provisions of the Lease Agreement and if my application is not accepted by the Landlord the full application deposit will be refunded to me. This is provided however, that if my offer is accepted and I cancel or breach the application of fail to execute the Lease Agreement when prepared and presented, then I agree that the said deposit shall be absolutely forfeited to the Landlord. This shall be considered liquidated damages.
Employment Information of Applicant One
Current Employer
Position / Occupation
Supervisor
How Long
Address
Monthly Income
Phone Number
Previous Employer
Position / Occupation
Supervisor
How Long
Address
Monthly Income
Employment Information of Applicant Two
Current Employer
Position / Occupation
Supervisor
How Long
Address
Monthly Income
Phone Number
Previous Employer
Position / Occupation
Supervisor
How Long
Address
Monthly Income
Rental History of Applicant One
Current Landlord
Phone Number
Former Landlord
Phone Number
Rental History of Applicant Two
Current Landlord
Phone Number
Former Landlord
		Phone Number
Applicant Questionnaire (Check all that apply)
		Have any of you ever been evicted or asked by a Landlord or his agent to leave a rented premises?
		Do any of the applicants have a criminal record?
		Do any of the applicants use drugs?
		Do any of the applicants smoke?
		Emergency Contacts: 1 Relative, 1 Friend
		Name:
Name:
Address:
Address:
Phone Number:
Phone Number:
Relationship:
Relationship:
Terms to be included in this lease agreement
1)NO PETS
No pets unless written permission given by Landlord; pets brought onto premesis without written consent will immediately be just cause for lease termination.
2)UTILITIES
All utilities are the tenants responsibility unless stated otherwise in the lease agreement. Utilities must be in the tenants name prior to releasing keys.
3)INSURANCE
The tenant must insure their own belongings against damage / loss and have a liability clause. A copy of proof of insurance must be given to the Landlord within 3 days of occupancy.
4)NON - SMOKING
The premises are NON - SMOKING
Applicant statement and assent to criminal record and credit check
All statements that I have made in this application are true. I authorize the Landlord to do a credit check and criminal background check. By signing this application ALL personal information is consensually given for use by us or our appointed agents in respect to the application, subsequent tenancy, or on-file records in accordance to The Personal Information Protection and Electronic Documents Act (PIPEDA 2004). This is to include and extend to the gathering of and consent to access of account information and status for ALL utility companies that the Tenant(s) may enter into contracts with for the duration and for periods after the termination of the tenancy to ensure accounts are in good and current standing during and at the completion of the lease period.');
*/$pdf->Output();
?>
