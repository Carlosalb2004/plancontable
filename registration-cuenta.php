<?php
//Registration-Cuentas
include("config.php");
include("session.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Cuentas</title>
    <link rel="stylesheet" type="text/css" href="style-cuentas.css" />
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
            <form action="register-cuenta.php" method="POST">
                <h1>Ingresar datos de la Cuenta</h1>
                <input type="text" name="idTipo" placeholder="Id Tipo" list="busqueda_t">
                <datalist id="busqueda_t">
                    <option>
                        <?php
                        $sql = "SELECT * FROM mae_tipo";
                        $query = mysqli_query($mysqli, $sql);

                        while ($row = mysqli_fetch_array($query)) : ?>
                    <option><?= $row['idTipo'] ?></option>
                <?php endwhile; ?>
                </option>
                </datalist>
                <input type="text" placeholder="Cuenta" name="Cuenta" required>
                <input type="text" placeholder="Cuenta_Padre" name="Cuenta_Padre" required>
                <input type="text" placeholder="Nombre" name="Nombre" required>
                <input type="text" placeholder="Primer Digito" name="Digito1" required>
                <input type="text" placeholder="Segundo Digito" name="Digito2" required>
                <input type="submit" onclick="add()" value="Agregar">
            </form>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</div>

<br>
<h2>Cuentas Registradas</h2>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-light">
                <div class="users-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>ID_TIPO</th>
                            <th>CUENTA</th>
                            <th>CUENTA_PADRE</th>
                            <th>NOMBRE</th>
                            <th>1_DIGITO</th>
                            <th>2_DIGITOS</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM mae_plancuentas";
                        $query = mysqli_query($mysqli, $sql);
                        while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $row['idPlanCuentas'] ?></td>
                                <td><?= $row['idTipo'] ?></td>
                                <td><?= $row['Cuenta'] ?></td>
                                <td><?= $row['Cuenta_Padre'] ?></td>
                                <td><?= $row['Nombre'] ?></td>
                                <td><?= $row['Digito1'] ?></td>
                                <td><?= $row['Digito2'] ?></td>
                                <td><a href="update-cuenta.php?id=<?= $row['idPlanCuentas'] ?>" class="users-table--edit">Editar</a></td>
                                <td><a onclick="del()" href="delete-cuenta.php?id=<?= $row['idPlanCuentas'] ?>" class="users-table--delete">Eliminar</a></td>
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