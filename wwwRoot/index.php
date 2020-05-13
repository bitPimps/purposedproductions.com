<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>PURPOSED Productions</title>
		<meta name="description" content="">
		<?php include_once("inc/meta-data.php"); ?>
		<link rel="stylesheet" href="css/home.css?<?php echo(rand(10,10000)); ?>" />
	</head>

	<body class="d-flex flex-column h-100">
		<video autoplay muted loop id="bgVideo">
			<source src="css/img/city.mp4" type="video/mp4">
			Your browser does not support HTML5 video.
		</video>
		<?php include_once("inc/nav-main.php"); DrawNavMain("Home"); ?>
		<header class="py-5">
			<div class="container text-center">
				<h1>PURPOSED Productions</h1>
			</div>
		</header>
		<?php include_once("inc/footer.php"); ?>
	</body>
</html>
