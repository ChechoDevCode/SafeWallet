<?php
$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'POST':
        include_once('../models/dashboard.php');
        switch ($_POST['opcn']) {
            case 'cargar':
                $respuesta = Info::buscar_info();
                echo json_encode($respuesta);
                break;
            case 'editar':
                $respuesta = Info::update($_POST);
                echo json_encode($respuesta);
                break;
        }
}
