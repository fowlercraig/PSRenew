<?php if (get_field('faq')):?>
<div class="accordion">
  <div class="fs-row">
    <hr class="invisible">
    <header class="accordion-header">
      <h3 class="accordion-header__title">Frequently Asked Questions</h3>
    </header>
    <div class="fs-cell fs-lg-12 fs-md-6 fs-sm-3">
      <ul class="accordion-wrapper">
        <?php while ( have_rows('faq') ) : the_row(); ?>
        <li class="accordion-item">
          <a href="#" class="accordion-item__question"><?php the_sub_field('question'); ?></a>
          <div class="accordion-item__answer"><?php the_sub_field('answer'); ?></div>
          <hr class="divider">
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>