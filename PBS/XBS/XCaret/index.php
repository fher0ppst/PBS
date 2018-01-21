<?php
require_once '../fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>XCaret</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body class="landing">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1>XCaret</h1>
			<nav id="nav">
				<ul>
					<li class="special"><a href="../#afi-prk" class="menuToggle"><span>Volver</span></a></li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>
					<img src="images/xcaret.png" style="width: 345px; height: 102px;">
				</h2>
				<p>M&eacute;xico Majestuoso</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>Majestuoso Para&iacute;so de M&eacute;xico</h2>
					<p>Naturaleza, gastronomía, arqueología y espectaculares
						tradiciones se reúnen para celebrar la vida en este parque
						familiar, el más emblemático del país. Venir a Xcaret es
						enamorarse de la grandeza de México.</p>
				</header>
				<p style="">
					<b>Nota: </b><label>* Puedes visitar el parque el 22 o 23 de
						Febrero</label>
				</p>
				<p style="color: white">Recuerda que puedes tomar el servicio de
					shuttle compartido desde las 8:30 h. Viaje redondo Hotel – Parque –
					Hotel</p>
				<p style="color: white">El parque se encuentra a 5 minutos del hotel
					Xcaret M&eacute;xico</p>

			</div>
		</section>

		<!-- Two -->
		<section id="two" class="wrapper alt style2">
			<section class="spotlight">
				<div class="image">
					<img src="images/pic01.jpg" alt="" />
				</div>
				<div class="content">
					<h2>HORARIO</h2>
					<p>
						08:30 am. a 10:30 pm.<br>DÍAS EN OPERACIÓN: Lunes a Domingo. 365
						días.<br>TIPO DE ADMISIÓN INCLUIDA EN “ALL-FUN INCLUSIVE®”: XCARET
						PLUS.
					</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic02.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Incluye</h2>
					<ul>
						<li>Acceso al Parque</li>
						<li>1 comida buffet con aguas frescas, café y 1 cerveza</li>
						<li>Renta de equipo de snorkel</li>
						<li>Casillero en instalaciones exclusivas “Área Plus”</li>
						<li>Donativo para Programa de Conservación de Tortugas Marinas.</li>
						<li>Acceso a “Xcaret México Espectacular”</li>
						<li>Servicio de shuttle compartido en horario establecidos.</li>
						<li>Viaje redondo Hotel – Parque – Hotel.</li>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic03.jpg" alt="" />
				</div>
				<div class="content">
					<h2>No incluye</h2>
					<ul>
						<li>Tour de snorkel</li>
						<li>Sea Trek®</li>
						<li>Snuba® family</li>
						<li>Snuba® de arrecife</li>
						<li>Xpá</li>
						<li>Cenas México Espectacular</li>
						<li>Temascal</li>
						<li>Tiburones ¡aventura interactiva!</li>
						<li>Rayas ¡encuentro interactivo!</li>
						<li>Sea trek ¡encuentro con rayas!</li>
						<li>Adrenalina</li>
						<li>Adventure kids</li>
						<li>Velas óticas</li>
						<li>Fish therapy</li>
						<li>Xcaret xclusivo</li>
						<li>Degustación de vinos de México</li>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<h2>Sugerencias</h2>
				</div>
				<div class="content">
					<ul>
						<li>Usar ropa cómoda (shorts y playera).</li>
						<li>Traer zapatos para agua y traje de baño.</li>
						<li>Favor de usar protector solar libre de químicos.</li>

					</ul>
				</div>
			</section>
		</section>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>
</html>
