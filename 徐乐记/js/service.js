$(document).ready(function () {
    /*右侧定位导航*/
    $(".tel,.QQ,.back_top").hover(function() {
        $(this).find('a').stop().animate({'width':'140px','left':'-80px'}, 300)
    },function(){
        $(this).find('a').stop().animate({'width':'60px','left':0}, 300)
    });
    $(".side_nav ul li").eq(2).addClass('side_nav_3')//控制二维码
    $(".side_nav ul li").eq(2).hover(function() {
        $(this).find('span').stop().toggle(300)
    });             
});
		
