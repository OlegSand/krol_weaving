<?php
/*
Template Name: Про елемент
*/
?>

<?php get_header('page'); ?>

<main class="main news about-elem">
        <!-- <div class="museum-name page-name">
        </div> -->
        <div class="news-name categoty-name">
            <p><?php the_title(); ?></p>
        </div>
        
        <!-- <div class="news-wrapp container"> -->
            <!-- card 1 start-->
            <?php get_template_part( 'post-template/post', 'childpages' )?>;
            <!-- card 1 end -->
            

        <!-- </div> -->
</main>
<!-- вывод названий дочерних страниц с миниатюрами страницы id=33 т.е. про елемент-->




<?php get_footer(); ?>