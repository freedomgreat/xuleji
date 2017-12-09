<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="<?=$ini->wz(2)?>">
<meta name="description" content="<?=$ini->wz(3)?>">
<meta name="author" content="0311zdp">
<title><?=$ini->wz(1)?> - <?=$db->lxfs(101)?></title>
<LINK href="/<?=$muban?>/css/style.css" rel=stylesheet>
<LINK href="/<?=$muban?>/css/animate.min.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/<?=$muban?>/js/jquery-1.10.2.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/<?=$muban?>/js/jquery.easing.1.3.js"></script>
<script language="JavaScript" type="text/javascript" src="/<?=$muban?>/js/inc.js"></script>
<script language="JavaScript" type="text/javascript" src="/<?=$muban?>/js/Tools.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/<?=$muban?>/images/0/DD_belatedPNG.js"></script>
<![endif]-->
<style type="text/css">
.l_a_0 {}
.l_a_1 {float:left;width:262px;padding:20px 0 0 16px;text-align: center; overflow:hidden;}
.l_a_1 .li {height:25px; line-height:25px; padding-top:0px; background-color:#ededed;}
.l_a_1 .li a {color:#00F;}
.l_a_11 img {width:256px; padding:2px; border:#ededed 1px solid;}
.l_b_1 {margin:0 auto; text-align:left}
.l_b_1 .l_b_1_ul li { border-bottom:1px dashed #acacac; height:36px; text-align:left;padding:0px 0 0 15px; background:url(/<?=$muban?>/images/listt.png) no-repeat; background-position:left center; overflow:hidden; line-height:40px;}
.l_b_1 .l_b_1_ul a {color:#333}
.l_b_1 .l_b_1_ul a:hover {color:#f00}
.l_b_1 .l_b_1_ul kbd { float:right; width:70px; padding:0px; margin-right:15px;white-space: nowrap; overflow:hidden}
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
    background-color: #c71a2e;
  }
#thefooter {
    float: left;
    margin: 5px 0;
    margin-left: 0px;
    display: inline;
    padding-top: 11px;
    padding-bottom: 11px;
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
    color: #c71a2e;
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
    background-color: #c71a2e;
    border-color:#c71a2e;
}
.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li >  a:focus, .pagination > li > span:focus {
    color: #c71a2e;
    background-color: #eee;
    border-color: #ddd;
}
</style>

</head>
<body class="v_body">
      <?php
		include_once($muban."/top.php");
	  ?>
      <div class="conter">
           <div class="w1100">
                <div class="v_conter" id="v_conter">
                     <div class="v_left">
                          <div class="module-title"><h3><?=$ini_4?></h3></div>
                          <?=$ini->lei_left(0,0,'
						  <p class="xin"><a title="[biaoti]" href="[url]">[biaoti]</a></p>
						  ')?>  
                          <div style="clear:both"></div>
                     </div>
                     
                     <div class="v_right">
                          <div class="bread-nav" sytle="background:#cb000c;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="#ffffff"><tbody><tr><td align="left"><strong><?=$ini_4?></strong></td><td></td><td align="right" style="line-height:25px;font-size:13px;  font-family:" 宋体";="" color:#989898;="" "="">
                            <a href="/"><?=$db->lxfs(101)?></a> &gt;&gt; <?=$ini_4?>
                            
                            </td><td width="50"></td></tr></tbody></table>
                         </div>
                         <div class="bpic" id="zoom">
                              <?=$ini->fenlei(20,12,20,200,1,'没有检索到相关信息...')?>
                         </div>
                     </div>
                     <div style="clear:both"></div>
                </div>
                <?php
					include_once($muban."/end.php");
				  ?>
           </div>
      </div>
      
      <div id="returnTop" class="return-top"></div>
      <script>
        (function (doc, win) {
            var docEl = doc.documentElement;
			window.onload = function () {
				$(".v_left").css("height", document.getElementById("v_conter").offsetHeight);
			}

           //$('#zoom').myImgZoom({roomId:'#zoom'});
        })(document, window);
    </script>
</body>
</html>