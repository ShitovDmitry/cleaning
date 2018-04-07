<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Site</title>
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/mobile.css" rel="stylesheet" type="text/css">
		<link href="/assets/vendor/bootstrap/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>
	<body>
		<header>
			<div class="container row">
				<div class="col-md-3">
					<a href="/" class="logo text-center">
						<img src="/assets/img/logo_white.png">
					</a>
				</div>
				<div class="col-md-5">
					<div class="header-menu">
						<ul>
							<li><a>Главная</a></li>
							<li><a>О компании</a></li>
							<li><a>Услуги и цены</a></li>
							<li><a>Акции</a></li>
							<li><a>Контакты</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="main-information text-center">
						<a href="tel:+79999999999">+7 (999) 999 99 99</a>
						<br>
						<small>Звонок бесплатный по всей России</small>
					</div>
				</div>
				<div class="col-md-2 text-center ">
					<div class="zayavka">
						<button class="btn btn-primary" data-toggle="modal" data-target="#">
							Оставить заявку
						</button>
					</div>
				</div>
			</div>
		</header>
		<div class="wrapper">
			<?php require_once $_SERVER["DOCUMENT_ROOT"]."/home.php"?>
		</div>
		<footer>
			<div class="container row">
				<div class="col-md-3">
					<a href="/" class="logo text-center">
						<img src="/assets/img/logo_white.png">
					</a>
				</div>
				<div class="col-md-5">
					<div class="header-menu">
						<ul>
							<li><a>Главная</a></li>
							<li><a>О компании</a></li>
							<li><a>Услуги и цены</a></li>
							<li><a>Акции</a></li>
							<li><a>Контакты</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="main-information text-center">
						<a href="tel:+79999999999">+7 (999) 999 99 99</a>
						<small>Звонок бесплатный по всей России</small>
					</div>
				</div>
				<div class="col-md-2 text-center ">
					<div class="zayavka">
						<button class="btn btn-primary" data-toggle="modal" data-target="#">
							Оставить заявку
						</button>
					</div>
				</div>
			</div>
		</footer>
	</body>
	<script src="/assets/vendor/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="/assets/js/script.js"></script>
</html>
