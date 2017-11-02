<?php
// the query
$args = array(
  'post_type' => 'depoimentos',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<section class="carousel-testimonials">
	<div id="slick-testimonials" class="carousel">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="slide">
			<div class="author-header">
				<div data-tilt data-tilt-scale=".85" class="author-avatar" style="background-image: url('<?php the_post_thumbnail_url('low-thumbnail') ?>');"></div>
			</div>
			<div class="padding-25">
				<span class="author-name"><?php the_title() ?></span>
				<?php if ($subtitle = get_field('subtitle')): ?>
				<span class="author-subtitle"><?= $subtitle ?></span>
				<?php endif ?>
			</div>
			<div class="author-bio">
				<?php the_content() ?>
			</div>
		</div>
		<?php endwhile ?>
	</div>
</section>
<?php endif ?>