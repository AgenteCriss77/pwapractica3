<?php
// Ruta del directorio donde se almacenan las imágenes
$dir = "imagenes/";

// Verificar si el directorio existe
if (!is_dir($dir)) {
    die("Error: El directorio de imágenes no existe");
}

// Abrir el directorio y leer los archivos
$imagenes = array_diff(scandir($dir), array('..', '.')); // Evita las carpetas . y ..
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="galeria">
        <?php
        // Iterar sobre las imágenes y mostrarlas en la galería
        foreach ($imagenes as $imagen) {
            echo "<div class='imagen'>
                    <img src='{$dir}{$imagen}' alt='Imagen' />
                  </div>";
        }
        ?>
    </div>
</body>
</html>

