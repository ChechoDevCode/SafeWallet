
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
          <a href="./vistaGastos.blade.php" class="d-block text-light p-3"><i class="icon ion-md-cash mr-2 lead"></i> Gastos</a>
          <a href="./calculadoraPrestamo.blade.php" class="d-block text-light p-3"><i class="icon ion-md-calculator mr-2 lead"></i> Simulador</a>
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
    
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./vistaPanelControl.blade.php">Dashboard</a>
                  <a class="dropdown-item" href="./vistaPerfil.blade.php">Mi perfil</a>
                  <a class="dropdown-item" href="./vistaProyectos.blade.php">Mis proyectos</a>
                  <a class="dropdown-item" href="./vistaGastos.blade.php">Mis Gastos</a>
                  <a class="dropdown-item" href="./calculadoraPrestamo.blade.php">Simulador</a>
                  <a class="dropdown-item" href="./vistaTips.blade.php">Tips</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>