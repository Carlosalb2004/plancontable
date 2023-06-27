<?php 
    include("config.php");   //incluimos al archivo config.php ya que tiene la variable $msqli

    $id=$_GET['id'];   

    $sql="SELECT * FROM mae_plancuentas WHERE idPlanCuentas='$id'";
    $query=mysqli_query($mysqli, $sql);                         //asignamos la variable $query con la funcion mysqli_query
    $row=mysqli_fetch_array($query);                                        // Creamos nueva variable con un valor de arreglo                      //asignamos la variable $query con la funcion mysqli_query
?>
<!DOCTYPE html>
<html lang="en">
    <head>                                                                   
        <meta charset="UTF-8">                                                               
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-cuentas.css?ts=<?=time()?>" />   
        <title>Editar Cuenta</title>
    </head>
    <div>
    <?php
  include("header.php");
    ?>
  </div>
    <body>
        <div class="users-form">                                                                
            <form action="edit-cuenta.php" method="POST">                                              
                <h1>Editar datos de la Cuenta</h1>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Ingrese los nuevos datos de la Cuenta
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>                                                                                     
                <input type="hidden" name="idPlanCuentas" value="<?= $row['idPlanCuentas']?>">
                
                <p>Actualizar Id Tipo</p>
                <input type="text" name="idTipo" placeholder="idTipo" value="<?= $row['idTipo']?>">
                
                <p>Actualizar Cuenta</p>
                <input type="text" name="Cuenta" placeholder="Cuenta" value="<?= $row['Cuenta']?>">
                
                <p>Actualizar Cuenta Padre</p>
                <input type="text" name="Cuenta_Padre" placeholder="Cuenta_Padre" value="<?= $row['Cuenta_Padre']?>">
                
                <p>Actualizar Nombre</p>
                <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre']?>">
                
                <p>Actualizar N1_Digito</p>
                <input type="text" name="Digito1" placeholder="N1_Digito" value="<?= $row['Digito1']?>">

                <p>Actualizar N2_Digitos</p>
                <input type="text" name="Digito2" placeholder="N2_Digitos" value="<?= $row['Digito2']?>">      

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
