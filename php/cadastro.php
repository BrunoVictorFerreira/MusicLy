<?php
    include_once("bd.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


    $query = mysqli_query($conn,"INSERT INTO cadastro(nome,sobrenome,email,usuario,senha) values ('$nome','$sobrenome','$email','$usuario','$senha')");
    
    if($query){
        echo "cadastrado com sucesso!";
    }else{
        echo "ERRO!";
    }


?>