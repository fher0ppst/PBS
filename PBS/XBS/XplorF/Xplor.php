<?php
require '../fncn/fhr.php';
if (isset($_REQUEST['cvrs'])) {
    $d = explode("##", $_REQUEST['cvrs']);
    $c = "SELECT COUNT(*), S1, S2, S3, S4, S5, S6 FROM SUBS WHERE NU_PASS ='$d[0]'";
    $x = mysqli_query($_SESSION['uncons'], $c);
    $rx = mysqli_fetch_array($x, MYSQLI_NUM);
    if ($rx[0] == "1") {
        if ($rx[1] == "0" && $rx[2] == "0" && $rx[3] == "0" && $rx[4] == "0" && $rx[5] == "0" && $rx[6] == "0") {
            $c = "UPDATE SUBS SET S$d[1]= 1 WHERE NU_PASS = '$d[0]'";
            if (mysqli_query($_SESSION['uncons'], $c)) {
                echo 'Felicidades!!! Te has inscrito correctamente a este parque';
            }
        } else {
            if ($rx[5] == "1") {
                echo 'Actualmente te encuentras inscrito en el parque Xichen y no puedes inscribirte en m&aacute;s';
            } else {
                if ($rx[4] == "1") {
                    echo 'Actualmente te encuentras inscrito en este parque';
                } else {
                    echo 'No puedes combinar m&aacute;s parques a tu itinerario, contactanos para mayor informaci&oacute;n';
                }
            }
        }
    } else {
        echo 'Pasaporte invalido, verifica nuevamente.';
    }
}
?>