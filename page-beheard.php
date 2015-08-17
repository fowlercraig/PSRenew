<?php Themewrangler::setup_page();get_header(/***Template Name: Be Heard */); ?>

<div class="row">
  <div class="desktop-8">
    <?php get_template_part('templates/page', 'header'); ?>
    <hr>
    <?php get_template_part('templates/page', 'content'); ?>
  </div>
</div>
<?php include('snippets/beheard-tabs.php');?>

<?php get_footer(); ?>