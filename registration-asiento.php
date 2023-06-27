<?php
//Registration-Asiento
include("config.php");
include("session.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Asientos</title>
    <link rel="stylesheet" type="text/css" href="style-asientos.css" />
    <meta name="" viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
</head>

<div>
    <?php
    include("header.php");
    ?>
</div>
<div>

    <body>
        <script>
            function add() {
                Swal.fire(
                    'Servicio Agregado',
                    'Click para continuar',
                    'success'
                )
            }
        </script>
        <div class="users-form">
            <form action="register-asiento.php" method="POST">
                <h1>Ingresar datos del Asiento</h1>
                <input type="text" name="idUsuarios" placeholder="Id Usuarios" list="busqueda_u">
                <datalist id="busqueda_u">
                    <option>
                        <?php
                        $sql = "SELECT * FROM mae_usuarios";
                        $query = mysqli_query($mysqli, $sql);

                        while ($row = mysqli_fetch_array($query)) : ?>
                    <option><?= $row['idUsuarios'] ?></option>
                <?php endwhile; ?>
                </option>
                </datalist>
                <input type="text" placeholder="Numero" name="Numero" required>
                <input type="date" placeholder="Fecha" name="Fecha">
                <input type="text" placeholder="Glosa" name="Glosa" required>
                <input type="text" placeholder="Observaciones" name="Observaciones" required>
                <input type="submit" onclick="add()" value="Agregar">
            </form>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</div>

<br>
<h2>Asientos Registrados</h2>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-light">
                <div class="users-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>ID_USUARIOS</th>
                            <th>NUMERO</th>
                            <th>FECHA</th>
                            <th>GLOSA</th>
                            <th>OBSERVACIONES</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM trs_asientos";
                        $query = mysqli_query($mysqli, $sql);
                        while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $row['idAsientos'] ?></td>
                                <td><?= $row['idUsuarios'] ?></td>
                                <td><?= $row['Numero'] ?></td>
                                <td><?= $row['Fecha'] ?></td>
                                <td><?= $row['Glosa'] ?></td>
                                <td><?= $row['Observaciones'] ?></td>
                                <td><a href="update-asiento.php?id=<?= $row['idAsientos'] ?>" class="users-table--edit">Editar</a></td>
                                <td><a onclick="del()" href="delete-asiento.php?id=<?= $row['idAsientos'] ?>" class="users-table--delete">Eliminar</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </div>
            </table>
            <br>
            <br>
        </div>
    </div>

</html>