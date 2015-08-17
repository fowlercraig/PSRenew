</div>
</div></section><!--Content-->

<footer id="foot">
  <div class="row">
    <?php echo do_shortcode('[mc4wp_form]'); ?>
    <div class="desktop-8 text-right">
      <a href="/about">About Us</a>
      <a href="/about">Contact</a>
      <a class="green" id="logo" href="/"><?php bloginfo('name'); ?> &copy; <?php the_time('Y'); ?></a></p>
    </div>
  </div>
</footer><!--Footer-->

<?php if (isset($_GET['thanks'])) { echo 'fudge'; } ?>
<?php include locate_template('templates/subscribe.php' );?>

</div><!-- Wrapper -->

<?php wp_footer(); ?>

<?php if (isset($_GET['thanks'])):  ?>

<script type="text/javascript">
  $(document).ready(function() {
    $.magnificPopup.open({
      items: {
        src: "<div id='confirmation' class='white-popup'><div class='wrapper'><h3>Thank you, your sign-up request was successful! Please check your e-mail inbox.</h3></div></div>",
        type: 'inline'
      },
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    }, 0);
  });
</script>

<?php endif; ?>  

</body>
</html>