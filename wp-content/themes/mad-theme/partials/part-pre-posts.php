<?php
// the query
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<section class="pre-posts">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header text-center">
					<strong class="title">Blog</strong>
				</div>
			</div>
			<div id="pre-posts" class="col-xs-12">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div>
			<a class="pre-posts-post" href="<?php the_permalink() ?>"  style="background-image: url('<?php the_post_thumbnail_url('full') ?>')">
				<div class="pre-posts-post-wrapper">
					<div class="title">
						<?php 
						$id = get_the_ID();
						$cats = get_the_terms( $id, 'category' );
						?>
						<strong><?= $cats[0]->name; ?> - <?php the_title() ?></strong><br>
						<span class="the-date"><?php the_date('d/m/Y'); ?></span>
					</div>
					<div class="content">
						<?php the_excerpt() ?>
						<span class="read-more">Leia mais ></span>
					</div>
				</div>
			</a>
			</div>
			<?php endwhile ?>
			</div>
		</div>
	</div>
</section>
<?php endif ?>