<?php
    include("config.php");
    include("session.php");

    $id = $_GET['id'];

    $sql="DELETE FROM trs_asientos WHERE idAsientos='$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language="javascript">';
        echo 'window.location="registration-asiento.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language="javascript">';
        
        echo 'window.location="registration-asiento.php";';
        echo '</script>';
    }
?>