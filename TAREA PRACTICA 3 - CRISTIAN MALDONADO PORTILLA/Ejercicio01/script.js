function toggleSubMenu(event) {
  event.preventDefault(); // Evita que el enlace recargue la página

  const submenu = event.target.nextElementSibling;
  
  if (submenu && submenu.classList.contains('submenu')) {
      submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
  }
}