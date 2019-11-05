<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
session_save_path($serve_file.'cache/temp');
include_once($serve_file.'php/banco.php');

session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
}else{
    echo "<script>window.location.href='/musiclly/cadastro.php';</script>";
}


if(isset($_POST['mensagem'])){
    $mensagem = $_POST['mensagem'];
    $id_de = $id;
    $idPara = $_POST['id_para'];
    if(empty($mensagem)){
        echo "<code>Digite a sua mensagem</code>";
    }else{
        $sql = "INSERT INTO chat(id_de, id_para, mensagem) values ('$id_de','$idPara','$mensagem')";
        $result = mysqli_query($conn,$sql);

        if($result){
            header("Location: chat.php?id_de=".$id_de."&idPara=".$idPara."");
        }else{
            echo "<code>Erro ao enviar a mensagem!</code>";
        }
    }
}

?>
