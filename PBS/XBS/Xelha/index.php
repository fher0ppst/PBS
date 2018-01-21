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
<title>Xel-ha</title>
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
			<h1>Xel-H&aacute;</h1>
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
					<img src="images/xelha-c.png" style="width: 345px; height: 102px;">
				</h2>
				<p>Acercate al cielo</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>El cielo más cerca de ti</h2>
					<p>Hay que recorrer sus senderos, admirar la belleza de sus cenotes
						y nadar en sus caletas para volver a conectarse con el origen
						marino de la península. En este lugar —“donde nace el agua”, como
						lo llamaron los mayas— el visitante puede divertirse haciendo
						snorkel o relajarse rodeado de naturaleza.</p>
				</header>
				<p style="">
					<b>Nota: </b><label>* Puedes visitar el parque &uacute;nicamente el
						22 de Febrero y en dia completo</label> <label>Quieres vivir esta
						experiencia?</label><label><a href="#ins">RESERVA AQUI</a></label>
				</p>
				<p style="color: white">Recuerda que puedes tomar el servicio de
					shuttle compartido desde las 8:30 h. Viaje redondo Hotel – Parque –
					Hotel</p>
				<p style="color: white">El parque se encuentra a 40 minutos del
					hotel Xcaret M&eacute;xico</p>
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
						08:30 am. a 04:00 pm. (Horario especial para el grupo para el
						d&iacute;a 22 de Febrero)<br>Horario regular de 8:30 a 6:00pm<br>
						DÍAS EN OPERACIÓN: Lunes a Domingo. 365 días. <br>TIPO DE ADMISIÓN
						INCLUIDA EN “ALL-FUN INCLUSIVE®”: Todo Incluido.
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
						<li>Acceso al Parque y a sus atractivos con alimentos y bebidas
							ilimitados.</li>
					</ul>
					Atracciones acu&aacute;ticas:
					<ul>
						<li>Recorrido en Caleta</li>
						<li>Recorrido en Río</li>
						<li>Observatorios Subacuáticos</li>
					</ul>
					Actividades Terrestres:
					<ul>
						<li>Senda del Aire</li>
						<li>Mundo de los niños</li>
						<li>Recorridos guiados (Todos los recorridos están sujetos a
							reservación, cupo limitado de 15 personas).</li>
						<li>Sendero de la Conciencia</li>
						<li>Tierra de Huh</li>
						<li>Tren de la Jungla</li>
						<li>Vuela tu Papalote</li>
					</ul>
					Actividades de Aire
					<ul>
						<li>Piedra del Valor</li>
						<li>La Quebrada y El Salto del Chango</li>
						<li>Puente flotante</li>
						<li>Mundo de Aventura</li>
						<li>Vuelo de Chuc Kay</li>
						<li>Naturales</li>
						<li>Cenotes</li>
						<li>Cueva Maya</li>
						<li>Faro</li>
						<li>Gruta El Dorado</li>
						<li>Grieta Ixchel</li>
						<li>Manglares</li>
					</ul>
					Ecológicos
					<ul>
						<li>Jardin de los Chacahs</li>
						<li>Muralla Maya</li>
						<li>Vivero</li>
						<li>Meliponario</li>
					</ul>
					Descanso
					<ul>
						<li>Bahía de los Caprichos</li>
						<li>Isla de las Hamacas</li>
						<li>Playa Escondida</li>
					</ul>

				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic03.jpg" alt="" />
				</div>
				<div class="content">
					<h2 style="padding-bottom: -3px;">No incluido</h2>
					<h4 style="font-size: 10pt;">(Costo adicional $$$)</h4>
					<ul>
						<li>Delphinus Xel-Há</li>
						<li>Dolphin Ride</li>
						<li>Interax</li>
						<li>Primax</li>
						<li>Dolphin Trek</li>
						<li>Sea Trek</li>
						<li>Snuba Cenote</li>
						<li>Snuba Caleta</li>
						<li>Encuentro con Manatíes</li>
						<li>Encuentro con Rayas</li>
						<li>Zip-Bike</li>
						<li>Adrenalina</li>
						<li>Velas Óticas</li>
						<li>Rayas Kids</li>
						<li>Spa centro de masajes</li>
						<li>Temaxcal</li>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<h2>Sugerencias al visitante</h2>
				</div>
				<div class="content">
					<ul style="text-align: justify">
						<li>Con el objetivo de que disfrutes al máximo tu día en el
							Parque, te recomendamos tomar en consideración los siguientes
							puntos:</li>

						<li>Utiliza bloqueadores o bronceadores solares libres de
							químicos. Si contiene qu&iacute;micos te pediremos dejarlo en
							cualquier M&oacute;dulo de Informaci&oacute;n de la entrada y
							recogerlo al finalizar tu visita. Nuestro equipo te
							proporcionar&aacute; un sobre de bloqueador libre de químicos con
							el que podrás protegerte.</li>

						<li>Usa ropa cómoda de playa y recuerda llevar traje de baño.</li>

						<li>Lleva dinero y/o tarjeta de crédito para depósitos en garantía
							y extras como compra de fotos, souvenirs y Actividades
							Extraordinarias.</li>

						<li>Todas nuestras tiendas aceptan tarjetas Visa, MasterCard y
							American Express. Divisas: pesos mexicanos, dólares americanos y
							canadienses, así como euros.</li>

						<li>Por disposición oficial, en cualquier compra mayor a $250
							dólares por persona, el excedente a dicho monto deberá liquidarse
							con cualquier otra forma de pago (tarjeta de crédito, débito o
							efectivo en pesos).</li>

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
				<form action="index.php" method="post" id="ins">
					<table>
						<tr>
							<td colspan="2"><input type="text" id="nu" name="nu"
								placeholder="Ingrese su numero de pasaporte"></td>
							<td colspan="2"><input type="button" id="xnu" name="xnu"
								value="Inscribirme" onclick="cnsprv(1);"></td>
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
	<script src="assets/js/Xelha.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>