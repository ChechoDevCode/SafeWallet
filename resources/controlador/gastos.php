<?php  
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($method) {
        case 'POST':
            include_once('../models/gastos.php');
            switch ($_POST['opcn']){
                case 'listarProductos':
                    $respuesta = Gastos::listar($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'crear':
                    $respuesta = Gastos::crear($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'verXid':
                    $respuesta = Gastos::verXid($_POST);
                    echo json_encode($respuesta);
                    break;
                case 'update':
                    $respuesta = Gastos::update($_POST);
                    echo json_encode($respuesta);
                    break;
            }
    }