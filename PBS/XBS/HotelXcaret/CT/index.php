<?php
require_once '../../fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
// var_dump($_SESSION['nuac']);
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
<title>Suites</title>
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>

	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Banner -->
		<section id="banner" class="major">
			<div class="inner">
				<header class="major">
					<h1>Suites</h1>
				</header>
				<p>Las suites del Hotel Xcaret México, son amplias y lujosas, y
					están distribuidas en cinco edificios. Cada una te brinda un diseño
					contemporáneo, y bellas piezas originales, hechas por artesanos
					mexicanos, además de amenidades y servicios exclusivos. Despiértate
					con la vista del mar Caribe, del río o de la selva, la inspiración
					que te acompañará t odos los días durante tu estancia.</p>
			</div>
		</section>
		<header id="header" class="alt style2">
			<nav>
				<a href="../">Volver</a>
			</nav>
		</header>
		<!-- Main -->
		<div id="main">
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic01.png" alt="" />
						</span>
						<header class="major">
							<h3>Garden / River view</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<p style="text-align: justify;">Disfruta de la comodidad de
						hospedarte rodeado con magníficas vistas hacia el jard&iacute;n o
						r&iacute;o. Esta habitación, cuenta con todos los beneficios
						necesarios para una estancia incomparable. Vista al jardín o
						r&iacute;o 53 m²</p>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic02.png" alt="" />
						</span>
						<header class="major">
							<h3>Detalles de las habitaciones</h3>
						</header>
					</div>
				</article>
				<article style="background-color: #00448c;">
					<table>
						<tr>
							<td>
								<ul>
									<li>1 cama King size</li>
									<li>Aire acondicionado</li>
									<li>Minibar resurtido diariamente</li>
									<li>Amenidades de lujo</li>
									<li>Cafetera / Tetera</li>
									<li>Espejo de vanidad</li>
									<li>Plancha y tabla de planchar</li>
									<li>Mesa de trabajo</li>
									<li>Cortesía nocturna</li>
									<li>Baño</li>
									<li>Baño privado con ducha</li>
								</ul>
							</td>
							<td><ul>
									<li>Jacuzzi</li>
									<li>Secadora de cabello</li>
									<li>Tecnología</li>
									<li>Internet inalámbrico sin costo</li>
									<li>Pantalla Plana HD</li>
									<li>TV por cable / satélite</li>
									<li>Teléfono de marcado directo ($)</li>
								</ul></td>
						</tr>
					</table>
				</article>
			</section>
		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

</body>
</html>