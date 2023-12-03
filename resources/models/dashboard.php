<?php
class Info
{

    public static function buscar_info()
    {
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
        session_start();
        $ID = $_SESSION['ID'];

        $resultado = DB::query("SELECT * FROM usuarios WHERE ID = $ID");

        return $resultado;
    }
    public static function update($v){
        include_once('../config/init_db.php');
        session_start();
        $ID = $_SESSION['ID'];
        DB::$encoding = 'utf8';
       $update = DB::query("UPDATE
                                usuarios
                            SET
                            nombre            = '{$v['nombre']}',
                            contraseña          = '{$v['contraseña']}',
                            correo     = '{$v['correo']}',
                            ingresos         = '{$v['ingresos']}',
                            gastos          = '{$v['gastos']}'
                            
                            WHERE  ID         =  $ID");
        return $update;
    }
}
