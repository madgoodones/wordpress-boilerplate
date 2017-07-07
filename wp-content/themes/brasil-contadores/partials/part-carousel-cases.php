<?php
// the query
$args = array(
  'post_type' => 'cases',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<section class="cases">
	<div class="container">
		<div class="page-header text-center uppercase">
			<h3 class="title title--brand-red color-black">Cases</h3>
		</div>
		<div class="cases-container">
			<div class="owl-carousel owl-cases">
				<?php $count=0; while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
				<div class="item cases-item" data-toggle="modal" data-target="#case-<?= $count ?>">
					<div class="cases-item-content">
						<div class="cases-item-the-content">
							<h4 class="title"><?php the_title() ?></h4>
							<?php the_content() ?>
						</div>
						<button class="button button-outline">SAIBA MAIS</button>
					</div>
					<div class="cases-item-cover" style="background-image: url('<?php the_post_thumbnail_url('cases') ?>')"></div>
				</div>
				<?php endwhile ?><?php wp_reset_postdata(); ?>
			</div>
			<button class="owl-direction button-prev" data-owl=".owl-cases" data-direction="prev"></button>
			<button class="owl-direction button-next" data-owl=".owl-cases" data-direction="next"></button>
		</div>
	</div>
</section>
<?php endif ?>
<?php get_template_part('partials/part', 'modal-cases') ?>

