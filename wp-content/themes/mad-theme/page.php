<?php require_once('inc/protect-abspath.php'); ?>
<?php get_header() ?>
	<?php get_template_part('partials/part', 'header-page') ?>
	<main role="main">
		<article class="container padding-50 text-center" role="article">
			<?php the_content() ?>
		</article>
	</main>
<?php get_footer() ?>