<?php require_once('inc/protect-abspath.php') ?>
<?php get_header() ?>
	<?php get_template_part('partials/part', 'carousel') ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main role="main">
		
		<div class="storytelling align-middle bg-parallax" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/especialista-contabil-tributario.jpg' ?>');" data-parallax="5">
			<div class="container">
				<p class="title reveal">Por trás de todo <strong>grande negócio</strong><br>
				de sucesso, tem um <strong>especialista</strong><br>
				<strong>contábil e tributário</strong>.</p>
			</div>
		</div>
		<div class="storytelling bg-parallax align-middle" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/brasil-contadores-e-associados.jpg' ?>');" data-parallax="5">
			<div class="container">
				<p class="title reveal">Mas onde a <strong>BC&A</strong><br>entra nessa história?</p>
			</div>
		</div>
		<div class="storytelling align-middle bg-parallax" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/contrate-especialistas.jpg' ?>');"  data-parallax="5">
			<div class="container">
				<p class="title reveal">Lucro não advém somente de vendas,<br>
				mas também de uma bela visão<br>
				de engenharia tributária e contábil.<br>
				Contrate especialistas!</p>
			</div>
		</div>
		<div class="storytelling storytelling--blue align-middle">
			<div class="container">
				<p class="title reveal">Especialistas <span class="color-white">em engenharia</span> contábil e tributária.</p>
			</div>
		</div>

		<?php get_template_part('partials/part', 'services-home') ?>
		<?php get_template_part('partials/part', 'carousel-clients') ?>
		<?php get_template_part('partials/part', 'carousel-testimonials') ?>
		<?php get_template_part('partials/part', 'action-specialist') ?>

	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>