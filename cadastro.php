<?php
include 'header.php';
include 'menuHor.php';
include 'menuVert.php';
?>
<!--[if !IE]>
<!-->
<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#cpf").mask("999.999.999-99");
});
</script>
<div id="loadingScreen">
    <!-- if not IE, we show the loading screen -->
    <div>
        <img src="images/icons/ajax-loader.gif" alt=""/>
        <br>Loading</div>
</div>
<!--<![endif]-->

<div class="container page-wrapper">

    <!-- .post -->
    <article id="post-9" class="post-9 page type-page status-publish hentry post">

        <!-- .entry-header -->
        <header class="entry-header">

            <div class="entry-meta"></div>
        </header>

			<!-- .entry-content -->
			<div class="entry-content">
				
                                <h3>Cadastre-se para visualizar nossas vídeo-aulas!</h3>
				<div class="row ">
					<div class="span4 ">
						<div class="span-space" >
							<h3>Informações de Contato</h3>
							<dl class="dl-horizontal">
								<dt>Rua:</dt>
								<dd>Alje Jerimskie 20, Nitro Ugaro</dd>
								<dt>Telefone:</dt>
								<dd>(83)3365.2014</dd>
								<dt>E-mail:</dt>
								<dd>contact@tagdiv.com</dd>
								<dt>Seg-Sex:</dt>
								<dd>09:00 &#8211; 18:00</dd>
								<dt>Sab:</dt>
								<dd>10:00 &#8211; 15:00</dd>
								<dt>Dom:</dt>
								<dd>Fechado</dd>
							</dl>
							<p>
								<span class="nodeLabelBox repTarget "></span>
							</p>
							
						</div>
					</div>
					<div class="span8 ">
						<div class="span-space" >
							<h3>Digite seus dados:</h3>
							<div class="wpcf7" id="wpcf7-f204-p9-o1">
								<form action="" method="post" class="wpcf7-form">
									<p>
										<span class="wpcf7-form-control-wrap Name">
											<input type="text" name="Nome" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark watermark" size="40" title="Nome" placeholder="Nome:">
										</span>
									</p>
									<p>
										<span class="wpcf7-form-control-wrap Email">
											<input type="text" name="Email" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required wpcf7-use-title-as-watermark watermark" size="40" title="Email" placeholder="E-mail:">
										</span>
									</p>
									<p>
										<span class="wpcf7-form-control-wrap Company">
											<input type="text" name="CPF" id="cpf" value="" class="wpcf7-form-control wpcf7-text wpcf7-use-title-as-watermark watermark" size="40" title="CPF" placeholder="CPF:">
										</span>
									</p>
                                                                        <p>
										<input type="submit" value="Enviar" class="wpcf7-form-control  wpcf7-submit">							
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