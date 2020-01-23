$(function() {
	var windowWidth, menuBreakpoint;

	menuBreakpoint = 991;

	$(document).ready(function() {
		windowWidth = $(window).width();

		$('input.phone-mask').mask('+99 (999) 999 99 99');

		// setNavClass();
		initClickHandler();
	});

	$(window).resize(function() {
		windowWidth = $(window).width();

		// setNavClass();
		initClickHandler();

		if (windowWidth <= menuBreakpoint) {
			closeMenu();
		}
	});

	$('.hamburger').click(function() {
		if (windowWidth <= menuBreakpoint) {
			$(this).toggleClass('is-active');
			$('.nav').toggleClass('show');
			$('body').toggleClass('nav-show');
		}
	});

	$('.nav-list__item a').click(function() {
		if (windowWidth <= menuBreakpoint) {
			$('.hamburger').removeClass('is-active');
		}
	});

	$('.nav-list__item > span').on('click', function() {
		if ($(this).parent().hasClass('on')) {
			$(this).parent().removeClass('on');
			$(this).siblings('.nav-list-sublist').slideUp();

			return;
		}

		$('.nav-list__item').removeClass('on');
		$('.nav-list-sublist').slideUp();
		$(this).parent().addClass('on');
		$(this).siblings('.nav-list-sublist').slideDown();
	});

	// function setNavClass() {
	// 	if ($('.nav').length) {
	// 		windowWidth > menuBreakpoint ? $('.nav').addClass('show') : $('.nav').removeClass('show');
	// 	}
	// }

	function initClickHandler() {
		windowWidth <= menuBreakpoint ?
			document.addEventListener('click', eventTarget, false) :
			document.removeEventListener('click', eventTarget, false);
	}

	function closeMenu() {
		$('.hamburger').removeClass('is-active');
		$('.nav').removeClass('show');
		$('body').removeClass('nav-show');
	}

	function eventTarget(event) {
		if (!$(event.target).closest('nav.nav').length && !$(event.target).closest('.hamburger').length) {
			closeMenu();
		}

		event.stopPropagation();
	}

	$('.fancybox').fancybox({
		margin: 0,
		padding: 0
	});

	$('.main-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		fade: true,
		autoplay: true
	});

	$('.detail-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		fade: true,
		autoplay: true
	});

	var widthDots = $('.slick-dots').width();
	$('.slick-dots').css('margin-left', 'calc('+widthDots +' / 2)');

	$('.tab-mnu').on('click', 'li:not(.active)', function() {
	$(this)
		.addClass('active').siblings().removeClass('active')
		.closest('.tabs').find('.tab-content').removeClass('active').eq($(this).index()).addClass('active');
	});

	$('.service-choice__button').on('click', function(){
		$('.service-choice-wrapper').slideToggle('medium', function() {
			if ($(this).is(':visible'))
				$(this).css('display','flex');
		});
	});

	window.setLocale = function(locale) {
		var location = window.location;

		if (locale !== 'ru') {
			var arr = location.pathname.split('/');

			arr.splice(0, 2);

			window.location = location.origin + '/' + arr.join('/');
		} else {
			window.location = location.origin + '/ru' + location.pathname;
		}
	}
});
