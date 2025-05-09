let carrito = [];
let total = 0;

function agregarCarrito(nombre, precio) {
    carrito.push({ nombre, precio });
    total += parseFloat(precio);
    
    actualizarCarrito();
}

function actualizarCarrito() {
    const carritoElement = document.getElementById('carrito');
    const totalElement = document.getElementById('total');
    
    carritoElement.innerHTML = '';
    carrito.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.nombre} - $${parseFloat(item.precio).toFixed(2)}`;
        carritoElement.appendChild(li);
    });
    
    totalElement.textContent = total.toFixed(2);
}