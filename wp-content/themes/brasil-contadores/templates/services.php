<?php /* Template Name: Services */ ?>
<?php get_header() ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('partials/part', 'header-page') ?>
	<main role="main">
		<?php get_template_part('partials/part', 'services') ?>
		<?php get_template_part('partials/part', 'action-specialist') ?>
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>