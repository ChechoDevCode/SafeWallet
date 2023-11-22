<?php
session_start();
print_r('se llama');
// Elimina las variables de sesión
unset($_SESSION['ID']);


// Redirige al usuario a la página de inicio de sesión o a la página deseada
header("Location: ../views/index.blade.php"); // Cambia "login.php" a la página a la que deseas redirigir
exit;
?>