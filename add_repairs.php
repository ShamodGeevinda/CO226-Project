<?php

// Database connection
require_once 'config.php';

// Escape user inputs for security
$DateofCompletion = $mysqli->real_escape_string($_REQUEST['DateofCompletion']);
$Description = $mysqli->real_escape_string($_REQUEST['Description']);
$EmpID = $mysqli->real_escape_string($_REQUEST['EmpID']);


$sql = "INSERT INTO Repair (DateofCompletion, Description, EmpID)
VALUES ('$DateofCompletion', '$Description', '$EmpID')";

if ($mysqli->query($sql) === true) {
	header("Location: http://localhost/comshop/add_customers_interface.php?message=success");
	exit();
} else {
	echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}


// Close connection
$mysqli->close();

?>

// end