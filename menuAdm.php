        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="indexAdmin.php">Área Administrativa</a>
                    
                    <div class="nav-collapse collapse" style="height: 0px;">
                    <p class="navbar-text pull-right">
                        Bem vindo, <?php include 'mostraLogado.php'; ?>!
                    </p>
                    
                    <ul class="nav">
                        <li><a href="cadastraImagem.php"><i class="icon-picture"></i> Cadastrar Imagem</a></li>
                        <li><a href="cadastraVideo.php"><i class="icon-facetime-video"></i> Cadastrar Vídeo</a></li>
                        <li><a href="listarVideos.php"><i class="icon-th-list"></i> Lista de Vídeo</a></li>
                        <li><a href="#" onclick="showBox()" ><i class="icon-user"></i> Cadastrar Usuário</a></li>
                        <li><a href="#"><i class="icon-off"></i> Sair</a></li>
                    </ul>
                    
                    </div>
                </div>
            </div>
        </div>
        <!--<div id="box" class="dialog"> 
            <div>

                <label>Login</label><br><br>
                <form action="cadastroUsuario.php" method="POST">

                    <label>Nome: </label>
                    <input type="text" name="nome"><br>
                    <label>Nome de Usuário: </label>
                    <input type="text" name="nomeUsuario"><br>
                    <label>E-Mail: </label>
                    <input type="text" name="email"><br>
                    <label>Senha: </label>
                    <input type="password" name="senha"><br>
                    <input type="submit" name="enviar" value="Cadastrar"><br>
                </form>

                <a href="#" onclick="showBox()">fechar</a>

            </div>

        </div>-->