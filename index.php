<?php Themewrangler::setup_page();get_header(); ?>

<div class="row">
  <div class="desktop-8">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php comments_template(); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
  </div>
</div>

<?php get_footer(); ?>