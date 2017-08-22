<?php
// the query
$args = array(
  'post_type' => 'carousel',
  'posts_per_page' => 5
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<header id="carousel" class="carousel slide" data-ride="carousel" role="banner">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $count=0; ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <!-- Verifica quantos sliders tem para deixar somente o primeiro ativo -->
      <?php if (0 === $count):?>
      <?php elseif (1 === $count): ?>
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="<?=$count?>"></li>
      <?php else : ?>
      <li data-target="#carousel" data-slide-to="<?=$count?>"></li>
      <?php endif ?>
      <?php $count++; ?>
    <?php endwhile ?>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $count=0; ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php if (0 === $count): $count++;?>
    <div class="item active" style="background-image: url('<?php the_post_thumbnail_url('high-slider') ?>');">
    <?php else: ?>
    <div class="item" style="background-image: url('<?php the_post_thumbnail_url('high-slider') ?>');">
    <?php endif ?>
      <img class="sr-only" src="<?php the_post_thumbnail_url('high-slider') ?>" alt="<?php the_title() ?>">
      <div class="item-caption hidden-scroll">
        <?php the_content() ?>
      </div>
    </div>
    <?php endwhile ?>
    <?php wp_reset_postdata() ?>
  </div>
  <div class="carousel-mouse"></div>
</header>
<?php endif ?>