<?php

	// vars to connect to prod db
	$db_server = 'talsprddb02.int.its.rmit.edu.au';
	$db_user = 's4089681';
	$db_pass = 'Sj@119769b';
	$db_name = 's4089681';
	$conn = "";

	// vars to connect to local XAMPP
	/*$db_server = "localhost";*/
	/*$db_user = "root";*/
	/*$db_pass = "";*/
	/*$db_name = "destination";*/
	/*$conn = "";*/

	// Stores connection object in local session storage
	$_SESSION["conn"] = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

?>
