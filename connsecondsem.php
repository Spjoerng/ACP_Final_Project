<?php
$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "secondsem_db";

// Create connection
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Return the connection object
// return $conn;