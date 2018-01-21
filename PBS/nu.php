<?php
require 'XBS/fncn/fhr.php';
if (isset($_REQUEST['acept'])) {
    $aux = "";
    $j = 15;
    $dt = explode(",", $_REQUEST['acept']);
    if (count($dt) > 21) {
        for ($i = $j; $i <= (($j + (count($dt) - 19))); $i ++) {
            $aux = $aux . $dt[$i];
            if ($i > $j) {
                unset($dt[$i]);
            }
        }
        $dt[15] = $aux;
        $dt = explode(",", implode(",", $dt));
        sfr($dt);
    } else {
        sfr($dt);
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