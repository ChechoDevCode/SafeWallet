<!doctype html>
<html lang="en">
  <head>
    <title>Tips & Consejos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css">
    <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
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
                  Nicolas Vargas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./vistaPanelControl.blade.php">Dashboard</a>
                  <a class="dropdown-item" href="./vistaPerfil.blade.php">Mi perfil</a>
                  <a class="dropdown-item" href="./vistaProyectos.blade.php">Mis proyectos</a>
                  <a class="dropdown-item" href="./vistaTips.blade.php">Tips</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>    
        <div id=content>
          <h1 class="text-analitycs">Tips y consejos</h1>
          <section>
              <div class="container py-3">
                <h2>Crea un presupuesto</h2>
                <p>Crear un presupuesto para conocer tus ingresos y tus gastos.</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="../Videos/TipsConsejos.mp4" autoplay="false"></iframe>
                </div>
              </div>
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