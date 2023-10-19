<?php
/*
    Template Name: Content
    Template Post Type: page
*/
?>

<?php get_header( 'page_content' ); ?>

        <div class="museum-name page-name">
            <?php the_post_thumbnail() ?>
        </div>
    </header>

    <main class="main news content">
        <div class="news-name categoty-name">
            <p><?php the_title(); ?></p>
        </div>
        
        <div class="news-wrapp container">
            <div class="news-card justify">
                <p class="news-card__text"><?php the_content(); ?></p>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
