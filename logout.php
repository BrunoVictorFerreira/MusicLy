<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
session_save_path($serve_file.'cache/temp');
session_start();
include_once($serve_file.'php/banco.php');
    session_start();
    session_destroy();
    header("Location: logar.php");
?>