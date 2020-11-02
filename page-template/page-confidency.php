<?php
/*
    Template Name: Політика конфіденційності
    Template Post Type: page
*/
?>

<?php get_header( 'page_content' ); ?>

    </header>

<main class="main news content">
        <div class="news-name categoty-name">
            <p><?php the_title(); ?></p>
        </div>
        
        <div class="news-wrapp container">
            <div class="news-card justify">
                <!-- <div class="news-card__name"></div> -->
                <p class="news-card__text"><?php the_content(); ?></p>
            </div>
        </div>
    </main>






<?php get_footer(); ?>