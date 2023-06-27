<?php
//Registration-AsientoDetalle
include("config.php");
include("session.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Asientos Detalle</title>
    <link rel="stylesheet" type="text/css" href="style-asientodetalles.css" />
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
            <form action="register-asientodetalle.php" method="POST">
                <h1>Ingresar datos del Asiento Detallado</h1>
                <input type="text" name="idAsientos" placeholder="Id Asientos" list="busqueda_a">
                <datalist id="busqueda_a">
                    <option>
                        <?php
                        $sql = "SELECT * FROM trs_asientos";
                        $query = mysqli_query($mysqli, $sql);

                        while ($row = mysqli_fetch_array($query)) : ?>
                    <option><?= $row['idAsientos'] ?></option>
                <?php endwhile; ?>
                </option>
                </datalist>
                <input type="text" name="idPlanCuentas" placeholder="Id Plan Cuentas" list="busqueda_p">
                <datalist id="busqueda_p">
                    <option>
                        <?php
                        $sql = "SELECT * FROM mae_plancuentas";
                        $query = mysqli_query($mysqli, $sql);

                        while ($row = mysqli_fetch_array($query)) : ?>
                    <option><?= $row['idPlanCuentas'] ?></option>
                <?php endwhile; ?>
                </option>
                </datalist>
                <input type="text" placeholder="Debe" name="Debe" required>
                <input type="text" placeholder="Haber" name="Haber" required>
                <input type="submit" onclick="add()" value="Agregar">
            </form>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</div>

<br>
<h2>Detalle de Asientos Registrados</h2>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-light">
                <div class="users-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>ID_ASIENTOS</th>
                            <th>ID_CUENTAS</th>
                            <th>DEBE</th>
                            <th>HABER</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM trs_asientodetalle";
                        $query = mysqli_query($mysqli, $sql);
                        while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $row['idAsientoDetalle'] ?></td>
                                <td><?= $row['idAsientos'] ?></td>
                                <td><?= $row['idPlanCuentas'] ?></td>
                                <td><?= $row['Debe'] ?></td>
                                <td><?= $row['Haber'] ?></td>
                                <td><a href="update-asientodetalle.php?id=<?= $row['idAsientoDetalle'] ?>" class="users-table--edit">Editar</a></td>
                                <td><a onclick="del()" href="delete-asientodetalle.php?id=<?= $row['idAsientoDetalle'] ?>" class="users-table--delete">Eliminar</a></td>
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