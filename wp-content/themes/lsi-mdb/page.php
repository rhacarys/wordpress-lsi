<?php get_header(); ?>

<main>
<!--Main layout-->
<div class="container">
    <div class="row">
        <!--Main column-->
        <div class="col-md-12 wow slideInUp">
            <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            ?>
            
            <!--Post-->
            <?php get_template_part('content', get_post_format()); ?>
            <!--/.Post-->
            
            <br>
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
