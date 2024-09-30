<?php
if (strstr($_SERVER["SERVER_NAME"], "localhost")) {
	// Displays errors only on local db, not prod
	ini_set("display_errors", 1);
	ini_set("display_startup_errors", 1);
	error_reporting(E_ALL);
}

//Check what server you are accessing
if (strstr($_SERVER["SERVER_NAME"], "localhost")) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "petsvictoria";
} else {
	$servername = "talsprddb02.int.its.rmit.edu.au";
	$username = "s123456";
	$password = "Sj@119769b";
	$dbname = "s123456";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
