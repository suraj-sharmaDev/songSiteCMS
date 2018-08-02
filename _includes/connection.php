<?php
require("constants.php");

// 1. Create a database connection
$connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (!$connection) {
	die("Database connection failed: " . mysqli_connect_error());
}
$mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (!$mysqli) {
	die("Database connection failed: " . mysqli_connect_error());
}
?>
