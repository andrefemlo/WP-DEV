<?php require('meta.php'); get_header(); ?>
    <div id="primary" class="mt-4 mb-4 site-content content-area container">
        <?php
            if ( have_posts() ):
                while (have_posts()): the_post(); 
                    the_content();
                endwhile;
            endif;
        ?>
    </div>
<?php get_footer(); ?>