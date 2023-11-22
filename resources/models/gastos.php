<?php
class Gastos {
  
    public static function listar($v){
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
        session_start();
        $ID = $_SESSION['ID'];
        $resultado = DB::query("SELECT *  FROM gastos WHERE user_id = $ID AND fecha = '{$v['fecha']}'");
        
        return $resultado; 
    }

    public static function crear($v){
        include_once('../../config/init_db.php');
        DB::$encoding = 'utf8';
        $correoExistente = DB::queryFirstField("SELECT correo FROM ludus_clientes WHERE documento = %s", $v['identificacion']);

    if ($correoExistente) {
        // Ya existe un usuario con ese correo, devuelve un mensaje de error
        return array('error' => 'Ya existe un CLiente con este documento de indetidad.');
    }
       $insert = DB::query("INSERT INTO ludus_clientes
       (
                                        nombre,
                                        apellido,
                                        tip_documento,
                                        documento,
                                        telefono,
                                        correo,
                                        direccion,
                                        ciudad
                                        
                                    )
                                    VALUES(
                                        '{$v['nombres']}',
                                        '{$v['apellidos']}',
                                        '{$v['tipo_identificacion']}',
                                        '{$v['identificacion']}',
                                        '{$v['telefono']}',
                                        '{$v['email']}',
                                        '{$v['direccion']}',
                                        '{$v['ciudad']}'

                                    )");
        return $insert;
    }

    public static function verXid($v){
        include_once('../../config/init_db.php');
        DB::$encoding = 'utf8';
        $resultado = DB::queryFirstRow("SELECT * FROM `ludus_clientes` WHERE cliente_id  = '{$v['id']}'");
        return $resultado;
    }

    public static function update($v){
        include_once('../../config/init_db.php');
        DB::$encoding = 'utf8';
       $update = DB::query("UPDATE
                                ludus_clientes
                            SET
                            nombre            = '{$v['nombres_edit']}',
                            apellido          = '{$v['apellidos_edit']}',
                            tip_documento     = '{$v['tipo_identificacion_edit']}',
                            documento         = '{$v['identificacion_edit']}',
                            telefono          = '{$v['telefono_edit']}',
                            correo            = '{$v['email_edit']}',
                            direccion         = '{$v['direccion_edit']}',
                            ciudad            = '{$v['ciudad_edit']}'
                            
                            WHERE  cliente_id         = '{$v['user_id_edit']}'");
        return $update;
    }

}