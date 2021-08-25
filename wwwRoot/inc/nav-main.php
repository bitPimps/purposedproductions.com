<?php function DrawNavMain($navMainOn) { ?>
<nav class="navbar navbar-expand-xl navbar-dark fixed-top bg-navbar shadow">
			<div class="container">
				<a class="navbar-brand" href="/index.php"><img src="/img/logos/Purposed-Productions.png" alt="PURPOSED Productions"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPurposed" aria-controls="navbarPurposed" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarPurposed">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item<?php if($navMainOn=="Home"){?> active<?php } ?>">
							<a class="nav-link" href="/index.php">Home<?php if($navMainOn=="Home"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item dropdown<?php if($navMainOn=="About"){?> active<?php } ?>">
							<a class="nav-link dropdown-toggle" href="/about/index.php" id="dropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
							<div class="dropdown-menu" aria-labelledby="dropdownAbout">
								<a class="dropdown-item" id="mainnavAboutPP" href="/about/index.php">PURPOSED Productions</a>
								<a class="dropdown-item" id="mainnavAboutCS" href="/about/index.php#covid">COVID Statement</a>
								<a class="dropdown-item" id="mainnavAboutBLM" href="/about/index.php#blm">Our Stand for Black Lives Matter</a>
								<div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Press Releases</h6>
								<a class="dropdown-item" id="mainnavPR1" href="/docs/Mentoring-Making-The-Difference.pdf" target="_blank">Mentoring Making The Difference</a>
								<div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Newsletters</h6>
								<a class="dropdown-item" id="mainnavPR1" href="/docs/Purposed-Pages-v01-iss01.pdf" target="_blank">Purposed Pages Newsletter - Volum 1, Issue 1 - 2021</a>
								<a class="dropdown-item" id="mainnavPR1" href="/docs/Purposed-Pages-v01-iss02.pdf" target="_blank">Purposed Pages Newsletter - Volum 1, Issue 2 - 2021</a>
							</div>
						</li>
						<!--
						<li class="nav-item<?php if($navMainOn=="About"){?> active<?php } ?>">
							<a class="nav-link" href="/about/index.php">About<?php if($navMainOn=="About"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						-->
						<li class="nav-item<?php if($navMainOn=="Services"){?> active<?php } ?>">
							<a class="nav-link" href="/services/index.php">Services<?php if($navMainOn=="Services"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Work"){?> active<?php } ?>">
							<a class="nav-link" href="/work/index.php">Work<?php if($navMainOn=="Work"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Bookings"){?> active<?php } ?>">
							<a class="nav-link" href="/bookings/index.php">Bookings &amp; Events<?php if($navMainOn=="Bookings"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://shop.spreadshirt.com/purposed-apparel" target="_blank">Shop</a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Contact"){?> active<?php } ?>">
							<a class="nav-link" href="/contact/index.php">Contact<?php if($navMainOn=="Contact"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownSocial" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Follow</a>
							<div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="dropdownSocial">
								<h6 class="dropdown-header">Facebook</h6>
								<a class="dropdown-item" href="https://www.facebook.com/PurposedProductions/" target="_blank"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i>@PurposedProductions</a>
								<a class="dropdown-item" href="https://www.facebook.com/jana.m.gamble" target="_blank"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i>@JanaMGamble</a>
								<a class="dropdown-item" href="https://www.facebook.com/groups/627240804538248" target="_blank"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i>@Hollywood Prayer Network StL</a>
								<div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Instagram</h6>
								<a class="dropdown-item" href="https://www.instagram.com/purposedproductions/" target="_blank"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i>@PurposedProductions</a>
								<a class="dropdown-item" href="https://www.instagram.com/AuthorJMG/" target="_blank"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i>@AuthorJMG</a>
								<a class="dropdown-item" href="https://www.instagram.com/HollywoodPrayerStL/" target="_blank"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i>@HollywoodPrayerStL</a>
								<div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Twitter</h6>
								<a class="dropdown-item" href="https://twitter.com/purposed_prods" target="_blank"><i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i>@Purposed_Prods</a>
								<a class="dropdown-item" href="https://twitter.com/authorjmg" target="_blank"><i class="fa fa-linkedin-square fa-fw" aria-hidden="true"></i>@Jana M. Gamble</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<?php } ?>