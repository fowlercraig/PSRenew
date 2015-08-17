<?php Themewrangler::setup_page();get_header(/***Template Name: Instagram Stage */); ?>

<div class="row">
  <div class="desktop-8">
    <?php get_template_part('templates/page', 'header'); ?>
    <hr>
    <?php get_template_part('templates/page', 'content'); ?>
  </div>
</div>

<?php get_template_part('snippets/instagram', 'items-pending' ); ?>

<?php get_footer(); ?>