$("document").ready(function(){
          $(window).scroll(function() {
			    $(window).scrollTop()>400 ? $("#returnTop").css('display','block').click(function(){
				    $(window).scrollTop(0);
				}):$("#returnTop").css('display','none');	
					   
			});
		$('a.nava').hover(function(){
			$('body').css({'overflow-x':'hidden'});
		},function(){
		    $('body').css({'overflow-x':'auto'});
		});
		var index = 0;
		$('.g-wrap > a').mouseenter(function(){
			$('.g-wrap').removeClass('state-'+index);
			index = $('.g-wrap > a').index(this)+1;
			$('.g-wrap').addClass('state-'+index);
			//alert(index);
		});
		$('.g-wrap').mouseleave(function(){
			$('.g-wrap').removeClass('state-'+index).addClass('state-0');
		})
});
$(function() {


});

function navigMove(id_obj){
   id_obj.hover(function(){
   	   var index = id_obj.index(this);
   	   
   	   setTimeout(function (){id_obj.find("a:first").css({"top": "16px"});}, 300);
	   setTimeout(function (){id_obj.find("span").css({"top": "-35px"});}, 299);
   },function(){

   })
}

function addColor(id){
	document.getElementById("addColorPic"+id).style.cssText="border:2px solid #57b015";
	document.getElementById("addColorTitle"+id).style.background="#57b015";
}
function removeColor(id){
	document.getElementById("addColorPic"+id).style.cssText="border:2px solid #bae39b";
	document.getElementById("addColorTitle"+id).style.background="#348502";
}
//导航定位
function dingwei(){
	var nav = document.getElementById("nav"); 
	var links = nav.getElementsByTagName("li"); 
	var lilen =$("#nav").find("li");
	
	var st2=new Array();
	var str1=new Array();
	var urrenturl = document.location.href; 	
	st2= urrenturl.split("_")
	var last = 0; 
	for (var i=0;i<links.length;i++) 
	{ 
	    linkurl =  lilen[i].getAttribute("rel"); 
		str1 = linkurl.split("/");
		var length2 = str1.length-1;
		str11 = str1[length2].split(".");
		 if(st2[0].indexOf(str11[0])!=-1) 
			{ 
			 last = i; 
			}
	} 
	links[last].className = "menu";
}
function scrolling(a,b,c){
	var speedp=30;
	var tabp=document.getElementById(a);
	var tab1p=document.getElementById(b);
	var tab2p=document.getElementById(c);
	tab2p.innerHTML=tab1p.innerHTML;
	function Marqueep(){
	if(tab2p.offsetWidth-tabp.scrollLeft<=0)
	tabp.scrollLeft-=tab1p.offsetWidth
	else{
	tabp.scrollLeft++;
	}
	}
	var MyMarp=setInterval(Marqueep,speedp);
	tabp.onmouseover=function() {clearInterval(MyMarp)};
	tabp.onmouseout=function() {MyMarp=setInterval(Marqueep,speedp)};
}

function upscrolling(){
	var speed=40;
	sdemo2.innerHTML = sdemo1.innerHTML;
	function Marquee(){
		if(sdemo2.offsetHeight - sdemo.scrollTop <= 0) {
			sdemo.scrollTop -= sdemo1.offsetHeight;
		} else{
			sdemo.scrollTop++;
		}
	}
	var MyMar = setInterval(Marquee,speed);
	sdemo.onmouseover = function(){ clearInterval(MyMar); }
	sdemo.onmouseout = function(){ MyMar=setInterval(Marquee,speed) }
}

