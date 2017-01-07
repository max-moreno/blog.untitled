<?php

// initiates the database connection.
include_once('config.php');

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
