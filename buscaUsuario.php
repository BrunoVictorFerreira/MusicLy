<?php
	
            //Incluir a conexão com banco de dados
			include_once('php/conexao.php');
	
			//Recuperar o valor da palavra
			$usuario = $_POST['usuario'];
			
			//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
			$usuario = "SELECT * FROM cadastro WHERE usuario = '$usuario'";
			$resultado_usuario = mysqli_query($conn, $usuario);
			
			if(!(mysqli_num_rows($resultado_usuario) == 0)){
				echo "USUARIO EXISTENTE!";
			}
?>