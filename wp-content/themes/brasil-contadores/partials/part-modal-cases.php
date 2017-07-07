<?php
// the query
$args = array(
  'post_type' => 'cases',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
$count=0; while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
<div id="case-<?= $count ?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog relative" role="document">
    <div class="modal-content">
      <div class="padding-bottom-30 clearfix">
        <button data-dismiss="modal" aria-label="Close" class="close modal-close">X</button>
      </div>
      <div class="clearfix">
        <div class="col-xs-12 col-md-6 col-md-offset-3">
          <div class="modal-title padding-bottom-20">
            <strong class="title color-yellow text-center">Baixe o case completo</strong>
            <p class="text-center">E entenda como funciona a implementação dessa solução</p>
          </div>
          <p class="color-green padding-bottom-20 text-center"><strong>Consulte nossos especialistas e encontre a melhor solução para sua empresa!</strong></p>
          <form class="forms">
            <div class="form-group">
              <input type="text" name="Nome" placeholder="Nome *" id="name" class="input-transparent input-transparent" required>
            </div>
            <div class="form-group">
              <input type="email" name="E-mail" placeholder="E-mail *" id="email" class="input-transparent input-transparent" required>
            </div>
            <div class="form-group">
              <input type="tel" name="Telefone" placeholder="Telefone *" id="phone" class="input-transparent input-transparent" required>
            </div>
            <div class="form-group">
              <input type="text" name="Empresa" placeholder="Empresa" id="corporate" class="input-transparent input-transparent">
            </div>
            <div class="text-center">
            	<input type="hidden" name="Assunto" value="Case Completo - <?php the_title() ?>">
            	<button type="submit" class="button button-blue">RECEBA O CASE COMPLETO</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile ?><?php wp_reset_postdata(); ?>