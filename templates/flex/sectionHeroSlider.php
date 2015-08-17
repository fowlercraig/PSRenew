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
      <div class="desktop-8" id="panel-<?php echo $i; ?>">
        <h3 class="title"><?php the_sub_field('fw_title'); ?></h3>
        <?php the_sub_field('fw_description'); ?>
      </div>
    </div>
  </div>
  <div class="gallery royalSlider rsMinW hero">
    <?php $images = get_sub_field('fw_gallery'); if( $images ): ?>
    <?php foreach( $images as $image ): ?>
    <div class="rsContent">
      <div class="imageMeta">
        <div class="row">
          <!--<div class="desktop-12">-->
          <div class="desktop-12" data-move-offset="40" data-move-effect="bottom" data-speed="200">
            <h3 class="title rsAbsoluteEl"><?php echo $image['title']; ?></h3>
            <span><?php echo $image['caption']; ?></span>
          </div>
        </div>
      </div>
      <?php if( get_sub_field('has_overlay') ) { echo "<div class='overlay'></div>";} ?>
      <img class="rsImg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>
