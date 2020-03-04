
var val=0;
var cant=0;
function capturarMovimiento(boton){
    val+=400;
    var posicionInicial= $(boton).offset();
    var posicionLlegada= $('#p').offset();

    //console.log(posicionInicial);
    //console.log(posicionLlegada);

    var padre= $('.main');

    var pedido = $("<div></div>").attr('class', 'caja').css({

        position: 'absolute',
        background: '#000',
        width:'50px',
        height:'50px',
        'border-radius':'100%',
        top:posicionInicial.top,
        left:posicionInicial.left
        

    });
    $(padre).append(pedido);

    $(".caja").addClass('color');
    $(".caja").animate({
        left: posicionLlegada.left
    },val,function(){
        console.log(val);
        $(".caja").animate({
            top: posicionLlegada.top
        },val,function(){
                $(this).remove();
                $("#p").addClass("color2");
                cant++;
                console.log(cant);
                setTimeout(function () {
                $("#p").removeClass("color2");
                },1100);
                val-=400;
        });
    });
}

