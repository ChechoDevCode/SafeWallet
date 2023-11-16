<?php include("../src/seguridad.php"); ?> 
<!doctype html>
<html lang="en">
  <head>
    <title>Mis proyectos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- Aside dashboard -->
    <div class="d-flex">
      <div id="sidebar-container">
        <div class="logo">
          <h4 class="text-light font-weight-bold">SafeWallet</h4>
        </div>
        <div class="menu">
          <a href="./vistaPanelControl.blade.php" class="d-block text-light p-3"><i class="icon ion-md-apps mr-2 lead"></i> Dashboard</a>
          <a href="./vistaPerfil.blade.php" class="d-block text-light p-3"><i class="icon ion-md-contact mr-2 lead"></i> Perfil</a>
          <a href="./vistaProyectos.blade.php" class="d-block text-light p-3"><i class="icon ion-md-briefcase mr-2 lead"></i> Proyectos</a>
          <a href="./vistaTips.blade.php" class="d-block text-light p-3"><i class="icon ion-md-bulb mr-2 lead"></i> Tips</a>
          <a href="#" class="d-block text-light p-3"><i class="icon ion-md-exit mr-2 lead"></i> Salir</a>
        </div>
      </div>
    <!-- Navbar responsive -->
      <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="form-inline position-relative my-2 d-inline-block">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="https://drive.google.com/uc?export=download&id=1A6Yr0WLj8_FPOvqxkv3SQhkUwHHLoRWY" class="img-fluid rounded-circle avatar mr-2" alt="imagen perfil">
                  El nombre de la cuenta
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./vistaPanelControl.blade.php">Dashboard</a>
                  <a class="dropdown-item" href="./vistaPerfil.blade.php">Mi perfil</a>
                  <a class="dropdown-item" href="#">Mis proyectos</a>
                  <a class="dropdown-item" href="./vistaTips.blade.php">Tips</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <div id="contain">
          <h2 class="text-analitycs py-2">Proyectos</h2>
          <section>
            <table class="table p-4 m-4">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Límite</th>
                  <th>Tipo</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">Pagar alquiler</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Ahorro</td>
                  <td data-label="Estado">Activo</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <tr>
                  <td scope="row">Ropa</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Ahorro</td>
                  <td data-label="Estado">Activo</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Servicios</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Deudas</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Membresia</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Gastos varios</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Servicios hogar</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Restaurante</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Verduras</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Higiene</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Multipagos</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Consignaciones</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Servicios</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
                <td scope="row">Servicios</td>
                  <td data-label="Fecha Inicio">10/05/2023</td>
                  <td data-label="Fecha Fin">19/05/2023</td>
                  <td data-label="Tipo">Deuda</td>
                  <td data-label="Estado">Cumplido</td>
                  <td data-label="Acciones">Botones</td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>

      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
