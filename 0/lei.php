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
.l_a_0 {}
.l_a_0_ul{ clear: both; }
.l_a_1 {
    width: 240px;
    margin: 0px 28px 28px;
    border: #ddd 1px solid;
    text-align: center;
    float: left;
}
.l_a_1 .li {    clear: both;
    height: 40px;
    line-height: 40px;
    color: rgb(59,165,45);
    overflow: hidden;
    background: #eee;}
.l_a_1 .li a {color:rgb(59,165,45);}
.l_a_11 img {
    width: 240px;
    float: left;
}
.l_a_1 .li:hover{
    background: rgb(59,165,45);
}
.l_a_1 .li:hover a{
    color: #fff;
}
.l_b_1 {margin:0 auto; text-align:left}
.l_b_1 .l_b_1_ul li { border-bottom:1px dashed #acacac; height:36px; font-size: 16px; line-height: 40px; text-align:left;padding:0px 0 0 15px; background:url(/index/0/images/listt.png) no-repeat; background-position:left center; overflow:hidden}
.l_b_1 .l_b_1_ul a {color:#333}
.l_b_1 .l_b_1_ul a:hover {color:#FF4303}
.l_b_1 .l_b_1_ul kbd { float:right; width:80px; padding:0px; margin-right:15px;white-space: nowrap; overflow:hidden}

.page{ width:1179px; float: left; height: 40px; margin-top: 10px; }

.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
  }
  .label-primary {
    background-color: rgb(149,96,52);;
  }
#thefooter {
    float: left;
    margin: 5px 0;
    margin-left: 0px;
    display: inline;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .pagination {
    display: inline-block;
    padding-left: 0;
    margin: 5px 0;
    border-radius: 4px;
  float:right;
  }
  #thepage {
    float: right;
    margin-right: 15px;
    display: inline;
  }
  .pagination > li {
    display: inline;
  list-style-type:none;
  background:none;
  border-bottom:0px;
  }
  .pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: rgb(149,96,52);
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
  }
  .pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
  }
  .pagination > li:first-last > a, .pagination > li:first-last > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
  }
  .pagination > li:last-child > a, .pagination > li:last-child > span {
    margin-left: 0;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
  }
  .pagination > .active > a, .pagination > .active > span, .pagination > .active  > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus,  .pagination > .active > span:focus {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: rgb(149,96,52);
    border-color: rgb(149,96,52);
}
.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li >  a:focus, .pagination > li > span:focus {
    color: rgb(149,96,52);;
    background-color: #eee;
    border-color: #ddd;
}
</style>
</head>
<body onload="init()">
    <?php
    include_once($muban."/top.php");
    ?>
    <!-- v_banner -->
    <div class="v_banner v_banner_lei"></div>

    <!-- conter -->
    <div class="v_main">
       <div class="section borderBottom2">
           <div class="mainConTitle">
               <?=$ini_4?>
               <span class="position">当前位置：<a href="/" title="首页">首页</a>&gt;<?=$ini_4?></span>
           </div>
       </div>
       <div class="mainCon" id="zoom">
           <div class="mainContect clearfix">
              <div class="mainContect_ul">
              <?=$ini->fenleis(20,12,15,15,1,'','
                <div class="lei_cc">
                      <a href="[url]" title="[biaoti]" target="_blank">
                          <span><img src="[tu]" class="lazy" alt="[biaoti]"></span>     
                          <p class="overflow">[biaoti]</p>
                      </a>
                    </div>
                ',140)?>
              </div> 
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
        })(document, window); 
    </script>
</body>
</html>