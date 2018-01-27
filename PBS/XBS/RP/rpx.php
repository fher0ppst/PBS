<?php
require '../fncn/fhr.php';
if (isset($_REQUEST['onlo'])) {
    $d = $_REQUEST['onlo'];
    $d = explode("##", $d);
    $a = inic($d);
    $cnjt = obc();
    $cntdor = 1;
    $cnjtin = obcin();
    if ($a) {
        $nom = "";
        echo '<label>Usuario: <b style="color: blue;">' . $a . '</b></label>';
        echo '<div class="table-wrapper">';
        echo '<table class="alt">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Pasaporte</th>';
        echo '<th>Nombre</th>';
        echo '<th>Zona</th>';
        echo '<th>Correo</th>';
        echo '<th>Posee visa</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr>';
        echo '<td></td>';
        echo '</tr>';
        /*for ($i = 0; $i < count($cnjt); $i ++) {
            echo '<tr>';
            echo '<td>';
            echo $cntdor;
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            for ($j = 0; $j < count($cnjt[$i]); $j ++) {
                echo '<td>';
                echo '</td>';
            }
            echo '</tr>';
        }
        /*
         * for ($i = 0; $i < count($cnjt); $i ++) {
         * echo '<tr>';
         * for ($j = 0; $j < count($cnjt[$i]) - 1; $j ++) {
         * if ($j == 2 || $j == 4) {
         * if ($j == 2) {
         * echo '<td>';
         * if ($cnjt[$i][$j] == "0" || $cnjt[$i][$j] == "1" || $cnjt[$i][$j] == "2" || $cnjt[$i][$j] == "3" || $cnjt[$i][$j] == "4" || $cnjt[$i][$j] == "5" || $cnjt[$i][$j] == "6") {
         * echo $cnjt[$i][$j];
         * } else {
         * switch ($cnjt[$i][$j]) {
         * case 7:
         * echo 'UGE';
         * break;
         * case 8:
         * echo 'FV Especializadda';
         * break;
         * case 9:
         * echo 'Invitado Banco Agricola';
         * break;
         * case 10:
         * echo 'Invitado ASESUISA';
         * break;
         * case 11:
         * echo 'Invitado especial';
         * break;
         * }
         * }
         * echo '</td>';
         * }
         * if ($j == 4) {
         * if ($cnjt[$i][$j] == "N") {
         * echo '<td>No posee</td>';
         * } else {
         * if ($cnjt[$i][$j] == "VMX") {
         * echo '<td>Mexicana</td>';
         * } else {
         * echo '<td>Estadounidense</td>';
         * }
         * }
         * }
         * } else {
         * echo '<td>';
         * echo $cnjt[$i][$j];
         * echo '</td>';
         * }
         * }
         * echo '</tr>';
         * }
         */
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        // echo '<br>';
        echo '<label><b>Usuarios inscritos con inconsistencias en datos</b></label>';
        echo '<br>';
        $cnjtin = obcin();
        // var_dump();
        if (count($cnjtin) > 0) {
            echo '<div class="table-wrapper">';
            echo '<table class="alt">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Pasaporte</th>';
            echo '<th>Zona</th>';
            echo '<th>Correo</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for ($i = 0; $i < count($cnjtin); $i ++) {
                echo '<tr>';
                echo '<td>';
                echo $cntdor;
                echo '</td>';
                for ($j = 0; $j < count($cnjtin[$i]); $j ++) {
                    switch ($j) {
                        case 1:
                            echo '<td>';
                            if ($cnjtin[$i][$j] == "0" || $cnjtin[$i][$j] == "1" || $cnjtin[$i][$j] == "2" || $cnjtin[$i][$j] == "3" || $cnjtin[$i][$j] == "4" || $cnjtin[$i][$j] == "5" || $cnjtin[$i][$j] == "6") {
                                echo $cnjtin[$i][$j];
                            } else {
                                switch ($cnjtin[$i][$j]) {
                                    case 7:
                                        echo 'UGE';
                                        break;
                                    case 8:
                                        echo 'FV Especializadda';
                                        break;
                                    case 9:
                                        echo 'Invitado Banco Agricola';
                                        break;
                                    case 10:
                                        echo 'Invitado ASESUISA';
                                        break;
                                    case 11:
                                        echo 'Invitado especial';
                                        break;
                                }
                            }
                            echo '</td>';
                            break;
                        default:
                            echo '<td>';
                            echo $cnjtin[$i][$j];
                            echo '</td>';
                            break;
                    }
                }
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo '<label>No se encontraron datos para mostrar</label>';
        }
    } else {
        echo '<label style="color: red;">Credenciales invalidas, verifique si estan correctamente escritas</label>';
    }
    /*
     * No borrar
     */
    // Codificacion
    // $enc = strrev(base64_encode(base64_encode(strrev(base64_encode("Miguel")))));
    // var_dump($enc);
    // Decodificacion
    // $enc = base64_decode(strrev(base64_decode(base64_decode(strrev($enc)))));
    // var_dump($enc);
}

?>