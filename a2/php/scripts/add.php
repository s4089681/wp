<?php
include "../includes/db_connect.php";
// petName
// petType
// petImage
// petImageCaption
// petLocation
// petAge

$petName = $_POST["petName"];
$petType = $_POST["petType"];
$petDescription = $_POST["petDescription"];
$petImageCaption = $_POST["petImageCaption"];
$petAge = $_POST["petAge"];
$petLocation = $_POST["petLocation"];

$tmp = $_FILES["petImage"]["tmp_name"];
$dest =
  dirname(dirname(__DIR__)) .
  "/images/downloaded/" .
  $_FILES["petImage"]["name"];

$petImage = "/a2/images/downloaded/" . $_FILES["petImage"]["name"];

move_uploaded_file($tmp, $dest);

$sql =
  "INSERT INTO pets (petname, description, image, caption, age, location, type) VALUES(?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param(
  "ssssiss",
  $petName,
  $petDescription,
  $petImage,
  $petImageCaption,
  $petAge,
  $petLocation,
  $petType
);

$stmt->execute();

include "../pages/pets.php";

?>
