<!DOCTYPE HTML>
<html>
<head>
	<title>Dyuthi '16</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/styles.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->


</head>
<body>

	<div id="field"></div>
	<div id="lanterncontainer"></div>

	<!-- Header -->
	<header id="header">

		<!-- Logo -->
		<h1 id="logo">Dyuthi (Logo here?)</h1>

		<!-- Nav -->
		<nav id="nav" >
			<ul>
				<li><a href="#intro">About Us</a></li>
				<li><a href="#one">Events</a></li>
				<li><a href="#two">Gallery</a></li>
				<li><a href="#work">Previous Sponsors</a></li>
				<li><a href="#contact">Contact us</a></li>
			</ul>
		</nav>

	</header>

	<!-- Intro -->
	<section id="intro" class="main style1 dark fullscreen">
		<div class="content container 75%">
			<header><h2>Dyuthi '16</h2>
			</header>
			<p>Dyuthi is back, ( Intro content here)</p>
			<footer>
				<a href="#one" class="button style2 down">More</a>
			</footer>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="main style2 right dark fullscreen">
		<div class="content box style2">
			<header>
				<h2>What I Do</h2>
			</header>
			<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
				Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
				id varius justo euismod in. Curabitur egestas consectetur magna.</p>
			</div>
			<a href="#two" class="button style2 down anchored">Next</a>
		</section>

		<!-- Two -->
		<section id="two" class="main style2 left dark fullscreen">
			<div class="content box style2">
				<header>
					<h2>Who I Am</h2>
				</header>
				<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
					id varius justo euismod in. Curabitur egestas consectetur magna.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

			<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>My Work</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
							Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis
							arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae.</p>
						</header>

						<!-- Lightbox Gallery  -->
						<div class="container 90% ">

							<?php
							$images = array();
							foreach(glob(dirname(__FILE__)."/images/logos/trans/*.{gif,jpg,jpeg,png}", GLOB_BRACE) as $file) {
								$images[$file] = filemtime($file);
							}
							arsort($images);
							$x=0;
							echo "<div class='row 0% images'>";
							foreach ($images as $file => $value) {
								if ($x%6==0) {
									echo "</div>";
									echo "<div class='row 0% images'>";
								}
								echo "<div class='frame 2u 3u(mobile)'><img class='gimg image fit from-";
								if($x%2==0){
									echo "left";
								}
								else{
									echo "right";
								}
								echo "' src='images/logos/trans/".basename($file)."' alt='' /></div>";
								$x=$x+1;
							}
							echo "</div>";
							?>


						</div>

					</div>
				</section>

				<!-- Contact -->
				<section id="contact" class="main style3 secondary">
					<div class="content container">
						<header>
							<h2>Say Hello.</h2>
							<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
						</header>
						<div class="box container 75%">

							<!-- Contact Form -->
							<form method="post" action="#">
								<div class="row 50%">
									<div class="6u 12u(mobile)"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u 12u(mobile)"><input type="email" name="email" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

						</div>
					</div>
				</section>

				<!-- Footer -->
				<footer id="footer">

					<!-- Icons -->
					<ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<!-- Menu -->
					<ul class="menu">
						<li>&copy; Untitled</li><li>Design: Dyuthi Web Team</li>
					</ul>

				</footer>



				<!-- Scripts -->
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/js/jquery.poptrox.min.js"></script>
				<script src="assets/js/jquery.scrolly.min.js"></script>
				<script src="assets/js/jquery.scrollex.min.js"></script>
				<script src="assets/js/skel.min.js"></script>
				<script src="assets/js/util.js"></script>
				<script src="assets/js/lanterns.js"></script>


				<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
				<script src="assets/js/main.js"></script>



			</body>
			</html>
