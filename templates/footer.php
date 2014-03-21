<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
<script>
  var controller = new ScrollMagic();

// assign handler "scene" and add it to Controller
  var scene = new ScrollScene({duration: 100})
                .addTo(controller);
</script>
