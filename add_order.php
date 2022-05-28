<?php

// Database connection
require_once 'config.php';

// Escape user inputs for security
$PartID = $mysqli->real_escape_string($_REQUEST['PartID']);
$Quantity = $mysqli->real_escape_string($_REQUEST['Quantity']);
$PurchasedDate = $mysqli->real_escape_string($_REQUEST['PurchasedDate']);
$CustomerID = $mysqli->real_escape_string($_REQUEST['CustomerID']);



// Attempt insert query execution


$sql = "INSERT INTO Purchased_Order (PartID, Quantity, Purchased_Date, CustomerID)
 VALUES ('$PartID', '$Quantity', '$PurchasedDate', '$CustomerID')";

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