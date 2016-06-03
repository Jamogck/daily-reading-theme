jQuery(document).ready(function($) {
	$('.nav_wrapper').click(function() {
		$('#primary-menu').slideToggle();
		$('#nav-trigger').toggleClass('is-open');
	});

	$('.hero-triangle').click(function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $('#starthere').offset().top
		}, 500);
	});
});