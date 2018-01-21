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
<title>Xichen</title>
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
			<h1>Xichen</h1>
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
					<img src="images/xichen.png" style="width: 345px; height: 102px;">
				</h2>
				<p>La magia del pasado</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>La magia del pasado, encanto del presente</h2>
					<p>Chichén Itzá y Valladolid son dos tesoros que vale la pena
						conocer de la mano de guías expertos. El servicio de primera, la
						información más confiable y actualizada y la exquisita cocina de
						La Casona, entregan al visitante una experiencia genuina y un
						recuerdo significativo de la cultura maya.</p>
				</header>
				<p style="">
					<b>Nota: </b><label>* Puedes visitar el parque el 22 de Febrero</label><label>Quieres
						vivir esta experiencia?</label><label><a href="#ins">RESERVA AQUI</a></label>
				</p>

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
						Duración 12 hrs aproximadamente.<br> DÍAS DE OPERACIÓN: Lunes a
						Sábado.<br>TIPO DE ADMISIÓN INCLUIDA EN “ALL-FUN INCLUSIVE®”: Tour
						Deluxe
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
						<li>Visita a Chichén Itzá, Valladolid y el Cenote Maya Zací</li>
						<li>Guía bilingüe especializado (español-inglés)</li>
						<li>Dispositivo Radio Guía con audífonos</li>
						<li>Desayuno gourmet ligero a bordo del autobús, que consta de una
							baguette, un panqué, jugo y café</li>
						<li>Deliciosa comida buffet y bebidas en el exclusivo restaurante
							“La Casona” de Valladolid</li>
						<li>Autobús panorámico de lujo equipado con 2 baños, uno para
							damas y otro para caballeros</li>
						<li>Refrescos, café, agua embotellada y cervezas a bordo del
							autobús</li>
						<li>Toallitas refrescantes</li>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic03.jpg" alt="" />
				</div>
				<div class="content">
					<p style="text-align: justify;">El Tour Xichén comprende la visita
						al emblemático sitio arqueológico de Chichén Itzá y continúa con
						la visita a la ciudad colonial de Valladolid, en donde, además de
						disfrutar de una deliciosa variedad de especialidades
						gastronómicas, se visitará la emblemática Iglesia de San Gervasio
						(San Servacio) y el Centro Histórico, así como el famoso Cenote
						Maya Zací, reconocido por su belleza natural.</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<h2>Sugerencias al visitante</h2>
				</div>
				<div class="content">
					<ul>
						<li>Podrás dejar tus pertenencias resguardadas en la parte
							inferior del autobús designada para dicho fin, respetando las
							indicaciones del guía. Recomendamos que cargues contigo tus
							objetos de valor.</li>
						<li>Te recordamos que, a fin de evitar el deterioro del sitio
							arqueológico de Chichén Itzá, no está permitido subir a las
							pirámides.</li>
						<li>Debido a las altas temperaturas y humedad de la zona,
							recomendamos usar ropa cómoda y ligera, preferentemente de
							algodón, sombrero o gorra para el sol, así como bloqueador solar.
						</li>
						<li>El uso de cámara de video al interior del sitio arqueológico
							tiene un costo adicional independiente al Tour Xichén, el cual
							será cobrado por las autoridades del sitio.</li>
						<li>Este Tour es de alta actividad física y el sitio arqueológico
							no cuenta con facilidades o accesos adecuados para hacer uso de
							sillas de ruedas o carriolas.</li>
						<li>Te recomendamos llevar dinero en efectivo o tarjeta de crédito
							para realizar las compras de tu elección durante el Tour.</li>
						<li>Para tu comodidad estarán a la venta artículos alusivos al
							Tour y a sus atractivos a través de vendedores locales
							autorizados que ofrecerán productos a bordo del autobús.</li>

					</ul>
				</div>
			</section>
		</section>

		<!-- Three -->
		<section id="three" class="wrapper style3 special">
			<div class="inner">
				<header class="major">
					<h2>Deseas vivir esta Xperiencia?</h2>
				</header>
				<p style="font-weight: bold;">*Si te inscribes a este parque no
					podr&aacute;s visitar otros parques en esta fecha*</p>
				<form action="index.php" method="post" id="ins">
					<table>
						<tr>
							<td colspan="2"><input type="text" id="nu" name="nu"
								placeholder="Ingrese su numero de pasaporte"></td>
							<td colspan="2"><input type="button" id="xnu" name="xnu"
								value="Inscribirme" onclick="cnsprv(5);"></td>
						</tr>
					</table>
					<div id="std"></div>
				</form>
			</div>
		</section>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/Xichen.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>