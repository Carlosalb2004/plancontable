<?php
    include("config.php");  /* Se llama al archivo config.php*/

    $idAsientoDetalle=null;
    $idAsientos = $_POST['idAsientos'];
    $idPlanCuentas = $_POST['idPlanCuentas'];
    $Debe = $_POST['Debe'];
    $Haber = $_POST['Haber'];

    $sql="INSERT INTO trs_asientodetalle(idAsientoDetalle,idAsientos,idPlanCuentas,Debe,Haber) VALUES('$idAsientoDetalle','$idAsientos', '$idPlanCuentas','$Debe','$Haber')";     /*CODIGO EN SQL QUE INGRESA EL ID, NOMBRE Y COSTO A LA BASE DE DATOS DENOMINADA servicios*/

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