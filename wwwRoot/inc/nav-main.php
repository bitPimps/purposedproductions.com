<?php function DrawNavMain($navMainOn) { ?>
<nav class="navbar navbar-expand-xl navbar-dark fixed-top bg-navbar shadow">
			<div class="container">
				<a class="navbar-brand" href="/pp/index.php"><img src="/pp/img/logos/Purposed-Productions.png" alt="PURPOSED Productions"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPurposed" aria-controls="navbarPurposed" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarPurposed">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item<?php if($navMainOn=="Home"){?> active<?php } ?>">
							<a class="nav-link" href="/pp/index.php">Home<?php if($navMainOn=="Home"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="About"){?> active<?php } ?>">
							<a class="nav-link" href="/pp/about/index.php">About<?php if($navMainOn=="About"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Services"){?> active<?php } ?>">
							<a class="nav-link" href="/pp/services/index.php">Services<?php if($navMainOn=="Services"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Work"){?> active<?php } ?>">
							<a class="nav-link" href="/pp/work/index.php">Work<?php if($navMainOn=="Work"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Contact"){?> active<?php } ?>">
							<a class="nav-link" href="/pp/contact/index.php">Contact<?php if($navMainOn=="Contact"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownSocial" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Follow</a>
							<div class="dropdown-menu" aria-labelledby="dropdownSocial">
								<a class="dropdown-item" href="https://www.facebook.com/PurposedProductions/" target="_blank"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i>@PurposedProductions</a>
								<a class="dropdown-item" href="https://www.facebook.com/jana.m.gamble" target="_blank"><i class="fa fa-facebook-official fa-fw" aria-hidden="true"></i>@JanaMGamble</a>
								<a class="dropdown-item" href="https://www.instagram.com/purposedproductions/" target="_blank"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i>@PurposedProductions</a>
								<a class="dropdown-item" href="https://www.instagram.com/AuthorJMG/" target="_blank"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i>@AuthorJMG</a>
								<a class="dropdown-item" href="https://twitter.com/purposed_prods" target="_blank"><i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i>@Purposed_Prods</a>
								<a class="dropdown-item" href="https://twitter.com/authorjmg" target="_blank"><i class="fa fa-linkedin-square fa-fw" aria-hidden="true"></i>@Jana M. Gamble</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<?php } ?>