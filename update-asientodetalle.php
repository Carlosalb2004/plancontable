<?php 
    include("config.php");   //incluimos al archivo config.php ya que tiene la variable $msqli

    $id=$_GET['id'];   

    $sql="SELECT * FROM trs_asientodetalle WHERE idAsientoDetalle='$id'";
    $query=mysqli_query($mysqli, $sql);                         //asignamos la variable $query con la funcion mysqli_query
    $row=mysqli_fetch_array($query);                                        // Creamos nueva variable con un valor de arreglo                      //asignamos la variable $query con la funcion mysqli_query
?>
<!DOCTYPE html>
<html lang="en">
    <head>                                                                   
        <meta charset="UTF-8">                                                               
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-asientos.css?ts=<?=time()?>" />   
        <title>Editar Asiento Detalle</title>
    </head>
    <div>
    <?php
  include("header.php");
    ?>
  </div>
    <body>
        <div class="users-form">                                                                
            <form action="edit-asientodetalle.php" method="POST">                                              
                <h1>Editar datos del Asiento Detallado</h1>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Ingrese los nuevos datos del Asiento Detallado
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>                                                                                     
                <input type="hidden" name="idAsientoDetalle" value="<?= $row['idAsientoDetalle']?>">
                
                <p>Actualizar Id Asiento</p>
                <input type="text" name="idAsientos" placeholder="idAsientos" value="<?= $row['idAsientos']?>">
                
                <p>Actualizar Id Plan Cuenta</p>
                <input type="text" name="idPlanCuentas" placeholder="idPlanCuentas" value="<?= $row['idPlanCuentas']?>">
                
                <p>Actulizar Debe</p>
                <input type="text" name="Debe" placeholder="Debe" value="<?= $row['Debe']?>">

                <p>Actualizar Haber</p>
                <input type="text" name="Haber" placeholder="Haber" value="<?= $row['Haber']?>">

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