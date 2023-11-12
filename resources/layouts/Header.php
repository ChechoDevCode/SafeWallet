<!doctype html>
<html lang="en">
  <head>
    <title>SafeWallet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
  </head>
  <body>
    <header>
      <!-- Navbar responsive -->
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="/trabajoGrado/resources/views/vistaPrincipal.blade.php" style="font-weight: bold; font-size: 21px;">
          SafeWallet
              <img src="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX" alt="Logo" width="30" height="30" class="mr-2">
          </a>
          <!-- Toggler responsivo -->
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <!-- navbar por sectiones -->
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mx-auto"> <!-- 'mx-auto' para centrar los elementos -->
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#nosotros">Nosotros</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contacto">Contactanos</a>
                  </li>
              </ul>
              <ul class="navbar-nav"> <!-- Añadir dos botones para iniciar sesión y registrarse -->
                  <li class="nav-item">
                      <a class="nav-link" href="./vistaLogin.blade.php">Iniciar Sesión</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="./vistaRegistrar.blade.php">Registrarse</a>
                  </li>
              </ul>
          </div>
      </nav>
    </header>