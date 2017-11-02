<?php require_once('inc/protect-abspath.php') ?>
<?php get_header() ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main role="main">
		<?php get_template_part('partials/part', 'header-page') ?>
		<?php get_template_part('partials/part', 'header-page-with-images') ?>
		<article class="padding-50">
			<?php the_content() ?>
		</article>
		<?php get_template_part('partials/part', 'action-faq') ?>
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>