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
  <style>
    .id_ab a{color: #cb000c}
    .id_ab a:hover{color:#cb000c}
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
                              <div class="bi"><?=$ini_6?></div>
                              <div class="bt">
                                    <p class="biaoti" style="font-family:微软雅黑,宋体" ;=""><?=$ini->wz(1)?></p>
                                    <p class="tim" style="padding-top:5px;"><?=$ini_8?></p>
                              </div>
                              <?=$ini_5?>
                              <br><br>
                              <?=$ini->id_ab(8)?>
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

           $('#zoom').myImgZoom({roomId:'#zoom'});
        })(document, window);
    </script>
</body>
</html>