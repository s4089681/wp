<form method="post">
	<button name="index">Home</button>
	<button name="insert">Insert</button>
</form>

<?php
	// If php recieves POST from buttons, redirect page to appropriate form
	if(isset($_POST['index'])){
		header("Location:index.php");
	}

	if(isset($_POST['insert'])){
		header("Location:insert_form.php");
	}
?>
