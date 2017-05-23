$(document).on('ready', function(event) {
	$window = $(window);
	/**
	 * Menu hover effect
	 * @type event
	 */
	var $menu = $('.menu');
	$window.scroll(function() {
		if ($window.scrollTop()>=200) $menu.addClass('active'); 
		else $menu.removeClass('active');
	});
	/**
	 * Background parallax
	 * @type event
	 */
	var $background_parallax = $('.bg-parallax');
	$background_parallax.each(function(){
		var $obj = $(this);
		$window.scroll(function() {
			if ($window.width()>=970) {
				var obj_top = $obj.offset().top;
				var yPos = ((obj_top - $window.scrollTop()) / $obj.data('parallax'));
				var bgpos = '50% '+ yPos + 'px';
				$obj.css('background-position', bgpos );
			}
		});
	});
	$window.trigger('scroll');
	/**
	 * Tirar opacidade
	 * @type event
	 */
	var $hidden_scroll = $('.hidden-scroll');
	$window.on('scroll', function(event) {
		var max = 1;
		var opacity = max *  (1 - ($(this).scrollTop() / $window.height()) * 5);
		if (opacity >= -1 && $window.width()>=1170) {
			$hidden_scroll.css('opacity', opacity);
		}
	});
	/**
	 * Anchor smooth
	 * @type event
	 */
	$('a[href*="#"]:not([href="#"], [href*="#panel"], .hash)').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
	    $('html, body').animate({
	      scrollTop: (target.offset().top-71)
	    }, 1000);
	    return false;
	  }
	}
	});
	/**
	 * Send emails
	 * @type event
	 */
	var $form = $('.forms');
	$form.each(function() {
	  $(this).validate({
	    submitHandler: function(form, event) {
	      event.preventDefault();
	      var $this = $(form),
	      $waiting =  $this.find('.waiting'),
	      $success =  $this.find('.success'),
	      $error =  $this.find('.error'),
	      $response = $this.find('#response');
	      console.log('form submit debug');
	      $response.css('display', 'block');
	      $waiting.css('display', 'block');
	      $this.ajaxSubmit({
	      type: 'POST',
	      success: function(response) {
	        $this[0].reset();
	        $waiting.css('display', 'none');
	        $success.css('display', 'block');
	        console.log(response);
	      },
	      error: function(response) {
	        $waiting.css('display', 'none');
	        $error.css('display', 'block');
	      }
	      });
	      setTimeout(function(){
	        $success.css('display', 'none');
	        $error.css('display', 'none');
	        $response.css('display', 'none')
	      }, 10000);
	     }
	  });
	});
	$.extend($.validator.messages, {
	    required: "Campo obrigatório.",
	    email: "E-mail inválido.",
	    tel: "Telefone inválido."
	});

	$window.trigger('scroll');
});