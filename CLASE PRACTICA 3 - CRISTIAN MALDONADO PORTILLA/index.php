<?php include 'productos.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Simple</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Lista de Productos</h1>
    <div class="productos">
        <?php foreach ($productosArray as $producto): ?>
            <div class="producto">
                <img src="<?= htmlspecialchars($producto['oimagen']) ?>" alt="<?= htmlspecialchars($producto['onombre']) ?>">
                <h3><?= htmlspecialchars($producto['onombre']) ?></h3>
                <p><?= htmlspecialchars($producto['odescripcion']) ?></p>
                <p>Precio: $<?= htmlspecialchars($producto['oprecio']) ?></p>
                <button onclick="agregarCarrito('<?= htmlspecialchars($producto['onombre']) ?>', <?= $producto['oprecio'] ?>)">Agregar al carrito</button>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>Carrito de Compras</h2>
    <ul id="carrito"></ul>
    <p><strong>Total: $<span id="total">0.00</span></strong></p>

    <script src="script.js"></script>
</body>
</html>
