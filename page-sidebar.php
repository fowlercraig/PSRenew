<?php Themewrangler::setup_page();get_header(/***Template Name: Sidebar */); ?>

<div class="row">
   <div class="desktop-7 tablet-4 mobile-3">
      <?php get_template_part('templates/page', 'header'); ?>
      <hr>
      <?php get_template_part('templates/page', 'content'); ?>
      <hr class="invisible">
      
      <?php if( have_rows('partners') ): ?>
      <div class="partners-group row">
      <?php while ( have_rows('partners') ) : the_row(); ?>
      <?php include locate_template('snippets/partner-item.php');?>
      <?php endwhile; ?>
      </div>
      <hr>
      <?php endif; ?>

   </div>
   <div class="desktop-4 tablet-2 mobile-3 right">
      <?php include locate_template('snippets/page-sidebar.php' );?>
      <!--
      <div class="share">
         <hr>
         <hr class="divider">
         <span>Share this page:</span>
         <a target="blank" href="https://twitter.com/home?status=<?php the_field('share_copy'); ?> | <?php the_permalink(); ?>" class="share-link ss-social-circle ss-facebook"></a>
         <a target="blank" href="#" class="share-link ss-social-circle ss-twitter"></a>
         <hr class="divider">
      </div>
      -->
   </div>
</div>
<hr>
<?php include('templates/flex-content.php'); ?>

<?php get_footer(); ?>