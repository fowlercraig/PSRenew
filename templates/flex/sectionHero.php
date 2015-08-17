<?php 
  
  $image = get_sub_field('hero_image'); 

  if( !empty($image) ): 
  
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];

  $size = 'large';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];

endif; ?>

<div class="section hero overlayed" style="background-image: url(<?php echo $thumb; ?>);">
  <div class="meta">
    <div class="row">
      <div class="desktop-6" id="panel-<?php echo $i; ?>">
        <h3 class="title"><?php the_sub_field('hero_image_title'); ?></h3>
        <?php the_sub_field('hero_image_description'); ?>
      </div>
    </div>
  </div>
  <?php if( get_sub_field('hero_overlay') ) { echo "<div class='overlay'></div>";} ?>
</div>
