const URLD="http://localhost/redSocial/";
$(document).ready(function(){
        //METODO PARA LA VERIFICACION DE DATOS DE PERSONA/INDEX
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
                $('#textUsuario, #textContrasenia').css({'border': "2px solid  rgba(250, 19, 19, 0.671)"});
                httpRequest(URLD + "personaControl/validarUsuario/" + usuarioIngre + "/" + contraseniaIngre, function(){
                    var aux = this.responseText;
                    if(aux){
                    llamdaEntrada("index");
                    }
            
            });
                
        }
        e.preventDefault();
           
        });
         //METODO PARA LA INGRESAR DE DATOS DE NUEVO/INDEX
        $("#registro").click(function(e){
            var nUsuario=$('#nUsuario').val();
            var nNombre=$('#nNombre').val();
            var nEmail=$('#nEmail').val();
            var nContraseña=$('#nContraseña').val();
            if(!nUsuario || !nNombre || !nEmail || !nContraseña){
                $('.respuesta').text("Por favor llene todos los campos");
                $('.alert').show();
                return;
            }
            $('.alert').hide();
            httpRequest(URLD + "personaControl/guardarUsuario/" + nUsuario + "/" + nNombre + "/" + nEmail + "/" + nContraseña , function(){
             
              console.log(this.responseText);
                  
            });
            console.log("hola");
        e.preventDefault();
           
        });


          //METODO PARA LA ACTUALIZAR CONTRASEÑA RECUPERARC/INDEX
          $("#actualizarRc").click(function(e){
            $('.alert').show();
            var recuUsuario=$('#recuUsuario').val();
            var recuEmail=$('#recuEmail').val();
            var recuNueva=$('#recuNueva').val();
            if(!recuUsuario || !recuEmail || !recuNueva){
                $('.respuesta').text("Por favor llene todos los campos");
                $('.alert').show();
                return;
            }
            $('.alert').hide();
            httpRequest(URLD + "personaControl/cambiarContraseña/" + recuUsuario + "/" + recuEmail + "/" + recuNueva  , function(){
             
                $('.respuesta').text(this.responseText);
                $('.alert').show();
                  
            });
            console.log("hola");
        e.preventDefault();
           
        });
    
});

function llamdaEntrada(guia){
   //console.log(URLD + "personaControl/render/" + guia);
    window.location.href = URLD + "perfilControl/render/" + guia;
}

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