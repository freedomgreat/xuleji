<?php
if($url_x[0]!="admin"|| empty($jjqyw)){
exit();
}

if($url_x[1]=='up' && $jjqyw>'1'){
include_once("admin/up.php");
exit();
}

switch ($url_x[1]){
case 'reg':
include_once ($muban.'/reg.php');
exit();
break;
case 'login':
include_once ($muban.'/login.php');
exit();
break;
case 'guanli':
include_once ($muban.'/guanli.php');
exit();
break;
case 'fabu':
include_once ($muban.'/fabu.php');
exit();
break;
case 'mima':
include_once ($muban.'/mima.php');
exit();
break;
case 'out':
jjqyw::u_tuichu("已安全退出！","/");
exit();
break;
case 'nocache':
$smarty->clear_all_cache();
jjqyw::jstest("1","  恭喜您缓存清除成功！  ",$lailuyemian);
break;
default:
jjqyw::u_tuichu("已安全退出！","/");
exit();
}
?>