<?php
    $conn = mysqli_connect("localhost","root","","dbMusiclly");

    if(!$conn){
        echo "Erro de conexão com o banco".mysqli_connect_error().mysqli_connect_errno();
    }

    mysqli_close($conn);

?>