<?php get_header('front'); ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Home Page</h1>
          <div class="container">
          <?php while(have_posts()): the_post(); ?>
            <div class="col-xs-12 col-md-5">
              <?php the_post_thumbnail('thumbnail', ['class'=>'img-fluid', 'alt'=>'thumbnail image']); ?>
            </div>
            <div class="col-md col-sm-6">
              <h1><?php the_title(); ?></h1>
            </div>
            <div><?php the_content(); ?></div>
            <a href="<?= esc_url(get_permalink());?>">See more</a>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    </div>
    
    <?php wp_footer();  ?>
  </body>
</html>
