$(document).ready(function () {
    $('#ingresos').empty();
    $('#gastos').empty();
    $.ajax({
        url: '../controlador/dashboard.php',
        type: 'POST',
        data: { opcn: 'cargar' },
        dataType: 'json'
    })
        .done(function (data) {
            $('#correo2').text(data[0].correo);
            $('#nombre').val(data[0].nombre)
            $('#usuario').val(data[0].nombre)
            $('#correo').val(data[0].correo)
            $('#contraseña').val(base64Decode(data[0].contraseña));
            $('#contraseña2').val(base64Decode(data[0].contraseña));
            $('#ingresos').val(data[0].ingresos)
            $('#gastos').val(data[0].gastos)
        });
});

function base64Decode(encodedString) {
    return atob(encodedString);
}

document.getElementById('btnGuardarPerfil').addEventListener('click', function () {

    var contraseña = $('#contraseña').val();
    var contraseña2 = $('#contraseña2').val();

    // Verificar si las contraseñas coinciden
    if (contraseña !== contraseña2) {
        alert('Las contraseñas no coinciden. Por favor, verifica.');
        return;  // Sale de la función si las contraseñas no coinciden
    }



    var contraseñaCodificada = btoa(contraseña);

    var data = {
        nombre: $('#nombre').val(),
        contraseña: contraseñaCodificada,
        correo: $('#correo').val(),
        ingresos: $('#ingresos').val(),
        gastos: $('#gastos').val(),
        opcn: 'editar'
    };
    $.ajax({
        url: '../controlador/dashboard.php',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.error) {
                alert(response.error);
                return;
            }

            // Aquí puedes manejar la respuesta exitosa, como cerrar el modal, mostrar un mensaje, etc.
            $('#modalAgregarReserva').modal('hide');
            alert('Datos Actualizados con éxito');
            setTimeout(function () {
                location.reload();
            }, 2000);
        },
        error: function (xhr, status, error) {
            // Maneja errores de la solicitud AJAX
            console.log('Error en la solicitud AJAX: ' + error);
        }
    });
});








