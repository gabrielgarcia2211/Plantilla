$(document).ready(function(){
$('.alert').hide();

    $("#verificarDatos").click(function(e){
        var usuarioIngre=$('#textUsuario').val();
        var contraseniaIngre=$('#textContrasenia').val();
        if(!usuarioIngre || !contraseniaIngre){
           $('.alert').show();
        }else{
            $('.alert').hide();
            $.ajax({
                url : 'controller/persona.php',
                data : { id : 123 },
                type : 'GET',
                success: function(respuesta) {
                    alert("volvio");
                   alert(respuesta);
                },
                error: function() {
                    alert("No se ha podido obtener la información");
                }
            });
        }
        e.preventDefault();
       
    });

   
   

});