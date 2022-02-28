<?php

require('config.php');

$id = $_REQUEST['id'];

$query = "DELETE FROM Customer WHERE CustomerID=$id";

$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

header("Location: delete_customers_interface.php");
