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
<title>Xenotes</title>
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
			<h1>Xenotes</h1>
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
					<img src="images/logo.png" style="width: 345px; height: 102px;">
				</h2>
				<p>Cenotes de la selva</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>Aventuras en cuatro cenotes de la selva</h2>
					<p>Realiza un exclusivo recorrido por cuatro diferentes tipos de
						cenotes, inmersos en la selva de la Riviera Maya donde conocerás
						las leyendas y el misticismo que esconden cada uno de ellos, así
						como de los aluxes, sus guardianes mayas. Acompañado por un guía,
						podrás practicar rappel, kayak y nado, y además volarás en
						tirolesas sobre las aguas sagradas. Antes de finalizar tu tour
						disfrutarás de un Glam Picnic en medio de la selva, con vino y
						cerveza, mientras te relajas con la exuberante naturaleza de los
						alrededores.</p>
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
						Desde las 9 am (en horario regular), con duración aproximada de 9
						hrs.<br>Horario especial para el grupo de 9:00 am a 4:00 pm<br>DÍAS
						DE OPERACIÓN: Lunes a Sábado.<br>TIPO DE ADMISIÓN INCLUIDA EN
						“ALL-FUN INCLUSIVE®”: Admisión Regular.
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
						<li>Servicio de café, champurrado y pan dulce de bienvenida.</li>
						<li>Bebidas no alcohólicas (agua y refresco) y frutas de estación.</li>
						<li>Champurrado y café en la salida de cada Xenote.</li>
						<li>Glam Picnic: una fresca selección que incluye sopa estilo
							minestrone, barra fría con carnes y quesos de calidad Premium,
							servidos con una variedad de panes rústicos y aderezos para
							preparar sus propios alimentos acompañados con ensaladas.</li>
						<li>Agua, café, vino y cerveza a elegir.</li>
						<li>Equipo: chaleco salvavidas, equipo de snorkel, equipo de
							rappel, kayak y llanta.</li>
						<li>Baños, vestidores y toalla.</li>
					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic03.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Disfruta</h2>
					<p style="text-align: justify;">El Tour Xenotes comprende la visita
						a cuatro diferentes tipos de cenotes donde se llevarán a cabo
						actividades como kayak, snorkel, rappel, tirolesas y nado con un
						espacio de relajación para disfrutar de un Glam Picnic en un
						verdadero momento de aventura en contacto con la naturaleza. El
						itinerario general del Tour contempla el traslado ida y vuelta
						desde el Hotel a Puerto Morelos – donde se encuentra Xenotes – el
						traslado entre Xenotes y la comida, de tal forma que se disfrute
						la naturaleza al máximo a través de una experiencia divertida e
						inolvidable.</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<h2>Sugerencias</h2>
				</div>
				<div class="content">
					<ul>
						<li>Trae contigo efectivo o tarjeta de crédito para llevar el
							recuerdo de un día inolvidable.</li>
						<li>Trae zapatos para agua.</li>
						<li>No contamines, cuida la naturaleza, disfruta y aprende de
							ella.</li>
						<li>Evita el uso de maquillaje o repelentes con químicos que
							afecten el ecosistema de los cenotes, utiliza únicamente
							bloqueadores libres de químicos.</li>
						<li>Toma una ducha antes de entrar al Xenote para proteger el
							hábitat.</li>
						<li>El uso de chaleco salvavidas es obligatorio durante las
							actividades acuáticas.</li>
						<li>Evita salir de los caminos marcados o preestablecidos para
							prevenir algún incidente con la fauna o flora del lugar.</li>
						<li>Si ves algún animal evita tocarlo, acercarte o alimentarlo,
							recuerda que están en su hábitat natural.</li>
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
								value="Inscribirme" onclick="cnsprv(6);"></td>
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
	<script src="assets/js/Xenos.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
