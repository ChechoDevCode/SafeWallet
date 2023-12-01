<?php include("../src/seguridad.php"); ?> 

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

  <?php include("../layouts/Header-dashboard.php"); ?>

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
              <div class="container">
                <h2 class="text-analitycs">Esperado</h2>
                <div class="row">
                  <!-- Card 1 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-cherry">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Ingresos</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_ingresos" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                            <span>100% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 2 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-blue-dark">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Gastos fijos</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_gastos" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                            <span>50% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 3 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-green-dark">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Libre</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_libre" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                              <span>30% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 4 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-orange-dark">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Ahorros</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_ahorro" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                            <span>20% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="container">
                <h2 class="text-analitycs">Tú control</h2>
                <div class="row border-bottom">
                  <!-- Card 1 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-cherry">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Ingresos</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_ingresosR" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                            <span>12.5% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 2 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-blue-dark">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Gastos fijos</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_gastosR" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                            <span>9.23% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 3 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-green-dark">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Libre</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_libreR" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                              <span>10% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 4 -->
                  <div class="col-xl-6 col-lg-6">
                    <div class="card l-bg-orange-dark">
                      <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                        <div class="mb-4">
                          <h5 class="card-title mb-0">Ahorros</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                          <div class="col-8">
                            <h2 id="valor_ahorroR" class="d-flex align-items-center mb-0">
                            </h2>
                          </div>
                          <div class="col-4 text-right">
                            <span>2.5% <i class="fa fa-arrow-up"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Graphs -->
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

    <!-- jQuery first, then Popper.js, then Bootstrap JS  -->
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