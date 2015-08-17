<div class="page-header <?php if ( is_front_page() ) { echo 'desktop-12 tablet-6 contained mobile-hide tablet-hide'; } ?>">
  <?php if( get_field( "alternate_title" ) ) { ?>
  <h1 class="entry-title"><?php the_field( "alternate_title" ); ?></h1>
  <?php } else { ?>
  <h1 class="entry-title"><?php the_title(); ?></h1>
  <?php } ?>
</div>
