<?php
include "../includes/db_connect.php";
include "../includes/components/header.php";
include "../includes/components/nav.php";

session_start();

if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	 $stmt = $conn->prepare("SELECT userID FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<div class='alert alert-danger text-center'>Username already taken!</div>";
    } else {
				$hashed_password = sha1($password);
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success text-center'>Registration successful! You can <a href='login.php'>login now</a>.</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Registration failed. Please try again.</div>";
        }
    }
}

?>
<div class="container mt-5">
<div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Register</h2>
                    </div>
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="register" class="btn btn-primary">Register</button>
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
