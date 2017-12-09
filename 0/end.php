<!-- footer -->
    <div class="footer">
         <div class="middle clearfix">
             <div class="footer_l">
                 <p class="footer_l_t">公司新闻</p>
                 <ul>
                    <?=$db->shuchu_new(1,2,5,20,4,'...','内容更新中...',0,0,'
                    <li><a href="[url]" target="_blank">[biaoti].....</a><kbd>[shijian]</kbd></li>
                   ',0)?>  
                 </ul>
                 <a class="more" href="/?leis/news/2-0-1/" target="_blank">
                  <img src="/<?=$muban?>/images/moreb.png" alt=""></a>
             </div>
             <div class="footer_r">
                 <div class="contact">
                    <div class="contact_tel">
                         <p class="p1">客户服务热线</p>
                         <p class="p2"><?=$db->lxfs(1)?></p>
                    </div>
                    <div class="contact_email">
                         <p class="p1">客户服务邮箱</p>
                         <p class="p2"><?=$db->lxfs(5)?></p>
                    </div>
                 </div>
                 <div class="public_cu" id="container">
                 </div>
             </div>
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