//为避免冲突，将我们的方法用一个匿名方法包裹起来
(function($) {
	$.fn.extend({
	   NewAnimate: function(options){
		  var defaults = {
				object:'.bannerimg',
				object_ative:'bannerative',
				object_speed:7000,
		  };
		  var options = $.extend(defaults, options);
		  return this.each(function(){ 
               var $o = options;
			   var $throttle = true;
			   var $record = 0;
			   var $index = 0;
			   var $int = '';
			   var $object = $($o.object);
			   var $len = $($o.object).length;
			   var $li = $('.number').children('i');
			   var imgArr = [];
	           var flash = false;
	           var initWidth , initHeight;
	           var neiWidth , neiHeight;
	           var txt1 = $('.txt1');
	           var txt3 = $('.txt3');
               
               init();
               function init(){    
                   for(var i=0;i<$len;i++){
                   	  var temp = $object.eq(i).attr('data-img');
                   	  imgArr.push(temp);
                   }
	               preloadimg(imgArr,function(){
						$(".bannerimg").each(function(index,el){
							if($(el).attr("data-img") != ""){
								var s = 'url('+$(el).attr("data-img")+')'; 
								$(el).css("background-image",s);
							}
						});
					});  	   
               }


               function preloadimg (arr,comp){
					var n = 0;
					var loadImg = function(src){
						var img = new Image();
						img.onload = function(){
							n++;
							var v = Math.ceil(n/l*100);
							if(v == 100){
				                 imagesInit();
							}
							if(n == l){
								comp();
							}
						}
						img.onerror = function(){
						   img.src = "/index/0/images/loading.gif";
						}
						img.src = src;
					}
					if(typeof(arr) == "string"){
						var l = 1;
						var w = new loadImg(arr);
					}else{
						var l = arr.length;
						for(var i=0;i<l;i++){
							var w = new loadImg(arr[i]);
						}
						
					}
				   }

			   function imagesInit(){
				   var loading = $('.loading');
				   loading.hide();
				   AnimatePlay(0);
			   }
			   function AnimatePlay(num){
				   clearInterval($int);
				   $object.fadeOut('slow');
                   $object.eq(num).fadeIn('slow');
				   $li.eq(num).addClass('current').siblings().removeClass('current');
				   if(num == 0){
					  // txt1.removeClass('bannerative fadeInDown animated').eq(num).addClass('bannerative fadeInDown animated');
					  // txt3.removeClass('bannerative fadeInUp animated').eq(num).addClass('bannerative fadeInUp animated');
				   }else if(num == 1){
                      // txt1.removeClass('bannerative fadeInDown animated').eq(num).addClass('bannerative fadeInDown animated');
					  // txt3.removeClass('bannerative fadeInUp animated').eq(num).addClass('bannerative fadeInUp animated');
				   }else if(num == 2){
				   	  //txt1.removeClass('bannerative fadeInDown animated').eq(num).addClass('bannerative fadeInDown animated');
					  // txt3.removeClass('bannerative fadeInUp animated').eq(num).addClass('bannerative fadeInUp animated');
				   }
				   $record = num;
				   setTimeout(function(){$throttle = true}, 1000);
				   $int = setTimeout(AnimateAuto, $o.object_speed);
			   };
			   $li.click(function(){
			       if($throttle){
					  var index_num = $li.index(this);
					  if($record != index_num){
						  $index= index_num;
						  $throttle = false;
						  AnimatePlay($index);
					  }
				   }
			   });
			   function AnimateAuto(){
                   if($throttle){
					$throttle = false;
					$index = $index + 1;	
					if ($index == $len) {
						$index = 0;
					}
					AnimatePlay($index);
				  }
			   };
			  /*$(this).mouseenter(function ()  //移动到上面时停止自动切换
				{
					clearInterval($int);
				});
				$(this).mouseleave(function ()  //移开时继续自动切换
				{
					$int = setTimeout(AnimateAuto, 2000);
				});	*/			   
		  });
		}
	});
	
	$.fn.extend({
        //插件名字
        myImgZoom: function(options) {
		    var defaults = {
					roomId: '#zoom',
					width : 1178
					//……
			};
			var options = $.extend(defaults, options);
            //遍历匹配元素的集合
            return this.each(function() {
                //在这里编写相应代码进行处理
				var o = options;
                var ImgSize = $(o.roomId+" img");
				var imgsizepanduan=false;
				var moren_w = o.width;
				var intz;
				function imgsize(vandleiimg){         
					  var vandleiimg =arguments[0]?arguments[0]:ImgSize; 
					  var vandleiimgW , vandleiimgH;
					  
					  for(var i = 0 ; i<vandleiimg.length ; i++){

					  vandleiimgW = vandleiimg.eq(i).width();  
					  vandleiimgH = vandleiimg.eq(i).height();  
					  if(vandleiimgW > moren_w ){
								 
						  vandleiimgH = Math.ceil( vandleiimgH * (moren_w / vandleiimgW));
						  vandleiimgW = moren_w;
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
        }
    });
	
 //传递jQuery到方法中，这样我们可以使用任何javascript中的变量来代替"$"      
})(jQuery); 

		
