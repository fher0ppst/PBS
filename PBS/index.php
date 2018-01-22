<?php
require 'XBS/fncn/fhr.php';
$ncp = ncpais();
if (! isset($_SESSION)) {
    session_start();
}
$target_path = "XBS/assets/dos/";
if (isset($_POST['Send'])) {
    for ($i = 0; $i < 2; $i ++) {
        switch ($i) {
            case 0:
                mkdir($target_path . $_POST['c7']);
                $target_path = $target_path . $_POST['c7'] . '/' . basename($_FILES['f1']['name']);
                if (move_uploaded_file($_FILES['f1']['tmp_name'], $target_path)) {
                    echo "<span style='color:green;'>El archivo " . basename($_FILES['f1']['name']) . " ha sido subido</span><br>";
                } else {
                    echo "Ha ocurrido un error, trate de nuevo!";
                }
                break;
            
            case 1:
                mkdir($target_path . $_POST['c12']);
                if ($_POST['c11'] != "E" || $_POST['c11'] != "N") {
                    $target_path = $target_path . $_POST['c12'] . '/' . basename($_FILES['f2']['name']);
                    if (move_uploaded_file($_FILES['f2']['tmp_name'], $target_path)) {
                        echo "<span style='color:green;'>El archivo " . basename($_FILES['f2']['name']) . " ha sido subido</span><br>";
                    } else {
                        echo "Ha ocurrido un error, trate de nuevo!";
                    }
                    break;
                }
        }
    }
    stateman($_POST['c7'], 0);
}
if (isset($_POST['acepto'])) {
    stateman($_POST['pssr'], 1);
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Registro</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body onload="ini();">
	<div id="page-wrapper">
		<header id="header">
			<h1>
				<img alt="" src="images/Logob.png" width="200px" height="48px">
			</h1>
		</header>
		<article id="main">
			<header>
				<h2>
					<img alt="" src="XBS/images/Logob.png" width="250" height="250">
				</h2>
				<p>Forma parte de esta experiencia sin igual</p>
			</header>
			<section class="wrapper style5">
				<div class="inner">
					<div id="mm"></div>
					<section>
						<form method="post" action="index.php"
							enctype="multipart/form-data">
							<ul class="actions" id="butones" style="text-align: center;">
								<li><input type="button" value="Registrarme" class="special"
									onclick="shw(0);" /></li>
								<li><input type="button" value="Ya estoy registrado"
									class="special" onclick="shw(1);" /></li>
							</ul>
							<div id="ff" hidden="">
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Zona</label> <select id="c1"
											name="c1">
											<option value="E">Elegir</option>
											<option value="1">Zona 1</option>
											<option value="2">Zona 2</option>
											<option value="3">Zona 3</option>
											<option value="4">Zona 4</option>
											<option value="5">Zona 5</option>
											<option value="6">Zona 6</option>
											<option value="7">UGE</option>
											<option value="8">FV Especializada</option>
										</select>
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Invitado</label><select id="c2"
											name="c2">
											<option value="E">Elegir</option>
											<option value="0">Banco Agricola</option>
											<option value="1">ASESUISA</option>
										</select>
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="c3" id="c3"
											placeholder="Nombres seg&uacute;n pasaporte" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="text" name="c4" id="c4"
											placeholder="Apellidos seg&uacute;n pasaporte" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Fecha de nacimiento</label> <input
											type="date" name="c5" id="c5"
											placeholder="Fecha de nacimiento" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Genero</label><select id="c6"
											name="c6">
											<option value="E">Elegir</option>
											<option value="0">Femenino</option>
											<option value="1">Masculino</option>
										</select>
									</div>
								</div>
								<hr>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Pasaporte</label> <input
											type="text" name="c7" id="c7"
											placeholder="Numero de pasaporte" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Emisi&oacute;n de pasaporte </label>
										<input type="date" name="c8" id="c8"
											placeholder="Fecha de emision" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Expiraci&oacute;n de pasaporte
										</label> <input type="date" name="c9" id="c9"
											placeholder="Fecha de expiraci&oacute;n" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Nacionalidad</label> <select
											id="c10" name="c10" onchange="au();">
											<option value="E">Elegir</option>
										<?php
        for ($i = 1; $i < count($ncp); $i ++) {
            $cnp = explode("#", $ncp[$i]);
            if ($i == 59) {
                echo '<option value="' . $cnp[1] . '" selected>' . $cnp[0] . '</option>';
            } else {
                echo '<option value="' . $cnp[1] . '">' . $cnp[0] . '</option>';
            }
        }
        ?>
									</select>
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Imagen principal de pasaporte </label>
										<input type="file" name="f1" id="f1" placeholder="Pasaporte"
											onchange="rl(this.id);" />
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Formatos de archivo
											compatibles: PNG, JPEG, JPG, PDF</label>
									</div>
								</div>
								<hr>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Tipo de visa</label> <select
											id="c11" name="c11" onchange="au();">
											<option value="E">Elegir</option>
											<option value="N">Ninguna</option>
											<option value="VMX">Visa Mexicana</option>
											<option value="VUS">Visa Americana</option>
										</select>
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">N&uacute;mero de visa</label> <input
											type="text" name="c12" id="c12" placeholder="Numero de visa"
											disabled="disabled">
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Emisi&oacute;n VISA</label> <input
											type="date" name="c13" id="c13"
											placeholder="Fecha de emision" disabled="disabled" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Expiraci&oacute;n VISA</label>
										<input type="date" name="c14" id="c14"
											placeholder="Fecha de expiraci&oacute;n" disabled="disabled" />
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Imagen principal de visa</label>
										<input type="file" name="f2" id="f2" placeholder="Visa"
											onchange="rl(this.id);" disabled="disabled" />
									</div>
								</div>
								<hr>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Correo electronico</label> <input
											type="text" name="c15" id="c15" placeholder="Email" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Domicilio</label> <input
											type="text" name="c16" id="c16" placeholder="Residencia" />
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="c17" id="c17" placeholder="Telefono" />
									</div>
									<div class="6u 12u$(xsmall)">
										<input type="text" name="c18" id="c18" placeholder="Celular" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Contacto de emergencia</label>
										<input type="text" name="c19" id="c19" placeholder="Nombre" />
									</div>
									<div class="6u 12u$(xsmall)">
										<label for="demo-priority-low">Tel&eacute;fono de emergencia</label>
										<input type="text" name="c20" id="c20"
											placeholder="Tel&eacute;fono de contacto" />
									</div>
									<div class="12u$">
										<label for="demo-priority-low">Padecimientos al&eacute;rgicos</label>
										<textarea name="c21" id="c21" rows="4"
											placeholder="Se le solicita sea especifico "></textarea>
									</div>
									<ul class="actions" style="text-align: center;">
										<li><input type="button" value="Aceptar" class="special"
											onclick="vldfrm();" id="Send" name="Send" /></li>
										<li><input type="button" value="Ya estoy registrado"
											class="special" onclick="shw(1);" /></li>
									</ul>
								</div>
							</div>
							<div id="ov" hidden="" style="text-align: center;">
								<input type="text" name="pssr" id="pssr"
									placeholder="Ingrese su numero de pasaporte" /> <br>
								<ul class="actions" style="text-align: center;">
									<li><input type="button" value="Aceptar" class="special"
										onclick="vrf();" id="acepto" name="acepto" /></li>
									<li><input type="button" value="Volver a registro"
										class="special" onclick="shw(0);" /></li>
								</ul>
							</div>
							<div id="rel"></div>
						</form>
					</section>
				</div>
			</section>
		</article>

		<!-- Footer -->
		<footer id="footer">
			Power By:<br> <a href="http://amatetravel.com"> <img
				alt="powerby-amatetravel"
				src="XBS/images/Amate Travel para fondo gris-01.png" width="291px"
				height="44px"></a>

		</footer>

	</div>
	<script>
	<!-- Scripts -->
	window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/jquery.scrollex.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/jquery.scrolly.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/skel.min.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/util.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/relf.js"><\/script>');
	window.jQuery || document.write('<script src="assets/js/main.js"><\/script>');
	</script>
</body>
</html>
