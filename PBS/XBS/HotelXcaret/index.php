<?php
require_once '../fncn/fhr.php';

if (! isset($_SESSION)) {
    session_start();
}
if (! $_SESSION['logged'] == 'yes') {
    nelentry();
}
// var_dump($_SESSION['nuac']);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Xcaret</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="landing">
	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<header id="header" class="alt">
			<h1>Hotel Xcaret</h1>
			<nav id="nav">
				<ul>
					<li class="special"><a href="../" class="menuToggle"><span>Volver</span></a></li>
				</ul>
			</nav>
		</header>
		<!-- Banner -->
		<section id="banner">
			<section>
				<div class="image">
					<h2>
						<img alt="" src="images/Hotel-blanco.png" align="middle">
					</h2>
				</div>
				<a href="#one" class="more scrolly">Descubrelo</a>
			</section>
		</section>
		<!-- One -->
		<section id="one" class="wrapper style1 special">
			<div class="inner">
				<header class="major">
					<h2>¡LO LOGRASTE! BIENVENIDO A XCARET, M&Eacute;XICO!</h2>
					<p style="text-align: justify;">Te encuentras en un lugar único y
						especial, que refleja los orígenes de la cultura maya, lleno de
						sorpresas, bellísimos paisajes, parques, playas hermosas de la
						Riviera Maya que quedarán grabados en tu memoria. Los próximos
						días puedes gozar de las hermosas instalaciones con SUITES de
						lujo, Bares y Restaurantes con experiencias gastronómicas
						inigualables, Piscinas, Shows, Bailes, Musica y muchas sorpresas
						más que te dejaran sin aliento. Disfruta tu estadía y conoce el
						lindísimo Hotel Xcaret y sus amenidades.</p>
					<br>
					<h2>Qu&eacute; es el All-Fun inclusive?</h2>
					<p style="text-align: justify;">
						Con una marcada esencia mexicana, Hotel Xcaret México se
						enorgullece en brindar el innovador concepto All-Fun Inclusive®.
						Este programa te da mucho más que un tradicional Todo Incluido, ya
						que combina lujosas instalaciones que armonizan con la naturaleza
						de la Riviera Maya, y el acceso total a todos los parques y tours
						de Experiencias Xcaret. También te ofrece múltiples actividades y
						diversas experiencias culinarias, que harán que tus vacaciones
						sean inolvidables. <br> <br>Incluye regimen alimenticio Sistema
						todo incluido, acceso ilimitado a parques y tours de Experiencias
						Xcaret.
					</p>
				</header>
			</div>
		</section>
		<!-- Two -->
		<section id="two" class="wrapper alt style2">
			<section class="spotlight">
				<div class="image">
					<img src="images/pic01.png" alt="" />
				</div>
				<div class="content">
					<h2>
						Suites<br />
					</h2>
					<p>
						Las suites del Hotel Xcaret México, son amplias y lujosas, y están
						distribuidas en cinco edificios. Nuestro grupo estar&aacute;
						hospedado en casa viento y casa espiral <a href="CT">Leer
							m&aacute;s</a>
					</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic02.png" alt="" />
				</div>
				<div class="content">
					<h2>
						Restaurantes y bares<br />
					</h2>
					<p>
						Los 8 Restaurantes y 5 Bares de Hotel Xcaret M&eacute;xico te
						invitan a dar un viaje alrededor de los sabores del mundo donde la
						gastronom&iacute;a mexicana, <a href="RT">Leer m&aacute;s</a>
					
					
					<p style="text-align: justify;"></p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic03.png" alt="" />
				</div>
				<div class="content">
					<h2>
						&Aacute;reas Comunes<br />
					</h2>
					<p>
						En armon&iacute;a con el entorno Hotel Xcaret M&eacute;xico te
						lleva por el camino de relajamiento <a href="OA">Leer m&aacute;s</a>
					</p>
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