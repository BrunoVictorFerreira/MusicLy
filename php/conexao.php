<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "dbMusiclly";

    $conn = mysqli_connect($host, $user,$pass,$db);

    if(!$conn){
        echo "Erro de Conexao! ".conection_error();
    }


?>