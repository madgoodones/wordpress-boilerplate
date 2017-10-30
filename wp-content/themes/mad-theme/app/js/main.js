
	$window = $(window);
	/**
	 * Menu hover effect
	 */
	var $menu = $('.menu'),
		$menuLinks = $('.menu a'),
		$menuHamburger = $('#menuHamburger');

	$menuHamburger.on('click', function(event) {
		event.preventDefault();
		$(this).toggleClass('is-active');
		$menu.toggleClass('active');
	});
	$menuLinks.on('click', function(event) {
		$menu.toggleClass('active');
		setTimeout(function() {
			$menuHamburger.removeClass('is-active');
		}, 500);
	});
	$window.scroll(function(event) {
		if ($window.scrollTop() >= 5) $menu.addClass('active');
		else $menu.removeClass('active');
	});
	/**
	 * Background parallax
	 * @type event
	 */
	var $background_parallax = $('.bg-parallax');
	$background_parallax.each(function(){
		var $obj = $(this);
		$window.scroll(function(event) {
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
	* Slick
	*/
	$('#slick').slick({
		arrows: false,
		dots: true,
		pauseOnDotsHover: true,
		autoplay: true,
		cssEase: 'linear',
		speed: 1000,
		fade: true
	});