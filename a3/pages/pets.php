<?php
include "../includes/db_connect.php";
include "../includes/components/header.php";
include "../includes/components/nav.php";
?>

<div class="container">
	<div class="row mt-4">
		<h1 class="text-center">Discover Pets Victoria</h1>
		<p class="text-center">Pets Victoria is a dedicated pet adoption organisation based in Victoria, ustralia, focused on providing a saef and loving envirionment for pets in need. With a compassionate approach, Pets Victoria works tirelessly to rescue, Rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. The organization offers a range of services, including adoption counseling, pet education and comunity support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.</p>
	</div>
	<div class="row mt-4">
		<div class="col">
			<img id="petImage" src="../images/assets/pets.jpeg" alt="">
		</div>
		<div class="col">
			<!-- Generate Pets Table -->

			<table class="table">
				<thead>
					<tr>
						<th id="pet">Pet</th>
						<th id="type">Type</th>
						<th id="age">Age</th>
						<th id="location">Location</th>
					</tr>
				</thead>
				<tbody>

				<?php
				$sql = "SELECT * FROM pets";
				$res = $conn->query($sql);
				if (mysqli_num_rows($res) > 0) {
				while ($row = $res->fetch_assoc()) { ?>
				<tr>
					<td><a class="link-primary link-underline-opacity-0 fst-italic" href="../pages/details.php?id= <?php echo $row["petid"]; ?>"><?php echo $row["petname"]; ?></a></td>
					<td><?php echo $row["type"]; ?></td>
					<td><?php echo $row["age"]; ?> months</td>
					<td><?php echo $row["location"]; ?></td>
				</tr>
					<?php }} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php
include "../includes/components/footer.php";
?>
