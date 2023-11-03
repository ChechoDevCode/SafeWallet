<?php 

  class Registro{


  	
  	public static function Registrarse($p) {
      include_once("../config/init_db.php");
      DB::$encoding = 'utf8';
  
      // Primero, verifica si el correo ya existe en la base de datos
      $existingUser = DB::queryFirstRow("SELECT id FROM usuarios WHERE correo = %s", $p['email']);
  
      if ($existingUser) {
          // El correo ya existe, devuelve un mensaje de error
          return "El correo ya existe";
      } else {
          // El correo no existe, puedes insertar el nuevo usuario
          $Insert = DB::query("INSERT INTO usuarios (nombre, contraseña, correo) VALUES (%s, %s, %s)", $p['name'], $p['password_codificado'], $p['email']);
  
          return $Insert;
      }
  }

  }



?>