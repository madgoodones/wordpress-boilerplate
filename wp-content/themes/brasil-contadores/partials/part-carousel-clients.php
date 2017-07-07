<?php
// the query
$args = array(
  'post_type' => 'clientes',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<div class="carousel-clients">
	<div class="container">
		<div class="page-header text-center">
			<strong class="title title--brand-red">Clientes</strong>
		</div>
		<div class="owl-carousel owl-clients">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="item">
				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>">
			</div>
			<?php endwhile ?>
		</div>
		<button class="owl-direction button-prev" data-owl=".owl-clients" data-direction="prev"></button>
		<button class="owl-direction button-next" data-owl=".owl-clients" data-direction="next"></button>
	</div>
</div>
<?php endif ?>