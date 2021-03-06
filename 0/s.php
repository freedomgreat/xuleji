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
<link href="/<?=$muban?>/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css"  charset="UTF-8"/>
<link rel="stylesheet" href="/<?=$muban?>/dist/zoomify.min.css">
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
    <!-- v_banner -->
    <div class="v_banner v_banner_s"></div>
    <!-- conter -->
    <div class="v_main">
       <div class="section borderBottom2">
           <div class="mainConTitle">
               <?=$ini_4?>
               <span class="position">当前位置：<a href="/" title="首页">首页</a>&gt;<?=$ini_4?></span>
           </div>
       </div>
       <div class="mainCon" id="zoom"  style=" width: 1200px;">
           <div class="mainContect example">
              <?=$ini->s_all()?> 
           </div><!-- end mainContect-->
       </div>
   </div>
    <?php
    include_once($muban."/end.php");
    ?>

    <script src="/<?=$muban?>/js/jquery-1.9.1.min.js"></script>
    <script src="/<?=$muban?>/js/jquery.lazyload.js"></script>
    <script src="/<?=$muban?>/js/jquery.easing.min.js"></script>
    <script src="/<?=$muban?>/js/swiper.min.js"></script>
    <script src="/<?=$muban?>/js/service.js"></script>
    <script src="/<?=$muban?>/js/Tools.js"></script>
    <script src="/<?=$muban?>/dist/zoomify.min.js"></script>
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
        var url_message = "/?ihaofan";
        $('.example img').zoomify({scale:1});
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
            $('.mainCon').myImgZoom({roomId:'#zoom'});
        })(document, window); 
    </script>
</body>
</html>