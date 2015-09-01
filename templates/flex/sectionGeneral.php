<div class="section general <?php if( get_sub_field('part_of_timeline') ) { ?>timeline<? } ?> <?php if( get_sub_field('video_embed')){ echo 'video';} ?> <?php if(get_sub_field('general_background_color') == "white") { echo '';} ?><?php if(get_sub_field('general_background_color') == "yellow") { echo 'bg-yellow dark';} ?><?php if(get_sub_field('general_background_color') == "grey") { echo 'bg-grey';} ?><?php if(get_sub_field('general_background_color') == "green") { echo 'bg-green dark';} ?>">
  <div class="row">
    <?php if( get_sub_field('part_of_timeline') ) { ?>

    <div class="desktop-2 date-indicator text-center">
      <div class="rule-v top"></div>
      <h3 class="title"><?php the_sub_field('timeline_indicator'); ?></h3>
      <div class="rule-v bottom"></div>
    </div>
    <div class="desktop-8" id="panel-<?php echo $i; ?>">
      <h3 class="title"><?php the_sub_field('general_title'); ?></h3>
      <?php the_sub_field('general_description'); ?>
      <?php if(get_sub_field('video_embed')): ?>
      <div class="embed-container">
        <?php the_sub_field('video_embed'); ?>
      </div>
      <?php endif; ?>
    </div>

    <? } else { ?>

    <div class="desktop-8" id="panel-<?php echo $i; ?>">
      <h3 class="title"><?php the_sub_field('general_title'); ?></h3>
      <?php the_sub_field('general_description'); ?>
      <div class="embed-container">
        <?php the_sub_field('video_embed'); ?>
      </div>
    </div>

    <? } ?>
  </div>
</div>
