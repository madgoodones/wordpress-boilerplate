<?php
// the query
$args = array(
  'post_type' => 'servicos',
  'posts_per_page' => 6
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<section class="services-home">
	<div class="container">
		<div class="row">
			<div class="page-header text-center uppercase">
				<h3 class="title title--brand-red">Conheça nossas soluções</h3>
			</div>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<a href="<?php bloginfo('url') ?>/servicos/#<?= get_post_field( 'post_name', get_post() ) ?>" title="<?php the_title() ?>" class="services-home-block" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
					<div class="header">
						<h2 class="title reveal"><?php the_title() ?></h2>
					</div>
					<div class="content">
						<figure class="content-image">
							<img src="<?= get_template_directory_uri() . '/assets/img/traco-services-home.png' ?>" alt="<?php the_title() ?>">
						</figure>
						<button href="<?php bloginfo('url') ?>/servicos/#<?= get_post_field( 'post_name', get_post() ) ?>" class="button button-outline">SAIBA MAIS</button>
					</div>
				</a>
			</div>
			<?php endwhile ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<?php endif ?>