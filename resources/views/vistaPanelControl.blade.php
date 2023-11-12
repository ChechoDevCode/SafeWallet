<?php include("../layouts/Header-dashboard.php"); ?>

        <div id="content">
            <section class="py-3">
              <div class="container">
                <div class="row">
                  <div class="col-lg-9">
                    <h1 class="color-text font-weight-bold mb-0">Bienvenido Nicolas</h1>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js" integrity="sha256-R4pqc0YV8lt7snxMQ0/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script> -->
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