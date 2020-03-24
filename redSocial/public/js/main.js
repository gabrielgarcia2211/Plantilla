const URLD="http://localhost/redSocial/";
$(document).ready(function(){
    $('.alert').hide();
    
        $("#verificarDatos").click(function(e){
            var usuarioIngre=$('#textUsuario').val();
            var contraseniaIngre=$('#textContrasenia').val();
            if(!usuarioIngre || !contraseniaIngre){
               $('.respuesta').text("Por favor llene todos los campos");
               if(!usuarioIngre){
                    $('#textUsuario').css({'border': "2px solid  red"});
               }else{
                    $('#textContrasenia').css({'border': "2px solid  red"});
               }
               $('.alert').show();
            }else{
                $('.alert').hide();
                $('#textUsuario, #textContrasenia').css({'border': "2px solid  rgb(2, 187, 101)"});
                httpRequest(URLD + "personaControl/validarUsuario/" + usuarioIngre + "/" + contraseniaIngre, function(){
                    $('.respuesta').text(this.responseText);
                    $('.alert').show();
                });
                
            }
            e.preventDefault();
           
        });
    
    });

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}