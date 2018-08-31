
<!--Footer-->
<footer class="page-footer center-on-small-only lsi-color-bg">

	<!--Footer Links-->
	<div class="container">
		<div class="row">
			<div class="col-md-6 flex-center wow slideInUp">
				<div>
				<div class="col-xs-4 center view hm-zoom">
					<a href=<?php echo get_site_url()?> >
	                    <img class="img-footer img-fluid" id="icon-lsi-footer" src=<?php echo get_template_directory_uri() . "/img/icon-lsi.png" ?> >
	                </a>
				</div>
				<div class="col-xs-4 center view hm-zoom">
	                <a href="http://www.ufcg.edu.br/index1.php" target="_blank">
	                    <img class="img-footer img-fluid" id="icon-ufcg-footer" src=<?php echo get_template_directory_uri() . "/img/icon-ufcg.png" ?> >
	                </a>
				</div>
				<div class="col-xs-4 center view hm-zoom">
					<a href="http://www.computacao.ufcg.edu.br/" target="_blank">
	                    <img class="img-footer img-fluid" id="icon-cc-footer" src=<?php echo get_template_directory_uri() . "/img/icon-cc.png" ?> >
	                </a>
				</div>
				</div>
			</div>
			
			<div class="col-md-6 text-md-right wow slideInUp">
				Laboratório de Sistemas de Informação<br>
				Universidade Federal de Campina Grande<br>
				R. Aprígio Veloso, 882, Bodocongó, Campina Grande - PB<br>
				Bloco CN - Salas 112, 113 e 114<br>
				<br>
			</div>
		
			<!-- <hr class="hidden-md-up"> -->
			<!-- <div class="col-md-3"> -->
				<?php //if ( is_active_sidebar( 'footer' ) ) : ?>
				<?php //dynamic_sidebar( 'footer' ); ?>
				<?php //endif; ?>
			<!-- </div> -->
			<!-- <hr class="hidden-md-up"> -->
			<!-- <div class="col-md-3 col-md-offset-1 center"> -->
				<!-- <h5 class="">PÁGINAS</h5> -->
			    <?php
			    /* wp_nav_menu( array(
				    'menu'              => 'footer1',
				    'theme_location'    => 'footer1',
				    'depth'             => 1
			    )
			    ); */
			    ?>
			<!-- </div> -->

		</div>
	</div>
	<!--/.Footer Links-->

	<!--Copyright-->
	<div class="footer-copyright">
		<div class="container-fluid wow slideInUp">
			© 2016 Copyright: 
				<a href=<?php get_site_url()?> >
					<span class="hidden-xs-down">Laboratório de Sistemas de Informação</span>
					<span class="hidden-sm-up">LSI</span>
				</a>, <a href="http://mdbootstrap.com/">MDB</a> - <a href="<?php echo get_site_url();?>/wp-admin" >Login</a>

		</div>
	</div>
	<!--/.Copyright-->

</footer>
<!--/.Footer-->


<?php wp_footer(); ?>

</body>
</html>  