<?php
//Registration-Usuarios
include("config.php");
include("session.php");

$sql = "SELECT * FROM mae_usuarios";
$query = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="style-usuarios.css" />
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
            <form action="register-usuario.php" method="POST">
                <h1>Ingresar datos del Usuario</h1>
                <input type="text" placeholder="Nombres" name="Nombres" required>
                <input type="text" placeholder="Sexo" name="Sexo" required>
                <input type="text" placeholder="Edad" name="Edad" required>
                <input type="text" placeholder="username" name="username" required>
                <input type="text" placeholder="password" name="password" required>
                <input type="submit" onclick="add()" value="Agregar">
            </form>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</div>

<br>
<h2>Usuarios Registrados</h2>
    <br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-light">
                <div class="users-table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRES</th>
                            <th>SEXO</th>
                            <th>EDAD</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM mae_usuarios";
                        $query = mysqli_query($mysqli, $sql);
                        while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <td><?= $row['idUsuarios'] ?></td>
                                <td><?= $row['Nombres'] ?></td>
                                <td><?= $row['Sexo'] ?></td>
                                <td><?= $row['Edad'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td><a href="update-usuario.php?id=<?= $row['idUsuarios'] ?>" class="users-table--edit">Editar</a></td>
                                <td><a onclick="del()" href="delete-usuario.php?id=<?= $row['idUsuarios'] ?>" class="users-table--delete">Eliminar</a></td>
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