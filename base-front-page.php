<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <section class="home-slider">
    <?php dynamic_sidebar('slider'); ?>
  </section>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="summary">
    <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
        <?php the_content(); ?>
      </div>
    </div>
  </section>

  <section class="surgery-types">
    <div class="container">
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-3">
            <?php if(get_field('left_surgery_image')): ?>
            <img class="img-responsive img-rounded" src="<?php get_field('left_surgery_image'); ?>">
            <?php endif; ?>
          </div>
          <div class="col-sm-9">
            <?php if(get_field('left_surgery_title')): ?>
            <h3><?php get_field('left_surgery_title'); ?></h3>
            <h5><?php get_field('left_surgery_sub_title'); ?></h5>
            <p><?php get_field('left_surgery_text'); ?><p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-3">
            <?php if(get_field('right_surgery_image')): ?>
            <img class="img-responsive img-rounded" src="<?php get_field('right_surgery_image'); ?>">
            <?php endif; ?>
          </div>
          <div class="col-sm-9">
            <?php if(get_field('right_surgery_title')): ?>
            <h3><?php get_field('right_surgery_title'); ?></h3>
            <h5><?php get_field('right_surgery_sub_title'); ?></h5>
            <p><?php get_field('right_surgery_text'); ?><p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; endif; ?>


  <section class="programs">
    <div class="container">
      <div class="row">
        <?php query_posts('post_type=programs&showposts=6'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-sm-4">
        <?php if (has_post_thumbnail()): ?>
          <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
          <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $src[0]; ?>)">
            <div class="caption"><?php the_title(); ?></div>
          </a>
          <?php else: ?>
          <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/disasters/fire.png)">
            <div class="caption"><?php the_title(); ?></div>
          </a>
    	  <?php endif; ?>
        <?php the_excerpt(); ?>
        <a class="btn btn-danger" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

  <section class="programs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Meet Our Physicians</h3>
        </div>
        <?php query_posts('post_type=physicians&showposts=5'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-sm-2">
        <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail('', array('class' => 'img-responsive img-round')); ?>
          <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $src[0]; ?>)">
            <div class="caption"><?php the_title(); ?></div>
          </a>
          <?php else: ?>
          <a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/disasters/fire.png)">
            <div class="caption"><?php the_title(); ?></div>
          </a>
        <?php endif; ?>
          <h5><?php the_title(); ?></h5>
          <p><?php the_excerpt(); ?></p>
        </div>
        <?php endwhile; endif; ?>
        <div class="col-sm-2">
          <h5>Our Staff</h5>
          <p>Not sure what this needs to be.</p>
        </div>
      </div>
    </div>
  </section>
  <!--
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">

      </main>  /.main
    </div> /.content
  </div> /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
