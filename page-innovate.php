<?php Themewrangler::setup_page();get_header(/***Template Name: Innovate */); ?>

<div id="inno">

  <section id="inno-header" class="bg bg-color--purple" style="background-image: url(<?php the_field('background_image_top'); ?>);">
    <a id="inno-back" class="ss-gizmo ss-left btn btn-back" href="/">Back Home</a>
    <div id="inno-header_content" style="opacity:0;">
      <div class="row">
        <div class="desktop-6 tablet-4 mobile-2 centered text-center">
          <a id="inno-header_logo" href="#inno-headline"><img src="/assets/img/re_logo-white.png" class="img-responsive" alt="ReInnovate" /></a>
          <a href="#inno-headline" class="down ss-gizmo ss-navigatedown"></a>
        </div>
      </div>
    </div>
  </section>

  <section id="inno-headline">
     <div class="row">
      <div class="desktop-9 tablet-4 mobile-3 centered">
        <img src="/assets/img/tagline.png" class="img-responsive" alt="ReInnovate" />
      </div>
    </div>
  </section>

  <section id="inno-intro" class="bg bg-color--purple" style="background-image: url(<?php the_field('background_image_top'); ?>);">
     <div class="row">
      <div class="desktop-9 tablet-4 mobile-3 centered">
        <div class="wrapper">
          <?php the_field('main_description');?>
        </div>
      </div>
    </div>
  </section>

  <section id="inno-links" class="compact bg bg-color--purple" style="background-image: url(<?php the_field('background_image_top'); ?>);">
    <div class="row">
      <div class="desktop-9 tablet-4 mobile-3 centered">
        <div class="row">
          <a download target="blank" href="<?php the_field('real_estate'); ?>" class="desktop-4 tablet-6 mobile-3 text-center"><span class="wrapper">Real Estate <br>Sponsorship <small>Download</small></span></a>
          <a download target="blank" href="<?php the_field('public_spaces'); ?>" class="desktop-4 tablet-6 mobile-3 text-center"><span class="wrapper">Public Spaces <br>Sponsorship <small>Download</small></span></a>
          <a download target="blank" href="<?php the_field('general_sponsorship'); ?>" class="desktop-4 tablet-6 mobile-3 text-center"><span class="wrapper">General <br>Sponsorship <small>Download</small></span></a>
        </div>
      </div>
    </div>
    <div id="inno-links_cover"></div>
  </section>

  <section id="inno-tickets">
     <div class="row">
      <div class="desktop-9 tablet-4 mobile-3 centered">
        <h2>Ticket Information</h2>
        <?php the_field('event_brite_embed'); ?>
      </div>
    </div>
  </section>

  <section id="inno-tickets">
     <div class="row">
      <div class="desktop-9 tablet-4 mobile-3 centered">
        <h2>Sponsors</h2>
        <?php the_field('sponsors'); ?>
      </div>
    </div>
  </section>

  <section id="inno-footer" class="bg bg-scroll bg-color--purple" style="background-image: url(<?php the_field('background_image_bottom'); ?>);">
     <div class="row">
      <div class="desktop-9 tablet-4 mobile-3 centered">
        <div class="row">

          <div class="desktop-4 tablet-6 mobile-3">
            <h3>Contact Us</h3>
            <a href="mailto:hello@pershingsquarenew.com">hello@pershingsquarenew.com</a><br>
            <span>(213) 847-4970</span>
          </div>

          <?php echo do_shortcode('[mc4wp_form]' ); ?>

          <div class="desktop-4 tablet-6 mobile-3">
            <h3>Share This Page: <?php include locate_template('templates/sharepage.php' ); ?></h3>
            <h3>Lets Start a Conversation</h3>
          </div>

        </div>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>