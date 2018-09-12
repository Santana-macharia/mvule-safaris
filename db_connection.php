<?php
$output = NULL; 
$dbHost = "localhost";
$dbUsername = "root";
$dbUserPassword = '';
$dbName = "mvule";

// Create connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbUserPassword, $dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
