<?php require_once('inc/protect-abspath.php') ?>
<footer class="footer" role="footer">
	<div class="widgets">
		<div class="container widgets-background">
			<div class="row">
				<div class="col-xs-6 col-sm-2 widget">
					<div class="widget-header">
						<span class="title">Mapa do Site</span>
					</div>
					<div class="widget-content">
						<?php
						// the query
						$args = array(
						  'post_type' => 'page',
						  'posts_per_page' => -1
						);
						$the_loop = new WP_Query( $args );
						if ( $the_loop->have_posts() ) : ?>
						<ul>
							<?php while ( $the_loop->have_posts() ) : $the_loop->the_post(); ?>
							<li>- <a title="<?php the_title() ?>" href="<?php bloginfo('url') ?>/servicos/#<?= get_post_field( 'post_name', get_post() ) ?>"><?php the_title() ?></a></li>
							<?php endwhile ?>
						</ul>
						<?php endif ?>
					</div>
					<?php if( have_rows('sociais', 'option') ):?>
					<div class="widget-content">
						<ul class="sociais">
							<?php while( have_rows('sociais', 'option') ): the_row(); ?>
							<li><a href="<?= get_sub_field('url') ?>" target="_blank"><i class="fa <?= get_sub_field('icone') ?>"></i></a></li>
							<?php endwhile ?>
						</ul>
					</div>
					<?php endif ?>
					<div class="widget-content">
						<div class="corporate">
							<p>Copyright 2017® <?php bloginfo('name'); ?><br><a class="font-xs" href="http://madgo.com.br" target="_blank">by MadGO.</a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-2 widget">
					<div class="widget-header">
						<span class="title">Serviços</span>
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
							<li>- <a title="<?php the_title() ?>" href="<?php bloginfo('url') ?>/servicos/#<?= get_post_field( 'post_name', get_post() ) ?>"><?php the_title() ?></a></li>
							<?php endwhile ?>
						</ul>
						<?php endif ?>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 widget">
					<div class="widget-header">
						<span class="title">Contato</span>
					</div>
					<div class="widget-content">
						<?= get_field('endereco', 'option') ?>
					</div>
				</div>
				<div id="fale-conosco" class="col-xs-6 col-sm-3 pull-right widget">
					<div class="widget-header">
						<span class="title">Fale Conosco</span>
					</div>
					<div class="widget-content">
						<form>
							<div class="form-group">
								<input type="text" class="input-outline" name="Nome" placeholder="Nome" required>
							</div>
							<div class="form-group">
								<input type="email" class="input-outline" name="E-mail" placeholder="E-mail" required>
							</div>
							<div class="form-group">
								<input type="tel" class="input-outline" name="Telefone" placeholder="Telefone" required>
							</div>
							<div class="form-group">
								<textarea class="input-outline" name="Mensagem" placeholder="Mensagem" required></textarea>
							</div>
							<button type="submit" class="button button-outline">Enviar</button>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="<?= get_template_directory_uri() . '/assets/js/bundle.js' ?>" async></script>
<?php wp_footer() ?>
</body>
</html>