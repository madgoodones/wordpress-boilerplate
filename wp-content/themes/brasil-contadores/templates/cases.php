<?php /* Template Name: Cases */ ?>
<?php get_header() ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('partials/part', 'header-page') ?>
	<main role="main">
		<?php get_template_part('partials/part', 'grid-clients') ?>
		<?php get_template_part('partials/part', 'carousel-cases') ?>
		<?php get_template_part('partials/part', 'carousel-testimonials') ?>
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>