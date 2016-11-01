<?php
/*
PrimaryPhone
PrimaryEmail
SecondaryPhone
SecondaryEmail
PrimaryAddress
HavePet
PetName
PetType
NumOccupants
NumAdults
NumChildren
ReqDate
RentEarlier
App1FirstName
App1MiddleName
App1LastName
App1CurrentAddress
App1CurrentCity
App1CurrentProvince
App1CurrentPostalCode
App1DriversLicence
App1DriversLicenceProvince
App1HowLong
App1Reason
App2FirstName
App2MiddleName
App2LastName
App2CurrentAddress
App2CurrentCity
App2CurrentProvince
App2CurrentPostalCode
App2DriversLicence
App2DriversLicenceProvince
App2Reason
App2HowLong
SubstantiateRequest
SubstantiateRequestAmount
App1Employer
App1Position
App1Supervisor
App1EmploymentHowLong
App1EmploymentAddress
App1MonthlyIncome
App1EmploymentPhone
App1PrevEmployer
App1PrevPosition
App1PrevSupervisor
App1PrevEmploymentHowLong
App1PrevEmploymentAddress
App1PrevMonthlyIncome
App2Employer
App2Position
App2Supervisor
App2EmploymentHowLong
App2EmploymentAddress
App2MonthlyIncome
App2EmploymentPhone
App2PrevEmployer
App2PrevPosition
App2PrevSupervisor
App2PrevEmploymentHowLong
App2PrevEmploymentAddress
App2PrevMonthlyIncome
App1CurrentLandlord
App1CurrentLandlordPhone
App1FormerLandlord
App1FormerLandlordPhone
App2CurrentLandlord
App2CurrentLandlordPhone
App2FormerLandlordPhone
App2FormerLandlord
Evicted
CriminalRecord
Drugs
Smoke
EmergencyContact1
EmergencyContact2
AddressContact1
AddressContact2
PhoneContact1
PhoneContact2
RelationContact1
RelationContact2

$_POST[''];
*/

if (!ISSET($_POST['SubstantiateRequest'])) $SubstantiateRequest = 0;
else $SubstantiateRequest = 1;
require ('scripts/phpMaster.php');
require_once('scripts/tcpdf/tcpdf.php');
$sqlLib = new SQL(); //Creates objects for interactions with SQL methods.
$sqlLib->addTenent($_POST['App1FirstName'], $_POST['App1LastName'], $_POST['SecondaryPhone'], $_POST['PrimaryPhone'], $_POST['PrimaryEmail'], $_POST['App1DriversLicence'], $SubstantiateRequest);
if ($_POST['App2FirstName'] != null) $sqlLib->addTenent($_POST['App2FirstName'], $_POST['App2LastName'], $_POST['SecondaryPhone'], $_POST['PrimaryPhone'], $_POST['PrimaryEmail'], $_POST['App2DriversLicence'], $SubstantiateRequest);

	
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Riley');
	$pdf->SetTitle('TenantApplication');
	$pdf->setPrintHeader(true); 	
	$html =          	
"<p>Primary phone number:\t". $_POST['PrimaryPhone'] ."</p>
<p>Primary Email:\t". $_POST['PrimaryEmail'] ."</p>
<p>Primary phone number:\t". $_POST['PrimaryPhone'] ."</p>
 <p>Primary Email:\t". $_POST['PrimaryEmail'] ."</p>
  <p>Secondary Phone:\t". $_POST['SecondaryPhone'] ."</p>
  <p>Secondary Email:\t". $_POST['SecondaryEmail'] ."</p>
  <p>Primary Address\t". $_POST['PrimaryAddress'] ."</p>
  <p>Have Pet\t". $_POST['HavePet'] ."</p>
  <p>Pet Name\t". $_POST['Pet Name'] ."</p>
  <p>Pet Type:\t". $_POST['PetType'] ."</p>
  <p>Number of Occupants:\t". $_POST['NumOccupants'] ."</p>
  <p>Number of Adults:\t". $_POST['NumAdults'] ."</p>
  <p>Number of Children:\t". $_POST['NumChildren'] ."</p>
  <p>Request Date:\t". $_POST['ReqDate'] ."</p>
  <p>Rent Earlier:\t". $_POST['RentEarlier'] ."</p>
  <p>Primary Renter First Name:\t". $_POST['App1FirstName'] ."</p>
  <p>Primary Renter Middle Name:\t". $_POST['App1MiddleName'] ."</p>
  <p>Primary Renter Last Name:\t". $_POST['App1LastName'] ."</p>
  <p>Primary Renter Current Address:\t". $_POST['App1CurrentAddress'] ."</p>
  <p>Primary Renter Current City:\t". $_POST['App1CurrentCity'] ."</p>
  <p>Primary Renter Current Province:\t". $_POST['App1CurrentProvince'] ."</p>
  <p>Primary Renter Current PostalCode:\t". $_POST['App1CurrentPostalCode'] ."</p>
  <p>Primary Renter Drivers Licence:\t". $_POST['App1DriversLicence'] ."</p>
  <p>Primary Renter Drivers Licence Province:\t". $_POST['App1DriversLicenceProvince'] ."</p>
  <p>Primary Renter Drivers Licence Province:\t". $_POST['App1DriversLicenceProvince'] ."</p>";
	$pdf->AddPage();
	$pdf->writeHTML($html, false, false, false, false, '');
	$pdf->Output('application.pdf', 'I');

//echo 'saved some data to database';
?>
