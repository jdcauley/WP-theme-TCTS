<div class="row">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="col-sm-4 physician-profiles">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if (has_post_thumbnail()): the_post_thumbnail('', array('class' => 'img-responsive')); endif; ?>
    </a>
    <h3><?php the_title(); ?></h3>

    <div class="panel-group" id="<?php the_id(); ?>">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#<?php the_id(); ?>" href="#<?php the_id(); ?>-education">
              <?php if(get_field('education_title')): the_field('education_title'); endif; ?>
              <span class="glyphicon glyphicon-plus plus"></span>
            </a>
          </h4>
        </div>
        <div id="<?php the_id(); ?>-education" class="panel-collapse collapse in">
          <div class="panel-body">
            <?php if(get_field('education_body')): the_field('education_body'); endif; ?>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#<?php the_id(); ?>" href="#<?php the_id(); ?>-certifications">
              <?php if(get_field('certifications_title')): the_field('certifications_title'); endif; ?>
              <span class="glyphicon glyphicon-plus plus"></span>
            </a>
          </h4>
        </div>
        <div id="<?php the_id(); ?>-certifications" class="panel-collapse collapse">
          <div class="panel-body">
            <?php if(get_field('certifications_body')): the_field('certifications_body'); endif; ?>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#<?php the_id(); ?>" href="#<?php the_id(); ?>-affiliations">
              <?php if(get_field('professional_affiliations_title')): the_field('professional_affiliations_title'); endif; ?>
              <span class="glyphicon glyphicon-plus plus"></span>
            </a>
          </h4>
        </div>
        <div id="<?php the_id(); ?>-affiliations" class="panel-collapse collapse">
          <div class="panel-body">
            <?php if(get_field('professional_affiliations_body')): the_field('professional_affiliations_body'); endif; ?>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php endwhile; endif; ?>
</div>
