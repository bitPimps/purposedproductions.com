<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Work</title>
		<meta name="description" content="">
		<?php include_once("../inc/meta-data.php"); ?>
		<style>
#gallery img {
	 height: 75vw;
	 object-fit: cover;
}
 @media (min-width: 576px) {
	 #gallery img {
		 height: 35vw;
	}
}
 @media (min-width: 992px) {
	 #gallery img {
		 height: 18vw;
	}
}
#imgModal .carousel-item img {
	 height: 60vw;
	 object-fit: cover;
}
 @media (min-width: 576px) {
	 #imgModal .carousel-item img {
		 height: 650px;
	}
}
		</style>
	</head>

	<body>
		<?php include_once("../inc/nav-main.php"); DrawNavMain("Work"); ?>
		<nav id="breadcrumb" aria-label="breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Work</li>
				</ol>
			</div>
		</nav>
		<main role="main">
			<div class="container py-5">
				<div class="row">
					<div class="col-md-8">
						<h1>Work</h1>
						<p class="lead">Producing Indie entertainment and education.</p>
						<p><strong>Mission</strong><br>
							Purposed Productions creates riveting stories for film and television that speak to a cross-cultural audience. We inspire creatives and the underserved to realize their dreams by providing them education, resources and coaching that position them for personal and communal empowerment.</p>
						<p><strong>Vision</strong><br>
							Be a leader in producing Indie entertainment content and education that provokes positive internal and societal change.</p>
					</div>
					<div class="col-md-4">
						<figure class="figure">
							<img src="../img/KnowAnnieMalone.jpg" class="figure-img img-fluid rounded w-75" alt="KnowAnnieMalone.com">
							<figcaption class="figure-caption"><a href="http://knowanniemalone.com/" target="_blank">KnowAnnieMalone.com</a></figcaption>
						</figure>
					</div>
				</div>
				<hr>
				<div class="row">
					<!--
					<div class="col-md-4">
						<div class="list-group">
							<a href="#Photos" class="list-group-item list-group-item-action">Photo Gallery</a>
							<a href="#Videos" class="list-group-item list-group-item-action">Videos</a>
							<a href="#Posters" class="list-group-item list-group-item-action">Movie Posters</a>
						</div>
					</div>
					-->
					<div class="col">
						<h2 id="Photos">Photo Gallery</h2>
						<div class="row no-gutters text-center" id="gallery" data-toggle="modal" data-target="#imgModal">
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="0">
									<img class="img-fluid" src="../img/gallery/11069496_1464900117146557_1578034340060294438_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="1">
									<img class="img-fluid" src="../img/gallery/11145567_1467599236876645_7030072806701959681_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="2">
									<img class="img-fluid" src="../img/gallery/12087277_1493007704335798_1645579304536348900_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="3">
									<img class="img-fluid" src="../img/gallery/12640515_10208173978244314_2279281443260879185_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="4">
									<img class="img-fluid" src="../img/gallery/13071995_1547620732207828_6591589032638920204_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="5">
									<img class="img-fluid" src="../img/gallery/20180630_161014.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="6">
									<img class="img-fluid" src="../img/gallery/20180630_162044.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="7">
									<img class="img-fluid" src="../img/gallery/33580923_1830388327264399_5557290211865526272_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="8">
									<img class="img-fluid" src="../img/gallery/33597404_10215811655661476_150419143504429056_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="9">
									<img class="img-fluid" src="../img/gallery/33751432_10215815359234063_5258817545598664704_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="10">
									<img class="img-fluid" src="../img/gallery/33777441_10215827182609640_1183801142644047872_o.jpg" alt="">
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-6">
								<a href="#" class="d-block h-100" data-target="#imgCarousel" data-slide-to="11">
									<img class="img-fluid" src="../img/gallery/84961837_2231756687127559_471668927580078080_o.jpg" alt="">
								</a>
							</div>
						</div><!-- /gallery row -->
						<div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div id="imgCarousel" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#imgCarousel" data-slide-to="1"></li>
												<li data-target="#imgCarousel" data-slide-to="2"></li>
												<li data-target="#imgCarousel" data-slide-to="3"></li>
												<li data-target="#imgCarousel" data-slide-to="4"></li>
												<li data-target="#imgCarousel" data-slide-to="5"></li>
												<li data-target="#imgCarousel" data-slide-to="6"></li>
												<li data-target="#imgCarousel" data-slide-to="7"></li>
												<li data-target="#imgCarousel" data-slide-to="8"></li>
												<li data-target="#imgCarousel" data-slide-to="9"></li>
												<li data-target="#imgCarousel" data-slide-to="10"></li>
												<li data-target="#imgCarousel" data-slide-to="11"></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" src="../img/gallery/11069496_1464900117146557_1578034340060294438_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/11145567_1467599236876645_7030072806701959681_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/12087277_1493007704335798_1645579304536348900_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/12640515_10208173978244314_2279281443260879185_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/13071995_1547620732207828_6591589032638920204_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/20180630_161014.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/20180630_162044.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/33580923_1830388327264399_5557290211865526272_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/33597404_10215811655661476_150419143504429056_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/33751432_10215815359234063_5258817545598664704_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/33777441_10215827182609640_1183801142644047872_o.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="../img/gallery/84961837_2231756687127559_471668927580078080_o.jpg">
												</div>
											</div>
											<a class="carousel-control-prev" href="#imgCarousel" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#imgCarousel" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div><!-- /imgModal -->
						<hr>
						<h2 id="Videos">Videos</h2>
						<div class="row mb-4">
							<div class="col-md-6">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Eb0FvDwOFVo?rel=0" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-md-6">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oII3j_Qoggg?rel=0" allowfullscreen></iframe>
								</div>
							</div>
						</div><!-- /row -->
						<div class="row">
							<div class="col-md-6">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uX48SIHtDWA?rel=0" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-md-6">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cF9D5BqIqV8?rel=0" allowfullscreen></iframe>
								</div>
							</div>
						</div><!-- /row -->
						<hr>
						<h2 id="Posters">Movie Posters</h2>
						<div class="row">
							<div class="col-md-6">
								<img class="img-fluid rounded shadow" src="../img/gallery/EyesDontLie_MoviePoster.jpg" alt="Eyes Don't Lie">
							</div>
							<div class="col-md-6">
								<img class="img-fluid rounded shadow" src="../img/gallery/MovieFlyer-Main-Poster.jpg" alt="Hitman Holla">
							</div>
						</div><!-- /row -->
						<!--
						<div class="row">
							<div class="col">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
										<li data-target="#myCarousel" data-slide-to="3"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="https://via.placeholder.com/1280/000000/FFFFFF/?text=Poster+1">
										</div>
										<div class="carousel-item">
											<img src="https://via.placeholder.com/1280/0000FF/FFFFFF/?text=Poster+2">
										</div>
										<div class="carousel-item">
											<img src="https://via.placeholder.com/1280/008000/FFFFFF/?text=Poster+3">
										</div>
										<div class="carousel-item">
											<img src="https://via.placeholder.com/1280/FF0000/FFFFFF/?text=Poster+4">
										</div>
									</div>
									<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div><!-- /row -->
					</div>
				</div>
			</div>
		</main>
		<?php include_once("../inc/footer.php"); ?>
	</body>
</html>
