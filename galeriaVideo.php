<?php
include 'header.php';
include 'menuHor.php';
include 'menuVert.php';
require 'conexao.php';
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
<div id="xcontent">

    <!-- .gallery-image-post -->
    <?php
    $m = mysql_query("select * FROM promocao ORDER BY id DESC LIMIT 5");

    while ($dados = mysql_fetch_assoc($m)) {

        echo '<div class="gallery-image-post gallery-image-l" style="padding-right:100px;">
                <div class="gallery-light-ray-wrap">
                    <img class="gallery-light-spot spot-l" src="images/background/spot-light.png" alt="">
                    <img class="gallery-light-ray ray-l" src="images/background/white-lights/IES-wide.png" alt=""/>
                </div>
                <div class="frame-wrap ie8-remove-frame">
                    <img class="gallery-frame frame-l" src="images/gallery/frames2/shadow-wide.png" alt="">
                </div>
                <span class="gallery-video">
            <p>
             '.stripslashes($dados['endereco']).'
            </p>
                 </span>
       </div>';
    }
    ?>
    <!-- /.gallery-image-post -->

    <div class="clearfix"></div>
</div>
<?php
include 'footer.php';
?>