<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        include_once('../models/proyectos.php');
        switch ($_POST['opcn']) {
            case 'listarProductos':
                $respuesta = Proyectos::listar($_POST);
                echo json_encode($respuesta);
                break;
            case 'filtro':
                $respuesta = Proyectos::listar($_POST);
                echo json_encode($respuesta);
                break;
            case 'crear':
                $respuesta = Proyectos::crear($_POST);
                echo json_encode($respuesta);
                break;
            case 'verXid':
                $respuesta = Proyectos::verXid($_POST);
                echo json_encode($respuesta);
                break;
            case 'update':
                $respuesta = Proyectos::update($_POST);
                echo json_encode($respuesta);
                break;
        }
}
