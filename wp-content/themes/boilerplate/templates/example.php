<?php /* Template Name: Example */ ?>
<?php get_header() ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main role="main">
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>