<?php
	require('header.php');
	require('nav.php');
?>

<style>
<?php include 'style.css'; ?>
</style>

<div id="insertForm">
	<h1>Insert a new country:</h1>
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<label for="countryName">Country name:</label><br>
		<textarea class="textInput" id="countryNameTextInput" rows="2" cols="" name="countryName"></textarea>
		<br>

		<label for="countryDescription">Description:</label><br>
		<textarea class="textInput" id="countryDescriptionTextInput" rows="2" cols="" name="countryDescription"></textarea>
		<br>

		<label for="countryImage">Select an image:</label><br>
		<input type="file" name="countryImage">
		<br>

		<label for="imageCaption">Image caption:</label><br>
		<textarea class="textInput" id="countryImageCaptionTextInput" rows="2" cols="" name="imageCaption"></textarea>

		<button type="submit">Submit</button>
	</form>
</div>

<?php
	require('footer.php');
	require('db_connect.php');
?>
