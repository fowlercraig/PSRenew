<?php Themewrangler::setup_page();get_header(/***Template Name: Partners */); ?>

<div class="row">
  <div class="desktop-10">
    <?php get_template_part('templates/page', 'header'); ?>
    <hr>
    <?php get_template_part('templates/page', 'content'); ?>
  </div>
</div>
<hr>
<?php include('templates/flex-content.php'); ?>

<?php if( have_rows('partners') ): ?>
<div class="partners-group row">
  <?php while ( have_rows('partners') ) : the_row(); ?>
  <?php include locate_template('snippets/partner-item.php');?>
  <?php endwhile; ?>
</div>
<hr>
<?php endif; ?>

<?php get_footer(); ?>