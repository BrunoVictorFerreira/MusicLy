<?php
      error_reporting(0);
      $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
      session_save_path($serve_file.'cache/temp');
      session_start();
      include_once($serve_file.'php/banco.php');
    session_start();
    if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    }
    $sqlPesq = "SELECT * from tbl_cad_curso where id_Cad=$id AND id_Curso=5";
    $resultPesq = mysqli_query($conn, $sqlPesq);
    $rows = mysqli_num_rows($resultPesq);
    if($rows == 0){
        $sql = "INSERT INTO tbl_cad_curso (id_Cad, id_Curso) values ($id,5)";
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('Cadastrado Com Sucesso!');window.location.href='/musiclly/painel.php';</script>";
    }else{
        echo "<script>alert('Já está Cadastrado nesse Curso!');window.location.href='/musiclly/painel.php';</script>";
    }
    

    

?>