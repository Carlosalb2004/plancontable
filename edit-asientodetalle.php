<?php
    include("config.php");

    $idAsientoDetalle = $_POST['idAsientoDetalle'];
    $idAsientos = $_POST['idAsientos'];
    $idPlanCuentas = $_POST['idPlanCuentas'];
    $Debe = $_POST['Debe'];
    $Haber = $_POST['Haber'];

    $sql="UPDATE trs_asientodetalle SET idAsientos='$idAsientos', idPlanCuentas='$idPlanCuentas', Debe='$Debe', Haber='$Haber'
    WHERE idAsientos='$idAsientos'";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        
        echo 'window.location="registration-asientodetalle.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        
        echo 'window.location="registration-asientodetalle.php";';
        echo '</script>';
    }
?>