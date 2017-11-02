<?php
// the query
$args = array(
  'post_type' => 'faq',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) : ?>
<section class="faq">
	<div class="container padding-50">
		<div class="row center-xs">
			<div class="text-left col-xs-12 col-md-8 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php $count=0; while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading-<?= get_post_field( 'post_name', get_post() ) ?>">
						<h4 class="panel-title">
							<a role="button" <?php if ($count!=1): ?>class="collapsed"<?php endif ?> data-toggle="collapse" data-parent="#accordion" href="#<?= get_post_field( 'post_name', get_post() ) ?>" aria-expanded="false" aria-controls="<?= get_post_field( 'post_name', get_post() ) ?>">
								<div class="row middle-xs">
									<div class="col-xs text-left">
										<?php the_title() ?>
									</div>
									<div class="col-xs-2 text-right">
										<img src="<?= get_template_directory_uri() . '/assets/img/angle-down.png' ?>" alt="Ler mais">
									</div>
								</div>
							</a>
						</h4>
					</div>
					<div id="<?= get_post_field( 'post_name', get_post() ) ?>" class="panel-collapse collapse <?php if ($count==1): ?>in<?php endif ?>" role="tabpanel" aria-labelledby="heading-<?= get_post_field( 'post_name', get_post() ) ?>">
						<div class="panel-body">
							<?php the_content() ?>
						</div>
					</div>
				</div>
				<?php endwhile ?>
			</div>
		</div>
	</div>
</section>
<?php endif ?>