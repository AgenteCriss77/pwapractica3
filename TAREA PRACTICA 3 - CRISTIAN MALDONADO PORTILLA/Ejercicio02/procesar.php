<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $correo = htmlspecialchars($_POST['correo']);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  echo "<h2>Mensaje recibido:</h2>";
  echo "<p><strong>Nombre:</strong> $nombre</p>";
  echo "<p><strong>Correo:</strong> $correo</p>";
  echo "<p><strong>Mensaje:</strong> $mensaje</p>";
} else {
  echo "Acceso no permitido.";
}
?>
