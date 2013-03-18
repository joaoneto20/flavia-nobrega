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
		<div id="xcontent">

			<!-- .gallery-image-post -->
                        <?php
                        require 'conexao.php';
                        
                        $m = mysql_query("select nome FROM imagem ");
                        
                        while ($dados = mysql_fetch_assoc($m)){
		
                        echo '
                        <div class="gallery-image-post gallery-image-l" style="padding-right:100px;">
                            <div class="gallery-light-ray-wrap">
                                <img class="gallery-light-spot spot-l" src="images/background/spot-light.png" alt=""/>
                                <img class="gallery-light-ray ray-l" src="images/background/white-lights/IES-wide.png" alt=""/>
                            </div>
                            <a class="lightbox" href="images/gallery_images/rt-011.jpg" title="" >
                                <img width="620" height="465" src="imagem-fotos/'.$dados['nome'].'" class="attachment-landscape wp-post-image" alt="Peças em porcelana" title="Peças em porcelana" />
                            </a>                               
                        </div>
                        ';
                        }
                        ?>
                        
			<!-- /.gallery-image-post -->


			<!-- .gallery-image-post -->
			<div class="gallery-image-post gallery-image-s" style="padding-right:100px;">
				<div class="gallery-light-ray-wrap">
					<img class="gallery-light-spot spot-s" src="images/background/spot-light.png" alt=""/>
					<img class="gallery-light-ray ray-s" src="images/background/white-lights/IES-square.png" alt=""/>
				</div>
				<a class="lightbox" href="images/gallery_images/rt-021.jpg" title="Abstract paint" >
					<div class="frame-wrap">
						<img class="gallery-frame frame-s" src="images/gallery/frames1/shadow-square.png" alt=""/>
					</div>
					<img width="500" height="500" src="images/gallery_images/rt-021.jpg" class="attachment-square wp-post-image" alt="Abstract paint" title="Abstract paint" />
				</a>
				<div class="pic-label-title" style = "color:#ffffff">Abstract paint</div>
			</div>
			<!-- /.gallery-image-post -->


			<!-- .gallery-image-post -->
			<div class="gallery-image-post gallery-image-l" style="padding-right:100px;">
				<div class="gallery-light-ray-wrap">
					<img class="gallery-light-spot spot-l" src="images/background/spot-light.png" alt=""/>
					<img class="gallery-light-ray ray-l" src="images/background/white-lights/IES-wide.png" alt=""/>
				</div>
				<a class="lightbox" href="images/gallery_images/rt-031.jpg" title="3d animation" >
					<div class="frame-wrap">
						<img class="gallery-frame frame-l" src="images/gallery/frames1/shadow-wide.png" alt=""/>
					</div>
					<img width="800" height="500" src="images/gallery_images/rt-031.jpg" class="attachment-landscape wp-post-image" alt="3d animation" title="3d animation" />
				</a>
				<div class="pic-label-title" style = "color:#ffffff">3d animation</div>
			</div>
			<!-- /.gallery-image-post -->


			<!-- .gallery-image-post -->
			<div class="gallery-image-post gallery-image-l" style="padding-right:100px;">
				<div class="gallery-light-ray-wrap">
					<img class="gallery-light-spot spot-l" src="images/background/spot-light.png" alt=""/>
					<img class="gallery-light-ray ray-l" src="images/background/white-lights/IES-wide.png" alt=""/>
				</div>
				<a class="lightbox" href="images/gallery_images/rt-041.jpg" title="Tiger battle" >
					<div class="frame-wrap">
						<img class="gallery-frame frame-l" src="images/gallery/frames1/shadow-wide.png" alt=""/>
					</div>
					<img width="800" height="500" src="images/gallery_images/rt-041.jpg" class="attachment-landscape wp-post-image" alt="Tiger battle" title="Tiger battle" />
				</a>
				<div class="pic-label-title" style = "color:#ffffff">Tiger battle</div>
			</div>
			<!-- /.gallery-image-post -->


			<!-- .gallery-image-post -->
			<div class="gallery-image-post gallery-image-s" style="padding-right:100px;">
				<div class="gallery-light-ray-wrap">
					<img class="gallery-light-spot spot-s" src="images/background/spot-light.png" alt=""/>
					<img class="gallery-light-ray ray-s" src="images/background/white-lights/IES-square.png" alt=""/>
				</div>
				<a class="lightbox" href="images/gallery_images/rt-051.jpg" title="Paint color" >
					<div class="frame-wrap">
						<img class="gallery-frame frame-s" src="images/gallery/frames1/shadow-square.png" alt=""/>
					</div>
					<img width="500" height="500" src="images/gallery_images/rt-051.jpg" class="attachment-square wp-post-image" alt="Paint color" title="Paint color" />
				</a>
				<div class="pic-label-title" style = "color:#ffffff">Paint color</div>
			</div>
			<!-- /.gallery-image-post -->


			<!-- .gallery-image-post -->
			<div class="gallery-image-post gallery-image-l" style="padding-right:100px;">
				<div class="gallery-light-ray-wrap">
					<img class="gallery-light-spot spot-l" src="images/background/spot-light.png" alt=""/>
					<img class="gallery-light-ray ray-l" src="images/background/white-lights/IES-wide.png" alt=""/>
				</div>
				<a class="lightbox" href="images/gallery_images/rt-061.jpg" title="Sunset" >
					<div class="frame-wrap">
						<img class="gallery-frame frame-l" src="images/gallery/frames1/shadow-wide.png" alt=""/>
					</div>
					<img width="800" height="500" src="images/gallery_images/rt-061.jpg" class="attachment-landscape wp-post-image" alt="Sunset" title="Sunset" />
				</a>
				<div class="pic-label-title" style = "color:#ffffff">Sunset</div>
			</div>
			<!-- /.gallery-image-post -->

			<div class="clearfix"></div>
                </div>
<?php
include 'footer.php';
?>