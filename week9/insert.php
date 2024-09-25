<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$countryName = $_POST['countryName'];
$countryDescription = $_POST['countryDescription'];
/*$countryImageCaption = $_POST['countryImageCaption'];*/

echo "Name $countryName | Description $countryDescription";
/*header("Location:index.php");*/

$tmp = $_FILES['countryImage']['tmp_name'];
$dest = getcwd() . "/images/{$_FILES['countryImage']['name']}"; // uploadedFiles is the folder name created in the current library folder
move_uploaded_file($tmp, $dest);


echo "<img src='$dest'>";


?>
