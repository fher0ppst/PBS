<?php
require '../fncn/fhr.php';
if (isset($_REQUEST['onlo'])) {
    $d = $_REQUEST['onlo'];
    $d = explode("##", $d);
    $a = inic($d);
    obc();
    if ($a) {
        echo '<label>Usuario: <b style="color: blue;">' . $a . '</b></label>';

        echo '<div class="table-wrapper">';
        echo '<table class="alt">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Pasaporte</th>';
        echo '<th>Nombre</th>';
        echo '<th>Zona</th>';
        echo '<th>Correo</th>';
        echo '<th>Parque</th>';
        echo '<th>Detalles</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        /*
         * <tr>
         * <td>Something</td>
         * <td>Something</td>
         * <td>Ante turpis integer aliquet porttitor.</td>
         * <td>29.99</td>
         * </tr>
         */
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<label style="color: red;">Credenciales invalidas, verifique si estan correctamente escritas</label>';
    }
    
    // Codificacion
    $enc = strrev(base64_encode(base64_encode(strrev(base64_encode($d[1])))));
    // var_dump($enc);
    // Decodificacion
    $enc = base64_decode(strrev(base64_decode(base64_decode(strrev($enc)))));
    // var_dump($enc);
}

?>