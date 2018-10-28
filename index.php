<?php get_header(); ?>

      <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <div class="row">

                  <?php if(has_post_thumbnail() ): ?>
                    <div class="col-xs-12 col-md-4">
                      <?php the_post_thumbnail('thumbnail', ['class'=>'img-fluid', 'alt'=>'thumbnail image']); ?>
                    </div>
                  <?php else: ?>
                    <div class="col-xs-12">
                  <?php endif; ?>
                      <h1><?php the_title(); ?></h1>
                      <div><?php the_content(); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>


<?php get_footer(); ?>
