document.getElementById("btnIniciarSesion").addEventListener("click", function() {
    var modoUsuarioSeleccionado = document.querySelector('input[name="modoUsuario"]:checked');
    if (modoUsuarioSeleccionado) {
        // Modo de usuario seleccionado, continuar con la acción de inicio de sesión
        // Aquí puedes redirigir al usuario a la página de inicio de sesión o realizar alguna otra acción necesaria
        alert("Has seleccionado el modo de usuario: " + modoUsuarioSeleccionado.value);
    } else {
        // No se ha seleccionado ningún modo de usuario, mostrar un mensaje de error
        alert("Por favor, selecciona un modo de usuario antes de iniciar sesión.");
    }
});