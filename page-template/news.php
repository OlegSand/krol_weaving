
<?php
/*
    Template Name: mews
*/
?>

<?php get_header('page'); ?>

<main class="main news">
        
        <div class="news-name categoty-name">
            <p><?php the_title(); ?></p>
        </div>
        <div class="news-wrapp container">
            <a href="<?php the_permalink(); ?>"></a>
        <!-- view posts -->
            <?php
                global $post;
                $args = array('category' => 2 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){
                    setup_postdata($post);
                    ?>
                    <a href="<?php the_permalink(); ?>" class="short_description">
                        <div class="news-card">
                                <?php the_post_thumbnail(); ?> <!--- post img ---> 
                                <div class="news-card__name"><?php the_title(); ?><!--- post name ---> 
                                </div>
                                <p class="news-card__text ">
                                    <?php the_excerpt(); ?>
                                </p>
                                <!--- post short descr ---> 
                            </div>
                    </a>
                <?php 
                wp_reset_postdata();
                ?>
        </div>
        
</main>

<?php get_footer(); ?>
