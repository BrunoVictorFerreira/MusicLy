$(function(){
	//Pesquisar os cursos sem refresh na página
	$("#usuario").focusout (function(){
		
		var usuario = $(this).val();
		
		//Verificar se há algo digitado
		if(usuario != ''){
			var dados = {
				usuario : usuario
			}		
			$.post('buscaUsuario.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$("#resultado").html(retorna);
			});
		}else{
			$("#resultado").html('');
		}		
	});
});