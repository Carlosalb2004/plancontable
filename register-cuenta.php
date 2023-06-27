<?php
    include("config.php");  /* Se llama al archivo config.php*/
    
    $idPlanCuentas=null;
    $idTipo = $_POST['idTipo'];
    $Cuenta = $_POST['Cuenta'];
    $Cuenta_Padre = $_POST['Cuenta_Padre'];
    $Nombre = $_POST['Nombre'];
    $Digito1 = $_POST['Digito1'];
    $Digito2 = $_POST['Digito2'];

    $sql="INSERT INTO mae_plancuentas(idPlanCuentas,idTipo,Cuenta,Cuenta_Padre,Nombre,Digito1,Digito2) VALUES('$idPlanCuentas','$idTipo', '$Cuenta','$Cuenta_Padre','$Nombre','$Digito1','$Digito2')";     /*CODIGO EN SQL QUE INGRESA EL ID, NOMBRE Y COSTO A LA BASE DE DATOS DENOMINADA servicios*/

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="registration-cuenta.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'window.location="registration-cuenta.php";';
        echo '</script>';
    }
?>