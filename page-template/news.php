
<?php
/*
    Template Name: Новости
*/
?>

<?php get_header('page'); ?>


<main class="main news">
        
        <div class="news-name categoty-name">
            <p><?php the_title(); ?></p>
        </div>
        <div class="news-wrapp container">
        <?php
                global $post;
                $args = array('category' => 2 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){
                    setup_postdata($post);
                    ?>
                        <div class="news-card">
                                <!-- <img src="" alt="card"> -->
                                <?php the_post_thumbnail(); ?> <!--- выводим картинку поста ---> 
                                <div class="news-card__name"><?php the_title(); ?><!--- выводим наименование(заголовок) поста ---> 
                                </div>
                                <p class="news-card__text">
                                    <?php the_excerpt(); ?>
                                </p>
                                <!--- выводим краткое описание поста ---> 
                            </div>
                    <?php 
                }
                wp_reset_postdata();
                ?>
        </div>
        
</main>
<!--         
         -->

<?php get_footer(); ?>