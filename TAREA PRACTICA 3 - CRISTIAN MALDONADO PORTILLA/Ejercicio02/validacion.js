function validarFormulario() {
    const nombre = document.getElementById("nombre").value.trim();
    const correo = document.getElementById("correo").value.trim();
    const mensaje = document.getElementById("mensaje").value.trim();
  
    if (nombre === "" || correo === "" || mensaje === "") {
      alert("Por favor, completa todos los campos.");
      return false;
    }
  
    const patronCorreo = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!patronCorreo.test(correo)) {
      alert("Introduce un correo electrónico válido.");
      return false;
    }
  
    return true;
  }
  