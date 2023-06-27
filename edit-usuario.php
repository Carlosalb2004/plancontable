<?php
    include("config.php");

    $idUsuarios = $_POST['idUsuarios'];
    $Nombres = $_POST['Nombres'];
    $Sexo = $_POST['Sexo'];
    $Edad = $_POST['Edad'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="UPDATE mae_usuarios SET Nombres='$Nombres', Sexo='$Sexo', Edad='$Edad', username='$username', password='$password'
    WHERE idUsuarios='$idUsuarios'";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        
        echo 'window.location="registration-usuario.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        
        echo 'window.location="registration-usuario.php";';
        echo '</script>';
    }
?>