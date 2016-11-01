<?php
class Auth {
    //Info: Only used for login page.
	//Performance-Impact: Low
    //Effects: Will Re-Route to proper homepage if already authorized.
    function loginland() {
        session_start();
        if (ISSET($_SESSION["userlvl"])) {
            if ($_SESSION["userlvl"] == 1)header("Location: admin/home.php");
            else header("Location: tenant/home.php");
            die();
        } else {
            session_unset();
            session_destroy();
        }
    }
    //Info: Used for pages that only end-users will use.
	//Performance-Impact: Low
    //Effects: Re-Route to login page if not authorized.
    function userland() {
        session_start();
        if (ISSET($_SESSION["userlvl"])) {
            if ($_SESSION["userlvl"] == 1){
                header("Location: admin/home.php");
                die();
            }
        } else{
            session_unset();
            session_destroy();
            header("Location: index.php");
            die();
        }
    }
    //Info: Used for pages that only admins are permitted.
	//Performance-Impact: Low
    //Effects: Will destroy session and Re-Route to forbidden.php if unauthorised.
    function adminland() {
        session_start();
        if ($_SESSION["userlvl"] != 1){
            session_unset();
            session_destroy();
            header("Location: forbidden.php");
            die();
        }
    }
    //Info: Used when the page will be used by end-users and admins.
	//Performance-Impact: Low
    //Effects: Re-Route to login page if not authorized.
    function shareland() {
        session_start();
        if (!ISSET($_SESSION["userlvl"])) {
            session_unset();
            session_destroy();
            header("Location: index.php");
            die();
        }
    }
}
class SQL {
    private $con;
    function __construct() {
        $mysqli = mysqli_init();	//'192.139.33.81:443', 'remote', '6f6#du5*OdR^6FC$8#SjsX!xqo', 'property_managment'
        mysqli_options($mysqli, MYSQLI_OPT_CONNECT_TIMEOUT, "2"); //Sets timeout to 2 second.
        if (@mysqli_real_connect($mysqli, '192.139.33.81:443', 'remote', '6f6#du5*OdR^6FC$8#SjsX!xqo', 'property_managment')); //Attempts to login to public side of the server.
        else mysqli_real_connect($mysqli, 'localhost', 'root', '', 'property_managment'); //Final fall-back to localhost server.
        //else if (@mysqli_real_connect($mysqli, '192.168.1.202:49654', 'remote', '6f6#du5*OdR^6FC$8#SjsX!xqo', 'property_managment')); //Fall-back to lan-side of public server.
        //else mysqli_real_connect($mysqli, 'localhost', 'root', '', 'property_managment'); //Final fall-back to localhost server.
        //mysqli_real_connect($mysqli, 'localhost', 'root', '', 'property_managment');
        $this->con = $mysqli;
   }
    function __destruct() {
       mysqli_close($this->con);
   }
    //Info: Gets the hash record for a single account.
	//Performance-Impact: Low
    //Requires: Account_ID. eg(545445)
    //Returns: Hash for associated account.
    function getAccountHashSQL($a1) {
        if ($stmt = $this->con->prepare("SELECT password FROM accounts WHERE account_id=?")) { //Create a prepared statement
            $stmt->bind_param("s", $_SESSION["account_id"]); //Bind parameters for markers
            $stmt->execute(); //Execute query
            $stmt->bind_result($hash); //Bind result variables
            $stmt->fetch(); //Fetch value
            $stmt->close(); //Close statement
            return $hash;
        }
    }
    //Info: Changes the Hash record for a single account.
	//Performance-Impact: Low
    //Requires: New hashed password, Account_ID. eg.(HASH, 454845)
    function setAccountPassSQL($a1, $a2) {
        if ($stmt = $this->con->prepare("UPDATE accounts SET password=? WHERE account_id=?")) { //Create a prepared statement
            $stmt->bind_param("si", $a1, $a2); //Bind parameters for markers
            $stmt->execute(); //Execute query
            $stmt->close();
        }
    }
    //Info: Gets records from an account.
	//Performance-Impact: Low
    //Requires: UserName eg.(user453)
    //Returns: hash, userlvl, account_id.
    function getAccountRecordSQL($a1) {
        if ($stmt = $this->con->prepare("SELECT password, userlvl, account_id FROM accounts WHERE user_name=?")) { //Create a prepared statement
            $stmt->bind_param("s", $a1); //Bind parameters for markers
            $stmt->execute(); // Execute query
            $stmt->bind_result($hash, $userlvl, $account_id); //Bind result variables
            $stmt->fetch(); //Fetch value
            $stmt->close(); //Close statement
            $array = [
            "hash" => $hash,
            "userlvl" => $userlvl,
            "account_id" => $account_id,
            ];
            return $array;
        }
    }
    //Info: Lets you pre-parse everything yourself for a file to upload.
	//Performance-Impact: Med
    //Requires: fileName, fileSize, fileType, content, refId, refLocation, _$FILES global to be set. eg.(phpMaster.php, 5674, application/octet-stream, BLOB, 54, Tenant).
    function setDocumentPreParsed($fileName, $fileSize, $fileType, $content, $refId, $refLocation) {
        if ($stmt = $this->con->prepare("INSERT INTO documents(ref_id, ref_location, doc_name, doc_filetype, doc_size, doc_content) VALUES (?, ?, ?, ?, ?, ?)")) { //Create a prepared statement
            $stmt->bind_param("iissss", $refId, $refLocation, $fileName, $fileType, $fileSize, $content); //Bind parameters for markers
            $stmt->execute(); //Execute query
            $stmt->close();
        }
    }
    //Info: Lets you pre-parse everything yourself for a file to upload, but with no reference information.
	//Performance-Impact:  Med
    //Requires: fileName, fileSize, fileType, content, _$FILES global to be set. eg.(phpMaster.php, 5674, application/octet-stream, BLOB).
    function setDocumentPreParsedNoRef($fileName, $fileSize, $fileType, $content) {
        if ($stmt = $this->con->prepare("INSERT INTO documents(ref_id, ref_location, doc_name, doc_filetype, doc_size, doc_content) VALUES (?, ?, ?, ?)")) { //Create a prepared statement
            $stmt->bind_param("ssss", $fileName, $fileType, $fileSize, $content); //Bind parameters for markers
            $stmt->execute(); //Execute query
            $stmt->close();
        }
    }
    //Info: Upload a file with reference information.
	//Performance-Impact: Med
    //Requires: File reference id and reference location, _$FILES global to be set. eg.(54, Tenant).
    function setDocument($refId, $refLocation) {
        $content = file_get_contents($_FILES['userfile']['tmp_name']);
        if(!get_magic_quotes_gpc())$_FILES['userfile']['name'] = addslashes($_FILES['userfile']['name']);
        if ($stmt = $this->con->prepare("INSERT INTO documents(ref_id, ref_location, doc_name, doc_filetype, doc_size, doc_content) VALUES (?, ?, ?, ?, ?, ?)")) { //Create a prepared statement
            $stmt->bind_param("iissss", $refId, $refLocation, $_FILES['userfile']['name'], $_FILES['userfile']['type'], $_FILES['userfile']['size'], $content); //Bind parameters for markers
            $stmt->execute(); //Execute query
            $stmt->close();
        }
    }
    //Info: Upload a file with no association with anything.
	//Performance-Impact: Med
    //Requires: _$FILES global to be set.
    function setDocumentNoRef() {
        $content = file_get_contents($_FILES['userfile']['tmp_name']);
        if(!get_magic_quotes_gpc())$_FILES['userfile']['name'] = addslashes($_FILES['userfile']['name']);
        if ($stmt = $this->con->prepare("INSERT INTO documents(doc_name, doc_filetype, doc_size, doc_content) VALUES (?, ?, ?, ?)")) { //Create a prepared statement
            $stmt->bind_param("ssss", $_FILES['userfile']['name'], $_FILES['userfile']['type'], $_FILES['userfile']['size'], $content); //Bind parameters for markers
            $stmt->execute(); //Execute query
            $stmt->close();
        }
    }
    //Info: Gets all complaint records that are not marked resolved.
	//Performance-Impact: Med-VeryHigh, dependant the size of the table.
    //Returns: firstname, lastname, complaint, status.
    function getUnresolvedComplaintsInJson() {
        $stringArray = [];
        $complaintArray = [];
        $tenant_idArray = [];
        $statusArray = [];
        $account_idArray = [];
        $firstnameArray = [];
        $lastnameArray = [];

        if ($stmt = $this->con->prepare("SELECT tenant_id, complaint, status FROM complaints WHERE status != 'Resolved'")) {
            $stmt->execute();
            $stmt->bind_result($tenant_id, $complaint, $status);
            while ($stmt->fetch()){
                array_push($complaintArray, $complaint);
                array_push($tenant_idArray, $tenant_id);
                array_push($statusArray, $status);
            }
            $stmt->close();
        }

        if ($stmt = $this->con->prepare("SELECT firstname, lastname FROM tenant WHERE tenant_id = ?")) {
        $len = count($tenant_idArray);
        $stmt->bind_result($firstname, $lastname);
        for($i = 0;$i<$len;$i++){
            $stmt->bind_param("s", $tenant_idArray[$i]);
            $stmt->execute();
            $stmt->fetch();
            array_push($firstnameArray, $firstname);
            array_push($lastnameArray, $lastname);
        }
        $stmt->close();

        array_push($stringArray, 'var complaintData = [');
        for($i = 0;$i<$len;$i++){
            array_push($stringArray, '
                {
                    "firstname": "', $firstnameArray[$i], '",
                    "lastname": "', $lastnameArray[$i], '",
                    "status": "', $statusArray[$i], '",
                    "complaint": "', $complaintArray[$i], '"
                },');
        }
        }
        array_push($stringArray, '
        ];');

        $string = implode("", $stringArray);
        return $string;
    }
    //Info:Gets all building records.
	//Performance-Impact: Med
    //Returns:building_id, name, address, city, province, building_notes.
    function getAllBuildingRecordsInJson() {
        $stringArray = [];
        if ($stmt = $this->con->prepare("SELECT building_id, name, address, city, province, building_notes FROM building")) {
            $stmt->execute(); // Execute query
            $stmt->bind_result($building_id, $name, $address, $city, $province, $building_notes);
            array_push($stringArray, 'var buildingData = [');
            while ($stmt->fetch()){
                array_push($stringArray, '
                {
                    "building_id": "', $building_id, '",
                    "name": "', $name, '",
                    "address": "', $address, '",
                    "city": "', $city, '",
                    "province": "', $province, '",
                    "building_notes": "', $building_notes, '"
                },');
            } //Fetch value
            $stmt->close(); //Close statement
            array_push($stringArray, '
        ];');
            $string = implode("", $stringArray);
            return $string;
            }
    }
	//Info: Gets all unit records.
	//Performance-Impact: Med-High
    //Returns:unit_id, building_id, unit_number, unit_notes.
	function getAllUnitRecordsInJson() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT unit_id, building_id, unit_number, unit_notes FROM unit")) {
            $stmt->execute();
            $stmt->bind_result($unit_id, $building_id, $unit_number, $unit_notes);
            array_push($stringArray, 'var unitData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "unit_id": "', $unit_id, '",
                        "building_id": "', $building_id, '",
                        "unit_number": "', $unit_number, '",
                        "unit_notes": "', $unit_notes, '"
                     },   ');
            }
            $stmt->close();
            array_push($stringArray, '
                ];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	//Info: Gets everything in the accounts table.
	//Performance-Impact: Heavy
    //Returns:account_id, user_name, password, userlvl.
	function getAllAccountsInJson() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT account_id, user_name, password, userlvl FROM accounts")) {
            $stmt->execute();
            $stmt->bind_result($account_id, $user_name, $password, $userlvl);
            array_push($stringArray, 'var accountsData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "account_id": "', $account_id, '",
                        "user_name": "', $user_name, '",
                        "password": "', $password, '",
                        "userlvl": "', $userlvl, '"
                     },   ');
            }
            $stmt->close();
            array_push($stringArray, '
                ];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	//Info: Gets everything in the complaints table.
	//Performance-Impact: Heavy
    //Returns:complaint_id, tenant_id, status, complaint.
	function getAllComplaintsInJson() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT complaint_id, tenant_id, status, complaint FROM complaints")) {
            $stmt->execute();
            $stmt->bind_result($complaint_id, $tenant_id, $status, $complaint);
            array_push($stringArray, 'var complaintData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "complaint_id": "', $complaint_id, '",
                        "tenant_id": "', $tenant_id, '",
                        "status": "', $status, '",
                        "complaint": "', $complaint, '"
                     },   ');
            }
            $stmt->close();
            array_push($stringArray, '
                ];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	//Info: Gets everything except the actual file in the documents table.
	//Performance-Impact: Heavy
    //Returns:doc_id, ref_id, ref_location, submission_time, doc_name, doc_filetype, doc_size.
	function getAllDocumentsInfoInJson() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT doc_id, ref_id, ref_location, submission_time, doc_name, doc_filetype, doc_size FROM documents")) {
            $stmt->execute();
            $stmt->bind_result($doc_id, $ref_id, $ref_location, $submission_time, $doc_name, $doc_filetype, $doc_size);
            array_push($stringArray, 'var documentsData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "doc_id": "', $doc_id, '",
                        "ref_id": "', $ref_id, '",
                        "ref_location": "', $ref_location, '",
						"submission_time": "', $submission_time, '",
						"doc_name": "', $doc_name, '",
						"doc_filetype": "', $doc_filetype, '",
						"doc_size": "', $doc_size, '"
                     },   ');
            }
            $stmt->close();
            array_push($stringArray, '
                ];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	//Info: Gets everything in the rental table.
	//Performance-Impact: Heavy
    //Returns:rental_id, tenant_id, unit__id, rent_monthly_amount, rent_currently_due, rent_duedate, damage_deposit_bal, status.
	function getAllRentalsInJson() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT rental_id, tenant_id, unit__id, rent_monthly_amount, rent_currently_due, rent_duedate, damage_deposit_bal, status FROM rental")) {
            $stmt->execute();
            $stmt->bind_result($rental_id, $tenant_id, $unit__id, $rent_monthly_amount, $rent_currently_due, $rent_duedate, $damage_deposit_bal, $status);
            array_push($stringArray, 'var rentalData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "rental_id": "', $rental_id, '",
                        "tenant_id": "', $tenant_id, '",
                        "unit__id": "', $unit__id, '",
						"rent_monthly_amount": "', $rent_monthly_amount, '",
						"rent_currently_due": "', $rent_currently_due, '",
						"rent_duedate": "', $rent_duedate, '",
						"damage_deposit_bal": "', $damage_deposit_bal, '",
                        "status": "', $status, '"
                     },   ');
            }
            $stmt->close();
            array_push($stringArray, '
                ];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	//Info: Gets everything in the tenant table.
	//Performance-Impact: Defcon, Destroyer of servers.
    //Returns:account_id, application_date, entry_date, exit_date, firstname, lastname, home_phone, cell_phone, work_phone, email, drivers_licence, ddeposit_prepayable, tenant_notes.
	function getAllTenantsInJson() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT account_id, application_date, entry_date, exit_date, firstname, lastname, home_phone, cell_phone, work_phone, email, drivers_licence, ddeposit_prepayable, tenant_notes FROM tenant")) {
            $stmt->execute();
            $stmt->bind_result($account_id, $application_date, $entry_date, $exit_date, $firstname, $lastname, $home_phone, $cell_phone, $work_phone, $email, $drivers_licence, $ddeposit_prepayable, $tenant_notes);
            array_push($stringArray, 'var tenantData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "account_id": "', $account_id, '",
                        "application_date": "', $application_date, '",
                        "entry_date": "', $entry_date, '",
						"exit_date": "', $exit_date, '",
						"firstname": "', $firstname, '",
						"lastname": "', $lastname, '",
						"home_phone": "', $home_phone, '",
						"cell_phone": "', $cell_phone, '",
						"work_phone": "', $work_phone, '",
						"email": "', $email, '",
						"drivers_licence": "', $drivers_licence, '",
						"ddeposit_prepayable": "', $ddeposit_prepayable, '",
						"tenant_notes": "', $tenant_notes, '"
                     },   ');
            }
            $stmt->close();
            array_push($stringArray, '
                ];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	//Info: Gets everything in the work_order table.
	//Performance-Impact: Heavy
    //Returns:workorder_id, building_id, unit_id, complaint_id, completed, work_details.
	function getAllWorkOrdersInJson() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT workorder_id, building_id, unit_id, complaint_id, completed, work_details FROM work_order")) {
            $stmt->execute();
            $stmt->bind_result($workorder_id, $building_id, $unit_id, $complaint_id, $completed, $work_details);
            array_push($stringArray, 'var workOrderData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "workorder_id": "', $workorder_id, '",
                        "building_id": "', $building_id, '",
                        "unit_id": "', $unit_id, '",
						"complaint_id": "', $complaint_id, '",
						"completed": "', $completed, '",
						"work_details": "', $work_details, '"
                     },   ');
            }
            $stmt->close();
            array_push($stringArray, '
                ];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	function getRentals() {
        $stringArray = [];
        if($stmt = $this->con->prepare("SELECT building.building_id, rental.tenant_id, unit.unit_id, unit.unit_number, rental.status, unit.unit_notes FROM unit INNER JOIN rental ON rental.unit__id=unit.unit_id INNER JOIN building ON building.building_id=unit.building_id")) {
            $stmt->execute();
            $stmt->bind_result($building_id, $tenant_id , $unit_id, $unit_number, $status, $unit_notes);
            array_push($stringArray, 'var rentalData = [');
            while($stmt->fetch()) {
                array_push($stringArray, '
                    {
                        "building_id": "', $building_id,'",
                        "tenant_id": "', $tenant_id ,'",
                        "unit_id": "', $unit_id ,'",
                        "unit_number": "', $unit_number ,'",
                        "status": "', $status ,'",
                        "unit_notes": "', $unit_notes ,'",
                    },'); 
            }
            $stmt->close();
            array_push($stringArray, '];');
            $string = implode("", $stringArray);
            return $string;
        }
    }
	//Info:
	//Performance-Impact: Low
    //Requires:
    function addTenent($firstname, $lastname, $home_phone, $cell_phone, $email, $drivers_licence, $ddeposit_prepayable) {
        if ($stmt = $this->con->prepare("INSERT INTO tenant(firstname, lastname, home_phone, cell_phone, email, drivers_licence, ddeposit_prepayable) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("ssssssi", $firstname, $lastname, $home_phone, $cell_phone, $email, $drivers_licence, $ddeposit_prepayable);
            $stmt->execute();
            $stmt->close();
        }
    }
	//Info:
	//Performance-Impact: Unknown
    //Returns:
	/*
	function getTenantRecordsInJson($unit_id) {
        $stringArray = [];
        if ($stmt = $this->con->prepare("SELECT account_id, application_date, entry_date, exit_date, firstname, lastname, home_phone, cell_phone, work_phone, email, drivers_licence, ddeposit_prepayable, tenant_notes FROM tenant WHERE tenant_id = ?")) {
			$stmt->bind_param("i", $tenant_id); //Bind parameters for markers
            $stmt->execute(); // Execute query
            $stmt->bind_result($account_id, $application_date, $entry_date, $exit_date, $firstname, $lastname, $home_phone, $cell_phone, $work_phone, $email, $drivers_licence, $ddeposit_prepayable, $tenant_notes);
            array_push($stringArray, 'var data = [');
            while ($stmt->fetch()){
                array_push($stringArray, '
                {	
					"tenant_id": "', $tenant_id, '",
                    "account_id": "', $account_id, '",
                    "application_date": "', $application_date, '",
					"entry_date": "', $entry_date, '",
					"exit_date": "', $exit_date, '",
					"firstname": "', $firstname, '",
					"lastname": "', $lastname, '",
					"home_phone": "', $home_phone, '",
					"cell_phone": "', $cell_phone, '",
					"work_phone": "', $work_phone, '",
					"email": "', $email, '",
					"drivers_licence": "', $drivers_licence, '",
					"ddeposit_prepayable": "', $ddeposit_prepayable, '",
					"tenant_notes": "', $tenant_notes, '"
                },');
            } //Fetch value
            $stmt->close(); //Close statement
            array_push($stringArray, '
        ];');
            $string = implode("", $stringArray);
            return $string;
            }
    }
	*/
}
?>
