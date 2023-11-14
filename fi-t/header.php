<?php
    $pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    ?>
<div class="menu-brand">
    <a href="https://alz-bot.com/">
        <img src="media/logo.svg" alt="logo Alz-Bot" />
    </a>
</div>
<i class="menu-btn"></i>
<div class="menu-cnt">
    <ul id="main-menu">
        <li class="dropdown">
            <a href="features">Features</a>
            <ul>
                <li><a class="btn btn-ss" href="support">Support</a></li>
                <li><a class="btn btn-ss" href="bot">Smart Bot</a></li>
                <li><a class="btn btn-ss" href="marketing">Marketing</a></li>
                <li><a class="btn btn-ss" href="users">Users</a></li>
                <li><a class="btn btn-ss" href="developers">Developers</a></li>
                <li><a class="btn btn-ss" href="more-features">More</a></li>
            </ul>
        </li>
        <li>
            <a href="pricing" class="a-pricing">Pricing</a>
        </li>
        <li>
            <a href="apps">Apps</a>
        </li>
        <li class="dropdown">
            <a href="https://demo.alz-bot.com/admin.php" target="_blank">Live Demo</a>
            <ul>
                <li><a class="btn shadow-1" href="https://demo.alz-bot.com/admin.php" target="_blank">Admin Demo</a></li>
                <li><a class="btn btn-ss" href="https://demo.alz-bot.com/index.html" target="_blank">Chat Demo</a></li>
                <li><a class="btn btn-ss" href="https://demo.alz-bot.com/tickets-demo" target="_blank">Tickets Demo</a></li>
                <li><a class="btn btn-ss" href="https://woo-demo.alz-bot.com/" target="_blank">WooCommerce Demo</a></li>
            </ul>
        </li>
        <li>
            <!--<a href="hire-us">Hire Us</a>-->
        </li>
        <li>
            <a href="works/docs/">Docs</a>
        </li>
        <li class="dropdown">
            <a href="#" target="_blank">Language</a>
            <ul id="language-selector">
                <li><a class="btn btn-ss" value="en" href="<?php echo 'lang/ar/' . $pageName; ?>">Arabic <img width="15px;" height="10px;" style="text-align:center;" src="media/langs/sa.png" alt="Arabic Flag - Alz-Bot"></a></li>
                <li><a class="btn btn-ss" value="ar" href="<?php echo '' . $pageName; ?>">English <img width="15px;" height="10px;" style="text-align:center;" src="media/langs/us.png" alt="English Flag - Alz-Bot"></a></li>
            </ul>
        </li>

    </ul>
    <div class="menu-right">
 <a id="login" href="https://alz-bot.techn-oviz.com/account/?login" target="_blank">Log In</a>
        <a class="btn btn-xs btn-border " href="https://alz-bot.techn-oviz.com/account/?account"  target="_blank">Free Trial</a>
    </div> 
</div>
     <!--Start Chat Alz-Bot -->
     <script id="chat-init" src="https://alz-bot.techn-oviz.com/account/js/init.js?id=1530647"></script>
     <!-- ends Chat Alz-Bot -->