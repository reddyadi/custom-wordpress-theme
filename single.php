<?php get_header('front'); ?>

  <h1>This is a file viewing from single.php</h1>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
