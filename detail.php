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
		<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">	
		
		<!-- AddOn/Plugin CSS -->
		<link href="assets/css/green.css" rel="stylesheet" title="Color">
        <link href="assets/css/building.css" rel="stylesheet">
		<link href="assets/css/chosen/chosen.css" rel="stylesheet">
		
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
				
		<main id="buildings">
			<div id="building-detail">
			<!-- just a banner -->
			<section id="hero" class="img-bg-bottom img-bg-soft tint-bg">
				<div class="container inner">
					<div class="row">
						<div class="col-sm-12">
							<header>
								<h1 style="text-align:center;"> Shiomi Ekimae Plaza 2Bangai </h1>
							</header>
						</div>
					</div>
				</div>
			</section>
            <section>
                <div class="container inner">
                    <div class="row">
						<div class="col-md-5">
							<div class="panel-heading">
                                <h2><i class="icon-picture-1" aria-hidden="true"></i> Property Images </h2>
                            </div>
							<img class="img-responsive" src="assets/images/building_photo.png">
						</div>
						<div class="col-md-7">
							<div class="panel-heading">
                                <h2><i class="icon-info"></i> Overview </h2>
                            </div>
							<table class="table">
								<tbody>
									<tr>
										<th>Id</th>
										<td>20_1920</td>
									</tr>
									<tr>
										<th>Address</th>
										<td>6-1 Ojima Koto-Ku Tokyo</td>
									</tr>
									<tr>
										<th>Rent</th>
										<td>&yen;68,600 ～ 134,100</td>
									</tr>
									<tr>
										<th>Managment</th>
										<td>¥2,100 / mth</td>
									</tr>
									<tr>
										<th>Room</th>
										<td>260</td>
									</tr>
									<tr>
										<th>Floor</th>
										<td>1～5</td>
									</tr>
									<tr>
										<th>Parking</th>
										<td>available</td>
									</tr>
									<tr>
										<th>Year Built</th>
										<td>1970.3 ～ 1971.8</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-5">
							<div class="panel-heading">
                                <h2><i class="fa fa-picture-o" aria-hidden="true"></i> Access </h2>
                            </div>
							<div class="panel-body" style="padding-top: 0;">
								<span class="traffic-test">12 min walk to Nishikasai station </span><br/>
								<span class="traffic-test">2 min walk to Nihombashi station </span><br/>
								<span class="traffic-test">7 min walk to higashi-ojima station </span>
							</div>
							<div class="panel-heading">
                                <h2><i class="icon-vcard" aria-hidden="true"></i> Facilities </h2>
                            </div>
							<div class="panel-body" style="padding-top: 0;">
								<span class="traffic-test">Elevator | System Kitchen | balcony | aircondition</span><br/>
							</div>
						</div>
						<div class="col-md-7">
							<div class="panel-heading">
                                <h2><i class="fa fa-bed" aria-hidden="true"></i> Room Information </h2>
                            </div>
							<div class="panel-body" style="padding-top: 0;">
								<table class="table table-striped" style="border: 2px solid #ddd;">
									<thead>
										<tr>
											<th> Layout </th>
											<th> Size (m2) </th>
											<th> Rent </th>
											<th> Managment Fees </th>
											<th> Rooms </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td> 1LDK </td>
											<td> 40 </td>
											<td> ¥77,000 </td>
											<td> ¥2,100 </td>
											<td> 2 </td>
										</tr>
										<tr>
											<td> 2DK </td>
											<td> 38 ~ 40 </td>
											<td> ¥54,000 ～ 60,100 </td>
											<td> ¥2,100 </td>
											<td> 203 </td>
										</tr>
										<tr>
											<td> 3K </td>
											<td> 45 </td>
											<td> ¥62,300 ～ 64,500 </td>
											<td> ¥2,100 </td>
											<td> 40 </td>
										</tr>
										<tr>
											<td> 3DK </td>
											<td> 49 </td>
											<td> ¥67,100 ～ 69,400 </td>
											<td> ¥2,100 </td>
											<td> 15 </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="panel-heading">
                                <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Maps </h2>
                            </div>
							<div class="row">
								<section class="col-md-6" id="map"></section>
								<div class="col-md-6">
								
								</div>
							</div>
						</div>
                    </div>
                </div>
            </section>
		</main>
		
		<!-- footer -->
		<?php include 'footer.php'; ?>

		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.form.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="assets/js/jquery.easytabs.min.js"></script>
		<script src="assets/js/scripts.js"></script>
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