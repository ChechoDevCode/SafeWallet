$(document).ready(function(){

    console.log("llegaste al java")
    
 })
 
 $('#registro').submit(function(e){
     e.preventDefault();
     
     
       var Nombre = $('#Nombre').val();
       var Usuario = $('#Usuario').val();
       var Correo = $('#Correo').val();
       var Contraseña = $('#Contraseña').val();
       var Contraseña2 = $('#Contraseña2').val();
       var ingresos = $('#ingresos').val();
       var gastos = $('#gastos').val();


       if (Contraseña.length < 8) {
         console.log("La contraseña no es valida");
         Swal.fire({
           position: 'center',
           title: 'La contraseña debe tener como minimo 8 caracteres',
           showConfirmButton: false,
           timer: 150000
         })
         return;
       }
       if (Contraseña !== Contraseña2) {
        console.log("Las contraseñas no coinciden");
        Swal.fire({
            position: 'center',
            title: 'Las contraseñas no coinciden',
            showConfirmButton: false,
            timer: 150000
        });
        return;
    }
       var password_codificado = btoa(Contraseña);
       console.log(password_codificado)
 
   
     $.ajax({
         url: '../controlador/Registrarse.php',
         type: 'POST',
         dataType: 'json',
         data: {opcn: 'registrar', Nombre:Nombre, Usuario:Usuario,Correo:Correo , password_codificado: password_codificado,
         ingresos: ingresos,gastos: gastos },
     })
     .done(function(data) {
       if (data.error) {
           Swal.fire({
               position: 'center',
               icon: 'error',
               title: data.message,
               showConfirmButton: true,
               timer: 150000
           });
       } else {
           console.log("Registro exitoso");
           Swal.fire({
               position: 'center',
               icon: 'success',
               title: 'Se ha registrado el usuario con éxito',
               showConfirmButton: false,
               timer: 1500
           });
           window.location.href = 'vistaLogin.blade.php';
       }
   });
   
   
 
   
   
    
     
   })