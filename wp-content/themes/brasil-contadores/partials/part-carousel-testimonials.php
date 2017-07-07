<?php
// the query
$args = array(
  'post_type' => 'depoimentos',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<div class="carousel-testimonials">
	<div class="carousel-testimonials-header">
		<div class="page-header text-center">
			<strong class="title title--brand-white color-white">Depoimentos</strong>
		</div>
	</div>
	<div class="owl-carousel owl-testimonials">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="item">
			<div class="zigzag">
				<div class="zigzag-image" style="background-image: url('<?php the_post_thumbnail_url('testimonials') ?>')"></div>
				<div class="zigzag-content">
					<div class="middle">
						<h5><?php the_title() ?></h5>
						<?php the_content() ?>
						<div class="text-right">
							<button class="owl-direction button-img-next" data-owl=".owl-testimonials" data-direction="next"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile ?>
	</div>
</div>
<?php endif ?>