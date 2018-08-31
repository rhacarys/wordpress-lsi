<?php get_header(); ?>

<main>
<!--Main layout-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            ?>
            
            <!--Post-->
            <div class="post-wrapper">
				<!--Post data-->
				<h1 class="h1-responsive title first center wow slideInUp"><?php the_title(); ?></h1>
				<?php the_content ()?>
			</div>
            <!--/.Post-->
            
            <?php
            } // end while
            } // end if
            ?>
        </div>
		
    </div>
</div>
<!--/.Main layout-->
</main>

<?php get_footer(); ?>
