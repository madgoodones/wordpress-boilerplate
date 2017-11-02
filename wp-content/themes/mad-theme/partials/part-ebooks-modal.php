<div id="<?= get_post_field( 'post_name', get_post() ) ?>" data-izimodal-group="e-books" class="iziModal">
	<div class="iziModal-body ebooks-modal">
		<div class="row middle-xs">
			<div class="col-xs-12 col-sm-3 margin-bottom-15">
				<img data-tilt data-tilt-axis="x" src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title() ?>">
			</div>
			<div class="col-xs-12 col-sm-9 margin-bottom-15">
				<div class="row">
					<div class="col-xs-12 padding-bottom-15">
						<strong class="title"><?php the_title() ?> <span class="closer" data-izimodal-close>X</span></strong>
						<?php if ($author = get_field('autor')): ?>
						<span class="author"><?= $author ?></span>
						<?php endif ?>
					</div>
					<div class="col-xs-12 padding-bottom-30">
						<?php the_content() ?>
					</div>
					<div class="col-xs-12">
						<div class="row middle-xs center-xs">
							<div class="col-xs">
								<input class="input-outline" type="email" name="E-mail" placeholder="Digite seu e-mail aqui" required>
							</div>
							<div class="col-xs">
								<input type="submit" class="button button-white-blue" value="FAZER DOWNLOAD">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>