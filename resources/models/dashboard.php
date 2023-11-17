<?php
class Info {
  
    public static function buscar_info() {
    include_once('../config/init_db.php');
    DB::$encoding = 'utf8';
    session_start();
    $ID = $_SESSION['ID'];
    
    $resultado = DB::query("SELECT * FROM usuarios WHERE ID = $ID");
    
    return $resultado; 
}





   

}