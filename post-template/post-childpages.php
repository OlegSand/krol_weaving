<?php 

/**
 * Template Name: Childpages
 * Template Post Type: post
 */
?>

<?php $pages = get_pages(array('sort_column'  => 'menu_order','child_of' => get_post()->ID)); ?>
<div class="news-wrapp container">
  <?php foreach ($pages as $page): ?>

  <a href="<?php the_permalink($page->ID); ?>"class="news-card card-menu animate__zoomIn">
      <?php  echo get_the_post_thumbnail($page->ID, 'thumbnail');            
      <div class="news-card__name"><?php echo $page->post_title; ?></div>
  </a>
  
  <?php endforeach; ?>
  <?php wp_reset_postdata();
 ?>
  </div>
