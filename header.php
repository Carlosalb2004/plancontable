<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
  <link rel="stylesheet" href="style-inicio.css?ts=<?=time()?>">
  <style>
    body {
      background-image: url('fondo-login.png');
      background-size: 100vw 100vh;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    header {
      padding: 1rem;
      background-color: #f8f9fa;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
    }

    header .nav {
      justify-content: center;
      margin-bottom: 0;
    }

    header .nav-item {
      margin: 0 5px;
    }

    header .nav-link {
      color: #000;
      font-weight: bold;
      text-decoration: none;
      transition: color 0.3s;
    }

    header .nav-link:hover {
      color: #555;
    }
  </style>
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
            <li class="nav-item">
              <a href="inicio.php" class="nav-link px-2 link-dark">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="registration-cuenta.php" class="nav-link px-2 link-dark">Crear Cuenta</a>
            </li>
            <li class="nav-item">
              <a href="registration-asiento.php" class="nav-link px-2 link-dark">Crear Asiento</a>
            </li>
            <li class="nav-item">
              <a href="registration-asientodetalle.php" class="nav-link px-2 link-dark">Crear Asiento Detalle</a>
            </li>
            <li class="nav-item">
              <a href="registration-usuario.php" class="nav-link px-2 link-dark">Crear Usuario</a>
            </li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
          </form>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="usuario.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>


