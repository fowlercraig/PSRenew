<div class="section dream">
  <?php while(has_sub_field('dreams')): ?>
  <div class="row">
    <div class="desktop-12 border-bottom">
    <div class="desktop-10 contained">

      <?php 

        $image = get_sub_field('dreams_background_image'); if( !empty($image) ): 
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        $size = 'thumbnail';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];

        endif; ?>

      <img src="<?php echo $thumb; ?>" class="left rnd" />
      <h3 class="title"><a href="<?php the_sub_field('dreams_url'); ?>"><i class="ss-icon ss-gizmo">upright</i> <?php the_sub_field('dreams_title'); ?></a></h3>
      <?php the_sub_field('dreams_description'); ?>
    </div>
    </div>
  </div>
  <?php endwhile; ?>
</div>
