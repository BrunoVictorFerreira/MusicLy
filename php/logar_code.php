<?php
      error_reporting(0);
      $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
      session_save_path($serve_file.'cache/temp');
      session_start();
      include_once($serve_file.'php/banco.php');
    session_start();

    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senhaMd5 = MD5($senha);

    $sql = "SELECT * from cadastro where usuario = '{$usuario}' and senha = '{$senhaMd5}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $usuario = $row['usuario'];
            $id = $row['id'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['id'] = $id;
        }
        header("Location: ../painel.php");
    }else{
        echo "ERRO!";
    }


?>