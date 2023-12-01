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

  <?php include("../layouts/Header-dashboard.php"); ?>

  <div id="content">
    <h2 class="text-analitycs">Proyectos</h2>
    <section class="py-3">
      <div class="container">
      <div class="buttons">
      <button type="button" class="btn btn-primary" id="crear" style="margin-bottom: 20px;" data-toggle="modal" data-target="#modalAgregarReserva">
        <i class="fas fa-plus"></i> Agregar Proyecto
      </button>
    </div>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-12">
            <table id="tabla" class="table p-3 m-3">
              <thead>
                <tr>
                  <th>Objetivo</th>
                  <th>Costo</th>
                  <th>Interes anual</th>
                  <th>Aporte mensual</th>
                  <th>Estado</th>
                  <th>Categoria</th>
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
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="modal fade" id="modalAgregarReserva" role="dialog" aria-labelledby="modalAgregarReservaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAgregarReservaLabel">Agregar Gasto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="modCrearReserva">
            <div class="modal-body">
              <!-- Espacio para la descripción del gasto -->
              <div class="form-group">
                <label for="descripcionGasto">Descripción del Gasto:</label>
                <input type="text" class="form-control" id="descripcionGasto" placeholder="Ingrese la descripción del gasto">
              </div>

              <!-- Espacio para el valor del gasto -->
              <div class="form-group">
                <label for="valorGasto">Valor del Gasto:</label>
                <input type="number" class="form-control" id="valorGasto" placeholder="Ingrese el valor del gasto">
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="guardarReserva">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
















  <!-- <div id="contain">
          
          <div class="container">
            <div class="container rounded bg-white mt-5 mb-5 perfil-container">
              <div class="column">
                <section>
                  
                </section>
              </div>
            </div>
          </div>
        </div> -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../js/proyectos.js"></script>
</body>

</html>