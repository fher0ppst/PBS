<?php
require 'fncn/fhr.php';
if (isset($_REQUEST['acept'])) {
    $aux = "";
    $j = 14;
    $dt = explode(",", $_REQUEST['acept']);
    if (count($dt) > 20) {
        for ($i = $j; $i <= (($j + (count($dt) - 19))); $i ++) {
            $aux = $aux . $dt[$i];
            if ($i > $j) {
                unset($dt[$i]);
            }
        }
        $dt[14] = $aux;
        $dt = explode(",", implode(",", $dt));
        sfr($dt);
    } else {
        sfr($dt);
    }
}

if (isset($_REQUEST['shwm'])) {
    if ($_REQUEST['shwm'] == 0) {
        $ncp = ncpais();
        echo '<div class="field">
					<label for="name" style="font-weight: bold;">Zona</label><select id="c2" name="c2">
						<option value="E">Elegir</option>
						<option value="1">Zona 1</option>
						<option value="2">Zona 2</option>
						<option value="3">Zona 3</option>
						<option value="4">Zona 4</option>
                        <option value="5">Zona 5</option>
                        <option value="6">Zona 6</option>
					</select>
					</div>
					<div class="field half first">
						<input type="text" name="c3" id="c3" placeholder="Nombres seg&uacute;n pasaporte" />
					</div>
					<div class="field half first">
						<input type="text" name="c4" id="c4"
							placeholder="Apellidos seg&uacute;n pasaporte" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Fecha de nacimiento</label> <input type="date"
							name="c5" id="c5" placeholder="Fecha de nacimiento" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Genero</label><select id="c6" name="c6">
							<option value="E">Elegir</option>
							<option value="0">Femenino</option>
							<option value="1">Masculino</option>
						</select>
					</div>
					<div class="field">
						<label for="name" style="font-weight: bold;">Pasaporte</label> <input type="text" name="c7"
							id="c7" placeholder="Numero de pasaporte" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Fecha de emisi&oacute;n<br> pasaporte</label> <input
							type="date" name="c8" id="c8" placeholder="Fecha de emision" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Fecha de expiraci&oacute;n<br> pasaporte</label> <input
							type="date" name="c9" id="c9"
							placeholder="Fecha de expiraci&oacute;n" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Nacionalidad</label> <select id="c10" name="c10"
							onchange="au();">
							<option value="E">Elegir</option>';
        for ($i = 1; $i < count($ncp); $i ++) {
            $cnp = explode("#", $ncp[$i]);
            if ($i == 59) {
                echo '<option value="' . $cnp[1] . '" selected>' . $cnp[0] . '</option>';
            } else {
                echo '<option value="' . $cnp[1] . '">' . $cnp[0] . '</option>';
            }
        }
        echo '</select>
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Tipo de visa</label> <select id="c11" name="c11" 
                            onchange="au();">
							<option value="E">Elegir</option>
							<option value="N">Ninguna</option>
							<option value="VMX">Visa Mexicana</option>
							<option value="VUS">Visa Americana</option>
						</select>
					</div>
                    <div class="field">
						<label for="name" style="font-weight: bold;">N&uacute;mero de visa</label> <input
							type="text" name="c12" id="c12" placeholder="Numero de visa" disabled="disabled">
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Fecha de emisi&oacute;n VISA</label> <input
							type="date" name="c13" id="c13" placeholder="Fecha de emision"
							disabled="disabled" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Fecha de expiraci&oacute;n VISA</label> <input
							type="date" name="c14" id="c14"
							placeholder="Fecha de expiraci&oacute;n" disabled="disabled" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Correo electronico</label> <input type="text"
							name="c15" id="c15" placeholder="Email" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Domicilio</label> <input type="text" name="c16"
							id="c16" placeholder="Residencia" />
					</div>
					<div class="field half first">
						<input type="text" name="c17" id="c17" placeholder="Telefono" />
					</div>
					<div class="field half first">
						<input type="text" name="c18" id="c18" placeholder="Celular" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Contacto de emergencia</label> <input
							type="text" name="c19" id="c19" placeholder="Nombre" />
					</div>
					<div class="field half first">
						<label for="name" style="font-weight: bold;">Tel&eacute;fono de emergencia</label> <input
							type="text" name="c20" id="c20"
							placeholder="Tel&eacute;fono de contacto" />
					</div>
					<div class="field">
						<label for="message" style="font-weight: bold;">PADECIMIENTOS AL&eacute;RGICOS</label>
						<textarea name="c21" id="c21" rows="4"
							placeholder="Se le solicita sea especifico "></textarea>
					</div>
					<ul class="actions" style="text-align: center;">
						<li><input type="button" value="Aceptar" class="special"
							onclick="vldfrm();" id="Send" name="Send"/></li>
                        <li><input type="button" value="Ya estoy registrado" class="special" onclick="shw(1);" /></li>
					</ul>';
    } else {
        echo '<div class="field><label for="name" style="font-weight: bold;"></label>
                <input type="text" name="pssr" id="pssr" placeholder="Ingrese su numero de pasaporte" />
				</div><br><ul class="actions" style="text-align: center;">
                <li><input type="button" value="Aceptar" class="special" onclick="vrf();" id="acepto" name="acepto"/></li>
                <li><input type="button" value="Volver a registro" class="special" onclick="shw(0);" /></li>
                </ul>';
    }
}

if (isset($_REQUEST['mainm'])) {
    echo '<ul class="actions" id="butones">
	<li><input type="button" value="Registrarme" class="special" onclick="shw(0);" /></li>
	<li><input type="button" value="Ya estoy registrado" class="special" onclick="shw(1);" /></li>
	</ul><hr>';
}

if (isset($_REQUEST['cntj'])) {
    if (cnus($_REQUEST['cntj'])) {} else {
        echo '<label style="font-weight: bold; color: white;">Pasaporte invalido, verifique si esta escrito correctamente</label>';
    }
}
?>