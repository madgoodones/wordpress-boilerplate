<?php require_once('inc/protect-abspath.php') ?>
<div class="search-box">
	<form role="search" id="searchform" action="<?= esc_url( home_url( '/' ) ) ?>" method="GET">
		<button type="submit" class="search-box-label"><label for="search" class="fa fa-search"></label></button>
		<input type="text" class="search-box-input" id="search" name="s" placeholder="O que você procura?">
	</form>
</div>