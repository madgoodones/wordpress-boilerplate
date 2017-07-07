<?php
// the query
$args = array(
  'post_type' => 'clientes',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<div class="grid-clients">
	<div class="container">
		<div class="page-header text-center">
			<strong class="title color-white title--brand-red">Clientes</strong>
		</div>
		<div class="row">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="col-xs-6 col-sm-3 grid-clients-item">
				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title() ?>">
			</div>
			<?php endwhile ?>
		</div>
	</div>
</div>
<?php endif ?>