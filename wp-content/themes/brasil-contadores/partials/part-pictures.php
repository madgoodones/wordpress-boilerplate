<?php
// the query
$args = array(
  'post_type' => 'escritorio',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<div class="pictures-header">
	<div class="page-header">
		<strong class="title title--brand-red">A EMPRESA</strong>
	</div>
</div>
<div class="owl-carousel owl-pictures">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="pictures">
	<?php $images = get_field('gallery'); ?>
	<?php if( $images ): ?>
	<?php foreach( $images as $image ): ?>
		<div class="picture">
			<div class="picture-content">
				<div class="picture-cover" style="background-image: url('<?= $image['url'] ?>');"></div>
			</div>
		</div>
	<?php endforeach ?>
	<?php endif ?>
	</div>
	<?php endwhile ?>
</div>
<?php endif ?>