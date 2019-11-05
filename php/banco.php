<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "dbmusiclly";


    $conn = mysqli_connect($host, $user,$pass,$db);



    if(!$conn){
        echo "Erro de Conexao! ".conection_error();
    }

    date_default_timezone_set('America/Sao_Paulo');
    $globalData = date("d,m,Y");
    $globalHora = date("H:i");
    $conn->query('SET NAME utf-8');
    $conn->query('SET character_set_connection=utf8');
    $conn->query('SET character_set_cliention=utf8');
    $conn->query('SET character_set_results=utf8');   

?>