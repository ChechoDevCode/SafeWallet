<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        include_once('../models/gastos.php');
        switch ($_POST['opcn']) {
            case 'listarProductos':
                $respuesta = Gastos::listar($_POST);
                echo json_encode($respuesta);
                break;
            case 'filtro':
                $respuesta = Gastos::listar($_POST);
                echo json_encode($respuesta);
                break;
            case 'crear':
                $respuesta = Gastos::crear($_POST);
                echo json_encode($respuesta);
                break;
            case 'menos':
                $respuesta = Gastos::menos($_POST);
                echo json_encode($respuesta);
                break;
                case 'update':
                    $respuesta = Gastos::eli($_POST);
                    echo json_encode($respuesta);
                    break;
        }
}
