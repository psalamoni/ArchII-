<?php
$host = "localhost";
$userName = "archII";
$password = "archII";
$dbName = "rootroot";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>