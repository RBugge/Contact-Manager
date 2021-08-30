<?php
	$inData = getRequestInfo();
	
	$contactid = $inData["contactid"];
	$id = $inData["id"];
	$firstname = $inData["firstname"];
	$lastname = $inData["lastname"];
	$address = $inData["address"];
	$city = $inData["city"];
	$state = $inData["state"];
	$zipcode = $inData["zipcode"];
	$email = $inData["email"];
	$phonenumber = $inData["phonenumber"];

	$conn = new mysqli("localhost", "TheBeast", "WeLoveCOP4331", "COP4331");
	if ($conn->connect_error) 
	{
		returnWithError( $conn->connect_error );
	} 
	else
	{
		$stmt = $conn->prepare("INSERT into Contacts (Contact ID,ID,FirstName,LastName,Address,City,State,ZipCode,Email,PhoneNumber) VALUES(?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ss", $contactid, $id, $firstname, $lastname, $address, $city, $state, $zipcode, $email, $phonenumber);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		returnWithError("");
	}

	function getRequestInfo()
	{
		return json_decode(file_get_contents('php://input'), true);
	}

	function sendResultInfoAsJson( $obj )
	{
		header('Content-type: application/json');
		echo $obj;
	}
	
	function returnWithError( $err )
	{
		$retValue = '{"error":"' . $err . '"}';
		sendResultInfoAsJson( $retValue );
	}
	
?>
