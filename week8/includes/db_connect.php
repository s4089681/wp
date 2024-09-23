<?php

	// vars to connect to prod db
	$db_server = 'talsprddb02.int.its.rmit.edu.au';
	$db_user = 's4089681';
	$db_pass = 'Sj@119769b';
	$db_name = 's4089681';
	$conn = "";

	/*$db_server = "localhost";*/
	/*$db_user = "root";*/
	/*$db_pass = "";*/
	/*$db_name = "destination";*/
	/*$conn = "";*/

	$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

	if ($conn) {
		echo "connected<br>";
	} else {
		echo "couldnt connect<br>";
	}
	
	// Stores and Sends SQL request to server
	$sql = "SELECT * FROM country";
	$result = $conn->query($sql);

	// Iterates over SQL response printing each row in the table on a new line
	while($row = $result->fetch_assoc()) {
    echo "id: " . $row["countryid"]. " - Name: " . $row["countryname"]. " - Description: " . $row["description"]. "<br>";
  }

?>
