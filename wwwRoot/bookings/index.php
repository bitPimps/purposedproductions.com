<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Bookings</title>
		<meta name="description" content="">
		<?php include_once("../inc/meta-data.php"); ?>
	</head>

	<body>
		<?php include_once("../inc/nav-main.php"); DrawNavMain("Bookings"); ?>
		<nav id="breadcrumb" aria-label="breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Bookings &amp; Events</li>
				</ol>
			</div>
		</nav>
		<main role="main">
			<div class="container py-5">
				<div class="row">
					<div class="col-md-8">
						<h1>Bookings &amp; Events</h1>
						<p class="lead">Representing speakers and artists alike.</p>
					</div>
					<div class="col-md-4">
					</div>
				</div>
				<hr>
				<section id="events">
				<div class="row">
					<div class="col-md-8">
						<h2>Upcoming Events</h2>
						<table class="table">
							<thead class="thead-light">
								<tr>
									<th scope="col">Date &amp; Time</th>
									<th scope="col">Topic</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										Nov 3, 2020<br>
										<small>01:00 PM Central Time<br>
										(US and Canada)</small>
									</td>
									<td>
										<a href="https://zoom.us/meeting/register/tJMlc--orzMiE9AKlLKF8ZpN2bQwQeNshdOi" target="_blank">
											Writing On Purpose | Screenwriters' Accountability Lab
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4">
					</div>
				</div>
				</section>
				<hr>
				<section id="booking">
				<div class="row">
					<div class="col-md-8">
						<h2>Book Now!</h2>
						<p class="lead">Owner and CEO of It's A Gamble LLC DBA Purposed Productions</p>
						<p>Click images to enlarge.</p>
					</div>
					<div class="col-md-4">
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<a href="../img/Business-Card.jpg" target="_blank">
							<img class="img-thumbnail mx-auto" src="../img/Business-Card.jpg">
						</a>
					</div>
				</div>
				<div class="row my-4">
					<div class="col-md-6">
						<a href="../img/Speakers-Artists-Topics.jpg" target="_blank">
							<img class="img-thumbnail" src="../img/Speakers-Artists-Topics.jpg">
						</a>
					</div>
					<div class="col-md-6">
						<a href="../img/Speakers-Artists.jpg" target="_blank">
							<img class="img-thumbnail" src="../img/Speakers-Artists.jpg">
						</a>
					</div>
				</div>
				</section>
			</div>
		</main>
		<?php include_once("../inc/footer.php"); ?>
	</body>
</html>
