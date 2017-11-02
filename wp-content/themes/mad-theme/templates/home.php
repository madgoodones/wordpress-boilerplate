<?php /* Template Name: Home */ ?>
<?php get_header() ?>
	<?php get_template_part('partials/part', 'carousel') ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main role="main">
		<?php get_template_part('partials/part', 'header-page-with-images') ?>
		<?php get_template_part('partials/part', 'steps') ?>
		<?php get_template_part('partials/part', 'services-home') ?>
		<?php get_template_part('partials/part', 'zigzag') ?>
		<?php get_template_part('partials/part', 'action-specialist') ?>
		<?php get_template_part('partials/part', 'pre-posts') ?>
		<?php get_template_part('partials/part', 'carousel-testimonials') ?>
		<?php get_template_part('partials/part', 'action-faq') ?>
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>