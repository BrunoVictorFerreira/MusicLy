<?php
    include('php/conexao.php');
    session_start();
    if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    }
    $sqlPesq = "SELECT * from tbl_cad_curso where id_Cad=$id AND id_Curso=3";
    $resultPesq = mysqli_query($conn, $sqlPesq);
    $rows = mysqli_num_rows($resultPesq);
    if($rows == 0){
        $sql = "INSERT INTO tbl_cad_curso (id_Cad, id_Curso) values ($id,3)";
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('Cadastrado Com Sucesso!');window.location.href='painel.php';</script>";
    }else{
        echo "<script>alert('Já está Cadastrado nesse Curso!');window.location.href='painel.php';</script>";
    }
    

    

?>