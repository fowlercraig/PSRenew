<div class="tabbed">

  <div class="row">
    <div class="desktop-12">
      <menu class="tabber-menu">
        <?php $i = 1; while(has_sub_field('tab_group')): ?>
        <a href="#tab-<?php echo $i; ?>" class="button tabber-handle"><?php the_sub_field('tab_title'); ?></a>
        <?php $i++; endwhile; ?>
      </menu>
    </div>
  </div>

  <?php $t = 1; while(has_sub_field('tab_group')): ?>
  <div class="tabber-tab bg-green" id="tab-<?php echo $i; ?>">
    <div class="row">
      <header class="desktop-8">
        <?php the_sub_field('tab_content'); ?>
        <?php // if ( $i == 5 ) {  echo do_shortcode( '[gravityform id=1 title=false description=false ajax=true tabindex=49]' ); } ?>
        <?php if ( $i == 5 ) { ?>

        <!-- Change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://pps1.typeform.com/to/U4qdgp" data-text="Pershing Square Survey" style="width:100%;height:500px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
<div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by <a href="http://www.typeform.com/?utm_campaign=typeform_U4qdgp&amp;utm_source=website&amp;utm_medium=typeform&amp;utm_content=typeform-embedded&amp;utm_term=English" style="color: #999" target="_blank">Typeform</a></div>

        <?php } ?>
      </header>
    </div>

    <?php // If we're on the first tab ?>
    <?php if ( $t == 1 ) { ?>
    <div class="gridlock-fluid">
      <div class="row sized">
        <div class="comments clearfix">
        <?php $t = 1; while(has_sub_field('what_weve_heard')): ?>
        <div id="comment-<?php echo $i; ?>" class="beheard desktop-4 contained sizer-item">
          <div class="wrapper">
            <h3 class="title"><?php the_sub_field('wwh_title'); ?></h3>
            <?php the_sub_field('wwh_content'); ?>
          </div>
          <div class="bg-image" style="background-image: url(<?php the_sub_field('wwh_image'); ?>);"></div>
        </div>
        <?php $t++; endwhile; ?>
      </div>
      </div>
    </div>
    <? } ?>

    <?php // If we're on the third tab ?>
    <?php if ( $i == 6 ) {
      get_template_part('snippets/instagram', 'items' );
      get_template_part('templates/flex','content');
    } ?>

  </div>
  <?php $i++; endwhile; ?>

</div>