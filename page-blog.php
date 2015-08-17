<?php Themewrangler::setup_page();get_header(/***Template Name: Blog */); ?>

<div class="row">
  <div class="desktop-8">
    <?php get_template_part('templates/page', 'header'); ?>
  </div>
</div>

<div class="row">
  <div class="desktop-8">
    <?php
      $temp = $wp_query;
      $wp_query = null;
      $wp_query = new WP_Query();
      $wp_query->query('showposts=6&post_type=post'.'&paged='.$paged);

      while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

    <?php include locate_template('entry.php'); ?>

    <?php endwhile; ?>

    <nav>
        <?php previous_posts_link('&laquo; Newer') ?>
        <?php next_posts_link('Older &raquo;') ?>
    </nav>

    <?php
      $wp_query = null;
      $wp_query = $temp;  // Reset
    ?>
  </div>
</div>

<?php get_footer(); ?>