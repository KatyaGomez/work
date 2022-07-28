jQuery(document).ready(function(){

jQuery(window).scroll(function(){
		asideCShareTop = altoMenu + headerH + titH + autorH + videoH + sliderH + 40;
		altoBACS = txtH + asideCShareTop + 40 - asideCSH;
		altoMenu = $('.content_banner').height();
		var icono = $('.header_int').offset();
		var iconoTop = icono.top;


		var iconPos = iconoTop - pos;
		pos = $(this).scrollTop();

		if(pos > altoMenu){
			$('header').addClass('act');
		}
		else{
			$('header').removeClass('act');
		}

	
		
	})


}); 