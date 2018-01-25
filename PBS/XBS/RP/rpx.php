<?php
require '../fncn/fhr.php';
if (isset($_REQUEST['onlo'])) {
    $d = $_REQUEST['onlo'];
    $d = explode("##", $d);
    $a = inic($d);
    $cnjt = obc();
//     var_dump($cnjt);
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
        echo '<th>Pasaporte</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        for ($i = 0; $i < count($cnjt); $i ++) {
            echo '<tr>';
            for ($j = 0; $j < count($cnjt[$i]); $j ++) {
                switch ($j) {
                    case 2:
                        echo '<td>';
                        switch (integer($cnjt[$i][$j])) {
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
                        echo '</td>';
                        break;
                    
                    default:
                        echo '<td>';
                        echo $cnjt[$i][$j];
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
        echo '<label style="color: red;">Credenciales invalidas, verifique si estan correctamente escritas</label>';
    }
    /*
     * No borrar
     */
    // Codificacion
    $enc = strrev(base64_encode(base64_encode(strrev(base64_encode("Miguel")))));
    var_dump($enc);
    // Decodificacion
    $enc = base64_decode(strrev(base64_decode(base64_decode(strrev($enc)))));
    var_dump($enc);
}

?>