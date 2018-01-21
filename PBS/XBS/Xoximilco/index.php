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
<html>
<head>
<title>Xoximilco</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="landing">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1>Xoximilco</h1>
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
					<img src="images/xoximilco-c.png" width="345px" height="80px">
				</h2>
				<p>Flota de la alegr&iacute;a</p>
			</div>
			<a href="#one" class="more scrolly">Descubrelo</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style1 special"
			style="background-color: #00448c;">
			<div class="inner">
				<header class="major">
					<h2>Una tradicional fiesta mexicana</h2>
					<p>
						Este recorrido es una auténtica fiesta mexicana. A través de los
						canales y a bordo de las tradicionales trajineras, Xoximilco es
						una celebración de la diversidad musical y gastronómica de México
						que a nadie deja indiferente.<br> <br>
					</p>
					<h1>¡En Xoximilco todos están invitados a la fiesta!</h1>
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
					<img src="images/pic02.jpg" alt="" />
				</div>
				<div class="content">
					<h2>Horario</h2>
					<p>
						Reuni&oacute;n en el Lobby 6:00 pm<br> 7:30 pm a 12:00 am. La
						duración del recorrido es de tres horas aproximadamente.<br>DÍAS
						DE OPERACIÓN: Lunes a Sábado.<br>TIPO DE ADMISIÓN INCLUIDA EN
						“ALL-FUN INCLUSIVE®”: Admisión Regular.
					</p>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<img src="images/pic01.jpg" alt="" />
				</div>
				<div class="content">
					<h2>INCLUYE</h2>
					<ul>
						<li>20 visitantes por trajinera acompañado siempre por un
							animador.</li>
						<li>Kermés mexicana en donde encontrarás juegos, podrás comerte un
							esquite y bailar al ritmo de la tambora.</li>
						<li>Una deliciosa cena con diferentes platillos típicos de nuestro
							país/.</li>
						<li>Bar abierto (Aguas frescas, cerveza, tequila, refrescos)</li>

					</ul>
				</div>
			</section>
			<section class="spotlight">
				<div class="image">
					<h2>Sugerencias al visitante</h2>
				</div>
				<div class="content">
					<ul>
						<li>Llevar ropa c&oacute;moda</li>
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
								value="Inscribirme" onclick="cnsprv(2);"></td>
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
	<script src="assets/js/Xoxil.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>