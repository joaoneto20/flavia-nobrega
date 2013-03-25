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
                        <li><a href="indexUsuario.php"><i class="icon-home"></i> Início</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vídeo <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="listarVideoUsuario.php"><i class="icon-th-list"></i> Lista de Vídeo</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
                            <ul class="dropdown-menu">

                                <?php
                                require 'conexao.php';
                                $query = "SELECT id, nome, nomeUsuario, email FROM pessoa WHERE id != '' ORDER BY id DESC";
                                $exequery = mysql_query($query) or die(mysql_error());

                                if (mysql_num_rows($exequery) <= 0) {
                                    echo "<script type='text/javascript'> 
                                            alert('Tabela Vazia'); 
                                            </script>";
                                } else {

                                    $res = mysql_fetch_assoc($exequery);
                                    echo'<li><a href="alterarSenha.php?id=' . $res['id'] . '"><i class="icon-th-list"></i> Alterar Senha</a></li>';
                                }
                                ?>
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