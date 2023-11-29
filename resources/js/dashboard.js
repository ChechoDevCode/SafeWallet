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
        //cartas ideal
        var gastos = data[0].ingresos * 0.50
        var libres = data[0].ingresos * 0.30
        var ahorros = data[0].ingresos * 0.20
        $('#nombre_usuario').text(mensajeBienvenido);
        $('#navbarDropdown').text(data[0].nombre);
        $('#valor_ingresos').text('$'+data[0].ingresos);
        $('#valor_gastos').text('$'+gastos);
        $('#valor_libre').text('$'+libres);
        $('#valor_ahorro').text('$'+ahorros);
        //cartas realidad
        var libresR = data[0].ingresos - data[0].gastos - ahorros
        $('#valor_ingresosR').text('$'+data[0].ingresos);
        $('#valor_gastosR').text('$'+data[0].gastos);
        $('#valor_libreR').text('$'+libresR);
        $('#valor_ahorroR').text('$'+ahorros);



        



    });

}