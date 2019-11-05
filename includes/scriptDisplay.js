$(function(){
    $(window).scroll(function(){
        var topo = $(window).scrollTop();
        if(topo > 100){
            $('#display').fadeIn('5000');
        }else{
            $('#display').fadeOut('5000');
        }
    });
});

function redirecionar(){
    window.location.href="/musiclly/painel.php";
}
function redirecionar2(){
    window.location.href="/musiclly/cadastro.php";
}