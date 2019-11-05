
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
        echo "<script>window.location.href='../cadastro.php';</script>";
    }

    $id_de = $id;
    $id_para = $_SESSION['id_para'];
    $sql = "SELECT * FROM(SELECT * FROM chat where (id_de = '$id_de' and id_para = '$id_para') or (id_de = '$id_para' and id_para = '$id_de') ORDER BY id DESC LIMIT 10) sub ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    $conta = mysqli_num_rows($result);
    if($conta <= 0){
        echo "<code>A conversa não vai se iniciar sozinha... porque não começa dizendo um 'OI'</code>";
    }else{
        while($row = mysqli_fetch_assoc($result)){
            if($row['id_de'] == $id_de){
                echo "<div align='right'><p class='chat-i'>".$row['mensagem']."</p></div>";

            }else if($row['id_de'] != $id_de){
                echo "<div align='left'><p class='chat-you'>".$row['mensagem']."</p></div>";

            }else{

            }


        }
    }
