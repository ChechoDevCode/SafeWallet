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
        include_once('../config/init_db.php');
        session_start();
        $ID = $_SESSION['ID'];
        DB::$encoding = 'utf8';
       $insert = DB::query("INSERT INTO gastos
       (
                                        user_id,
                                        info,
                                        valor,
                                        fecha   
                                    )
                                    VALUES(
                                        $ID,
                                        '{$v['descripcionGasto']}',
                                        '{$v['valorGasto']}',
                                        NOW()

                                    )");
        return $insert;
    }


    public static function menos($v){
        include_once('../config/init_db.php');
        DB::$encoding = 'utf8';
        session_start();
        $ID = $_SESSION['ID'];
        $resultado = DB::query("SELECT SUM(valor) AS total_valor  FROM gastos WHERE user_id = $ID AND fecha = '{$v['fecha']}'");
        
        return $resultado; 
    }

}