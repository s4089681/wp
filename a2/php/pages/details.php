<?php
include "../includes/db_connect.php";
include "../includes/header.php";
include "../includes/nav.php";



$sql = "select * from pets where petid = " . $_GET["id"];
$res = $conn->query($sql);
$row = $res->fetch_assoc();


?>

<main id="main">



	<div id="detailsContent">
		<div id="detailsImage">
			<img src="<?php echo $row["image"]; ?>" alt="">
		</div>
		<div id="detailsInformation">
			<span class="detailsInformationThumb"><img src="../../images/assets/alarm.svg" alt="">
				<a><?php echo $row["age"]; ?> Months</a>
			</span>
			<span class="detailsInformationThumb"><img src="../../images/assets/pet.svg" alt="">
				<a><?php echo $row["type"]; ?></a>
			</span>
			<span class="detailsInformationThumb"><img src="../../images/assets/location.svg" alt="">
				<a><?php echo $row["location"]; ?></a>
			</span>
		</div>
		<div id="detailsDescription">
			<h1><?php echo $row["petname"]; ?></h1>
			<p><?php echo $row["description"]; ?></p>
		</div>
	</div>
</main>

<?php include "../includes/footer.php";
?>
