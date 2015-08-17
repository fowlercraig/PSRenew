<?php Themewrangler::setup_page();get_header(); ?>

<div class="row">
  <div class="desktop-10">
    <?php get_template_part('templates/page', 'header'); ?>
    <hr>
    <?php get_template_part('templates/page', 'content'); ?>
  </div>
</div>
<hr>
<?php include('templates/flex-content.php'); ?>

<?php get_footer(); ?>