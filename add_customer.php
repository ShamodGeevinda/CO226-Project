<?php

// Database connection
require_once 'config.php';

// Escape user inputs for security
$UserName = $mysqli->real_escape_string($_REQUEST['UserName']);
$Password = $mysqli->real_escape_string($_REQUEST['Password']);
$ContactNum = $mysqli->real_escape_string($_REQUEST['ContactNum']);
$Address = $mysqli->real_escape_string($_REQUEST['Address']);
$NIC = $mysqli->real_escape_string($_REQUEST['NIC']);


$sql1 = "SELECT UserName FROM Customer WHERE UserName = '$UserName' ";

$result = mysqli_query($mysqli,$sql1);

if(mysqli_num_rows($result) > 0){
	header("Location: http://localhost/comshop/add_customers_interface.php?message=unsuccess");
	exit();	
}	

else{
	$sql = "INSERT INTO Customer (UserName, Password, ContactNum, Address, NIC)
 VALUES ('$UserName', '$Password', '$ContactNum', '$Address','$NIC')";

	if ($mysqli->query($sql) === true) {
		header("Location: http://localhost/Group 8/CO226-Project/add_customers_interface.php?message=success");
		exit();
	}else {
		echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
	}
	
}

// Close connection
$mysqli->close();

?>

// end