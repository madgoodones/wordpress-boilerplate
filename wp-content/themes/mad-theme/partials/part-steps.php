<section class="steps" id="steps">
	<div class="container">
		<div class="row middle-xs">
			<?php if ($excerpt = get_field('steps-excerpt')) :?>
			<div class="col-xs-12 col-md padding-bottom-10">
				<?= $excerpt ?>
			</div>
			<?php endif ?>
			<?php 
			$images = get_field('steps');
			if( $images ): ?>
			<?php foreach( $images as $image ): ?>
			<div class="step col-xs-12 col-md padding-bottom-10">
				<img data-tilt data-tilt-scale="1.1" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
				<p><?= $image['title']; ?></p>
			</div>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>