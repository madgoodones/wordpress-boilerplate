<?php
// the query
$args = array(
  'post_type' => 'ebooks',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<?php $posts = wp_count_posts('ebooks')->publish ?>
<section class="ebooks">
	
	<?php $count=0; while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
		<?php if ($count == 1) echo '<div class="ebook"><div class="container"><div class="row center-xs bottom-xs">'; ?>
		<div class="col-xs-12 col-sm-6 col-md-3 ebook-container" data-izimodal-open="#<?= get_post_field( 'post_name', get_post() ) ?>">
			<img data-tilt data-tilt-axis="x" src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title() ?>">
			<div id="ebook-summary" class="ebook-summary">
				<h2 class="ebook-name"><?php the_title() ?></h2>
				<?php if ($author = get_field('autor')): ?>
				<strong class="ebook-author"><?= $author ?></strong>
				<?php endif ?>
			</div>
			<div id="ebook-more" class="ebook-more">
				<button class="button button--small button-blue-white">MAIS INFORMAÇÕES</button>
			</div>
		</div>
		<?php if ($count == 4) { echo '</div></div></div>'; $count=0;} ?>
		<?php get_template_part('partials/part', 'ebooks-modal') ?>
	<?php endwhile ?>

</section>
<?php endif ?>