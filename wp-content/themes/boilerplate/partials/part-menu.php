<div class="menu">
<div class="container">
	<div class="col-xs-8 col-sm-3">
		<figure class="menu__brand">
			<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('title') ?>"><img src="<?=get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="<?php wp_title('-', true, 'right'); bloginfo(); ?>"></a>
		</figure>
	</div>
	<div class="col-xs-4 col-sm-9">
		<input type="checkbox"  id="burger-shower" class="menu__checked">
		<label for="burger-shower" class="menu__burger">
			<div class="menu__burger__btn"></div>
		</label>
		<?php
			wp_nav_menu( array(
			'depth'             => 2,
			'container'         => 'nav',
			'container_class'   => 'menu__nav',
			'container_id'      => 'menu',
			'menu_class'				=> '',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker())
			);
    ?>
	</div>
</div>
</div>