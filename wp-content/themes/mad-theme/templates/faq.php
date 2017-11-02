<?php /* Template Name: FAQ */ ?>
<?php get_header() ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main role="main">
		<?php get_template_part('partials/part', 'header-page') ?>
		<?php get_template_part('partials/part', 'header-page-with-images') ?>
		<?php get_template_part('partials/part', 'faq') ?>
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>