$(function(){
	var slides=$('.accslides .train > div');
	
	window.openslide=function(slideindex,duration){
		slides.stop().animate({
			'width':'50px'
		},duration);
		
		slides.eq(slideindex).stop().animate({
			'width':'450px'
		},duration);
	}
	openslide(1,700);
	
	slides.click(function(){
		openslide(slides.index(this),700);
	});
	
});