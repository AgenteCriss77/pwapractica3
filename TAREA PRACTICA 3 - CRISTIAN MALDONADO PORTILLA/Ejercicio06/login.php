<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($usuario === 'admin' && $password === '123456') {
        $_SESSION['usuario'] = $usuario;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #eef1f5; }
        .login-form { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .error { color: red; margin-bottom: 10px; }
        input { padding: 8px; margin: 5px 0; width: 200px; }
        button { background-color: #007bff; color: white; padding: 10px; border: none; border-radius: 5px; width: 100%; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST">
            <div>
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
