<?php
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'POST':
        include_once('../models/Registrarse.php');
        switch ($_POST['opcn']) {
            case 'registrar':
                $result = Registro::Registrarse($_POST);
                if ($result === "El correo ya existe") {
                    $response = ["error" => true, "message" => "El correo ya existe"];
                } elseif ($result === true) {
                    $response = ["error" => false, "message" => "Registro exitoso"];
                } else {
                    $response = ["error" => true, "message" => "Error en el registro"];
                }
                echo json_encode($response);
                break;
        }
        break;
}
?>
