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
<title>Xenses</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="landing">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1>Xenses</h1>
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
					<img src="images/xenses-c.png" style="width: 345px; height: 102px;">
				</h2>
				<p>Nada es lo que parece</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>Sorprendente</h2>
					<p>Un parque divertidamente vanguardista, cuyos circuitos y
						escenarios retan a la mente y agudizan la percepción. Un mundo
						donde se borran los límites entre pensar, sentir, imaginar y
						fantasear.</p>
				</header>
				<p style="">
					<b>Nota: </b><label>* Puedes visitar el parque el 22 o 23 de
						Febrero</label>
				</p>
				<p style="color: white">Recuerda que puedes tomar el servicio de
					shuttle compartido desde las 8:30 h. Viaje redondo Hotel – Parque –
					Hotel</p>
			</div>
		</section>

		<!-- Two -->
		<section id="two" class="wrapper alt style2">
			<section class="spotlight">
				<div class="image">
					<img src="images/pic01.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Horario</h2>
					<p>
						9:00 am a 2:00 pm y 2:00 a 6:00 pm.<br>DÍAS DE OPERACIÓN: Lunes a
						Sábado.<br>TIPO DE ADMISIÓN INCLUIDA EN “ALL-FUN INCLUSIVE®”:
						Admisión Xenses.
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
						<li>Servicio de shuttle compartido en horario establecidos. Viaje
							redondo Hotel – Parque – Hotel.</li>
						<li>Más de 15 actividades.</li>
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
						<li>Xensei</li>
						<li>Rehilete</li>
						<li>Camino de enanos y gigantes</li>
						<li>Xensatorium</li>
						<li>Laberinto de arterias subterráneas</li>
						<li>El edén</li>
						<li>Jardín xítrico</li>
						<li>El latido</li>
						<li>Pueblola recámara</li>
						<li>El respiro</li>
						<li>Tobogán</li>
						<li>Vuelo de pájaro</li>
						<li>Xpá natural</li>
						<li>Riolajante</li>
						<li>Lodorama</li>
						<li>Lluvia</li>
						<li>Canicódromo</li>
						<li>Xnack</li>
						<li>Obsequiario</li>
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
						<li>Traer zapatos para agua, traje de baño y un cambio de ropa.</li>
						<li>Favor de usar protector solar y repelente libres de químicos.</li>
						<li>Existen dos horarios, por lo tanto te recomendamos elegir uno
							de ellos (mañana o tarde) para que puedas disfrutar al máximo de
							todos los atractivos y actividades.</li>
						<li>Los visitantes que presenten alguna discapacidad deberán ir
							siempre acompañados por un familiar o amigo que los asista,
							debido a que nuestro staff no podrá hacerse cargo.</li>
						<li>Todas nuestras tiendas aceptan tarjetas Visa, MasterCard y
							American Express. Divisas: Pesos mexicanos, dólares americanos y
							canadienses, así como euros.</li>
						<li>Por disposición oficial, en cualquier compra mayor a $250
							dólares por persona, el excedente a dicho monto deberá liquidarse
							con cualquier otra forma de pago (tarjeta de crédito, débito o
							efectivo en pesos).</li>
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