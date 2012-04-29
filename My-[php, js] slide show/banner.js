var picWidth = 980,
difwidth=100,
currentSlide = 0,
divScrl, liBtns, picsLen, go2slide, nextSlide, prvSlide;

var key=1

window.onload=function(){
	
	divScrl = document.getElementsByClassName('banner').item(0).getElementsByClassName('scroll').item(0);
	
	liBtns = document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0).getElementsByTagName('li');
	
	ul = document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0);
	
	picsLen = liBtns.length;
	var now=980/(picsLen+1);
	
	for(var i=0;i<picsLen;i++){		
		pics = liBtns.item(i).style.width=now+'px';				
	}
	
	
	for(var i=0;i<picsLen;i++){		
		pics = liBtns.item(i).getElementsByTagName('img').item(0).style.width=now+'px';				
	}
	
	
	/*divScrl.onmouseover=function(){
		
		ul.style.bottom=10+'px';
	}*/
	
	
	divScrl.onclick=function(){
		if(key==0){
			ul.style.bottom=-50+'px';
			key=1;			
		}
		else if(key==1){
			ul.style.bottom=10+'px';
			key=0;			
		}
		
	}
	
	
	ul.style.width= (105 * picsLen) +'px';
	
	divScrl.style.width=(picsLen*picWidth)+'px';

	go2slide = function (n){
		if(n>=picsLen) n=0;
		if(n<0) n=picsLen-1;
		
		divScrl.style.left = -n*picWidth + 'px';
		currentSlide=n;
	};
	
	nextSlide = function (){
		go2slide(currentSlide+1)
	};
	
	divScrl.onkeypress=function(){
		alert(1);
	}
	
	prvSlide = function (){
		go2slide(currentSlide-1)
	};

	for(var i=0;i<picsLen;i++){
		(function(j){
			liBtns.item(j).onclick=function(){
				go2slide(j);
			}
		})(i);
	}
	
	// auto play !
	repeat=function(){
		go2slide(currentSlide+1)
		setTimeout(repeat,4000);
	}
	setTimeout(repeat,1000);
}
