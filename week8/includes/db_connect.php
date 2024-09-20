<?php

	// vars to connect to prod db
	/*$db_server = 'talsprddb02.int.its.rmit.edu.au';*/
	/*$user = 's4089681';*/
	/*$password = 'Sj@119769b';*/
	/*$database = 's4089681';*/

	$db_server = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "destination";
	$conn = "";

	$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

	if ($conn) {
		echo "connected";
	} else {
		echo "couldnt connect";
	}

?>
