<?php
    include("config.php");

    $idAsientos = $_POST['idAsientos'];
    $idUsuarios = $_POST['idUsuarios'];
    $Numero = $_POST['Numero'];
    $Fecha = $_POST['Fecha'];
    $Glosa = $_POST['Glosa'];
    $Observaciones = $_POST['Observaciones'];

    $sql="UPDATE trs_asientos SET idUsuarios='$idUsuarios', Numero='$Numero', Fecha='$Fecha', Glosa='$Glosa', Observaciones='$Observaciones'
    WHERE idAsientos='$idAsientos'";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        
        echo 'window.location="registration-asiento.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        
        echo 'window.location="registration-asiento.php";';
        echo '</script>';
    }
?>