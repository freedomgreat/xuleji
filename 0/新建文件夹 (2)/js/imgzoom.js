$(document).ready(function () {
			
	 var ImgSize = $("#zoom img");
	 var imgsizepanduan=false;
	 var intz;
	 var imgWidth = $('#zoom_w').val();
	 function imgsize(vandleiimg){
          var vandleiimg =arguments[0]?arguments[0]:ImgSize; 
		  var vandleiimgW , vandleiimgH;
				  
		  for(var i = 0 ; i<vandleiimg.length ; i++){
			vandleiimgW = vandleiimg.eq(i).width();  
			vandleiimgH = vandleiimg.eq(i).height();  
			if(vandleiimgW > imgWidth ){
	            vandleiimgH = Math.ceil( vandleiimgH * (imgWidth / vandleiimgW));
				vandleiimgW = imgWidth;
	            vandleiimg.eq(i).css({width :vandleiimgW+'px' });
				vandleiimg.eq(i).css({height :vandleiimgH+'px' });
                imgsizepanduan=true;
	        }
		  }
	}
    if(imgsizepanduan==false){
        intz = setInterval(imgsize, 100);
    }else{
        clearInterval(intz);
    }				
});
		
