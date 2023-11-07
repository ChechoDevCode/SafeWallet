$(document).ready(function() {
    console.log('funcionando login');
});

$('#Login').submit(function(e) {
    e.preventDefault();
    var email = $('#usuario').val();
    var password = $('#contraseña').val();
    var password_codificado = btoa(password);
    console.log(email,password)
    $.ajax({
        url: '../controlador/iniciarSesion.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            opcn: 'ctrLogin',
            email: email,
            password_codificado: password_codificado
        },
        success: function(respuesta) {
            console.log(respuesta.mensaje);
            if (!respuesta.error) {
                window.location.href = 'vistaRegistrar.blade.php';
            } else {
                Swal.fire({
                    position: 'center',
                    // icon: 'success',
                    title: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500000
                  })
                
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
            alert('Ocurrió un error al procesar la solicitud');
        }
    });
});