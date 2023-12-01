<?php include("../src/seguridad.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <title>Simulador</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="icon" href="https://drive.google.com/uc?export=download&id=1T_Ij0N4tRasv2BlktHlVrzc1iUKx2vIX">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/dashboard.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php include("../layouts/Header-dashboard.php"); ?>

<div class="container mt-5">
  <h1 class="text-center">Simulador de Préstamos</h1>
  <form>
    <div class="form-group">
      <label for="monto">Monto del préstamo:</label>
      <input type="number" class="form-control" id="monto" placeholder="Ingrese el monto">
    </div>
    <div class="form-group">
      <label for="plazo">Plazo en meses:</label>
      <input type="number" class="form-control" id="plazo" placeholder="Ingrese el plazo">
    </div>
    <div class="form-group">
      <label for="tasa">Tasa de interés anual (%):</label>
      <input type="number" class="form-control" id="tasa" placeholder="Ingrese la tasa de interés">
    </div>
    <div class="text-center">
      <button type="button" class="btn btn-primary" onclick="calcularCuota()">Calcular Cuota</button>
    </div>
  </form>

  <!-- Resultado -->
  <div class="mt-4" id="resultado">

  </div>
  <div class="mt-4" id="total">

    <!-- Aquí se mostrará el resultado del cálculo -->
  </div>
  <!-- Optional JavaScript -->
  <script>
    function calcularCuota() {
      var monto = parseFloat(document.getElementById('monto').value);
      var plazo = parseInt(document.getElementById('plazo').value);
      var tasa = parseFloat(document.getElementById('tasa').value);

      // Convierte la tasa de interés anual a mensual y a porcentaje
      var tasaMensual = (tasa / 100) / 12;

      // Calcula la cuota mensual utilizando la fórmula de amortización
      var cuota = (monto * tasaMensual) / (1 - Math.pow(1 + tasaMensual, -plazo));
      var total = cuota * plazo;

      // Muestra el resultado en el div correspondiente

      document.getElementById('total').innerHTML = '<h4>Total a pagar: </h4><p>$' + total.toFixed(2) + '</p>';
      document.getElementById('resultado').innerHTML = '<h4>Resultado:</h4><p>La cuota mensual es: $' + cuota.toFixed(2) + '</p>';
    }
  </script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>