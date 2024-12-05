jQuery(document).ready(function($) {
	
    //Menu
    $('.menu_icon').click(function (e) {
		e.preventDefault();
        $('.menu').slideToggle();
        $(this).toggleClass('active');
    });
	
    //Slider
    $('.slider_sec').owlCarousel({
        loop: true,
        items: 1,
        margin: 0,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            }
        }
    });

  $(window).scroll(function(e) {
		if ($(window).scrollTop() > 50) {
			$('header').addClass('small');
		} else {
			$('header').removeClass('small'); 
		}
 });

 
});