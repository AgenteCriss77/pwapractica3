<?php
// Archivo donde se almacenará el número de visitas
$archivo = "contador.txt";

// Si el archivo no existe, lo creamos con valor 0
if (!file_exists($archivo)) {
  file_put_contents($archivo, "50");
}

// Leer el número actual de visitas
$visitas = (int) file_get_contents($archivo);

// Incrementar en 1
$visitas++;

// Guardar el nuevo valor
file_put_contents($archivo, $visitas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contador de Visitas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      text-align: center;
      padding-top: 100px;
    }
    .contador {
      background-color: #fff;
      display: inline-block;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .contador h1 {
      font-size: 2em;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="contador">
    <h1>Visitas al sitio:</h1>
    <p><strong><?php echo $visitas; ?></strong></p>
  </div>
</body>
</html>
