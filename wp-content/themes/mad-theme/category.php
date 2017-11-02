<?php require_once('inc/protect-abspath.php') ?>
<?php get_header() ?>
	<main role="main">
		<header class="header-page" role="banner" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/blog-medassist.jpg' ?>');">
			<div class="header-page-caption">
				<h1><strong class="title">TODOS OS POSTS SOBRE:</strong>
				<p><?= single_cat_title("", false) ?></p></h1>
			</div>
		</header>
		<section class="blogger">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-9 col-md-8 blogger-posts">
						<?php 
						if ( get_query_var('paged') ) {
							$paged = get_query_var('paged');
						} elseif ( get_query_var('page') ) {
							$paged = get_query_var('page');
						} else {
						   $paged = 1;
						}
						$args = array('post_type' => 'post', 'posts_per_page' => 2, 'paged' => $paged, 'category_name' => single_cat_title("", false) );
						$the_query = new WP_Query( $args ); 
						if ($the_query->have_posts()) : ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="pre-posts-blog">
							<a href="<?php the_permalink(); ?>">
							<figure class="pre-posts-blog-thumbnail">
								<img class="sr-only" src="<?php the_post_thumbnail_url( 'post-large' ); ?>" alt="<?php the_title() ?>">
								<figcaption class="pre-posts-blog-thumbnail-cover" style="background-image: url('<?php the_post_thumbnail_url( 'post-large' ); ?>');">
									<p class="sr-only"><?php the_title() ?></p>
								</figcaption>
							</figure>
							</a>
							<div class="pre-posts-blog-content">
								<div class="header">
									<span class="header-times"><?php the_date('d'); ?> de <?php the_time('F'); ?> de <?php the_time('y'); ?> by <span class="the-author"><?php the_author() ?></span></span>
									<h3 class="header-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</div>
								<div class="pre-posts-blog-content-paragraph">
									<p><?php the_excerpt(); ?></p>
								</div>
								<a class="learn-more" href="<?php the_permalink(); ?>">Leia mais</a>
							</div>
						</div>
						<?php endwhile ?>

						<nav class="pagination text-center">
							<?php
							$big = 999999999; // need an unlikely integer
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, $paged ),
								'total' => $the_query->max_num_pages
							) );
							?>	
						</nav>
						<?php endif ?>
					</div>
					<?php get_sidebar() ?>
				</div>
			</div>
		</section>
		<?php get_template_part('partials/part', 'action-faq') ?>
	</main>
<?php get_footer() ?>