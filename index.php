<?php get_header(); ?>

<main class="main news">
        <div class="news-name categoty-name">
            <p>Новини</p>
        </div>
        
        <div class="news-wrapp container">
            <a href="<?php the_permalink(); ?>"></a>
        <!-- перебор постов в цикле и вывод из категории 2 т. е. рубрика news -->
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
            
            <!-- card end -->
        </div>
    </main>
<?php ?>
<?php get_footer(); ?>
