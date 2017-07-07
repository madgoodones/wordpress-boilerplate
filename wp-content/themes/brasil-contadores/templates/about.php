<?php /* Template Name: About */ ?>
<?php get_header() ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('partials/part', 'header-page') ?>
	<main role="main">
		<?php get_template_part('partials/part', 'flexible-content') ?>
		<?php get_template_part('partials/part', 'pictures') ?>
		<?php get_template_part('partials/part', 'timeline-our-history') ?>
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>