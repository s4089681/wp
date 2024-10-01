<?php 
include "../includes/db_connect.php";
include "../includes/header.php";
include "../includes/nav.php";
?>


<main id="main">
		<div id="content">
			<div id="addHeading">
				<h2>Add a pet</h2>
				<p>You can add a new pet here</p>
			</div>

			<form id="addPetForm" action="../pages/addPetDb.php" method="post" enctype="multipart/form-data">
				<label for="petName">Pet Name:</label>
				<input type="text" id="petName" name="petName" placeholder="Provide a name for the pet" required>

				<label for="petDescription">Pet Description:</label>
				<input type="text" id="petDescription" name="petDescription" placeholder="Provide a description for the pet" required>


				<label for="petType">Type:</label>
				<select id="petType" name="petType">
          <option disabled selected>All categories</option>
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
      </select>


				<label id="selectImageLabel" for="petImage">Select An Image</label>
				<input type="file" id="petImage" name="petImage">
				<label for="petImageCaption">Image Caption:</label>
				<input type="text" id="petImageCaption" name="petImageCaption" placeholder="describe the image in one word">
				<label for="petAge">Age (months):</label>
				<input type="text" id="petAge" name="petAge" placeholder="Age of a pet in months">
				<label for="petLocation">Location:</label>
				<input type="text" id="petLocation" name="petLocation" placeholder="Location of the pet">

				<div id="addPetFormBtn">
					<button id="submitBtn" type="submit"><img src="../../images/assets/done.svg"
							alt="">submit</button>
					<button id="clearBtn" type="reset"><img src="../../images/assets/close.svg"
							alt="">clear</button>
				</div>
			</form>
		</div>
	</main>

<?php include "../includes/footer.php";
?>
