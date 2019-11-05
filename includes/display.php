<?php
$sqlImg = "SELECT * from cadastro where id=$id";
$resultImg = mysqli_query($conn, $sqlImg);
$row = mysqli_fetch_assoc($resultImg);
$img = $row['imagem'];
 if(isset($_SESSION['usuario'])){?>
        <div id="display" onClick="redirecionar()">

            <?php echo "<h6 id='usuarioDisplay'>".substr($usuario,0,5)."</h6>"; ?>
            <h6 id='painelDisplay'>Painel</h6>
    <img src="<?php echo $img ?>" id="imgDisplay"></div><?php }else{?>
            <div id="display" onClick="redirecionar2()">
                <h6 align="center" id="cadastreDisplay" onclick="">Cadastre-se</h6>
            <?php }?>
            </div>