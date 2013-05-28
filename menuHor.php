<div id="menu">
    <!-- the menu -->
    <div class="main-menu">
        <a class="header-logo-link" href="index.php">
            <img src="images/header/logo1.png" alt="Flávia Nobrega"/>
        </a><ul id="menu-header" class="js-jquery-dropdown">
            <li id="menu-item-2010" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-57 menu-item-2010">
                <a href="index.php">Home</a>
            </li>
            <li id="menu-item-2009" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2009">
                <a href="sobre.php">Sobre</a>
            </li>
            <li id="menu-item-2008" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2008">
                <a href="contato.php">Contato</a>
            </li>
            <li id="box" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2008">
                <a href="#janela1" rel="modal">Login</a>
                
                <div class="window" id="janela1">
                    <div>
                    <form action="login.php" method="POST">
                        <label style="color: white;">Usuário: </label>
                        <input type="text" name="nomeUsuario"><br>
                        <label style="color: white">Senha: </label>
                        <input type="password" name="senha"><br><br>
                        <input type="submit" value="Logar">
                    </form>
                        <a href="#" class="fechar"><strong>X Fechar</strong></a>
                        
                    </div>
                </div> 
                <div id="mascara"></div>
                
            </li>
        </ul>
        <div class="bottom-line"></div>
    </div>
    <!-- /.main-menu -->

</div>
<!-- /#menu -->
