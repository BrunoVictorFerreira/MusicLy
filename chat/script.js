
    $(function(){
        comeca();
        $('#menuUsuarioExpandido').hide();

        $("#menuUsuario").click(function () {
            $("#menuUsuarioExpandido").slideToggle("slow");
        });
    });

    var timeI = null;
    var timeR = false;

    function para(){
        if(timeR){
            clearTimeout(timeI);
            timeR = false;
        }
    }

    function comeca(){
        para();
        lista();
    }

    function lista(){
        $.ajax({
            url : "/musiclly/chat/lista.php",
            success : function(textStatus){
                $('#lista').html(textStatus);
            }
        });
        timeI = setTimeout("lista()", 1000); // tempo de espera
        timeR = true;
    }
