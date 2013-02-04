<?php
include 'header.php';
include 'menuHor.php';
include 'menuvert.php';
?>

<!--[if !IE]>
<!-->
<div id="loadingScreen">
    <!-- if not IE, we show the loading screen -->
    <div>
        <img src="images/icons/ajax-loader.gif" alt=""/>
        <br>Loading</div>
</div>
<!--<![endif]-->
<img class="home-spot" src="images/background/spot-light.png" alt=""/>
<img class="home-light" src="images/background/white-lights/IES-wide.png" alt=""/>

<div class="container page-wrapper">

    <!-- .post -->
    <article id="post-7" class="post-7 page type-page status-publish hentry post">

        <!-- .entry-header -->
        <header class="entry-header">

            <div class="entry-meta"></div>
        </header>

        <!-- .entry-content -->
        <div class="entry-content">
            <p>Testando Modal</p><br/>

            <a href="#" onclick="showBox()">Abrir Modal</a>
            <div id="box">
                <div>

                    <label>Login</label><br><br>
                    <form action="login.php" method="POST">
                        <label>Usuário: </label>
                        <input type="text" name="nomeUsuario"><br>
                        <label>Senha: </label>
                        <input type="password" name="senha"><br>
                        <input type="submit" value="Logar">
                    </form>

                    <a href="#" onclick="showBox()">fechar</a>

                </div>

            </div>

            <!-- .entry-meta -->
            <footer class="entry-meta"></footer>
    </article>
    <!-- /.post -->

    <div class="pagination pagination-centered"></div>

    <div class="comments"></div>
    <!-- /.content -->

</div>
<?php include 'footer.php' ?>