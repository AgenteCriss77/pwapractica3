<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control</title>
    <style>
        body { font-family: Arial; text-align: center; padding-top: 50px; background-color: #eef1f5; }
        .panel { background: white; padding: 20px; max-width: 600px; margin: 0 auto; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="panel">
        <h1>Bienvenido, <?= htmlspecialchars($_SESSION['usuario']) ?>!</h1>
        <p>Has iniciado sesión correctamente.</p>
        <p><a href="logout.php">Cerrar sesión</a></p>
    </div>
</body>
</html>
