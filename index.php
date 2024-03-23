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
	<title>Muva Systems - Cloud Service Provider</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles -->
	<link rel="stylesheet" href="flexible.css" />
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Muva Cloud</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Hero Section -->
	<section class="hero-section text-center py-5">
		<div class="container">
			<h1>Welcome to Muva Systems</h1>
			<p class="lead">Your Trusted Cloud Service Provider</p>
			<a href="" class="btn btn-primary btn-lg">Get Started</a>
			
		</div>
	</section>

	<!-- Services Section -->
	<section class="services-section py-5">
		<div class="container">
		<a href="create_account.php" class="btn btn-primary btn-lg">Register</a>
			<a href="login.php" class="btn btn-primary btn-lg">Login</a>
			<h2 class="text-center mb-5">Our Services</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Cloud Storage</h5>
							<p class="card-text">Securely store your data in the cloud with our reliable storage
								solutions.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Cloud Backup</h5>
							<p class="card-text">Backup your important files and documents to the cloud for peace of
								mind.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Cloud Computing</h5>
							<p class="card-text">Harness the power of cloud computing to run your applications
								efficiently.</p>
						</div>
					</div>
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