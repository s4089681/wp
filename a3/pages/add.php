<?php
include "../includes/db_connect.php";
include "../includes/components/header.php";
include "../includes/components/nav.php";


if (!isset($_SESSION)) {
	session_start();
}

if (isset($_POST['addpet'])) {
	$petName = $_POST["petName"];
	$petType = $_POST["petType"];
	$petDescription = $_POST["petDescription"];
	$petImageCaption = $_POST["petImageCaption"];
	$petAge = $_POST["petAge"];
	$petLocation = $_POST["petLocation"];

	$uploadedUser = $_SESSION['username'];

	$tmp = $_FILES["petImage"]["tmp_name"];
	$dest =
		dirname(dirname(__DIR__)) .
		"/a3/images/uploaded/" .
		$_FILES["petImage"]["name"];

	/*$petImage = dirname(dirname(__DIR__)) . "/a3/images/uploaded/" . $_FILES["petImage"]["name"];*/
	$petImage = $_FILES["petImage"]["name"];

	move_uploaded_file($tmp, $dest);

	$sql =
		"INSERT INTO pets (petname, description, image, caption, age, location, type, username) VALUES(?,?,?,?,?,?,?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param(
		"ssssisss",
		$petName,
		$petDescription,
		$petImage,
		$petImageCaption,
		$petAge,
		$petLocation,
		$petType,
		$uploadedUser
	);

	$stmt->execute();
	echo "<div class='alert alert-success text-center'>Pet added</div>";
}

?>

<div class="container mt-5">
	<div id="addHeading" class="mb-4">
		<h1>Add a pet</h1>
	</div>

	<form id="addPetForm" action="./add.php" method="post" enctype="multipart/form-data">
		<div class="mb-3">
			<label for="petName" class="form-label">Pet name</label>
			<input type="text" class="form-control" id="petName" name="petName" placeholder="Provide a name for the pet" required>
		</div>

		<div class="mb-3">
			<label for="petDescription" class="form-label">Pet description</label>
			<input type="text" class="form-control" id="petDescription" name="petDescription" placeholder="Provide a description for the pet" required>
		</div>

		<div class="mb-3">
			<label for="petType" class="form-label">Pet Type</label>
			<select id="petType" name="petType" class="form-select">
				<option disabled selected>All categories</option>
				<option value="dog">Dog</option>
				<option value="cat">Cat</option>
			</select>
		</div>

		<div class="mb-3">
			<label id="selectImageLabel" for="petImage" class="form-label">Upload a image of your pet</label>
			<input type="file" class="form-control" id="petImage" name="petImage">
		</div>

		<div class="mb-3">
			<label for="petImageCaption" class="form-label">Image caption</label>
			<input type="text" class="form-control" id="petImageCaption" name="petImageCaption" placeholder="Describe the image in one word">
		</div>

		<div class="mb-3">
			<label for="petAge" class="form-label">Age in months</label>
			<input type="text" class="form-control" id="petAge" name="petAge" placeholder="Age of the pet in months">
		</div>

		<div class="mb-3">
			<label for="petLocation" class="form-label">Location</label>
			<input type="text" class="form-control" id="petLocation" name="petLocation" placeholder="Location of the pet">
		</div>

		<div class="d-flex justify-content-between mt-4">
			<button id="submitBtn" type="submit" class="btn btn-success" name="addpet">Submit
			</button>
			<button id="clearBtn" type="reset" class="btn btn-danger">Clear
			</button>
		</div>
	</form>
</div>

<?php
include "../includes/components/footer.php";
?>
