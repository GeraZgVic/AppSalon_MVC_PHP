document.addEventListener('DOMContentLoaded', function () {
    iniciarApp();

});


function iniciarApp() {
    buscarPorFecha();
}
function buscarPorFecha() {
    const fechaInput = document.querySelector('#fecha');
    fechaInput.addEventListener('input', function(e) {
        const fechaSeleccionada = e.target.value;
        
        // Construir un queryString para que lo lea PHP
        window.location = `?fecha=${fechaSeleccionada}`;
    });
}