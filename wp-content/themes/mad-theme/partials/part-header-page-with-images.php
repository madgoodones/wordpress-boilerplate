<?php 
$hasImage = 0;
if ($image1 = get_field('sub-header-1')) $hasImage = 1;
if ($image2 = get_field('sub-header-2')) $hasImage = 1;
?>
<?php if (get_the_content()): ?>
<div class="header-page-blog">
	<div class="container">
		<div class="row middle-xs center-xs">
			<?php if ($image1): ?>
			<div class="col-xs-12 col-md-4">
				<img src="<?= $image1['url'] ?>" alt="PC On User - <?php the_title() ?>">
			</div>
			<?php endif ?>
			<?php if ($hasImage == 0): ?>
			<div class="col-xs-12 col-md-4 padding-50">
			<?php else: ?>
			<div class="col-xs-12 col-md-4 padding-20">
			<?php endif ?>
				<?php the_content() ?>
			</div>
			<?php if ($image2): ?>
			<div class="col-xs-12 col-md-4">
				<img src="<?= $image2['url'] ?>" alt="PC On User - <?php the_title() ?>">
			</div>
			<?php endif ?>
		</div>
	</div>
</div>
<?php endif ?>