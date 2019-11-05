

<div class="container">
        <!--NAV BAR ======================-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/musiclly/index.php"><img src="/musiclly/www/galeria/logo.png" class="img-fluid" id="logoNavBar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                             aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            $sqlImg = "SELECT * from cadastro where id=$id";
            $resultImg = mysqli_query($conn, $sqlImg);
            $row = mysqli_fetch_assoc($resultImg);
            $img = $row["imagem"];
            $qtdLetras = substr_count($row["usuario"]);
            if (isset($_SESSION["usuario"])) {
                echo '
                <div id="menuUsuarioExpandido">
                    <a href="/musiclly/painel.php" class="backMenuExpandido">Meu Perfil</a>
                    <a href="/musiclly/alterar_senha.php" class="backMenuExpandido">Alterar Senha</a>
                    <a href="/musiclly/alterar_usuario" class="backMenuExpandido">Alterar Usuário</a>
                    <a href="/musiclly/alterar_email" class="backMenuExpandido">Alterar Email</a>
                    <a href="/musiclly/notas.php" class="backMenuExpandido">Notas</a>
                    <a href="/musiclly/logout.php" class="backMenuExpandido">Logout</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" id="navBarNav">  
                        <a class="nav-item nav-link" href="/musiclly/cursos.php" id="entrarNavBar1"><div id="divMenu1">Cursos</div></a>
                        <a class="nav-item nav-link" href="/musiclly/index.php" id="entrarNavBar2"><div id="divMenu2">Inicio</div></a>
                        <a class="nav-item nav-link" href="/musiclly/contato.php" id="entrarNavBar3"><div id="divMenu3">Contato</div></a>

                        

                        <div>
                        <a class="nav-item nav-link" id="menuUsuario" href="#">'.substr($usuario,0,6).'<img src="' . $img . '" id="FotoPerfilMenu">
                        </a>
                    </div>';
            } else {
                echo '<div class="collapse navbar-collapse" id="navbarNavAltMarkup"><div class="navbar-nav">  
                    <a class="nav-item nav-link" href="/musiclly/cursos.php" id="entrarNavBar1"><div id="divMenu1">Cursos</div></a>
                    <a class="nav-item nav-link" href="/musiclly/index.php" id="entrarNavBar2"><div id="divMenu2">Inicio</div></a>
                    <a class="nav-item nav-link" href="/musiclly/contato.php" id="entrarNavBar3"><div id="divMenu3">Contato</div></a>

                    

                    <div style="background-color:#fafdff;z-index:2">
                        <a class="nav-item nav-link" id="menuUsuarioDeslogado" href="/musiclly/logar.php">Login</a>
                        <a class="nav-item nav-link" id="menuUsuarioDeslogadoCadastro"  href="/musiclly/cadastro.php">Cadastro</a>
                    </div>';
            }

            ?>
            

        </nav>

    </div>