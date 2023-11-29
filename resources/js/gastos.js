$(document).ready(function() {
    console.log('gastos')
     listar();
});


function listar(){
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
        data: {opcn:'listarProductos',
               fecha: fechaFormateada},
    })
    .done(function (res){
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
            
       
   
    .fail(function( ){
        console.log("error");
    })

}

$("#btnFiltrar").click(function() {
    // Obtén el valor de la fecha
    console.log("hola mundo")
    var fecha = $("#filtroMesAno").val();
    // var fechaFormateada = formatDateFromString(fecha);
    console.log(fecha)


    
    // Realiza una solicitud AJAX para enviar la fecha al controlador
    $.ajax({
        url: '../controlador/gastos.php',
        type: 'POST',
        data: {  opcn: 'filtro', fecha: fecha },
        dataType: 'json',
    })
    .done(function (res){
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
                
           
       
        .fail(function( ){
            console.log("error");
        })
    
});

$('#modCrearReserva').submit(function (e) {
    e.preventDefault();
    console.log("crear");
    // Obtén los datos del formulario
    var data = {
        descripcionGasto: $('#descripcionGasto').val(),
        valorGasto: $('#valorGasto').val(),
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
                return
            }
                // Aquí puedes manejar la respuesta exitosa, como cerrar el modal, mostrar un mensaje, etc.
                $('#modalAgregarReserva').modal('hide');
                alert('Usuario creado con éxito');
                listarProductos()
                
        },
        error: function (xhr, status, error) {
            // Maneja errores de la solicitud AJAX
            console.log('Error en la solicitud AJAX: ' + error);
        }
    });
});