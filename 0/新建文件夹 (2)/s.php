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
.kbd { float:right; padding-right:10px;}
.v_b_1 {padding:0px; line-height:25px; text-align:left}
.v_c_15 { margin:35px 0 0 10px;padding:20px;line-height: 32px;overflow:auto; text-align:left;}
.v_c_151 { padding-left:10px; line-height:22px;}
.v_c_152 { height:1px; margin:5px 0; background-color:#999999; overflow:hidden; clear:both;}
.v_c_153 { height:1px; margin:5px 0 15px 0; background-color:#999999; overflow:hidden; clear:both;}
.v_c_16 {height:37px; line-height:37px; padding-left:50px; background:url(/<?=$muban?>/images/line.jpg) no-repeat;}
.v_c_17 { padding-left:10px; line-height:30px}
.v_c_5 {margin:0 0 0 9px;clear:both;}
.v_c_51,.v_c_53 {height:16px; margin-left:10px; padding:29px 0 0 5px;overflow:hidden;}
.v_c_51 kbd {width:100px; text-align:center}
.v_c_51 a,.v_c_53 a {color:#666666;}
.v_c_52 {height:1px; margin:0 0 0 15px; background-color:#999999; overflow:hidden;}
.v_c_53{text-align:left}
.v_c_53 kbd { width:100px; text-align:center}
.v_c_54 { height:4px; margin:30px 0 0 15px; background-color:#999999; overflow:hidden;}
.v_c_55 {height:20px; background-image:url(/<?=$muban?>/images/v143.jpg);}
.v_d_1 { padding:30px 0 0 30px; line-height:38px;}
.v_d_1 TEXTAREA{width:402px;resize:none; overflow:hidden}
.v_e_1{ padding-top:30px;}
.jiange {height:10px; clear:both; overflow:hidden}
.submit {margin:5px 0 0 80px;}
.page {margin:30px 0 10px 0;padding:6px 0;font-size: 12px;text-align: center;border:1px #ADCDE6 solid;clear: both;}
.page a{color:blue;text-decoration:none}
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
                          <div class="module-title"><h3>解决方案</h3></div>
                          <p class="xin"><a title="通信运营商" href="/?s-txyys.html">通信运营商</a></p>  
                          <p class="xin"><a title="政府及行业" href="/?s-zfjhy.html">政府及行业</a></p>
                          <div style="clear:both"></div>
                     </div>
                     
                     <div class="v_right">
                          <div class="bread-nav" sytle="background:#cb000c;">
                            <table cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="#ffffff"><tbody><tr><td align="left"><strong><?=$ini_4?></strong></td><td></td><td align="right" style="line-height:25px;font-size:13px;  font-family:" 宋体";="" color:#989898;="" "="">
                            <a href="/"><?=$db->lxfs(101)?></a> &gt;&gt; <?=$ini_4?>
                            
                            </td><td width="50"></td></tr></tbody></table>
                         </div>
                         <div class="bpic" id="zoom">
                         <?=$ini->s_all()?> 
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