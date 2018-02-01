
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