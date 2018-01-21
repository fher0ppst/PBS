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
<title>XPlor Fuego</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="landing">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1>Xplor Fuego</h1>
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
					<img src="images/xploref.png" style="width: 345px; height: 102px;">
				</h2>
				<p>Aventuras nocturnas</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>Vive la noche</h2>
					<p>Es el único parque nocturno de la Riviera Maya y, según los
						exploradores, también es el más emocionante. La adrenalina sube al
						máximo entre antorchas, impactantes circuitos de tirolesas, ríos
						subterráneos de lava y misteriosos caminos selváticos.</p>
				</header>
				<p style="">
					<b>Nota: </b><label>* Puedes visitar el parque el 22 de Febrero</label>
					<label>Quieres vivir esta experiencia?</label><label><a href="#ins">RESERVA
							AQUI</a></label>
				</p>
				<p style="color: white">Recuerda que puedes tomar el servicio de
					shuttle compartido cada 30 minutos desde las 17:00 h. Viaje redondo
					Hotel – Parque – Hotel</p>

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
						17:30 a 23:30 DÍAS DE OPERACIÓN: Lunes a Sábado.<br>TIPO DE
						ADMISIÓN INCLUIDA EN “ALL-FUN INCLUSIVE®”: Admisión Regular.
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
						<li>Equipo (chaleco salvavidas, casco, arnés, guantes de remo,
							balsa, vehículo anfibio para dos personas)</li>
						<li>Casillero para dos personas (no es necesario dejar ningún tipo
							de depósito)</li>
						<li>Alimentos y bebidas</li>
						<li>Vestidores</li>
						<li>Casilleros</li>
						<li>Unidad de Primeros Auxilios</li>
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
						<li>Nado en río de lava</li>
						<li>Tirolesas de noche y fuego</li>
						<li>Balsas volcánicas</li>
						<li>Vehículos anfibios</li>
						<li>Circuito
							<ul>
								<li>Vuelos de la Torre 1 a la 10 en el circuito Jaguares</li>
								<li>Vuelo – Acuatizaje (de Torre 10 al Punto 11)</li>
							</ul>
						</li>
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
						<li>Favor de usar protector solar libre de químicos.</li>
					</ul>
					<p>*Los exploradores que presenten alguna discapacidad deberán ir
						siempre acompañados por un familiar o amigo que los asista, debido
						a que nuestros guías no podrán hacerse cargo.</p>
				</div>
			</section>
		</section>

		<!-- Three -->
		<section id="three" class="wrapper style3 special">
			<div class="inner">
				<header class="major">
					<h2>Deseas vivir esta Xperiencia?</h2>
				</header>
				<form action="index.php" method="post" id="ins">
					<table>
						<tr>
							<td colspan="2"><input type="text" id="nu" name="nu"
								placeholder="Ingrese su numero de pasaporte"></td>
							<td colspan="2"><input type="button" id="xnu" name="xnu"
								value="Inscribirme" onclick="cnsprv(4);"></td>
						</tr>
					</table>
					<div id="std"></div>
				</form>
			</div>
		</section>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/Xplor.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>