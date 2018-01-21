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
<title>XPlor</title>
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
			<h1>XPlor</h1>
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
					<img src="images/Xplor.png" style="width: 345px; height: 102px;">
				</h2>
				<p>Preparate...</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>Prepárate para vivir grandes aventuras</h2>
					<p>La Riviera Maya no vuelve a ser la misma cuando se conoce su
						mundo subterráneo y además, se mira desde el aire. Este parque
						invita a convertirse en explorador y navegar en sus cuevas
						prehistóricas, sentir la frescura de las cascadas, recorrer la
						selva en un vehículo anfibio y deslizarse por las tirolesas más
						altas de la región.</p>
				</header>
				<p style="">
					<b>Nota: </b><label>* Puedes visitar el parque el 22 o 23 de
						Febrero</label>
				</p>
				<p style="color: white">Recuerda que puedes tomar el servicio de
					shuttle compartido cada 30 minutos desde las 17:00 h. Viaje redondo
					Hotel – Parque – Hotel</P>
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
						HORARIO: 09:00 am. a 05:00 pm.<br> DÍAS DE OPERACIÓN: Lunes a
						Sábado.<br> TIPO DE ADMISIÓN INCLUIDA EN “ALL-FUN INCLUSIVE®”:
						Admisión Regular.
					</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic02.jpg" alt="" />
				</div>
				<div class="content">
					<h2>INCLUYE</h2>
					<ul>
						<li>Acceso al Parque</li>
						<li>Ilimitada comida buffet durante todo el día.</li>
						<li>Aguas frescas ilimitadas</li>
						<li>Chocolate caliente a la salida de los dos ríos</li>
						<li>Vestidores</li>
						<li>Casilleros</li>
						<li>Equipo</li>
						<li>Restaurante/snack</li>
						<li>Refresquería</li>

					</ul>
				</div>

			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic03.jpg" alt="" />
				</div>
				<div class="content">
					<h2>ATRACTIVOS INCLUIDOS</h2>
					<ul>
						<li>Nado en río de estalactitas</li>
						<li>Tirolesas (2 Circuitos)</li>
						<li>Balsas (2 Circuitos)</li>
						<li>Vehículos anfibios (2 Circuitos)</li>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<h2>Sugerencias al visitante</h2>
				</div>
				<div class="content">
					<ul>
						<li>Usar ropa cómoda (shorts y playera).</li>
						<li>Traer zapatos para agua y traje de baño.</li>
						<li>Favor de usar protector solar libre de qu&iacute;micos.</li>
					</ul>
					<p>*Los exploradores que presenten alguna discapacidad
						deber&aacute;n ir siempre acompañados por un familiar o amigo que
						los asista, debido a que nuestros gu&iacute;as no podr&aacute;n
						hacerse cargo.</p>


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