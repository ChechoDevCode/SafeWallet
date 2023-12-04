$(document).ready(function () {
    console.log('gastos')
    var gastos_mes
    var libres
    listar();
    gastos_acu()

});

function gastos_acu() {
    let fechaActual = new Date();

    // Obtener el año y el mes
    let año = fechaActual.getFullYear();

    // Obtener el mes (agregando un cero adelante si es necesario)
    let mes = (fechaActual.getMonth() + 1).toString().padStart(2, '0');

    // Formatear la fecha en el formato deseado
    let fechaFormateada = `${año}-${mes}`;
    $.ajax({
        url: '../controlador/gastos.php',
        type: 'POST',
        data: { opcn: 'menos', fecha: fechaFormateada },
        dataType: 'json'
    })
        .done(function (data) {

            // Actualiza el contenido del elemento con id "nombre_usuario" con el mensaje
            //cartas ideal
            gastos_mes = data[0].total_valor
            cargarinfo(gastos_mes)
          
        });

}

function cargarinfo(gastos_mes) {
    $.ajax({
        url: '../controlador/dashboard.php',
        type: 'POST',
        data: { opcn: 'cargar' },
        dataType: 'json'
    })
        .done(function (data) {

            libres = data[0].ingresos * 0.30
            libres = libres - gastos_mes
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
                    <button type="button" class="btn btn-primary btn-sm editar" data-id= "${el.gasto_id}" data-fecha= "${el.fecha_normal}">Eliminar</button>  
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
            <button type="button" class="btn btn-primary btn-sm editar" data-id= "${el.gasto_id}" data-fecha= "${el.fecha_normal}">Eliminar</button>  

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
            alert('Gasto creado con éxito');
            listar();
            gastos_acu()
        },
        error: function (xhr, status, error) {
            // Maneja errores de la solicitud AJAX
            console.log('Error en la solicitud AJAX: ' + error);
        }
    });
});

$('body').on('click', '.editar', function () {
    // Capturar los valores de data-id y data-fecha
    let id = $(this).data("id");
    let fechaGasto = new Date($(this).data("fecha") + "T00:00:00");  // Agregar hora para asegurar igualdad
    let fechaActual = new Date();
    
    // Verificar si las fechas son iguales (sin tener en cuenta la hora)
    if (fechaGasto.toISOString().split('T')[0] === fechaActual.toISOString().split('T')[0]) {
        console.log('Las fechas son iguales.');
        let datos = [];
        datos.push({name:'opcn',value:'update'})
        datos.push({name:'id',value:id})

        let confirmacion = confirm('¿Estás seguro de borrar este elemento?');
        if (confirmacion) {
    $.ajax({
        url: '../controlador/gastos.php',
        type: 'POST',
        dataType: 'json',
        data: datos,
    })
    .done(function(res) {
        

        listar()
    })
    .fail(function() {
        console.log("error");
    })  
}else{
    return
}

        // Aquí puedes realizar la lógica para eliminar el gasto.
    } else {
        alert('No se puede borrar este gasto. ya que paso el limite de un dia');

        // Aquí puedes mostrar un mensaje de error o realizar otras acciones según tus necesidades.
    }
});
