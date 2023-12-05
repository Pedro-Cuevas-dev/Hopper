document.getElementById('mostrar-ocultar-lista').addEventListener('click', function() {
    var lista = document.getElementById('resumen-list');
    var boton = document.getElementById('agregar-carrito-btn');

    if (lista.classList.contains('oculta')) {
        // Muestra la lista
        lista.classList.remove('oculta');
        
    } else {
        // Oculta la lista
        lista.classList.add('oculta');
        
    }
});
