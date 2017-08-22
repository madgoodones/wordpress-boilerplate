<?php
// check if the flexible content field has rows of data
if( get_field('content') ):
 	// loop through the rows of data
  while ( has_sub_field('content') ) :
?>
<?php if (get_row_layout() == 'banner'): ?>
<!-- Banner -->
<?php $image = get_sub_field('image'); ?>
<figure class="banner bg-parallax" data-parallax="7" style="background-image: url('<?= $image['url'] ?>');">
	<img class="sr-only" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
	<?php if (get_sub_field('legend')): ?>
	<figcaption class="banner-caption">
		<div class="reveal"><?= get_sub_field('legend') ?></div>
	</figcaption>
	<?php endif ?>
</figure>
<?php elseif (get_row_layout() == 'sentence'): ?>
<!-- Sentence -->
<?php $image = get_sub_field('image'); ?>
<section class="sentence">
	<div class="container relative reveal">
		<figure class="sentence-image">
			<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
		</figure>
		<div class="sentence-content">
			<?php if (get_sub_field('author')): ?>
			<?= get_sub_field('sentence') ?>
			<span class="author"><?= get_sub_field('author') ?></span>
			<?php endif ?>
		</div>
	</div>
</section>
<?php elseif (get_row_layout() == 'storytelling_two'): ?>
<!-- Storytelling_two -->
<?php $background = get_sub_field('background'); ?>
<section class="storys bg-parallax" data-parallax="5" style="background-image: url('<?= $background['url'] ?>');">
	<div class="page-header text-center">
		<span class="title title--brand-red color-black"><?= get_sub_field('title') ?></span>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 form-group">
				<?= get_sub_field('content-left') ?>
			</div>
			<div class="col-xs-12 col-sm-6">
				<?= get_sub_field('content-right') ?>
			</div>
		</div>
	</div>
</section>
<?php elseif (get_row_layout() == 'storytelling'): ?>
<!-- Storytelling_two -->
<?php $background = get_sub_field('background'); ?>
<section class="storys bg-parallax" data-parallax="5" style="background-image: url('<?= $background['url'] ?>');">
	<div class="page-header text-center">
		<span class="title title--brand-red color-black"><?= get_sub_field('title') ?></span>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?= get_sub_field('content') ?>
			</div>
		</div>
	</div>
</section>
<?php endif ?>
<?php
  endwhile;
endif;
?>