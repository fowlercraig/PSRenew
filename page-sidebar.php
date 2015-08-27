<?php Themewrangler::setup_page();get_header(/***Template Name: Sidebar */); ?>

<div class="row">
   <div class="desktop-7 tablet-4 mobile-3">
      <?php get_template_part('templates/page', 'header'); ?>
      <hr>
      <?php get_template_part('templates/page', 'content'); ?>
   </div>
   <div class="desktop-4 tablet-2 mobile-3 right">
      <?php include locate_template('snippets/page-sidebar.php' );?>
   </div>
</div>
<hr>
<?php include('templates/flex-content.php'); ?>

<?php get_footer(); ?>