<?php
    error_reporting(0);
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
    session_save_path($serve_file.'cache/temp');
    session_start();
    include_once($serve_file.'php/banco.php');

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senhaMd5 = MD5($senha);
    
    
    $sqlUsuario = "SELECT usuario from cadastro where usuario = '$usuario'";
    $resultUsuario = mysqli_query($conn, $sqlUsuario);
    $row = mysqli_num_rows($resultUsuario);
   
    if(!($row != 0)){
        $sql = "INSERT INTO cadastro(nome,sobrenome,email,usuario,senha) values('$nome', '$sobrenome', '$email','$usuario', '$senhaMd5')";
        $result = mysqli_query($conn, $sql);
        $linhas = mysqli_affected_rows($conn);
        if($linhas > 0){
            header("Location: /musiclly/logar.php");
        }
    }else{
        echo "<script>
            alert('Usuário Existente!');
            window.location.href='/musiclly/cadastro.php';
        </script>";
    }



?>