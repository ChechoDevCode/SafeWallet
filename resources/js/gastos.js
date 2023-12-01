$(document).ready(function () {
    console.log('gastos')
    var libres
    listar();
    cargarinfo()

});

function cargarinfo() {
    $.ajax({
        url: '../controlador/dashboard.php',
        type: 'POST',
        data: { opcn: 'cargar' },
        dataType: 'json'
    })
        .done(function (data) {

            // Actualiza el contenido del elemento con id "nombre_usuario" con el mensaje
            //cartas ideal
            libres = data[0].ingresos * 0.30
            var mensajeBienvenido = 'Tu disponible para este mes es de: $' + libres;

            $('#restante').text(mensajeBienvenido);
        });

}
function listar() {
    // Obtener la fecha actual
    let fechaActual = new Date();

    // Obtener el año y el mes
    let año = fechaActual.getFullYear();

    // Obtener el mes (agregando un cero adelante si es necesario)
    let mes = (fechaActual.getMonth() + 1).toString().padStart(2, '0');

    // Formatear la fecha en el formato deseado
    let fechaFormateada = `${año}-${mes}`;
    console.log(fechaFormateada)
    $.ajax({
        url: '../controlador/gastos.php',
        type: 'POST',
        dataType: 'json',
        data: {
            opcn: 'listarProductos',
            fecha: fechaFormateada
        },
    })
        .done(function (res) {
            let tr = ""
            res.forEach(el => {
                tr += `<tr>
            
            <td>${el.info}</td>
            <td>${el.valor}</td>
            <td>${el.fecha_normal}</td>
            <td>
                    <button type="button" class="btn btn-primary btn-sm editar" data-id= "${el.gasto_id}">Editar</button>  
            </td>
            </tr>`
            });
            $('#listar tbody').html(tr);
        })



        .fail(function () {
            console.log("error");
        })

}

$("#btnFiltrar").click(function () {
    // Obtén el valor de la fecha
    var fecha = $("#filtroMesAno").val();
    // var fechaFormateada = formatDateFromString(fecha);

    // Realiza una solicitud AJAX para enviar la fecha al controlador
    $.ajax({
        url: '../controlador/gastos.php',
        type: 'POST',
        data: { opcn: 'filtro', fecha: fecha },
        dataType: 'json',
    })
        .done(function (res) {
            let tr = ""
            res.forEach(el => {
                tr += `<tr>
            
            <td>${el.info}</td>
            <td>${el.valor}</td>
            <td>${el.fecha_normal}</td>
            <td>
                    <button type="button" class="btn btn-primary btn-sm editar" data-id= "${el.gasto_id}">Editar</button>  
            </td>
            </tr>`
            });
            $('#listar tbody').html(tr);
        })



        .fail(function () {
            console.log("error");
        })

});

$('#modCrearReserva').submit(function (e) {
    e.preventDefault();
    console.log("crear");

    // Obtén los datos del formulario
    var valorGasto = parseFloat($('#valorGasto').val());

    // Verifica si el valorGasto es mayor que la variable libres
    if (valorGasto > libres) {
        alert('No tienes los fondos suficientes para hacer este gasto');
        var confirmacion = confirm('¿Quieres plantear el gasto como un proyecto?');
        if (confirmacion) {
            // Redirige a la página de proyectos
            window.location.href = 'vistaProyectos.blade.php';
            return; // Sale de la función después de la redirección
        }
        return; // Sale de la función si la condición no se cumple
    }

    // Pregunta al usuario si quiere plantear el gasto como un proyecto




    // Continúa con la solicitud AJAX si el usuario no quiere plantearlo como proyecto
    var data = {
        descripcionGasto: $('#descripcionGasto').val(),
        valorGasto: valorGasto,
        opcn: 'crear'
    };

    // Realiza una solicitud AJAX para enviar los datos al controlador
    $.ajax({
        url: '../controlador/gastos.php',
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
            alert('Usuario creado con éxito');
            listar();
        },
        error: function (xhr, status, error) {
            // Maneja errores de la solicitud AJAX
            console.log('Error en la solicitud AJAX: ' + error);
        }
    });
});
