<?php get_header(); ?>

<main>
<!--Main layout-->
<div class="container-fluid">
	<div class="col-md-12">
		<h1 class="h1-responsive title first center wow slideInUp">Projetos Atuais</h1>
	</div>
	<?php
	$query_filhas = array(
			'post_parent' => get_page_by_title("current")->ID,
			'order' => 'DESC',
			'post_type' => 'page',
			'post_status' => 'publish',
			'posts_per_page' => -1
	);
	$query = new WP_Query( $query_filhas );
	
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		$imagem = get_the_post_thumbnail_url();
		if ($imagem == false) {
			$imagem = get_template_directory_uri() . "/img/img-default.jpg";
		}
		?>
		<div class="col-xl-3 col-lg-4 col-sm-6 col-xs-12">
			<!--Card-->
			<div class="card alinhado wow slideInUp">
			
			    <!--Card image-->
			    <div class="view overlay hm-white-slight">
			        <img src=<?php echo $imagem?> class="img-fluid" alt="">
			        <a href=<?php echo the_permalink()?>>
			            <div class="mask"></div>
			        </a>
			        <!--Title-->
			        <h4 class="card-title overlay"><?php echo get_the_title()?></h4>
			    </div>
			    <!--/.Card image-->
			
			    <!--Card content-->
			    <div class="card-block">
			        <!--Text-->
			        <p class="card-text"><?php echo get_the_excerpt()?></p>
			        
			        <a href=<?php echo the_permalink()?> class="btn btn-primary bottom-right">Ver Mais</a>
			    </div>
			    <!--/.Card content-->
			
			</div>
			<!--/.Card-->
		</div>
	 <?php endwhile; endif; ?>
	 
	 
	 
	<div class="col-md-12">
		<h2 class="title center wow slideInUp">Projetos Finalizados</h2>
	</div>
	<?php
	$query_filhas = array(
			'post_parent' => get_page_by_title("past")->ID,
			'order' => 'DESC',
			'post_type' => 'page',
			'post_status' => 'publish',
			'posts_per_page' => -1
	);
	$query = new WP_Query( $query_filhas );
	
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
		$imagem = get_the_post_thumbnail_url();
		if ($imagem == false) {
			$imagem = get_template_directory_uri() . "/img/img-default.jpg";
		}
		?>
		<div class="col-xl-3 col-lg-4 col-sm-6 col-xs-12">
			<!--Card-->
			<div class="card alinhado wow slideInUp">
			
			    <!--Card image-->
			    <div class="view overlay hm-white-slight">
			        <img src=<?php echo $imagem?> class="img-fluid" alt="">
			        <a href=<?php echo the_permalink()?>>
			            <div class="mask"></div>
			        </a>
			        <!--Title-->
			        <h4 class="card-title overlay"><?php echo get_the_title()?></h4>
			    </div>
			    <!--/.Card image-->
			
			    <!--Card content-->
			    <div class="card-block">
			        <!--Text-->
			        <p class="card-text"><?php echo get_the_excerpt()?></p>
			        
			        <a href=<?php echo the_permalink()?> class="btn btn-primary bottom-right">Ver Mais</a>
			    </div>
			    <!--/.Card content-->
			
			</div>
			<!--/.Card-->
		</div>
	 <?php endwhile; endif; ?>
</div>
<!--/.Main layout-->
</main>

<?php get_footer(); ?>
