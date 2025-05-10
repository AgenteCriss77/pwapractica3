<?php
session_start();

// Si no existe el número aleatorio, lo generamos
if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1, 10); // Número aleatorio entre 1 y 10
}

// Mensaje predeterminado
$mensaje = "";

// Si el usuario ha enviado el formulario con una respuesta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adivinanza = (int) $_POST['numero'];

    if ($adivinanza === $_SESSION['numero']) {
        $mensaje = "¡Correcto! El número era " . $_SESSION['numero'] . ". ¡Has ganado!";
        unset($_SESSION['numero']); // Reiniciar el juego
    } else {
        $mensaje = "Incorrecto. Intenta nuevamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Juego de Adivinanza</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f8ff;
      text-align: center;
      padding-top: 100px;
    }

    .juego {
      background-color: white;
      padding: 30px;
      display: inline-block;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input[type=number] {
      padding: 10px;
      font-size: 16px;
      width: 100px;
    }

    button {
      padding: 10px 20px;
      margin-top: 10px;
      font-size: 16px;
      cursor: pointer;
    }

    .mensaje {
      margin-top: 20px;
      font-size: 18px;
      color: #333;
    }
  </style>
  <script>
    function validarEntrada() {
      const numero = document.getElementById("numero").value;
      if (numero === "" || isNaN(numero) || numero < 1 || numero > 10) {
        alert("Por favor, ingresa un número entre 1 y 10.");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>

  <div class="juego">
    <h1>Adivina el número</h1>
    <p>Estoy pensando en un número del 1 al 10. ¿Cuál crees que es?</p>
    <form method="POST" onsubmit="return validarEntrada()">
      <input type="number" name="numero" id="numero" min="1" max="10" required>
      <br>
      <button type="submit">Adivinar</button>
    </form>

    <?php if ($mensaje): ?>
      <div class="mensaje"><?= $mensaje ?></div>
    <?php endif; ?>
  </div>

</body>
</html>
