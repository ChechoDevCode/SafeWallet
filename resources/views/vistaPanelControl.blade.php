<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous"/>
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
                  <a class="dropdown-item" href="#">Mis proyectos</a>
                  <a class="dropdown-item" href="./vistaTips.blade.php">Tips</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <div id="content">
            <section class="py-3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-9">
                    <h1 id="nombre_usuario" class="color-text font-weight-bold mb-0"></h1>
                    <p class="lead text-muted">Revisar la última información</p>
                  </div>
                  <div class="col-lg-3 d-flex">
                    <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
                  </div>
                </div>
              </div>
            </section>
            
            <section>
                <!-- cards -->
        <div class="container">
     <div class="row border-bottom">
         <div class="col-xl-6 col-lg-6">
             <div class="card l-bg-cherry">
                 <div class="card-statistic-3 p-4">
                     <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                     <div class="mb-4">
                         <h5 class="card-title mb-0">Ingresos</h5>
                     </div>
                     <div class="row align-items-center mb-2 d-flex">
                         <div class="col-8">
                             <h2 class="d-flex align-items-center mb-0">
                                 3,243
                             </h2>
                         </div>
                         <div class="col-4 text-right">
                             <span>12.5% <i class="fa fa-arrow-up"></i></span>
                         </div>
                     </div>
                     <div class="progress mt-1 " data-height="8" style="height: 8px;">
                         <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-xl-6 col-lg-6">
             <div class="card l-bg-blue-dark">
                 <div class="card-statistic-3 p-4">
                     <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                     <div class="mb-4">
                         <h5 class="card-title mb-0">Gastos fijos</h5>
                     </div>
                     <div class="row align-items-center mb-2 d-flex">
                         <div class="col-8">
                             <h2 class="d-flex align-items-center mb-0">
                                 15.07k
                             </h2>
                         </div>
                         <div class="col-4 text-right">
                             <span>9.23% <i class="fa fa-arrow-up"></i></span>
                         </div>
                     </div>
                     <div class="progress mt-1 " data-height="8" style="height: 8px;">
                         <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-xl-6 col-lg-6">
             <div class="card l-bg-green-dark">
                 <div class="card-statistic-3 p-4">
                     <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                     <div class="mb-4">
                         <h5 class="card-title mb-0">Libre</h5>
                     </div>
                     <div class="row align-items-center mb-2 d-flex">
                         <div class="col-8">
                             <h2 class="d-flex align-items-center mb-0">
                                 578
                             </h2>
                         </div>
                         <div class="col-4 text-right">
                             <span>10% <i class="fa fa-arrow-up"></i></span>
                         </div>
                     </div>
                     <div class="progress mt-1 " data-height="8" style="height: 8px;">
                         <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-xl-6 col-lg-6">
             <div class="card l-bg-orange-dark">
                 <div class="card-statistic-3 p-4">
                     <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                     <div class="mb-4">
                         <h5 class="card-title mb-0">Ahorros</h5>
                     </div>
                     <div class="row align-items-center mb-2 d-flex">
                         <div class="col-8">
                             <h2 class="d-flex align-items-center mb-0">
                                 $11.61k
                             </h2>
                         </div>
                         <div class="col-4 text-right">
                             <span>2.5% <i class="fa fa-arrow-up"></i></span>
                         </div>
                     </div>
                     <div class="progress mt-1 " data-height="8" style="height: 8px;">
                         <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
            </section>

          <section>
            <h4 class="text-analitycs">Análisis</h4>
            <div class="container">
              <div class="row">
                <div class="col-lg-6 my-3">
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>     
            <div class="col-lg-6 my-3">
              <canvas id="myChart"></canvas>
            </div>       
          </section>



        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/dashboard.js"></script>


     jQuery first, then Popper.js, then Bootstrap JS 
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
     <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js" integrity="sha256-R4pqc0YV8lt7snxMQ0/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script> 
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    <script>
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green'],
        datasets: [{
          label: 'Gastos por mes',
          backgroundColor: 'rgb(7, 27, 143)',
          data: [12, 19, 3, 5],
          borderWidth: 1
        }]
      },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
  </body> 
</html>