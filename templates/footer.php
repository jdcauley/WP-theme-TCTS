
<footer>
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
  <div clas="lower-footer">
    <div class="container">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
