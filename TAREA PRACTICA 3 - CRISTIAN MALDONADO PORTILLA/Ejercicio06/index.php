<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Sistema de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef1f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido al Sistema de la Universidad Bolivariana del Ecuador</h1>

        <?php if (isset($_SESSION['usuario'])): ?>
            <p>Hola, <strong><?= htmlspecialchars($_SESSION['usuario']) ?></strong>. Ya has iniciado sesión.</p>
            <a href="dashboard.php">Ir al Panel</a><br>
            <a href="logout.php">Cerrar Sesión</a>
        <?php else: ?>
            <p>Elaborado por Cristian Maldonado.</p>
            <p>Por favor, inicia sesión para continuar.</p>
            <a href="login.php">Iniciar Sesión</a>
        <?php endif; ?>
    </div>
</body>
</html>