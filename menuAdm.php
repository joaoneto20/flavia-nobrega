<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Painel Administrativo</a>
            <div class="nav-collapse collapse" style="height: 0px;">
                <p class="navbar-text pull-right">
                    Bem vindo, <?php include 'mostraLogado.php'; ?>!
                </p>
                <nav>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vídeo Promoção <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="cadVideoPromo.php"><i class="icon-facetime-video"></i> Cadastrar Vídeo</a></li>
                                <li><a href="listarVideosPromo.php"><i class="icon-th-list"></i> Lista de Vídeo</a></li>
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
                </nav>
            </div>
        </div>
    </div>
</div>