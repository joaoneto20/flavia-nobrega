<?php
include 'header.php';
include 'menuHor.php';
include 'menuVert.php';
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

<!-- the content -->
<br/>
<div id="xcontent">
    <div class="gallery-image-post gallery-image-l" style="margin-left: 8%;">
        <div class="gallery-light-ray-wrap">
            <img class="gallery-light-spot spot-l" src="images/background/spot-light.png" alt=""/>
        </div>
                <!-- .gallery-image-post -->
                <div style="min-width: 780px; min-height: 200px; display: table; float: left;">
                <?php
                require 'conexao.php';

                $m = mysql_query("select * FROM imagem ORDER BY id DESC LIMIT 24");

                while ($dados = mysql_fetch_assoc($m)) {

                    echo '
                        <div style="border-color: #FFFFFF #999999 #FFFFFF #CCCCCC; border-style: solid;border-width: 2px; margin-left:10px; margin-bottom: 10px; width:180px; height: 100px; float: left; display: table;">
                            <a rel="prettyPhoto[pp_gal]" href="imagem-fotos/' . htmlspecialchars(mysql_real_escape_string($dados['nome'])) . '" title="Peças em Porcelana Fria" >
                                <img src="imagem-fotos/' . htmlspecialchars(mysql_real_escape_string($dados['nome'])) . '" title="'. htmlspecialchars(mysql_real_escape_string($dados['titulo'])) . '" alt="Peças em porcelana" />
                            </a>
                        </div>';
                }
                ?>
                </div>
                <!-- /.gallery-image-post -->
    </div>
    <div class="clearfix"></div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            slideshow: 4000,
            autoplay_slideshow: true,
            theme: 'pp_default',
            social_tools: false
        });
    });
</script>
<?php
include 'footer.php';
?>