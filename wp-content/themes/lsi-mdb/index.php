<?php get_header(); ?>

<main>
<div class="container">
	<div class="row">
		<h1 class="h1-responsive title first center wow slideInUp">Notícias</h1>
	</div>

    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
            
            <div class="post-wrapper wow slideInUp">
				<a href="<?php echo get_permalink() ?>"><h1 class="h1-responsive"><?php the_title(); ?></h1></a>
				<?php
				if (!is_page()) { ?>
					<h5>Escrito por <a href=""><?php the_author(); ?></a>, <?php echo get_the_date(); ?></h5>
				<?php } ?>
				
				<br>
				
				<a href="<?php echo get_permalink() ?>">
					<div class="view overlay hm-white-light z-depth-1-half">
	                    <?php the_post_thumbnail( 'full', array( 'class'=> 'img-fluid z-depth-2')); ?>
	                    <div class="mask"></div>
					</div>
				</a>
				<br>
				
				<?php
				if (is_single() or is_page()) {
					the_content ();
				} else {
					the_excerpt (); ?>
					<!--"Read more" button-->
					<a href="<?php echo get_permalink() ?>"><button class="btn btn-primary">Ler Mais</button></a>
				<?php } ?>
			</div>
            
            <hr>
            <br>
            <?php } } // end while / end if ?>
            <?php mdb_pagination(); ?>    
        </div>
        
        <!--Sidebar-->
		<div class="col-md-4 wow slideInUp">
		    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		    <?php dynamic_sidebar( 'sidebar' ); ?>
		    <?php endif; ?>
		</div>
		<!--/.Sidebar-->
		
    </div>
</div>
</main>

<?php get_footer(); ?>
