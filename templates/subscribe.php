<?php if(get_field('display_subscribe_box', 'options')):?>

<div id="subscribe-box" class="white-popup-block mfp-hide modal-window">
  <?php the_field('content', 'options'); ?>
  <div class="form gridlock gridlock-fluid">
    <div class="row">
      <?php echo do_shortcode('[mc4wp_form]' ); ?>
    </div>
  </div>
</div>

<?php endif; ?>

