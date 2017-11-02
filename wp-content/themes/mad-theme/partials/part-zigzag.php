<?php $isReverse = 0; ?>
<?php while( have_rows('zigzags') ): the_row(); ?>
<?php $isReverse++; ?>
<?php if ($imageFundo = get_sub_field('imagem-fundo')): ?>
<section id="zigzag-<?= $isReverse ?>" class="zigzag" style="background-color: <?= get_sub_field('cor-fundo') ?>; background-image: url('<?= $imageFundo ?>');">
<?php else: ?>
<section id="zigzag-<?= $isReverse ?>" class="zigzag" style="background-color: <?= get_sub_field('cor-fundo') ?>;">
<?php endif ?>
	<div class="container">
		<div class="row middle-xs <?php if($isReverse % 2 == 0) {echo 'reverse';} ?>">
			<?php if ($image = get_sub_field('imagem')): ?>
			<div class="col-xs-12 col-sm-6 zigzag-texto" style="color: <?= get_sub_field('cor-texto') ?>;">
			<?php else: ?>
			<div class="col-xs-12 col-sm-6 zigzag-texto padding-30" style="color: <?= get_sub_field('cor-texto') ?>;">
			<?php endif ?>
				<?= get_sub_field('texto') ?>
			</div>
			<div class="col-xs-12 col-sm-6 <?php if($isReverse % 2 != 0) {echo 'text-right';} ?>">
				<?php if ($image = get_sub_field('imagem')): ?>
				<img src="<?= $image ?>" alt="<?php the_title() ?>">
				<?php endif ?>
			</div>
		</div>
	</div>
</section>
<?php endwhile ?>