$(function() {
	if ($(window).width() < 768) {
		// if on mobile device / super small screen
		// $('#featured').lightSlider({
		// 	item: 1,
		// 	slideMargin: 0,
		// 	mode: 'slide',
		// 	loop: true,
		// 	auto: true,
		// 	pause: 4000,
		// 	gallery: true,
		// 	thumbItem: 3,
		// 	currentPagerPosition: 'left'
		// });

		// responsive scrolling
		var $body = $('body'),
				$navtop = $('nav'),
				offset = $navtop.outerHeight();

		$body.css('padding-top', offset + 20);

		if (!($('nav').hasClass('navbar-fixed-top')))
			$('nav').addClass('navbar-fixed-top');
	} else {
		// if on small device ++
		$('#featured').lightSlider({
			item: 1,
			slideMargin: 0,
			// loop: true,
			auto: true,
			pause: 1000,
			gallery: true,
			thumbItem: 3,
			currentPagerPosition: 'left',
			vertical: true,
			verticalHeight: 400,
			vThumbWidth: 210
		});
		if ($('nav').hasClass('navbar-fixed-top'))
			$('nav').removeClass('navbar-fixed-top');
	}

	$('.dropdown-menu>li>a').click(function() {
		$('.latest').toggle();
		$('.featured').toggle();
	});
});