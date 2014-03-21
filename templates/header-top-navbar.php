<header class="banner" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <a class="main-logo" href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/tcts-logo.png">
        </a>
      </div>
      <div class="col-sm-6 header-content">
        <div class="pull-right">
          <?php dynamic_sidebar('header-widgets'); ?>
        </div>
      </div>
      <div class="col-sm-6">
        <?php
          if (has_nav_menu('top_navigation')) :
            wp_nav_menu(array('theme_location' => 'top_navigation', 'menu_class' => 'pull-right breadcrumb'));
          endif;
        ?>
      </div>
    </div>
  </div>
  <div class="affix-container" data-spy="affix" data-offset-top="110">
  <div class="navbar navbar-tcts navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</div>
</header>
