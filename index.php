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


	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
<link rel="manifest" href="/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>
<body>

	<div id="field"></div>
	<div id="lanterncontainer"></div>

	<!-- Header -->
	<header id="header">

		<!-- Logo -->
		<img id="logo" src="images/pictures/logo.png"   />

		<!-- Nav -->
		<nav id="nav" >
			<ul>
				<li><a href="#intro">Dyuthi</a></li>
				<li><a href="#one">About Us</a></li>
				<li><a href="#two">Events</a></li>
				<li><a href="#work">Previous Sponsors</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>
		</nav>

	</header>

	<!-- Intro -->
	<section id="intro" class="main style1 dark fullscreen">
		<div class="content container 75%">
			<header>


			<h2>Dyuthi '16</h2>
			</header>
			<p>Welcome to Dyuthi 2016</p>
			<footer>
				<a href="#one" class="button style2 down">More</a>
			</footer>
		</div>
	</section>

	<!-- One -->
	<section id="one" class="main style2 right dark fullscreen">
		<div class="content box style2" style="background-color:#8B0000;">
			<header>
				<h2>Dyuthi</h2>
			</header>
			<p>Government Engineering College, Thrissur (GECT) presents in a new avatar the sensational Dyuthi'16, its annual national level techno-cultural managerial fest to be organized in the month of September 2016. Dyuthi'16 brings with it a wide variety of versatile events that encompasses all of the engineering trades as well as the managerial arena.From creating a perfect platform to share knowledge and astounding the crowds with swashbuckling performances, Dyuthi'16 has it all.</p>
			</div>
			<a href="#two" class="button style2 down anchored">Next</a>
		</section>

		<!-- Two -->
		<section id="two" class="main style2 left dark fullscreen">
			<div class="content box style2" style="background-color:#72348E;">
				<header>
					<h2>Events</h2>
				</header>
				<p> 
With a prize money of more than Rs.7 lakhs, Dyuthi boasts of more than 60 events encompassing all engineering departments as well as the architectural stream. The 3 day event also consists of workshops, lectures and entertainment nights involving special guests from the entertainment industry– programmes that cater to people from all walks of life, and ensuring that Dyuthi remains the talk of the town in the cultural capital of the state.</p>
				</div>
				<a href="#work" class="button style2 down anchored">Next</a>
			</section>

			<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Previous Sponsors</h2>
						 
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
							<h2>Contact</h2>

							 						</header>
						<div class="box container 75%">

						<h4 style="color:black;">Ajin C Abraham 
Convenor, Sponsorship Committee   : 9495676980</h4>


	<h4 style="color:black">Ananthu M R 

Convenor, Programme Committee&nbsp; &nbsp; &nbsp;&nbsp; : 8547264670</h4>


							<!-- <!-- Contact Form -->
							
							 

						</div>
					</div>
				</section>

				<!-- Footer -->
				<footer id="footer">

					<!-- Icons -->
					<!-- <ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul> -->

					<!-- Menu -->
					<ul class="menu">
						<li>&copy; Dyuthi 16</li><li>Design: Dyuthi Web Team</li>
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
