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
<title>&Aacute;reas Comunes</title>
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
					<h1>&Aacute;reas Comunes</h1>
				</header>
				<p>En armon&iacute;a con el entorno Hotel Xcaret M&eacute;xico te
					lleva por el camino de relajamiento por medio de instalaciones
					&uacute;nicas que fusionan la naturaleza con la tecnolog&iacute;a,
					aqu&iacute; la prioridad es lograr tu bienestar a trav&eacute;s de
					nuestros servicios.</p>
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
							<h3>Piscina</h3>
						</header>
					</div>
				</article>
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic02.png" alt="" />
						</span>
						<header class="major">
							<h3>Caletas</h3>
						</header>
					</div>
				</article>
			</section>
			<section id="one" class="tiles">
				<article>
					<div class="inner">
						<span class="image"> <img src="images/pic04.png" alt="" />
						</span>
						<header class="major">
							<h3>Gimnasio</h3>
						</header>
					</div>
				</article>
				<article>
					<div class="inner">
						<span class="image"> <img src="images/Fondo.jpg" alt="" />
						</span>
						<header class="major">
							<h3>Descubrelo</h3>
						</header>
					</div>
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