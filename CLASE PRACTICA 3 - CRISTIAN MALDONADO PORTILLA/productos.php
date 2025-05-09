<?php
declare(strict_types=1);

/**
 * Clase Producto para manejar la información de cada producto
 */
class Producto {
    private int $id;
    private string $nombre;
    private string $descripcion;
    private float $precio;
    private string $imagen;

    public function __construct(
        int $id,
        string $nombre,
        string $descripcion,
        float $precio,
        string $imagen
    ) {
        if ($id <= 0) {
            throw new InvalidArgumentException('El ID debe ser un número positivo');
        }
        if ($precio <= 0) {
            throw new InvalidArgumentException('El precio debe ser mayor que cero');
        }
        if (empty($nombre)) {
            throw new InvalidArgumentException('El nombre no puede estar vacío');
        }

        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->imagen = $imagen;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getImagen(): string {
        return $this->imagen;
    }

    public function getPrecioFormateado(): string {
        return number_format($this->precio, 2, '.', '');
    }

    public function toArray(): array {
        return [
            'oid' => $this->id,
            'onombre' => $this->nombre,
            'odescripcion' => $this->descripcion,
            'oprecio' => $this->getPrecioFormateado(),
            'oimagen' => $this->imagen
        ];
    }
}

/**
 * Array de productos utilizando la clase Producto
 * @var Producto[]
 */
$productos = [
    new Producto(1, 'Camisa', 'Camisa de algodón', 20.00, 'Imagenes%203/imagen1.jpg'),
    new Producto(2, 'Pantalón', 'Pantalón de mezclilla', 35.50, 'Imagenes%203/imagen2.jpg'),
    new Producto(3, 'Zapatos', 'Zapatos de cuero', 50.00, 'Imagenes%203/imagen3.jpg')
];

// Convertir los objetos Producto a arrays para mantener la estructura original
$productosArray = array_map(function(Producto $producto) {
    return $producto->toArray();
}, $productos);

// Eliminar el foreach de depuración que estaba causando la salida no deseada
foreach ($productos as $producto) {
    echo "Producto: " . $producto->getNombre() . " - Precio: $" . $producto->getPrecioFormateado() . "\n";
}