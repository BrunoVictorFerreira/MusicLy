<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
session_save_path($serve_file.'cache/temp');
session_start();
include_once($serve_file.'php/banco.php');
if(isset($_SESSION['usuario'])){
    session_start();
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
    $sqlStatus = "UPDATE cadastro set status = 0 where id = $id";
    $resultStatus = mysqli_query($conn, $sqlStatus);
    session_destroy();
    header("Location: logar.php");

}else{
    echo "<script>window.location.href='index.php';</script>";
}
?>