$(function(){

	var slides = $('.accslides .train > div');

	slides.mouseover(function(){
		
		slides.stop().animate({
			'width':'50px','opacity':'0.5'
		},700);
		
		
		$(this).stop().animate({
			'width':'450px','opacity':'1'
		},700);
			

	});

	$('.accslides').mouseout(function(){
		slides.stop().animate({
			'width':'150px','opacity':'1'			
		},500);	
		
		
	});

});

