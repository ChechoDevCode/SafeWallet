<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
    <title>SafeWallet</title>
</head>
<body>
    <?php include("templates/header.php"); ?>
    <main>
        <section class="main-section-info-container">
            <div class="main-div-info">
                <p class="main-section-left-p">¿Qué estás esperando?</p><br>
                <span class="main-section-left-span-two">Crea ahora mismo<br>tu cuenta!</span>
                <img class="main-section-left-decoration" src="https://drive.google.com/uc?export=download&id=1RkENsk3IGth5Bg6m2E-HhdKWvSVYw0Qv" alt="Decoration">
                <p class="main-section-left-p-two">Registrate ahora para conocer más.</p>
                <div class="main-btn-div">
                    <button id="btn-start" href="./Registrarse.php">Comienza Ya!</button>
                </div>
            </div>
            <div class="main-div-slider">
                <img src="https://images.pexels.com/photos/186461/pexels-photo-186461.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="slider">
            </div>
        </section>
        <h1 id="nosotros" class="title-one">Nosotros</h1>
        <section class="main-section-cards">
            <div class="section-div-card">
                <img src="https://drive.google.com/uc?export=download&id=1eV9HsI7ZKWM3_18nooiBKxlpJPmF0fwf" alt="Sergio">
                <h2>Sergio González Amado</h2>
                <p>Estudiante de la Universidad Católica de Colombia que busca ayudar a los jovenes a tomar mejores desiciones financieras con ayuda de la tecnología.</p>
            </div>
            <div class="section-div-card">
                <img src="https://drive.google.com/uc?export=download&id=1A6Yr0WLj8_FPOvqxkv3SQhkUwHHLoRWY" alt="Nicolas">
                <h2>Nicolas Vargas Montealegre</h2>
                <p>Estudiante de la Universidad Católica de Colombia con el sueño de mejorar la vida de los jovenes que no tienen las mismas oportunidades de recibir educación financiera.</p>
            </div>
        </section>
        <h1 id="contacto" class="title-two">Contactanos</h1>
        <section class="main-section-container">
          <h1>Podemos ayudarte, contacta con nosotros!</h1>
          <div class="main-section-form">
              <form action="" method="post">
                  <div class="main-section-div-form-div">
                      <input type="text" id="name" class="input" name="user_name" placeholder="Nombre *" size="30" required>
                      <input type="email" id="mail" class="input" name="user_mail" placeholder="Tú Email *" size="30" required>
                  </div>
                  <div class="main-section-div-form-div">
                      <input type="tel" id="tel" class="input" name="celular" placeholder="Tú Número Celular *" size="15" required>
                      <input type="text" id="text" class="input" name="user_text" placeholder="Educación / Profesión (opcional)" size="30">
                  </div>
                  <div class="main-section-div-form-areabtn">
                      <textarea id="msg" class="input-area" name="user_message" placeholder="Tú Mensaje *" size="400"></textarea>
                      <button type="submit" class="main-btn">Hablemos</button>
                  </div>
              </form>
          </div>
        </section>
    </main>
    <footer class="footer-content">
        <section class="footer-section-info">
            <div class="footer-div-logo">
                <img src="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX" alt="Logo">
                <h1>SafeWallet</h1>
            </div>
            <p>Cll 47 Universidad Católica, <br>
            Bogotá, Colombia.</p>
            <div class="section-div-icons">
                <img src="https://drive.google.com/uc?export=download&id=1F6j-VzIHdCKblhbdjsBDXP6KSLEs9nj-" alt="Red social">
                <img src="https://drive.google.com/uc?export=download&id=13qVPFITqrALFIxp8cVT2lqlhEmJAKPhq" alt="Red social">
                <img src="https://drive.google.com/uc?export=download&id=1Hk2WF-GUDwjWMIeyiRwQcLv_5bN4i8uU" alt="Red social">
                <img src="https://drive.google.com/uc?export=download&id=1zAcUou5IT9CsQUIIA9wVqlSJkG7w3Tfd" alt="Red social">
            </div>
        </section>
        <span class="footer-span">© 2023. SafeWallet</span>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>