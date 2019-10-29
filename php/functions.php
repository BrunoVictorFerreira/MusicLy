<?php
    error_reporting(0);
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
    session_save_path($serve_file.'cache/temp');
    include_once($serve_file.'php/banco.php');
    session_start();
    include_once($serve_file.'php/banco.php');
    session_start();
    if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    }
    
        $sql = "SELECT * from tbl_cad_curso where id_Cad = $id and id_Curso = 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        if($row == 0){
            echo "<script>alert('Cadastra-se');window.location.href='/musiclly/painel.php';</script>";
        }
    



   