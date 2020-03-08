$(document).ready(function(){

    var part = "";
    console.log("w");
    $.getJSON('partidos.json', function (datos) {
        $("#contenido").html('');
        $.each(datos["partidos"], function (idx, partido) {
            $("#contenido").append(
                "<tr>" + "<td>" + partido["fecha"] + "</td><td>" + partido["equipo1"] + "</td><td>"
                + partido.equipo2 + "</td>" + "</tr>"

            );
        });

    });

});
 

