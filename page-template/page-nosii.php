<?php
/*
    Template Name: Носії
    Template Post Type: page
*/
?>

<?php get_header( 'page_news' ); ?>



<main class="main news about-elem">
        
        <div class="news-name categoty-name">
            <p><?php the_title(); ?></p>
        </div>
        <?php //the_content() ?>;
        <!-- <div class="news-wrapp container"> -->
            <!-- card 1 start-->
            <?php get_template_part( 'post-template/post', 'childpages' )?>;
            <!-- card 1 end -->
            

        <!-- </div> -->
</main>




<?php get_footer(); ?>