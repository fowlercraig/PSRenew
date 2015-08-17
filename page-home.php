<?php Themewrangler::setup_page();get_header(/***Template Name: Home Page */); ?>

<div class="row">
  <div class="desktop-10">
    <?php get_template_part('templates/page', 'header'); ?>
  </div>
</div>

<?php if( have_rows('slideshow') ): ?>
<div id="home--slider">
  <div class="slider royalslider rsMinW">
    <?php while ( have_rows('slideshow') ) : the_row(); ?>

    <?php

      $image = get_sub_field('image');

      if( !empty($image) ):

        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        $size = 'large';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];

        $slideImage = '';

      endif;

    ?>

    <div class="slide" style="background-image: url(<?php echo $thumb; ?>);">
      <header>
        <div class="row">
          <div class="desktop-12 tablet-6 mobile-3">
            <div class="row">
              <div class="desktop-4 tablet-2 mobile-3 right text-right">
                <a href="#" class="prev button nav ss-gizmo ss-navigateleft"></a>
                <a href="#" class="next button nav ss-gizmo ss-navigateright"></a>
              </div>
              <div class="desktop-8 tablet-4 left">
                <h2><?php the_sub_field('title'); ?></h2>
                <?php the_sub_field('description'); ?>
                <a href="<?php the_sub_field('button_link'); ?>" class="button green"><?php the_sub_field('button_title'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div><!-- Slide -->
    <?php endwhile; ?>
  </div>
</div>
<?php endif; ?>

<?php include('templates/flex-content.php'); ?>

<?php get_footer(); ?>
