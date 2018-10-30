<?php if(is_singular() ): ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1><?= the_title();?></h1>
        <p>This is a blog post</p>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?php the_post_thumbnail('thumbnail', ['class'=>'img-fluid', 'alt'=>'thumbnail image']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <?= the_content(); ?>
      </div>
    </div>
  </div>
<?php else: ?>
  <div class="card" style="width: 18rem;">
    <?php the_post_thumbnail('thumbnail', ['class'=>'img-fluid', 'alt'=>'thumbnail image']); ?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_content(); ?></p>
    <a href="<?= esc_url(get_permalink()); ?>" class="btn btn-primary">Go to Post</a>
  </div>
</div>
<hr>
<?php endif;  ?>
