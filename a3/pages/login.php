<?php
include "../includes/db_connect.php";
include "../includes/components/header.php";
include "../includes/components/nav.php";

if (!isset($_SESSION)) {
	session_start();
}

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$stmt = $conn->prepare("SELECT userID, password FROM users WHERE username = ?");
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($userID, $hashed_password);

	if ($stmt->num_rows > 0) {
		$stmt->fetch();

		if (sha1($password) == $hashed_password) {
			$_SESSION['userID'] = $userID;
			$_SESSION['username'] = $username;

			header("Location: index.php");
			exit();
		} else {
			echo "<div class='alert alert-danger text-center'>Invalid password!</div>";
		}
	} else {
		echo "<div class='alert alert-danger text-center'>User not found!</div>";
	}
}
?>


<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header text-center">
					<h2>Login</h2>
				</div>
				<div class="card-body">
					<form action="login.php" method="POST">
						<div class="mb-3">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" id="username" name="username" required>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div>
						<div class="d-grid gap-2">
							<button type="submit" name="login" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<?php
include "../includes/components/footer.php";
?>
