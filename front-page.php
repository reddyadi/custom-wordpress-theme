<?php get_header('front'); ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Home Page</h1>
          <?php if(have_posts()): ?>
            <div class="card-columns">
              <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    </div>

<?php wp_footer();  ?>
  </body>
</html>
