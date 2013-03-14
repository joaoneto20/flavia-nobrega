        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#">Painel Administrativo</a>
                    <div class="nav-collapse collapse" style="height: 0px;">
                    <p class="navbar-text pull-right">
                        Bem vindo, <?php include 'mostraLogado.php'; ?>!
                    </p>
                    
                    <ul class="nav">
                        <li class="divider-vertical"></li>
                        <li><a href="indexAdmin.php"><i class="icon-home"></i> Início</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Imagem <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="cadastraImagem.php"><i class="icon-picture"></i> Cadastrar Imagem</a></li>
                            <li><a href="listarImagem.php"><i class="icon-th-list"></i> Listar Imagem</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vídeo <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="cadastraVideo.php"><i class="icon-facetime-video"></i> Cadastrar Vídeo</a></li>
                            <li><a href="listarVideos.php"><i class="icon-th-list"></i> Lista de Vídeo</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="cadastraUsuario.php"><i class="icon-user"></i> Cadastrar Usuário</a></li>
                            <li><a href="listarUsuario.php"><i class="icon-th-list"></i> Listar Usuário</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li><a href="logout.php"><i class="icon-off"></i> Sair</a></li>
                        <li class="divider-vertical"></li>
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