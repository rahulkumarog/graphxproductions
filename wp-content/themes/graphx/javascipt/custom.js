jQuery(document).ready(function($) {
	
    //Menu
    $('.menu_icon').click(function (e) {
		e.preventDefault();
        $('.menu').slideToggle();
        $(this).toggleClass('active');
    });
	$("li.menu-item-has-children > a").click(function(){
    	$(".sub-menu").slideToggle();
		$(this).toggleClass('close');
	});
	
    //Slider
    $('.slider_sec').owlCarousel({
        loop: true,
        items: 1,
        margin: 0,
        nav: true,
        dots: true,
		autoplay:true,
    	autoplayTimeout:8000,
   		autoplayHoverPause:true,
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