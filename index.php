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
<img class="home-spot" src="images/background/spot-light.png" alt=""/>
<img class="home-light" src="images/background/white-lights/IES-wide.png" alt=""/>

<div class="container page-wrapper">

    <!-- .post -->
    <article id="post-57" class="post-57 page type-page status-publish hentry post">
        <!-- .entry-content -->
        <div class="entry-content">
            <h2 style="color: #85257f; text-align: center">
                Flávia Nóbrega | Artes em Porcelana
            </h2>
            <div class="slider-wrapper theme-default js-nivo-responsive">
                <img class="slider-mask" src="images/gallery/shadow-homepage.png" alt=""/>
                <div id="50a20f9942d18" class="nivoSlider">
                    <a href="galeria.php">
                        <img src="images/gallery_images/logo.jpg" alt="Flávia Nóbrega"/>
                    </a>
                </div>
            </div>

            <script>
                jQuery(document).ready(function($) {
                    $('#50a20f9942d18').nivoSlider({
                        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
                        animSpeed: 200, // Slide transition speed
                        pauseTime: 4000, // How long each slide will show
                        startSlide: 0, // Set starting Slide (0 index)
                        directionNav: true, // Next &#038; Prev navigation
                        directionNavHide: false, // Only show on hover
                        controlNav: false, // 1,2,3... navigation
                        controlNavThumbs: false, // Use thumbnails for Control Nav
                        controlNavThumbsFromRel: false, // Use image rel for thumbs
                        controlNavThumbsSearch: '.jpg', // Replace this with...
                        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
                        keyboardNav: true, // Use left &#038; right arrows
                        pauseOnHover: true, // Stop animation while hovering
                        manualAdvance: false, // Force manual transitions
                        captionOpacity: 0.8, // Universal caption opacity
                        prevText: 'Prev', // Prev directionNav text
                        nextText: 'Next'});
                });
            </script>

        </div>
    </article>
    <!-- /.post -->

    <div class="pagination pagination-centered"></div>

    <div class="comments"></div>
    <!-- /.content -->

</div>
<?php include 'footer.php'; ?>