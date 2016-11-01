<?php
//IN SQL CLASS

	//Info:Gets all unresolved complaints.
	//Returns:tenant_id, complaint, status;
	function getUnresolvedComplaintRecords() {
		$complaintArray = [];
		$tenant_idArray = [];
		$statusArray = [];
		if ($stmt = $this->con->prepare("SELECT tenant_id, complaint, status FROM complaints WHERE status != 'Resolved'")) { //Create a prepared statement          
			$stmt->execute(); // Execute query     
			$stmt->bind_result($tenant_id, $complaint, $status); //Bind result variables 
			while ($stmt->fetch()){
				array_push($complaintArray, $complaint);
				array_push($tenant_idArray, $tenant_id);
				array_push($statusArray, $status);
			} //Fetch value   
			$stmt->close(); //Close statement
			$array = [
			"complaint" => $complaintArray,
			"tenant_id" => $tenant_idArray,
			"status" => $statusArray,
			];
			return $array;
			}
	}
	//Info:Gets partial records from tennents.
	//Requires:Array of tennent id's
	//Returns:tenant_id, account_id, firstname, lastname.
	function getMultibleTenantBasicRecords($tenant_idArray) {
		$account_idArray = [];
		$firstnameArray = [];
		$lastnameArray = [];
		if ($stmt = $this->con->prepare("SELECT account_id, firstname, lastname FROM tenant WHERE tenant_id = ?")) { //Create a prepared statement 
			$len = count($tenant_idArray);
			for($i = 0;$i<$len;$i++){ 
				$stmt->bind_param("s", $tenant_idArray[$i]);//Bind parameters for markers				
				$stmt->execute(); // Execute query     
				$stmt->bind_result($account_id, $firstname, $lastname); //Bind result variables 
				$stmt->fetch(); //Fetch value 
				array_push($account_idArray, $account_id);
				array_push($firstnameArray, $firstname);
				array_push($lastnameArray, $lastname);				
			}			
			$stmt->close(); //Close statement
			$array = [
			"tenant_id" => $tenant_idArray,
			"account_id" => $account_idArray,
			"firstname" => $firstnameArray,
			"lastname" => $lastnameArray
			];
			return $array;
			}
	}
	//Info:Gets records from tennents.
	//Requires:Array of tennent id's
	//Returns:Alot of stuff.
	function getMultibleCompleteTenantRecords($tenant_idArray) {
		$account_idArray = [];
		$application_dateArray = [];
		$entry_dateArray = [];
		$exit_dateArray = [];
		$firstnameArray = [];
		$lastnameArray = [];
		$home_phoneArray = [];
		$cell_phoneArray = [];
		$work_phoneArray = [];
		$emailArray = [];
		$drivers_licenceArray = [];
		$ddeposit_prepayableArray = [];
		$tenant_notesArray = [];
		if ($stmt = $this->con->prepare("SELECT account_id, application_date, entry_date, exit_date, firstname, lastname, home_phone, cell_phone, work_phone, email, drivers_licence, ddeposit_prepayable, tenant_notes FROM tenant WHERE tenant_id = ?")) { //Create a prepared statement 
			$len = count($tenant_idArray);
			for($i = 0;$i<$len;$i++){ 
				$stmt->bind_param("s", $tenant_idArray[$i]);//Bind parameters for markers				
				$stmt->execute(); // Execute query     
				$stmt->bind_result($account_id, $application_date, $entry_date, $exit_date, $firstname, $lastname, $home_phone, $cell_phone, $work_phone, $email, $drivers_licence, $ddeposit_prepayable, $tenant_notes);
				$stmt->fetch(); //Fetch value 
				array_push($account_idArray, $account_id);	
				array_push($application_dateArray, $application_date);
				array_push($entry_dateArray, $entry_date);
				array_push($exit_dateArray, $exit_date);
				array_push($firstnameArray, $firstname);
				array_push($lastnameArray, $lastname);
				array_push($home_phoneArray, $home_phone);
				array_push($cell_phoneArray, $cell_phone);
				array_push($work_phoneArray, $work_phone);
				array_push($emailArray, $email);
				array_push($drivers_licenceArray, $drivers_licence);
				array_push($ddeposit_prepayableArray, $ddeposit_prepayable);
				array_push($tenant_notesArray, $tenant_notes);				
			}			
			$stmt->close(); //Close statement
			$array = [
			"tenant_id" => $tenant_idArray,
			"account_id" => $account_idArray,
			"application_date" => $application_dateArray,
			"entry_date" => $entry_dateArray,
			"exit_date" => $exit_dateArray,
			"firstname" => $firstnameArray,
			"lastname" => $lastnameArray,
			"home_phone" => $home_phoneArray,
			"cell_phone" => $cell_phoneArray,
			"work_phone" => $work_phoneArray,
			"email" => $emailArray,
			"drivers_licence" => $drivers_licenceArray,
			"ddeposit_prepayable" => $ddeposit_prepayableArray,
			"tenant_notes" => $tenant_notesArray
			];
			return $array;
			}
	}
	//Info:Gets all building records
	//Returns:building_id, name, address, city, province, building_notes.
	function getBuildingRecords() {
		$building_idArray = [];
		$nameArray = [];
		$addressArray = [];
		$cityArray = [];
		$provinceArray = [];
		$building_notesArray = [];
		if ($stmt = $this->con->prepare("SELECT building_id, name, address, city, province, building_notes FROM building")) { //Create a prepared statement          
			$stmt->execute(); // Execute query     
			$stmt->bind_result($building_id, $name, $address, $city, $province, $building_notes); //Bind result variables 
			while ($stmt->fetch()){
				array_push($building_idArray, $building_id);
				array_push($nameArray, $name);
				array_push($addressArray, $address);
				array_push($cityArray, $city);
				array_push($provinceArray, $province);
				array_push($building_notesArray, $building_notes);
			} //Fetch value   
			$stmt->close(); //Close statement
			$array = [
			"building_id" => $building_idArray,
			"name" => $nameArray,
			"address" => $addressArray,
			"city" => $cityArray,
			"province" => $provinceArray,
			"building_notes" => $building_notesArray,
			];
			return $array;
			}
	}
	//Info:Gets records from tennents.
	//Requires:Array of tennent id's
	//Returns:Alot of stuff.
	function getCompleteTenantRecord($tenant_id) {
		if ($stmt = $this->con->prepare("SELECT account_id, application_date, entry_date, exit_date, firstname, lastname, home_phone, cell_phone, work_phone, email, drivers_licence, ddeposit_prepayable, tenant_notes FROM tenant WHERE tenant_id = ?")) { //Create a prepared statement 
			$stmt->bind_param("s", $tenant_id);//Bind parameters for markers				
			$stmt->execute(); // Execute query     
			$stmt->bind_result($account_id, $application_date, $entry_date, $exit_date, $firstname, $lastname, $home_phone, $cell_phone, $work_phone, $email, $drivers_licence, $ddeposit_prepayable, $tenant_notes);
			$stmt->fetch(); //Fetch value 
			$stmt->close(); //Close statement
			$array = [
			"tenant_id" => $tenant_id,
			"account_id" => $account_id,
			"application_date" => $application_date,
			"entry_date" => $entry_date,
			"exit_date" => $exit_date,
			"firstname" => $firstname,
			"lastname" => $lastname,
			"home_phone" => $home_phone,
			"cell_phone" => $cell_phone,
			"work_phone" => $work_phone,
			"email" => $email,
			"drivers_licence" => $drivers_licence,
			"ddeposit_prepayable" => $ddeposit_prepayable,
			"tenant_notes" => $tenant_notes
			];
			return $array;
			}
	}	
	//Info:Gets partial records from tennents.
	//Requires:tennent id
	//Returns:tenant_id, account_id, firstname, lastname.
	function getTenantBasicRecords($tenant_id) {
		if ($stmt = $this->con->prepare("SELECT account_id, firstname, lastname FROM tenant WHERE tenant_id = ?")) { //Create a prepared statement 
			$stmt->bind_param("s", $tenant_id);//Bind parameters for markers				
			$stmt->execute(); // Execute query     
			$stmt->bind_result($account_id, $firstname, $lastname); //Bind result variables 
			$stmt->fetch(); //Fetch value 					
			$stmt->close(); //Close statement
			$array = [
			"tenant_id" => $tenant_id,
			"account_id" => $account_id,
			"firstname" => $firstname,
			"lastname" => $lastname
			];
			return $array;
			}
	}
	//Info:
    //Returns:
	function getUnitRecordsInJsonORIGINAL($building_id) {
        $stringArray = [];
        if ($stmt = $this->con->prepare("SELECT unit_id, unit_number, unit_notes FROM unit WHERE building_id = ?")) {
			$stmt->bind_param("i", $building_id); //Bind parameters for markers
            $stmt->execute(); // Execute query
            $stmt->bind_result($unit_id, $unit_number, $unit_notes);
            array_push($stringArray, 'var data = [');
            while ($stmt->fetch()){
                array_push($stringArray, '
                {
                    "unit_id": "', $unit_id, '",
                    "unit_number": "', $unit_number, '",
                    "unit_notes": "', $unit_notes, '"
                },');
            } //Fetch value
            $stmt->close(); //Close statement
            array_push($stringArray, '
        ];');
            $string = implode("", $stringArray);
            return $string;
            }
    }
?>