<?php

require('config.php');

$id = $_REQUEST['id'];

$query = "DELETE FROM stock WHERE PartID=$id";

$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

header("Location: delete_stocks_interface.php");
