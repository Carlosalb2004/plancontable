<?php
    include("config.php");

    $idPlanCuentas = $_POST['idPlanCuentas'];
    $idTipo = $_POST['idTipo'];
    $Cuenta = $_POST['Cuenta'];
    $Cuenta_Padre = $_POST['Cuenta_Padre'];
    $Nombre = $_POST['Nombre'];
    $Digito1 = $_POST['Digito1'];
    $Digito2 = $_POST['Digito2'];

    $sql="UPDATE mae_plancuentas SET idTipo='$idTipo', Cuenta='$Cuenta', Cuenta_Padre='$Cuenta_Padre', Nombre='$Nombre', Digito1='$Digito1', Digito2='$Digito2'
    WHERE idPlanCuentas='$idPlanCuentas'";

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