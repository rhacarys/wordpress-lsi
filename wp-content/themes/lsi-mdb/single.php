<?php get_header(); ?>

<main>
<div class="container wow slideInUp">
    <div class="row">
        <div class="col-md-12">
            <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            ?>
            
            <!--Post-->
            <?php get_template_part('content', get_post_format()); ?>
			<!--/.Post-->
            
            <hr>
            <br>
            <?php
            } // end while
            } // end if
            ?>
        </div>
		<?php if (!is_page()) { ?>
	        <div class="col-md-12 text-xs-right">
				<h5>Escrito por <a href=""><?php the_author(); ?></a>, <?php echo get_the_date(); ?></h5>
	        </div>
		<?php } ?>
    </div>
</div>
</main>

<?php get_footer(); ?>
