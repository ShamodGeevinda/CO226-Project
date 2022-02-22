<?php

// Database connection
require_once 'config.php';

// Escape user inputs for security
$PartName = $mysqli->real_escape_string($_REQUEST['PartName']);
$ManufactureID = $mysqli->real_escape_string($_REQUEST['ManufactureID']);
$UnitPrice = $mysqli->real_escape_string($_REQUEST['UnitPrice']);
$Quantity = $mysqli->real_escape_string($_REQUEST['Quantity']);
$WarrantyDuration = $mysqli->real_escape_string($_REQUEST['WarrantyDuration']);



// Attempt insert query execution


$sql = "INSERT INTO stock (PartName, ManufactureID, UnitPrice, Quantity, WarrantyDuration)
 VALUES ('$PartName', '$ManufactureID', '$UnitPrice', '$Quantity','$WarrantyDuration')";

if ($mysqli->query($sql) === true) {
    header("Location: http://localhost/comshop/add_stocks_interface.php?message=success");
    exit();
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}



// Close connection
$mysqli->close();

?>

// end