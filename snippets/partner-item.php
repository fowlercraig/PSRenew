<div class="desktop-12 tablet-6 mobile-3">

   <h3 class="item-title green"><?php the_sub_field('partner_group_title'); ?></h3>
   <hr class="invisible">

   <?php if( have_rows('partner_group') ): ?>
   <div class="partners-list row">
   <?php while ( have_rows('partner_group') ) : the_row(); ?>
   
   <div class="desktop-3 tablet-2 mobile-half">
      <a target="blank" href="<?php the_sub_field('partner_url'); ?>">
         <img src="<?php the_sub_field('partner_logo'); ?>" class="img-responsive" alt="<?php the_sub_field('partner_name'); ?>">
      </a>
   </div>

   <?php endwhile; ?>
   </div>
   <hr>
   <?php endif; ?>

</div>
