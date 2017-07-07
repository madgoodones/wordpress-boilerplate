<?php
// the query
$args = array(
  'post_type' => 'servicos',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<div class="services">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <?php $count=0; while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="heading<?= get_post_field( 'post_name', get_post() ) ?>">
        <h4 class="panel-title">
          <a role="button" class="hash collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?= get_post_field( 'post_name', get_post() ) ?>" aria-expanded="false" aria-controls="<?= get_post_field( 'post_name', get_post() ) ?>">
            <?php the_title() ?>
          </a>
        </h4>
      </div>
      <div id="<?= get_post_field( 'post_name', get_post() ) ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= get_post_field( 'post_name', get_post() ) ?>">
        <div class="panel-body">
          <?php the_content() ?>
        </div>
      </div>
    </div>
    <?php endwhile ?>
  </div>
</div>
<?php endif ?>