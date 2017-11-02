<aside class="sidebar col-xs-12 col-sm-3 col-md-4">
	<div class="sidebar-children sidebar-newsletter">
		<form action="">
			<p>Assine nossa newsletter<br>e fique por dentro!</p>
			<div class="row middle-xs center-xs">
				<div class="col-xs">
					<input class="input-outline" type="email" name="E-mail" placeholder="Digite seu e-mail aqui" required>
				</div>
				<div class="col-xs">
					<input type="submit" class="button button-white-black" value="ENVIAR">
				</div>
			</div>
		</form>
	</div>

	<div class="sidebar-children sidebar-services">
		<?php
		// the query
		$args = array(
		  'post_type' => 'servicos',
		  'posts_per_page' => -1
		);
		$the_loop = new WP_Query( $args );
		if ( $the_loop->have_posts() ) : ?>
		<ul>
			<?php while ( $the_loop->have_posts() ) : $the_loop->the_post(); ?>
			<li style="background-image: url('<?= get_field('thumbnail') ?>');">
				<a title="<?php the_title() ?>" href="<?php bloginfo('url') ?>/#<?= get_post_field( 'post_name', get_post() ) ?>" aria-controls="<?= get_post_field( 'post_name', get_post() ) ?>" <?php if(is_page_template('templates/home.php')): ?>role="tab" data-toggle="tab" <?php endif ?>><?php the_title() ?></a>
			</li>
			<?php endwhile ?>
		</ul>
		<?php endif ?>
	</div>

	<div class="sidebar-children sidebar-widget">
		<div class="widget-title">Posts Recentes</div>
		<?php
		// the query
		$args = array(
		  'post_type' => 'post',
		  'posts_per_page' => 6
		);
		$the_loop = new WP_Query( $args );
		if ( $the_loop->have_posts() ) : ?>
		<ul>
			<?php while ( $the_loop->have_posts() ) : $the_loop->the_post(); ?>
			<li>
				<a title="<?php the_title() ?>" href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</li>
			<?php endwhile ?>
		</ul>
		<?php endif ?>
	</div>
</aside>