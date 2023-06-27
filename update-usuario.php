<?php 
    include("config.php");   //incluimos al archivo config.php ya que tiene la variable $msqli

    $id=$_GET['id'];   

    $sql="SELECT * FROM mae_usuarios WHERE idUsuarios='$id'";
    $query=mysqli_query($mysqli, $sql);                         //asignamos la variable $query con la funcion mysqli_query
    $row=mysqli_fetch_array($query);                                        // Creamos nueva variable con un valor de arreglo                      //asignamos la variable $query con la funcion mysqli_query
?>
<!DOCTYPE html>
<html lang="en">
    <head>                                                                   
        <meta charset="UTF-8">                                                               
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-usuarios.css?ts=<?=time()?>" />   
        <title>Editar Usuario</title>
    </head>
    <div>
    <?php
  include("header.php");
    ?>
  </div>
    <body>
        <div class="users-form">                                                                
            <form action="edit-usuario.php" method="POST">                                              
                <h1>Editar datos del Usuario</h1>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Ingrese los nuevos datos del Usuario
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>                                                                                     
                <input type="hidden" name="idUsuarios" value="<?= $row['idUsuarios']?>">
                
                <p>Actualizar Nombres</p>
                <input type="text" name="Nombres" placeholder="Nombres" value="<?= $row['Nombres']?>">
                
                <p>Actualizar Sexo</p>
                <input type="text" name="Sexo" placeholder="Sexo" value="<?= $row['Sexo']?>">
                
                <p>Actualizar Edad</p>
                <input type="text" name="Edad" placeholder="Edad" value="<?= $row['Edad']?>">   

                <p>Actualizar Username</p>
                <input type="text" name="username" placeholder="username" value="<?= $row['username']?>">

                <p>Actualizar Password</p>
                <input type="text" name="password" placeholder="password" value="<?= $row['password']?>">

                <input type="submit" onclick="edit()" value="Actualizar">
            </form>
        </div>
        <script>
        function edit()
        {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Cambios guardados',
                html: 'Click para continuar',
                timer: 14500
                })
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
