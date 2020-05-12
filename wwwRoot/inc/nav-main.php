<?php function DrawNavMain($navMainOn) { ?>
<nav class="navbar navbar-expand-xl navbar-light fixed-top bg-navbar shadow">
			<div class="container">
				<a class="navbar-brand" href="/index.php"><img src="/img/logos/travel-angel-planner.png" alt="Travel Angel Planner LLC"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTAP" aria-controls="navbarTAP" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTAP">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item<?php if($navMainOn=="Home"){?> active<?php } ?>">
							<a class="nav-link" href="/index.php">Home<?php if($navMainOn=="Home"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Testimonials"){?> active<?php } ?>">
							<a class="nav-link" href="/testimonials/index.php">Testimonials<?php if($navMainOn=="Testimonials"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Our Team"){?> active<?php } ?>">
							<a class="nav-link" href="/team/index.php">Our Team<?php if($navMainOn=="Our Team"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Contact"){?> active<?php } ?>">
							<a class="nav-link" href="/contact/index.php">Contact<?php if($navMainOn=="Contact"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<?php } ?>