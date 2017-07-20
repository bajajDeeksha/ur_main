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
		<link href="assets/css/animate.min.css" rel="stylesheet">
        <link href="assets/css/lines.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="assets/css/custom.css" rel="stylesheet">
		<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		
		
		<!-- Icons/Glyphs -->
		<link href="assets/fonts/fontello.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		
	</head>
	
	<body>		
		<?php include 'header.php'; ?>

		<main>
            <section id="hero" class="line-hero img-bg-bottom img-bg-soft tint-bg">
				<div class="container inner">
					<div class="row">
						<div class="col-sm-12">
							<header>
								<h1 style="text-align:center;"> Area and Prefecture </h1>
							</header>
						</div>
					</div>
				</div>
			</section>
            <section id="area">
                <div class="container inner">
                    <div class="train-line">
                        <div class="row">
                            <h2> Kanto Area </h2>
                            <a href="#modal-work03" data-toggle="modal" name="tokyo" id="1" class="btn btn-large">Tokyo</a>
                            <a href="#modal-work03" data-toggle="modal" name="kanagawa" id="2" class="btn btn-large">Kanagawa</a>
                            <a href="#modal-work03" data-toggle="modal" name="chiba" id="3" class="btn btn-large">Chiba</a>
                            <a href="#modal-work03" data-toggle="modal" name="saitama" id="4" class="btn btn-large">Saitama</a>
                            <a href="#modal-work03" data-toggle="modal" name="ibaraki" id="5" class="btn btn-large">Ibaraki</a>
                            <h2> Kansai Area </h2>
                            <a href="#modal-work03" data-toggle="modal" name="osaka" id="6" class="btn btn-large">Osaka</a>
                            <a href="#modal-work03" data-toggle="modal" name="shiga" id="7" class="btn btn-large">Shiga</a>
                            <a href="#modal-work03" data-toggle="modal" name="nara" id="8" class="btn btn-large">Nara</a>
                            <a href="#modal-work03" data-toggle="modal" name="kyoto" id="9" class="btn btn-large">Kyoto</a>
                            <a href="#modal-work03" data-toggle="modal" name="hyogo" id="10" class="btn btn-large">Hyogo</a>
                            <h2> Chubu Area </h2>
                            <a href="#modal-work03" data-toggle="modal" name="shizouka" id="11" class="btn btn-large">Shizouka</a>
                            <a href="#modal-work03" data-toggle="modal" name="aichi" id="12" class="btn btn-large">Aichi</a>
                            <a href="#modal-work03" data-toggle="modal" name="gifu" id="13" class="btn btn-large">Gifu</a>
                            <a href="#modal-work03" data-toggle="modal" name="mie" id="14" class="btn btn-large">Mie</a>
                            <h2> Hiroshima Area </h2>
                            <a href="#modal-work03" data-toggle="modal" name="hiroshima" id="15" class="btn btn-large">Hiroshima</a>
                            <h2> Fukuoka Area </h2>
                            <a href="#modal-work03" data-toggle="modal" name="fukuoka" id="16" class="btn btn-large">Fukuoka</a>                            
                        </div>
                    </div>
                </div>
            <section>
		</main>

		<!-- Modal -->
		<div class="modal fade" id="modal-work03" tabindex="-1" role="dialog" aria-labelledby="modal-work03" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icon-cancel-1"></i></span></button>
						<h4 class="modal-title" id="modal-work03"> Please select the basis of search. </h4>
					</div>
					<div class="modal-body">
						<section id="portfolio-post">
							<div class="container inner-top-xs inner-bottom">
								<div class="row inner-top-xs reset-xs">
									<div class="col-sm-4 hidden-xs">
										<a href="line.php">
											<div class="area-train">
												<i class="fa fa-train fa-3x" aria-hidden="true"></i>
												<h3> Search along Train lines</h3>
											</div>
										</a>
									</div>
									<div class="col-xs-12 visible-xs">
										<div class="area-train">
											<h3> <i class="fa fa-train" aria-hidden="true"></i> Search along Train lines</h3>
										</div>
									</div>
									<div class="col-sm-4 hidden-xs">
										<a href="wards.php">
											<div class="area-train">
												<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
												<h3> Search along Wards </h3>												
											</div>
										</a>
									</div>
									<div class="col-xs-12 visible-xs">
										<div class="area-train">
											<h3> <i class="fa fa-map-marker" aria-hidden="true"></i> Search along Wards </h3>
										</div>
									</div>
									<div class="col-sm-4 hidden-xs">
										<a href="radius.php">
											<div class="area-train">
												<i class="fa fa-map fa-3x" aria-hidden="true"></i>
												<h3> Search via Radius from Location </h3>												
											</div>
										</a>
									</div>
									<div class="col-xs-12 visible-xs">
										<div class="area-train">
											<h3> <i class="fa fa-map" aria-hidden="true"></i> Search via Radius from Location </h3>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
        
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
		
		<!-- For demo purposes – can be removed on production -->
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
	</body>
</html>