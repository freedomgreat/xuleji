<!DOCTYPE html>
<html  lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?=$ini->wz(2)?>">
<meta name="description" content="<?=$ini->wz(3)?>">
<title><?=$ini->wz(1)?> - <?=$db->lxfs(101)?></title>
<meta name="Author" content="徐乐记" />
<meta http-equiv = "X-UA-Compatible" content = "IE=edge,chrome=1" />
<meta name="renderer" content="webkit">
<link href="/<?=$muban?>/css/public.css" rel="stylesheet" type="text/css" charset="UTF-8">
<link href="/<?=$muban?>/css/index.css" rel="stylesheet" type="text/css" charset="UTF-8">
<link href="/<?=$muban?>/css/animate.min.css" rel="stylesheet" type="text/css" charset="UTF-8">
<link href="/<?=$muban?>/icon/iconfont.css" rel="stylesheet" type="text/css" charset="UTF-8">
<link href="/<?=$muban?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"  charset="UTF-8"/>
<link href="/<?=$muban?>/css/swiper.min.css" rel="stylesheet" type="text/css"  charset="UTF-8"/>
<!--[if lt IE 9]>
<script src="/<?=$muban?>/js/html5shiv.min.js"></script>
<script src="/<?=$muban?>/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="/<?=$muban?>/js/png.js"></script>
<script>DD_belatedPNG.fix('div,img,span,li,a,a:hover,dd,p,input,select')</script>
<![endif]-->

</head>
<body onload="init()">
    <?php
    include_once($muban."/top.php");
    ?>
    <!-- banner -->
    <div class="banner clearfix">
         <div class="swiper-container" id="swiper_banner">
            <div class="swiper-wrapper">
              <?=$db->huandeng(1,20,3,10,10,0,'
                <div class="swiper-slide" style="background: url([tu1]) no-repeat bottom center #efefef;">
                  <a href="[url1]" title="[biaoti1]" target="_blank"></a>
                </div>
                <div class="swiper-slide" style="background: url([tu2]) no-repeat top center #efefef;">
                    <a href="[url2]" title="[biaoti2]" target="_blank"></a>
                </div>
                <div class="swiper-slide" style="background: url([tu3]) no-repeat top center #efefef;">
                    <a href="[url3]" title="[biaoti3]" target="_blank"></a>
                </div>
              ')?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
         </div>
    </div>
    <!-- about -->
    <div class="about">
         <div class="middle clearfix">
              <div class="about_title">
                 <img src="/<?=$muban?>/images/aboutt.jpg" alt="企业简介">
              </div>
              <div class="about_left fl">
                   <div class="about_left_c">
                       <?=$db->s(16,360)?>...   
                   </div>
                   <a class="more" href="/?s-qyjj.html" target="_blank"><img src="/<?=$muban?>/images/more.jpg" alt=""></a>
              </div>
              <div class="about_right fr">
                 <img src="/<?=$muban?>/images/abouti.png" alt="关于我们">
              </div>
         </div>
    </div>
    <div class="jiange">
       <a href="/?s-hzjm.html" target="_blank" style="display: block; width: 100%; height: 386px;"></a>
    </div>
    <!-- goods -->
    <div class="goods">
       <div class="middle clearfix">
        <div class="goods_title"><img src="/<?=$muban?>/images/goodst.png" alt=""></div>
        <div class="goods_c">
             <?=$db->shuchu_new(2,2,3,20,4,'...','内容更新中...',0,0,'
              <a href="[url]"><img src="[tu]" alt="[biaoti]"><p>[biaoti]</p></a>
             ',0)?>  
        </div>
        <div class="goods_m">
             <a class="more" href="/?lei/new/2-0-1/" target="_blank">
              <img src="/<?=$muban?>/images/more.jpg" alt=""></a>
        </div>
      </div>
    </div>
      <!--div class="public_cu" id="container">
         </div-->
    <?php
    include_once($muban."/end.php");
    ?>

    <script src="/<?=$muban?>/js/jquery-1.9.1.min.js"></script>
    <script src="/<?=$muban?>/js/jquery.lazyload.js"></script>
    <script src="/<?=$muban?>/js/jquery.easing.min.js"></script>
    <script src="/<?=$muban?>/js/swiper.min.js"></script>
    <script src="/<?=$muban?>/js/service.js"></script>
    
    <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=T25BZ-2EY3K-7QEJQ-ATBJU-IFBJT-6GFPN"></script>
    <script>
        //初始化url
        //url
        var url_main="http://www.ihaofan.com";
        //登陆 url
        var url_login = "http://www.ihaofan.com/login";
        var ss="http://www.ihaofan.com/detail";
        //动态密码 url
        var url_dynamic = "http://www.ihaofan.com/login/dynamic";
        //退出登陆 url
        var url_logout = "http://www.ihaofan.com/login/logout";
        var url_message = "/?ihaofan"
        ///////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////
            var geocoder,map,marker = null;
            var init = function() {
                var center = new qq.maps.LatLng(39.916527,116.397128);
                var address = '抚顺市万盛餐饮管理有限公司'
                map = new qq.maps.Map(document.getElementById('container'),{
                    center: center,
                    zoom: 15
                });
                //调用地址解析类
                geocoder = new qq.maps.Geocoder({
                    complete : function(result){
                        map.setCenter(result.detail.location);
                        var marker = new qq.maps.Marker({
                            map:map,
                            position: result.detail.location
                        });
                    }
                });
                geocoder.getLocation(address);
            }


            function codeAddress() {
                var address = document.getElementById("address").value;
                //通过getLocation();方法获取位置信息值
                geocoder.getLocation(address);
            }
    </script>

    <!--script src="js/retina.js"></script-->

    <script>
        (function (doc, win) {
            var docEl = doc.documentElement;
            //$("img.lazy").lazyload({effect: "fadeIn",threshold :200,failurelimit : 10,placeholder : "images/loading.gif"});
            var swiper = new Swiper('#swiper_banner', {
                pagination: '.swiper-pagination',
                simulateTouch : false,
                paginationClickable: true,
                autoplay : 8000,
                loop : true,
                effect: 'fade'
            });
        })(document, window); 
    </script>
</body>
</html>