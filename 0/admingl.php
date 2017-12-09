<?php
if($url_x[0]!=$url_a|| !$jjqyw){exit();}
if($url_x[1]=='out'){if('1'==$jjqyw){echo $fanhuishouye;exit();}jjqyw::jjqyw_tuichu("退出成功！！！","/");}
if('999'!=$jjqyw){include_once("admingl/login.php");exit();}
include_once($muban."/config.php");
$zp="0";
$link="1";
$chanpin="0";
$zp=$zp=="1"?"/".$jing_tai[0]."v/zhaopin.html":$jing_tai[0]."v/job/0-1/";
if(preg_match("/$url_x[1]/i",$is_manage))include_once("admingl/".$url_x[1].".php");else include_once("admingl/index.php");