<?php
session_start();

include 'conn.php';
if (isset($_SESSION['user'])) {} else {
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-BIPMS</title>
	<link rel = "icon" href = "kanlurangbukal.png" type = "image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<!-- Custom styles for this template -->
	<link href="dashboard.css" rel="stylesheet">
	<script src="https://unpkg.com/feather-icons"></script>
	<style>
		.accordion {
			--bs-accordion-active-bg: #ffc107;
			--bs-accordion-active-color: #212529;
			--bs-accordion-btn-focus-box-shadow: none;
		}

		.accordion-button::after {
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus' viewBox='0 0 16 16'%3E%3Cpath d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/%3E%3C/svg%3E");
			transition: all 0.5s;
		}

		.accordion-button:not(.collapsed)::after {
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-dash' viewBox='0 0 16 16'%3E%3Cpath d='M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z'/%3E%3C/svg%3E");
		}
	</style>
</head>
<body>
	<header class="navbar navbar-light sticky-top bg-warning flex-md-nowrap p-0 ">
		<a class="navbar-brand px-2 fs-6 text-dark">
			<img src="kanlurangbukal.png" width="40">
			<b>E-BIPMS KANLURANG BUKAL</b></a>
			<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
				</span>
			</button>
		</header>

		<div class="container-fluid">
			<div class="row">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
					<div class="position-sticky pt-2 mt-2 sidebar-sticky bg-light">
						<ul class="nav flex-column">
							<a class="navbar-brand px-2 fs-6 bg-warning">
								<img class="float-start" src="kanlurangbukal.png" width="60">
								<span class="fs-4 px-2 text-dark"><b>WELCOME</b></span>
								<br>
								<span class="fs-6 px-2 text-dark" style="text-transform: uppercase;"><?php echo $_SESSION['user']?></span>
							</a>
							<li class="nav-item fs-7">
								<a class="nav-link" aria-current="page" href="adminhome.php">
									<span data-feather="home" class="align-text-bottom feather-48"></span>
									Home
								</a>
							</li>
							<li class="nav-item fs-7">
								<a class="nav-link" href="adminresidents.php">
									<span data-feather="user" class="align-text-bottom feather-48"></span>
									Residents Profile
								</a>
							</li>
							<hr class="mt-0 mb-0">
						<li class="nav-item fs-7">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header fs-7">
										<button class="accordion-button collapsed fs-7 pb-2 nav-link" style="font-size:11pt;" type="button"
											data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
											aria-expanded="false" aria-controls="flush-collapseOne">
											Document Requests
										</button>
									</h2>
									<hr class="mt-0 mb-0">
									<div id="flush-collapseOne" class="accordion-collapse collapse"
										data-bs-parent="#accordionFlushExample">
										<div class="accordion-body">
											<ul class="nav flex-column pt-4">
												<li class="nav-item fs-7" style="margin-left: -20px;">
													<a class="nav-link" style="margin-top: -40px"
														href="admindocument.php">
														<span data-feather="file" style="width: 28px; height: 28px;"
															class="align-text-bottom"></span>
														Brgy. Clearance
													</a>
												</li>
												<li class="nav-item fs-7 pt-2" style="margin-left: -20px">
													<a class="nav-link" style="margin-top: -15px"
														href=" admindocument.php">
														<span data-feather="file" style="width: 28px; height: 28px;"
															class="align-text-bottom"></span>
														Brgy. Indigency
													</a>
												</li>
												<li class="nav-item fs-7 pt-2" style="margin-left: -20px">
													<a class="nav-link" style="margin-top: -15px"
														href=" admindocument.php">
														<span data-feather="file" style="width: 28px; height: 28px;"
															class="align-text-bottom"></span>
														Brgy. Residency
													</a>
												</li>
												<li class="nav-item fs-7 pt-2" style="margin-left: -20px">
													<a class="nav-link" style="margin-top: -15px"
														href=" admindocument.php">
														<span data-feather="file" style="width: 28px; height: 28px;"
															class="align-text-bottom"></span>
														Business Permit
													</a>
												</li>
												<li class="nav-item fs-7 pt-2" style="margin-left: -20px">
													<a class="nav-link" style="margin-top: -15px; margin-bottom: -20px"
														href=" admindocument.php">
														<span data-feather="file" style="width: 28px; height: 28px;"
															class="align-text-bottom"></span>
														Cedula
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
						</li>
						<hr class="mt-0 mb-0">
							<li class="nav-item fs-7">
								<a class="nav-link text-dark bg-warning active shadow">
									<span data-feather="users" class="align-text-bottom feather-48"></span>
									Barangay Officials
								</a>
							</li>
							<li class="nav-item fs-7">
								<a class="nav-link" href="adminusers.php">
									<span data-feather="layers" class="align-text-bottom feather-48"></span>
									Manage Users
								</a>
							</li>
							<hr class="mt-2 mb-1">
							<li class="nav-item fs-7">
								<a class="nav-link" href="adminlogout.php">
									<span data-feather="log-out" class="align-text-bottom feather-48"></span>
									Logout
								</a>
							</li>
						</ul>
					</div>

				</nav>

				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">BARANGAY OFFICIALS</h1>
					</div>
					<div class="d-flex flex-wrap mb-3 row g-2 justify-content-between">
						<div class="col">
							<div class="card" style="width: 21rem;">
								<img class="mx-auto d-block mt-3" src="kanlurangbukal.png" width="50%"  alt="...">
								<div class="card-body">
									<p class="card-text text-center fs-5"><strong>HENRY DULLER</strong><br>BARANGAY CHAIRMAN</p>
									<div class="text-center">
									<a href="editpage.php?id=<?= $items['id']; ?>" class="btn btn-warning btn-sm f" style="width: 70px;"><i class="bi bi-pencil-square"></i> Edit</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card" style="width: 21rem;">
								<img class="mx-auto d-block mt-3" src="kanlurangbukal.png" width="50%"  alt="...">
								<div class="card-body">
									<p class="card-text text-center fs-5"><strong>CLAIRE TRILLANA</strong><br>SK CHAIRMAN</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card" style="width: 21rem;">
								<img class="mx-auto d-block mt-3" src="kanlurangbukal.png" width="50%"  alt="...">
								<div class="card-body">
									<p class="card-text text-center fs-5"><strong>HONEYLETTE VILLANUEVA</strong><br>BARANGAY SECRETARY</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card" style="width: 21rem;">
								<img class="mx-auto d-block mt-3" src="kanlurangbukal.png" width="50%"  alt="...">
								<div class="card-body">
									<p class="card-text text-center fs-5"><strong>HONEYLETTE VILLANUEVA</strong><br>BARANGAY SECRETARY</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card" style="width: 21rem;">
								<img class="mx-auto d-block mt-3" src="kanlurangbukal.png" width="50%"  alt="...">
								<div class="card-body">
									<p class="card-text text-center fs-5"><strong>HONEYLETTE VILLANUEVA</strong><br>BARANGAY SECRETARY</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card" style="width: 21rem;">
								<img class="mx-auto d-block mt-3" src="kanlurangbukal.png" width="50%"  alt="...">
								<div class="card-body">
									<p class="card-text text-center fs-5"><strong>HONEYLETTE VILLANUEVA</strong><br>BARANGAY SECRETARY</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card" style="width: 21rem;">
								<img class="mx-auto d-block mt-3" src="kanlurangbukal.png" width="50%"  alt="...">
								<div class="card-body">
									<p class="card-text text-center fs-5"><strong>HONEYLETTE VILLANUEVA</strong><br>BARANGAY SECRETARY</p>
								</div>
							</div>
						</div>
					</div>
				</main>
			</div>
		</div>

		<script>feather.replace()</script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
		<script src="dashboard.js"></script>
	</body>
	</html>
