<div class="gridlock-fluid">
<div id="instagram" class="row">

<?php 

  $args = array(
    'post_type'         => 'instagram', 
    'posts_per_page'    => 12, 
    'post_status'       => array('pending'),
    'paged'             => $paged,
    //'order'             => (get_query_var('sort')),
    'orderby'           => 'date',
  );

  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query($args); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

<div class="desktop-3 contained instagram-item">
  <?php the_content(); ?>
  <div class="publish">
    <div class="wrapper">
      <?php show_pending_button(); ?>
    </div>
  </div>
</div>

<?php endwhile; ?>

<nav class="desktop-12">
  <?php previous_posts_link('&laquo; Newer') ?>
  <?php next_posts_link('Older &raquo;') ?>
</nav>

<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>
</div>
</div>
