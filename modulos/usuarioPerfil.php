<?php

$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }else{
    echo "<script>window.location.href='index.php';</script>";
}

  if(isset($_POST['usuario'])){
    
    header('Location: ')

  }else{
      header('Location: /musiclly/painel.php');
  }
  

  

  

?>