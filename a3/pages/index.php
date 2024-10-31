<?php
include "../includes/db_connect.php";
include "../includes/components/header.php";
include "../includes/components/nav.php";
?>

<div class="container">
	<div id="index-title-row" class="row align-items-center">
		<div class="col">
			<?php include "../includes/components/carousel.php"; ?>
		</div>
		<div class="col">
			<h1 class="marker">PETS VICTORIA</h1>
			<h2 class="poetsen">WELCOME TO PET ADOPTION</h2>
		</div>
	</div>
	<div class="row">
		<form class="d-flex ms-auto">
			<input class="form-control me-2" type="search" placeholder="I am looking for..." aria-label="Search">
			<select class="form-select-sm me-2 vw-auto"> 
				<option>Cat</option>
				<option>Dog</option>
				<option>Other</option>
			</select>
			<button class="btn btn-outline-success" type="submit">Search</button>
		</form>
		<div>
			<h1>Discover Pets Victoria</h1>
			<p>Pets Victoria is a dedicated pet adoption organisation based in Victoria, ustralia, focused on providing a saef and loving envirionment for pets in need. With a compassionate approach, Pets Victoria works tirelessly to rescue, Rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. The organization offers a range of services, including adoption counseling, pet education and comunity support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.</p>
		</div>
	</div>
</div>


<?php
// Fixed-size carousel, shows last 4 images uploaded
include "../includes/components/footer.php";
?>
