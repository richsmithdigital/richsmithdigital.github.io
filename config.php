<?php
$host = "db5000343586.hosting-data.io";
$userName = "dbu611509";
$password = "Richard617";
$dbName = "dbs334409";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
