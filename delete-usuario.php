<?php
    include("config.php");
    include("session.php");

    $id = $_GET['id'];

    $sql="DELETE FROM mae_usuarios WHERE idUsuarios='$id'";

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language="javascript">';
        echo 'window.location="registration-usuario.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language="javascript">';
        
        echo 'window.location="registration-usuario.php";';
        echo '</script>';
    }
?>