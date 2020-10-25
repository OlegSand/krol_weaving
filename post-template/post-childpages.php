<?php 

/**
 * Template Name: Childpages
 * Template Post Type: post
 */
?>



<?php $pages = get_pages(array('sort_column'  => 'menu_order','child_of' => get_post()->ID)); ?>
<div class="news-wrapp container">
  <?php foreach ($pages as $page): ?>


  <a href="<?php the_permalink($page->ID); ?>"class="news-card card-menu animate__zoomInDown">                                <!--- // TODO: задать стили для card-menu ---->
      <?php  echo get_the_post_thumbnail($page->ID, 'thumbnail'); 
            //the_post_thumbnail( $page->ID)?>
      <div class="news-card__name"><?php echo $page->post_title; ?></div>
      <?php // echo $page->post_content; ?>
  </a>
  <?php endforeach; ?>
  <?php wp_reset_postdata();
 ?>
  </div>

<!-- 
<div class="news-card">
    <img src="img/card 1.png" alt="card">
    <div class="news-card__name">Новина</div>
    <p class="news-card__text">Технологія ручного переборного ткацтва передбачає використання багаторемізних верстатів: тчуться такі рушники бавовняними нитками червоного та білого кольорів у складній техніці ручного перебору.</p>
</div> -->