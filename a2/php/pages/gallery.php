<?php
include "../includes/db_connect.php";
include "../includes/header.php";
include "../includes/nav.php";
?>
<main id="main">
	<div id="content">

		<div id="galleryHeading">
			<h2>Pets Victoria has a lot to offer!</h2>
			<p>For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into
				the mainstream. Our work has helped make a differance to the Victoria rescue community and thousands of epts
				in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we wall still have
				big, hairy work to do</p>

		</div>

		<div id="gallery">
			<?php
			$sql = "select * from pets";
			$res = $conn->query($sql);
			if (mysqli_num_rows($res) > 0) {
				while ($row = $res->fetch_assoc()) { ?>
					<form id="<?php echo $row["petid"]; ?>" action="./details.php" method="GET">
						<input hidden type="text" name="id" value="<?php echo $row["petid"]; ?>">
						<div class="petThumb" onclick="document.getElementById('<?php echo $row["petid"]; ?>').submit();">
							<div class="petThumbImgContainer"> <img class="petThumbImg" src="<?php echo $row["image"]; ?>" alt="">
							</div>
							<p class="petThumbName"><?php echo $row["petname"]; ?></p>
							<a class="petThumbHover">
								<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
									fill="#000000">
									<path
										d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
								</svg>
								Discover More!
							</a>
						</div>

					</form>
			<?php }
			}
			?>
		</div>
	</div>
</main>

<?php include "../includes/footer.php"; ?>
