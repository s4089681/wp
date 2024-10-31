<!-- Navigation Bar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
	<div class="container-fluid">

		<a class="navbar-brand" href="#">
			<img src="../images/assets/logo.png" alt="" width="30" height="30">
		</a>

		<!-- Toggle button for small screens -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links and search field -->
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav me-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="pets.php">Pets</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gallery.php">Gallery</a>
				</li>

				<?php

				session_start();
				$username = "";
				$username = $_SESSION['username'];

				if (isset($_SESSION['userID'])) {
					echo '	<li class="nav-item">';
					echo	'	<a class="nav-link" href="add.php">Add More</a>';
					echo	'</li>';
					echo '	<li class="nav-item">';
					echo	'	<a class="nav-link" href="user.php">' . $username . '</a>';
					echo	'</li>';
					echo	'<li class="nav-item">';
					echo	'	<a class="nav-link" href="logout.php">Logout</a>';
					echo	'</li>';
					echo '</ul>';
				} else {
					echo '	<li class="nav-item">';
					echo	'	<a class="nav-link" href="register.php">Register</a>';
					echo	'</li>';
					echo	'<li class="nav-item">';
					echo	'	<a class="nav-link" href="login.php">Login</a>';
					echo	'</li>';
					echo '</ul>';
				}
				?>

				<!-- Search field on the far right -->
				<form class="d-flex ms-auto">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success btn-light" type="submit">Search</button>
				</form>
		</div>
	</div>
</nav>
