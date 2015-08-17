<div class="gridlock-fluid">
<div id="instagram" class="row">

<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=24&post_type=instagram'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

<div class="desktop-3 contained instagram-item">
  <?php the_content(); ?>
  <div class="publish">
    <?php if ( get_post_status ( $ID ) == 'pending' ) { show_draft_button(); } ?>
  </div>
</div>

<?php endwhile; ?>

<?php if (is_page( 353 ) ): ?>
<nav class="desktop-5 centered instagram-item">
  <?php previous_posts_link('&laquo; Newer') ?>
  <?php next_posts_link('Older &raquo;') ?>
</nav>
<? endif; ?>

<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>
</div>
</div>
