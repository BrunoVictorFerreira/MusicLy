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

    


    if(!($idFavoritado == 0)){
        $sql2 = "SELECT * FROM favoritos where id_Cad = $id and id_Favoritado = $idFavoritado";
        $result2 = mysqli_query($conn, $sql2);
        $rows = mysqli_num_rows($result2);
            if($rows == 0){
                $sql = "INSERT into favoritos (id_Cad, id_Favoritado) values ('$id', '$idFavoritado')";
                $result = mysqli_query($conn, $sql);
                echo "<script>alert('Adicionado aos Favoritos!');window.location.href='/Musiclly/painel.php';</script>";
            }else{
                echo "<script>alert('Já está adicionado aos seus favoritos!');window.location.href='/Musiclly/painel.php';</script>";
            }


    }else{
        echo "<script>alert('Selecione Alguem!');window.location.href='/Musiclly/painel.php';</script>";
    }


?>