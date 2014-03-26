
<footer class="page-footer">
  <div class="content-info" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <?php dynamic_sidebar('footer-left'); ?>
        </div>
        <div class="col-sm-4">
          <?php dynamic_sidebar('footer-center'); ?>
        </div>
        <div class="col-sm-4">
          <?php dynamic_sidebar('footer-right'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="lower-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php dynamic_sidebar('sidebar-footer'); ?>
          <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - all rights reserved</p>
        </div>
        <div class="col-sm-6">
          <a class="pull-right" href="http://techtriad.com" title="Designed by TechTriad, Professional WordPress Theme Design in North Carolina" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/t-icon.png" alt="TechTriad WordPress and Web Design Services"></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
