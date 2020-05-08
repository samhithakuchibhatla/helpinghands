<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb="donatedb";

// Create connection
$db = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>