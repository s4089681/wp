<?php
if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "destination";
} else {
    $db_servername = "talsprddb02.int.its.rmit.edu.au";
    $db_username = "s4089681";
    $db_password = "Sj@119769b";
    $db_name = "s4089681";
}

	// Stores connection object in local session storage
	$_SESSION["conn"] = mysqli_connect($db_servername, $db_username, $db_password, $db_name);


// Check connection
if ($_SESSION["conn"]->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
