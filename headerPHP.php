<?php
    error_reporting(0);

    session_save_path($serve_file.'cache/temp');
    session_start();
    include_once($serve_file.'php/banco.php');
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $id = $_SESSION['id'];

    }else{
        echo "<script>window.location.href='/musiclly/cadastro.php';</script>";

    }