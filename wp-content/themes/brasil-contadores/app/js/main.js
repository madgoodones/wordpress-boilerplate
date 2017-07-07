
	$window = $(window);
	/**
	 * Menu hover effect
	 * @type event
	 */
	var $menu = $('.menu');
	$window.on('scroll', function() {
		if ($window.scrollTop()>=5) $menu.addClass('active'); 
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
	 * Anchor smooth
	 * @type event
	 */
	var url = document.location.toString();
  if ( url.match('#') ) {
      $('#'+url.split('#')[1]).addClass('in');
      var cPanelBody = $('#'+url.split('#')[1]);
      var cPanelHeading = cPanelBody.prev();
      cPanelHeading.find( ".panel-title a" ).removeClass('collapsed');
      $('html, body').animate({
	      scrollTop: ($('a[href="'+'#'+url.split('#')[1]+'"]').offset().top) - 150
	    }, 500);
  }
	/**
	 * Owl.clients
	 * @type event
	 */
	$('.owl-clients').owlCarousel({
		items: 4,
		loop: true,
		nav: false,
		dots: false,
		responsive: {
			0: {
				items: 2
			},
			480: {
				items: 3
			},
			768: {
				items: 4
			}
		}
	});
	/**
	 * Owl.clients
	 * @type event
	 */
	$('.owl-testimonials').owlCarousel({
		items: 1,
		loop: true,
		nav: false,
		dots: false
	});
	/**
	 * Owl.cases
	 * @type event
	 */
	$('.owl-cases').owlCarousel({
		items: 3,
		loop: false,
		nav: false,
		dots: false,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1170: {
				items: 3
			}
		}
	});
	var $owlPictures = $('.owl-pictures');
	$owlPictures.owlCarousel({
		items: 1,
		loop: true,
		nav: false,
		dots: false
	});
	$owlPictures.on('changed.owl.carousel', function(event) {
		var $picture = $('.picture');
		var $pictures = $('.pictures');
		$picture.each(function() {
			var $this = $(this);
			$this.on('mouseover', function(event) {
				$picture.removeClass('active');
				$picture.addClass('desactive');
				$(this).removeClass('desactive')
				$(this).addClass('active');
			});
		});
		$pictures.on('mouseleave', function(event) {
			$picture.removeClass('active');
			$picture.removeClass('desactive');
		});
	});
	/**
	* Owl directions
	*/
	var $owl_direction = $('.owl-direction');
	$owl_direction.on('click', function(event) {
		var direction = $(this).data('direction'),
				owl = $(this).data('owl');
		$(owl).trigger(direction + '.owl.carousel');
	});
	/**
	* Pictures
	*/
	var $picture = $('.picture');
	var $pictures = $('.pictures');
	$picture.each(function() {
		var $this = $(this);
		$this.on('mouseover', function(event) {
			$picture.removeClass('active');
			$picture.addClass('desactive');
			$(this).removeClass('desactive')
			$(this).addClass('active');
		});
	});
	$pictures.on('mouseleave', function(event) {
		$picture.removeClass('active');
		$picture.removeClass('desactive');
	});
	/**
	 * Scroll reveal
	 * @type event
	 */
	window.sr = ScrollReveal({ reset: true });
	var $reveal = $('.reveal');
	var fooReveal = {
		delay    : 350,
		easing   : 'ease-in-out',
		origin	 : 'bottom',
		opacity  : 0,
		mobile   : false
	};
	if ($reveal.length) {
		sr.reveal('.reveal', fooReveal);
	}
	/**
	 * Overflow
	 * @type event
	 */
	var $waypoints = $('.waypoint');
	$waypoints.each(function() {
		var $element = $(this),
				$animation = $element.data('animation');
	 	var waypoint = new Waypoint({
		  element: $element,
		  handler: function() {
		    $element.addClass('show animated-medium animated ' + $animation);
		  },
		  offset: 'bottom-in-view'
		});
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