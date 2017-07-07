<?php /* Template Name: Contact */ ?>
<?php get_header() ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main role="main" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="contact-column">
						<div class="page-header text-center">
							<strong class="title title--brand-blue">ESCRITÓRIOS</strong>
						</div>
						<?php if( have_rows('offices') ): ?>
						<?php while( have_rows('offices') ): the_row();
							$image = get_sub_field('image');
							$address = get_sub_field('address');
							$name = get_sub_field('name'); ?>
						<img src="<?= $image['url'] ?>" alt="<?= $name ?>">
						<div class="header page-header">
							<strong class="title title--brand-blue"><?= $name ?></strong>
						</div>
						<div class="content">
							<p><?= $address ?></p>
						</div>
						<?php endwhile ?>
						<?php endif ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="contact-column">
						<div class="page-header text-center">
							<h1 class="title title--brand-blue"><?php the_title() ?></h1>
						</div>
						
						<form class="forms">
							<div class="form-group">
								<input type="text" class="input-outline" name="Nome" placeholder="Digite seu nome" required>
							</div>
							<div class="form-group">
								<input type="email" class="input-outline" name="E-mail" placeholder="Seu e-mail" required>
							</div>
							<div class="form-group">
								<input type="tel" class="input-outline" name="Telefone" placeholder="Seu telefone" required>
							</div>
							<div class="form-group">
								<textarea name="Mensagem" rows="10" class="input-outline" placeholder="Digite sua mensagem" required></textarea>
							</div>
							<input type="submit" value="ENVIAR" class="button button-white-wine button-block">
						</form>

						<form class="forms">
							<div class="header">
								<strong class="title">ASSINE NOSSA NEWSLETTER</strong>
								<p>Fique por dentro das novidades!</p>
							</div>
							<div class="form-group">
								<input id="news" type="email" class="input-outline" name="E-mail" placeholder="Digite seu e-mail" required>
							</div>
							<input type="submit" value="ASSINAR" class="button button-white-wine button-block">
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php endwhile ?>
	<?php endif ?>
<?php get_footer() ?>