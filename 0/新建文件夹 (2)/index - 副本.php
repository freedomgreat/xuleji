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
</head>
<body>
	  <div class="banner">
           <div class="loading"><img width="32" height="32"style="display: none;" src="/<?=$muban?>/images/loading.gif"></div>
           <?=$db->huandeng(1,20,4,10,10,0,'
		       <div class="bannerimg" data-img="[tu1]" style="display: block;"></div>
			   <div class="bannerimg" data-img="[tu2]" style="display: none;"></div>
			   <div class="bannerimg" data-img="[tu3]" style="display: none;"></div>
			   <div class="bannerimg" data-img="[tu4]" style="display: none;"></div>
		   ')?>
      </div>
      <?php
		include_once($muban."/top.php");
	  ?>
      <div class="conter">
           <div class="w1100">
                <div class="about">
                     <a class="about_t" href="/?v/gywm.html"><img src="/<?=$muban?>/images/aboutt.jpg"></a>
                     <div class="about_c">
                          <a class="img" href="/?v/gywm.html"><img src="/<?=$muban?>/images/abouti.jpg"></a>
                          <div class="txt">
                          <?=$db->lxfs(109,70)?>
                          <a href="/?v/gywm.html">[详细信息]</a>
                          </div>
                     </div>
                </div>
                <div class="news">
                     <a class="news_t" href="/?lei/news/38-0-1/"><img src="/<?=$muban?>/images/newst.jpg"></a>
                     <ul class="news_c">
                     <?=$db->shuchu_news(2,38,3,20,3,'...','内容更新中...',0,0,'',0)?> 
                     </ul>
                </div>
                <div class="project">
                     <a href="/?s-jjfa.html"><img src="/<?=$muban?>/images/project.jpg"></a>
                </div>
                <div style="clear:both"></div>
                <div class="case">
                     <a class="case_t" href="/?lei/new/2-0-1/"><img src="/<?=$muban?>/images/caset.jpg"></a>
                     <ul class="case_c">
                         <?=$db->shuchu_news(2,2,5,12,3,'...','内容更新中...',0,0,'
						 <li><a href="[url]"><img src="[tu]"><p>[biaoti]</p></a></li>
						 ',0)?>  
                     </ul>
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
				$('.banner').NewAnimate({object_speed:7000});
			})(document, window);
	  </script>
</body>
</html>