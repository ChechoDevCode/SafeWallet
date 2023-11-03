$(document).ready(function(){

   console.log("llegaste al java")
   
})

$('#registro').submit(function(e){
    e.preventDefault();
    
      var email = $('#email').val();
      var name = $('#name').val();
      var password = $('#password').val();
      if (password.length < 8) {
        console.log("La contraseña no es valida");
        Swal.fire({
          position: 'center',
          title: 'La contraseña debe tener como minimo 8 caracteres',
          showConfirmButton: false,
          timer: 150000
        })
        return;
      }
      var password_codificado = btoa(password);
      console.log(password_codificado)

  
    $.ajax({
        url: 'controlador/Registrarse.php',
        type: 'POST',
        dataType: 'json',
        data: {opcn: 'registrar', email:email, name:name, password_codificado: password_codificado },
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
          window.location.href = 'iniciarSesion.html';
      }
  });
  
  

  
  
   
    
  })