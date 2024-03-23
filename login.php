<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Muva Cloud - Cloud Service Provider</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles -->
	<link rel="stylesheet" href="flexible.css" />
</head>

<body>
	<!-- Navbar -->
	<?php
	include_once "nav.php";
	?>
	<!-- Hero Section -->
	<section class="hero-section text-center py-5">
		<div class="container">
			<h1>Welcome to Muva Cloud Systems</h1>
			<p class="lead">Your Trusted Cloud Service Provider</p>
		</div>
	</section>
	<section class="services-section py-5">
		<div class="container">
			<h2 class="text-center mb-5">Login</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php
						if (isset ($_SESSION['invalidCredentials'])) {
							echo "<div class='alert alert-danger' role='alert'>Invalid username or password</div>";
						}
						?>
						<form action="login_user.php" method="POST">
							<div class="mb-3">
								<label for="user_email" class="form-label">Email Address</label>
								<input type="text" class="form-control" id="user_name" name="user_email"
									placeholder="Email" required="required">
							</div>
							<div class="mb-3">
								<label for="user_password" class="form-label">Password</label>
								<input type="password" class="form-control" id="user_password" name="user_password"
									placeholder="Password" required="required">
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
						<br>
						<a href="register.php">Create an account</a>
					</div>
					<div class="col-md-4"></div>
				</div>


			</div>

		</div>
	</section>

	<!-- Footer -->
	<footer class="footer py-4 bg-dark text-light">
		<div class="container text-center">
			<p>&copy; 2024 Muva Systems. All rights reserved.</p>
		</div>
	</footer>

	<!-- Bootstrap JS (optional) -->


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>