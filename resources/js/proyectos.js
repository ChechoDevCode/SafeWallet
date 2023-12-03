$(document).ready(function () {
    console.log('proyectos')
    listar();

});

function listar() {

    $.ajax({
        url: '../controlador/proyectos.php',
        type: 'POST',
        dataType: 'json',
        data: {
            opcn: 'listarProductos',
        },
    })
        .done(function (res) {
            let tr = ""
            res.forEach(el => {
                tr += `<tr>
            
            <td>${el.objetivo}</td>
            <td>${el.costo}</td>
            <td>${el.categoria === 'prestamo' ? el.interes_anual : 'No aplica'}</td>
            <td>${el.aporte_mensual}</td>
            <td>${el.estado}</td>
            <td>${el.categoria}</td>


            <td>
                    <button type="button" class="btn btn-primary btn-sm editar" data-id= "${el.gasto_id}">Cancelar</button>  
            </td>
            </tr>`
            });
            $('#tabla tbody').html(tr);
        })



        .fail(function () {
            console.log("error");
        })

}

$('#modCrearReserva').submit(function (e) {
    e.preventDefault();
    console.log("crear");
    var mensual
    var valorGasto = parseFloat($('#valorGasto').val());
    var Interes = parseFloat($('#Interes').val());
    var Duracion = parseFloat($('#Duracion').val());
    var categoriaProyecto = $("#categoriaProyecto").val();

    if (categoriaProyecto == "prestamo") {

        console.log('llegas a prestamo')
        var tasaMensual = (Interes / 100) / 12;

        // Calcula la cuota mensual utilizando la fórmula de amortización
        mensual = (valorGasto * tasaMensual) / (1 - Math.pow(1 + tasaMensual, -Duracion));
        var valorGasto = mensual * Duracion;
    } else {
        mensual = valorGasto / Duracion
    }





    // Continúa con la solicitud AJAX si el usuario no quiere plantearlo como proyecto
    var data = {
        descripcionGasto: $('#descripcionGasto').val(),
        valorGasto: valorGasto.toFixed(2),
        Duracion: $('#Duracion').val(),
        categoriaProyecto: $('#categoriaProyecto').val(),
        Interes: $('#Interes').val(),
        mensual: mensual.toFixed(2),
        opcn: 'crear'
    };
    console.log(data)
    // Realiza una solicitud AJAX para enviar los datos al controlador
    $.ajax({
        url: '../controlador/proyectos.php',
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