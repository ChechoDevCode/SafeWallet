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
                    <button type="button" class="btn btn-primary btn-sm editar" data-id= "${el.gasto_id}">Editar</button>  
            </td>
            </tr>`
            });
            $('#tabla tbody').html(tr);
        })



        .fail(function () {
            console.log("error");
        })

}