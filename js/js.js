
// Boton Flotante con el inicio de sesión 
const btnFlotante = document.querySelector('.btn-flotante');

btnFlotante.addEventListener('click', function() {

    const footer = document.querySelector('.in-sesion');

    if( footer.classList.contains('activo') ) {
        footer.classList.remove('activo');
        this.classList.remove('activo');
    } else {
        footer.classList.add('activo');
        this.classList.add('activo');
    }

});
