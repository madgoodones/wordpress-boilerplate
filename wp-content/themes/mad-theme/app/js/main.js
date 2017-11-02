
	$window = $(window);
	/**
	 * Menu hover effect
	 */
	var $menu = $('.menu'),
		$menuLinks = $('.menu a:not([data-toggle*="dropdown"])'),
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
		if ($window.scrollTop() >= 5) $menu.addClass('is-active');
		else $menu.removeClass('is-active');
	});
	/**
	 * Dropdown menu
	 */
	$menu.find('li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
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
	$('a[href*="#"]:not([href="#"], [data-toggle*="collapse"], [role*="tab"], [href*="#panel"], .hash)').click(function() {
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
	* Slick
	*/
	$('#slick').slick({
		arrows: false,
		dots: true,
		pauseOnDotsHover: true,
		autoplay: true,
		cssEase: 'linear',
		speed: 3000,
		fade: true
	});
	/**
	* Pre-posts
	*/
	$('#pre-posts').slick({
		arrows: false,
		dots: false,
		autoplay: true,
		speed: 2000,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		    {
		      breakpoint: 970,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		]
	});
	/**
	* Testimonials
	*/
	$('#slick-testimonials').slick({
		arrows: true,
		dots: false,
		autoplay: true,
		speed: 500,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button type="button" class="slick-arrows slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-arrows slick-next"></button>'
	});

	/**
	 * Habilitar os modais
	 */
	var $iziModal = $(".iziModal"),
		$main = $('main');
	if (!$iziModal.length == 0) {
		$iziModal.iziModal({
			width: 800,
			radius: 0,
			borderBottom: false
		});
	}
	$(document).on('opening', '.iziModal', function (e) {
		$main.css('filter', 'blur(6px)');
	});
	$(document).on('closed', '.iziModal', function (e) {
		$main.css('filter', 'blur(0)');
	});