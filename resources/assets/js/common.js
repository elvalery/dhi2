$(function() {
	$(document).ready(function() {
		$('input.phone-mask').mask('+99 (999) 999 99 99');

		setNavClass();
	});

	$(window).resize(function() {
		setNavClass();
	});

	function setNavClass() {
		if ($('.nav').length) {
			$(window).width() > 991 ? $('.nav').addClass('show') : $('.nav').removeClass('show');
		}
	}

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

	if ($(window).width() <= 991) {
		$('.hamburger').click(function() {
			$(this).toggleClass('is-active');
			$('.nav').toggleClass('show');
			$('body').toggleClass('nav-show');
		});

		$('.nav-list__item a').click(function() {
			$('.hamburger').removeClass('is-active');
		});

		$(document).on('click', function(event) {
			if (!$(event.target).closest('nav.nav').length && !$(event.target).closest('.hamburger').length) {
				$('.hamburger').removeClass('is-active');
				$('.nav').removeClass('show');
				$('body').removeClass('nav-show');
			}

			event.stopPropagation();
		});
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

	$(".service-choice__button").on('click', function(){
		$(".service-choice-wrapper").slideToggle('medium', function() {
			if ($(this).is(':visible'))
				$(this).css('display','flex');
		});
	});

});
