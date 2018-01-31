
<div class="container">
	<div class="row middle-xs">
		<?php if ($brand = get_field('logo-v1', 'option')): ?>
		<div class="col-xs-8 col-md">
			<a href="<?php bloginfo('url') ?>"><img src="<?= $brand ?>" alt="<?php the_title() ?>"></a>
		</div>
		<?php endif ?>
		<div class="col-xs-4 col-md-10">
			<div class="menu-hamburger">
				<!-- Require css-hamburgers -->
				<button id="menuHamburger" class="hamburger hamburger--squeeze" type="button">
				  <span class="hamburger-box">
				    <span class="hamburger-inner"></span>
				  </span>
				</button>
			</div>
			<div class="row middle-xs menu-container">
				<div class="col-xs-12 col-md-9">
					<?php wp_nav_menu( array(
						'depth' => 2,
						'container' => 'nav',
						'container_class' => 'menu-navigation',
						'container_id' => 'menu',
						'menu_class' => '',
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker())
					); ?>
				</div>
				<div class="col-xs-12 col-md">
					<?php get_search_form() ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
