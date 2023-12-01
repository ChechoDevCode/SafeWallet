<?php include("../src/seguridad.php"); ?> 

<!doctype html>
<html lang="en">
  <head>
    <title>Perfil</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php include("../layouts/Header-dashboard.php"); ?>

      <div id="content">
        <section>
          <div class="container">
            <div class="container rounded bg-white mt-5 mb-5 perfil-container">
              <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Nombre del correo</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                  <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right">Configutación del perfil</h4>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control" placeholder="Nombre" value=""></div>
                      <div class="col-md-6"><label class="labels">Usuario</label><input type="text" class="form-control" value="" placeholder="Usuario"></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Correo</label><input type="text" class="form-control" placeholder="ejemplo@gmail.com" value=""></div>
                      <div class="col-md-12"><label class="labels">Contraseña</label><input type="text" class="form-control" placeholder="***************" value=""></div>
                      <div class="col-md-12"><label class="labels">Repetir contraseña</label><input type="text" class="form-control" placeholder="***************" value=""></div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-6"><label class="labels">Cuántos son tus ingresos mensuales?</label><input type="text" class="form-control" value="" placeholder="$ 2.000.000"></div>
                      <div class="col-md-6"><label class="labels">Cuántos son tus gastos obligatorios al mes?</label><input type="text" class="form-control" placeholder="$ 500.000" value=""></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Guardar</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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