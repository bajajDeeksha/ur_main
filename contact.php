<!DOCTYPE html>

<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Asahi Service Company</title>
		
		<!-- Core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/main.css" rel="stylesheet">
		
		<!-- AddOn/Plugin CSS -->
		<link href="assets/css/green.css" rel="stylesheet" title="Color">
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/owl.transitions.css" rel="stylesheet">
		<link href="assets/css/animate.min.css" rel="stylesheet">
		<link href="assets/css/aos.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="assets/css/custom.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Lato:400,900,300,700" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic" rel="stylesheet">
		
		<!-- Icons/Glyphs -->
		<link href="assets/fonts/fontello.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
	
	<body>
		<!-- header -->
		<?php include 'header.php'; ?>

		<main>
			<section id="contact-form">
				<div id="hero" class="dark-bg img-bg img-bg-soft" style="background-image: url(assets/images/slider02.jpg); padding: 90px 0;">
					<div class="container inner">
						<div class="row">
							<div class="col-md-8 col-sm-9 center-block text-center">
								<header>
									<h1>Get in touch</h1>
									<p>Looking for an apartment ? Contact Us, we can help you :)</p>
								</header>
							</div>
						</div>
					</div>
				</div>

					<div class="container inner">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-6 outer-top-md inner-right-sm">
									<h2>Leave a Message</h2>
									<form id="contactform" class="forms" action="contact.php" method="post">
										<div class="row">
											<div class="col-sm-12">
												<input type="text" name="name" class="form-control" placeholder="Name (Required)">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<input type="email" name="email" class="form-control" placeholder="Email (Required)">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<input type="text" name="subject" class="form-control" placeholder="Subject">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<textarea name="message" class="form-control" placeholder="Enter your message ..."></textarea>
											</div>
										</div>
										<button type="submit" class="btn btn-default btn-submit">Submit message</button>
									</form>
									<div id="response"></div>
								</div>
								<div class="col-sm-6 outer-top-md inner-left-sm border-left">
									<h2>Contacts</h2>
									<p> We are helping foreigners in Japan to get apartment according to their budget. Looking for an apartment ? Contact Us.. We are available for you 24/7. </p>
									
									<h3>Asahi Service Company</h3>
									<ul class="contacts">
										<li><i class="icon-location contact"></i> Shinjuku-ku, Tokya Hyakunincho 2-20-12 - Japan</li>
										<li><i class="icon-mobile contact"></i>+81 70 4292 6727</li>
										<li><a href="mailto:info@reen.com"><i class="icon-mail-1 contact"></i>info@asahiservice.com</a></li>
									</ul>
									
									<div class="social-network">
										<h3>Social</h3>
										<ul class="social">
											<li><a href="#"><i class="icon-s-facebook"></i></a></li>
											<li><a href="#"><i class="icon-mail"></i></a></li>
										</ul>
									</div>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="map" class="height-sm"></section>
		
			<section id="image-background-1" class="light-bg img-bg-soft img-bg" style="background-image: url(assets/images/art/image-background01.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-9 inner center-block text-center">
							<header>
								<h1> FREE UPDATES !! </h1>
								<p> Subscribe with us and get a monthly subscribtion from us on the new apartments.</p>
							</header>
							<form id="newsletter" class="form-inline newsletter" role="form">
								<label class="sr-only" for="exampleInputEmail">Email address</label>
								<input style="border: 2px solid #506A85;" type="email" class="form-control" id="exampleInputEmail" placeholder="Enter your email address">
								<button type="submit" style="padding: 7px;" class="btn btn-default btn-submit">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<!-- footer -->
		<?php include 'footer.php'; ?>

		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.easing.1.3.min.js"></script>
		<script src="assets/js/jquery.form.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/aos.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.isotope.min.js"></script>
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="assets/js/jquery.easytabs.min.js"></script>
		<script src="assets/js/viewport-units-buggyfill.js"></script>
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/custom.js"></script>
		
		<script>
			/* Google Maps */
			function initMap() {
				var mapOptions = {
						center				: new google.maps.LatLng(40.7902778, -73.9597222),
						zoom				: 13,
						disableDefaultUI	: true,
						scrollwheel			: false
					},
					map = new google.maps.Map(document.getElementById('map'), mapOptions);
			}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
		
	</body>
</html>