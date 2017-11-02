<div id="consult-specialist" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog relative" role="document">
    <div class="modal-content">
      <div class="padding-bottom-30 clearfix">
        <button data-dismiss="modal" aria-label="Close" class="close modal-close">X</button>
      </div>

      <div class="clearfix">
        <div class="col-xs-12 col-md-6 padding-bottom-20">
          <div class="modal-title padding-bottom-40">
            <strong class="title">Entre em contato conosco</strong>
            <p>Estamos aguardando seu contato</p>
          </div>
          <p>E-mail: contato@brasilcontadores.com.br</p>
          <p><strong>Sede São Bernardo</strong><br>
            Rua Tomé de Souza, 200<br>
            Centro, São Bernardo do Campo/SP<br>
            Tel: +55 (11) 4126-3300</p>
          <p><strong>Sede São Paulo</strong><br>
            Avenida Paulista, 777, Conj. 72<br>
            Bela Vista, São Paulo/SP<br>
            Tel: +55 (11) 4126-3300</p>
        </div>
        <div class="col-xs-12 col-md-6 border-left">
          <div class="modal-title padding-bottom-20">
            <strong class="title">Consulte um especialista</strong>
            <p>Nossos especialistas estão prontos para lhe ajudar com a melhor solução para seu negócio</p>
          </div>
          <form class="forms">
            <div class="form-group">
              <input type="text" name="Nome" placeholder="Nome *" id="name" class="input-transparent" required>
            </div>
            <div class="form-group">
              <input type="email" name="E-mail" placeholder="E-mail *" id="email" class="input-transparent" required>
            </div>
            <div class="form-group">
              <input type="tel" name="Telefone" placeholder="Telefone *" id="phone" class="input-transparent" required>
            </div>
            <div class="form-group">
              <input type="text" name="Empresa" placeholder="Empresa" id="corporate" class="input-transparent">
            </div>
            <div class="form-group">
              <textarea name="Mensagem" placeholder="Mensagem *" id="message" rows="3" class="input-transparent" required></textarea>
            </div>
            <div class="text-center">
              <input type="hidden" name="Assunto" value="Consultar um especialista">
              <button type="submit" class="button button-blue">ENVIAR</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div id="<?= get_post_field( 'post_name', get_post() ) ?>" data-izimodal-group="e-books" class="iziModal">
  <div class="iziModal-body ebooks-modal">
    <div class="row middle-xs">
      <div class="col-xs-12 col-sm-3 margin-bottom-15">
        <img data-tilt data-tilt-axis="x" src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title() ?>">
      </div>
      <div class="col-xs-12 col-sm-9 margin-bottom-15">
        <div class="row">
          <div class="col-xs-12 padding-bottom-15">
            <strong class="title"><?php the_title() ?> <span class="closer" data-izimodal-close>X</span></strong>
            <?php if ($author = get_field('autor')): ?>
            <span class="author"><?= $author ?></span>
            <?php endif ?>
          </div>
          <div class="col-xs-12 padding-bottom-30">
            <?php the_content() ?>
          </div>
          <div class="col-xs-12">
            <div class="row middle-xs center-xs">
              <div class="col-xs">
                <input class="input-outline" type="email" name="E-mail" placeholder="Digite seu e-mail aqui" required>
              </div>
              <div class="col-xs">
                <input type="submit" class="button button-white-blue" value="FAZER DOWNLOAD">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>