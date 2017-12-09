/*
(function (doc, win) {
    var docEl = doc.documentElement,
        resizeEvt = "orientationchange" in window ? "orientationchange" : "resize",
        recalc = function () {
            var clientWidth = docEl.clientWidth;
            //var foot = document.getElementById("foot");
            if (!clientWidth) return;
            if (clientWidth<640){
                docEl.style.fontSize = 120 * (clientWidth / 640) + "px";
                console.log(120 * (clientWidth / 640) + "px");
            }else{
                docEl.style.fontSize = "120px";
            }
        };

    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document, window);
*/
$(document).ready(function () {
       var $search   = $('.search_l');     
	   var $search_c = $('.search');
	   var $nav_btn  = $('.nav-btn');
	   var $xbtn     = $('.xbtn');
	   var $wrap     = $('#wrap');
	   var $black    = $('.black-fixed');
	   var $search_t = true;
	   var $nav      = $('.nav');
	   var $type     = $('.type');
	   var $class    = $('.class-btn');

       $class.click(function(){
	       $type.stop().toggle(100);
	   })
	   $search.click(function(){
	      if($search_t){
			  if($search_c.hasClass('searchth')){
					$search_c.removeClass('searchth');
					$search_c.animate({top:[0+'%','easeInExpo']},1000);
			  }
			  $search_t = false;
		  }
		  setTimeout(function(){$search_t = true}, 1000);
	   })
	   $xbtn.click(function(){
	      if($search_t){
              $search_c.animate({top:[-1+'rem','easeInExpo']},1000,function(){
					      $search_c.addClass('searchth');
			  });
			  $search_t = false;
		  }
		  setTimeout(function(){$search_t = true}, 1000);
	   })
	   $nav_btn.click(function(){
			  if(!$wrap.hasClass('wrap-clicked')){
					$wrap.addClass('wrap-clicked');
					$nav.addClass('fixed');	
					$black.addClass('black-clicked');
			  }
	   })
	   $black.click(function(){
			  if($wrap.hasClass('wrap-clicked')){
					$wrap.removeClass('wrap-clicked');
					$black.removeClass('black-clicked');
					$nav.removeClass('fixed');
			  }
	   })
	   
});
		
