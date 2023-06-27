<?php
    include("config.php");  /* Se llama al archivo config.php*/

    $idAsientos=null;
    $idUsuarios = $_POST['idUsuarios'];
    $Numero = $_POST['Numero'];
    $Fecha = $_POST['Fecha'];
    $Glosa = $_POST['Glosa'];
    $Observaciones = $_POST['Observaciones'];

    $sql="INSERT INTO trs_asientos(idAsientos,idUsuarios,Numero,Fecha,Glosa,Observaciones) VALUES('$idAsientos','$idUsuarios', '$Numero','$Fecha','$Glosa','$Observaciones')";     /*CODIGO EN SQL QUE INGRESA EL ID, NOMBRE Y COSTO A LA BASE DE DATOS DENOMINADA servicios*/

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