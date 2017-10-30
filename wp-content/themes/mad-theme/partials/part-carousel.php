<?php
// the query
$args = array(
  'post_type' => 'carousel',
  'posts_per_page' => 5
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<header id="slick" class="slick-home" role="banner">
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <div class="item" style="background-image: url('<?php the_post_thumbnail_url('full') ?>');">
    <img class="sr-only" src="<?php the_post_thumbnail_url('high-slider') ?>" alt="<?php the_title() ?>">
    <div class="item-caption hidden-scroll">
      <?php the_content() ?>
    </div>
  </div>
  <?php endwhile ?>
  <?php wp_reset_postdata() ?>
</header>
<div class="carousel-mouse"></div>
<?php endif ?>