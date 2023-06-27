<?php
    include("config.php");  /* Se llama al archivo config.php*/
    include("session.php");

    $idUsuarios=null;
    $Nombres = $_POST['Nombres'];
    $Sexo = $_POST['Sexo'];
    $Edad = $_POST['Edad'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="INSERT INTO mae_usuarios VALUES('$idUsuarios','$Nombres','$Sexo','$Edad','$username','$password')";     /*CODIGO EN SQL QUE INGRESA EL ID, NOMBRE Y COSTO A LA BASE DE DATOS DENOMINADA servicios*/

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