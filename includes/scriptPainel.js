$(document).ready(function () {
    $('#menuUsuarioExpandido').hide();

    $("#menuUsuario").click(function () {
        $("#menuUsuarioExpandido").slideToggle("slow");
    });

    $('#verMais1').hide();
    $('#verMais2').hide();
    $('#verMais3').hide();
    $('#verMais4').hide();
    $('#verMais5').hide();

    // -----------------------------
    $('#cursoCard1, #vermais1').mouseenter(function () {
        $('#cursoCard1').attr({
            src: "/musiclly/www/galeria/modulo_1_blur.jpg"
        });

        $('#verMais1').show();

        $('#verMais1').css({
            'z-index': '0'
        })


    }).mouseout(function () {
        $(this).attr({
            src: "/musiclly/www/galeria/modulo_1.jpg"
        });
        $('#verMais1').hide();
    });

    // -----------------------------
    $('#cursoCard2, #vermais2').mouseenter(function () {
        $('#cursoCard2').attr({
            src: "/musiclly/www/galeria/modulo_2_blur.jpg"
        });

        $('#verMais2').show();


    }).mouseout(function () {
        $(this).attr({
            src: "/musiclly/www/galeria/modulo_2.jpg"
        });
        $('#verMais2').hide();
    });
    // -----------------------------
    $('#cursoCard3, #vermais3').mouseenter(function () {
        $('#cursoCard3').attr({
            src: "/musiclly/www/galeria/modulo_3_blur.jpg"
        });

        $('#verMais3').show();


    }).mouseout(function () {
        $(this).attr({
            src: "/musiclly/www/galeria/modulo_3.jpg"
        });
        $('#verMais3').hide();
    });
    // -----------------------------
    $('#cursoCard4, #vermais4').mouseenter(function () {
        $('#cursoCard4').attr({
            src: "/musiclly/www/galeria/modulo_4_blur.jpg"
        });

        $('#verMais4').show();


    }).mouseout(function () {
        $(this).attr({
            src: "/musiclly/www/galeria/modulo_4.jpg"
        });
        $('#verMais4').hide();
    });
    // -----------------------------
    $('#cursoCard5, #vermais5').mouseenter(function () {
        $('#cursoCard5').attr({
            src: "/musiclly/www/galeria/modulo_5_blur.jpg"
        });

        $('#verMais5').show();


    }).mouseout(function () {
        $(this).attr({
            src: "/musiclly/www/galeria/modulo_5.jpg"
        });
        $('#verMais5').hide();
    });


});