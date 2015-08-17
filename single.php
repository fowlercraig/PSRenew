<?php Themewrangler::setup_page();get_header(); ?>

<article class="single row">
<div class="desktop-12"><a href="/blog" class="back green"><i class="ss-gizmo ss-navigateleft"></i>News & Updates</a></div>
<div class="desktop-8">
<div class="page-header <?php if ( is_front_page() ) { echo 'desktop-12 tablet-6 contained mobile-hide tablet-hide'; } ?>">
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
</div>
<div class="share">
  <span class="share-button">Share</span>
</div>
<hr class="invisible">
<?php while (have_posts()) : the_post(); ?>
<div class="entry-content"><?php the_content(); ?></div>
<?php endwhile; ?>

<footer class="footer">
<?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>
</footer>

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'pershingsquarerenew';

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

</div>
</article>

<?php get_footer(); ?>