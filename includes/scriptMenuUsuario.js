$(function(){
    $('#menuUsuarioExpandido').hide();

    $("#menuUsuario").click(function () {
        $("#menuUsuarioExpandido").slideToggle("slow");
    });
});