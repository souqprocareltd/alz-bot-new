<?php
    $pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    ?>
<div class="container">
 <div class="menu-brand">
            <a href="https://alz-bot.com/">
                <img src="media/logo.svg" alt="شعار الزا بوت" />
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">
            <ul id="main-menu">
            <li class="dropdown">
    <a href="features">الميزات</a>
    <ul>
        <li><a class="btn btn-ss" href="support">الدعم</a></li>
        <li><a class="btn btn-ss" href="bot">البوت الذكي</a></li>
        <li><a class="btn btn-ss" href="marketing">التسويق</a></li>
        <li><a class="btn btn-ss" href="users">المستخدمون</a></li>
        <li><a class="btn btn-ss" href="developers">المطورون</a></li>
        <li><a class="btn btn-ss" href="more-features">المزيد</a></li>
    </ul>
</li>
<li>
                    <a href="pricing" class="a-pricing">الأسعار</a>
                </li>
                <li>
                    <a href="apps">التطبيقات</a>
                </li>
                <li class="dropdown">
                    <a href="https://alz-bot.techn-oviz.com/account/?account" target="_blank">تجربة مباشرة</a>
                    <ul>
                        <li><a class="btn shadow-1" href="https://alz-bot.techn-oviz.com/account/?account" target="_blank">جرب لوحة التحكم</a></li>
                        <li><a class="btn btn-ss" href="https://demo.alz-bot.com/index.html" target="_blank">جرب الدردشة</a></li>
                        <li><a class="btn btn-ss" href="https://demo.alz-bot.com/tickets-demo" target="_blank">جرب التذاكر</a></li>
                        <li><a class="btn btn-ss" href="https://woo-demo.alz-bot.com/" target="_blank">جرب الوركميرس</a></li>
                    </ul>
                </li>
                <li>
                    <!--   <a href="../../hire-us">استئجارنا</a>-->
                </li>
                <li>
                    <a href="works/docs">دليل التشغيل</a>
                </li>
                <li class="dropdown">
                    <a href="#">اللغة</a>
                    <ul>
                        <li><a class="btn btn-ss" href="<?php echo '' . $pageName; ?>">العربية <img width="15px;" height="10px;" style="text-align:center;" src="media/langs/sa.png" alt="علم العربية - الزا بوت"></a></li>
                        <li><a class="btn btn-ss" href="<?php echo '../../' . $pageName; ?>">الإنجليزية <img width="15px;" height="10px;" style="text-align:center;" src="media/langs/us.png" alt="علم الإنجليزية - الزا بوت"></a></li>
                    </ul>
                </li>
            </ul>
            <div class="menu-right">
                <a class="btn btn-sm btn-border" href="https://alz-bot.techn-oviz.com/account/?account">جرب الآن مجاناً</a>
                </div>
        </div>
    </div>
                <!--بدء دردشة الز-بوت -->
    <script id="chat-init" src="https://alz-bot.techn-oviz.com/account/js/init.js?id=1530647"></script>
    <!-- انتهت دردشة الز-بوت -->
   