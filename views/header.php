<!DOCTYPE html>
<html ng-app="shop">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<title>Orlando City</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/owl.carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="public/fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="lib/raty/lib/jquery.raty.css">
		<link rel="stylesheet" href="public/css/stylesheet.css">
		<link rel="stylesheet" href="public/css/stylesheet-mobile.css">

		<script src="lib/angularjs/angular.min.js"></script>

	</head>
	<body>

		<header>
			
			<div id="menu-mobile-mask" class="visible-xs"></div>

			<div id="menu-mobile" class="visible-xs">
				
				<ul class="list-unstyled">
					<li><a href="videos">Home</a></li>
					<li><a href="videos">Lorem</a></li>
					<li><a href="#">Ipsum</a></li>
					<li><a href="#">Civis</a></li>
				</ul>

				<div class="bar-close">
					<button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
				</div>

			</div>
			
			<div class="container">
				<img id="logotipo" src="public/images/borussia-logo.png" style="width:128px; heigth:146px;" alt="Logotipo">
			</div>

			<div class="header-black">
				
				<div class="container">

					<input type="search" id="input-search-mobile" class="visible-xs" placeholder="Buscarum...">
				
					<button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
					<button id="btn-search" type="button"><i class="fa fa-search"></i></button>

				</div>

			</div>

			<div class="container">
				
				<div class="row">
					
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="videos">Lorem</a></li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Civis</a></li>
							<li class="search">
								<div class="input-group">
							      <input type="search" placeholder="Buscarum..." id="input-search">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>
						</ul>
					</nav>

				</div>

			</div>			

		</header>
