<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senhaMd5 = MD5($senha);

    $sql = "INSERT INTO cadastro(nome,sobrenome,email,usuario,senha) values('$nome', '$sobrenome', '$email','$usuario', '$senhaMd5')";
    $result = mysqli_query($conn, $sql);
    $linhas = mysqli_affected_rows($conn);
    if($linhas > 0){
        header("Location: ../logar.php");
    }
    


?>