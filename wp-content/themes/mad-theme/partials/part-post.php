<article class="container padding-50">
	<div class="row center-xs">
		<div class="pre-posts-blog text-left col-xs-12 col-sm-10 col-md-8">
			<div class="pre-posts-blog-content">
				<div class="header">
					<span class="header-times"><?php the_date('d'); ?> de <?php the_time('F'); ?> de <?php the_time('y'); ?> by <span class="the-author"><?php the_author() ?></span></span>
					<h1 class="header-title"><?php the_title(); ?></h1>
				</div>
				<div class="padidng-20 post-main">
					<?php the_content() ?>
				</div>
				<div class="padding-top-50">
					<?php disqus_embed('medassist') ?>
				</div>
			</div>
		</div>
	</div>
</article>