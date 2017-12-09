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
<style type="text/css">
   .about_t{ width: 100%; height: 300px; border-bottom: 3px double rgb(149,96,52); }
   .about_t img{ display: block; margin: 0 auto; }
   .about_ul{ width: 100%;  display: block; margin-top: 20px;    margin-bottom: 20px; }
   .about_ul li{ width: 500px; padding-left: 78px; height: 52px; float: left; overflow: hidden; padding-top: 4px; padding-bottom: 4px; background: url(/index/0/images/about_tb.png) ; background-repeat: no-repeat; background-size:60px 393px; margin-bottom: 10px;  }
   .about_ul li.dh{ background-position: left 0px }
   .about_ul li.cz{ background-position: left -60px }
   .about_ul li.yx{ background-position: left -123px }
   .about_ul li.qq{ background-position: left -183px }
   .about_ul li.yb{ background-position: left -243px }
   .about_ul li.dz{ background-position: left -303px }
   .about_ul li h2{ height: 32px; line-height: 32px; }
   .about_ul li p{ height: 20px; line-height: 20px; overflow: hidden; text-overflow:ellipsis; white-space: nowrap; }
</style>
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
       <div class="mainCon" id="zoom">
           <div class="mainContect example">
              <div class="about_t">
                    <img src="/<?=$muban?>/images/about_t.jpg" alt="">
              </div>
              <ul class="about_ul clearfix">
                  <li class="dh">
                       <h2>徐乐记·客服电话：</h2>
                       <p><?=$db->lxfs(1)?></p>
                  </li>
                  <li class="cz">
                       <h2>徐乐记·客服传真：</h2>
                       <p><?=$db->lxfs(2)?></p>
                  </li>
                  <li class="yx">
                       <h2>徐乐记·客服邮箱：</h2>
                       <p><?=$db->lxfs(5)?></p>
                  </li>
                  <li class="qq">
                       <h2>徐乐记·客服QQ：</h2>
                       <p><?=$db->lxfs(99)?></p>
                  </li>
                  <li class="yb">
                       <h2>徐乐记·客服邮编：</h2>
                       <p><?=$db->lxfs(6)?></p>
                  </li>
                  <li class="dz">
                       <h2>徐乐记·客服地址：</h2>
                       <p><?=$db->lxfs(0)?></p>
                  </li>
              </ul> 
              <div class="public_cu" id="container" style="width: 100%; height: 420px;"></div>
           </div><!-- end mainContect-->
       </div>
   </div>

    <div class="footer_b">
        <div class="middle clearfix">
            <div class="footer_b_l">
                <a href="/?v/lxwm.html" target="_blank">联系我们</a>
                地址：<?=$db->lxfs(0)?>
            </div>
            <div class="footer_b_r">
                <a href="/" target="_blank"><?=$db->lxfs(101)?></a>
                <a href="/" target="_blank">备案号：<?=$db->lxfs(7)?></a>
                Copyright 2017,ALL Rights Reserved www.xuleji.com
            </div>
        </div>
    </div>
    <div class="side_nav">
        <ul>
            <li class="tel">
                <a href="/?v/lxwm.html" title="联系我们" style="overflow: hidden; width: 60px; left: 0px;">
                    <span>联系我们</span>
                </a>
            </li>
            <li class="QQ">
                <a href="tencent://message/?uin=<?=$db->lxfs(99)?>&amp;Site=qq&amp;Menu=yes" title="在线咨询">
                    <span>在线咨询</span>
                </a>
            </li>
            <li class="sub_QR side_nav_3">
                <a href="javascript:;">
                    <span style="display: none; overflow: hidden; height: 164px; padding: 0px; margin: 0px; width: 164px; opacity: 1;"><img src="/<?=$muban?>/images/ewm.png"></span>
                </a>
            </li>
            <li class="back_top">
                <a href="#" title="返回顶部" style="overflow: hidden; width: 60px; left: 0px;">
                    <span>返回顶部</span>
                </a>
            </li>
        </ul>
        <div class="c"></div>
    </div>

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
        //$('.example img').zoomify({scale:1});
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