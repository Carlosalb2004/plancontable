<?php
    include("config.php");
    include("session.php");

    $id = $_GET['id'];

    $sql="DELETE FROM mae_plancuentas WHERE idPlanCuentas='$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language="javascript">';
        echo 'window.location="registration-cuenta.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language="javascript">';
        
        echo 'window.location="registration-cuenta.php";';
        echo '</script>';
    }
?>