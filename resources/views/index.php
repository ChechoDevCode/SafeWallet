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
    <main>
      <!-- Carrousel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/17681378/pexels-photo-17681378/free-photo-of-mujer-ordenador-portatil-trabajando-sentado.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/15372903/pexels-photo-15372903/free-photo-of-escritorio-tecnologia-ordenado-teclado-mecanico.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/17492110/pexels-photo-17492110/free-photo-of-hombre-niebla-conexion-tecnologia.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>

      <!-- Nosotros -->
      <h1 id="nosotros">Nosotros</h1>
      <div class="card-columns d-flex justify-content-center">
        <div class="card">
          <img class="card-img-top" src="https://drive.google.com/uc?export=download&id=1A6Yr0WLj8_FPOvqxkv3SQhkUwHHLoRWY" alt="">
          <div class="card-body">
            <h4 class="card-title" style="text-align: justify;">Nicolas Vargas</h4>
            <p class="card-text">Nicolas Vargas estudiante de la Universidad Católica de Colombia de la carrera de Ingeniería de Sistemas y Computación, desde temprana edad le fascinaron los avances tecnológicos y cómo estos pueden transformar el mundo que nos rodea, cree firmemente en el poder de la tecnología para abordar los desafíos de la actualidad, ya sea en la optimización de procesos, la creación de aplicaciones útiles o la garantía de la seguridad de los sistemas de información. Su objetivo principal es seguir explorando nuevas fronteras tecnológicas y contribuir a soluciones innovadoras que marquen la diferencia en nuestra sociedad.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://drive.google.com/uc?export=download&id=1eV9HsI7ZKWM3_18nooiBKxlpJPmF0fwf" alt="">
          <div class="card-body">
            <h4 class="card-title">Sergio González</h4>
            <p class="card-text" style="text-align: justify;">Sergio González estudiante de la Universidad Católica de Colombia de la carrera de Ingeniería de Sistemas y Computación, comprometido a utilizar sus conocimientos y habilidades para contribuir a un futuro más inteligente y más conectado, cree que la tecnología es una herramienta que puede impulsar la innovación, mejorar la eficiencia y resolver problemas que parecían insolubles. Su objetivo es lograr que este prototipo pueda ser desarrollado para mejorar las finanzas personales de los jovenes y mejorar su calidad de vida.</p>
          </div>
        </div>
      </div>

      <!-- Formulario -->
      <h1 id="contacto">Contacto</h1>
      <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form style="margin: 10px;">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Tu Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="tel" class="form-control" id="celular" placeholder="Tu Número de Celular" required>
                    </div>
                    <div class="form-group">
                        <label for="ocupacion">Ocupación (opcional)</label>
                        <input type="text" class="form-control" id="ocupacion" placeholder="Tu Ocupación">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="5" placeholder="Tu Mensaje" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    </main>
    <footer class="bg-primary">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center text-light">
                <p>&copy; 2023 SafeWallet. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
