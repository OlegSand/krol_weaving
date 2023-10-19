<?php
/*
Template Name: about elem
*/
?>

<?php get_header('page_news'); ?>

<main class="main news about-elem">
        
        <div class="news-name categoty-name">
            <p><?php the_title(); ?></p>
        </div>
        
        <?php get_template_part( 'post-template/post', 'childpages' )?>;
          
</main>

<?php get_footer(); ?>
