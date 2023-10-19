<?php
/*
    Template Name: Contacts
    Template Post Type: page
*/
?>

<?php get_header( 'page_news' ); ?>

    <!-- <div class="museum-name page-name">
        <img src="<?php //the_field('img-bg'); ?>" alt="bg">
    </div> -->
</header>
<main class="main news content contact">
    <div class="news-name categoty-name">
        <p><?php the_title(); ?></p>
    </div>
    
    <div class="news-wrapp container">
        <div class="news-card justify">
            <address class="contact_details address"><span>Наша адреса:</span> <?php the_field('наш_адрес'); ?></address>
            <div class="contact_details phone"><span>Наш телефон:</span> <?php the_field('телефон'); ?></div>
            <div class="contact_details mail"><span>Наш e-mail:</span> <?php the_field('e-mail'); ?></div>
            <div class="contact_details info"><span>Додаткова інформація:</span> <?php the_field('дополнительная_информация'); ?></div>
            <p class="news-card__text"><?php the_content(); ?></p>
        </div>
    </div>
</main>






<?php get_footer(); ?>
