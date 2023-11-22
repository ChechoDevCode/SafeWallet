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