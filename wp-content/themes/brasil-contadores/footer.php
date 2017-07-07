<?php require_once('inc/protect-abspath.php') ?>
<footer class="footer" role="footer">
	<div class="widgets">
		<div class="container widgets-background">
			<div class="row">
				<div class="col-xs-6 col-sm-2 widget">
					<div class="widget-header">
						<span class="title">A BC&A</span>
					</div>
					<div class="widget-content">
						<ul>
							<li>- <a href="#">Nossa história</a></li>
							<li>- <a href="#">Depoimentos</a></li>
							<li>- <a href="#">Manifesto</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-2 widget">
					<div class="widget-header">
						<span class="title">SOLUÇÕES</span>
					</div>
					<div class="widget-content">
						<?php
						// the query
						$args = array(
						  'post_type' => 'servicos',
						  'posts_per_page' => 6
						);
						$the_loop = new WP_Query( $args );
						if ( $the_loop->have_posts() ) : ?>
						<ul>
							<?php while ( $the_loop->have_posts() ) : $the_loop->the_post(); ?>
							<li>- <a title="Conheça <?php the_title() ?>" href="<?php bloginfo('url') ?>/servicos/#<?= get_post_field( 'post_name', get_post() ) ?>"><?php the_title() ?></a></li>
							<?php endwhile ?>
						</ul>
						<?php endif ?>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 widget">
					<div class="widget-header">
						<span class="title">LOREM IPSUM</span>
					</div>
					<div class="widget-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat eos excepturi quas nam nesciunt, fugit consequatur quos explicabo! Vitae, possimus.<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat eos excepturi quas nam nesciunt, fugit consequatur quos explicabo! Vitae, possimus.<br>
						<p><a href="#" class="button button-red" data-toggle="modal" data-target="#consult-specialist">FALE CONOSCO</a></p>
					</div>
				</div>
				<div id="fale-conosco" class="col-xs-6 col-sm-3 pull-right widget">
					<div class="widget-header">
						<span class="title">CONTATO</span>
					</div>
					<div class="widget-content">
						<p><strong>Sede São Bernardo</strong><br>
						Rua Tomé de Souza, 200<br>
						Centro, São Bernardo do Campo/SP<br>
						Tel: +55 (11) 4126-3300</p>
						<p><strong>Sede São Paulo</strong><br>
						Avenida Paulista, 777, Conj. 72
						Bela Vista, São Paulo/SP<br>
						Tel: +55 (11) 4126-3300</p>
						<a href="#trabalhe-conosco" class="button button-red" data-toggle="modal" data-target="#work-with-us">TRABALHE CONOSCO</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer-corporate">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 text-left">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 text-center">
					<p class="padding">Brasil Contadores & Associados ®2017</p>
				</div>
				<div class="col-xs-12 col-sm-4 text-right">
					<p class="padding"><a class="font-xs" href="http://madgo.com.br" target="_blank">by MadGO.</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php get_template_part('partials/part', 'modal-work-with-us'); ?>
<?php get_template_part('partials/part', 'modal-consult-specialist'); ?>
<script type="text/javascript" src="<?= get_template_directory_uri() . '/assets/js/bundle.js' ?>" async></script>
<?php wp_footer() ?>
</body>
</html>