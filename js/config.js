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
	} else {
		// if on small device ++
		$('#featured').lightSlider({
			item: 1,
			slideMargin: 0,
			loop: true,
			auto: true,
			pause: 4000,
			gallery: true,
			thumbItem: 3,
			currentPagerPosition: 'left',
			vertical: true,
			verticalHeight: 250,
			vThumbWidth: 125
		});
	}

	$('.dropdown-menu>li>a').click(function() {
		$('.latest').toggle();
		$('.featured').toggle();
	});
});