<div class="row">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="col-sm-4 programs-col">
    <?php if (has_post_thumbnail()): $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
    <a class="programs-post-image" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $src[0]; ?>)">
      <span class="caption"><?php the_title(); ?></span>
    </a>
    <?php else: ?>
    <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/disasters/fire.png)">
      <span class="caption"><?php the_title(); ?></span>
    </a>
  <?php endif; ?>
  <?php the_excerpt(); ?>
  <a class="btn btn-danger" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
  </div>

<?php endwhile; endif; ?>
</div>
