$(document).ready(function() {
    console.log('llegas a dash')
    cargarinfo();
});

function cargarinfo() {
    $.ajax({
        url: '../controlador/dashboard.php',
        type: 'POST',
        data: { opcn: 'cargar'},
        dataType: 'json'
    })
    .done(function( data ){
        var mensajeBienvenido = 'Bienvenido ' + data[0].nombre;
        // Actualiza el contenido del elemento con id "nombre_usuario" con el mensaje
        $('#nombre_usuario').text(mensajeBienvenido);
    });

}