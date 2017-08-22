<div class="menu max-page">
<div class="container">
	<div class="col-xs-9 col-md-5 col-lg-2">
		<figure class="menu__brand">
			<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('title') ?>"><img src="<?=get_template_directory_uri() . '/assets/img/brasil-contadores.png' ?>" alt="<?php wp_title('-', true, 'right'); bloginfo(); ?>"></a>
		</figure>
	</div>
	<div class="col-xs-3 col-md-7 col-lg-10">
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
<div class="superior-menu max-page">
  <div class="container">
    <div class="col-xs-12">
      <div class="menu-right">
        <ul>
          <li>
            <a href="mailto:contato@brasilcontadores.com.br"><i class="fa fa-envelope-o"></i> <span class="hidden-xs">contato@brasilcontadores.com.br</span></a>
          </li>
          <li>
            <a href="#faq"><i class="fa fa-help"></i> Consulte um especialista</a>
          </li>
          <li class="dropdown">
            <a href="<?= admin_url() ?>" class="red"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>