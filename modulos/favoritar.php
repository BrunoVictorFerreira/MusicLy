<?php
  error_reporting(0);
  $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
  session_save_path($serve_file.'cache/temp');
  session_start();
  include_once($serve_file.'php/banco.php');
session_start();
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  $id = $_SESSION['id'];
}else{
  echo "<script>window.location.href='index.php';</script>";
}

    $idFavoritado = $_POST['Afavoritar'];

    
    $sql = "INSERT into favoritos (id_Cad, id_Favoritado) values ('$id', '$idFavoritado')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Adicionado aos Favoritos!');window.location.href='/Musiclly/modulos/perfil.php';</script>";
    }else{
        echo "Erro ao favoritar!";
    }


?>