$(document).ready(function () {
              
	var $hlogin = $('.hlogin');
	var $header = $('.header');
	$header.click(function(){
		alert(1);
		if($header.hasClass('header_bg')){
			alert(1);
		}else{
			alert(2);
		}
	});
	
});
		
