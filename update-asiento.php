<?php 
    include("config.php");   //incluimos al archivo config.php ya que tiene la variable $msqli

    $id=$_GET['id'];   

    $sql="SELECT * FROM trs_asientos WHERE idAsientos='$id'";
    $query=mysqli_query($mysqli, $sql);                         //asignamos la variable $query con la funcion mysqli_query
    $row=mysqli_fetch_array($query);                                        // Creamos nueva variable con un valor de arreglo                      //asignamos la variable $query con la funcion mysqli_query
?>
<!DOCTYPE html>
<html lang="en">
    <head>                                                                   
        <meta charset="UTF-8">                                                               
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-asientos.css?ts=<?=time()?>" />   
        <title>Editar Asiento</title>
    </head>
    <div>
    <?php
  include("header.php");
    ?>
  </div>
    <body>
        <div class="users-form">                                                                
            <form action="edit-asiento.php" method="POST">                                              
                <h1>Editar datos del Asiento</h1>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Ingrese los nuevos datos del Asiento
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>                                                                                     
                <input type="hidden" name="idAsientos" value="<?= $row['idAsientos']?>">
                
                <p>Actualizar Id Usuario</p>
                <input type="text" name="idUsuarios" placeholder="idUsuarios" value="<?= $row['idUsuarios']?>">
                
                <p>Actualizar Numero</p>
                <input type="text" name="Numero" placeholder="Numero" value="<?= $row['Numero']?>">
                
                <p>Actulizar Fecha Emitida</p>
                <input type="date" placeholder="Fecha Emitida" name="Fecha">

                <p>Actualizar Glosa</p>
                <input type="text" name="Glosa" placeholder="Glosa" value="<?= $row['Glosa']?>">
                
                <p>Actualizar Observaciones</p>
                <input type="text" name="Observaciones" placeholder="Observaciones" value="<?= $row['Observaciones']?>">      

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