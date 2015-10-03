(function($){
	"use strict";
    $(document).ready(function(){
		/* Scroll to Top
		================================================== */
		$('.toTop').click(function() {
			$('body,html').animate({ scrollTop:0 } , 500);
			$('.header ul a').removeClass('active')
			$('.header ul a.toTop').addClass('active')
		});
		$(".header ul a").click(function() {
			if($('.header ul a').hasClass('active')){
				$('.header ul a').removeClass('active')
				$(this).addClass('active')
			}
		});
		$(".features").click(function() {
				$('html, body').animate({
					scrollTop: $("#features").offset().top
				}, 500);
		});
		$(".signup").click(function() {
				$('html, body').animate({
					scrollTop: $("#signup").offset().top
				}, 500);
		});
		$(".reviews").click(function() {
				$('html, body').animate({
					scrollTop: $("#reviews").offset().top
				}, 500);
		});
		$(".contact").click(function() {
				$('html, body').animate({
					scrollTop: $("#contact").offset().top
				}, 500);
		});
		$('.open-popup-link').magnificPopup({
			type:'inline',
			midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		});
		$('.rotation').unslider();
		$(".darkselect").selectbox({
			effect: "slide"
		});
	});
})(jQuery);