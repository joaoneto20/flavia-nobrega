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
<!-- /#menu-gallery -->
<img class="home-spot" src="images/background/spot-light.png" alt=""/>
<img class="home-light" src="images/background/white-lights/IES-wide.png" alt=""/>

<div class="container page-wrapper">

    <!-- .post -->
    <article id="post-9" class="post-9 page type-page status-publish hentry post">

        <!-- .entry-header -->
        <header class="entry-header">

            <div class="entry-meta"></div>
        </header>

        <!-- .entry-content -->
        <div class="entry-content">
            <p>&nbsp;</p>
            <div class="iframe-wrap iframe-small ">
                <iframe width="1000" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Jo%C3%A3o+Pessoa+-+Para%C3%ADba,+Rep%C3%BAblica+Federativa+do+Brasil&amp;aq=0&amp;oq=jo%C3%A3o+&amp;sll=37.0625,-95.677068&amp;sspn=39.916234,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Jo%C3%A3o+Pessoa+-+Para%C3%ADba,+Rep%C3%BAblica+Federativa+do+Brasil&amp;t=m&amp;z=11&amp;ll=-7.11532,-34.861051&amp;output=embed"></iframe>
            </div>
            <div class="row ">
                <div class="span4 ">
                    <div class="span-space" >
                        <h3>Atenção:</h3>
                        <p class="dl-horizontal">
                            Aos nossos clientes,
                            gentileza preencher todos
                            os dados ao lado corretamente.
                            Assim que recebermos seu e-mail
                            entraremos em contato.
                        </p>
                        <p>
                            <span class="nodeLabelBox repTarget "></span>
                        </p>
                        <h3>Rede Social</h3>
                        <p>
                            <a href="link here">
                                <span class="social-wrap">
                                    <img class="social-icon social-facebook" src="images/icons/socials/social-facebook-small-white.png"/>
                                </span>
                            </a>
                            <a href="link here">
                                <span class="social-wrap">
                                    <img class="social-icon social-flickr" src="images/icons/socials/social-flickr-small-white.png"/>
                                </span>
                            </a>
                            <a href="link here">
                                <span class="social-wrap">
                                    <img class="social-icon social-twitter" src="images/icons/socials/social-twitter-small-white.png"/>
                                </span>
                            </a>
                            <a href="link here">
                                <span class="social-wrap">
                                    <img class="social-icon social-stumble" src="images/icons/socials/social-stumble-small-white.png"/>
                                </span>
                            </a>
                            <a href="link here">
                                <span class="social-wrap">
                                    <img class="social-icon social-rss" src="images/icons/socials/social-rss-small-white.png"/>
                                </span>
                            </a>
                    </div>
                </div>
                <div class="span8 ">
                    <div class="span-space" >
                        <h3>Entre em contato:</h3>
                        <div class="wpcf7" id="wpcf7-f204-p9-o1">
                            <form action="envioContato.php" method="POST" enctype="multipart/form-data" class="wpcf7-form">
                                <p>
                                    <span class="wpcf7-form-control-wrap Name">
                                        <input type="text" name="nome" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark watermark" size="40" title="Nome" placeholder="Nome">
                                    </span>
                                </p>
                                <p>
                                    <span class="wpcf7-form-control-wrap Email">
                                        <input type="text" name="email" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark watermark" size="40" title="Email" placeholder="E-mail">
                                    </span>
                                </p>
                                <p>
                                    <span class="wpcf7-form-control-wrap Subject">
                                        <textarea name="assunto" class="wpcf7-form-control  wpcf7-textarea" cols="92" rows="10" placeholder="Digite seu texto"></textarea>
                                    </span>
                                </p>
                                <p>
                                    <input type="submit" name="enviar" value="Enviar" class="wpcf7-form-control  wpcf7-submit">							
                                </p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
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
<?php
include 'footer.php';
?>