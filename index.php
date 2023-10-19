<?php get_header(); ?>
 
<main class="main news">
        <div class="news-name categoty-name">
            <p>Новини</p>
        </div>
        
        <div class="news-wrapp container">
            <a href="<?php the_permalink(); ?>"></a>
            <?php
                global $post;
                $args = array('category' => 2 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){
                    setup_postdata($post);
                    ?>
                        <div class="news-card">
                                <?php the_post_thumbnail(); ?> 
                                <div class="news-card__name"><?php the_title(); ?>
                                </div>
                                <p class="news-card__text">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                    <?php 
                }
                wp_reset_postdata();
                ?>
        </div>
    </main>
<?php ?>
<?php get_footer(); ?>
