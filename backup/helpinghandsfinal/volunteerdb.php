<?php
$servername = "localhost";
$username = "jobporta_testing";
$password = "Testing123";
$mydb="jobporta_test";

// Create connection
$db = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>