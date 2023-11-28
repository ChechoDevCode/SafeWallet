<?php include("../src/seguridad.php"); ?>
<?php include("../layouts/Header-dashboard.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/gastos.css">
  </head>
  <body>

          <div id="contain">
            <h2 class="text-analitycs py-2">Mis gastos</h2>
            <!-- Botones -->
            <div class="buttons">
              <button type="button" class="btn btn-success nuevo" data-id="2">Nuevo Gasto</button>
              <button type="button" class="btn btn-secondary filtro" data-id="3">Filtrar</button>
            </div>
              <!-- Tabla -->
            <section class="py-3">
              <div class="container">
                <div class="row d-flex justify-content-center">
                  <div class="col-lg-12">
                    <table id="listar" class="table p-4 m-4">
                      <thead>
                        <tr>
                          <th>Descripción</th>
                          <th>Valor</th>
                          <th>Fecha</th>
                          <th>Editar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates doloribus voluptate, repudiandae laboriosam nesciunt magni nostrum voluptatibus, inventore distinctio quia cumque ea quisquam culpa ipsum, cupiditate unde officiis doloremque!</td>
                          <td data-label="Valor">$20.000.000</td>
                          <td data-label="Fecha">19/05/2023</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div>
              </div>
            </section>
          </div>  

        </div>   
      </div>   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/gastos.js"></script>
    
  </body>
</html>
