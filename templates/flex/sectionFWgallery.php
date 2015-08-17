<div class="section fw_gallery overlayed">
  <div class="meta">
    <div class="row">
      <div class="desktop-4">
        <?php the_sub_field('fw_description'); ?>
      </div>
    </div>
  </div>
  <div class="gallery royalSlider rsMinW" style="height:550px">
    <?php $images = get_sub_field('fw_gallery'); if( $images ): ?>
    <?php foreach( $images as $image ): ?>
    <div class="rsContent">
      <div class="imageMeta">
        <div class="row">
          <div class="desktop-12" data-fade-effect="false" data-move-offset="40" data-move-effect="bottom" data-speed="200">
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
