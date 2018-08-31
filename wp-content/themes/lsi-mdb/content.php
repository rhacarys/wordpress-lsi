<div class="post-wrapper">
	<h1 class="h1-responsive title first"><?php the_title(); ?></h1>

	<div class="row">
		<div class="col-md-8">
			<div class="view overlay hm-white-light z-depth-1-half">
                <?php the_post_thumbnail( 'full', array( 'class'=> 'img-fluid z-depth-2')); ?>
                <div class="mask"></div>
			</div>
		</div>
	</div>
	<br>
	
	<?php
	if (is_single () or is_page ()) {
		the_content ();
	} else {
		the_excerpt ();?>
		<!--"Read more" button-->
		<a href="<?php echo get_permalink() ?>"><button class="btn btn-primary">Ler Mais</button></a>
	<?php } ?>
	
</div>