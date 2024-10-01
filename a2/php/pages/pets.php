<?php
include "../includes/db_connect.php";
include "../includes/header.php";
include "../includes/nav.php";
?>

<main id="main">
	<div id="content">

		<div id="petsHeading">
			<h1>Discover Pets Victoria</h1>
			<p>PETS VICTORIA IS A DEDICATED PET ADOPTION ORGANIZATION BASED IN VICTORIA, AUSTRALIA, FOCUSED ON PROVIDING A
				SAFE AND LOVING ENVIRONMENT FOR PETS IN NEED. WITH A COMPASSIONATE APPROACH, PETS VICTORIA WORKS TIRELESSLY TO
				RESCUE, REHABILITATE, AND REHOME DOGS, CATS, AND OTHER ANIMALS. THEIR MISSION IS TO CONNECT THESE DESERVING
				PETS
				WITH CARING INDIVIDUALS AND FAMILIES, CREATING LIFELONG BONDS, THE ORGANIZATION OFFERS A RANGE OF SERVICES,
				INCLUDING ADOPTION COUNSELING, PET
				EDUCATTON, AND CONMONUY SUPPORU PROSRANS, ALL AIMED AU PROMOLING RESPONSIBLE PEL OWNERSHIP AND REDUCNO THE
				NOMBER OF HOMELESS ANIMALS.</p>
		</div>

		<div id="imgTable">
			<img id="petImage" src="../../images/assets/pets.jpeg" alt="">
			<table id="petTable">
				<tr>
					<th id="pet">Pet</th>
					<th id="type">Type</th>
					<th id="age">Age</th>
					<th id="location">Location</th>
				</tr>
				<?php
				$sql = "SELECT * FROM pets";
				$res = $conn->query($sql);
				if (mysqli_num_rows($res) > 0) {
					while ($row = $res->fetch_assoc()) { ?>
						<tr>
							<td>

								<a href="../pages/details.php?id=<?php echo $row["petid"]; ?>"><?php echo $row["petname"]; ?></a>

							</td>
							<td><?php echo $row["type"]; ?></td>
							<td><?php echo $row["age"]; ?> months</td>
							<td><?php echo $row["location"]; ?></td>
						</tr>
				<?php }
				}
				?>
			</table>
		</div>
	</div>
</main>

<?php include "../includes/footer.php";
?>
