// Slider Script //
// 웹버전 //
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 3,
	spaceBetween: 30,
	// loop: true,
});

var swiper = new Swiper('.swiper-container2', {
	slidesPerView: 1,
	autoplay: {
		delay: 2700
	},
	speed: 1000,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,

	},
	loop: true,
});

