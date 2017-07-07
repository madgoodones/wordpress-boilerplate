<?php
// the query
$args = array(
  'post_type' => 'nossa-historia',
  'posts_per_page' => -1,
  'order' => 'ASC'
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<section class="our-history">
	<div class="container">
		<div class="page-header text-center">
			<strong class="title title--brand-red color-black">História</strong>
		</div>
	</div>
	<div class="relative">
		<div class="our-history-timeline">
			<?php 
				$count=0;
				$offset = -115; 
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
				$count++;
				$offset+=100; 
			?>
			<?php if ($count % 2 == 0): ?>
			<div class="our-history-content waypoint" data-offset="<?= $offset ?>" data-animation="fadeInLeft">
			<?php else: ?>
			<div class="our-history-content waypoint" data-offset="<?= $offset ?>" data-animation="fadeInRight">
			<?php endif ?>
				<div class="our-history-content-text">
					<strong class="title"><span class="year"><?= get_field('year') ?> </span><?= get_field('title') ?></strong>
					<p><?= get_field('content') ?></p>
				</div>
			</div>
			<?php endwhile ?>
			<?php wp_reset_postdata(); ?>
			<div class="our-history-content-corda"></div>
			<div class="our-history-content-space"></div>
		</div>
	</div>
	<div class="our-history-overlay-bottom"></div>
	<div class="our-history-arrowdown">
    <a href="#fale-conosco"><img class="animated animated-slow bounce infinite" src="<?=get_template_directory_uri() . '/assets/img/arrowdown.png'?>" alt="Ver mais"></a>
  </div>
</section>
<?php endif ?>