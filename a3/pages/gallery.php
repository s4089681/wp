<?php
include "../includes/db_connect.php";
include "../includes/components/header.php";
include "../includes/components/nav.php";
?>

<div class="container">
	<div class="row mt-4">
		<h2 class="text-center">Pets Victoria has a lot to offer!</h2>
			<p>For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a differance to the Victoria rescue community and thousands of pets in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we wall still have big, hairy work to do</p>
	</div>
	<div class="row">
		<form>
			<div class="mb-3">
				<select class="form-select">
					<option value="none" selected disabled>Select Type</option>
					<option value="cat" >Cat</option>
					<option value="dog" >Dog</option>
					<option value="none">None</option>
				</select>
			</div>
		</form>
	</div>
	<div class="row">
<?php
$result = $conn->query("SELECT petname, image FROM pets");
        // Loop through pets and generate a card for each one
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../images/uploaded/' . $row['image'] . '" class="card-img-top" alt="' . $row['petname'] . '">
                    <div class="card-body">
                        <h5 class="card-title text-center">' . $row['petname'] . '</h5>
                    </div>
                </div>
            </div>';
        }
        ?>
		</div>
	</div>
</div>

<?php
include "../includes/components/footer.php";
?>
