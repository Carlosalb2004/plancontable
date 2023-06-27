<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
  <link rel="stylesheet" href="style-inicio.css?ts=<?= time() ?>">
  <link rel="stylesheet" type="text/css" href="style-asientodetalles.css" />

</head>

<body>
  <section>
    <header>
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
              <use xlink:href="#bootstrap"></use>
            </svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <!-- Agrega los elementos de la barra de navegación aquí -->
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="usuario.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="sidebar" id="sidebar">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi pe-none me-2" width="100" height="100">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Menu Sidebar</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="inicio.php" class="nav-link active" aria-current="page">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#home"></use>
            </svg>
            Inicio
          </a>
        </li>
        <li class="nav-item">
          <a href="registration-cuenta.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#speedometer2"></use>
            </svg>
            Crear Cuenta
          </a>
        </li>
        <li class="nav-item">
          <a href="registration-asiento.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#table"></use>
            </svg>
            Crear Asiento
          </a>
        </li>
        <li class="nav-item">
          <a href="registration-asientodetalle.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#speedometer2"></use>
            </svg>
            Crear Asiento Detalle
          </a>
        </li>
        <li class="nav-item">
          <a href="registration-usuario.php" class="nav-link link-dark">
            <svg class="bi pe-none me-2" width="16" height="16">
              <use xlink:href="#table"></use>
            </svg>
            Crear Usuario
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <!-- Agrega aquí los elementos del dropdown -->
      </div>
    </div>
    <div class="content" id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Detalle de Asientos Registrados</h2>
            <div class="table-container">
              <table class="table table-striped mx-auto">
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
                  while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                      <td>
                        <?= $row['idAsientoDetalle'] ?>
                      </td>
                      <td>
                        <?= $row['idAsientos'] ?>
                      </td>
                      <td>
                        <?= $row['idPlanCuentas'] ?>
                      </td>
                      <td>
                        <?= $row['Debe'] ?>
                      </td>
                      <td>
                        <?= $row['Haber'] ?>
                      </td>
                      <td><a href="update-asientodetalle.php?id=<?= $row['idAsientoDetalle'] ?>"
                          class="btn btn-primary">Editar</a></td>
                      <td><a onclick="del()" href="delete-asientodetalle.php?id=<?= $row['idAsientoDetalle'] ?>"
                          class="btn btn-danger">Eliminar</a></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script>
    const navLinks = document.querySelectorAll('.sidebar .nav-link');

    navLinks.forEach((link) => {
      link.addEventListener('mouseenter', () => {
        link.classList.add('active');
      });

      link.addEventListener('mouseleave', () => {
        link.classList.remove('active');
      });
    });
  </script>
</body>

</html>
