$(document).ready(function(){
$('.alert').hide();

    $("#verificarDatos").click(function(e){
        var usuarioIngre=$('#textUsuario').val();
        var contraseniaIngre=$('#textContrasenia').val();
        if(!usuarioIngre || !contraseniaIngre){
           $('.alert').show();
        }else{
            $('.alert').hide();
            /*var objDate={
                usuario:usuarioIngre,
                contrasenia:contraseniaIngre
              };
              $.post('../../persona.php', objDate, function(response){
                        alert(response);
              })
              e.preventDefault();*/
        }
        e.preventDefault();
       
    });

   
   

});