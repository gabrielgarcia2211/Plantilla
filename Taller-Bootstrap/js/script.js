$(document).ready(function(){

    $("#selh3").click(function () {
        $("#contenedor").load('selecciones/colombia.html')
    });
    $("#contacto").click(function () {
        $("#contenedor").load('contacto.html')
    });


    $("li a").click(function(event){

        event.preventDefault();
        if($(this).data('seleccion')!=null){
            $("#contenedor").load('selecciones/'+$(this).data('seleccion')+'.html');
        }

    });


});
 


