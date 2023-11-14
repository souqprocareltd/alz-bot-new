<html lang="ar" xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>دليل التشغيل | آلزا بوت </title>
    <meta name="description" content="منطقة دليل التشغيل آلزا بوت لجميع المنصات والتطبيقات واللغات." />
    <meta property="og:image" content="../../media/meta-image.jpg" />
    <link rel="stylesheet" href="../../them-viz/css/bootstrap-grid.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../them-viz/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../css/alz-bot.css" type="text/css" media="all">
    <link rel="stylesheet" href="../../them-viz/css/magnific-popup.css" />
    <link rel="stylesheet" href="../../them-viz/css/prettify.css" />
    <link rel="stylesheet" href="../../skin.css?v=22" type="text/css" media="all" />
    <link rel="shortcut icon" href="../../media/icon.svg" />
</head>
<body class="scroll-change">
    <div id="preloader"></div>
    <nav class="menu-classic menu-fixed align-right" data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-right align-center">
            <?php
    $pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    ?>
                <div class="menu-brand align-center">
                    <a href="../../index">
                        <img src="../../media/logo-docs.svg" alt="لوجو - آلزا بوت" />
                    </a>
                </div>
                <i class="menu-btn align-center"></i>
                <div class="menu-cnt align-center">
                    <ul id="main-menu">
                    <li>
                            <a href="../../index">الصفحة الرئيسية</a>
                        </li>
                        <li>
                            <a href="../../change">سجل التغييرات</a>
                        </li>
                        <li>
                            <a href="api/web">واجهة برمجية التطبيقات</a>
                        </li>
                        <li class="dropdown">
                    <a href="#">اللغة</a>
                    <ul>
                        <li><a class="btn btn-ss" href="<?php echo '../../works/docs/' . $pageName; ?>">العربية <img width="15px;" height="10px;" style="text-align:center;" src="../../media/langs/sa.png" alt="علم العربية - الزا بوت"></a></li>
                        <li><a class="btn btn-ss" href="<?php echo '../../../../works/docs/' . $pageName; ?>">الإنجليزية <img width="15px;" height="10px;" style="text-align:center;" src="../../media/langs/us.png" alt="علم الإنجليزية - الزا بوت"></a></li>
                    </ul>
                </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="fixed-area-menu">
                            <div class="menu-inner menu-inner-vertical docs-menu" data-height="fullscreen" data-offset="200" data-min-height="400" data-scroll-detect="true">
                                <h4 class="nav-getting-started">
                                <a href="#getting-started">البداية</a>
</h4>
    <ul class="nav-getting-started">
        <li><a href="#installation">التثبيت</a></li>
        <li><a href="#activation">التفعيل</a></li>
        <li><a href="#updates">التحديثات</a></li>
        <li><a href="#problems">مشكلات؟</a></li>
    </ul>
</h4>

<h4 class="nav-conversations">
    <a href="#conversations">المحادثات</a>
</h4>
<ul class="nav-conversations">
    <li><a href="#manage-conversations">إدارة المحادثات</a></li>
    <li><a href="#text-editor">محرر النصوص</a></li>
    <li><a href="#rich-messages">الرسائل الغنية</a></li>
    <li><a href="#attachments">المرفقات</a></li>
</ul>

<h4 class="nav-users">
    <a href="#users">المستخدمون</a>
</h4>
<ul class="nav-users">
    <li><a href="#users-manage">إدارة المستخدمين</a></li>
    <li><a href="#agents">إدارة الوكلاء</a></li>
    <li><a href="#users-info">المعلومات</a></li>
</ul>

<h4 class="nav-settings">
    <a href="#settings">الإعدادات</a>
</h4>
<ul class="nav-settings">
    <li><a href="#office-hours">ساعات العمل</a></li>
    <li><a href="#articles">المقالات</a></li>
    <li><a href="#multilingual">اللغة</a></li>
    <li><a href="#departments">الأقسام</a></li>
    <li><a href="#queue">الانتظار</a></li>
    <li><a href="#routing">التوجيه</a></li>
    <li><a href="#manual-routing">التوجيه اليدوي</a></li>
    <li><a href="#email-piping">البريد الإلكتروني</a></li>
    <li><a href="#pusher">الدافع</a></li>
    <li><a href="#direct-messages">الرسائل المباشرة</a></li>
    <li><a href="#automations">التلقائيات</a></li>
    <li><a href="#newsletter">النشرة الإخبارية</a></li>
    <li><a href="#grammarly">Grammarly</a></li>
    <li><a href="#aws">خدمات أمازون السحابية</a></li>
</ul>

<h4 class="nav-notifications">
    <a href="#notifications">الإشعارات</a>
</h4>
<ul class="nav-notifications">
    <li><a href="#email">إشعارات البريد الإلكتروني</a></li>
    <li><a href="#push">إشعارات الدفع</a></li>
    <li><a href="#desktop">إشعارات سطح المكتب</a></li>
    <li><a href="#sms">إشعارات الرسائل النصية</a></li>
    <li><a href="#sound">إشعارات الصوت</a></li>
</ul>

<h4 class="nav-wp">
    <a href="#wp">وورد بريس</a>
</h4>
<ul class="nav-wp">
    <li><a href="#wp-sync">مزامنة المستخدمين</a></li>
    <li><a href="#wp-settings">معلومات إضافية</a></li>
</ul>

<h4 class="nav-woocommerce">
    <a href="#woocommerce">ووكوميرس</a>
</h4>
<ul class="nav-woocommerce">
    <li><a href="#woocommerce-dialogflow">Dialogflow</a></li>
    <li><a href="#woocommerce-merge-fields">حقول الدمج</a></li>
    <li><a href="#woocommerce-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-tickets">
    <a href="#tickets">التذاكر</a>
</h4>
<ul class="nav-tickets">
    <li><a href="#tickets-installation">التثبيت والاستخدام</a></li>
    <li><a href="#tickets-info">المعلومات</a></li>
</ul>

<h4 class="nav-dialogflow">
    <a href="#dialogflow">دايلوج فلو</a>
</h4>
<ul class="nav-dialogflow">
    <li><a href="#dialogflow-sync">التزامن</a></li>
    <li><a href="#dialogflow-bot">إنشاء البوت</a></li>
    <li><a href="#dialogflow-actions">الإجراءات</a></li>
    <li><a href="#dialogflow-translation">الترجمة التلقائية</a></li>
    <li><a href="#dialogflow-human-takeover">استيلام البشري</a></li>
    <li><a href="#smart-reply">الرد الذكي</a></li>
    <li><a href="#open-ai">أوبن إيه</a></li>
    <li><a href="#google-search">بحث جوجل</a></li>
    <li><a href="#fulfillment">الوفاء</a></li>
    <li><a href="#dialogflow-info">المعلومات</a></li>
</ul>

<h4 class="nav-whatsapp">
    <a href="#whatsapp">واتساب</a>
</h4>
<ul class="nav-whatsapp">
    <li><a href="#whatsapp-installation">التثبيت</a></li>
    <li><a href="#whatsapp-fallback">رسائل الاحتياط</a></li>
    <li><a href="#whatsapp-shop">المتجر</a></li>
    <li><a href="#whatsapp-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-messenger">
    <a href="#messenger">ماسنجر</a>
</h4>
<ul class="nav-messenger">
    <li><a href="#messenger-installation">التثبيت</a></li>
    <li><a href="#instagram">إنستغرام</a></li>
    <li><a href="#messenger-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-twitter">
    <a href="#twitter">تويتر</a>
</h4>
<ul class="nav-twitter">
    <li><a href="#twitter-installation">التثبيت</a></li>
    <li><a href="#twitter-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-gbm">
    <a href="#gbm">رسائل الأعمال</a>
</h4>
<ul class="nav-gbm">
    <li><a href="#gbm-installation">التثبيت</a></li>
    <li><a href="#gbm-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-telegram">
    <a href="#telegram">تليجرام</a>
</h4>
<ul class="nav-telegram">
    <li><a href="#telegram-installation">التثبيت</a></li>
    <li><a href="#telegram-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-viber">
    <a href="#viber">فايبر</a>
</h4>
<ul class="nav-viber">
    <li><a href="#viber-installation">التثبيت</a></li>
    <li><a href="#viber-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-slack">
    <a href="#slack">سلاك</a>
</h4>
<ul class="nav-slack">
    <li><a href="#slack-sync">التزامن</a></li>
    <li><a href="#slack-departments">ربط الأقسام</a></li>
    <li><a href="#slack-user-fields">حقول المستخدم</a></li>
    <li><a href="#slack-info">المعلومات</a></li>
</ul>

<h4 class="nav-perfex">
    <a href="#perfex">برفكس</a>
</h4>
<ul class="nav-perfex">
    <li><a href="#perfex-installation">التثبيت</a></li>
</ul>

<h4 class="nav-whmcs">
    <a href="#whmcs">وهمكس</a>
</h4>
<ul class="nav-whmcs">
    <li><a href="#whmcs-installation">التثبيت</a></li>
</ul>

<h4 class="nav-zendesk">
    <a href="#zendesk">زيندسك</a>
</h4>
<ul class="nav-zendesk">
    <li><a href="#zendesk-installation">التثبيت</a></li>
    <li><a href="#zendesk-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-ump">
    <a href="#ump">العضوية الممتازة</a>
</h4>
<ul class="nav-ump">
    <li><a href="#ump-users">مزامنة المستخدمين</a></li>
    <li><a href="#ump-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-armember">
    <a href="#armember">أرميمبر</a>
</h4>
<ul class="nav-armember">
    <li><a href="#armember-users">مزامنة المستخدمين</a></li>
    <li><a href="#armember-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-active-ecommerce">
    <a href="#active-ecommerce">التجارة الإلكترونية النشطة</a>
</h4>
<ul class="nav-active-ecommerce">
    <li><a href="#active-ecommerce-installation">التثبيت</a></li>
    <li><a href="#active-ecommerce-sellers">دردشة البائعين</a></li>
</ul>

<h4 class="nav-martfury">
    <a href="#martfury">مارتفوري</a>
</h4>
<ul class="nav-martfury">
    <li><a href="#martfury-installation">التثبيت</a></li>
    <li><a href="#martfury-private-chat">الدردشة الخاصة</a></li>
</ul>

<h4 class="nav-line">
    <a href="#line">لين</a>
</h4>
<ul class="nav-line">
    <li><a href="#line-installation">التثبيت</a></li>
    <li><a href="#line-info">معلومات إضافية</a></li>
</ul>

<h4 class="nav-wechat">
    <a href="#wechat">ويتشات</a>
</h4>
                                <ul class="nav-wechat">
                                <li>
    <a href="#wechat-installation">التثبيت</a>
</li>
<li>
    <a href="#wechat-info">مزيد من المعلومات</a>
</li>
</ul>
<h4 class="nav-more-settings">
    <a href="#more-settings">إعدادات إضافية</a>
</h4>
<ul class="nav-more-settings">
    <li>
        <a href="#pwa">Progressive Web App</a>
    </li>
    <li>
        <a href="#keyboard">اختصارات لوحة المفاتيح</a>
    </li>
    <li>
        <a href="#config">ملف التكوين</a>
    </li>
    <li>
        <a href="#cron-jobs">وظائف Cron</a>
    </li>
    <li>
        <a href="#logs">سجلات</a>
    </li>
    <li>
        <a href="#supervisor">المشرف</a>
    </li>
    <li>
        <a href="#url-parameters">معلمات عنوان URL</a>
    </li>
    <li>
        <a href="#zapier">Zapier</a>
    </li>
    <li>
        <a href="#more-info">معلومات</a>
    </li>
</ul>
</div>
</div>
</div>
<div class="col-lg-9 docs">
<div id="getting-started">
<div class="label label-docs">البداية</div>
<h2 id="installation">تثبيت آلزا بوت </h2>
<div class="tab-box" data-tab-anima="fade-in">
<ul class="tab-nav">
    <li class="active">
        <a href="#">بي اتش بي</a>
    </li>
    <li>
        <a href="#">ورد بريس</a>
    </li>
    <li>
        <a href="#">السحابة</a>
    </li>
</ul>
<div class="panel active">
    <p>
        لتثبيت آلزا بوت  على خادمك، اتبع الخطوات التالية:
    </p>
    <ul class="icon-list icon-line">
        <li>
            افتح الأرشيف
            <b>alz-bot 1.2.3.zip</b>
            واستخرج المجلد في موقع خادمك الذي تختاره.
        </li>
        <li>
            انتقل إلى الرابط
            <b>http://[your-site]/alz-bot/admin.php</b>
            وأكمل عملية التثبيت. قم بتبديل [your-site] بعنوان URL الخاص بموقع الويب الخاص بك. إذا قمت بتغيير اسم الدليل، قم بتبديل <b>آلزا بوت</b> بالاسم الجديد للدليل.
        </li>
        <li>
            بمجرد اكتمال التثبيت، قم بتسجيل الدخول باستخدام البريد الإلكتروني وكلمة المرور التي أنشأتها في الخطوة السابقة وانتهيت!
        </li>
    </ul>
    <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
    <h4>عرض الدردشة</h4>
    <p>
        لعرض الدردشة على موقع الويب الخاص بك، قم بتضمين السكربتات التالية في
        <b>&lt;head>&lt;/head></b>
        أو
        <b>&lt;footer>&lt;/footer></b>
        من كل صفحة يتم فيها عرض الدردشة. قم بتبديل <b>[YOUR-ALZ-BOT-URL]</b> بعنوان URL لتثبيت آلزا بوت الخاص بك. مثال: https://example.com/alz-bot/js/main.js.
    </p>
    <pre class="prettyprint">
        &lt;!-- غير مطلوب إذا كان jQuery قد تم تحميله بالفعل -->
        &lt;script src="[YOUR-ALZ-BOT-URL]/js/min/jquery.min.js">&lt;/script>
        &lt;script id="sbinit" src="[YOUR-ALZ-BOT-URL]/js/main.js">&lt;/script>
    </pre>
    <h4>معلمات عنوان URL</h4>
    <ul class="icon-list icon-line">
        <li>
            <b>lang=LANGUAGE-CODE</b> انظر إلى <a href="#multilingual">الوثائق المتعددة اللغات</a> للحصول على مزيد من التفاصيل.
        </li>
        <li>
            <b>url=APP-URL</b> استخدم هذا المعلم إذا تم تغيير مجلد URL / التطبيق الخاص بك. قم بتبديل APP-URL بعنوان URL الكامل لمجلد التطبيق. يمكنك أيضًا تعريف العنوان URL عبر JavaScript:
            <b>var SB_INIT_URL = "APP-URL"</b>.
        </li>
    </ul>
    <h4>هجرة الموقع</h4>
    <p>
        إذا قمت بنقل الدردشة إلى نطاق / عنوان URL جديد، يجب عليك تحرير ملف
        <b>config.php</b>
        (في مجلد آلزا بوت ) وتحديث الثابت
        <b>SB_URL</b>
        بالعنوان URL الجديد.
    </p>
    <h4>ضغط JS</h4>
    <p>
        لأسباب أداء، قد ترغب في تحميل ملف main.js المضغوط: <b>[YOUR-ALZ-BOT-URL]/js/min/main.min.js</b>.
        يرجى ملاحظة أنه إذا اتصلت بنا للحصول على الدعم، ستحتاج إلى إعادة تحميل الإصدار غير المضغوط مرة أخرى.
    </p>
</div>
<div class="panel">
    <p>لتثبيت آلزا بوت على ورد بريس، اتبع الخطوات التالية:</p>
    <ul class="icon-list icon-line">
        <li>
            انتقل إلى صفحة
            <b>الإضافات</b>
            وانقر على
            <b>إضافة جديدة</b> ثم
            <b>تحميل الإضافة</b>
            وقم بتحميل ملف
            <b>alz-bot 1.2.3.zip</b>.
        </li>
        <li>
            بمجرد اكتمال التثبيت، يجب أن ترى عنصر القائمة الجديد المسمى
            <b>آلزا بوت</b>.
            أنتمت، سيتم عرض الدردشة تلقائيًا على جميع الصفحات.
        </li>
    </ul>
    <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
</div>
<div class="panel active">
    <p>
        لعرض الدردشة على موقع الويب الخاص بك، انتقل إلى <a href="https://alz-bot.techn-oviz.com/account/?tab=installation">https://alz-bot.techn-oviz.com/account/?tab=installation</a> وانسخ رمز التضمين، ثم الصقه في صفحات موقع الويب الخاص بك.
        إذا كنت تستخدم ورد بريس يمكنك تحميل مكون إضافي آلزا بوت السحابة <a href="https://ورد بريس.org/plugins/alz-bot-cloud/" target="_blank" rel="nofollow">هنا</a>.
    </p>
</div>
</div>
<hr class="space-sm" />
<h4 id="requirements">المتطلبات</h4>
<ul class="icon-list icon-line">
    <li>يجب أن يدعم مشروع الويب الخاص بك HTML و PHP، ويجب فتح صفحات تحتوي على الدردشة عبر متصفح الويب.</li>
    <li>لا يمكن عرض الدردشة على صفحة HTML تم فتحها مباشرة على جهاز كمبيوتر محلي. استخدم خادمًا محليًا مثل Xampp بدلاً من ذلك.</li>
    <li>
        يجب أن يسمح خادمك بالوصول إلى الملف التالي:
        <b>alz-bot/include/ajax.php</b>
    </li>
    <li>
        إذا كنت تستخدم الإصدار الخاص بـ ورد بريس من آلزا بوت  ولديك أي إضافات أمان مثبتة، يرجى التأكد من أنها لا تمنع ملف
        <b>alz-bot/include/ajax.php</b>.
    </li>
    <li>JQuery 1.1+</li>
    <li>PHP 7.4+</li>
    <li>
        في إعدادات الخادم الخاص بك، يجب تمكين
        <b>CURL</b>
        و
        <b>ZIP ARCHIVE</b>
        وأن تعمل بشكل صحيح.
    </li>
    <li>
        يجب أن تمنح أذونات القراءة والكتابة للملفات التالية في آلزا بوت
        <b>التحميلات</b>
        و
        <b>الموارد/اللغة</b>
        و
        <b>التطبيقات</b>.
        يجب أن يكون آلزا بوت  قادرًا على حفظ وقراءة الملفات في هذه المجلدات.
    </li>
    <li>MySQL 5.5+</li>
<li>MySQL - يجب تعطيل وضع SQL "ONLY_FULL_GROUP_BY" وإعداد "ANSI_QUOTES".</li>
<li>يجب أن تكون لجميع مجلدات آلزا بوت أذونات 755، ويجب أن تكون لجميع ملفات آلزا بوت أذونات 644.</li>
</ul>
<p>
    بمجرد الانتهاء من التثبيت، يمكنك التحقق من متطلبات النظام من خلال
    <b>الإعدادات > متنوع > متطلبات النظام</b>.
</p>
<hr class="space" />
<h2 id="activation">التنشيط</h2>
<p>
    لتنشيط آلزا بوت وتمكين جميع الميزات (بما في ذلك التحديثات وتشفير أكثر أمانًا)، يجب إدخال رمز الشراء تكنو فيز في
    <b>الإدارة > الإعدادات > متنوع</b>.
</p>
<h4>تثبيت التطبيقات</h4>
<p>
    لتنزيل وتثبيت وتفعيل التطبيقات، انتقل إلى
    <b>الإعدادات > التطبيقات</b> في آلزا بوت وأدخل رمز الشراء تكنو فيز أو مفتاح الترخيص.
</p>
<a href="#" target="_blank" rel="nofollow" class="btn-text">العثور على رمز الشراء تكنو فيز الخاص بك</a>
<hr class="space" />
<h2 id="updates">التحديثات</h2>
<ul class="icon-list icon-line">
    <li>لتحديث آلزا بوت والتطبيقات، ادخل إلى منطقة الإدارة وانقر على رقم الإصدار في الزاوية السفلية اليسرى.</li>
    <li>
        يمكنك أيضًا تمكين التحديثات التلقائية عبر
        <b>الإعدادات > متنوع</b>.
    </li>
    <li>
        لتمكين التحديثات، يجب أن يكون لديك رمز شراء صالح من تكنو فيز. لتحديث تطبيقات آلزا بوت، يجب أن يكون لديك مفتاح ترخيص منفصل أو رمز شراء تكنو فيز صالح لكل تطبيق محدد. بالإضافة إلى ذلك، يجب ألا يكون مفتاح الترخيص أقدم من سنة واحدة (فقط للتطبيقات التي تم شراؤها خارج CodeCanyon). إذا كان مفتاح الترخيص منتهي الصلاحية، ستحتاج إلى شراء ترخيص جديد لتمكين تحديثات التطبيق مرة أخرى. التطبيقات المشتراة على CodeCanyon تحظى بتحديثات مدى الحياة.
    </li>
    <li>قد لا تعمل الإصدارات الأحدث من التطبيقات إذا لم يتم تحديث آلزا بوت إلى الإصدار الأحدث.</li>
    <li>إذا كنت تستخدم الإصدار الخاص بـ ورد بريس من آلزا بوت ، فلاحظ أنه لا يمكنك تحديث آلزا بوت من صفحة المكونات الإضافية في ورد بريس.</li>
</ul>
<h4>تحديثات يدوية</h4>
<p>
    لتحديث آلزا بوت والتطبيقات يدويًا، انتقل إلى <a href="https://alz-bot.com/synch/manual.php" target="_blank">https://alz-bot.com/synch/manual.php</a>.
</p>
<hr class="space" />
<h2 id="problems">هل تواجه مشاكل؟</h2>
<p>
    إذا كنت تواجه أي مشكلة على الإطلاق، يرجى الاتصال بفريق الدعم الودود لدينا على support@alz-bot.com.
    قبل الاتصال بنا، يرجى التأكد من أن خادمك يحتوي على جميع المتطلبات المذكورة أعلاه.
    على نفس النقطة، إذا كنت تستخدم الإصدار الخاص بـ ورد بريس، يرجى التأكد من أن تثبيت ورد بريس لديك
    يحتوي على جميع المتطلبات المذكورة أعلاه.
</p>
<h4>مشكلة عامة</h4>
<p>
    بالنسبة لأي مشكلة، يمكنك التحقق من متطلبات النظام من
    <b>الإعدادات > متنوع > متطلبات النظام</b>.
    لا يمكننا توفير الدعم لحل المشكلات التي يتم الإبلاغ عنها من خلال وظيفة متطلبات النظام، يرجى الاتصال بدعم استضافتك أو خادمك إذا كنت بحاجة إلى مساعدة.
</p>
<h4 id="cross">شاشة فارغة عند الوصول إلى منطقة الإدارة</h4>
<ul class="icon-list icon-line">
    <li>تحقق مما إذا كانت هناك أخطاء في وحدة التحكم بالمتصفح (يمكنك فتحها في Chrome من <b>الإعدادات > أدوات إضافية > أدوات المطور > وحدة التحكم</b>).</li>
    <li>قم بتمكين تصحيح الأخطاء في PHP وتحقق من سجلات أخطاء PHP.</li>
    <li>إذا كنت تستخدم الإصدار الخاص بـ ورد بريس قم بتعطيل جميع الإضافات الأمان والإضافات المتعلقة بالاستضافة.</li>
</ul>
<h4 id="cross">تكوين النطاقات المتعددة</h4>
<p>
    إذا كنت ترغب في استخدام نفس تثبيت الدردشة على عدة نطاقات، يجب أن يسمح خادمك بطلبات cross-origin.
    لتمكين طلبات cross-origin على خادمك، اتبع الخطوات التالية:
</p>
<h4>
    تكوين النطاقات المتعددة عبر الخادم
</h4>
<ul class="icon-list icon-line">
    <li>
        <b>بالنسبة لخوادم Apache</b> — قم بتحرير ملف
        <b>.htaccess</b> للنطاق الذي يتم تثبيت المكون فيه وأدخل الكود
        <b>&lt;IfModule mod_headers.c>Header set Access-Control-Allow-Origin "*"&lt;/IfModule></b> أو <b>&lt;IfModule mod_headers.c="">header('Access-Control-Allow-Origin: *');&lt;/IfModule></b> في الجزء العلوي جدًا من الملف.
        لجعله يعمل، يجب أن تكون لديك على الأقل <b>AllowOverride +FileInfo</b> أو <b>AllowOverride All</b> في تكوين Apache.
    </li>
    <li>
        <b>بالنسبة لخوادم nginx</b> — قم بتحرير ملف
        <b>/etc/nginx/nginx.conf</b> للنطاق الذي يتم تثبيت المكون فيه وأدخل الكود
        <b>add_header Access-Control-Allow-Origin "*";</b> في الجزء العلوي جدًا من الملف. إذا كنت تستخدم Plesk، انتقل إلى
        <b>النطاقات > example.com > إعدادات Apache و nginx الإضافية</b> وأدخل
        <br />
        <b>add_header 'Access-Control-Allow-Origin' '*';</b>.
        <a href="../../media/docs/plesk-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        <b>بالنسبة لخوادم OpenLiteSpeed</b> — زر <a href="https://openlitespeed.org/kb/setting-up-cors-on-openlitespeed/" target="_blank" rel="nofollow">https://openlitespeed.org/kb/setting-up-cors-on-openlitespeed/</a>.
    </li>
</ul>
<p>
    يمكنك عرض البرامج التعليمية لبرمجيات إدارة الخادم الأكثر شيوعًا في القائمة أدناه:
</p>
<ul class="icon-list icon-line">
    <li>
        <a href="https://support.plesk.com/hc/en-us/articles/115001338265-How-to-set-up-CORS-cross-origin-resource-sharing-in-Plesk-" target="_blank" rel="nofollow">Plesk</a>
    </li>
    <li>
        <a href="https://enable-cors.org/server_apache.html" target="_blank" rel="nofollow">جميع خوادم Apache</a>
    </li>
</ul>
<h4>
    تكوين النطاقات المتعددة عبر PHP
</h4>
<p>
    إذا لم تعمل أيًا من الحلول السابقة أو لا يمكنك تغيير إعدادات الخادم، اتبع الخطوات التالية:
</p>
<ul class="icon-list icon-line">
    <li>
        قم بتحرير ملف
        <b>alz-bot/config.php</b> وأدخل الكود
        <b>define('SB_CROSS_DOMAIN', true);</b> في نهاية الملف.
    </li>
    <li>
    قم برفع المجلدات التالية إلى النطاق الخاص بك (النطاق الذي يجب أن يظهر فيه الدردشة، ليس النطاق الذي يتم تثبيت Alz-Bot فيه):
    <b>alz-bot/media/fonts</b> و <b>alz-bot/media/icons</b>. يمكنك رفع الملفات حيث تشاء، على سبيل المثال، <b>http://www.example.com/chat-files</b>.
    إذا تم تحميل الدردشة على عدة نطاقات، قم برفع الملفات على كل نطاق.
</li>
<li>
    قم بتعديل الملف
    <b>alz-bot/config.php</b> مرة أخرى وأدخل الكود
    <b>define('SB_CROSS_DOMAIN_URL', 'YOUR-URL');</b> في نهاية الملف. استبدل <b>YOUR-URL</b> بعنوان URL الذي يشير إلى الملفات التي قمت بتحميلها للتو، على سبيل المثال، <b>http://www.example.com/chat-files</b>.
    إذا تم تحميل الدردشة على عدة نطاقات، استبدل <b>YOUR-URL</b> بمصفوفة من عناوين URL، على سبيل المثال، <b>["http://www.example.com/chat-files", "http://www.example-2.com/chat-files"]</b>.
</li>
</ul>
<h4>حجب التكبير على أجهزة iOS</h4>
<p>
    عند استخدام الدردشة على iPhones، يتم تكبير مربع النص تلقائيًا عندما يبدأ المستخدم في كتابة رسالة جديدة.
    لإيقاف التكبير، أدخل الكود أدناه في منطقة
    <b>&lt;head></b> لجميع الصفحات التي تتضمن الدردشة.
</p>
<pre class="prettyprint">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
</pre>
<h4>إخفاء admin.php من الرابط</h4>
<p>
    بشكل افتراضي، يكون عنوان URL الخاص بالإدارة مثل
    <b>https://your-website.com/support/admin.php</b>.
    يمكنك إخفاء جزء
    <b>admin.php</b> من الرابط وجعله مثل
    <b>https://your-website.com/support/</b> عن طريق إدراج الكود التالي في ملف
    <b>.htaccess</b> الخاص بك:
    <pre class="prettyprint">
        &lt;ifmodule mod_dir.c> DirectoryIndex admin.php&lt;/ifmodule>
    </pre>
</p>
<h4>عدم ظهور واجهة الدردشة</h4>
<p>
    لا يمكنك رؤية واختبار الدردشة كمستخدم إذا كنت مسجل الدخول إلى منطقة الإدارة. لاختبار الدردشة كمستخدم، يرجى تسجيل الخروج من حساب الإدارة الخاص بك. بالإضافة إلى ذلك، يمكنك استخدام نافذة متصفح أخرى في وضع "خاص" أو "متصفح خفي". بالإضافة إلى ذلك، يمكنك إجبار تسجيل الخروج عن طريق تنفيذ وظيفة SBF.reset() في وحدة التحكم في المتصفح.
</p>
<h4 id="password-reset">إعادة تعيين البريد الإلكتروني أو كلمة المرور لحساب الإدارة</h4>
<p>
    إذا لم تتمكن من تسجيل الدخول إلى منطقة الإدارة، يمكنك إعادة تعيين كلمة المرور والبريد الإلكتروني باتباع الخطوات التالية:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتحرير
        <b>قاعدة بيانات MySQL</b>. يمكنك تحريرها من لوحة الاستضافة الخاصة بك، عادةً مع
        <b>phpMyAdmin</b>.
    </li>
    <li>
        قم بتحرير الجدول
        <b>sb_users</b>.
    </li>
    <li>
        ابحث عن حساب الإدارة الخاص بك وتأكد من أن قيمة العمود
        <b>user_type</b> هي
        <b>admin</b>.
    </li>
    <li>
        إعادة تعيين كلمة المرور الخاصة بك عن طريق تحرير العمود <b>password</b> وإدخال كلمة مرور جديدة كهاش. لتوليد هاش لكلمة مرورك، قم بزيارة
        <a rel="nofollow" target="_blank" href="https://phppasswordhash.com/">https://phppasswordhash.com

/</a>، أو أدخل الهاش <b>$2y$10$i7OComVhUh8BHcyx9VzUfuN.hnNsnKzK1Hd/GKK2KIwBo7Y6stppu</b> (كلمة المرور: 12345678).
    </li>
    <li>إعادة تعيين عنوان البريد الإلكتروني الخاص بك من عمود <b>email</b>.</li>
</ul>
<p>
    إذا كنت تستخدم إصدار ورد بريس، يمكنك حذف المستخدم من قاعدة البيانات وستقوم ورد بريس بإنشائه مرة أخرى. يمكنك أيضًا إنشاء مستخدم جديد في ورد بريس بامتيازات إدارية، ثم تسجيل الخروج من حسابك الحالي وتسجيل الدخول بالحساب الجديد. بمجرد أن تكون داخل آلزا بوت ، قم بتغيير كلمة مرور وكيلك السابق من
    <b>المستخدمون > الوكلاء</b>.
</p>
<h4>تم حذف حساب الإدارة</h4>
<p>
    إذا قمت بحذف جميع حسابات الإدارة والوكلاء عن طريق الخطأ ولا يمكنك تسجيل الدخول إلى منطقة الإدارة،
    يمكنك حل هذه المشكلة باتباع الخطوات التالية:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتحرير
        <b>قاعدة بيانات MySQL</b>. يمكنك تحريرها من لوحة الاستضافة الخاصة بك، عادةً مع
        <b>phpMyAdmin</b>.
    </li>
    <li>
        قم بتحرير الجدول
        <b>sb_users</b>.
    </li>
    <li>
        يمكنك تحويل أي مستخدم موجود إلى مدير عن طريق تحرير العمود
        <b>user_type</b> وإدخال القيمة
        <b>admin</b>.
    </li>
    <li>
        يمكنك أيضًا إضافة مستخدم جديد عن طريق تعيين قيمة لحقول الاسم الأول، والاسم الأخير، وكلمة المرور، والبريد الإلكتروني، ونوع المستخدم.
        قيمة عمود كلمة المرور يجب أن تكون هاش.
        لتوليد هاش لكلمة مرورك، قم بزيارة
        <a rel="nofollow" target="_blank" href="https://phppasswordhash.com/">https://phppasswordhash.com/</a>.
        أيضًا، يجب أن تكون قيمة العمود
        <b>user_type</b> هي
        <b>admin</b>.
    </li>
</ul>
<h4>الخادم غير متاح</h4>
<p>
    إذا كان خادمك و/أو موقعك يتوقف فجأة بعد بضع دقائق من استخدام الدردشة،
    قد يكون السبب متعلقًا بجدار حماية الخادم الخاص بك. يحدث هذا عادةً نتيجة لحظر عنوان IP
    (Fail2Ban) أو إعدادات جدار الحماية من التطبيقات الويب (ModSecurity). يتم التعرف على الطلبات المتعددة من AJAX من الدردشة إلى قاعدة البيانات
    كـ "هجوم على الخادم" وبالتالي يضع الخادم حظرًا مؤقتًا على عنوان IP الخاص بك.
    يجب أن يؤثر هذا الأمر فقط علىك و/أو مطوريك. لا يجب أن يتأثر الزوار/المستخدمون.
    للتحقق مما إذا كان هذا هو السبب، استخدم خدمة VPN مثل
    <a href="https://www.hotspotshield.com/" target="_blank" rel="nofollow">Hotspot Shield</a>.
    عندما يتوقف الخادم، قم بتنشيط VPN لتغيير عنوان IP الخاص بك وحاول الوصول إلى موقع الويب الخاص بك مرة أخرى.
    إذا كان الموقع يعمل بشكل طبيعي، يتم تأكيد المشكلة.
    لحلها مؤقتًا، قم بتعطيل fail2ban أو اتصل بدعم الاستضافة للحصول على دعم إضافي.
</p>
<h4>تعطيل الدردشة عبر JS</h4>
<p>
    أدخل الكود
    <b>var SB_DISABLED = true;</b> في صفحة لمنع تحميل الدردشة.
                            </p>
                        </div>
                        <hr />
                        <div>
                        <div id="conversations" class="label label-docs">المحادثات</div>
<h2 id="manage-conversations">إدارة المحادثات</h2>
<p>
    المحادثات لديها مجموعة من الحالات الأربعة المختلفة:
    <b>وضع علامة كمقروء</b>,
    <b>أرشفة</b>,
    <b>حذف</b>، و
    <b>استعادة</b>.
    يمكنك إدارة حالة المحادثة عن طريق فتحها في منطقة المحادثات ومن ثم النقر على أي من
    أزرار الرموز المتناظرة في أعلى يمين نافذة المحادثة.
</p>
<h4>البحث عن المحادثات</h4>
<p>يمكنك البحث عن المحادثات بواسطة معرف القسم، معرف الوكيل المخصص، عنوان المحادثة، معرف المحادثة، نص الرسالة، اسم مرفق الرسالة، الاسم الأول للمستخدم، الاسم الأخير للمستخدم، البريد الإلكتروني للمستخدم</p>
<h4>المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        عندما تفرغ
        <b>سلة المهملات</b>، يتم حذف جميع المحادثات في سلة المهملات بشكل دائم.
    </li>
    <li>
        عندما يرسل المستخدم رسالة جديدة إلى محادثة مؤرشفة أو محذوفة، يتم استعادة المحادثة تلقائياً وستكون الآن مرئية في
        <b>منطقة الوارد</b>.
    </li>
    <li>
        تتم حذف المحادثات المهملة تلقائيًا بعد 30 يومًا.
    </li>
    <li>عند حذف مستخدم، يتم حذف جميع المحادثات والرسائل بشكل دائم أيضًا.</li>
    <li>
        يمكن للوكيل حذف رسائله بفتح قائمة الرسائل والنقر على
        <b>حذف</b>. تصبح قائمة الرسائل مرئية عند تحريك مؤشر الفأرة فوق الرسالة.
    </li>
</ul>
<hr class="space" />
<h2 id="text-editor">محرر النصوص وميزات الرسائل التلقائية</h2>
<p>يمكن استخدام محرر النصوص في منطقة الإدارة والرسائل التلقائية (مثل: رسائل الترحيب والاشتراك) لإنشاء رسائل مُزخرفة:</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        <label>تنسيق الروابط</label> — يتم تحويل جميع روابط النص تلقائياً إلى روابط فعّالة.
    </li>
    <li>
        <label>تنسيق النص</label> — يدعم المحرر أيضًا بنية تنسيق النص:
        <ul class="icon-list icon-line">
            <li>
                لجعل النص
                <strong>عريض</strong>، قم بتحيطه ب
                <b>*</b>: *نصك*.
            </li>
            <li>
                لجعل النص
                <em>مائل</em>، قم بتحيطه ب
                <b>__</b>: __نصك__.
            </li>
            <li>
                لجعل النص
                <del>مشطوب</del>، قم بتحيطه ب
                <b>~</b>: ~نصك~.
            </li>
            <li>
                لإدراج
                <b>تعليق بسطر واحد</b>، قم بتحيطه ب
                <b>`</b>: `نصك`.
            </li>
            <li>
                لإدراج
                <code>كتلة رمز</code>، قم بتحيطها ب
                <b>```</b>: ```نصك```.
            </li>
        </ul>
    </li>
    <li>HTML ولغات الشيفرة الأخرى — لأسباب أمان، لا يُسمح بأكواد HTML أو JavaScript (JS) أو لغات الشيفرة الأخرى. ومع ذلك، يمكنك استخدام مقتطفات HTML من خلال استخدام رسائل الغنية المخصصة (المناقشة أدناه).</li>
    <li>
        لإدراج فاصلة في رسالة، استخدم تركيبة لوحة المفاتيح
        <b>SHIFT + ENTER</b> أو <b>CTRL + ENTER</b>.
    </li>
</ul>
<hr id="merge-fields" class="space-sm" />
<h4>حقول الدمج</h4>
<p>
    حقول الدمج هي سلاسل يتم استبدالها بقيم خارجية عند استخدامها. يمكن استخدام حقول الدمج في أي رسالة أو رسالة تلقائية، بما في ذلك رسائل الدردشة.
</p>
<hr class="space-sm" />
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>الرمز</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>{user_name}</pre>
            </td>
            <td>الاسم الكامل للمستخدم النشط.</td>
        </tr>
        <tr>
            <td>
                <pre>{user_email}</pre>
            </td>
            <td>بريد المستخدم النشط.</td>
        </tr>
        <tr>
            <td>
                <pre>{agent_name}</pre>
            </td>
            <td>الاسم الكامل للوكيل النشط.</td>
        </tr>
        <tr>
            <td>
                <pre>{agent_email}</pre>
            </td>
            <td>بريد الوكيل النشط.</td>
        </tr>
    </tbody>
</table>
<hr class="space" />
<h2 id="rich-messages">رسائل الغنية</h2>
<p>
    رسائل الغنية هي رسائل خاصة بميزات تفاعلية مثل الأزرار، وقوائم السقوط، أو المدخلات.
    تتيح للوكيل طلب معلومات من المستخدم من خلال نموذج إدخال المستخدم أو عرض محتويات تفاعلية.
    يمكن إدراج رسائل الغنية في رسالة دردشة باستخدام رموز اختصار. تقبل رموز الاختصار معلمات متنوعة مثل العنوان والوصف.
    تمثل الرسائل الغنية المتاحة أدناه.
</p>
<h4>كيف يعمل:</h4>
<hr class="space-sm" />
<div class="box-steps">
    <div class="step-item">
        <span>1</span>
        <div class="content">
            <h3>إنشاء وإرسال</h3>
            <div>
                <img src="../../media/docs/rich-message-1.jpg" alt="Rich message" />
                أنشئ رسالة غنية عن طريق إدراج رمز اختصار في محرر النص في منطقة الإدارة. قم بتخصيص جميع المعلمات باستخدام معلوماتك وأرسل رسالتك.
            </div>
        </div>
    </div>
    <div class="step-item">
        <span>2</span>
        <div class="content">
            <h3>يتم عرض الرسالة</h3>
            <div>
                <img src="../../media/docs/rich-message-2.jpg" alt="Rich message" />
                عند استخدام رمز اختصار، يرى المستخدم الرسالة الغنية (وليس الرمز) ويمكنه اختيار أو إدخال المعلومات المطلوبة لإكمال تقديم النموذج.
            </div>
        </div>
    </div>
    <div class="step-item">
        <span>3</span>
        <div class="content">
            <h3>تم تقديم رد المستخدم</h3>
            <div>
                <img src="../../media/docs/rich-message-3.jpg" alt="Rich message" />
                بمجرد ملء نموذج الرسالة الغنية وإرساله من قبل المستخدم، يتم عرض رسالة النجاح ويتم حفظ بيانات النموذج.
            </div>
        </div>
    </div>
</div>
                            <hr class="space-sm" />
                            <h4>رسائل الغنية</h4>
<hr class="space-sm" />
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>الاسم</th>
            <th>رمز اختصاري</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>بطاقة</td>
            <td>
                <pre>[card image="URL" header="TITLE" description="Lorem ipsum dolor sit amete" link="URL" link-text="Purchase" extra="$399" target="_blank"]</pre>
            </td>
            <td>بطاقة نداء للتحرك مع صورة وعنوان ووصف ورابط، والمزيد.</td>
        </tr>
        <tr>
            <td>متزلج</td>
            <td>
                <pre>[slider image-1="URL" header-1="TITLE" description-1="Lorem ipsum dolor sit amete" link-1="URL" link-text-1="Purchase" extra-1="$599" image-2="URL" header-2="TITLE" description-2="Lorem ipsum dolor sit amete" link-2="URL" link-text-2="Purchase" extra-2="$399" target="_blank"]</pre>
            </td>
            <td>متزلج ببطاقات دعوة للتحرك مع صورة وعنوان ووصف ورابط، والمزيد. يمكنك إضافة ما يصل إلى 10 شرائح.</td>
        </tr>
        <tr>
            <td>صور المتزلج</td>
            <td>
                <pre>[slider-images images="URL,URL,URL"]</pre>
            </td>
            <td>متزلج من الصور.</td>
        </tr>
        <tr>
            <td>شيبس</td>
            <td>
                <pre>[chips options="A,B,C"]</pre>
            </td>
            <td>قائمة أزرار.</td>
        </tr>
        <tr>
            <td>أزرار</td>
            <td>
                <pre>[buttons options="A,B,C"]</pre>
            </td>
            <td>قائمة أزرار.</td>
        </tr>
        <tr>
            <td>تحديد</td>
            <td>
                <pre>[select options="A,B,C"]</pre>
            </td>
            <td>قائمة منسدلة للاختيارات.</td>
        </tr>
        <tr>
            <td>الإدخالات</td>
            <td>
                <pre>[inputs values="A,B,C" button="Send now"]</pre>
            </td>
            <td>قائمة إدخالات نصية.</td>
        </tr>
        <tr>
            <td>البريد الإلكتروني</td>
            <td>
                <pre>[email name="true" last-name="true" phone="true" phone-required="false" placeholder=""]</pre>
            </td>
            <td>
                نموذج لجمع بريد المستخدم الإلكتروني ورقم الهاتف.
                جميع السمات اختيارية. يتم استخدام إعدادات المتابعة كقيم افتراضية.
                أضف السمة <b>required-messaging-apps="true"</b> لفرض على المستخدمين تقديم بريدهم الإلكتروني ورقم هاتفهم على تطبيقات المراسلة.
            </td>
        </tr>
        <tr>
            <td>تسجيل</td>
            <td>
                <pre>[registration]</pre>
            </td>
            <td>نموذج التسجيل.</td>
        </tr>
        <tr>
            <td>جدول زمني</td>
            <td>
                <pre>[timetable]</pre>
            </td>
            <td>جدول زمني.</td>
        </tr>
        <tr>
            <td>مقالات</td>
            <td>
                <pre>[articles link="https://alz-bot.com/articles-demo"]</pre>
            </td>
            <td>مقالات مع منطقة بحث. تُستخدم السمة <b>link</b> كرسالة احتياطية لرسائل Facebook Messenger وWhatsApp وTelegram.</td>
        </tr>
        <tr>
            <td>تقييم</td>
            <td>
                <pre>[rating label-positive="Helpful" label-negative="Not helpful" label="Rate and review" success-negative=""]</pre>
            </td>
            <td>
                نموذج تقييم الوكيل.
                لجعل رمز التقييم يعمل على WhatsApp وMessenger وTelegram، يجب عليك استخدام Dialogflow والشات بوت، قم بإنشاء
                <b>نية</b> جديدة مع <b>تقييم</b> كـ <b>سياق إدخال</b>، لا شيء كـ <b>سياق إخراج</b>، قائمة
                برسائل المستخدم الأكثر شيوعًا للتقييم الإيجابي كـ <b>عبارات التدريب</b> (مثل: جيد، إيجابي)
                و <b>{ "rating": 1, "force-message": true }</b> كرد <b>تخصيص</b> . للتقييم السلبي، أنشئ نيةً جديدة بنفس السياق ولكن استبدل عبارات التدريب ورد العبارات المخصص بـ <b>{ "rating": -1, "force-message": true }</b>
                <a href="../../media/docs/rating-intent.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>. يجب أن يتضمن رمز الاختصار أيضًا <b>عنوانًا</b> أو <b>رسالة</b>.
            </td>
        </tr>
        <tr>
            <td>قائمة</td>
            <td>
                <pre>[list values="A,B,C"]</pre>
            </td>
            <td>قائمة نصية.</td>
        </tr>
        <tr>
            <td>قائمة مزدوجة</td>
            <td>
                <pre>[list values="A:X,B:Y,C:Z"]</pre>
            </td>
            <td>قائمة نصية مع عناوين.</td>
        </tr>
        <tr>
            <td>قائمة صورة</td>
            <td>
                <pre>[list-image values="URL:A,URL:B,URL:C"]</pre>
            </td>
            <td>قائمة نصية مع عناوين وصور.</td>
        </tr>
        <tr>
            <td>جدول</td>
            <td>
                <pre>[table header="A,B,C" values="A:B:C,A:B:C,A:B:C"]</pre>
            </td>
            <td>جدول.</td>
        </tr>
        <tr>
            <td>زر</td>
            <td>
                <pre>[button link="https://alz-bot.com" name="Click here" target="_blank" style="link"]</pre>
            </td>
            <td>
                عرض رابط أو فتح مقالة. السمة
                <b>target="_blank"</b> اختيارية وتفتح الرابط في نافذة جديدة.
                السمة
                <b>style="link"</b> اختيارية وتغيير تصميم الزر.
                لفتح مقالة بنقرة على الرابط يجب أن يكونتقييم الرابط
                <b>#article-ID</b>، استبدل ID بمعرف المقال.
            </td>
        </tr>
        <tr>
            <td>فيديو</td>
            <td>
                <pre>[video type="youtube" id="0TImic4N1ko" height="350"]</pre>
            </td>
            <td>
                عرض فيديو YouTube أو Vimeo. يمكن أن تكون قيمة السمة
                <b>type</b>
                <b>youtube</b> أو
                <b>vimeo</b>. السمة
                <b>id</b>
                هي معرف الفيديو، احصل عليه من عنوان URL. السمة
                <b>height</b>
                اختيارية وتعيين ارتفاع الفيديو بالبكسل.
            </td>
        </tr>
        <tr>
            <td>صورة</td>
            <td>
                <pre>[image url="https://alz-bot.com/media/admin.png"]</pre>
            </td>
            <td>صورة.</td>
        </tr>
        <tr>
            <td>مشاركة</td>
            <td>
                <pre>[share fb="https://alz-bot.com/" tw="https://alz-bot.com/" li="https://alz-bot.com/" pi="https://alz-bot.com/" wa="https://alz-bot.com/"]</pre>
            </td>
            <td>أزرار مشاركة اجتماعية.</td>
        </tr>
    </tbody>
</table>
<hr class="space-sm" />
<h4>معلمات عالمية</h4>
<p>تدعم جميع رسائل الغنية البارامترات التالية:</p>
<hr class="space-sm" />
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>المعلمات</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>id="123"</pre>
            </td>
            <td>
                معرف الرسالة الغنية (يُستخدم أيضًا لحفظ بيانات JSON).
            </td>
        </tr>
        <tr>
            <td>
                <pre>title="ABC"</pre>
            </td>
            <td>عنوان الرسالة الغنية.</td>
        </tr>
                                    <tr>
                                        <td>
                                        <pre>message="ABC"</pre>
<td>وصف الرسالة الغنية التي تظهر أسفل العنوان.</td>
</tr>
<tr>
    <td>
        <pre>success="ABC"</pre>
    </td>
    <td>
        الرسالة التي تظهر عندما يكمل المستخدم ويقوم بإرسال الرسالة الغنية.
        يتم إلحاق إدخال المستخدم بهذه الرسالة.
    </td>
</tr>
<tr>
    <td>
        <pre>settings="ABC"</pre>
    </td>
    <td>
        حقل إضافي لقيم اختيارية إضافية.
    </td>
</tr>
</tbody>
</table>
<hr class="space-sm" />
<h4>رد الرسالة الغنية</h4>
<p>
    عندما يكمل المستخدم رسالة غنية، يتم حفظ بيانات الرد بتنسيق JSON في قاعدة البيانات
    تحت الجدول
    <b>sb_messages</b> والعمود
    <b>payload</b>. مثال:
    <pre class="prettyprint lang-json">{"rich-messages":{"4Voyu":{"type":"email","result":{"email":["example@gmail.com","Your email ..."]}}}}</pre>
</p>
<hr class="space-sm" />
<h4>رسائل الغنية المخصصة</h4>
<p>
    يمكنك إنشاء رسائل غنية مخصصة بمحتوى مخصص خاص بك عن طريق الانتقال إلى
    <b>Settings > Miscellaneous</b>.
    حاليًا، تكون رسائل الغنية المخصصة ثابتة ولا تتوفر خيارات تفاعلية كما هو الحال
    مع رموز الاختصار. ومع ذلك، يمكنك إدراج أكواد HTML مخصصة.
</p>
<hr id="html-codes" class="space-sm" />
<h4>أكواد HTML</h4>
<p>
    عند إنشاء رسالة غنية مخصصة، يمكنك استخدام الأكواد التالية:
</p>
<hr class="space-sm" />
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>الرمز</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre class="prettyprint">&lt;a href="https://www.google.com" target="_blank" class="sb-rich-btn sb-btn">انقر هنا&lt;/a></pre>
            </td>
            <td>رابط بتصميم زر.</td>
        </tr>
        <tr>
            <td>
                <pre class="prettyprint">&lt;a href="https://www.google.com" target="_blank" class="sb-rich-btn sb-btn-text">انقر هنا&lt;/a></pre>
            </td>
            <td>رابط.</td>
        </tr>
        <tr>
            <td>
                <pre class="prettyprint">&lt;div class="sb-image">&lt;img src="https://via.placeholder.com/1500x600" class="sb-image" />&lt;/div></pre>
            </td>
            <td>صورة تكبير عند النقر.</td>
        </tr>
    </tbody>
</table>
<hr class="space" />
<h2 id="attachments">المرفقات</h2>
<p>
    يتم تعيين امتدادات المرفقات الملفات المسموح بها في ملف
    alz-bot/include/upload.php.
    يتم عرض تنسيقات الصور التالية تلقائيًا: .jpg، .jpeg، .png.
</p>
<p>
    أضف امتدادات ملفات مسموح بها جديدة عن طريق إضافة الكود <b>define("SB_FILE_EXTENSIONS", ["exe", "abc", ...])</b> إلى ملف
    <b>config.php</b>
    في مجلد تثبيت Alz-Bot الخاص بك. استبدل ["exe", "abc", ...] بمصفوفة تحتوي على الامتدادات التي ترغب في السماح لها.
</p>
</div>
<hr />
<div id="users">
<div class="label label-docs">المستخدمون</div>
<h2 id="users-manage">إدارة المستخدمين</h2>
<p>
    قم بإدارة المستخدمين من
    <b>منطقة المستخدمين</b>
    في القائمة اليسرى لمنطقة الإدارة.
</p>
<hr class="space-sm" />
<h4>البحث عن المستخدمين</h4>
<p>يمكنك البحث عن المستخدمين حسب الاسم، واللقب، والبريد الإلكتروني، والحقول المخصصة.</p>
<h4>حذف المستخدمين</h4>
<p>
    يمكنك حذف مستخدم عن طريق فتح
    <b>مربع تحرير المستخدم</b>
    ثم النقر على
    <b>حذف المستخدم</b>.
    لحذف عدة مستخدمين في وقت واحد، حدد المستخدمين الذين ترغب في حذفهم من جدول المستخدمين ثم انقر في أعلى اليمين
    <b>رمز الحذف</b>.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>عندما يتم حذف مستخدم، يتم حذف جميع محادثاتهم ورسائلهم تلقائيًا بشكل دائم.</li>
    <li>إذا عاد مستخدم محذوف إلى الموقع، يتم إنشاء مستخدم جديد تلقائيًا.</li>
    <li>يتم حذف الزوار تلقائيًا كل 24 ساعة.</li>
</ul>
<h4 id="user-table-extra-columns">أعمدة جدول المستخدم الإضافية</h4>
<p>
    لعرض أعمدة إضافية في جدول المستخدمين، انتقل إلى <b>Settings > Admin > Users table additional columns</b> وأضف الأعمدة الجديدة.
    قيمة كل عمود هي الشارة لتفاصيل المستخدم أو تفاصيل المستخدم الإضافية التي ترغب في عرضها. الشارة هي بأحرف صغيرة ومع الفراغات المستبدلة بالحرف <b>-</b>.
    على سبيل المثال، الشارة لتفاصيل المستخدم الإضافية "تاريخ الميلاد" هي "date-of-birth".
</p>
<h4>أنواع المستخدمين</h4>
<hr class="space-sm" />
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>النوع</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>user</pre>
            </td>
            <td>المستخدم هو أي مستخدم يمتلك بريد إلكتروني.</td>
        </tr>
        <tr>
            <td>
                <pre>lead</pre>
            </td>
            <td>
                "الزبون المتوقع" هو أي مستخدم ليس لديه تفاصيل مستخدم، والذي يتم تسجيله تلقائيًا، ولديه محادثة واحدة على الأقل.
            </td>
        </tr>
        <tr>
            <td>
                <pre>visitor</pre>
            </td>
            <td>
                "الزائر" هو أي مستخدم لم يبدأ في محادثة.
                ملاحظة: يتم حذف الزوار تلقائيًا كل 24 ساعة.
            </td>
        </tr>
    </tbody>
</table>
<hr class="space" />
<h2 id="agents">إدارة الوكلاء</h2>
<p>
    قم بإدارة الوكلاء من
    <b>منطقة المستخدمين</b>.
    الوكيل هو مستخدم خاص يمكنه تسجيل الدخول إلى منطقة الإدارة والرد على جميع المحادثات.
    هناك نوعان من الوكلاء: وكلاء.
    يمكن للمسؤولين فقط إنشاء وكلاء جدد؛
    لديهم أيضًا وصول إلى منطقة الإعدادات. يمكن للوكلاء إدارة فقط المستخدمين والمحادثات.
</p>
<p>
    إذا كنت تستخدم نسخة
    وورد بريس
    من Alz-Bot، يتم إنشاء مسؤول عند تنشيط المكون الإضافي بنفس اسم المستخدم وكلمة المرور للمستخدم المسجل الحالي.
</p>
<hr class="space" />
<h2 id="users-info">المعلومات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>يتم عرض المستخدمين الجدد تلقائيًا في جدول المستخدمين في الوقت الحقيقي.</li>
    <li>لعرض المستخدمين عبر الإنترنت وتلقي إشعار المستخدم عبر الإنترنت، قم بتمكين <b>الإعدادات > المستخدمين > تسجيل جميع الزوار</b>.</li>
<li>لتلقي إشعار المستخدم عبر الإنترنت، يجب عليك أيضًا تمكين <b>الإعدادات > متفرقات > Pusher</b>.</li>
<li>يتم عرض نموذج تسجيل الدخول فقط إذا كان حقل كلمة المرور للتسجيل معروضًا.</li>
<li>يتم عرض حقل كلمة المرور دائمًا عندما يتم تعيين نظام المستخدم إلى "ورد بريس".</li>
<li>إذا تم تمكين <b>الإعدادات > المستخدمين > السماح بالبريد الإلكتروني المكرر</b> وأدخل المستخدم بريدًا إلكترونيًا تم تسجيله بالفعل، يتم إنشاء مستخدم جديد ويتم إزالة البريد الإلكتروني من المستخدم القديم. لن يكون لدى المستخدم الجديد إمكانية الوصول إلى رسائل ومحادثات المستخدم القديم. يمكنك أيضًا تسجيل دخول المستخدم تلقائيًا عبر <a class="scroll-to" href="#url-parameters">معلمات URL</a>.</li>
</ul>
</div>
<hr />
<div id="settings">
    <div class="label label-docs">الإعدادات</div>
    <h2>الإعدادات</h2>
    <hr class="space" />
    <h2 id="office-hours">ساعات العمل</h2>
    <p>
        يمكنك ضبط جدول ساعات العمل من
        <b>الإعدادات > متفرقات</b>. تُستخدم ساعات العمل لأغراض:
    </p>
    <ul class="icon-list icon-line icon-docs">
        <li>
            عرض الجدول الزمني ورسالة عندما يرسل مستخدم رسالة خارج ساعات العمل أو إذا كان جميع الوكلاء غير متصلين.
            لتمكين هذه الميزة، قم بإعداد <b>رسالة العدم الحاضر</b> في <b>الإعدادات > الرسائل > رسالة العدم الحاضر</b>. يتم إرسال رسالة العدم الحاضر إلى نفس المستخدم مرة واحدة كحد أقصى في الساعة.
        </li>
        <li>تعطيل وإخفاء الدردشة خلال ساعات العمل الخارجية.</li>
        <li>تعطيل روبوت الدردشة (Dialogflow) خلال ساعات العمل العادية وتمكينه خلال ساعات العمل الخارجية.</li>
    </ul>
    <h4>مزيد من المعلومات</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>تُعتبر القيم الفارغة في إعدادات الجدول كساعات عمل خارجية.</li>
        <li>
            ساعات العمل معترف بها في تنسيق توقيت عالمي (UTC).
            يتم إنشاء توقيت UTC الخاص بك تلقائيًا عند النقر فوق الحقل
            <b>الإعدادات > متفرقات > تعويض UTC</b>.
            للحصول يدويًا على تعويض UTC لمنطقتك، انتقل إلى:
            <a target="_blank" rel="nofollow" href="https://browserspy.dk/date.php">https://browserspy.dk/</a> أو
            <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/List_of_UTC_time_offsets">wikipedia.org/wiki/List_of_UTC_time_offsets</a>
            وانسخ التعويض (مثل UTC −12:00، أدخل -12).
            يتم قبول الأعداد الصحيحة فقط. إذا لم يكن تعويضك صحيحًا (مثل UTC -12:30 أو UTC -12:45)،
            حاول البحث عن تعويض UTC بديل. إذا كنت لا تستطيع العثور على تعويض صحيح، يجب عليك ضبط الأوقات يدويًا
            في جدول ساعات العمل لتصحيح الفجوة.
        </li>
        <li>تتناسب تنسيقات التاريخ والوقت في الجدول مع تلك المستخدمة تلقائيًا في بلد لغة متصفح المستخدم.</li>
        <li>لا يتم إرسال رسالة العدم الحاضر تلقائيًا إذا كان <b>الإعدادات > روبوت الدردشة (Dialogflow) > استيلاد الإنسان</b> نشطًا. عندما يكون خيار استيلاد الإنسان في Dialogflow نشطًا، يتم إرسال رسالة العدم الحاضر فقط عند استيلاد الإنسان.</li>
        <li>لا يتم إرسال رسالة العدم الحاضر إذا كنت تستخدم تطبيق Slack وكنت أو أي وكيل آخر متصل عبر Slack.</li>
    </ul>
    <hr class="space" />
    <h2 id="articles">مقالات قاعدة المعرفة</h2>
    <p>
        توفر مقالات قاعدة المعرفة إجابات فورية للعملاء للمساعدة في تقليل حجم دعم العملاء.
        لإدارة المقالات، انتقل إلى
        <b>الإعدادات > المقالات</b>. تدعم المقالات رمز HTML، الذي يمكن استخدامه لإضافة صور ومقاطع فيديو ومحتوى آخر.
        فيما يلي بعض أمثلة رمز HTML التي يمكنك استخدامها:
    </p>
    <table class="table table-border docs-table">
        <thead>
            <tr>
                <th>الاسم</th>
                <th>الشيفرة</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>زر</td>
                <td>
                    <pre class="prettyprint">&lt;a href="https://www.google.com" target="_blank" class="sb-rich-btn sb-btn">انقر هنا&lt;/a></pre>
                </td>
            </tr>
            <tr>
                <td>صورة</td>
                <td>
                    <pre class="prettyprint">&lt;img src="https://via.placeholder.com/1500x600" /></pre>
                </td>
            </tr>
            <tr>
                <td>صورة مع معرض الصور</td>
                <td>
                    <pre class="prettyprint">&lt;div class="sb-image">&lt;img src="https://via.placeholder.com/1500x600" class="sb-image" />&lt;/div></pre>
                </td>
            </tr>
            <tr>
                <td>فيديو</td>
                <td>
                    <pre class="prettyprint">&lt;video controls>&lt;source src="video.mp4" type="video/mp4">&lt;/video></pre>
                </td>
            </tr>
            <tr>
                <td>YouTube و Vimeo</td>
                <td>
                    أدخل
                    <b>شيفرة التضمين</b> المقدمة من YouTube أو Vimeo
                </td>
            </tr>
        </tbody>
    </table>
    <h4>عرض المقالات</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            يمكن عرض المقالات في لوحة الدردشة عن طريق تمكينها من
            <b>الإعدادات > الدردشة</b>.
        </li>
        <li>يمكن عرض المقالات في صفحة مخصصة عن طريق إدراج الشيفرة <b>&lt;script>var SB_ARTICLES_PAGE = true;&lt;/script></b> في أي صفحة تعرض الدردشة. لتحديد موقع منطقة المقالات، أدخل الشيفرة <b>&lt;div id="sb-articles" class="sb-loading">&lt;/div></b>. إذا كنت تستخدم إصدار ورد بريس يمكنك استخدام الشورتكود <b>[sb-articles]</b>.</li>
        <li>
            بديلًا لذلك، يمكن مشاركة المقالات عبر رسالة غنية باستخدام الشورتكود،
            <b>[articles]</b>.
        </li>
    </ul>
    <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
    <h4>مزيد من المعلومات</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            قم بترجمة الفئات من
            <b>الإعدادات > الترجمات</b> عن طريق إضافة اسم الترجمة وترجمتها.
        </li>
        <li>
            إذا استخدمت الفئات، يتم عرض المقالات فقط التي تم تعيينها إلى فئة.
        </li>
        <li>
            إذا كان هناك مقالة مترجمة على الأقل بلغة المستخدم، يتم عرض المقالات المترجمة فقط.
        </li>
        <li>تتم مزامنة المقالات تلقائيًا مع قاعدة المعرفة في Dialogflow إذا تم تثبيت تطبيق Dialogflow.</li>
        <li>يمكنك إنشاء رابط دردشة داخلي إلى مقال باستخدام <a href="#rich-messages">رسالة الزر الغنية</a>.</li>
<li>يمكنك إنشاء روابط خارجية للمقالات باستخدام خاصية URL <b>article=ID</b>، قم بتبديل <b>ID</b> بمعرف المقال. مثال: <a href="https://alz-bot.com/articles-demo?article=Ucsx6" target="_blank">https://alz-bot.com/articles-demo?article=Ucsx6</a>.</li>
</ul>
<hr class="space" />
<h2 id="multilingual">اللغة والترجمات</h2>
<p>Alz-Bot متعدد اللغات بالكامل ويوفر ميزات قوية لاكتشاف لغة المستخدم على الطاير.</p>
<h4>تحرير الترجمات</h4>
<p>
    لتحرير لغتي الدردشة والإدارة، انتقل إلى
    <b>الإعدادات > الترجمات</b>.
    بعض الإعدادات، مثل محتويات البريد الإلكتروني، قابلة للترجمة مباشرة وبالتالي لا تحتاج إلى الترجمة هنا.
</p>
<h4>لغة الدردشة</h4>
<p>
    Alz-Bot مترجمة بالفعل إلى 41 لغة. هناك العديد من الخيارات المتاحة لتعيين اللغة:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        <b>الخيار 1</b>:
        انتقل إلى
        <b>الإعدادات > الدردشة</b> وحدد
        <b>ترجم تلقائياً</b>.
        سيستخدم هذا الخيار تلقائياً لغة الدردشة في متصفح المستخدم.
    </li>
    <li>
        <b>الخيار 2 - PHP فقط</b>:
        أضف معلمة عنوان URL
        <b>lang=LANGUAGE-CODE</b>
        إلى السكريبت الذي يحمل الدردشة،
        حيث يتم استبدال "LANGUAGE-CODE" برمز اللغة المكون من حرفين الذي ترغب في عرضه.
        مثال:
        <b>https://alz-bot.com/alz-bot/js/main.js?lang=en</b>.
        انتقل إلى
        <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">wikipedia.org/wiki/List_of_ISO_639-1_codes</a>
        للحصول على قائمة كاملة برموز اللغات (انظر العمود 639-1).
    </li>
    <li>
        <b>الخيار 2 - ورد بريس فقط</b>:
        انتقل إلى
        <b>الإعدادات > ورد بريس</b> وقم بتعيين الخيار
        <b>فرض اللغة</b>.
    </li>
    <li>
        <b>الخيار 3 - ورد بريس فقط</b>:
        نسخة ورد بريس من آلزا بوت تستخدم اللغة الافتراضية لتثبيت ورد بريس؛
        أو لغة الصفحة أو المقالة الحالية إذا كان الموقع متعدد اللغات.
        تتوافق هذه الميزة مع WPML وPolylang وغيرها من الإضافات متعددة اللغات.
        ملاحظة: يتم تعطيل هذه الميزة تلقائيًا إذا كان الخيار
        <b>الدردشة > ترجمة تلقائية</b> نشطًا.
    </li>
</ul>
<h4 id="multilingual-admin">لغة الإدارة</h4>
<p>
    لترجمة منطقة الإدارة، اتبع الخطوات التالية:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بترجمة النصوص بلغتك من
        <b>الإعدادات > الترجمات</b>.
    </li>
</ul>
<p>لتعيين لغة منطقة الإدارة لديك ثلاث خيارات:</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتفعيل الخيار
        <b>الإعدادات > الإدارة > ترجمة منطقة الإدارة تلقائياً</b>.
        يقوم هذا الخيار بترجمة منطقة الإدارة تلقائيًا لتتناسب مع لغة ملف تعريف الوكيل أو لغة متصفح الوكيل.
    </li>
    <li>
        قم بتحرير ملف
        <b>config.php</b>
        داخل دليل تثبيت آلزا بوت
        وأدخل الرمز
        <b>define('SB_ADMIN_LANG', 'LANGUAGE-CODE');</b>
        في نهاية محتوى الملف. استبدل
        <b>LANGUAGE-CODE</b>
        برمز اللغة الذي ترغب في استخدامه، استخدم حرفين فقط، على سبيل المثال، أدخل
        <b>es</b>
        فقط، وليس
        <b>es_ES</b>.
    </li>
</ul>
<h4>ترجمة المحتويات المخصصة</h4>
<p>
    يمكنك ترجمة معظم المحتويات المخصصة: رسائل غنية، عناوين، وصفوف، رسائل تلقائية،
    رأس الدردشة، وأكثر من ذلك.
    لإضافة ترجمات، حدد اللغة التي تريد وانقر على زر
    <b>ترجمة جديدة</b>.
</p>
<h4>إضافة لغة جديدة</h4>
<p>
    لإضافة لغة جديدة، اتبع الخطوات التالية:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        عبر FTP أو مدير الملفات، انتقل إلى
        <b>alz-bot\resources\languages\front</b>.
    </li>
    <li>
        قم بتكرار (انسخ والصق في نفس الدليل) ملف
        <b>alz-bot\resources\languages\front\source.json</b>.
    </li>
    <li>
        أعد تسمية الملف باستخدام رمز اللغة الذي ترغب في إضافته. انتقل إلى
        <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">wikipedia.org/wiki/List_of_ISO_639-1_codes</a>
        للحصول على قائمة كاملة برموز اللغات (انظر العمود 639-1).
    </li>
    <li>
        انتقل إلى
        <b>الإعدادات > الترجمات</b>
        ويجب أن تظهر اللغة الجديدة تلقائياً.
    </li>
</ul>
<p>
    لإضافة لغة جديدة لمنطقة الإدارة، اتبع نفس الخطوات بالضبط، ولكن استخدم المجلد
    <b>admin</b>
    بدلاً من ذلك.
    لا تضيع اللغات الجديدة ولا يتم حذفها عند تحديث الإضافة.
</p>
<h4>معلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>إذا كانت سلسلة الترجمة مفقودة، قم بإضافتها بالنقر على زر <b>إضافة ترجمة جديدة</b>.</li>
    <li>إذا لم تعمل سلسلة الترجمة، تأكد من إزالة جميع المسافات البيضاء والأسطر الفارغة في بداية ونهاية السلسلة.</li>
    <li>
        لا تحفظ التعديلات على الترجمات في قاعدة البيانات ولكن مباشرة في ملفات الترجمة.
        عند تحرير الترجمة وحفظها، يتم إنشاء نسخة احتياطية في مجلد
        <b>التحميلات</b>.
        يتم استعادة النسخة الاحتياطية تلقائيًا عند تحديث الإضافة وتفعيلها.
    </li>
    <li>
        بعض الرموز الخاصة مثل
        <b>&</b>
        يتم استبدالها بالشيفرة المكافئة في HTML (انظر
        <a href="https://www.w3schools.com/html/html_entities.asp" target="_blank" rel="nofollow">https://www.w3schools.com/html/html_entities.asp</a>).
        على سبيل المثال،
        <b>&</b>
        يتم استبدالها بـ
        <b>&amp;amp;</b>
    </li>
    <li>
        يمكنك أيضًا إضافة سلاسل ترجمة مفقودة عن طريق الكود. قم بتحرير ملفات اللغة الموجودة في
        <b>alz-bot\resources\languages</b>.
        بمجرد تحرير الملف، ستظهر السلاسل الجديدة في
        <b>الإعدادات > الترجمات</b>.
    </li>
</ul>
<hr class="space" />
<h2 id="departments">الأقسام</h2>
<p>
    تمنحك الأقسام القدرة على توزيع المحادثات وتعيين وكلاء مختلفين لأقسام محددة.
    على سبيل المثال، يمكنك إنشاء قسم بعنوان "المبيعات" وتعيين محادثات معينة لتلك الإدارة.
    لبدء استخدام الأقسام، اتبع الخطوات أدناه:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى
        <b>الإعدادات > متنوعة</b> وأضف الأقسام المطلوبة. بعد الحفظ، أعد تحميل الصفحة.
    </li>
    <li>
        انتقل إلى
        <b>المستخدمين > وكلاء</b> وقم بتحرير وكيل، سترى حقلًا جديدًا حيث يمكنك تعيين قسم الوكيل.
    </li>
    <li>
        أعد تحميل الصفحة وانتهيت! في
        <b>منطقة المحادثات</b>، سترى الآن خيارًا لتعيين القسم.
    </li>
</ul>
<h4>الإعدادات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        <b>عرض في لوحة المعلومات</b> يعرض قائمة الأقسام في لوحة المحادثة ويجبر المستخدمين على اختيار قسم قبل بدء المحادثة.
    </li>
    <li>
        <b>عرض الصور</b> يعرض صورة القسم بدلاً من لون القسم.
    </li>
    <li>
        <b>التسمية</b> استبدل التسمية
        <b>الأقسام</b> (الجمع) بنص آخر. يتم عرض الاسم في منطقة الإدارة ومنطقة التذاكر.
    </li>
    <li>
        <b>التسمية الفردية</b> استبدل التسمية
        <b>القسم</b> (المفرد) بنص آخر. يتم عرض الاسم في منطقة الإدارة ومنطقة التذاكر.
    </li>
    <li>
        <b>عنوان لوحة المعلومات</b> قم بتعيين عنوان قائمة المحادثة. الافتراضي: الأقسام.
    </li>
</ul>
<h4>كيف يعمل ذلك</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يمكن للوكلاء والمشرفين الوصول إلى المحادثات والمستخدمين والوكلاء الذين تم تعيينهم إلى قسمهم المحدد فقط.
    </li>
    <li>
        عند تعيين وكيل لقسم جديد، يتم إرسال إشعار بالبريد الإلكتروني إلى جميع الوكلاء المعينين في القسم الجديد.
    </li>
    <li>
        القسم
        <b>العام</b> هو عالمي ويمنح الوكلاء الوصول إلى جميع المحادثات في جميع الأقسام. أيضًا، يتم تعيين جميع الوكلاء بدون قسم تلقائيًا إلى القسم العام.
    </li>
    <li>
        لتعيين قسم تلقائيًا لمحادثات المستخدم، يمكنك إدخال المتغير الجافا سكريبت
        <b>var SB_DEFAULT_DEPARTMENT = ID;</b> في الصفحات التي يتم عرض الدردشة فيها، استبدل ID بمعرف القسم.
        لمزيد من التفاصيل، راجع الواجهات البرمجية
        <a href="api/use-cases#auto-departments">هنا</a>.
    </li>
    <li>المشرفون بدون قسم معين يرون دائماً محادثات جميع الأقسام.</li>
    <li>يمكن للدردشة الآلية تعيين قسم للمحادثة النشطة عبر <a class="scroll-to" href="#dialogflow-actions">إجراءات ديالوجفلو</a>.</li>
</ul>
<h4>كيفية تعيين قسم</h4>
<p>يمكنك تعيين قسم للمحادثة بعدة طرق:</p>
<ul class="icon-list icon-line icon-docs">
    <li>عبر <b>الإعدادات > متنوعة > إعدادات الأقسام > عرض في لوحة المعلومات</b>. يجبر هذا الإعداد المستخدم على اختيار قسم عند بدء محادثة جديدة.</li>
    <li>عبر <b>الإعدادات > الأتمتة > المزيد</b>.</li>
    <li>
        عبر متغير جافا سكريبت
        <b>var SB_DEFAULT_DEPARTMENT = ID;</b>. أدخل الكود في الصفحات التي يتم عرض الدردشة فيها واستبدل ID بمعرف القسم.
        لمزيد من التفاصيل، راجع واجهة البرمجة
        <a href="api/use-cases#auto-departments">هنا</a>.
    </li>
    <li>عبر <a href="works/docs/api/js">واجهة البرمجة</a>.</li>
</ul>
<hr class="space" />
<h2 id="queue">الطابور</h2>
<p>
    عند تفعيل الطابور عبر
    <b>الإعدادات > متنوعة > الطابور</b>،
    يدخل المستخدمون تلقائيًا في طابور عندما يتم الوصول إلى حد الدردشة لدى الوكيل.
    عندما يدخل المستخدم الطابور، يتم عرض رسالة تحتوي على الموقف الحالي في الطابور والوقت المتوقع للانتظار.
    تقوم دوريًا بتعيين المحادثات لجميع الوكلاء المتاحين بنسب متناسبة.
    عندما يقوم وكيل بوضع علامة على محادثة كمكتملة (من خلال أرشفتها)، يتم تحديث الطابور وتلقي محادثة جديدة.
</p>
<h4>مزيد من المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>يتم احتساب الوكلاء عبر الإنترنت فقط كـ "وكلاء متاحين"؛ فقط الوكلاء عبر الإنترنت سيتلقون محادثات جديدة.</li>
    <li>المشرفون غير مدرجين؛ المشرفون يرون دائماً جميع المحادثات.</li>
    <li>يجب على الوكلاء أرشفة المحادثة لتعليمها كمكتملة؛ وهذا سيمنحهم تلقائيًا وصولًا إلى المحادثة التالية في الطابور.</li>
    <li>يمكن للوكلاء تغيير حالتهم بين الاتصال وعدم الاتصال عن طريق تحريك مؤشر الماوس فوق صورتهم الشخصية ثم النقر على تسمية الفقاعة في أسفل يسار منطقة الإدارة.</li>
    <li>يمكن للوكلاء رؤية محادثاتهم فقط؛ ومع ذلك، يمكنهم رؤية جميع محادثات مستخدم واحد.</li>
    <li>يمكن للوكلاء البحث وتصفية محادثاتهم فقط.</li>
    <li>يتم عرض وقت الانتظار بالدقائق ويتم حسابه كالتالي: موقف الطابور X وقت الرد = وقت الانتظار. على سبيل المثال، إذا كان المستخدم في المرتبة 5 في الطابور، وتم تعيين وقت الرد إلى 4 دقائق (عبر الإعدادات > متنوعة > الطابور)، سيكون الوقت الإجمالي المعروض للمستخدم 20 دقيقة.</li>
    <li>إذا كان المستخدم في الطابور وغادر (على سبيل المثال، عند إغلاق المستعرض) لأكثر من دقيقة واحدة، يتم حفظ المحادثة؛ ومع ذلك، بمجرد عودة المستخدم، يتم إعادة تعيين الطابور وسيفقد المستخدم موقعه السابق.</li>
    <li>الطابور متوافق مع الأقسام.</li>
    <li>إذا كانت استلام البشر من ديالوجفلو نشطة، يتم تنشيط الطابور فقط عند الاستيلاء البشري.</li>
    <li>بالنسبة للمحادثات التي تبدأ من تطبيقات المراسلة مثل WhatsApp، لا يمكن احترام الحد الأقصى للمحادثات لكل وكيل، سيتم تعيين جميع المحادثات فورًا وبنسبة متناسبة لوكيل.</li>
<li>استخدم <b>الإعدادات > الرسائل > الرسالة في وضع عدم الاتصال</b> لمنع ظهور رسالة تحديث الطابور في الدردشة للمستخدم.</li>
<li>عند تفعيل خيار الصوت، يتم تشغيل صوت عندما يحين دور المستخدم.</li>
</ul>
<h4>كيفية اختبار الطابور</h4>
<ul class="icon-list icon-line icon-docs">
    <li>لتحاكي عدة مستخدمين ووكلاء، افتح الدردشة في متصفحات متعددة مختلفة (مثل Opera، Firefox، Brave، Chrome، إلخ). يمكن لكل متصفح تحاكي مستخدمين/وكلاء اثنين: واحد في الوضع العادي وواحد في الوضع "الخاص" أو "التصفح الخفي".</li>
    <li>
        لإعادة تعيين الدردشة وبدء جلسة مستخدم جديدة، افتح وحدة التحكم في المتصفح، أدخل
        <b>SBF.reset()</b>، واضغط على
        <b>ENTER</b>.
    </li>
</ul>
<hr class="space" />
<h2 id="routing">توجيه المحادثات</h2>
<p>
    عند تفعيل توجيه المحادثات عبر
    <b>الإعدادات > متفرقات > توجيه المحادثات</b>، يقوم Alz-Bot  بتعيين محادثات المستخدمين تلقائيًا لجميع وكلاء المتاحين بنسبة متناسبة.
</p>
<h4>معلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>تُعين المحادثات للوكلاء المتصلين أولاً. إذا كان جميع الوكلاء غير متصلين، يتم تعيين المحادثات بنسبة متناسبة بين جميع الوكلاء.</li>
    <li>تُعين المحادثات للوكلاء الذين لديهم أقل محادثات نشطة. تُعتبر المحادثة نشطة إذا لم تتم حذفها أو أرشفتها. إذا كان التوجيه نشطًا، يجب عليك أرشفة المحادثات عند الانتهاء منها.</li>
    <li>لا يتم تضمين المسؤولين؛ يرون دائماً جميع المحادثات.</li>
    <li>يمكن للوكلاء تبديل حالتهم بين متصل وغير متصل عندما يحومون فوق صورة ملف تعريفهم ثم ينقرون على تسمية الفقاعة النصية في أسفل الإدارة.</li>
    <li>يمكن للوكلاء رؤية محادثاتهم فقط؛ ومع ذلك، يمكنهم رؤية جميع محادثات مستخدم واحد.</li>
    <li>يمكن للوكلاء البحث وتصفية محادثاتهم فقط.</li>
    <li>التوجيه متوافق مع الأقسام.</li>
    <li>عندما يكون التوجيه نشطًا، يمكن للوكلاء توجيه المحادثات يدويًا إلى وكلاء آخرين من اللوحة الجانبية اليمنى في منطقة المحادثات.</li>
    <li>إذا كانت المحادثة مؤرشفة وفتحها المستخدم في المستقبل بإرسال رسالة جديدة، إذا كان الوكيل المعين في المحادثة غير متصل، يتم تعيين المحادثة لوكيل آخر.</li>
</ul>
<hr class="space" />
<h2 id="manual-routing">التوجيه اليدوي</h2>
<p>
    عند تفعيل التوجيه عبر
    <b>الإعدادات > متفرقات > إخفاء محادثات الوكلاء الآخرين</b>، يرى الوكلاء فقط محادثاتهم الخاصة ويمكنهم اختيار تلك التي لم يتم تعيينها.
</p>
<ul class="icon-list icon-line icon-docs">
    <li><b>قائمة الوكلاء</b>: تعرض قائمة الوكلاء لتعيين المحادثة النشطة إلى وكيل آخر.</li>
    <li><b>التوجيه إذا كان الوكيل غير متصل</b>: إذا كانت المحادثة مؤرشفة وفتحها المستخدم في المستقبل بإرسال رسالة جديدة، إذا كان الوكيل المعين في المحادثة غير متصل، يتم تعيين المحادثة لوكيل آخر إذا كان هناك على الأقل وكيل واحد، وإلا لا يتم تعيينها لأي وكيل.</li>
    <li><b>عرض المحادثات غير المعينة</b>: يتيح للوكلاء رؤية المحادثات غير المعينة، عندما يرد الوكيل، يتم تعيين المحادثة تلقائيًا له ويتم إزالتها في الوقت الحقيقي من منطقة الإدارة الخاصة بالوكلاء الآخرين. قم بالتحقق من هذا الخيار لتمكين التوجيه اليدوي.</li>
</ul>
<hr class="space" />
<h2 id="email-piping">إرسال البريد الإلكتروني</h2>
<p>
    يتيح إرسال البريد الإلكتروني لك ولوكلائك ولمستخدميك الرد على رسائل الدردشة عبر البريد الإلكتروني.
</p>
<h4>التفعيل</h4>
<p>
    لتفعيل إرسال البريد الإلكتروني، انتقل إلى
    <b>الإعدادات > الإشعارات > إرسال البريد الإلكتروني</b> وأدخل معلومات خادم البريد الإلكتروني الخاص بك،
    ثم قم بتعيين عنوان البريد الإلكتروني لاستخدامه في إرسال البريد الإلكتروني في
    <b>
        الإعدادات > الإشعارات > SMTP
    </b> وانتهى! يجب أن يكون عنوان البريد الإلكتروني هو الذي يتصل به خادم إرسال البريد الإلكتروني.
    سيقوم Alz-Bot  بإرسال جميع الرسائل البريدية من هذا العنوان البريدي وستتمكن من الرد عليها أنت ووكلاؤك ومستخدميك.
</p>
<h4>معلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يجب تمكين إعداد
        <b>الإشعارات > إشعارات البريد الإلكتروني للمستخدم</b> لإرسال الردود إلى بريد المستخدم.
    </li>
    <li>إذا كنت تستخدم تطبيق Dialogflow وكانت إعدادات
        <b>الإعدادات > Dialogflow > استيلاء البشر</b> نشطة، لا يتم إرسال أي رسائل بريد إلكتروني إذا كان الدردشة الآلية تعرف الإجابة.
    </li>
    <li>
        إذا كانت إعدادات <b>تحويل جميع الرسائل البريدية</b> نشطة، سيتم تحويل جميع رسائل البريد الواردة إلى صندوق الدردشة، انتبه إلى أن جميع رسائل البريد، بما في ذلك الرسائل العشوائية والرسائل الترويجية وغيرها، قد يتم تحويلها بشكل خاطئ.
    </li>
    <li>
        إذا كانت إعدادات <b>تحويل جميع الرسائل البريدية</b> نشطة، سيتم تجاهل الرسائل البريدية المرسلة من عناوين بريد الوكلاء والمسؤولين، استخدم عنوان بريد آخر للفحص.
    </li>
    <li>
        إذا كانت إعدادات <b>تحويل جميع الرسائل البريدية</b> نشطة، ستؤدي كل رسالة بريدية مرسلة مباشرة إلى عنوان البريد الإلكتروني لتحرير محادثة مستخدم جديدة.
    </li>
    <li>لا يمكنك استخدام نفس عنوان البريد الإلكتروني الذي تم استخدامه للإجابة عبر أنابيب البريد الإلكتروني. يجب على جميع وكلاء ومشرفي Alz-Bot استخدام عنوان بريد إلكتروني مختلف.</li>
<li>يجب على الوكلاء الرد عبر البريد الإلكتروني من نفس عنوان البريد الإلكتروني المسجل في Alz-Bot.</li>
<li>عندما يرد الوكلاء في Alz-Bot، يتم إرسال رسائل البريد الإلكتروني دائمًا إلى المستخدم، حتى إذا تم تعطيل إشعارات البريد الإلكتروني للمستخدم.</li>
<li>يتم إرسال البريد الإلكتروني إلى الوكلاء فقط إذا كانوا غير متصلين. إذا كانوا متصلين، لا يتم إرسال أي رسائل بريد إلكتروني.</li>
<li>
    بالنسبة لبريد Gmail وبريد Google Workspace، يجب عليك استبدال كلمة مرور Google الخاصة بك بكلمة مرور تطبيق Google، التفاصيل على <a href="https://support.google.com/accounts/answer/185833" target="_blank" rel="nofollow">https://support.google.com/accounts/answer/185833</a> (قسم إنشاء واستخدام كلمات المرور للتطبيقات).
    أدخل <b>imap.gmail.com</b> كمضيف و <b>993</b> كمنفذ.
</li>
<li>
    يتطلب أنابيب البريد الإلكتروني
    <b>وحدة php5-imap</b> (وحدة IMAP). إذا لم يتم تثبيتها على خادمك، يمكنك تثبيتها باستخدام الأمر
    <b>apt-get install php5-imap</b>. إذا كانت لديك مشكلات، اتصل بدعم الاستضافة/الخادم الخاص بك.
</li>
<li>
    تضيف خيار
    <b>Delimiter</b> نصًا في أعلى جميع رسائل البريد الإلكتروني:
    <div style="color:#b5b5b5;display:inline">
        ### يرجى كتابة ردك أعلاه على هذا الخط ###
    </div>. يُخبر هذا النص Alz-Bot بحذف جميع المحتوى أدناه، وهو مفيد لقص جميع اقتباسات الرد. قم بتفعيله إذا رأيت رسائل مكررة في الدردشة.
    إذا كان هذا الخيار نشطًا، فلا يمكنك ولا يمكن للمستخدمين استخدام سلسلة
    <b>### </b> في الرسائل البريدية.
</li>
<li>
    يتم دعم مرفقات البريد الإلكتروني.
</li>
<li>
    من أجل أن تعمل أنابيب البريد الإلكتروني، يجب أن تحتوي ردود البريد الإلكتروني على اسم مستلم Alz-Bot. على سبيل المثال، <b>Alz-Bot | SB2457-4734 &lt;example@email.com></b>.
    جميع العملاء الرئيسيين للبريد الإلكتروني مثل Outlook Web، Outlook، Gmail، Yahoo Mail يدعمون اسم المستلم تلقائيًا عبر أزرار رد الدردشة أو رد الجميع.
</li>
<li>
    بسبب طبيعة كيفية عمل البريد الإلكتروني، يستخدم كل عميل بريد إلكتروني رموزه وفواصله وسلاسله الآلية الخاصة، وأكثر.
    لهذا السبب، قد تحتوي بعض رسائل الدردشة المحولة من البريد الإلكتروني على نصوص غير صالحة.
    نعمل على تحسين أكبر عدد ممكن من عملاء البريد الإلكتروني، وفي الوقت الحالي، يتم تحسين العملاء التالية ويجب أن لا تعود بأي نص غير صالح: Outlook Web، Outlook، Gmail، Yahoo Mail.
</li>
<li>تدعم أنابيب البريد الإلكتروني الأقسام، إذا كانت محادثة المستخدم مخصصة إلى قسم، يتم إرسال إشعارات البريد الإلكتروني فقط إلى الوكلاء المخصصين لذلك القسم.</li>
</ul>
<h4>وظيفة Cron</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يحاول Alz-Bot معالجة رسائل البريد الإلكتروني عبر مهام cron كل 60 ثانية، التفاصيل <a href="#cron-jobs">هنا</a>.
    </li>
    <li>
        يمكنك تشغيل التنفيذ يدويًا وتسريع مهام cron عبر واجهة برمجة التطبيقات (API) باستخدام الدالة الـ PHP <a href="api/php#email_piping">sb_email_piping()</a>، أو وظيفة واجهة برمجة التطبيقات عبر الويب <a href="api/web#email-piping">email-piping</a>.
    </li>
    <li>
        يمكنك إنشاء مهمة cron تشغيل عنوان URL <b>[ALZ-BOT-INSTALLATION-URL]/include/api.php?piping=true</b> *. استخدم الأمر <b>*/59 * * * * wget [ALZ-BOT-INSTALLATION-URL]/include/api.php?piping=true</b> لتشغيله عبر أمر. قم بتبديل <b>[ALZ-BOT-INSTALLATION-URL]</b> بعنوان URL الخاص بـ Alz-Bot *.
    </li>
    <li>
        يمكنك أيضًا استخدام هذا الملف cron job: <a target="_blank" href="files/cron.zip">تنزيل</a>. أمر مهمة cron هو <b>php -f YOUR-FILE-PATH/cron.php</b>.
    </li>
    <li>
        إذا قمت بتشغيل مهمة cron يدويًا، تحقق من الإعداد <b>تعطيل مهمة cron</b> لمنع Alz-Bot من تشغيلها يدويًا وتحسين الأداء.
    </li>
    <li>
        <b>*</b> إذا كنت تستخدم الإصدار السحابي، يكون العنوان URL هو <b>https://alz-bot.techn-oviz.com/script/include/api.php?piping=true&cloud=API-TOKEN</b>، قم بتبديل API-TOKEN برمز API الخاص بك (https://alz-bot.techn-oviz.com/account/?tab=installation)
    </li>
</ul>
<hr class="space" />
<h2 id="pusher">Pusher</h2>
<p>
    قم بتفعيل Pusher (يُفضل) لاستخدام WebSocket بدلاً من طلبات AJAX HTTP لوظائف الدردشة.
    تعزز WebSocket الأداء التحدثي بشكل كبير عن طريق التخلص من الحاجة إلى طلبات AJAX المتكررة إلى الخادم لفحص الرسائل والمحادثات الجديدة.
    تعزز WebSocket أيضًا استجابة الدردشة: توصيل رسائل أسرع، وحالة تسجيل دخول وكتابة دقيقة أكثر، وقائمة مستخدمين عبر الإنترنت دقيقة أكثر، وأكثر من ذلك.
</p>
<h4>التنشيط</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى
        <a href="https://dashboard.pusher.com/accounts/sign_up" target="_blank" rel="nofollow">https://dashboard.pusher.com/accounts/sign_up</a> وأنشئ حسابًا جديدًا.
    </li>
    <li>
        من لوحة التحكم الخاصة بك على
        <a href="https://dashboard.pusher.com/" target=" _blank" rel="nofollow">https://dashboard.pusher.com</a>، اختر منتج
        <b>Channels</b> بالنقر فوق
        <b>ابدأ</b>.
        <a href="../../media/docs/pusher-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        أدخل اسم تطبيقك واختر أقرب مجموعة إلى موقعك.
        <a href="../../media/docs/pusher-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        من قائمة اليسار في لوحة التحكم، انقر على
        <b>إعدادات التطبيق</b> وقم بتمكين
        <b>أحداث العميل</b>.
        <a href="../../media/docs/pusher-6.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        من قائمة اليسار في لوحة التحكم، انقر على
        <b>Keys</b>، انسخ
        <b>App ID</b>،
        <b>Key</b>،
        <b>Secret</b>،
        <b>Cluster</b>.
        <a href="../../media/docs/pusher-5.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
    اذهب إلى
    <b>الإعدادات > متفرقات > Pusher</b>
    والصق معرّف التطبيق، المفتاح، السرّ، والمجموعة.
</li>
<li>انتهيت.</li>
</ul>
<h4>معلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يمكن استخدام Pusher مجانًا لما يصل إلى 200 ألف رسالة و100 اتصال متزامن في اليوم.
        تُستخدم الرسائل للوظائف التالية وغيرها: تسجيل المستخدم، حالة المستخدم عبر الإنترنت، رسائل الدردشة، ورسائل الروبوت الدردشة.
        يُشرح حساب قنوات Pusher <a href="https://support.pusher.com/hc/en-us/articles/4412259287569-How-Is-My-Message-Count-Calculated-In-Channels-" target="_blank" rel="nofollow">هنا</a>.
    </li>
    <li>
        عندما يكون Pusher نشطًا، يتم استبدال الطلبات AJAX التالية بواسطة WebSockets: التحقق من وجود رسائل جديدة، التحقق من وجود محادثات جديدة، حالة الاتصال عبر الإنترنت/غير عبر الإنترنت، حالة الكتابة، قائمة المستخدمين عبر الإنترنت.
    </li>
    <li>
        عندما يكون Pusher نشطًا، يتم تحديث قيمة
        <b>آخر نشاط</b>
        للمستخدمين والوكلاء فقط عند تحميل الصفحة أو عند إرسالهم لرسائل جديدة.
    </li>
    <li>
        عندما يكون Pusher نشطًا، يتم تفعيل الخيار
        <b>الإعدادات > المستخدمين > تسجيل جميع الزوار</b>
        تلقائيًا ولا يمكن تعطيله.
    </li>
</ul>
<hr class="space" />
<h2 id="direct-messages">الرسائل المباشرة</h2>
<p>
    تسمح الرسائل المباشرة لك بإرسال رسالة دردشة واحدة، أو بريد إلكتروني، أو رسالة نصية، إلى مستخدم واحد أو عدة مستخدمين. اقرأ المعلومات أدناه لفهم كيف يعمل الأمر.
</p>
<h4>عامة</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        لإرسال رسالة، انتقل إلى
        <b>منطقة المستخدمين</b>
        وانقر على أيقونة الرسالة المباشرة. تتوفر أزرار الرسائل المباشرة أيضًا في مربع ملف التعريف الخاص بالمستخدم.
    </li>
    <li>
        لإرسال رسالة إلى جميع المستخدمين، أدخل
        <b>All</b>
        في حقل
        <b>معرّفات المستخدم</b>.
    </li>
    <li>
        لإرسال رسالة إلى مجموعة من المستخدمين، أدخل معرّفاتهم في حقل
        <b>معرّفات المستخدم</b>. يمكنك التحقق من المستخدمين ثم النقر على أيقونة الرسالة المباشرة لإدخال المعرّفات تلقائيًا.
    </li>
    <li>
        جميع أنواع الرسائل تدعم
        <a class="scroll-to" href="#merge-fields">حقول الدمج</a>.
    </li>
</ul>
<h4>رسالة دردشة مباشرة</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        تُرسل رسالة الدردشة إلى المحادثة النشطة، إذا كانت موجودة، وإلا إلى محادثة جديدة.
    </li>
    <li>
        إذا كان الخيار
        <b>الإعدادات > إشعارات البريد الإلكتروني للمستخدمين</b>
        نشطًا، يتم إعلام جميع المستخدمين الذين لديهم عنوان بريد إلكتروني عبر البريد الإلكتروني.
    </li>
    <li>
        إذا كان الخيار
        <b>الإعدادات > إشعارات الرسائل النصية > نشط للمستخدمين</b>
        نشطًا، يتم إعلام جميع المستخدمين الذين لديهم رقم هاتف عبر رسالة نصية.
    </li>
    <li>
        إذا كان الخيار
        <b>الإعدادات > إشعارات الدفع</b>
        نشطًا، يتم إرسال إشعار دفع إلى جميع المستخدمين.
    </li>
    <li>
        يتم إرسال الرسالة أيضًا إلى تطبيقات الرسائل مثل WhatsApp وMessenger إذا كان المستخدم متصلاً بها.
    </li>
    <li>
        لإرسال رسالة إلى جميع مستخدمي تطبيق واحد للرسائل، أدخل أحد السلاسل التالية:
        <b>whatsapp</b>,
        <b>messenger</b>,
        <b>instagram</b>,
        <b>telegram</b>,
        <b>twitter</b>,
        <b>google</b>,
        <b>wechat</b>.
        أدخل <b>tickets</b> لإرسال رسالة فقط إلى المستخدمين الذين قاموا بإنشاء تذكرة Alz-Bot عبر تطبيق Tickets.
    </li>
</ul>
<h4>البريد الإلكتروني المباشر</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        تُضمن رأس البريد الإلكتروني وتوقيع البريد الإلكتروني تلقائيًا في جميع الرسائل البريدية، قم بتعيينهما من
        <b>الإعدادات > الإشعارات</b>.
    </li>
    <li>
        يتم دعم لغة HTML.
    </li>
    <li>
        يدعم الموضوع حقول الدمج.
    </li>
</ul>
<h4>الرسائل النصية المباشرة</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        لتمكين الرسائل النصية المباشرة، يجب تمكين رسائل الرسائل النصية في
        <b>الإعدادات > الإشعارات > إشعارات الرسائل النصية</b>.
    </li>
</ul>
<hr class="space" />
<h2 id="automations">التلقائيات</h2>
<p>
    تتيح التلقائيات تشغيل مهام تلقائية متعددة اللغات عندما تتحقق الشروط التي حددتها.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        لحذف شرط، قم بتعيينه إلى قيمة فارغة. لتعطيل تلقائية، احذف جميع الشروط.
    </li>
    <li>
        يتم إرسال التلقائيات مرة واحدة فقط إلى المستخدمين.
    </li>
    <li>
        إذا استخدمت تلقائية في الماضي، وتلقى المستخدمون بالفعل، فيجب حذف التلقائية وإنشاء واحدة جديدة لعرضها للمستخدمين.
    </li>
    <li>
        <b>التكرار</b> يعمل فقط إذا تم استخدامه بالتزامن مع <b>التاريخ والوقت</b>.
    </li>
    <li>
        عند استخدام <b>التاريخ والوقت</b> بالتزامن مع معيار <b>بالضبط</b>، يجب ألا تحتوي القيمة على ساعات ودقائق (hh:mm). على سبيل المثال، 25/10/2021 (25/10/2021 10:30 لن يعمل).
    </li>
    <li>يجب تفعيل الإعداد <b>Settings > Users > Register all visitors</b> إذا كانت هناك أتمتة في الرسائل تُنفذ عند تحميل الصفحة.</li>
<li>
    <b>المدينة</b>، <b>الدول</b>، <b>اللغات</b> تعمل تلقائيًا فقط إذا تم تمكين كل من الإعدادات <b>Settings > Users > Register all visitors</b> و <b>Settings > Users > Full visitor details</b>.
</li>
<li>
    <b>المدن</b> تعمل فقط إذا تم تعيين تفاصيل المستخدم <b>الموقع</b> وتكون متساوية لـ <b>المدينة، الدولة</b>، أو إذا تم تعيين تفاصيل المستخدم <b>المدينة</b>.
</li>
<li>
    <b>الدول</b> تعمل فقط إذا تم تعيين تفاصيل المستخدم <b>country_code</b> أو <b>country</b>، أو إذا تم تعيين تفاصيل المستخدم <b>الموقع</b> وتكون متساوية لـ <b>المدينة، الدولة</b>. يجب أن يكون اسم الدولة باللغة الإنجليزية.
</li>
<li>
    <b>اللغات</b> تعمل فقط إذا تم تعيين تفاصيل المستخدم <b>browser_language</b> أو <b>language</b>.
</li>
<li>
    يُعتبر الزائر <b>زائرًا عائدًا</b> فقط إذا قام بزيارة الموقع مرة أخرى بعد مرور 24 ساعة أو أكثر.
</li>
<li>
    تظهر النوافذ المنبثقة فقط إذا تم إغلاق الدردشة، وتستبدل النوافذ المنبثقة الافتراضية. يمكنك التحقق من خيار <b>message fallback</b> لإرسال رسالة بدلاً من عرض النافذة المنبثقة إذا كانت الدردشة مفتوحة.
</li>
<li>
    قد تحتاج إلى تمكين <b>Settings > Users > Register all visitors</b> إذا كنت ترغب في إرسال رسالة تلقائية إلى المستخدمين الجدد.
</li>
<li>
    تُرسل رسائل الدردشة ورسائل الاحتياطية للنوافذ المنبثقة فقط إذا كانت آخر رسالة من المستخدم أو الوكيل في المحادثة أقدم من 10 دقائق. تمنع هذه الميزة إرسال رسائل آلية غير مرغوب فيها خلال محادثة بين الوكيل والمستخدم.
</li>
<li>
    فحص شرط <b>المتغير المخصص</b> للتحقق من المتغيرات الجافا سكريبت بالأسماء والقيم المعطاة. على سبيل المثال، يتم تلبية الشرط <b>example=ABC</b> إذا كان هناك هذا الكود الجافا سكريبت في صفحة الدردشة: <b>var example = "ABC";</b>. أضف متغيرات متعددة مفصولة بفواصل.
</li>
</ul>
<hr class="space" />
<h2 id="newsletter">النشرة الإخبارية</h2>
<p>
    اتبع الخطوات أدناه لإكمال التزامن مع خدمة النشرة الإخبارية الخاصة بك. يتم الاشتراك في المستخدم في الحالات التالية: نموذج التسجيل، تحديث المستخدم، رسالة المتابعة، رسالة الاشتراك، shortcode البريد الإلكتروني.
</p>
<h4>Mailchimp</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، اتبع الوثائق على <a href="https://mailchimp.com/help/about-api-keys/" target="_blank" rel="nofollow">https://mailchimp.com/help/about-api-keys/</a>.
    </li>
    <li>
        للحصول على <b>List ID</b>، اتبع الوثائق على <a href="https://mailchimp.com/help/find-audience-id/" target="_blank" rel="nofollow">https://mailchimp.com/help/find-audience-id/</a>.
    </li>
</ul>
<h4>Sendinblue</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، اتبع الوثائق على <a href="https://account.sendinblue.com/advanced/api" target="_blank" rel="nofollow">https://account.sendinblue.com/advanced/api</a>.
    </li>
    <li>
        للحصول على <b>List ID</b>، اتبع الوثائق على <a href="https://my.sendinblue.com/lists" target="_blank" rel="nofollow">https://my.sendinblue.com/lists</a>.
    </li>
</ul>
<h4>SendGrid</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، اتبع التوجيهات في الوثائق على <a href="https://app.sendgrid.com/settings/api_keys" target="_blank" rel="nofollow">https://app.sendgrid.com/settings/api_keys</a>.
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى SendGrid وانقر على <b>Marketing > Contacts</b> (<a href="https://mc.sendgrid.com/contacts" target="_blank" rel="nofollow">https://mc.sendgrid.com/contacts</a>)، ثم انقر على قائمة أو أنشئ قائمة جديدة. الجزء الأخير من عنوان URL هو معرف القائمة. على سبيل المثال، https://mc.sendgrid.com/contacts/lists/8558c1e7-3c99-4428-a68f-78df2e437f8e (معرف القائمة هو 8558c1e7-3c99-4428-a68f-78df2e437f8e).
    </li>
</ul>
<h4>Elastic Email</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، ادخل إلى Elastic Email، ثم انقر على <b>Settings</b> من قائمة الملف الشخصي في أعلى اليمين. انقر على <b>Create Additional API key</b> (<a href="https://elasticemail.com/account#/settings/new/create-api" target="_blank" rel="nofollow">https://elasticemail.com/account#/settings/new/create-api</a>)، قم بتعيين اسمًا واختر <b>Plugin</b> أو <b>Full access</b>، أو <b>Custom</b> وتأكد من أن إذن <b>Contacts</b> مُعين إلى <b>View & Modify</b>.
    </li>
    <li>
        <b>List ID</b> هو اسم القائمة. مهم! يجب ألا يحتوي أسماء القوائم أو القطاعات الحالية على أي مسافات فيها.
    </li>
</ul>
<h4>Campaign Monitor</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، ادخل إلى Campaign Monitor، ثم انقر على <b>Account settings</b> من قائمة الملف الشخصي في أعلى اليمين. انقر على <b>API keys > Generate API key</b>.
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى Campaign Monitor، ثم انقر على <b>List and subscribers</b> من القائمة العلوية. حدد قائمة ثم انقر على <b>Settings</b> من القائمة اليسرى وانسخ <b>List API ID</b>.
    </li>
</ul>
<h4>HubSpot</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، ادخل إلى HubSpot، ثم احصل عليه من <b>Settings > Integrations > API key</b>.
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى HubSpot، ثم احصل عليه من <b>Contacts > List > List details</b>.
    </li>
</ul>
<h4>Moosend</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، ادخل إلى Moosend، ثم انقر على <b>Settings > API key</b> .
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى Moosend، ثم احصل عليه من <b>Audience > Email lists</b>.
    </li>
</ul>
<h4>GetResponse</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>List ID</b>، ادخل إلى GetResponse، ثم احصل عليه من <b>Lists > Your list > Settings</b> (https://app.getresponse.com/lists). انسخ قيمة <b>List token</b>.
    </li>
    <li>
        للحصول على <b>Key</b>، قم بزيارة <a target="_blank" rel="nofollow" href="https://app.getresponse.com/api">https://app.getresponse.com/api</a>.
    </li>
</ul>
<h4>ConvertKit</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، ادخل إلى ConvertKit، ثم احصل عليه من <b>Settings > Advanced > API secret</b> .
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى ConvertKit، ثم احصل عليه من <b>Grow > Landing Pages & Forms</b>. افتح النموذج الخاص بك وانسخ الجزء الرقمي من عنوان URL. على سبيل المثال، ID للنموذج بعنوان URL <b>https://app.convertkit.com/forms/designers/3003412/edit</b> هو <b>3003412</b>.
    </li>
</ul>
<h4>ActiveCampaign</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، ادخل إلى ActiveCampaign، ثم احصل عليه من <b>Account settings > Developer</b>.
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى ActiveCampaign، ثم احصل عليه من <b>Left menu > Lists</b> أو <b>Left menu > Contacts > Lists</b>.
        افتح القائمة الخاصة بك وانسخ معرف القائمة في عنوان URL. على سبيل المثال، ID للقائمة بعنوان URL
        <b>https://activehosted.com/app/contacts/?listid=1&status=1</b> هو <b>1</b>.
        يجب أن يكون معرف القائمة بهذا الشكل: <b>domain:list-ID</b>. الـ <b>domain</b> هو الجزء الأول من عنوان URL لوحة القيادة الخاصة بك. على سبيل المثال، الـ domain لـ <b>https://activehosted.com/</b> هو والقيمة النهائية لإدراجها في Alz-Bot هي <b>:1</b>.
    </li>
</ul>
<h4>MailerLite</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، ادخل إلى MailerLite، ثم احصل عليه من <b>Left menu > Integrations > MailerLite API</b>.
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى MailerLite، ثم احصل عليه من <b>Left menu > Subscribers > Groups</b>. عرض مجموعة وانسخ معرف المجموعة من العنوان URL (على سبيل المثال، <b>....group=18783408688903967...</b>).
    </li>
</ul>
<h4>Mailjet</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>Key</b>، قم بزيارة <a href="https://app.mailjet.com/account/apikeys" target="_blank" rel="nofollow">https://app.mailjet.com/account/apikeys</a>، أو ادخل إلى Mailjet، ثم احصل عليه من <b>Account settings > Account settings</b>.
    </li>
    <li>
        للحصول على <b>List ID</b>، ادخل إلى MailerLite، ثم احصل عليه من <b>Contacts > Contacts lists > Your list</b>. احصل على معرف القائمة عن طريق النقر على رمز <b>?</b> بجوار عناوين البريد الإلكتروني للقوائم. على سبيل المثال، 1202546.
    </li>
</ul>
<hr class="space" />
<h2 id="grammarly">Grammarly</h2>
<p>
    اتبع الخطوات أدناه لبدء استخدام Grammarly.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتسجيل حساب مطور على <a href="https://developer.grammarly.com/" target="_blank" rel="nofollow">https://developer.grammarly.com/</a>.
    </li>
    <li>
        أنشئ تطبيقًا جديدًا، انتقل إلى منطقة <b>Credentials</b> وانسخ <b>Client ID</b>.
        في <b>Origins</b>، يجب أيضًا إضافة النطاق الذي تم تثبيت Alz-Bot فيه.
    </li>
    <li>
        الصق <b>Client ID</b> في <b>Settings > Admin > Grammarly > Client ID</b>.
    </li>
    <li>
        تأكد من إيقاف تشغيل إضافة Grammarly في متصفحك.
    </li>
</ul>
<hr class="space" />
<h2 id="aws">Amazon Web Services</h2>
<h4>Amazon S3</h4>
<p>
    قم بتحميل المرفقات إلى حاوية Amazon S3 الخاصة بك بدلاً من الخادم الذي تم تثبيت Alz-Bot عليه.
    اتبع الخطوات أدناه لإعدادها.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتسجيل الدخول إلى AWS كمستخدم رئيسي من <a href="https://aws.amazon.com/" target="_blank" rel="nofollow">https://aws.amazon.com/</a>.
    </li>
    <li>
        ادخل لوحة تحكم <b>IAM</b> وانقر على <b>Left menu > Access management > Users</b>.
    </li>
    <li>
    انقر على <b>إضافة مستخدم جديد</b>، أدخل اسم المستخدم واستمر.
</li>
<li>
    اختر <b>إضافة مستخدم إلى مجموعة</b> وعلى <b>مجموعات المستخدمين</b> في الأسفل انقر على <b>إنشاء مجموعة</b>.
    في <b>سياسات الصلاحيات</b>، ابحث عن <b>AmazonS3FullAccess</b> وحددها. انقر على <b>إنشاء مجموعة مستخدم</b>.
</li>
<li>
    قم بتعيين المجموعة الجديدة للمستخدم الذي تقوم بإنشائه واستمر، ثم انقر على <b>إنشاء مستخدم</b>.
</li>
<li>
    حدد المستخدم الذي تم إنشاءه حديثًا وافتح علامة التبويب <b>بيانات الأمان</b>.
</li>
<li>
    في منطقة <b>مفاتيح الوصول</b>، انقر على <b>إنشاء مفتاح وصول</b> وحدد <b>تطبيق يعمل خارج خدمات الويب أمازون</b>. استمر حتى تحصل على المفاتيح واحفظها في <b>Alz-Bot > الإعدادات > متنوع > أمازون S3</b>.
</li>
<li>
    قم بزيارة لوحة تحكم <b>أمازون S3</b> وانقر على <b>إنشاء دلو</b>.
</li>
<li>
    حدد اسم الدلو والمنطقة التي تريدها. احفظ المنطقة والاسم في <b>Alz-Bot > الإعدادات > متنوع > أمازون S3</b>.
    قم بالتحقق من <b>تمكين ACLs</b> و <b>تفضيل صاحب الدلو</b>.
    قم بإلغاء تحديد <b>منع جميع الوصول العام</b> وجميع الخانات ذات الصلة.
</li>
<li>
    انقر على <b>إنشاء دلو</b>.
</li>
<li>
    هذه الميزة هي تقنية واختيارية. لا يغطي الدعم أي مساعدة متعلقة بهذه الميزة.
</li>
</ul>
</div>
<hr />
<div id="notifications">
    <div class="label label-docs">الإشعارات</div>
    <h2>الإشعارات</h2>
    <p>
        لفهم كيفية عمل الإشعارات ومتى يتم إرسالها، اقرأ المعلومات أدناه.
        إذا كنت تعتقد أن الإشعارات لا تعمل، فمن المحتمل أنك تختبرها بالطريقة الخاطئة، يرجى قراءة المعلومات أدناه قبل طلب الدعم.
    </p>
    <hr class="space" />
    <h2 id="email">الإشعارات عبر البريد الإلكتروني</h2>
    <p>يمكن للوكلاء والمستخدمين تلقي إشعار عبر البريد الإلكتروني عند استلام رسالة جديدة.</p>
    <hr class="space-sm" />
    <h4>إشعارات البريد الإلكتروني للمشرفين والوكلاء</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>عندما يرسل المستخدم رسالته الأولى، إذا تم تعيين المحادثة إلى قسم، يتم إرسال بريد إلكتروني فقط إلى الوكلاء المعينين في ذلك القسم، إذا تم تعيين المحادثة إلى وكيل محدد، يتم إرسال بريد إلكتروني فقط إلى ذلك الوكيل، وإلا يتم إرسال بريد إلكتروني إلى جميع الوكلاء الذين ليسوا متصلين في تلك اللحظة. يتم إرسال البريد الإلكتروني في الرسائل التالية فقط إلى آخر وكيل في المحادثة.</li>
        <li>يتم إرسال إشعارات البريد الإلكتروني فقط إذا كان آخر وكيل في المحادثة غير متصل.</li>
        <li>إذا كنت تستخدم تطبيق Dialogflow، وكان <b>الإعدادات > Dialogflow > الاستيلاء البشري</b> نشطًا، فإنه لا يتم إرسال أي رسائل بريد إلكتروني إذا كان الشاتبوت يعرف الإجابة.</li>
        <li>
            إذا لم تتلقى البريد الإلكتروني، تأكد من أنه يعمل عن طريق إرسال بريد إلكتروني تجريبي من <b>الإعدادات > الإشعارات > اختبار بريد المستخدم</b> أو <b>اختبار بريد الوكيل</b>.
            إذا لم تتلق البريد الاختباري، فإن خادمك أو خادم SMTP الخاص بك لا يعمل. افتح وحدة التحكم في المتصفح للحصول على مزيد من التفاصيل حول الخطأ.
            لأن هذا ليس مشكلة متعلقة بـ Alz-Bot، لا يغطي الدعم هذا الأمر، يرجى الاتصال بدعم الخادم/الاستضافة/SMTP الخاص بك بدلاً من ذلك.
        </li>
    </ul>
    <h4>إشعارات البريد الإلكتروني للمستخدمين</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>عندما يرسل وكيل رسالة إلى مستخدم، يتم إرسال بريد إلكتروني إلى المستخدم فقط إذا كان المستخدم غير متصل.</li>
        <li>يتم إرسال إشعار واحد فقط. لن يؤدي الرسائل اللاحقة إلى تشغيل تنبيه بريد إلكتروني جديد.</li>
    </ul>
    <h4>إنشاء البريد الإلكتروني</h4>
    <p>
        لإدارة البريد الإلكتروني وإنشاء المحتويات، انتقل إلى
        <b>الإعدادات > الإشعارات</b>.
        يمكنك استخدام النصوص وHTML. يتم تحويل الأسطر الجديدة تلقائيًا إلى
        <b>&lt;br /></b>.
        يمكنك استخدام حقول الدمج التالية في البريد الإلكتروني. تُستبدل حقول الدمج تلقائيًا
        بالمعلومات المحدثة.
    </p>
    <hr class="space-sm" />
    <table class="table table-border docs-table">
        <thead>
            <tr>
                <th>الرمز</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <pre>{recipient_name}</pre>
                </td>
                <td>اسم المستخدم أو الوكيل الذي يتلقى البريد الإلكتروني.</td>
            </tr>
            <tr>
                <td>
                    <pre>{sender_name}</pre>
                </td>
                <td>اسم المستخدم أو الوكيل الذي كان يرسل الرسالة التي أثارت إشعار البريد الإلكتروني.</td>
            </tr>
            <tr>
                <td>
                    <pre>{sender_profile_image}</pre>
                </td>
                <td>
                    صورة الملف الشخصي للمستخدم أو الوكيل الذي كان يرسل الرسالة التي أثارت إشعار البريد الإلكتروني.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>{message}</pre>
                </td>
                <td>
                    الروابط إلى أي مرفقات كانت جزءًا من الرسالة التي أثارت إشعار البريد الإلكتروني.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>{attachments}</pre>
                </td>
                <td>
                    قد لا تتم تسليم البريد الإلكتروني لعدة أسباب؛ أدناه هي الأكثر شيوعًا:
                </td>
            </tr>
        </tbody>
    </table>
    <h4>هل هناك مشاكل؟</h4>
    <p>
        قد لا يتم تسليم البريد الإلكتروني لعدة أسباب؛ أدناه هي الأكثر شيوعًا:
    </p>
    <table class="table table-border docs-table">
        <thead>
            <tr>
                <th>السبب</th>
                <th>الوصف</th>
                <th>الحل</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>مشاكل الاستضافة</td>
                <td>
    خادم البريد الإلكتروني لمزود خدمة استضافة موقع الويب الخاص بك غير قادر على إرسال رسائل البريد الإلكتروني أو يتم إرسال الرسائل ولكن يتم اعترافها تلقائيًا كرسائل غير مرغوبة وحذفها بواسطة عملاء البريد الإلكتروني.
</td>
<td>
    يرجى الاتصال بمزود خدمة استضافة موقع الويب الخاص بك بشأن دعم البريد الإلكتروني أو استخدام خادم SMTP الخاص بك عن طريق تنشيطه في
    <b>الإعدادات > الإشعارات > SMTP</b>.
</td>
</tr>
<tr>
    <td>مشاكل SMTP</td>
    <td>
        البريد الإلكتروني لا يتم إرساله أيضًا إذا كنت قد قمت بتنشيط خيار SMTP في
        <b>الإشعارات</b>.
    </td>
    <td>
        لا نقدم دعمًا للمشكلات المتعلقة بـ SMTP الخاص بك. قم بإرسال رسالة اختبار
        للحصول على تفاصيل حول المشكلة أو استخدم
        <a target="_blank" rel="nofollow" href="https://sendgrid.com/solutions/smtp-service/">sendgrid.com</a>
        ، يمكنك إرسال 40000 رسالة لمدة 30 يومًا مجانًا، ثم 100/يوم إلى الأبد مجانًا. ملحوظة: إذا كنت تستخدم Gmail، أدخل
        <b>smtp.gmail.com</b> كمضيف وقم بتعيين
        <b>465</b> أو
        <b>587</b> كمنفذ. يجب أيضًا السماح بالوصول إلى Gmail لتطبيقات أقل أمانًا، يمكنك القيام بذلك من خلال
        <a href="https://myaccount.google.com/lesssecureapps" target="_blank" rel="nofollow">https://myaccount.google.com/lesssecureapps</a>.
    </td>
</tr>
</tbody>
</table>
<hr class="space" />
<h2 id="push">إشعارات الدفع</h2>
<p>
    إشعارات الدفع مثل إشعارات سطح المكتب ولكن مع بعض الفروق الرئيسية.
    إشعارات سطح المكتب، المعروفة أيضًا باسم إشعارات الويب، يتم طلبها مباشرة من العميل بينما تأتي إشعارات الدفع من الخادم.
    الفرق الرئيسي هو أن إشعارات الدفع تعمل دائمًا، حتى إذا كان جهازك غير متصل بالإنترنت، أو Alz-Bot غير مفتوح.
    أيضًا، فهي دائمة ومرئية دائمًا حتى يتم إغلاقها.
    إشعارات الدفع تتطلب خدمة خارجية للعمل. نحن نستخدم Pusher، وهو مجاني للاستخدام لإشعارات الإدارة المرسلة إلى الوكلاء، وهو مجاني للاستخدام لما يصل إلى 2000 مستخدم/جهاز عند إرسال الإشعارات إلى المستخدمين.
    للأسف، لم تقدم Apple دعم iOS حتى الآن، ولكن نأمل أن يأتي قريبًا.
</p>
<h4>التفعيل</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى
        <a href="https://dashboard.pusher.com/accounts/sign_up" target="_blank" rel="nofollow">https://dashboard.pusher.com/accounts/sign_up</a>
        وأنشئ حسابًا جديدًا.
    </li>
    <li>
        من لوحة التحكم الخاصة بك على
        <a href="https://dashboard.pusher.com/" target="_blank" rel="nofollow">https://dashboard.pusher.com</a>
        ، اختر منتج
        <b>Beams</b>
        بالنقر فوق
        <b>ابدأ</b>.
        <a href="../media/docs/pusher-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        أدخل
        <b>اسم الحالة</b> وأنشئ الحالة. يمكنك إدخال أي قيمة تريدها.
        <a href="../../media/docs/pusher-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        من القائمة اليسرى للوحة التحكم، انقر فوق
        <b>Keys</b>
        ، انسخ
        <b>معرف الحالة</b> و
        <b>المفتاح الأساسي</b>.
        <a href="../../media/docs/pusher-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انتقل إلى منطقة الإدارة في Alz-Bot ، اذهب إلى
        <b>الإعدادات > الإشعارات > إشعارات الدفع</b>، والصق معرف الحالة والمفتاح الرئيسي.
    </li>
    <li>
        انتهيت.
    </li>
</ul>
<h4>التفعيل للمستخدمين</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتنزيل ملف خدمة العامل
        <a href="../../works/docs/files/service-worker.zip">هنا</a>.
    </li>
    <li>
        قم بتحميل هذا الملف إلى موقعك في الموقع التالي:
        <b>
            https://your-site.com/service-worker.js
        </b>
    </li>
    <li>
        انتقل إلى
        <b>الإعدادات > الإشعارات > إشعارات الدفع > عنوان ملف الخدمة</b> وأدخل عنوان URL للملف. على سبيل المثال،
        <b>https://your-site.com/service-worker.js</b>.
        إذا كنت تستخدم الإصدار السحابي، أدخل <b>https://alz-bot.techn-oviz.com/sw.js</b>.
        إذا كنت تستخدم الإصدار SaaS، قم بتبديل <b>alz-bot.techn-oviz.com</b> بنطاقك.
    </li>
    <li>
        انتهيت.
    </li>
</ul>
<h4>المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يمكن استخدام Pusher مجانًا لما يصل إلى 1000 مشترك في وقت واحد.
        على الرغم من أنه يجب أن يكون بإمكانك استخدام الخطة المجانية لمنطقة الإدارة وجميع الوكلاء، قد تحتاج إلى خطة مدفوعة لإشعارات الدفع المرسلة إلى المستخدمين اعتمادًا على حركة المرور في موقعك.
    </li>
    <li>
        إشعارات الدفع غير معتمدة حاليًا على أجهزة iPhone وأجهزة iOS. إشعارات الدفع معتمدة فقط على أجهزة Mac وWindows وAndroid.
    </li>
    <li>
        تعمل إشعارات الدفع فقط لمواقع الويب الآمنة بشكل كامل تستخدم HTTPS. الاستثناء الوحيد هو localhost لتسهيل عملية التطوير.
    </li>
    <li>
        عندما ينقر المستخدم على الإشعار، يتم فتح آخر صفحة قام المستخدم بزيارتها ويتم فتح المحادثة تلقائيًا.
    </li>
    <li>
        على سطح المكتب، يجب أن يكون المستعرض قيد التشغيل لأنه هذه هي العملية التي تستقبل رسائل الدفع.
    </li>
    <li>
        عندما تكون إشعارات الدفع نشطة، تحل محل إشعارات سطح المكتب.
    </li>
    <li>
        في Android والأجهزة المحمولة، قد لا تعمل إشعارات سطح المكتب، وفي هذه الحالة، يجب عليك استخدام إشعارات الدفع.
    </li>
    <li>
        إذا كانت إشعارات الدفع نشطة وغير متوفرة، قم بتعطيلها وحاول مرة أخرى.
    </li>
    <li>
        لا يمكن استلام إشعارات الدفع على جهاز كمبيوتر شخصي بشكل دقيق ما لم يكن هناك متصفح قيد التشغيل.
    </li>
</ul>
<h4>إشعارات الدفع للمسؤول والوكلاء</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        عندما ينقر الوكيل على الإشعار، يتم فتح منطقة الإدارة ويتم تحديد المحادثة الصحيحة. إذا كانت منطقة الإدارة قيد التشغيل بالفعل، لن يتم فتح تبويب جديدة.
    </li>
    <li>
    عندما يرسل المستخدم رسالته الأولى، يتم إرسال إشعار دفع إلى جميع الوكلاء المحققين؛ يتم إرسال الإشعارات التالية فقط إلى
    آخر وكيل في المحادثة.
</li>
<li>
    إذا كنت تستخدم تطبيق Dialogflow، وكان <b>الإعدادات > Dialogflow > الاستيلاء البشري</b> فعالة، لا يتم إرسال إشعارات إذا كان الدردشة الآلية تعرف الإجابة.
</li>
<li>
    إذا كنت تستخدم نسخة WordPress، لا يتم دعم إشعارات الدفع في منطقة إدارة WordPress، يجب عليك الوصول إلى منطقة الإدارة الخاصة بـ Alz-Bot  مباشرةً، المزيد من التفاصيل
    <a class="scroll-to" href="#pwa">هنا</a>.
</li>
<li>
    إذا كانت إعدادات الـ
    <b>توجيه</b> فعالة، يتلقى الإشعار الوكيل المعين للمحادثة فقط، يرى المشرفون جميع المحادثات ولكنهم لا يتلقون الإشعارات.
</li>
<li>
    إذا كانت إعدادات الـ
    <b>طابور الانتظار</b> فعالة، يتلقى الإشعار الوكيل المعين للمحادثة فقط. لا ترسل الإشعارات للرسائل التي يتم إرسالها بواسطة المستخدم أثناء الانتظار في الطابور. يرى المشرفون جميع المحادثات ولكنهم لا يتلقون الإشعارات.
</li>
<li>
    إذا كانت محادثة المستخدم معينة لقسم، يتلقى الإشعار فقط الوكلاء المعينون لتلك الإدارة.
</li>
<li>
    إذا كانت محادثة المستخدم ليست معينة لأي قسم، يتلقى الإشعار فقط الوكلاء الذين ليس لديهم إدارة معينة.
</li>
<li>لا تدعم الإشعارات على iPhone وأجهزة iOS.</li>
<li>ترسل الإشعارات فقط إذا كان آخر وكيل في المحادثة غير متصل.</li>
<li>
    و <b>الإعدادات > Dialogflow > الاستيلاء البشري</b> فعالة، لا يتم إرسال إشعارات إذا كان الدردشة الآلية تعرف الإجابة.
</li>
<li>
    إذا لم تعمل إشعارات الدفع، تأكد من أنك سمحت بالإشعارات، في Chrome يمكنك التحقق من ذلك من <b>الخصوصية والأمان > إعدادات الموقع > الإشعارات</b>.
    إذا لم تعمل على جهاز محمول، جرب هذه الخطوات أيضًا: قم بتثبيت تطبيق PWA أو حذفه وتثبيته مرة أخرى، أعد تشغيل الجهاز المحمول.
</li>
</ul>
<hr class="space" />
<h2 id="desktop">إشعارات سطح المكتب</h2>
<h4>إشعارات سطح المكتب</h4>
<ul class="icon-list icon-line icon-docs">
    <li>لا ترسل الإشعارات إذا كان المستخدم يعرض صفحة تحتوي على الدردشة (متصفح المستخدم مفتوح وواضح، والصفحة النشطة تحتوي على الدردشة).</li>
    <li>لا تدعم الإشعارات على iPhone وأجهزة iOS.</li>
    <li>تعمل الإشعارات فقط لعناوين URL الآمنة التي تستخدم HTTPS (ليس HTTP). يجب أن يكون عنوان URL الخاص بالإدارة Alz-Bot HTTPS.</li>
    <li>عندما تكون إشعارات الدفع نشطة، تحل محل إشعارات سطح المكتب.</li>
</ul>
<hr class="space" />
<h2 id="sms">إشعارات الرسائل النصية</h2>
<p>
    يمكن إشعار كل من الوكلاء والمستخدمين عبر الرسائل النصية عند ورود رسالة جديدة.
    يتم توفير إشعارات الرسائل النصية بواسطة Twilio.
    Twilio هو خدمة مدفوعة، ولكنها رخيصة، ويمكنك استخدام الإصدار التجريبي لاختبار إشعارات الرسائل النصية مجانًا.
</p>
<h4>التفعيل</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى
        <a href="https://www.twilio.com/referral/5GOe1g" target="_blank" rel="nofollow">https://www.twilio.com</a> وأنشئ حسابًا جديدًا.
    </li>
    <li>
        قم بالتحقق من رقم هاتفك.
        <a href="../../media/docs/sms-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        أكمل النموذج واختر <b>رسائل نصية قصيرة (SMS)</b>.
        <a href="../../media/docs/sms-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        بمجرد الدخول إلى لوحة التحكم، انقر فوق <b>الحصول على رقم تجريبي</b>، ثم <b>اختيار هذا الرقم</b>.
        <a href="../../media/docs/sms-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انتقل إلى منطقة الإدارة Alz-Bot ، اذهب إلى
        <b>الإعدادات > الإشعارات > إشعارات الرسائل النصية</b>، والصق مُعرِّف الحساب ورمز المصادقة والرقم التجريبي (أو رقم الهاتف المشترى).
        ابحث عن جميع التفاصيل في <a target="_blank" rel="nofollow" href="https://www.twilio.com/console">لوحة تحكم Twilio</a>.
    </li>
    <li>
        إذا كنت تستخدم الإصدار التجريبي، يمكنك إرسال إشعارات فقط إلى الأرقام المتحققة.
        انتقل إلى لوحة تحكم Twilio وانقر على الزر الأيسر <b># (أرقام الهاتف)</b>، ثم انقر على <b>هويات المتصلين المتحققة</b> وأضف رقم هاتفك.
        <a href="../../media/docs/sms-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        لبدء استخدام الخدمة بشكل حي وتلقي الرسائل النصية في Alz-Bot  ، يجب عليك شراء رقم هاتف.
        بعد الشراء، انتقل إلى <b>أرقام الهواتف > إدارة > الأرقام النشطة</b>، انقر فوق رقمك، وأدخل عنوان URL Alz-Bot ،
        احصل عليه من <b>Alz-Bot > الإعدادات > الإشعارات > إشعارات الرسائل النصية > الحصول على عنوان تكوين الURL</b>.
        <a href="../../media/docs/sms-5.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انتهيت.
    </li>
</ul>
<h4>المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>يجب أن تحتوي جميع أرقام الهواتف على رمز الدولة الذي يبدأ بالرمز <b>+</b> (مثل +15558675310).</li>
    <li>
        يمكنك الحصول على رقم الهاتف الخاص بالمستخدم من خلال نموذج التسجيل، أو رسالة المتابعة، أو رسالة الاشتراك، أو عبر رمز <b>[email]</b>. يمكنك إدخال رقم الهاتف يدويًا من منطقة الإدارة أو عبر واجهة برمجة التطبيقات.
    </li>
    <li>
        عندما يرسل المستخدم رسالته الأولى، إذا كانت المحادثة معينة لقسم، يتم إرسال رسالة اختبار إلى الوكلاء المعينين لتلك الإدارة فقط، إذا كانت المحادثة معينة لوكيل محدد،
        يتم إرسال رسالة نصية فقط إلى ذلك الوكيل، وإلا يتم إرسال رسالة نصية ويرسل بريد إلكتروني إلى جميع الوكلاء الذين ليسوا متصلين في اللحظة.
        تُرسل الرسائل النصية التالية فقط إلى آخر وكيل في المحادثة.
    </li>
    <li>يتم إرسال إشعارات الرسائل النصية فقط إذا كان آخر وكيل في المحادثة غير متصل.</li>
<li>إذا كنت تستخدم تطبيق Dialogflow، وكان <b>الإعدادات > Dialogflow > الاستيلاء البشري</b> نشطًا، لا ترسل رسائل نصية إذا كانت الدردشة تعرف على الإجابة.</li>
<li>لاستخدام ميزة معرف المرسل، أدخل اسم المرسل في حقل <b>رقم المرسل</b>.</li>
</ul>
<hr class="space" />
<h2 id="sound">إشعارات الصوت</h2>
<ul class="icon-list icon-line icon-docs">
    <li>تعمل الأصوات فقط بعد تفاعل المستخدم أو الوكيل مع الوثيقة (قام المستخدم أو الوكيل بالنقر في مكان ما).</li>
</ul>
</div>
<hr />
<div id="wp">
    <div class="label label-docs">ورد بريس</div>
    <h2>ورد بريس</h2>
    <p>الإعدادات أدناه تتعلق بنسخة ورد بريس من Alz-Bot.</p>
    <hr class="space" />
    <h2 id="wp-sync">مزامنة المستخدم</h2>
    <p>
        يمكن مزامنة مستخدمي ورد بريس تلقائيًا مع Alz-Bot عند تحديد "ورد بريس"
        تحت
        <b>نظام المستخدمين</b> في
        <b>الإعدادات > ورد بريس</b>.
        عند التفعيل، يتعرف الدردشة الأمامية تلقائيًا على جميع مستخدمي ورد بريس المسجلين الذين يقومون بإنشاء حساب مستخدم جديد في Alz-Bot بنفس التفاصيل (الاسم، اللقب، البريد الإلكتروني، وكلمة المرور).
        أيضًا، يتعرف نموذج تسجيل الدخول على البريد الإلكتروني وكلمة المرور لكل مستخدم ورد بريس.
        عند تسجيل الدخول إلى Alz-Bot، يتم تسجيل الدخول تلقائيًا إلى ورد بريس أيضًا.
    </p>
    <ul class="icon-list icon-line icon-docs">
        <li>
            لإنشاء مستخدم ورد بريس عندما يقوم الزائر بالتسجيل في Alz-Bot، قم بتمكين الخيار <b>الإعدادات > ورد بريس > تسجيل الدخول لورد بريس</b> وتضمين حقول كلمة المرور والبريد الإلكتروني في نموذج التسجيل، حيث يتطلب ذلك. سيتم تسجيل دخول مستخدم ورد بريس تلقائيًا.
        </li>
    </ul>
    <hr class="space" />
    <h2 id="wp-settings">مزيد من المعلومات</h2>
    <h4>الوصول المباشر وتطبيق PWA</h4>
    <p>
        يمكنك الوصول إلى منطقة الإدارة مباشرة دون الذهاب من خلال ورد بريس
        عن طريق التنقل إلى
        <b>/wp-content/plugins/alz-bot/alz-bot/admin.php</b>
        وتسجيل الدخول باستخدام حساب البريد الإلكتروني وكلمة المرور الافتراضية الخاصة بك. يرجى ملاحظة أن مجلد wp-content الخاص بك قد يكون مختلفًا.
        من خلال الوصول المباشر إلى الإدارة، ستكون أيضًا قادرًا على استخدام منطقة الإدارة كتطبيق ويب تقدمي. يمكنك العثور على مزيد من التفاصيل حول هذا عند النقر
        <a class="scroll-to" href="#pwa">هنا</a>.
    </p>
    <h4>تسجيل الدخول وتسجيل الخروج</h4>
    <p>
        لتسجيل الخروج من منطقة الإدارة في Alz-Bot، قم بتسجيل الخروج من ورد بريس من منطقة الإدارة في Alz-Bot، وعندما تقوم بتسجيل الخروج، ستكون قادرًا على تسجيل الدخول بحساب ورد بريس آخر.
        للوصول إلى منطقة الإدارة من داخل ورد بريس، يجب أن تقوم بتسجيل الدخول بأحد أدوار مستخدمي ورد بريس التالية: المسؤول، الكاتب، المحرر.
    </p>
    <h4>الحصول على معرف الصفحة أو نوع المنشور</h4>
    <p>
        للحصول على معرف صفحة أو نوع محدد، انتقل إلى منطقة الإدارة في ورد بريس وقم بتحرير الصفحة أو المنشور.
        يتم عرض المعرف في شريط العنوان.
        مثال:
        <b>http://your-site.com/wp-admin/post.php?post=11&action=edit&lang=en</b>
        (معرف الصفحة/المنشور هو 11).
        <a href="../../media/docs/wp-id.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </p>
    <h4>الحصول على عنوان Post Type</h4>
    <p>
        عنوان Post Type لأرشيف المدونة والمنشورات هو
        <b>post</b>. Post Type للصفحات هو
        <b>page</b>.
        للحصول على عنوان Post Type مخصص، انتقل إلى منطقة الإدارة في ورد بريس وافتح صفحة Post Type المخصصة من القائمة اليسرى.
        يتم عرض العنوان في شريط العنوان.
        مثال:
        <b>http://your-site.com/wp-admin/edit.php?post_type=food</b>
        (العنوان هو
        <b>food</b>).
        <a href="../../media/docs/wp-slug.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </p>
    <h4>تعطيل ورد بريس Emoji</h4>
    <p>
        لمنع ورد بريس من استبدال رموز الدردشة برموز ورد بريس، أدخل الكود أدناه في ملف
        <b>functions.php</b>
        في موضوعك.
        <pre class="prettyprint">
            function disable_emojis() {
                remove_action("wp_head", "print_emoji_detection_script", 7);
                remove_action("admin_print_scripts", "'print_emoji_detection_script");
                remove_action("wp_print_styles", "print_emoji_styles");
                remove_action("admin_print_styles", "print_emoji_styles");
            }
            add_action("init", "disable_emojis");
        </pre>
    </p>
    <h4>ورد بريس Multisite</h4>
    <p>
        إذا كنت تستخدم التثبيت متعدد المواقع، يجب عليك تثبيت Alz-Bot في الموقع الرئيسي.
    </p>
</div>
<hr />
<div id="woocommerce">
    <div class="label label-docs">WOOCOMMERCE</div>
    <h2>WooCommerce</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق WooCommerce لنسخة ورد بريس من Alz-Bot.</p>
    <hr class="space-sm" />
    <h2 id="woocommerce-dialogflow">Dialogflow</h2>
    <h4>البدء</h4>
    <p>
        لبدء استخدام تطبيق الدردشة Dialogflow، انتقل إلى
        <b>الإعدادات > WooCommerce > مزامنة Dialogflow</b>
        وانقر على
        <b>مزامنة الكيانات الآن</b>
        ، ثم انقر على
        <b>إنشاء النوايا الآن</b>.
        بمجرد الانتهاء من المزامنة، أنت تقوم بذلك. سيبدأ الدردشة في الرد على أسئلة المستخدمين.
    </p>
    <h4>قائمة أسئلة النوايا المدمجة</h4>
    <p>
        من خلال استيراد النوايا المدمجة، يمكن للدردشة الرد على الأسئلة مثل تلك أدناه. للحصول على القائمة الكاملة يرجى زيارة منطقة النوايا في وحدة تحكم Dialogflow.
    </p>
    <div class="row">
        <div class="col-lg-6">
            <ul class="icon-list icon-line icon-docs">
                <li>هل تبيع أحذية بأقل من 299 دولارًا؟</li>
                <li>أرني حقائبك</li>
                <li>هل لديك أي شيء للنساء في الترقية؟</li>
                <li>ما هي أفضل الأحذية لعام 2020؟</li>
                <li>إضافة Abstract Print إلى السلة</li>
                <li>إزالة Abstract Print من السلة</li>
                <li>ماذا تبيع</li>
            </ul>
        </div>
        <div class="col-lg-6">
            <ul class="icon-list icon-line icon-docs">
                <li>ما هو حالة طلبي؟</li>
                <li>أين سيتم شحن طلبي؟</li>
    <li>عرض المنتجات في سلة التسوق الخاصة بي!</li>
    <li>هل تشحنون في أستراليا؟</li>
    <li>إلى أين تشحنون؟</li>
    <li>افتح صفحة الأحذية.</li>
    <li>انتقل إلى صفحة القميص الكشمير، من فضلك.</li>
</ul></div>
</div>
<hr class="space-sm" />
<h4>الإجراءات</h4>
<p>
    تتيح الإجراءات التالية للروبوت الدردشة التفاعل مع المتجر بشكل ذاتي نيابة عن المستخدم.
    لاستخدام إجراء، انتقل إلى Dialogflow، قم بتحرير
    <b>النية</b>
    وأضف استجابة
    <b>تخصيص الحمولة</b>
    باستخدام الصيغة التالية:
    <b>{ "ACTION-NAME": ACTION-VALUE }</b>.
</p>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>رمز الإجراء</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>{ "woocommerce-update-cart": [ "cart-add", "PRODUCT-NAME-OR-ID" ] }</pre>
            </td>
            <td>
                يضيف منتجًا إلى سلة المستخدم. استبدل PRODUCT-NAME-OR-ID بمعرف المنتج أو الاسم الكامل للمنتج.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "woocommerce-update-cart": [ "cart-remove", "PRODUCT-NAME-OR-ID" ] }</pre>
            </td>
            <td>
                يزيل منتجًا من سلة المستخدم. استبدل PRODUCT-NAME-OR-ID بمعرف المنتج أو الاسم الكامل للمنتج.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "woocommerce-checkout": true }</pre>
            </td>
            <td>
                يوجه المستخدم إلى صفحة الخروج.
            </td>
        </tr>
        <tr></tr>
    </tbody>
</table>
<h4>متعدد اللغات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>تتوافق ميزة متعدد اللغات مع الإضافات WPML و Polylang.</li>
    <li>
        لتفعيل ميزة متعدد اللغات، انتقل إلى
        <b>الإعدادات > ورد بريس > إضافة لغة</b>
        واختر WPML أو Polylang. يقوم التزامن تلقائيًا بإنشاء الكيانات في جميع اللغات المتاحة على موقع الويب الخاص بك. لتعمل الروبوت الدردشة بلغة ما، يجب ترجمته إلى تلك اللغة في Dialogflow، للمزيد من التفاصيل
        <a href="https://cloud.google.com/dialogflow/es/docs/agents-multilingual" target="_blank" rel="nofollow">هنا</a>.
    </li>
    <li>
        النيات الرئيسية المدمجة في Dialogflow هي باللغة الإنجليزية فقط، لترجمتها انتقل إلى
        <a href="https://dialogflow.cloud.google.com/" target="_blank" rel="nofollow">وحدة التحكم في Dialogflow</a>، اختر اللغة التي تريد ترجمتها، انتقل إلى صفحة
        <b>النيات</b>
        وقم بترجمة نيات WooCommerce الحالية.
    </li>
    <li>
        ميزة متعددة اللغات لـ WooCommerce
        <b>سمات المنتجات</b>
        تتطلب
        <a href="https://wpml.org/documentation/related-projects/woocommerce-multilingual/?aid=154204&affiliate_key=LgJiCRvycckb" target="_blank" rel="nofollow">إضافة WPML إذا كنت تستخدم WPML</a>
        أو
        <a href="https://polylang.pro/downloads/polylang-for-woocommerce/" target="_blank" rel="nofollow">إضافة Polylang for WooCommerce إذا كنت تستخدم Polylang</a>.
    </li>
</ul>
<h4>معلومات إضافية</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        إذا قمت بتحرير نية WooCommerce المدمجة في Dialogflow ومن ثم قمت بإعادة استيراد النيات من
        <b>
            الإعدادات > WooCommerce > تزامن Dialogflow
        </b>
        ستفقد التخصيصات الخاصة بك. للحفاظ على التعديلات الخاصة بك، قم بتغيير اسم النية.
    </li>
    <li>يمكن للروبوت الدردشة عرض ما يصل إلى 15 منتجًا عبر رسالة الشريط المتحرك.</li>
    <li>
        يتم تحديث الروبوت الدردشة تلقائيًا كل 60 دقيقة بشكل افتراضي، ولكن قد يستغرق الأمر وقتًا أطول. إذا قمت بتحديث منتج أو فئة أو علامة أو سمة، يرجى الانتظار بضع ساعات حتى يظهر المحتوى الجديد.
    </li>
    <li>
        يتعرف التزامن على الأحداث التالية: حذف المنتج، استعادة المنتج من سلة المهملات، تحديث المنتج، إضافة منتج جديد، حذف فئة أو علامة، تحديث فئة أو علامة، إضافة فئة أو علامة جديدة.
    </li>
    <li>لتحسين أداء الروبوت الدردشة، أضف جميع الاختلافات الممكنة لسمة ما، بما في ذلك الاختلافات التي لا تُستخدم في منتجاتك. مثال: إذا كنت تبيع فقط تيشرتات صفراء وحمراء، أضف جميع الألوان الممكنة إلى سمة اللون، وليس فقط اللونين الأصفر والأحمر.
    </li>
    <li>
        يمكنك مزامنة الروبوت الدردشة يدويًا في أي وقت من
        <b>
            <b>الإعدادات > WooCommerce > تزامن Dialogflow</b>
        </b>
    </li>
    <li>
        يجب أن يحتوي المنتج على
        <b>سعر عادي</b>.
    </li>
    <li>
        يجب أن لا تستخدم أسماء المنتجات الرمز التابع للتنصيصين:
        <b>"</b>.
    </li>
    <li>
        بعض ميزات متعددة اللغات غير متوافقة مع
        <b>النطاقات الفرعية</b>
        أو
        <b>عناوين النطاقات الخارجية</b>.
    </li>
</ul>
<hr class="space" />
<h2 id="woocommerce-merge-fields">الدمج والشرائح في WooCommerce</h2>
<p>
    يمكن استخدام حقول الدمج والشرائح التالية في رسائل البريد الإلكتروني والرسائل.
</p>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>الرمز</th>
            <th>الوصف</th>
            <th>التوافق</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>{product_images}</pre>
            </td>
            <td>شريط صور المنتجات. إذا لم يكن هناك نتائج، يتم استبدال الرسالة الكاملة بـ "لم يتم العثور على نتائج".</td>
            <td>Dialogflow</td>
        </tr>
        <tr>
            <td>
                <pre>{shipping_location_check}</pre>
            </td>
            <td>تحقق مما إذا كان المتجر يشحن إلى البلد المحدد.</td>
            <td>Dialogflow</td>
        </tr>
        <tr>
            <td>
                <pre>{product_attribute_terms}</pre>
            </td>
            <td>قائمة مصطلحات سمة المنتج.</td>
            <td>Dialogflow</td>
        </tr>
        <tr>
            <td>
                <pre>{product_attribute_name}</pre>
            </td>
            <td>اسم سمة مصطلح.</td>
            <td>Dialogflow</td>
        </tr>
        <tr>
            <td>
                <pre>{category_link}</pre>
            </td>
            <td>رابط صفحة الفئة.</td>
            <td>Dialogflow</td>
        </tr>
        <tr>
            <td>
                <pre>{tag_link}</pre>
            </td>
            <td>رابط صفحة العلامة.</td>
            <td>Dialogflow</td>
        </tr>
        <tr>
            <td>
                <pre>{product_name}</pre>
            </td>
            <td>اسم المنتج.</td>
            <td>Dialogflow, الرسائل الآلية</td>
        </tr>
        <tr>
            <td>
                <pre>{product_image}</pre>
            </td>
            <td>صورة المنتج.</td>
            <td>Dialogflow, الرسائل الآلية</td>
        </tr>
        <tr>
            <td>
                <pre>{product_price}</pre>
            </td>
            <td>سعر المنتج.</td>
            <td>Dialogflow, الرسائل الآلية</td>
        </tr>
        <tr>
            <td>
                <pre>{product_description}</pre>
            </td>
            <td>وصف المنتج.</td>
            <td>Dialogflow, الرسائل الآلية</td>
        </tr>
        <tr>
            <td>
                <pre>{product_rating}</pre>
            </td>
            <td>تقييم المنتج. إذا لم يكن للمنتج تقييمات بعد، يتم استبدال الرسالة الكاملة بـ "[اسم المنتج] ليس لديه تقييمات أو آراء حتى الآن".</td>
            <td>Dialogflow, الرسائل الآلية</td>
        </tr>
        <tr>
            <td>
                <pre>{product_link}</pre>
            </td>
            <td>رابط المنتج.</td>
            <td>Dialogflow, الرسائل الآلية</td>
        </tr>
        <tr>
    <td>
        <pre>{shipping_locations}</pre>
    </td>
    <td>قائمة ببلدان الشحن.</td>
    <td>Dialogflow, Messages, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{shop_link}</pre>
    </td>
    <td>رابط المتجر.</td>
    <td>Dialogflow, Messages, Automated messages</td>
</tr>
<tr>
    <td>
        <pre>{cart_link}</pre>
    </td>
    <td>رابط السلة.</td>
    <td>Dialogflow, Messages, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{cart}</pre>
    </td>
    <td>قائمة المنتجات في سلة المستخدم. إذا كانت السلة فارغة، يتم استبدال الرسالة بـ "سلة التسوق الخاصة بك فارغة حاليًا".</td>
    <td>Dialogflow, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{order_status}</pre>
    </td>
    <td>حالة طلب المستخدم الأخير. إذا لم يقم المستخدم بتقديم طلب بعد، يتم استبدال الرسالة بـ "لم تقم بتقديم طلب بعد".</td>
    <td>Dialogflow, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{order_details}</pre>
    </td>
    <td>تفاصيل الطلب الأخير للمستخدم. إذا لم يقم المستخدم بتقديم طلب بعد، يتم استبدال الرسالة بـ "لم تقم بتقديم طلب بعد".</td>
    <td>Dialogflow, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{product_card}</pre>
    </td>
    <td>
        بطاقة المنتج. سمات اختيارية:
        <ul class="icon-list icon-line icon-docs">
            <li>
                <b>id</b> معرف المنتج.
            </li>
            <li>
                <b>link-type</b> العمل عند نقر المستخدم. القيم المتاحة: شراء، الخروج، رابط. الافتراضي: شراء.
            </li>
            <li>
                <b>link-text</b> نص الزر. الافتراضي: شراء.
            </li>
        </ul>
    </td>
    <td>Dialogflow, Messages, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{products_slider}</pre>
    </td>
    <td>
        البحث عن المنتجات المطابقة للسمات المعطاة وعرضها في سلايدر من بطاقات المنتجات.
        إذا لم يكن هناك نتائج، يتم استبدال الرسالة بـ "لم يتم العثور على نتائج". سمات اختيارية:
        <ul class="icon-list icon-line icon-docs">
            <li>
                <b>id</b> معرف المنتجات مفصولة بفواصل. إذا تم تعيين هذه السمة، يتم تجاهل جميع السمات الأخرى.
            </li>
            <li>
                <b>tag</b> عرض فقط المنتجات ذات العلامة المعينة.
            </li>
            <li>
                <b>category</b> عرض فقط المنتجات في الفئة المعينة.
            </li>
            <li>
                <b>discounted</b> قم بتعيينها إلى صحيح لعرض فقط المنتجات في التخفيضات.
            </li>
            <li>
                <b>rating</b> عرض فقط المنتجات بتقييم يساوي أو يزيد عن القيمة المعطاة. أدخل قيمة من 1 إلى 5.
            </li>
            <li>
                <b>max-price</b> عرض فقط المنتجات بسعر يساوي أو أقل من القيمة المعطاة. أدخل رقماً.
            </li>
            <li>
                <b>min-price</b> عرض فقط المنتجات بسعر يساوي أو يزيد عن القيمة المعطاة. أدخل رقماً.
            </li>
            <li>
                <b>attribute</b> عرض فقط المنتجات ذات السمة المعينة.
            </li>
            <li>
                <b>link-type</b> العمل عند نقر المستخدم. القيم المتاحة: شراء، الخروج، رابط. الافتراضي: شراء.
            </li>
            <li>
                <b>link-text</b> نص الزر. الافتراضي: شراء.
            </li>
            <li>
                <b>language</b> رمز لغة المنتجات التي سيتم عرضها.
            </li>
        </ul>
    </td>
    <td>Dialogflow, Messages, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{payment_methods}</pre>
    </td>
    <td>طرق الدفع المتاحة.</td>
    <td>Dialogflow, Messages, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{coupon}</pre>
    </td>
    <td>
        إنشاء رمز كوبون. سمات اختيارية:
        <ul class="icon-list icon-line icon-docs">
            <li>
                <b>discount</b> خصم الكوبون بالنسبة المئوية.
            </li>
            <li>
                <b>expiration</b> انتهاء صلاحية الكوبون. مثال: '60 ثانية'، '5 ساعات'، '2 أيام'.
            </li>
        </ul>
    </td>
    <td>Dialogflow, Messages, Automated Messages</td>
</tr>
<tr>
    <td>
        <pre>{product_names}</pre>
    </td>
    <td>أسماء المنتجات.</td>
    <td>فقط حينما يتم تحديدها</td>
</tr>
<tr>
    <td>
        <pre>{discount_price}</pre>
    </td>
    <td>سعر المنتج المخفض أو السعر الإجمالي المخفض لعدة منتجات.</td>
    <td>فقط حينما يتم تحديدها</td>
</tr>
<tr>
    <td>
        <pre>{original_price}</pre>
    </td>
    <td>السعر الأصلي للمنتج أو السعر الأصلي الإجمالي لعدة منتجات.</td>
    <td>فقط حينما يتم تحديدها</td>
</tr>
<tr>
    <td>
        <pre>{carts}</pre>
    </td>
    <td>قائمة سلات المستخدمين مع المنتجات.</td>
    <td>فقط حينما يتم تحديدها</td>
</tr>
<tr>
    <td>
        <pre>{purchase_button}</pre>
    </td>
    <td>زر شراء المنتج.</td>
    <td>فقط حينما يتم تحديدها</td>
</tr>
<tr>
    <td>
        <pre>{html_product_card}</pre>
    </td>
    <td>بطاقة تفاصيل المنتج.</td>
    <td>البريد الإلكتروني</td>
</tr>
<tr>
    <td>
        <pre>{html_products_list} </pre>
    </td>
    <td>قائمة ببطاقات تفاصيل المنتجات.</td>
    <td>البريد الإلكتروني</td>
</tr><tr></tr>
                                </tbody>
                            </table>
                            <h4>رسائل غنية</h4>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>الشورتكود</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>[woocommerce-button name="" ids="" coupon="" checkout="true"]</pre>
            </td>
            <td>
                أضف منتجًا أو عدة منتجات إلى سلة التسوق الخاصة بالمستخدم. قم بتطبيق رمز القسيمة اختياريًا وأعد توجيه المستخدم إلى صفحة الخروج.
            </td>
        </tr>
        <tr></tr>
    </tbody>
</table>
<hr class="space" />
<h2 id="woocommerce-info">مزيد من المعلومات</h2>
<h4 id="woocommerce-waiting-list">قائمة الانتظار</h4>
<ul class="icon-list icon-line icon-docs">
    <li>يتم إرسال الرسالة تلقائيًا عندما يزور المستخدم صفحة منتج غير متوفر في المخزون.</li>
    <li>يتم إرسال الرسالة تلقائيًا عندما يحاول المستخدم شراء منتج غير متوفر في المخزون عبر الدردشة الآلية.</li>
    <li>تُرسل الرسالة مرة واحدة فقط كحد أقصى كل 24 ساعة لكل منتج غير متوفر في المخزون.</li>
    <li>إذا لم يتم تعيين بريد المستخدم، يطلب الدردشة تلقائيًا عنوان بريد المستخدم.</li>
</ul>
<h4 id="woocommerce-removed-item">إشعار إزالة العنصر من سلة التسوق</h4>
<ul class="icon-list icon-line icon-docs">
    <li>إذا تم تضمين رمز القسيمة، يتم إرسال رسالة الدردشة فقط لأول عنصر تمت إزالته، ثم مرة أخرى بعد انتهاء صلاحية القسيمة.</li>
    <li>القسيمة صالحة فقط للعناصر التي تمت إزالتها.</li>
    <li>يمكن استخدام حقول الدمج التالية أيضًا في موضوع البريد الإلكتروني: {coupon}، {discount_price}، {original_price}، {product_names}، {customer_name}.</li>
    <li>سيتم إشعار المستخدمين الذين لديهم بريد إلكتروني فقط عبر البريد الإلكتروني.</li>
</ul>
<h4 id="woocommerce-returning-visitor">إشعار للزوار العائدين</h4>
<ul class="icon-list icon-line icon-docs">
    <li>تُرسل رسالة الدردشة بعد 15 ثانية.</li>
    <li>تُرسل رسالة الدردشة إلى المحادثة النشطة، إذا كانت موجودة، وإلا إلى محادثة جديدة.</li>
    <li>يُعتبر الزائر "زائرًا عائدًا" فقط إذا مضى على الأقل 24 ساعة من آخر زيارة.</li>
    <li>تُرسل رسالة الدردشة مرة واحدة فقط، إذا عاد الزائر مرة أخرى، لن يتم إرسال الرسالة.</li>
</ul>
<h4 id="woocommerce-waiting-list">رسالة متابعة</h4>
<ul class="icon-list icon-line icon-docs">
    <li>إذا كانت الرسالة تحتوي على قسيمة، يتم إرسال الرسالة فقط إذا لم تكن هناك قسائم صالحة أخرى مخصصة للمستخدم.</li>
</ul>
<h4 id="woocommerce-more-information">متنوع</h4>
<ul class="icon-list icon-line icon-docs">
    <li>عندما يكمل الزائر عملية الشراء، يتم إنشاء مستخدم جديد لـ Alz-Bot بناءً على التفاصيل المقدمة في استمارة الخروج تلقائيًا.</li>
    <li>تُرسل الرسائل التلقائية (رسالة سلة التسوق المهجورة، رسائل المتابعة، ...) إلى المحادثة النشطة، إذا كانت موجودة، وإلا إلى محادثة جديدة.</li>
    <li>قيم القسائم الافتراضية هي خصم 0% وصلاحية لمدة 7 أيام.</li>
    <li>تظل القسائم في سلة المهملات سارية، يجب حذفها بشكل دائم.</li>
    <li>يمكن استخدام جميع القسائم مرة واحدة فقط.</li>
    <li>تُحذف القسائم التي انتهت صلاحيتها تلقائيًا عبر الوظائف المجدولة.</li>
    <li>تبحث نافذة منتجات منطقة المحادثات الإدارية عن اسم المنتج والوصف والسعر.</li>
    <li>نافذة منتجات منطقة المحادثات الإدارية متعددة اللغات وتعرض تلقائيًا منتجات لغة المستخدم إذا كانت متاحة.</li>
    <li>لعرض طلبات المستخدمين الضيوف الذين لم يرسلوا أي رسالة دردشة قبل الشراء، يجب تمكين <b>الإعدادات > المستخدمين > تسجيل جميع الزوار</b>.</li>
    <li>إعداد <b>محدد منتجات التذاكر > استثناء المنتجات</b> يقبل معرفات منتجات WooCommerce مفصولة بفواصل.</li>
</ul>
<h4 id="woocommerce-whatsapp">متجر WhatsApp</h4>
<p>
    للسماح للمستخدم بشراء منتجات متجر WooCommerce على WhatsApp، يجب أن يكون <b>معرف المنتج</b> لمنتجات متجر WhatsApp نفس <b>معرف المنتج</b> لمنتجات WooCommerce الخاصة بك.
    بمجرد أن يرسل المستخدم طلب WhatsApp، يحفظ WooCommerce ذلك تلقائيًا، استخدم حقل الدمج <b>{catalog_checkout}</b> لإرسال رابط الخروج إلى المستخدم.
</p>
<p>
    استخدم البرنامج المساعد <a href="https://ورد بريس.org/plugins/facebook-for-woocommerce/" target="_blank" rel="nofollow">https://ورد بريس.org/plugins/facebook-for-woocommerce/</a> لمزامنة منتجات WooCommerce تلقائيًا مع منتجات متجر WhatsApp.
</p>
</div>
<hr />
<div id="tickets">
    <div class="label label-docs">التذاكر</div>
    <h2>التذاكر</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق التذاكر.</p>
    <hr class="space-sm" />
    <h2 id="tickets-installation">التثبيت والاستخدام</h2>
    <h4>تثبيت PHP</h4>
    <p>
        لعرض منطقة التذاكر، قم بتضمين البرنامج النصي التالي في صفحتك.
    </p>
    <pre class="prettyprint">
        &lt;script src="alz-bot/js/min/jquery.min.js">&lt;/script> &lt;!-- Not required if jQuery is already loaded -->
        &lt;script id="sbinit" src="alz-bot/js/main.js?mode=tickets">&lt;/script>
    </pre>
    <ul class="icon-list icon-line icon-docs">
        <li>
            لا يمكنك تضمين كل من منطقة الدردشة ومنطقة التذاكر في نفس الصفحة. تأكد من إزالة البرنامج النصي الذي يحمل الدردشة.
            يمكنك عرض منطقة التذاكر أيضًا عن طريق إدراج الكود <b>&lt;script>SB_TICKETS = true;&lt;/script></b> في أي صفحة تعرض الدردشة.
        </li>
        <li>
            لتحديد موقع منطقة التذاكر، أدخل الكود
            <b>&lt;div id="sb-tickets">&lt;/div></b>. ستظهر منطقة التذاكر داخل عنصر div هذا. بشكل افتراضي، يتم إلحاق منطقة التذاكر بالـ
            <b>body</b>.
        </li>
    </ul>
    <hr class="space-sm" />
    <h4>تثبيت ووردبريس</h4>
    <p>
        لعرض التذاكر، استخدم الشورتكود
        <b>[sb-tickets]</b>. أدرجه في أي صفحة، منشور، أو عنصر نوع منشور.
    </p>
    <h4>تثبيت الإصدار السحابي</h4>
    <p>
    لعرض منطقة التذاكر، قم بتضمين نص سكريبت الدردشة السحابية في صفحتك وأضف السمة <b>&mode=tickets</b> إلى عنوان السكريبت، مثل <b>&lt;script id="chat-init" src="https://alz-bot.techn-oviz.com/account/js/init.js?id=65895623&mode=tickets">&lt;/script></b>.
    يمكنك أيضًا عرض منطقة التذاكر عن طريق إدراج الكود <b>&lt;script>SB_TICKETS = true;&lt;/script></b> في أي صفحة تظهر فيها الدردشة.
</p>
<br />
<a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
<hr class="space" />
<h2 id="tickets-info">المعلومات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>التذاكر هي نفسها في محادثات الدردشة والرسائل، الفارق الوحيد عن الدردشة هو لوحة العرض الأمامية.</li>
    <li>معظم إعدادات الدردشة متوافقة مع تطبيق التذاكر ولكن ليست كلها. إعدادات لوحة التحكم ورسالة الظهور المنبثقة وغيرها ليست متوافقة.</li>
    <li>تتوفر واجهات برمجة التطبيقات المخصصة لتطبيق التذاكر في قسم الواجهة البرمجية.</li>
    <li>لإزالة نموذج 'تذكرة جديدة' الإلزامي للمستخدمين الجدد، قم بتفعيل رسالة الترحيب في <b>الإعدادات > الرسائل > رسالة الترحيب. تتجاهل تأخير رسالة الترحيب في منطقة التذاكر، وترسل الرسالة فورًا.</b>.</li>
    <li>لتعطيل التسجيل الإلزامي يدويًا على صفحة واحدة فقط، استخدم رمز JavaScript <b>var SB_REGISTRATION_REQUIRED = true</b>. قم بتعيينها إلى
        <b>true</b> لفرض التسجيل.</li>
</ul>
</div>
<hr />
<div id="dialogflow">
    <div class="label label-docs">DIALOGFLOW</div>
    <h2>Dialogflow</h2>
    <p>الإعدادات أدناه متعلقة بتطبيق Dialogflow.</p>
    <hr class="space-sm" />
    <h2 id="dialogflow-sync">المزامنة</h2>
    <p>
        لبدء استخدام Dialogflow مع Alz-Bot، اتبع الخطوات أدناه.
    </p>
    <ul class="icon-list icon-line icon-docs">
        <li>انتقل إلى <a href="https://console.cloud.google.com/" target="_blank" rel="nofollow">console.cloud.google.com</a> وقم بتسجيل الدخول.</li>
        <li>قم بتنشيط واجهة برمجة التطبيقات Dialogflow عن طريق إدخال <b>واجهة برمجة تطبيقات Dialogflow</b> في شريط البحث العلوي. انقر فوق <b>واجهة برمجة تطبيقات Dialogflow</b> ثم انقر على <b>تمكين</b>. <a
                href="../../media/docs/dialogflow-api.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a></li>
        <li>أنشئ مشروعك الأول بالنقر فوق زر <b>اختيار مشروع</b> في أعلى اليسار. قم بتسمية المشروع كما تريد. <a
                href="../../media/docs/dialogflow-sync-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> </li>
        <li>حدد المشروع وانتقل إلى <b>القائمة اليسرى > واجهات برمجة التطبيقات والخدمات > موافقة OAuth</b>.
            حدد <b>External</b> وانقر على <b>إنشاء</b>. <a href="../../media/docs/dialogflow-sync-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> في <b>اسم التطبيق</b>، أدخل ما تريد، في <b>البريد الإلكتروني لدعم
                المستخدم</b> و<b>معلومات الاتصال بالمطور</b>، أدخل بريدك الإلكتروني. انقر فوق <b>حفظ ومتابعة</b>. <a href="../../media/docs/dialogflow-sync-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> </li>
        <li>في منطقة النطاقات، انقر فوق <b>إضافة أو إزالة النطاقات</b>، انتقل إلى الأسفل وأدخل <b>https://www.googleapis.com/auth/dialogflow,https://www.googleapis.com/auth/cloud-language,https://www.googleapis.com/auth/cloud-translation</b> في منطقة
            <b>أضف النطاقات يدويًا</b>. انقر فوق <b>إضافة إلى الجدول</b> ثم <b>تحديث</b> و <b>حفظ ومتابعة</b>. <a href="../../media/docs/dialogflow-sync-5.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> </li>
        <li>في منطقة مستخدمي الاختبار، انقر فوق <b>إضافة مستخدمين</b> وأضف بريدك الإلكتروني من Google، استخدم نفس البريد الإلكتروني الذي تم تسجيل الدخول به حاليًا. انقر فوق <b>حفظ ومتابعة</b>. <a
                href="../../media/docs/dialogflow-sync-6.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> </li>
        <li>انتقل إلى <b>القائمة اليسرى > واجهات برمجة التطبيقات والخدمات > بيانات اعتماد</b> وانقر فوق <b>إنشاء بيانات اعتماد</b>، حدد <b>معرف عميل OAuth</b>. <a href="../../media/docs/dialogflow-sync-7.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
            باعتبار <b>نوع التطبيق</b>، حدد <b>تطبيق ويب</b>. أدخل أي اسم تريده. في <b>معرف الإعادة الموجهة المصرح به</b>، أدخل عنوان URL للإعادة المصرح به، احصل عليه من <b>Alz-Bot > الإعدادات > Dialogflow > Synchronization > معرف الإعادة المصرح به</b>.
            انقر فوق <b>إنشاء</b>. <a href="../../media/docs/dialogflow-sync-8.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> </li>
        <li>انسخ <b>معرف العميل</b> و <b>السر الخاص بالعميل</b> والصقهم في <b>Alz-Bot > الإعدادات > Dialogflow > مزامنة</b>. حفظ الإعدادات. <a href="../../media/docs/dialogflow-sync-9.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
        </li>
        <li>انقر فوق <b>Alz-Bot > الإعدادات > Dialogflow > مزامنة > مزامنة</b>.
            قم بتسجيل الدخول بنفس حساب Google الذي قمت باستخدامه حتى الآن. في الشاشة التالية، انقر فوق <b>متابعة</b>. <a href="../../media/docs/dialogflow-sync-10.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> في الشاشة التالية، حدد جميع النطاقات
            وانقر فوق <b>متابعة</b>. <a href="../../media/docs/dialogflow-sync-11.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> </li>
            <li>
    قم بنسخ <b>رمز التحديث</b> والصقه في <b>Alz-Bot > الإعدادات > Dialogflow > التزامن > رمز التحديث</b>. <a href="../../media/docs/dialogflow-sync-12.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
</li>
<li>
    أنت على وشك الانتهاء!
    الآن يجب عليك إدخال معرف مشروع الدردشة الخاص بك أو اسم الوكيل، للحصول عليه اتبع <a href="#dialogflow-project-id" class="scroll-to">الخطوات أدناه</a>. يرجى ملاحظة أن التطبيق لا يحتاج إلى الموافقة من قبل Google.
</li>
</ul>
<a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
<hr class="space-sm" />
<h4 id="dialogflow-project-id">الحصول على معرف المشروع</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتسجيل الدخول إلى وحدة تحكم Dialogflow ES عبر الانتقال إلى
        <a target="_blank" rel="nofollow" href="https://dialogflow.cloud.google.com/">dialogflow.cloud.google.com</a>.
        يجب عليك تسجيل الدخول بنفس حساب Google المستخدم أثناء التزامن.
    </li>
    <li>
        انقر على
        <b>رمز العتاد</b> في الجزء العلوي الأيسر، بالقرب من اسم الدردشة، وافتح منطقة الإعدادات.
        <a href="../../media/docs/dialogflow-id-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
        إذا لم تقم بإنشاء دردشة بعد، اتبع <a href="#dialogflow-bot" class="scroll-to">التعليمات أدناه</a> لإنشاء أول دردشة لك.
    </li>
    <li>
        قم بنسخ
        <b>معرف المشروع</b>
        <a href="../../media/docs/dialogflow-id-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
    </li>
    <li>
        تأكد من اختيار
        <b>US / GLOBAL</b> في أعلى اليسار من لوحة التحكم في Dialogflow
        <a href="../../media/docs/dialogflow-region.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
    </li>
</ul>
<h4>الحصول على اسم وكيل Dialogflow CX</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتسجيل الدخول إلى وحدة تحكم Dialogflow CX عبر الانتقال إلى
        <a target="_blank" rel="nofollow" href="https://dialogflow.cloud.google.com/cx/">https://dialogflow.cloud.google.com/cx/</a>.
    </li>
    <li>
        حدد مشروع الوكيل المرغوب وانتقل إلى صفحة الوكلاء.
        يمكنك الوصول إلى صفحة الوكلاء عن طريق تحديد الوكيل والنقر على الزر العلوي <b>وكلاء > عرض جميع الوكلاء</b>
        <a href="../../media/docs/dialogflow-cx-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
    </li>
    <li>
        انقر فوق قائمة الخيارات للوكيل المرغوب فيها وانقر فوق <b>نسخ الاسم</b>
        <a href="../../media/docs/dialogflow-cx-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
    </li>
    <li>
        المزيد من التفاصيل على <a target="_blank" rel="nofollow" href="https://cloud.google.com/dialogflow/cx/docs/quick/api#detect-intent-drest">https://cloud.google.com/dialogflow/cx/docs/quick/api#detect-intent-drest</a>.
    </li>
</ul>
<hr class="space" />
<h2 id="dialogflow-bot">إنشاء دردشة</h2>
<p>
    إذا لم تكن قد قمت بإنشاء دردشة حتى الآن، اتبع التعليمات أدناه لإنشاء أول دردشة لك.
    يتم التعامل تمامًا مع إنشاء وإدارة دردشتك في Dialogflow بالكامل من قبل Dialogflow.
    هناك العديد من البرامج التعليمية عبر الإنترنت التي يمكن أن تساعدك في إنشاء وتكوين دردشتك في Dialogflow.
</p>
<h4>إنشاء دردشة أساسية</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        لإنشاء دردشتك الأولى، ادخل <a target="_blank" rel="nofollow" href="https://dialogflow.cloud.google.com/">وحدة تحكم Dialogflow</a> وأنشئ وكيلًا.
        كـ <b>مشروع Google</b>، حدد نفس المشروع المستخدم خلال التزامن.
    </li>
    <li>
        أضف <b>نية جديدة</b> من القائمة اليسرى وافتحها.
    </li>
    <li>
        في منطقة <b>عبارات التدريب</b>، أضف سؤال المستخدم الذي ترغب في أن يرد عليه الدردشة، أضف قدر الإمكان من الأشكال المتغيرة.
        على سبيل المثال، إذا كنت تريد من الدردشة الرد على المستخدمين الذين يسألون عن عنوان أعمالك، أضف أشكالًا متغيرة مثل "ما هو عنوانك"، "العنوان"، "أين أنت".
    </li>
    <li>
        في منطقة <b>الردود</b>، أضف إجابة الدردشة كـ <b>رد نصي</b>.
    </li>
    <li>
        لقد قمت بإنشاء سؤالك وجوابك الأول! اختبره من المنطقة اليمنى أو من دردشة Alz-Bot.
        أضف نياتًا جديدة لملء دردشتك بالأسئلة والأجوبة التي تريدها.
        يمكنك تضمين أسئلة وأجوبة مبنية مسبقًا من خلال تمكين ميزة <b>الدردشة الصغيرة</b> من القائمة اليسرى.
    </li>
</ul>
<a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
<h4>إليك بعض الموارد الرائعة لمساعدتك في بناء دردشة أكثر تعقيدًا:</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        <a target="_blank" rel="nofollow" href="https://chatbotslife.com/dialogflow-restaurant-bot-tutorial-1-45ce1d3c0ab5">chatbotslife.com/dialogflow-restaurant-bot-tutorial-1-45ce1d3c0ab5</a>.
    </li>
    <li>
        <a target="_blank" rel="nofollow" href="https://tutorials.botsfloor.com/building-your-own-chatbot-using-dialogflow-1b6ca92b3d3f">tutorials.botsfloor.com/building-your-own-chatbot-using-dialogflow-1b6ca92b3d3f</a>.
    </li>
    <li>
        <a target="_blank" rel="nofollow" href="https://marutitech.com/build-a-chatbot-using-dialogflow/">marutitech.com/build-a-chatbot-using-dialogflow/</a>.
    </li>
</ul>
<hr class="space" />
<h2 id="dialogflow-actions">الإجراءات</h2>
<p>
    تعطي الإجراءات التالية للدردشة القدرة على التفاعل مع الموقع بشكل ذاتي نيابةً عن المستخدم.
    لاستخدام إجراء، انتقل إلى Dialogflow، قم بتحرير
    <b>النية</b>، وأضف استجابة
    <b>حمولة مخصصة</b> جديدة بالصيغة التالية:
    <b>{ "اسم-الإجراء": قيمة-الإجراء }</b>.
</p>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>رمز الإجراء</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>{ "human-takeover": true }</pre>
            </td>
            <td>
                تعطيل الدردشة الآلية لمدة 5 دقائق، وإعلام الوكلاء، وترك المحادثة كما هو، مُعلَّمة بأنها غير مقروءة.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "disable-bot": true }</pre>
            </td>
            <td>
                تعطيل الدردشة الآلية لمدة 5 دقائق.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "redirect": "URL" }</pre>
            </td>
            <td>
                إعادة توجيه المستخدم إلى الرابط المحدد. أضف القيمة
                <b>"new-window": true</b> لفتح الرابط في نافذة جديدة.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "open-article": ID }</pre>
            </td>
            <td>
                فتح المقالة ذات الهوية المحددة.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "transcript": true }</pre>
            </td>
            <td>
                إنشاء نص للحديث كملف وتنزيله. قم بتعيينه إلى <b>email</b> لإرسال الحديث إلى بريد المستخدم، وأضف القيمة <b>message: "رسالتك"</b> لتضمين رسالة في البريد.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "department": ID }</pre>
            </td>
            <td>
                تغيير أو تعيين قسم المحادثة وإعلام الوكلاء.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "agent": ID }</pre>
            </td>
            <td>
                تغيير أو تعيين الوكيل المخصص للمحادثة وإعلام الوكيل.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "send-email": { "recipient": "active_user", "message": "", "attachments": [] } }</pre>
            </td>
            <td>
                إرسال بريد إلكتروني إلى المستخدم النشط أو الوكلاء. صيغة المرفقات: <b>[["الاسم", "الرابط"], ["الاسم", "الرابط"], ...]]</b>.
                يمكن أن تكون قيمة المستلم <b>active_user</b> أو <b>agents</b>.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "update-user": true }</pre>
            </td>
            <td>
                يُخبر منطقة الإدارة بتحديث مستخدم المحادثة النشط. استخدم هذا الإجراء بالتزامن مع إجراءات أخرى لتحديث تفاصيل المستخدم في منطقة الإدارة في الوقت الحقيقي.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "archive-chat": true }</pre>
            </td>
            <td>
                أرشفة الدردشة وإرسال رسالة الإغلاق إذا كانت نشطة.
            </td>
        </tr>
        <tr>
            <td>
                <pre>{ "update-user-details": { "email": "", "last_name": "", "first_name": "", "extra": { "phone": ["+123456789", "الهاتف"] }}}</pre>
            </td>
            <td>
                تحديث تفاصيل المستخدم النشط. يمكنك تحديث جميع التفاصيل، بما في ذلك <b>first_name</b>، <b>last_name</b>، <b>email</b>، <b>user_type</b>، <b>password</b>.
                يمكنك تحديث تفاصيل المستخدم الإضافية، مثل رقم الهاتف، عن طريق إدخال القيم في مفتاح <b>extra</b>، ويجب أن تستخدم القيم الصيغة التالية: <b>"slug": [القيمة، "التسمية"]</b>.
                قم بتنزيل مثال <a href="../../works/docs/files/dialogflow-example-1.zip">هنا</a>. لتحميل نية، انتقل إلى منطقة <b>النوايا</b> وانقر على رمز القائمة المكعبة الموجود في أعلى اليمين، ثم انقر على <b>تحميل النية</b>.
                ابدأ المحادثة بإرسال الرسالة "start".
            </td>
        </tr>
        <tr></tr>
    </tbody>
</table>
<hr class="space" />
<h2 id="dialogflow-translation">الترجمة التلقائية</h2>
<p>
    لتمكين ميزة اكتشاف اللغة وترجمة الرسائل التلقائية من لغة الوكيل إلى لغة المستخدم، ورسائل المستخدم إلى لغة الوكيل،
    قم بالتحقق من الخيار <b>الإعدادات > Dialogflow > الترجمة التلقائية</b> ومزامنة Dialogflow.
    يجب أن يكون لدى حساب Google المستخدم لمزامنة Dialogflow فواتير وتفعيل خدمة <b>cloud-translation</b>، للقيام بذلك اتبع الخطوات التالية:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتسجيل الدخول إلى <a target="_blank" rel="nofollow" href="https://console.cloud.google.com">https://console.cloud.google.com</a> باستخدام حساب Google الخاص بك وحدد مشروع وكيل Dialogflow الخاص بك.
    </li>
    <li>
        على شريط البحث العلوي، اكتب <b>cloud translation</b>، اختر خدمة <b>Cloud Translation API</b> وقم بتفعيلها. يرجى ملاحظة أن هذه خدمة مدفوعة مع طبقة مجانية، قد تحدث تكاليف إضافية.
    </li>
    <li>
        قم بتفعيل الفوترة عن طريق النقر فوق <b>القائمة اليسارية > الفوترة</b> ومن ثم بتفعيل حساب الفوترة بوسيلة دفع صالحة. قم بتفعيل الفوترة لمشروع وكيل Dialogflow الخاص بك.
    </li>
</ul>
<p>بمجرد إكمال إعداد حساب Google، تبدأ الترجمات التلقائية بالعمل فوراً. فيما يلي المزيد من التفاصيل:</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        يتم ترجمة رسائل المستخدم في منطقة الإدارة تلقائيًا في الوقت الحقيقي لتتناسب مع لغة الوكيل.
    </li>
    <li>
        تتم ترجمة رسائل الوكيل تلقائيًا في الوقت الحقيقي لتتناسب مع لغة المستخدم.
    </li>
    <li>
        يمكن للوكلاء عرض الرسالة الأصلية عن طريق فتح قائمة الرسالة والنقر فوق <b>عرض الرسالة الأصلية</b>.
    </li>
    <li>
        تعتمد لغة الوكيل على تفاصيل اللغة لوكيل إذا تم تعيينها، وإلا فإنها تعتمد على لغة المتصفح، أو لغة منطقة الإدارة.
    </li>
    <li>
        تعتمد لغة المستخدم على تفاصيل اللغة للمستخدم إذا تم تعيينها، وإلا يمكن اكتشافها باستخدام ميزة <b>الإعدادات > Dialogflow > اكتشاف اللغة</b>.
    </li>
</ul>

<h4>اكتشاف اللغة</h4>
<ul class="icon-list icon-line icon-docs">
    <li>يجب أن تكون رسالة المستخدم على الأقل من كلمتين.</li>
    <li>يتم تنفيذ اكتشاف اللغة فقط لأول رسالتين من المستخدم في المحادثة.</li>
</ul>
<hr class="space" />
<h2 id="dialogflow-human-takeover">التحكم البشري</h2>
<h4>معلومات عامة</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        عند تفعيل التحكم البشري، يتم تعطيل الروبوت الدردشة تلقائياً طالما يكون الوكيل متصلاً.
        بعد ذلك، يتم تفعيل الروبوت مرة أخرى ولكن لن يتم إرسال أي رسائل افتراضية افتراضية في غضون 10 أيام من التحكم البشري إذا لم يكن الروبوت يعرف الإجابة على سؤال المستخدم في نفس المحادثة.
        يمكنك إجبار رسالة Dialogflow للإرسال دائمًا عن طريق إضافة القيمة المخصصة <b>"force-message": true</b> إلى النية.
    </li>
    <li>يتم تفعيل الروبوت بالكامل مرة أخرى عند أرشفة المحادثة أو حذفها.</li>
    <li>إذا كنت تستخدم Slack، لن تتم إرسال رسائل إذا كان الروبوت يعرف الإجابة. بمجرد تفعيل التحكم البشري، يتم إرسال جميع رسائل المحادثة إلى Slack.</li>
    <li>عندما يرد وكيل بشري على مستخدم، يتم تفعيل التحكم البشري تلقائيًا.</li>
</ul>
<h4>خيار التحكم البشري</h4>
<p>عند تفعيل الخيار <b>التحكم البشري</b>، يحدث ما يلي:</p>
<ul class="icon-list icon-line icon-docs">
    <li>إذا تم تمكينها، يتم إرسال الطلب إذا كانت الرسالة المرسلة من قبل المستخدم أطول من 3 أحرف وتحتوي على ما لا يقل عن كلمتين. يمنع هذا الأمر الطلبات الخاطئة.</li>
    <li>تُعتبر المحادثات التي استطاع الروبوت الإجابة عليها بشكل صحيح مقروءة وتنتقل إلى أسفل قائمة <b>الوارد</b>.</li>
</ul>
<p>عندما يؤكد المستخدم التحكم البشري، أو إذا كان ذلك تلقائيًا، يحدث ما يلي:</p>
<ul class="icon-list icon-line icon-docs">
    <li>تُعتبر المحادثة غير مقروءة وتنتقل إلى أعلى قائمة <b>الوارد</b>.</li>
    <li>أي رسائل مستقبلية من المستخدم في نفس المحادثة المرسلة في غضون 10 أيام من التحكم البشري، وبدون إجابة من الروبوت، ستقوم بتنبيه الوكيل.</li>
    <li>إذا كانت تنبيهات البريد الإلكتروني للوكلاء نشطة، يتم إرسال إشعار بالبريد الإلكتروني إلى الوكيل المخصص للمحادثة، أو إذا كانت محادثة المستخدم مخصصة لقسم، إلى الوكلاء المخصصين لذلك القسم، وإلا سيتم إرسالها إلى جميع الوكلاء غير المتصلين.</li>
    <li>إذا كانت إشعارات الدفع نشطة، يتم إرسال إشعار دفع إلى الوكيل المخصص للمحادثة، أو إذا كانت محادثة المستخدم مخصصة لقسم، إلى الوكلاء المخصصين لذلك القسم، وإلا سيتم إرسالها إلى جميع الوكلاء غير المتصلين.</li>
    <li>إذا كانت إشعارات الرسائل النصية نشطة، يتم إرسال رسالة نصية إلى الوكيل المخصص للمحادثة، أو إذا كانت محادثة المستخدم مخصصة لقسم، إلى الوكلاء المخصصين لذلك القسم، وإلا سيتم إرسالها إلى جميع الوكلاء غير المتصلين.</li>
    <li>لن يتم إرسال طلبات التحكم البشري خلال 10 أيام من التحكم البشري في نفس المحادثة.</li>
    <li>إذا كان <b>الإعدادات > الرسالة > رسالة متابعة</b> نشطة، يتم إرسال الرسالة التي تطلب عنوان البريد الإلكتروني للمستخدم فقط إذا لم يكن لدى المستخدم عنوان بريد إلكتروني.</li>
    <li>إذا كان <b>الإعدادات > الرسائل > رسالة خارج الخدمة</b> نشطة، يتم إرسال الرسالة الخارج الخدمة فقط إذا لم تكن داخل ساعات العمل أو إذا كان جميع الوكلاء غير متصلين.</li>
    <li>إذا كان <b>الإعدادات > متنوعة > قائمة الانتظار</b> نشطة، يتم تفعيل قائمة الانتظار.</li>
</ul>
<h4>التحكم البشري اليدوي</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يمكنك تشغيل التحكم البشري يدويًا عن طريق إنشاء
        <b>نية</b> جديدة مع الاستجابة التالية بالنيابة عن
        <b>الحمل المخصص</b>:
        <b>{ "human-takeover": true }</b>.
    </li>
    <li>
        يتم تنبيه الوكلاء يدويًا تلقائيًا ويتم ترك المحادثة معلمة كغير مقروءة.
    </li>
    <li>لإرسال طلب تحكم بشري يدويًا، استخدم رسالة الرقائق الغنية بالرقم التعريفي <b>sb-human-takeover</b>. على سبيل المثال: <b>[chips id="sb-human-takeover" options="دعم بشري، إلغاء" message=""]</b>.</li>
</ul>
<h4>واتساب، ماسنجر، تلغرام</h4>
<p>
    لجعل طلب التحكم البشري يعمل على واتساب، ماسنجر، تلغرام، يجب عليك إنشاء
    <b>نية</b> جديدة مع <b>human-takeover</b> كـ <b>سياق الإدخال</b>، ولا شيء كـ <b>سياق الإخراج</b>،
    وقائمة من رسائل التأكيد الشائعة للمستخدم كـ <b>عبارات التدريب</b> (مثل موافق، نعم)
    و <b>{ "human-takeover": true }</b> كـ <b>استجابة الحمولة المخصصة</b>
    <a href="../../media/docs/human-takeover-intent.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.<br />
    <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
</p>
<hr class="space" />
<h2 id="smart-reply">الرد الذكي</h2>
<p>
    يقترح الرد الذكي ردود سريعة في الوقت الحقيقي أثناء المحادثة. بمجرد التفعيل، سترى الردود المقترحة في منطقة المحادثة، إذا كان هناك أي.
    هناك طريقتان لملء الاقتراحات: عبر الروبوت، عبر مساعد الوكيل.
</p>
<h4>اقتراحات الروبوت</h4>
<p>لاستخدام اقتراحات الروبوت، قم بمزامنة Dialogflow بشكل طبيعي وق train the chatbot كالمعتاد. سيتم استخدام نفس الروبوت المستخدم للمستخدمين.</p>
<h4>اقتراحات مساعد الوكيل</h4>
<p>
    تتطلب مساعد الوكيل معرفة تقنية للعمل ومخصصة فقط للأعمال التجارية ذات البيانات بحد أدنى من 30،000 محادثة.
    إذا لم تستخدم مساعد الوكيل من قبل، فمن المرجح أنك لا تمتلك المعرفة والبيانات اللازمة لاستخدامه، وبالتالي يمكنك تجاهله.
    المزيد من التفاصيل على <a href="https://cloud.google.com/agent-assist/docs/conversation-profile" target="_blank" rel="nofollow">https://cloud.google.com/agent-assist/docs/conversation-profile</a>.
</p>
<h4>المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يبحث الرد الذكي أولاً عن اقتراح من الروبوت، إذا كان هناك على الأقل واحد يعود بالنتائج،
        وإلا يبحث عن الاقتراح عبر مساعد الوكيل إذا كان متاحًا.
        لا يتم استخدام مساعد الوكيل أبدًا إذا قدم الروبوت على الأقل تلميحًا واحدًا.
    </li>
</ul>
<hr class="space" />
<h2 id="open-ai">OpenAI</h2>
<p>
    تمنحك تكامل OpenAI (ChatGPT) القدرة على الرد على الأسئلة العامة حول أي شيء تقريبًا يمكنك أن تتخيله.
    لبدء الاستخدام، اتبع الخطوات أدناه.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بالتسجيل على <a href="https://beta.openai.com/signup" target="_blank" rel="nofollow">https://beta.openai.com/signup</a>.
    </li>
    <li>
        احصل على مفتاح API من <a href="https://beta.openai.com/account/api-keys">https://beta.openai.com/account/api-keys</a> والصقه في <b>الإعدادات > Dialogflow > OpenAI > مفتاح الواجهة</b>
    </li>
</ul>
<h4>إنشاء تعبيرات المستخدم - الخيار</h4>
<p>
    عند تفعيل هذا الخيار، سيقوم OpenAI بإنشاء تعبيرات مستخدم جديدة في الوقت الحقيقي عند فتحك لنافذة <b>نواية Dialogflow</b> عند النقر فوق عنصر القائمة <b>إرسال إلى dialogflow</b> في رسالة في محادثة.
</p>
<h4>إنشاء تعبيرات المستخدم - زر</h4>
<p>
    عند النقر على زر <b>إنشاء تعبيرات المستخدم</b>، سيقوم OpenAI بتحديث وكيل Dialogflow الخاص بك وإنشاء تعبيرات مستخدم جديدة لكل نية.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بعمل نسخة احتياطية من وكيل Dialogflow الخاص بك أولاً.
    </li>
    <li>
        قد تستغرق هذه المهمة عدة دقائق أو حتى ساعات إذا كان لديك روبوت دردشة يحتوي على العديد من النوايا.
        نظرًا لأن العملية تستغرق وقتًا طويلاً، قد يقوم الخادم بانقطاع التشغيل عن العملية (مهلة التشغيل) قبل أن تنتهي، وفي هذه الحالة يجب عليك النقر على الزر مرة أخرى.
        يمكنك التحقق مما إذا تم قطع العملية من خلال فحص وحدة التحكم في المتصفح للأخطاء.
    </li>
    <li>
        يتم تنفيذ هذه المهمة مرة واحدة فقط لكل نية. سيتم تجاهل النوايا التي تم معالجتها سابقًا.
    </li>
    <li>
        تقوم هذه المهمة بفحص تعبيرات المستخدم الحالية ولا تخلق تكرارات.
    </li>
    <li>
        سيتم استخدام أول 5 تعبيرات مستخدم لإنشاء تعبيرات مستخدم جديدة.
    </li>
    <li>
        نظرًا لأن هذه عملية آلية، نوصي بشدة بمراجعة نواياك بعد اكتمال المهمة.
    </li>
</ul>
<h4>المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يتم تنفيذ استعلام OpenAI فقط إذا لم يكن الروبوت يعرف إجابة على سؤال المستخدم وإذا كانت طول رسالة المستخدم أكبر من 6 أحرف.
    </li>
</ul>
<hr class="space" />
<h2 id="google-search">البحث في Google</h2>
<p>
    تمنح ميزات البحث في Google الروبوت القدرة على البحث عن إجابات على Google وعلى موقع الويب الخاص بك وتصحيح تلقائي لأسئلة المستخدم المكتوبة بشكل خاطئ.
    لبدء استخدامها، اتبع الخطوات أدناه.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بالتسجيل على <a href="https://programmablesearchengine.google.com/" target="_blank" rel="nofollow">https://programmablesearchengine.google.com/</a>.
    </li>
    <li>
        قم بإنشاء بحث وقم بإعداده كما تريد. نوصي بإضافة موقع الويب الخاص بك فقط وويكيبيديا إذا كنت تريد أن يرد الروبوت على أسئلة عامة، اترك خيار <b>البحث في الويب بأكمله</b> معطلًا.
        استخدم إعداد <b>الكيانات</b> لاستبعاد النتائج غير الصالحة.
    </li>
    <li>
        انتقل إلى <b>تحرير محرك البحث > إعداد > أساسي</b> وانسخ قيمة <b>معرف محرك البحث</b>، والصقه في Alz-Bot.
    </li>
    <li>
        للحصول على مفتاح API، قم بزيارة <a href="https://developers.google.com/custom-search/v1/overview" target="_blank" rel="nofollow">https://developers.google.com/custom-search/v1/overview</a> وانقر على <b>الحصول على مفتاح</b>.
    </li>
</ul>
<h4>الكيانات</h4>
<p>
    إعداد <b>الكيانات</b> يحلل رسالة المستخدم ويتعرف على الكيانات مثل المدن والفعاليات والتواريخ وغيرها.
    استخدمها لاستبعاد النتائج غير الصالحة التي تعود بها بحث Google. لتمكين هذا الإعداد، اتبع الخطوات أدناه.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بتسجيل الدخول إلى <a href="https://console.cloud.google.com/" target="_blank" rel="nofollow">https://console.cloud.google.com</a> بحساب Google الخاص بك وحدد مشروع وكيل Dialogflow الخاص بك.
    </li>
    <li>
        أدخل <b>واجهة برنامج Cloud Natural Language API</b> في شريط البحث في الأعلى، وحدد <b>واجهة برنامج Cloud Natural Language API</b> وفعل الواجهة البرمجية  <a href="../../media/docs/cloud-natural-language-api.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
    </li>
    <li>
        فعل الفوترة عن طريق النقر على <b>القائمة اليسرى > الفوترة</b> وفعل حساب فوترة بطريقة دفع صالحة. قم بتفعيل الفوترة لمشروع وكيل Dialogflow الخاص بك.
    </li>
</ul>
<h4>المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        يتم تنفيذ بحث Google فقط إذا لم يكن الروبوت يعرف إجابة على سؤال المستخدم وإذا كانت طول رسالة المستخدم أكبر من 6 أحرف.
    </li>
    <li>
        إذا كان بحث Google يعيد نتيجة، يتم تنشيط سياق Dialogflow <b>بحث Google</b> تلقائيًا.
        يحتوي السياق على السمة <b>رابط</b> والذي هو رابط موقع الويب لنتيجة بحث Google.
        استخدم السياق لإنشاء نية جديدة تقدم الرابط، إذا قام المستخدم بإرسال رسالة مثل <b>قل لي المزيد</b> أو <b>أريد معرفة المزيد</b>.
    </li>
    <li>
        لا يلزم تفعيل بحث Google لتنشيط تصحيح التهجئة.
        يمكنك تعطيل بحث Google وتفعيل تصحيح التهجئة فقط.
    </li>
    <li>
    إذا كان بحث Google نشطًا، فسيكون لديه الأفضلية على OpenAI.
</li>
</ul>
<a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
<hr class="space" />
<h2 id="fulfillment">الوفاء</h2>
<p>بيانات الوفاء التي يتم إرسالها إلى عنوان URL الخاص بالويب هي كما يلي:</p>
<pre class="prettyprint lang-json">
{
    "responseId": "4a58fc4f...",
    "queryResult": {
        "queryText": "الوفاء",
        "parameters": [],
        "allRequiredParamsPresent": true,
        "fulfillmentText": "مثال",
        "fulfillmentMessages": [{
            "text": {
                "text": ["الاستجابة"]
            }
        }],
        "outputContexts": [{
            "name": "projects/schiocco...",
            "parameters": {
                "no-input": 0,
                "no-match": 0
            }
        }],
        "intent": {
            "name": "projects/schiocco...",
            "displayName": "الوفاء"
        },
        "intentDetectionConfidence": 1,
        "languageCode": "en"
    },
    "originalDetectIntentRequest": {
        "payload": {
            "support_board": {
                "conversation_id": "3002",
                "user_id": "3777"
            }
        }
    },
    "session": "projects/example/agent/sessions/3777-3002"
}
</pre>
<p>تحتوي الحقول <b>payload</b> و <b>session</b> على معرف المستخدم ومعرف المحادثة لـ Alz-Bot.</p>
<hr class="space" />
<h2 id="dialogflow-info">معلومات</h2>
<h4>قاعدة المعرفة</h4>
<p>
    يتم تمكين قاعدة المعرفة تلقائيًا. قاعدة المعرفة هي ميزة تمنح الدردشة الخاصة بك القدرة على البحث داخل الوثائق (مثل ملف PDF) أو صفحات الويب للعثور على إجابة.
    لإنشاء أول قاعدة معرفة خاصة بك، انتقل إلى
    <a target="_blank" rel="nofollow" href="https://cloud.google.com/dialogflow/docs/knowledge-connectors">cloud.google.com/dialogflow/docs/knowledge-connectors</a>
</p>
<h4>استجابة Dialogflow</h4>
<p>
    يتم حفظ استجابة JSON الكاملة من Dialogflow تلقائيًا في قاعدة البيانات،
    <b>sb_messages</b>، في العمود
    <b>payload</b>.
</p>
<h4>مرفقات المستخدم</h4>
<p>
    يتم إرسال مرفقات المستخدم إلى Dialogflow عن طريق إلحاق المرفقات بتفاصيل الرسالة في الشكل التالي:
    <pre>[name:file-name.ext,url:URL,extension:file-extension]</pre>
    مثال:
    <pre class="prettyprint">
        [name:archive.zip,url:https://alz-bot.com/archive.zip,extension:zip]
        [name:license.pdf,url:https://alz-bot.com/license.pdf,extension:pdf]
    </pre>
</p>
<h4>مرفقات الروبوت</h4>
<p>
    للسماح للروبوت بإرسال المرفقات، أضف استجابة
    <b>Custom Payload</b> وأدخل هذا الكود JSON:
    <pre class="prettyprint lang-json">
        { "attachments": [["name", "YOUR-LINK"], ["name", "YOUR-LINK"], ["name", "YOUR-LINK"]]}
    </pre>
    استبدل "name" بالاسم الفعلي للمرفق للعرض واستبدل "YOUR-LINK" بعنوان URL الفعلي للملف.
    يتم عرض مرفقات الصور تلقائيًا كصور.
</p>
<h4>رسائل الغنية</h4>
<p>
    للسماح لـ Dialogflow بإرسال رسائل غنية، قم ببساطة بإدخال رمز الرسالة الغنية في
    <b>TEXT RESPONSE</b> أو أضف استجابة
    <b>Custom Payload</b> جديدة وأدخل هذا الكود JSON: <b>{ "rich-message": "shortcode" }</b>.
    استبدل "shortcode" برمز الرسالة الغنية، ولكي يكون لديك رمز JSON صالح يجب أن تقوم بتبديل جميع الرموز <b>"</b> ب <b>\"</b>.
    للحصول على رموز قصيرة أو لمعرفة كيفية إنشاء رسالة غنية، يرجى النقر
    <a class="scroll-to" href="#rich-messages">هنا</a>.
</p>
<h4>استجابة رسالة غنية</h4>
<p>
    عندما يتفاعل المستخدم مع رسائل غنية عبر دردشة Alz-Bot (على سبيل المثال، عن طريق النقر على زر)،
    يتم إرسال استجابة رسالة الغنية إلى Dialogflow في الشكل التالي:
    <b>ID|response</b>، أو <b>ID</b> إذا كان نوع رسالة الغنية هو التسجيل، البريد الإلكتروني، المتابعة، في هذه الحالة يتم إرسال قيم رسالة الغنية كمصفوفة في مفتاح <b>queryParams['payload']</b>.
    <b>ID</b> هو معرف رسالة الغنية، والذي يمكن تعيينه عن طريق إضافة السمة id="YOUR-ID" إلى رمز الاختصار. إذا لم يتم تعيين أي معرف، سيتم استخدام معرف عشوائي بدلاً من ذلك.
    <b>response</b> هو إدخال أو اختيار المستخدم.
    لمنع Dialogflow من الرد على رسالة غنية، أضف قاعدة جديدة بـ <b>ID</b> كما هو الحال مع التعبير الوحيد للمستخدم وبدون رد.
</p>
<p>
    إذا كان المستخدم يتفاعل مع الروبوت عبر تطبيق الرسائل (على سبيل المثال، WhatsApp)،
    فإن استجابة رسالة الغنية لا تحتوي على معرف رسالة الغنية ويجب استخدام <b>السياقات</b> في Dialogflow للسماح لـ Dialogflow بفهم أي النية لتنشيطها لاستجابة رسالة غنية محددة.
</p>
<h4>الحصول على استجابة رسالة غنية للتسجيل، البريد الإلكتروني، المتابعة</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        من <b>القائمة اليسرى > الوفاء</b>، قم بتمكين <b>Webhooks</b>، حيث يكفي إدخال عنوان URL الملف الذي سيستقبل بيانات الويب هذه من Dialogflow.
    </li>
    <li>
        أنشئ نية باستخدام معرف رسالة الغنية، على سبيل المثال، لنموذج التسجيل، قم بإدخال <b>registration</b>، لنموذج المتابعة أدخل <b>sb-follow-up-form</b>، لنماذج البريد الإلكتروني أدخل <b>email</b>.
    </li>
    <li>
        قم بتمكين الوفاء للنية.
    </li>
    <li>
        انتهيت! سيتلقى ملف عنوان URL الويب تفاصيل مستخدم رسالة الغنية من Alz-Bot.
    </li>
</ul>
<h4>تحسين الروبوت في Dialogflow</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        إذا كان الروبوت يرد بالأنماط الخاطئة، انتقل إلى
        <b>Dialogflow Console > chatbot Settings > ML Settings</b>
        واضبط
        <b>ML CLASSIFICATION THRESHOLD</b> إلى رقم أكبر، مثل 0.6.
    </li>
</ul>
<h4>استطلاع تسلسلي</h4>
<p>
    لإنشاء استطلاع تسلسلي مثل تلك التي في العرض التوضيحي، يجب عليك إدخال
    <b>Rich message ID</b> في
    <b>Training phrases</b>، تحقق من المثال أدناه.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى Dialogflow وأنشئ نية جديدة. في منطقة
        <b>Training phrases</b>، أدخل تعبير المستخدم
        <b>survey example</b>. في منطقة
        <b>Responses</b>، أدخل الكود
        <b>[buttons id="test-survey-1" options="Software,Physical products,Services" title="What is your type of business?" message="Please choose the type that best suits your company." success="Your company type is "]</b>
    </li>
    <li>
        أنشئ نية جديدة. أدخل تعبير المستخدم
        <b>test-survey-1</b> وكاستجابة أدخل
        <b>[select id="seq-survey-2" options="Priority post, Express courier, International courier" title="Shipping methods" message="Choose the preferred shipping method of your customers" success="Your customers preferred shipping method is"]</b>
    </li>
    <li>
        قم بإنشاء نية جديدة. أدخل تعبير المستخدم
        <b>test-survey-2</b> وكرد قم بإدخال
        <b>شكرًا لك على إكمال استبياننا!</b>.
    </li>
    <li>انتهيت.</li>
</ul>
<h4>تدريب البوت</h4>
<p>
    يمكن للوكلاء إضافة نيات جديدة وردود البوت، وإضافة عبارات تدريبية جديدة إلى النيات الحالية في أي وقت من منطقة الإدارة عن طريق تحريك
    مؤشر الفأرة فوق الرسالة والنقر على رمز النية في Dialogflow. ستحتوي النيات الجديدة أيضًا على الردود، في حين أن تحديث النيات الحالية سيضيف
    عبارات تدريبية جديدة فقط، وليس ردود بوت جديدة. إذا كنت تستخدم Dialogflow CX، سيتم إضافة ردود البوت إلى أحدث تدفق تم استخدامه في المحادثة
    إذا كان موجودًا، وإلا سيتم إضافتها إلى تدفق البداية.
</p>
<h4 id="dialogflow-departments">ربط الأقسام</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        احصل على معرفات الأقسام من <b>الإعدادات > متفرقات > الأقسام</b>.
    </li>
    <li>
        احصل على معرفات المشروع من منطقة إعدادات Dialogflow لوكلائك.
    </li>
</ul>
<h4>مزيد من المعلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>يمكنك تنشيط البوت عبر واجهة برمجة التطبيقات (API) بإرسال رسالة بدون نص وبيانات تحميل <b>{ "event": "activate-bot" }</b>.</li>
    <li>اللغة الصينية المعتمدة هي الصينية المبسطة فقط. يرجى استخدام لغة Dialogflow الصينية المبسطة (zh-CN) فقط. ستكون رموز اللغات zh-HK و zh-TW غير فعالة.</li>
    <li>يتم إرسال التفاصيل التالية إلى Dialogflow في معلمة <b>queryParams</b> عند اكتشاف نية: <b>conversation_id</b>، <b>user_id</b>.</li>
    <li>لتشغيل حدث الترحيب في Dialogflow CX، قم بإنشاء <b>معالج الحدث</b> وأدخل <b>Welcome</b> كـ <b>Custom Event</b>.</li>
    <li>تتم مزامنة مقالات Alz-Bot تلقائيًا مع قاعدة المعرفة في Dialogflow.</li>
    <li>استخدم المتغير JS <b>SB_DIALOGFLOW_AGENT = "AGENT ID"</b> لتغيير وكيل Dialogflow الافتراضي، قم بتبديل "AGENT ID" بـ <b>معرف المشروع</b>.</li>
</ul>
</div>
<hr />
<div id="whatsapp">
    <div class="label label-docs">WHATSAPP</div>
    <h2>واتساب</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق WhatsApp.</p>
    <hr class="space-sm" />
    <h2 id="whatsapp-installation">التثبيت</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            من <b>الإعدادات > التطبيقات</b>، انقر على <b>واتساب</b> وأدخل مفتاح الترخيص الخاص بك لتثبيت وتنشيط التطبيق.
            إذا كنت تستخدم الإصدار السحابي، فإن التطبيق نشط بالفعل.
        </li>
    </ul>
    <h4>إعداد API السحابية لواتساب</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            أنشئ حسابًا للمطور وتطبيق Facebook جديد كما هو موضح في <a href="https://developers.facebook.com/docs/whatsapp/cloud-api/get-started#set-up-developer-assets" target="_blank" rel="nofollow">https://developers.facebook.com/docs/whatsapp/cloud-api/get-started#set-up-developer-assets</a>.
        </li>
        <li>
            في <b>Alz-Bot > الإعدادات > واتساب > Cloud API > Secret key</b>، أدخل سلسلة عشوائية ثم انتقل إلى <a href="https://developers.facebook.com/apps" target="_blank" rel="nofollow">https://developers.facebook.com/apps</a> وحدد تطبيقك. انقر على <b>إضافة منتج</b> وأضف <b>واتساب</b>، ثم انتقل إلى <b>واتساب > التكوين</b> وأدخل عنوان
            <b>Webhook URL</b> الذي حصلت عليه من <b>Alz-Bot > الإعدادات > واتساب > Cloud API > تكوين عنوان URL</b>.
            في <b>Verify token</b>، أدخل المفتاح السري الذي أدخلته مسبقًا في Alz-Bot. انقر فوق <b>Verify</b> واحفظ، انقر على <b>Webhook fields > Manage</b>، قم بتمكين حقول Webhook التالية:
            <b>messages</b>.
            <a href="../../media/docs/whatsapp-cloud-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
        </li>
        <li>
            في <b>Alz-Bot > الإعدادات > واتساب > Cloud API > Token</b>، أدخل رمز الاختبار للاختبار، واتبع التعليمات أدناه للحصول على رمز الوصول الدائم.
            <ul class="icon-list icon-line icon-docs">
                <li>
                    قم بزيارة <a href="https://business.facebook.com" target="_blank" rel="nofollow">https://business.facebook.com</a> وانتقل إلى <b>Left menu > Settings > More system settings</b>، ثم انتقل إلى <b>Users > System Users</b> لعرض
                    مستخدم النظام الذي أنشأته، أو قم بإنشاء مستخدم جديد. انقر فوق ذلك المستخدم وحدد <b>Add Assets</b>.
                    يجب أن يكون مستخدم النظام مسؤولًا.
                </li>
                <li>
                    انقر على <b>Left menu > Apps</b> وتحت <b>Select Assets</b>، اختر تطبيقك. قم بتمكين <b>Develop App</b> لذلك التطبيق واحفظ.
                </li>
                <li>
                    انقر على <b>Generate Token</b> وحدد تطبيقك، قم بتمكين الصلاحيات التالية: <b>whatsapp_business_management</b>، <b>whatsapp_business_messaging</b>، <b>business_management</b>. انقر على <b>Generate Token</b> واحفظ. الصق الرمز في <b>Alz-Bot > الإعدادات > واتساب > Cloud API > Token</b>.
                    <a href="../../media/docs/whatsapp-cloud-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                </li>
            </ul>
        </li>
        <li>
            للحصول على <b>هوية الهاتف</b>، أدخل <a href="https://developers.facebook.com" target="_blank" rel="nofollow">https://developers.facebook.com</a>،
            حدد تطبيقك وانتقل إلى <b>Left menu > WhatsApp > Getting started</b>.
        </li>
        <li>
            يمكنك اختبار التكامل من <a href="https://developers.facebook.com" target="_blank" rel="nofollow">https://developers.facebook.com</a>،
            حدد تطبيقك وانتقل إلى <b>Left menu > WhatsApp > Getting started</b>. <a href="../../media/docs/whatsapp-cloud-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
        </li>
    </ul>
    <h4>إعداد حساب 360dialog</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            انتقل إلى <a href="https://www.360dialog.com/" target="_blank" rel="nofollow">https://www.360dialog.com/</a> وأنشئ حسابًا جديدًا.
        </li>
        <ul>
    <li>
        أدخل إلى لوحة التحكم الخاصة بك ومن <b>القائمة اليسرى > حسابات واتساب</b> قم بإنشاء <b>مفتاح API</b> وانسخه والصقه في <b>Alz-Bot > الإعدادات > واتساب > إعدادات 360dialog</b>.
    </li>
    <li>
        انقر على <b>Alz-Bot > الإعدادات > واتساب > إعدادات 360dialog > مزامنة الآن</b>.
    </li>
    <li>
        تم! يجب أن يبدأ Alz-Bot في استقبال رسائل واتساب المرسلة إلى رقمك، ويمكنك الرد على تلك الرسائل من خلال Alz-Bot.
    </li>
    <li>
        يرجى ملاحظة أنه يمكنك أيضًا استخدام حساب الاختبار المجاني لإجراء اختبارات، لمزيد من التفاصيل انظر <a href="https://docs.360dialog.com/whatsapp-api/whatsapp-api/sandbox" target="_blank" rel="nofollow">هنا</a>. يحتوي حساب الاختبار على قيود وقد لا تعمل بعض الميزات، مثل مرفقات الوسائط.
    </li>
</ul>
<h4>إعداد حساب Twilio</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى
        <a href="https://www.twilio.com/referral/5GOe1g" target="_blank" rel="nofollow">https://www.twilio.com</a> وأنشئ حسابًا جديدًا.
    </li>
    <li>
        قم بتحقق رقم هاتفك.
        <a href="../../media/docs/sms-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        أكمل النموذج واختر <b>واتساب</b>، <b>تنبيهات وإشعارات</b>، <b>بدون كود</b>، <b>تكاملات الطرف الثالث</b>.
        <a href="../../media/docs/whatsapp-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انسخ <b>معرف الحساب (ACCOUNT SID)</b> و <b>رمز المصادقة (AUTH TOKEN)</b> من <a href="https://www.twilio.com/console" target="_blank" rel="nofollow">لوحة التحكم في Twilio</a> والصقهما في <b>Alz-Bot > الإعدادات > واتساب > إعدادات Twilio</b>، واحفظ التغييرات.
        <a href="../../media/docs/whatsapp-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        ستقوم الآن بإعداد حساب اختبار مجاني لتشغيل بعض الاختبارات والتأكد من أن التكامل يعمل مع Alz-Bot.
        انقر من القائمة اليسرى على <b>الرسائل > الإعدادات > إعدادات الحوض الرملي لواتساب</b>، وأدخل إلى <b>عندما يأتي رسالة</b> و <b>عنوان URL للرد على الحالة</b> عنوان URL لـ Alz-Bot، احصل عليه من <b>Alz-Bot > الإعدادات > واتساب > إعدادات Twilio > الحصول على عنوان URL للتكوين</b>.
        تذكر أن الـ localhost لن يعمل، تحتاج إلى عنوان URL عام وخادم حي.
        <a href="../../media/docs/whatsapp-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انقر من القائمة اليسرى على <b>الرسائل > جربها > إرسال رسالة واتساب</b>.
        اتبع التعليمات وأرسل الرسالة مع الرمز إلى رقم واتساب المقدم. انقر على الأزرار التالية حتى يتم الانتهاء من التكوين.
        <a href="../../media/docs/whatsapp-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        تم! يجب أن يبدأ Alz-Bot في استقبال رسائل واتساب المرسلة إلى حساب الحوض الرملي، ويمكنك الرد على تلك الرسائل من Alz-Bot.
    </li>
    <li>
        لاستخدام تكامل واتساب بشكل عام مع عملائك، تحتاج إلى تحديث حسابك وتمكين الفوترة، يمكنك القيام بذلك <a href="https://www.twilio.com/console/billing/upgrade" target="_blank" rel="nofollow">هنا</a>.
        بعد ذلك، ستحتاج إلى شراء رقم Twilio، والذي سيكون رقم هاتف حساب واتساب الخاص بك الرسمي. المزيد من التفاصيل <a href="https://www.twilio.com/docs/whatsapp/tutorial/connect-number-business-profile" target="_blank" rel="nofollow">هنا</a>. لا يمكنك استخدام رقم هاتف حساب واتساب الخاص بك الحالي، يجب أن تستخدم رقم Twilio. المزيد من التفاصيل <a rel="nofollow" target="_blank" href="https://support.twilio.com/hc/en-us/articles/360052171393-Can-I-activate-my-own-phone-number-for-WhatsApp-on-Twilio-">هنا</a>.
    </li>
</ul>
<hr class="space-sm" />
<h2 id="whatsapp-fallback">رسائل الاستبدال</h2>
<p>
    وفقًا لـ <a rel="nofollow" target="_blank" href="https://www.whatsapp.com/legal/business-policy/">سياسة الأعمال في واتساب</a>،
    لا يمكنك إرسال رسائل تسويقية واستجلاب للمستخدمين نشطين من جانبك.
    يجب على المستخدمين نشطين الوصول إليك أولاً.
    لديك 24 ساعة من وقت إرسال المستخدم لرسالة واتساب للرد على الرسالة.
    إذا كنت ترغب في إرسال رسالة بعد 24 ساعة من آخر رسالة للمستخدم، يجب عليك استخدام رسالة النص البديل أو رسالة القالب لواتساب.
</p>
<h4>رسالة النص البديل</h4><br>
<p>
    لتمكين رسالة النص البديل، يجب عليك إعداد الرسائل النصية في <b>الإعدادات > الإشعارات > إشعارات الرسائل النصية</b>.
    <br />المزيد من التفاصيل <a class="scroll-to" href="#sms">هنا</a>
</p>
<h4>رسائل القوالب لواتساب</h4><br>
<p>
    رسالة قالب لواتساب هي تنسيق رسالة يمكنك استخدامه مرارًا وتكرارًا لإرسال رسائل للمستخدمين بمجرد موافقتهم و
    منح تطبيقك الإذن بإرسال رسائل لهم.
    لا يمكنك إدخال الرسالة الأصلية في القالب،
    يجب عليك استخدامها لإخطار المستخدم برسالة جديدة وإرشاده حول كيفية عرضها،
    على سبيل المثال عن طريق توفير رابط إلى موقع الويب الخاص بك حيث يتم عرض الدردشة.
</p>
<h5>API السحابية لواتساب</h5>
<ul class="icon-list icon-line icon-docs">
    <li>
        للحصول على <b>اسم القالب</b> وإدارة القوالب، قم بزيارة <a rel="nofollow" target="_blank" href="https://business.facebook.com/">https://business.facebook.com</a> وانتقل إلى <b>القائمة اليسرى > الإعدادات > إعدادات النظام الإضافية</b>، ثم انتقل إلى <b>الحسابات > حسابات واتساب > الإعدادات</b> وانقر على <b>مدير واتساب</b>.
    </li>
    <li>
    في <b>لغات القالب</b>، أدخل جميع رموز اللغات المدعومة بواسطة القالب الخاص بك، مفصولة بفواصل. إذا لم يتم العثور على لغة، يتم استخدام رمز اللغة الأول. يمكن العثور على قائمة رموز اللغات <a target="_blank" rel="nofollow" href="../docs/files/language-codes.txt">هنا</a> (انسخ فقط رمز اللغة، على سبيل المثال، it، es، en_US).
</li>
<li>
    في <b>معلمات الرأس</b> و <b>معلمات الجسم</b>، أدخل حقول الدمج المدعومة مفصولة بفواصل، على سبيل المثال: {recipient_name}، {conversation_url_parameter}.
    يجب أن يتطابق عدد الحقول المدخلة هنا مع عدد حقول القالب.
    استخدم هذه الميزة إذا كان قالبك يستخدم قيمًا ديناميكية. الترتيب مهم، حيث يتم استخدام حقل الدمج الأول كمعلمة أولى للقالب.
</li>
</ul>
<h5>Twilio</h5><br>
<p>
    أدخل رمز القالب في <b>Alz-Bot > الإعدادات > WhatsApp > القالب الاحتياطي</b>
    إذا كنت تستخدم رمل Twilio للاختبار، يمكنك استخدام قوالب معتمدة مسبقًا مثل <b>Your {{1}} code is {{2}}</b>,
    يمكنك استبدال المتغيرات بمتغيرات Alz-Bot مثل <b>{recipient_name}</b>، على سبيل المثال، <b>Your {recipient_name} code is {recipient_email}</b>.
    المزيد من التفاصيل <a rel="nofollow" target="_blank" href="https://www.twilio.com/docs/whatsapp/tutorial/send-whatsapp-notification-messages-templates">هنا</a>.
</p>
<h5>360dialog</h5>
<ul class="icon-list icon-line icon-docs">
    <li>
        احصل على قيمة <b>النطاق</b> من <b>القائمة اليسرى > حسابات WhatsApp > تفاصيل</b>.
    </li>
    <li>
        احصل على <b>اسم القالب</b> و <b>لغة القالب الافتراضية</b> من منطقة القوالب الخاصة بك في 360dialog.
    </li>
    <li>
        في <b>المعلمات المخصصة</b>، أدخل حقول الدمج المدعومة مفصولة بفواصل، مثال: {recipient_name}، {conversation_url_parameter}.
        استخدم هذه الميزة إذا كان قالبك يستخدم قيمًا ديناميكية. الترتيب مهم، حيث يتم استخدام حقل الدمج الأول كقيمة ديناميكية أولى للقالب.
    </li>
    <li>
        سيحاول Alz-Bot استخدام القالب بنفس لغة المستخدم، إذا لم يكن متاحًا، سيتم استخدام القالب باللغة الافتراضية. اللغات التالية للقوالب غير متوافقة: en_GB (استخدم en_US)، pt_PT (استخدم pt_BR)، zh_HK و zh_TW (استخدم zh_CN)، es_AR و es_MX (استخدم es_ES).
    </li>
</ul>
<hr class="space-sm" />
<h2 id="whatsapp-shop">متجر WhatsApp</h2>
<p>لعرض منتجات متجرك، استخدم حقول الدمج أدناه.</p>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>حقل الدمج</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>{catalog id="123" product_id="123" body="" footer=""}</b></td>
            <td>
                عرض منتج واحد. استبدل <b>id</b> بمعرف الفهرس و <b>product_id</b> بمعرف المنتج. تكون السمات <b>body</b> و <b>footer</b> اختيارية.
            </td>
        </tr>
        <tr>
            <td><b>{catalog id="123" product_id_1_1="123" product_id_1_2="123" product_id_2_1="123" section_1="" section_2="" header="" body="" footer=""}</b></td>
            <td>
                عرض عدة منتجات. استبدل <b>id</b> بمعرف الفهرس. أضف منتجات عن طريق تجميعها في أقسام، عبر السمات <b>product_id_[A]_[B]</b>، استبدل [A] بفهرس القسم، بدءًا من 1، واستبدل [B] بفهرس المنتج، بدءًا من 1 لكل قسم. يجب أن تضيف أيضًا السمة <b>section_[A]=""</b> لكل قسم، استبدل [A] بفهرس القسم. تكون السمات <b>header</b> و <b>body</b> إلزامية، و <b>footer</b> اختيارية.
            </td>
        </tr>  <tr>  </tr>
    </tbody>
</table>
<hr class="space-sm" />
<ul class="icon-list icon-line icon-docs">
    <li>
        عندما يرسل المستخدم الطلب، يتم إرسال معلومات الطلب إلى عنوان URL المحدد في <b>الإعدادات > WhatsApp > سلك الطلب</b>.
        يجب على الصفحة في ذلك العنوان تجهيز الطلب وإرسال رسالة إلى المستخدم عبر وظيفة واجهة برمجة التطبيقات الخاصة بـ PHP <b>sb_whatsapp_send_message()</b>.
    </li>
    <li>
        لربط المتجر بـ WooCommerce انقر <a class="scroll-to" href="#woocommerce-whatsapp">هنا</a>.
    </li>
</ul>
<hr class="space-sm" />
<h2 id="whatsapp-info">مزيد من المعلومات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        إذا لم تتلقى رسائل WhatsApp، تأكد من أنك لا تخصص محادثات WhatsApp إلى قسم وأن رقم WhatsApp المستخدم للاختبار ليس رقم هاتف لمسؤول أو وكيل Alz-Bot.
        تأكد أيضًا من إعداد سلك الويب هاتف WhatsApp بشكل صحيح.
    </li>
    <li>
        إذا لم تتمكن من إرسال رسائل، يجب أن يظهر خطأ في منطقة الإدارة عند محاولتك إرسال رسالة إلى المستخدم.
    </li>
    <li>
        لا يمكننا توفير الدعم لتكوين Twilio أو 360dialog، بما في ذلك جميع المشكلات المتعلقة.
    </li>
    <li>
        لا يمكننا توفير الدعم في الحصول على حساب WhatsApp الخاص بك أو قالب رسالة WhatsApp الموافق عليه.
    </li>
    <li>
        المحادثات والرسائل على WhatsApp متوافقة مع التوجيه والانتظار.
    </li>
    <li>
        إذا كنت تقوم بالاختبار مع الرمل وبعد 72 ساعة لم يعد بإمكانك إرسال رسائل إلى رقم هاتفك، يجب أن تقوم بربط رقم هاتفك مرة أخرى برملك.
    </li>
    <li>
        إذا قمت بإرسال رسائل غنية برقاقات أو أزرار أو رسائل تحتوي على أكثر من 3 خيارات، يمكنك استخدام سمة الاختصار <b>whatsapp="Your menu text"</b> لتحديد نص رسالة WhatsApp.
    </li>
</ul>
</div>
<hr />
<div id="messenger">
    <div class="label label-docs">MESSENGER</div>
    <h2>Messenger</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق Messenger.</p>
    <hr class="space-sm" />
    <h2 id="messenger-installation">التثبيت</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            من <b>الإعدادات > التطبيقات</b>، انقر فوق <b>Messenger</b> وأدخل مفتاح الترخيص لتثبيت وتنشيط التطبيق.
            إذا كنت تستخدم النسخة السحابية، فإن التطبيق نشط بالفعل.
        </li>
        <li>
            بمجرد تثبيت التطبيق، انتقل إلى
            <b>الإعدادات > Messenger</b> وانقر
            <b>بدء المزامنة</b>.
        </li>
        <li>
            أكمل المزامنة باختيار صفحة Facebook وأدخل المعلومات المرجعية في الإعدادات > Messenger > صفحات Facebook.
        </li>
        <li>
            انتهيت. ستظهر جميع الرسائل المرسلة إلى صفحات Facebook وحسابات Instagram التي اخترتها في منطقة الدردشة الإدارية لـ Alz-Bot.
        </li>
    </ul>
    <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
    <hr class="space-sm" />
    <h2 id="instagram">Instagram</h2>
    <p>لربط Instagram بصفحتك على Facebook و Alz-Bot، اتبع الخطوات التالية.</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        ادخل إلى منطقة الإعدادات في صفحتك على Facebook وانقر على <b>Left Menu > Instagram</b> (https://www.facebook.com/YOUR-PAGE-SLUG/settings/).
    </li>
    <li>
        انقر على <b>Connect account</b> وأكمل الإعداد.
    </li>
    <li>
        قم بمزامنة Messenger مع Alz-Bot مرة أخرى وانتهيت.
    </li>
</ul>
<a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
<hr class="space-sm" />
<h2 id="messenger-info">معلومات إضافية</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        إذا لم تتلق رسائل Instagram، تأكد من تمكين <b>Settings > Privacy > Messages > Connected tools - Allow access</b> من تطبيق Instagram الخاص بك.
        تأكد أيضًا من أن حساب Instagram الخاص بك ليس مُعدًا كحساب احترافي، يجب أن يكون حساب تجاري.
    </li>
    <li>
        يحصل كل مستخدم Alz-Bot على محادثة واحدة فقط على Facebook وInstagram.
    </li>
    <li>
        تُحول رسائل Alz-Bot الغنية تلقائياً إلى رسائل Facebook الغنية عند الإمكان، وقد يتم إزالة أو تغيير جزء من الرسالة الغنية.
    </li>
    <li>
        سترسل فقط الرسائل الخاصة على Facebook إلى صندوق الوارد الخاص بفريقك. إذا قام شخص بنشر رسالة على حائطك على Facebook، فلن تظهر في صندوق الوارد الخاص بك.
    </li>
    <li>
        عندما يرسل شخص ما رسالة إلى صفحة شركتك على Facebook أو حساب Instagram الخاص بك، سيتم تعيينه كعميل محتمل في Alz-Bot.
        ستكون قادرًا فقط على رؤية اسم العميل وصورة ملفه الشخصي على Facebook أو Instagram.
    </li>
    <li>
        المحادثات والرسائل على Messenger متوافقة مع التوجيه والانتظار في الطابور.
    </li>
    <li>
        يتم دعم Dialogflow لـ Facebook وInstagram، بما في ذلك الميزات التالية: Human takeover، رسائل Alz-Bot الغنية، اكتشاف اللغة ومحول لغة الدردشة.
    </li>
    <li>
        يتم دعم رسالة المتابعة، ولكن يتم تجاهل إعداد التأخير، ويتم إرسال الرسالة فورًا.
    </li>
    <li>
        تتم دعم رسالة الخدمة غير المتصلة، ولكن لا يتم إرسال الجدول الزمني.
    </li>
    <li>
        يمكن مزامنة حساب Facebook واحد فقط، ولربط صفحات من حسابات Facebook متعددة، يجب أن يكون الحساب المتزامن في Alz-Bot هو مسؤول لجميع صفحات Facebook في الحسابات الأخرى على Facebook.
    </li>
</ul>
</div>
<hr />
<div id="twitter">
<div class="label label-docs">TWITTER</div>
<h2>تويتر</h2>
<p>الإعدادات أدناه تتعلق بتطبيق تويتر.</p>
<hr class="space-sm" />
<h2 id="twitter-installation">التثبيت</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        قم بالتسجيل في <a target="_blank" rel="nofollow" href="https://developer.twitter.com/">https://developer.twitter.com</a>. تأكد من التحقق من رقم هاتفك في <a target="_blank" rel="nofollow" href="https://twitter.com/settings/phone">https://twitter.com/settings/phone</a> أو سيفشل التسجيل.
    </li>
    <li>
        أنشئ تطبيقك الأول عن طريق إدخال اسم التطبيق وانقر على <b>Get keys</b>، انسخ <b>API Key (Consumer key)</b> و <b>API Key Secret (Consumer secret)</b> وألصقهم في <b>Alz-Bot > Settings > Twitter</b>.
    </li>
    <li>
        اطلب <b>Elevated</b> access من <a target="_blank" rel="nofollow" href="https://developer.twitter.com/en/portal/products/elevated">https://developer.twitter.com/en/portal/products/elevated</a>. انقر على <b>Apply for Elevated</b> وأكمل النموذج كالتالي:
        في المنطقة الأولى <b>In your words</b> وفي <b>Will your app use Tweet, Retweet, Like, Follow, or Direct Message functionality?</b> أدخل <b>I need access to the Account Activity API to start receiving Twitter Direct Messages to my chat software(Alz-Bot ) and to reply to them directly from Alz-Bot , details at https://alz-bot.com/twitter.</b>
        قم بتعطيل جميع الحقول الأخرى بالنقر على No: Are you planning to analyze Twitter data?, Do you plan to display Tweets or aggregate data about Twitter content outside Twitter?, Will your product, service, or analysis make Twitter content or derived information available to a government entity?
        <a href="../../media/docs/twitter-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انتظر بضعة أيام حتى يقوم تويتر بمراجعة وموافقة Elevated access، ستتلقى رسالة بريد إلكتروني من تويتر.
    </li>
    <li>
        بمجرد الحصول على Elevated access، ادخل لوحة تحكم المطورين (<a target="_blank" rel="nofollow" href="https://developer.twitter.com/en/portal/dashboard">https://developer.twitter.com/en/portal/dashboard</a>) ومن القائمة اليسرى انقر على <b>Products > Premium > Dev environments</b> وتحت <b>Account Activity API / Sandbox</b> انقر على <b>Set up dev environment</b>، في <b>Dev environment label</b> أدخل <b>sb</b> أو نفس القيمة التي تم إدخالها في <b>Settings > Twitter > Synchronization > Dev environment label</b>.
    </li>
    <li>
        ادخل منطقة <b>Settings</b> الخاصة بتطبيقك من <b>Left menu > Projects & Apps > Your project > Your app</b> وتحت <b>User authentication settings</b> انقر على <b>Set up</b> وفعل <b>OAuth 1.0a</b>.
        في <b>App permissions</b>، حدد <b>Read and write and Direct message</b>، في <b>Callback URI / Redirect URL</b> أدخل الرابط الذي تحصل عليه من <b>Alz-Bot > Settings > Twitter > Get callback URL</b>، في <b>Website URL</b> أدخل رابط موقع الويب الخاص بك.
        <a href="../../media/docs/twitter-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انتقل إلى منطقة <b>Keys and tokens</b> الخاصة بتطبيقك من <b>Left menu > Projects & Apps > Your project > Your app > Keys and tokens</b> وتحت <b>Authentication Tokens</b> أنشئ <b>Access Token and Secret</b>، انسخ وألصقهم في <b>Alz-Bot > Settings > Twitter</b>.
    </li>
    <li>
        أدخل اسم مستخدم ملفك الشخصي على Twitter في <b>Alz-Bot > Settings > Twitter > Your username</b>.
        احصل عليه من صفحة ملفك الشخصي على Twitter، انسخ الاسم الذي يبدأ بـ @ أو جزء الرابط الذي يحتوي على اسم المستخدم الخاص بك. مثال: <a target="_blank" rel="nofollow" href="https://twitter.com/alz-bot1">https://twitter.com/<b>alz-bot1</b></a>.
        <a href="../../media/docs/twitter-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>احفظ إعدادات Alz-Bot وانقر على الزر <b>Alz-Bot > Settings > Twitter > Subscribe</b> وانتهيت. ستظهر جميع الرسائل المرسلة إلى حساب Twitter الخاص بك في Alz-Bot.</li>
</ul>
<hr class="space-sm" />
<h2 id="twitter-info">معلومات إضافية</h2>
<ul class="icon-list icon-line icon-docs">
    <li>إذا كنت تتلقى رسائل مكررة، قد يكون حساب Twitter الذي تستخدمه للفحص هو نفسه الذي قمت بمزامنته. جرب إرسال رسالة من حساب Twitter آخر.</li>
    <li>استخدم نطاقًا حيًا، لا يتم دعم Localhost.</li>
    <li>عند استلام رسالة من مستخدم Twitter، يمكنك إرسال ما يصل إلى 5 رسائل في الرد خلال نافذة زمنية تستمر 24 ساعة. لا يمكن إرسال رسائل بعد مضي 24 ساعة على استلام رسالة Twitter.</li>
    <li>يمكنك إرسال حد أقصى 3 أو 4 مرفقات اعتمادًا على نوع الوسائط.</li>
    <li>لا تدعم الرسائل الغنية التالية في Alz-Bot: معرض الصور، المعرض، البطاقة.</li>
</ul>
</div>
<hr />
<div id="gbm">
<div class="label label-docs">GOOGLE BUSINESS MESSAGES</div>
<h2>رسائل Google للأعمال</h2>
<p>الإعدادات أدناه تتعلق بتطبيق Google Business Messages.</p>
<hr class="space-sm" />
<h2 id="gbm-installation">التثبيت</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        في <b>Alz-Bot > الإعدادات > رسائل الأعمال > تزامن > رمز العميل</b>، أدخل سلسلة عشوائية واحفظها.
    </li>
    <li>
        افتح وحدة تحكم مطوّري الاتصالات التجارية (<a target="_blank" rel="nofollow" href="https://business-communications.cloud.google.com">https://business-communications.cloud.google.com</a>) وقم بتسجيل الدخول باستخدام حساب Google الخاص برسائل الأعمال الخاصة بك.
    </li>
    <li>
        انقر فوق <b>إعدادات حساب الشريك</b> في الأعلى.
    </li>
    <li>
        قم بتكوين <b>Webhook</b> عن طريق إدخال <b>رابط Webhook</b> و <b>رمز العميل</b> واحفظ التغييرات، واحصل على القيم من <b>Alz-Bot > الإعدادات > رسائل الأعمال > تزامن</b>.
    </li>
    <li>
        ادخل مرة أخرى إلى وحدة تحكم مطوّري الاتصالات التجارية (<a target="_blank" rel="nofollow" href="https://business-communications.cloud.google.com">https://business-communications.cloud.google.com</a>) وافتح حساب الشريك الخاص بك.
    </li>
    <li>
        انقر على <b>حساب الخدمة</b> من القائمة اليسارية وأنشئ مفتاحًا جديدًا، قم بتنزيل المفتاح وافتحه باستخدام محرر نص مثل Notepad، انسخ <b>private_key</b> و <b>client_email</b> والصق القيم في <b>Alz-Bot > الإعدادات > رسائل الأعمال > تزامن</b>.
    </li>
    <li>
        انتهيت! لاختبار وكيلك، قم بزيارة <a target="_blank" rel="nofollow" href="https://business-communications.cloud.google.com/console/">https://business-communications.cloud.google.com/console</a>، انقر فوق علامتك التجارية لدخول منطقة <b>نظرة عامة</b> الخاصة بك، وتحت <b>معلومات الوكيل > روابط اختبار الوكيل</b>، انقر على الزر المناسب لجهازك المحمول وافتح الرابط من جهازك المحمول.
    </li>
</ul>
<hr class="space-sm" />
<h2 id="gbm-info">مزيد من المعلومات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>يجب أن تحتوي قيم رسائل الغنى مثل الرقائق والأزرار واختيار الرسائل على حد أقصى من 25 حرفًا، ويُسمح بأقصى 13 قيمة.</li>
    <li>يجب أن تكون صورة الصورة الشخصية صورة JPG بحجم 1024x1024 بكسل مع حجم أقصى قدره 50 كيلوبايت.</li>
</ul>
</div>
<hr />
<div id="telegram">
<div class="label label-docs">تيليغرام</div>
<h2>تيليغرام</h2>
<p>الإعدادات أدناه تتعلق بتطبيق تيليغرام.</p>
<hr class="space-sm" />
<h2 id="telegram-installation">التثبيت</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى منطقة الإدارة في Alz-Bot ، ثم انتقل إلى
        <b>الإعدادات > التطبيقات > تيليغرام</b>، وأدخل
        <b>رمز الشراء لـ Techno Viz</b> لتثبيت وتفعيل التطبيق.
        إذا كان لديك النسخة السحابية، فإن التطبيق مفعل بالفعل.
    </li>
    <li>
        اذهب إلى هنا: <a target="_blank" rel="nofollow" href="https://t.me/botfather">https://t.me/botfather</a>.
    </li>
    <li>
        إذا قمت بإنشاء بوت تيليغرام في الماضي، اكتب الأمر <b>/mybots</b> وافتح بوتك، ثم انقر فوق <b>API token</b>.
    </li>
    <li>
        إذا لم تقم بإنشاء بوت تيليغرام من قبل، اكتب الأمر <b>/newbot</b> لإنشاء بوت جديد.
        سيطلب منك BotFather إدخال اسم واسم مستخدم، أدخلهما وقم بإنشاء رمز المصادقة. المزيد من التفاصيل على <a target="_blank" rel="nofollow" href="https://core.telegram.org/bots">https://core.telegram.org/bots</a>.
    </li>
    <li>
        انسخ الرمز والصقه في <b>Alz-Bot > تيليغرام > الرمز</b>، ثم انقر على <b>تزامن الآن</b>. يجب أن يكون موقع الويب الخاص بك يستخدم HTTPS (شهادة SSL)، HTTP غير مدعوم.
    </li>
    <li>
        أنت قد انتهيت. ستظهر جميع الرسائل المرسلة إلى بوت تيليغرام الخاص بك في منطقة الإدارة للدردشة في Alz-Bot.
    </li>
</ul>
<a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
<hr class="space-sm" />
<h2 id="telegram-info">مزيد من المعلومات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        تتم تحويل رسائل الغنى في Alz-Bot تلقائيًا إلى رسائل غنية في تيليغرام عند الإمكان، وإلا فإنها تُزال من الرسالة.
    </li>
    <li>
        تتوافق محادثات تيليغرام والرسائل مع التوجيه والطابور.
    </li>
    <li>
        يتم دعم Dialogflow، بما في ذلك الميزات التالية: استيلاء بشري، رسائل Alz-Bot الغنية، كشف اللغة ومفتاح تبديل لغة الدردشة.
    </li>
    <li>يتم دعم رسالة المتابعة، ولكن إعداد التأخير يتم تجاهله، وتُرسل الرسالة فورًا.</li>
    <li>يتم دعم رسالة الخطوة التالية، ولكن لا يتم إرسال الجدول الزمني.</li>
</ul>
</div>
<hr />
<div id="viber">
<div class="label label-docs">فايبر</div>
<h2>فايبر</h2>
<p>الإعدادات أدناه تتعلق بتطبيق فايبر.</p>
<hr class="space-sm" />
<h2 id="viber-installation">التثبيت</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        من <b>الإعدادات > التطبيقات</b>، انقر فوق <b>فايبر</b> وأدخل مفتاح الترخيص الخاص بك لتثبيت وتفعيل التطبيق.
        إذا كان لديك النسخة السحابية، فإن التطبيق مفعل بالفعل.
    </li>
    <li>
        قم بإنشاء البوت على <a target="_blank" rel="nofollow" href="https://partners.viber.com/account/create-bot-account">https://partners.viber.com/account/create-bot-account</a>.
    </li>
    <li>
        انسخ الرمز والصقه في <b>Alz-Bot > فايبر > الرمز</b>، ثم انقر على <b>تزامن الآن</b>. يجب أن يكون موقع الويب الخاص بك يستخدم HTTPS (شهادة SSL)، HTTP غير مدعوم.
    </li>
    <li>
        أنت قد انتهيت. ستظهر جميع الرسائل المرسلة إلى بوت Viber الخاص بك في منطقة الإدارة للدردشة في Alz-Bot.
    </li>
</ul>
<hr class="space-sm" />
<h2 id="viber-info">مزيد من المعلومات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        تتم تحويل رسائل الغنى في Alz-Bot تلقائيًا إلى رسائل غنية في Viber عند الإمكان، وإلا فإنها تُزال من الرسالة.
    </li>
    <li>
        تتوافق محادثات Viber والرسائل مع التوجيه والطابور.
    </li>
    <li>
        يتم دعم Dialogflow، بما في ذلك الميزات التالية: استيلاء بشري، رسائل Alz-Bot الغنية، كشف اللغة ومفتاح تبديل لغة الدردشة.
    </li>
    <li>يتم دعم رسالة المتابعة، ولكن إعداد التأخير يتم تجاهله، وتُرسل الرسالة فورًا.</li>
    <li>يتم دعم رسالة الخطوة التالية، ولكن لا يتم إرسال الجدول الزمني.</li>
</ul>
</div>
<hr />
<div id="slack">
<div class="label label-docs">سلاك</div>
<h2>Slack</h2>
<p>الإعدادات أدناه تتعلق بتطبيق Slack.</p>
<hr class="space-sm" />
<h2 id="slack-sync">التزامن</h2>
<p>
    لمزامنة Slack، انقر على زر
    <b>بدء التزامن</b> في
    <b>الإعدادات > Slack</b>
    واتبع التعليمات.
</p>
<a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
<h4 id="knowledge-base">هل تواجه مشاكل؟</h4>
<p>قد لا يكون التزامن مع Slack ناجحًا لعدة أسباب؛ فيما يلي أكثرها شيوعًا:</p>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>وصف المشكلة</th>
            <th>الحل</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>يمكنك استقبال رسائل على Slack، ولكنك لا تستطيع إرسال رسائل من Slack إلى Alz-Bot</td>
            <td>
                انتقل إلى
                <b>/alz-bot/apps/slack/post.php</b>
                من متصفحك.
                إذا تلقيت
                خطأ
                <b>403 - ممنوع</b>
                ، فيجب عليك الاتصال بمزود خدمة الاستضافة الخاص بك وطلب منهم ضبط أذونات الملف الصحيحة لهذا الملف و/أو إضافة دور جدار الحماية لمنع جدار الحماية من حظر الملف.
                يجب أن يكون مسموحًا بتنفيذه بحرية دون أي قيود.
                أيضًا، في
                <b>إعدادات مساحة العمل > الأذونات</b>
                يجب أن تسمح لأي شخص بإنشاء قنوات عامة. <a href="../../media/docs/slack-info-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                إذا كان لديك مشكلات إضافية يرجى الاتصال بفريق دعم Slack على <a href="https://api.slack.com/support" target="_blank" rel="nofollow">https://api.slack.com/support</a>.
            </td>
        </tr>
        <tr>
            <td>تعذرت مزامنة Slack</td>
            <td>
                تحقق مرتين مما إذا كنت قد اخترت قناة عامة عند محاولة مزامنة Slack.
                إذا لم تفعل ذلك، جرب مزامنة Slack مرة أخرى، هذه المرة اختيار قناة عامة بدلاً من ذلك.
                القناة العامة هي خيار جيد.
            </td>
        </tr>
    </tbody>
</table>
<h4 id="knowledge-base">أرشفة القنوات يدويًا</h4>
<p>لأرشفة قناة في Slack، اتبع هذه الخطوات:</p>
<ul class="icon-list icon-line icon-docs">
    <li>افتح القناة في Slack التي تريد أرشفتها.</li>
    <li>
        في أعلى اليمين انقر على أيقونة العتاد وحدد
        <b>خيارات إضافية</b>.
        <a href="../../media/docs/slack-archive-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
    <li>
        انقر فوق أيقونة المعلومات في أعلى اليمين من الشاشة، ثم انقر فوق
        <b>أيقونة إضافية</b>
        ، ومن ثم انقر فوق
        <b>خيارات إضافية...</b>.
        انقر فوق
        <b>أرشفة هذه القناة</b>.
        <a href="../../media/docs/slack-archive-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </li>
</ul>
<h4 id="slack-departments">ربط الأقسام</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        احصل على معرفات الأقسام من <b>الإعدادات > متفرقات > الأقسام</b>.
    </li>
    <li>
        احصل على معرفات القنوات عن طريق النقر على زر <b>الحصول على معرفات القنوات</b>.
    </li>
</ul>
<h4 id="slack-user-fields">حقول المستخدم</h4>
<p>
    يتيح لك الإعداد <b>الإعدادات > Slack > حقول المستخدم</b> اختيار التفاصيل التي ترغب في تضمينها في الرسالة المرسلة إلى القناة الرئيسية عندما يرسل مستخدم جديد أول رسالة. يمكنك تضمين سبيكة تفاصيل المستخدم الخاصة بك أو سبيكات الأقسام التالية:
    <b>browser</b>, <b>browser_language</b>, <b>location</b>, <b>email</b>, <b>user_type</b>, <b>token</b>, <b>creation_time</b>, <b>country_code</b>, <b>current_url</b>, <b>os</b>, <b>city</b>, <b>address</b>, <b>postal_code</b>, <b>phone</b>, <b>birthdate</b>, <b>company</b>, <b>timezone</b>, <b>website</b>. الافتراضي: email, browser, browser_language, location.
</p>
<h4 id="slack-info">معلومات</h4>
<ul class="icon-list icon-line icon-docs">
    <li>
        عندما يرسل مستخدم جديد أول رسالة، يتم إرسال رسالة Slack مع تفاصيل المستخدم وزر للانضمام إلى قناة المستخدم إلى القناة الرئيسية التي تم تحديدها أثناء التزامن، أو إلى القناة المرتبطة بقسم المحادثة.
        فقط الحساب على Slack المستخدم أثناء التزامن سينضم تلقائيًا إلى قناة المستخدم، سيتعين على أعضاء Slack الآخرين الانضمام يدويًا عبر الزر.
    </li>
    <li>
        عندما يتم تعيين <b>الإعدادات > Slack > ربط الوكيل</b>، إذا كانت المحادثة مخصصة لقسم، ستتلقى الرسالة فقط الوكلاء المخصصين لذلك القسم، إذا كانت المحادثة مخصصة لوكيل واحد فقط، سيتلقى ذلك الوكيل الرسالة.
    </li>
    <li>
        Slack مجاني للاستخدام. قد تحتاج الشركات الكبيرة إلى خطة اشتراك مدفوعة، المزيد من التفاصيل
        <a href="https://slack.com/intl/en-gb/pricing" target="_blank" rel="nofollow">هنا</a>.
    </li>
    <li>
        تتوافق الإشعارات الفورية مع Slack، عندما يرسل الوكلاء رسائل عبر Slack، يتم إرسال إشعارات الفورية إلى المستخدمين.
    </li>
    <li>
        إذا كنت تستخدم Dialogflow، لن تتم استلام رسائل في Slack إذا كان الروبوت يعرف الجواب. بمجرد تفعيل السيطرة البشرية، يتم إرسال جميع رسائل المحادثة إلى Slack.
    </li>
    <li>
        تطبيق Slack متوافق مع إرسال البريد الإلكتروني وتطبيقات المراسلة.
    </li>
    <li>
        لا يتم دعم حذف أو مغادرة القناة، يتم دعم أرشفة القناة فقط.
    </li>
    <li>
        عند أرشفة محادثة في Alz-Bot، يتم أرشفة القناة المرتبطة في Slack أيضًا.
    </li>
    <li>
        عند الرد عبر Slack على مستخدم، إذا تم إخطار المستخدم بواسطة البريد الإلكتروني أو رسالة نصية، يتم إرسال رسالة Slack لإعلامك.
    </li>
    <li>
        استخدم أمر Slack <b>/archive</b> لأرشفة محادثة من Slack.
    </li>
</ul>
</div>
<hr />
<div id="perfex">
<div class="label label-docs">PERFEX CRM</div>
<h2>Perfex</h2>
<p>الإعدادات أدناه تتعلق بتطبيق Perfex.</p>
<hr class="space-sm" />
<h2 id="perfex-installation">التثبيت</h2>
<p>
    يتطلب التثبيت خطوتين:
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        من <b>الإعدادات > التطبيقات</b>، انقر على <b>Perfex</b> وأدخل رمز الشراء الخاص بك من Techno Viz لتثبيت وتنشيط التطبيق.
        بمجرد تثبيت التطبيق، انتقل إلى
        <b>الإعدادات > Perfex</b> وأدخل معلومات قاعدة البيانات وعنوان URL Perfex.
        يمكنك الحصول على المعلومات من ملف
        <b>application/config/app-config.php</b> في مجلد تثبيت Perfex الخاص بك.
        إذا كنت لا تعرف بادئة Perfex، اتركها فارغة، حيث أن البادئة الافتراضية هي <b>tbl</b>.
    </li>
    <li>
        انتقل إلى منطقة الإدارة في Perfex، ثم انتقل إلى
        <b>الإعدادات > الوحدات</b> وقم بتثبيت وحدة Alz-Bot  عن طريق تحميل الملف
        <b>module.zip</b>.
        بمجرد تثبيت الوحدة، انتقل إلى
        <b>الإعدادات > Alz-Bot </b> وأدخل عنوان URL البرنامج المساعد Alz-Bot . إذا كنت تستخدم نسخة ورد بريس، يجب أن يكون عنوان URL كما يلي:
        <b>https://example.com/wp-content/plugins/alz-bot/alz-bot</b>.
    </li>
</ul>
<p>لعرض Alz-Bot  داخل منطقة الإدارة Perfex، يجب أن يكون Alz-Bot  مثبتًا في نفس النطاق ونفس نظام الملفات لتثبيت Perfex.</p>
<p>إذا كانت لديك مشاكل، أو إذا قمت بتغيير تفاصيل قاعدة بيانات Perfex، تأكد من أن ملف <b>alz-bot/config.php</b> يستخدم تفاصيل قاعدة البيانات الصحيحة لـ Perfex. لن تقوم بتحديث التفاصيل في Alz-Bot  بتحديث التفاصيل في ملف config.php.</p>
</div>
<hr />
<div id="zendesk">
    <div class="label label-docs">Zendesk</div>
    <h2>Zendesk</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق Zendesk.</p>
    <hr class="space-sm" />
    <h2 id="zendesk-installation">التثبيت</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            احصل على <b>النطاق</b> من URL منطقة الإدارة Zendesk الخاص بك، انسخ الجزء الأول من الرابط: https://<b>domain</b>.zendesk.com/. على سبيل المثال، يكون النطاق لـ <b>https://alz-bot.zendesk.com/agent/get-started/ticketing-system/ticketing-intro</b> هو <b>alz-bot</b>.
        </li>
        <li>
            احصل على <b>مفتاح API</b> من <b>القائمة اليسرى > الإدارة > القنوات > API > الإعدادات</b>. انقر فوق <b>إضافة رمز API</b>. <a href="../../media/docs/zendesk-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
        </li>
        <li>
            <b>البريد الإلكتروني</b> هو بريد حسابك في Zendesk.
        </li>
    </ul>
    <hr class="space-sm" />
    <h2 id="zendesk-info">مزيد من المعلومات</h2>
    <ul>
        <li>تتم مزامنة التذاكر التي تم تحويلها بواسطة Alz-Bot  تلقائيًا عند إرسال رسائل جديدة واستلامها في Alz-Bot ، ويتم ربطها بمستخدم Zendesk موجود إذا كان هناك، وإلا سيتم إنشاء مستخدم Zendesk جديد.</li>
        <li>يقوم Alz-Bot  بربط مستخدمي Zendesk بمستخدمي Alz-Bot  عبر البريد الإلكتروني أو رقم الهاتف.</li>
    </ul>
</div>
<hr />
<div id="whmcs">
    <div class="label label-docs">WHMCS</div>
    <h2>WHMCS</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق WHMCS.</p>
    <hr class="space-sm" />
    <h2 id="whmcs-installation">التثبيت</h2>
    <p>
        يتطلب العملية تثبيتين، أحدهما هو إضافة WHMCS، والآخر هو تطبيق Alz-Bot .
    </p>
    <h4>تثبيت التطبيق</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            انتقل إلى منطقة الإدارة في Alz-Bot ، ثم انتقل إلى
            <b>الإعدادات > التطبيقات > WHMCS</b>، وأدخل
            <b>مفتاح الترخيص</b> لتثبيت التطبيق.
            بمجرد تثبيت التطبيق، انتقل إلى
            <b>الإعدادات > Whmcs</b> وأدخل معلومات قاعدة البيانات وعنوان URL WHMCS.
        </li>
    </ul>
    <h4>تثبيت إضافة WHMCS</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            أدخل المجلد
            <b>alz-bot</b> داخل
            <b>addon.zip</b> (قم بتنزيلها
            <a href="../../works/docs/files/whmcs/addon.zip">هنا</a>) في الملف
            <b>/modules/addons/</b> الخاص بتثبيت WHMCS الخاص بك.
        </li>
        <li>
            انتقل إلى
            <b>التكوين > إعدادات النظام > وحدات الإضافات</b>، ابحث عن وحدة Alz-Bot  وانقر على
            <b>تفعيل</b>. تفاصيل إضافية على
            <a target="_blank" rel="nofollow" href="https://docs.whmcs.com/Addon_Modules_Management#Installing_An_Addon">https://docs.whmcs.com/Addon_Modules_Management#Installing_An_Addon</a>
        </li>
        <li>
            انقر فوق زر
            <b>تكوين</b> وأدخل عنوان URL البرنامج المساعد Alz-Bot .
        </li>
    </ul>
    <h4>كيفية التحديث</h4>
    <p>
        تحديث تطبيق WHMCS في Alz-Bot  سهل، يمكنك تمكين التحديثات التلقائية أو تحديثه يدويًا. التفاصيل
        <a href="#updates">هنا</a>. لتحديث إضافة WHMCS ستحتاج إلى تنزيل الإصدار الأحدث من الإضافة من
        <a href="../../works/docs/files/whmcs/addon.zip">https://alz-bot.com/works/docs/files/whmcs/addon.zip</a> واستبدال مجلد
        <b>/modules/addons/alz-bot/</b> في تثبيت WHMCS الخاص بك بالنسخة الجديدة التي تم تنزيلها للتو.
    </p>
    <p>إذا كانت لديك مشاكل، أو إذا قمت بتغيير تفاصيل قاعدة بيانات WHMCS، تأكد من أن ملف <b>alz-bot/config.php</b> يستخدم تفاصيل قاعدة البيانات الصحيحة لـ WHMCS. لن تقوم بتحديث التفاصيل في Alz-Bot  بتحديث التفاصيل في ملف config.php.</p>
</div>
<hr />
<div id="ump">
    <div class="label label-docs">ULTIMATE MEMBERSHIP PRO</div>
    <h2>Ultimate Membership Pro</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق Ultimate Membership Pro.</p>
    <hr class="space-sm" />
    <h2 id="ump-users">مزامنة المستخدمين</h2>
    <p>
        يتم مزامنة المستخدمين الجدد تلقائيًا. لمزامنة المستخدمين الحاليين يدويًا، انتقل إلى
        <b>الإعدادات > ورد بريس > مزامنة المستخدمين</b> وانقر فوق
        <b>استيراد المستخدمين</b>.
    </p>
    <hr class="space-sm" />
    <h2 id="ump-info">مزيد من المعلومات</h2>
    <ul class="icon-list icon-line icon-docs">
    <li>
    لتقييد الوصول إلى خطة معينة فقط، استخدم هذا الرمز الاختصاري
    <b>[ihc-hide-content ihc_mb_type="show" ihc_mb_who="4" ihc_mb_template="2"]&lt;script id="sbinit" src="YOUR-URL/alz-bot/alz-bot/js/main.js">&lt;/script>[/ihc-hide-content]</b>
    قم بتبديل <b>4</b> بمستوى المستخدم الذي تريده و <b>YOUR-URL</b> بعنوان ورد بريس الخاص بك في مجلد الإضافات. كما يجب عليك التحقق من <b>الإعدادات > ورد بريس > التهيئة اليدوية</b>.
</li>
</ul>
</div>
<hr />
<div id="armember">
    <div class="label label-docs">ARMEMBER</div>
    <h2>ARMember</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق ARMember.</p>
    <hr class="space-sm" />
    <h2 id="armember-users">مزامنة المستخدمين</h2>
    <p>
        يتم تزامن المستخدمين الجدد تلقائيًا. لمزامنة المستخدمين الحاليين يدويًا، انتقل إلى
        <b>الإعدادات > ورد بريس > مزامنة المستخدمين</b> وانقر على
        <b>استيراد المستخدمين</b>.
    </p>
    <hr class="space-sm" />
    <h2 id="armember-info">مزيد من المعلومات</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            المستخدم هو عضو مدفوع فقط إذا كان لديه على الأقل خطة مدفوعة نشطة غير منتهية.
        </li>
    </ul>
</div>
<hr />
<div id="active-ecommerce">
    <div class="label label-docs">Active eCommerce</div>
    <h2>Active eCommerce</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق Active eCommerce.</p>
    <hr class="space-sm" />
    <h2 id="active-ecommerce-installation">التثبيت</h2>
    <p>
        العملية تتطلب تثبيتين، واحد لتطبيق Alz-Bot ، وواحد للتثبيت في Active eCommerce.
    </p>
    <h4>تثبيت التطبيق</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            انتقل إلى منطقة الإدارة في Alz-Bot ، ثم اذهب إلى
            <b>الإعدادات > التطبيقات > Active eCommerce</b>، وأدخل
            <b>مفتاح الترخيص</b> لتثبيت التطبيق.
            بمجرد تثبيت التطبيق، انتقل إلى
            <b>الإعدادات > Active eCommerce</b> وأدخل معلومات قاعدة البيانات، وعنوان Active eCommerce، والإعدادات الأخرى.
        </li>
        <li>
            يمكن العثور على المفتاح السري في ملف
            <b>.env</b> الموجود في الدليل الرئيسي لـ Active eCommerce. انسخ قيمة APP_KEY.
            <a href="../../media/docs/active-ecommerce-env.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
        </li>
        <li>إذا كان لديك مشكلات، تأكد من أن ملف <b>alz-bot/config.php</b> يستخدم تفاصيل قاعدة بيانات Active eCommerce الصحيحة.</li>
    </ul>
    <h4>التثبيت في Active eCommerce</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>
            قم بتحرير الملف
            <b>\resources\views\frontend\inc\footer.blade.php</b> في دليل Active eCommerce وأدخل الكود أدناه فور افتتاح تسمية
            <b>&lt;footer</b>. قم بتبديل
            <b>[YOUR-SITE]</b> بعنوان تثبيت Alz-Bot الخاص بك.
            <a href="../../media/docs/active-ecommerce-footer.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
        </li>
    </ul>
    <pre class="prettyprint">
        &lt;script src="https://[YOUR-SITE]/js/min/jquery.min.js">&lt;/script>
        &lt;script id="sbinit" src="https://[YOUR-SITE]/js/main.js">&lt;/script>
        @php
        $sb_code = '';
        $sb_cart = false;
        if (Auth::check() && !isAdmin()) $sb_code = 'var SB_AECOMMERCE_ACTIVE_USER = ' . Auth::user()->id . ';';
        if (isset($detailedProduct)) $sb_code .= 'var SB_DEFAULT_AGENT = "aecommerce-' . $detailedProduct->user->id . '";';
        if (auth()->user() != null) $sb_cart = \App\Models\Cart::where('user_id', Auth::user()->id)->get(); else { $temp_user_id = Session()->get('temp_user_id'); if ($temp_user_id) { $sb_cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get(); }}
        if ($sb_cart && count($sb_cart) > 0) { $sb_code .= 'var SB_AECOMMERCE_CART = ['; foreach ($sb_cart as $key => $item) { $sb_code .= '["' . $item['product_id'] . '", "' . $item['price'] . '", "' . $item['quantity'] . '"],'; } $sb_code = substr($sb_code, 0, -1) . '];'; }
        if ($sb_code != '') echo '&lt;script>' . $sb_code . '&lt;/script>';
        @endphp
    </pre>
    <h4>كيفية التحديث</h4>
    <p>
        تحديث تطبيق Active eCommerce في Alz-Bot سهل، يمكنك تمكين التحديثات التلقائية أو التحديث يدويًا. تفاصيل
        <a href="#updates">هنا</a>. إذا قمت بتحديث Active eCommerce، ستحتاج إلى إدراج الكود أعلاه مرة أخرى في الملف
        <b>footer.blade.php</b>.
    </p>
    <hr class="space-sm" />
    <h2 id="active-ecommerce-sellers">دردشة البائعين</h2>
    <p>
        لفرض رؤية البائعين لمحادثات المستخدمين الذين يكتبون من صفحات المنتجات الخاصة بهم، قم بتمكين الخيار
        <b>
            الإعدادات > متنوعة > إخفاء محادثات الوكلاء الآخرين
        </b>. بعد ذلك، انقر فقط على الزر
        <b>الإعدادات > Active eCommerce > استيراد البائعين</b> وانتهت!
        سيتم تسجيل البائعين في Alz-Bot ويمكنهم تسجيل الدخول إلى منطقة الإدارة.
    </p>
    <p>يمكن للمسؤولين دائمًا رؤية محادثات جميع الوكلاء (البائعين).</p>
</div>
                        <hr />
                        <div id="martfury">
    <div class="label label-docs">Martfury</div>
    <h2>Martfury</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق Martfury.</p>
    <hr class="space-sm" />
    <h2 id="martfury-installation">التثبيت</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            انتقل إلى منطقة الإدارة في Alz-Bot، ثم انتقل إلى
            <b>Settings > Apps > Martfury</b>، وأدخل
            <b>مفتاح الترخيص</b> لتثبيت التطبيق.
        </li>
        <li>
            بمجرد تثبيت التطبيق، انتقل إلى
            <b>Settings > Martfury</b> وأدخل <b>معلومات قاعدة البيانات</b>، <b>Martfury URL</b>، <b>مفتاح السر</b>.
            احصل على هذه المعلومات من ملف
            <b>.env</b> الذي يقع في الدليل الرئيسي لـ Martfury.
        </li>
        <li>
            قم بتحديد مسار Martfury في <b>Settings > Martfury > Martfury path</b>. احصل على هذه المعلومات عن طريق تحميل <a href="../docs/files/path.zip" target="_blank">هذا الملف</a> في الدليل <b>/public/</b> في الدليل الرئيسي لـ Martfury، بعد التحميل قم بفتحه عبر المتصفح (على سبيل المثال https://shop.com/public/path.php).
        </li>
        <li>لعرض الدردشة على الموقع، أدخل رمز Alz-Bot لـ <a href="#installation" class="scroll-to">تثبيت PHP</a> في <b>Martfury Admin > Appearance > Custom JS > Footer JS</b>. لا تتضمن jQuery.</li>
        <li>إذا كنت تواجه مشكلات، تأكد من أن ملف <b>alz-bot/config.php</b> يستخدم تفاصيل قاعدة بيانات Martfury الصحيحة.</li>
    </ul>
    <h4>كيفية التحديث</h4>
    <p>
        تحديث تطبيق Martfury في Alz-Bot سهل، يمكنك تمكين التحديثات التلقائية أو تحديثه يدويًا. التفاصيل
        <a href="#updates" class="scroll-to">هنا</a>.
    </p>
    <hr class="space-sm" />
    <h2 id="active-ecommerce-sellers">دردشة البائعين</h2>
    <p>
        لفرض عرض فقط لمتاجر رؤية المحادثات الخاصة بالمستخدمين الذين يكتبون من صفحات منتجاتهم، اتبع الخطوات التالية.
    </p>
    <ul class="icon-list icon-line icon-docs">
        <li>
            تحقق من الخيارات <b>Settings > Martfury > Private chat</b>, <b>Settings > Chat > Disable dashboard</b>, <b>Settings > Chat > Allow only one conversation</b>.
        </li>
        <li>
            في <b>Settings > Martfury > Import vendors</b> قم بتوريد جميع البائعين.
        </li>
        <li>
            في <b>Settings > Martfury > Private chat linking</b> ربط كل بائع بالمتجر الصحيح. يمكنك الحصول على معرفات البائعين من <b>Users > Agents and Admins</b>.
        </li>
    </ul>
</div>
<hr />
<div id="line">
    <div class="label label-docs">LINE</div>
    <h2>LINE</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق LINE.</p>
    <hr class="space-sm" />
    <h2 id="line-installation">التثبيت</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            قم بتسجيل الدخول على <a target="_blank" rel="nofollow" href="https://developers.line.biz/console/">https://developers.line.biz/console/</a> أو قم بإنشاء حساب جديد.
        </li>
        <li>
            قم بإنشاء <b>موفر</b> جديد ثم <b>قناة واجهة برمجة التطبيقات الرسائل</b> جديدة، واختر <b>واجهة برمجة التطبيقات الرسائل</b> كنوع قناة.
        </li>
        <li>
            من منطقة <b>Basic settings</b> في القناة، انسخ <b>Channel secret</b> والصقه في <b>Alz-Bot > Settings > Line > Synchronization > Channel secret</b>.
        </li>
        <li>
            من منطقة <b>Messaging API</b> في القناة، قم بإنشاء <b>Channel access token (long-lived)</b>، انسخه والصقه في <b>Alz-Bot > Settings > Line > Synchronization > Access token</b>.
        </li>
        <li>
            أدخل عنوان الويب الخاص بك في <b>Webhook URL</b> وانقر فوق <b>Verify</b>. احصل على عنوان الويب هذا من <b>Alz-Bot > Settings > Line > Synchronization > Webhook URL</b>.
        </li>
        <li>
            قم بتمكين <b>Use webhook</b>.
        </li>
        <li>
            مسح <b>رمز الاستجابة السريعة (QR code)</b> باستخدام تطبيق LINE الخاص بك لبدء الكتابة إلى قناتك.
        </li>
        <li>
            انتهيت. ستظهر جميع الرسائل المرسلة إلى حساب LINE الخاص بك في منطقة الدردشة الإدارية في Alz-Bot.
        </li>
    </ul>
    <hr class="space-sm" />
    <h2 id="line-info">مزيد من المعلومات</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            لديك 7 أيام من تاريخ إرسال رسالة المستخدم النهائي من WhatsApp للرد على الرسالة.

        </li>
        <li>
            لا يتم دعم الملصقات.
        </li>
        <li>
            تحول رسائل Alz-Bot الغنية تلقائيًا إلى رسائل LINE الغنية عند الإمكان، وإلا يتم إزالتها من الرسالة.
        </li>
        <li>
            تتوافق المحادثات والرسائل في LINE مع التوجيه والانتظار.
        </li>
        <li>
            يتم دعم Dialogflow، بما في ذلك الميزات التالية: استيلاء الإنسان، رسائل Alz-Bot الغنية، اكتشاف اللغة ومحول لغة الدردشة.
        </li>
        <li>
            يتم دعم رسالة المتابعة، ولكن يتم تجاهل إعداد التأخير، حيث يتم إرسال الرسالة فورا.
        </li>
        <li>
            يتم دعم رسالة غير متصلة، ولكن لا يتم إرسال الجدول الزمني.
        </li>
    </ul>
</div>
<hr />
<div id="wechat">
    <div class="label label-docs">WECHAT</div>
    <h2>WeChat</h2>
    <p>الإعدادات أدناه تتعلق بتطبيق WeChat.</p>
    <hr class="space-sm" />
    <h2 id="wechat-installation">التثبيت</h2>
    <ul class="icon-list icon-line icon-docs">
        <li>
            من <b>Settings > Apps</b>، انقر على <b>WeChat</b> وأدخل مفتاح الترخيص لتثبيت وتنشيط التطبيق.
            إذا كانت لديك النسخة السحابية، فإن التطبيق نشط بالفعل.
        </li>
        <li>
            قم بزيارة <a target="_blank" rel="nofollow" href="https://mp.weixin.qq.com/cgi-bin/readtemplate?t=register/step1_tmpl&lang=en_US">https://mp.weixin.qq.com/cgi-bin/readtemplate?t=register/step1_tmpl&lang=en_US</a> وقم بتسجيل حساب <b>Service account</b>.
        </li>
        <li>
            بعد التسجيل، انتقل إلى منطقة <b>Official accounts</b> ومن القائمة اليسرى انقر على <b>Settings and development > WeChat verification</b>. يجب عليك إكمال التحقق، ويستغرق الأمر بضعة أسابيع ويكلف 99 دولارًا أمريكيًا، أو 300 يوان للكيانات الصينية.
        </li>
        <li>
            من القائمة اليسرى انقر على <b>Settings and development > Basic configuration</b> وانسخ <b>Developer ID (App ID)</b>، <b>Developer Password (App Secret)</b>. الصق المعلومات في <b>Alz-Bot > Settings > WeChat</b>.
        </li>
        <li>
            من القائمة اليسرى انقر على <b>Settings and development > Basic configuration</b> وأكمل تكوين الخادم (服务器配置(已启用).
            في <b>Server Address (URL)</b> أدخل العنوان الذي تحصل عليه من <b>Alz-Bot > Settings > WeChat > Synchronization > Get configuration URL</b>. في <b>Token</b> قم بإدخال أي قيمة تريدها، يجب أن تُدخل نفس القيمة في <b>Alz-Bot > Settings > WeChat > Token</b>.
        </li>
        <li>
            انتهيت. ستظهر جميع الرسائل المرسلة إلى حساب WeChat الخاص بك في منطقة الدردشة الإدارية في Alz-Bot.
        </li>
    </ul>
    <hr class="space-sm" />
    <h2 id="wechat-info">مزيد من المعلومات</h2>
                            <ul class="icon-list icon-line icon-docs">
                            <li>
    إذا كنت قد تلقيت خطأ مثل <b>{"errcode":41001,"errmsg":"access_token missing rid: 631111-470b3b22-48553870"}</b> يجب
    عليك إضافة عنوان IP لخادمك إلى <b>Official Account > Settings and Development > Basic Configuration > IP whitelist</b>.
</li>
<li>
    لا يتم دعم مرفقات WeChat والموقع ولا يتم استلامها بواسطة Alz-Bot.
</li>
<li>
    لا يتم دعم الروابط في WeChat، حيث يتم تحويلها إلى نصوص.
</li>
<li>
    تُحول رسائل Alz-Bot الغنية تلقائيًا إلى رسائل WeChat الغنية عند الإمكان، وإلا يتم إزالتها من الرسالة.
</li>
<li>
    محادثات ورسائل WeChat متوافقة مع التوجيه والانتظار.
</li>
<li>
    يتم دعم Dialogflow، بما في ذلك الميزات التالية: Human takeover، رسائل Alz-Bot الغنية، كشف اللغة ومحول لغة الدردشة.
</li>
<li>يتم دعم رسالة المتابعة، ولكن إعداد التأخير يتم تجاهله، حيث يتم إرسال الرسالة فورًا.</li>
<li>يتم دعم رسالة الخروج عن الخدمة، ولكن لا يتم إرسال الجدول الزمني.</li>
</ul>
</div>
<hr />
<div id="more-settings">
    <div class="label label-docs">إعدادات إضافية</div>
    <h2>إعدادات إضافية</h2>
    <p>تحتوي هذه القسم على مساعدة لإعدادات أخرى غير المذكورة أعلاه.</p>
    <hr class="space-sm" />
    <h2 id="pwa">تطبيق الويب التقدمي</h2>
    <p>
        منطقة إدارة Alz-Bot هي تطبيق ويب تقدمي، مما يعني أنه يمكنك تثبيته على أجهزة سطح المكتب وأجهزة Mac أو الهواتف المحمولة واستخدامه كتطبيق كامل الوظائف.
        ملحوظة: تم تحسين هذه الميزة لمتصفح Google Chrome.
    </p>
    <h4>تثبيت على سطح المكتب</h4>
    <p>
        ادخل إلى منطقة الإدارة الخاصة بك (على سبيل المثال: https://www.your-site.com/alz-bot/admin.php)، وانقر فوق
        <b>+</b> على أعلى يمين شريط عنوان URL في متصفح Chrome الخاص بك.
        <a href="../../media/docs/pwa.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
    </p>
    <h4>تثبيت على الهاتف المحمول - الإصدار السحابي فقط</h4>
    <p>
        إذا كنت تستخدم الإصدار السحابي من Alz-Bot يمكنك استخدام التطبيقات المتاحة على Google Play ومتجر Apple.<br /><br />
        <a href="https://play.google.com/store/apps/details?id=alz-bot" target="_blank" rel="nofollow">Google Play</a>
    </p>
    <h4>تثبيت على الهاتف المحمول</h4>
    <ul class="icon-list icon-line icon-docs">
        <li>ادخل إلى منطقة الإدارة الخاصة بك باستخدام Google Chrome (على سبيل المثال: https://www.your-site.com/alz-bot/admin.php)</li>
        <li>
            افتح إعدادات متصفحك.
        </li>
        <li>
            انتقل إلى الأسفل وانقر على
            <b>إضافة إلى الشاشة الرئيسية.</b>
        </li>
        <li>قم بتأكيد العملية بالنقر على إضافة.</li>
    </ul>
    <h4>تثبيت على ورد بريس</h4>
    <p>لتثبيت تطبيق الويب التقدمي على ورد بريس، يجب عليك الوصول إلى منطقة الإدارة مباشرة عبر الرابط:</p>
    <pre>https://www.your-site.com/wp-content/plugins/alz-bot/alz-bot/admin.php</pre>
    <p>قم بتغيير "your-site" بعنوان URL لموقع الويب الخاص بك وكذلك تذكر أن اسم مجلد "wp-content" قد يكون مختلفًا عن تلك التي تم تثبيتها لديك.</p>
    <h4>تغيير أيقونة واسم تطبيق الويب التقدمي</h4>
    <p>
        قم بتنزيل ملف <b>manifest.json</b> <a href="../../works/docs/files/manifest.json" target="_blank">هنا</a>.
        قم بتحريره واستبدل <b>YOUR NAME</b> باسم العلامة التجارية الخاصة بك، واستبدل <b>YOUR NAME DESCRIPTION</b> بأي نص تريده، واستبدل <b>example.png</b> بعنوان URL النسبي لرمز الخاص بك،
        يجب أن يكون حجم الرمز 512 × 512 بكسل.
        بعد الانتهاء من تحرير الملف، قم بنقله إلى مجلد تثبيت Alz-Bot نفسه، نفس المجلد الذي يوجد فيه ملف admin.php.
        يرجى ملاحظة أنه نظرًا لأن هذه هي تخصيصات، فإن دعمنا لا يغطيها، إذا كنت بحاجة إلى مساعدة يمكنك <a href="../../hire-us">توظيفنا</a>.
    </p>
    <hr class="space" />
    <h2 id="keyboard">اختصارات لوحة المفاتيح</h2>
    <p>
        اختصارات لوحة المفاتيح في منطقة الإدارة مفعلة على كل من أجهزة الكمبيوتر وأجهزة MAC وتعمل على النحو التالي:
    </p>
    <table class="table table-border docs-table">
        <thead>
            <tr>
                <th>اختصار</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <pre>ENTER</pre> أو
                    <pre>SPACE</pre>
                </td>
                <td>
                    تأكيد أو إغلاق تنبيه الحوار؛ نفس الشيء الذي يحدث عند النقر على
                    <b>OK</b>.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>ESC</pre> أو
                    <pre>CANCEL</pre>
                </td>
                <td>
                    رفض تنبيه الحوار وإغلاقه.
                </td>
            </tr>
            <tr>
                <td>
                    <b>SHIFT + ENTER</b> أو <pre>CTRL + ENTER</pre>
                </td>
                <td>
                    إضافة فاصلة للسطر إلى رسالة. هذا يعمل فقط لمحرر الإدارة.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>ESC</pre>
                </td>
                <td>
                    إغلاق صندوق الإضاءة.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>CANCEL</pre>
                </td>
                <td>
                    في منطقة محادثات الإدارة، قم بأرشفة محادثة أو حذفها.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>CTRL + UP/DOWN ARROW</pre>
                </td>
                <td>
                    في منطقة محادثات الإدارة، انتقل بين محادثات القائمة.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>CTRL + RIGHT/LEFT ARROW</pre>
                </td>
                <td>
                    في منطقة مستخدمي الإدارة، انتقل بين المستخدمين.
                </td>
            </tr>
            <tr>
                <td>
                    <pre>CTRL + V</pre>
                </td>
                <td>
                    لصق صورة من الحافظة وإرسالها كرسالة.
                </td>
            </tr> <tr> </tr>
        </tbody>
    </table>
    <hr class="space" />
    <h2 id="config">ملف التكوين</h2>
    <p>
        ملف
        <b>config.php</b> هو ملف خاص يحتوي على تفاصيل تسجيل الدخول إلى قاعدة البيانات MySQL وإعدادات أخرى مهمة.
        يتم إنشاء معظم الإعدادات تلقائيًا، ولكن بعضها اختياري.
        يمكنك إضافة الإعدادات التالية:
    </p>
    <table class="table table-border docs-table">
        <thead>
            <tr>
                <th>الرمز</th>
                <th>الوصف</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
    قم بتغيير دليل التحميل (الدليل الافتراضي هو: /alz-bot/uploads/).
    أدخل عنوان URL: على سبيل المثال، https://your-site.com/myuploads/.
    لهذا الإعداد، تحتاج أيضًا إلى تعريف SB_UPLOAD_PATH.
</td>
</tr>
<tr>
    <td>
        <pre>define('SB_UPLOAD_PATH', 'YOUR-PATH')</pre>
    </td>
    <td>
        قم بتغيير مسار دليل التحميل (المسار الافتراضي هو: /alz-bot/uploads/).
        أدخل المسار: على سبيل المثال، C:\xampp\htdocs\uploads. العثور على المسار الجذري لموقع الويب الخاص بك قد يكون أمرًا صعبًا قليلاً.
        يمكنك محاولة نسخ المسار المعروض في عميل FTP الخاص بك أو الاتصال بمزود خدمة استضافة الويب للحصول على دعم إضافي.
    </td>
</tr>
<tr>
    <td>
        <pre>$GLOBALS['SB_LOCAL_SETTINGS'] = []</pre>
    </td>
    <td>
        قم بتجاوز الإعدادات الافتراضية. القيمة هي مصفوفة من المفاتيح والقيم، كل مفتاح هو إعداد، على سبيل المثال، <b>["registration-required" => [true]]</b>.
        اعرض مثالًا <a href="../docs/files/settings.txt" target="_blank">هنا</a>.
        احصل على قائمة الإعدادات من <b>resources/json/settings.json</b> والملفات <b>settings.json</b> داخل مجلدات التطبيق.
    </td>
</tr>
</tbody>
</table>
<hr class="space" />
<h2 id="cron-jobs">وظائف Cron</h2>
<ul class="icon-list icon-line icon-docs">
    <li>تُشغل وظائف Cron بواسطة أول مستخدم يزور الموقع في أي ساعة من اليوم.</li>
    <li>تُشغل وظائف Cron كل 60 دقيقة، ولكن قد يستغرق الأمر وقتًا أطول أو يمكن أن يستغرق وقتًا أقل أيضًا، بالنسبة لحركة موقع الويب الخاص بك.</li>
    <li>نظرًا لأن وظائف Cron تُبدأ بواسطة المستخدمين، إذا كان لديك أقل من زائر واحد في الدقيقة، فقد يستغرق الأمر وقتًا أطول. طالما يوجد مستخدم واحد على الأقل نشط على الموقع، يتم ضمان التنفيذ في كل دقيقة.</li>
    <li>
        يمكنك تسريع تنفيذ وظائف Cron عن طريق تشغيلها يدويًا عبر
        <a href="https://alz-bot.com/works/docs/api/web#cron-jobs">واجهة برمجة التطبيقات عبر الويب</a>، أو
        <a href="https://alz-bot.com/works/docs/api/php#cron_jobs">واجهة برمجة التطبيقات في PHP</a>.
    </li>
</ul>
<hr class="space" />
<h2 id="logs">سجلات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>يتم حفظ ملف السجل في دليل تثبيت Alz-Bot.</li>
    <li>تسجل السجلات الإجراءات التالية للوكلاء والمسؤولين: إرسال رسالة، حذف رسالة، أرشفة محادثة، حذف محادثة، استعادة محادثة، تخصيص محادثة لوكيل، تخصيص محادثة لقسم، تحديث مستخدم، حذف مستخدم.</li>
</ul>
<hr class="space" />
<h2 id="supervisor">المشرف</h2>
<ul class="icon-list icon-line icon-docs">
    <li>يجب أن يكون المشرفون مسؤولين.</li>
    <li>أضف عدة مشرفين عن طريق إضافة معرفات المسؤول المفصولة بفواصل.</li>
</ul>
<hr class="space" />
<h2 id="url-parameters">معلمات URL</h2>
<h4>الدردشة الأمامية</h4>
<p>
    تسمح معلمات URL للدردشة بأداء إجراءات معينة عند تحميل الصفحة. لاستخدامها، قم بإلحاق معلمات URL أدناه بأي عنوان URL على موقع الويب الخاص بك الذي يعرض الدردشة.
    على سبيل المثال، https://example.com/?conversation=1234
</p>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>معلمة URL</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>?token=TOKEN</pre>
            </td>
            <td>
                قم بتسجيل دخول مستخدم موجود. استبدل TOKEN برمز المستخدم.
            </td>
        </tr>
        <tr>
            <td>
                <pre>?conversation=ID</pre>
            </td>
            <td>
                افتح محادثة. استبدل ID بمعرف المحادثة.
                السمة <b>token</b> مطلوبة للمستخدمين غير المسجلين.
            </td>
        </tr>
        <tr>
            <td>
                <pre>?chat=open</pre>
            </td>
            <td>
                افتح الدردشة.
            </td>
        </tr>
    </tbody>
</table>
<h4>منطقة الإدارة</h4>
<p>
    تسمح معلمات URL لمنطقة الإدارة بأداء إجراءات معينة عند تحميل الصفحة. لاستخدامها، قم بإلحاق معلمات URL أدناه بعنوان URL الخاص بالإدارة الخاص بك.
    على سبيل المثال، https://example.com/alz-bot/admin.php?conversation=1234
</p>
<table class="table table-border docs-table">
    <thead>
        <tr>
            <th>معلمة URL</th>
            <th>الوصف</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre>?conversation=ID</pre>
            </td>
            <td>
                افتح محادثة في منطقة المحادثات. استبدل ID بمعرف المحادثة.
            </td>
        </tr>
        <tr>
            <td>
                <pre>?user=ID</pre>
            </td>
            <td>
                افتح مربع ملف التعريف لمستخدم. استبدل ID بمعرف المستخدم.
            </td>
        </tr>
        <tr>
            <td>
                <pre>?setting=ID</pre>
            </td>
            <td>
                افتح إعدادًا في منطقة الإعدادات. استبدل ID بمعرف الإعداد.
            </td>
        </tr>
        <tr>
            <td>
                <pre>?report=ID</pre>
            </td>
            <td>
                افتح تقريرًا في منطقة التقارير. استبدل ID بمعرف التقرير.
            </td>
        </tr>
        <tr>
            <td>
                <pre>?area=name</pre>
            </td>
            <td>
                افتح منطقة في الإدارة. استبدل name بالتالي: conversations، users، settings، reports.
            </td>
        </tr>
    </tbody>
</table>
<hr class="space" />
<h2 id="zapier">Zapier</h2>
<p>
    قم بدمج Zapier مع Alz-Bot عبر اتباع الخطوات أدناه. تعتمد التكامل على webhooks Alz-Bot، حيث يُعتبر كل webhook مشغلًا في Zapier، لذا لديك أكثر من 15 مشغلًا متاحًا في Zapier، لمزيد من التفاصيل، قم بزيارة <a href="api/web#Webhooks" target="_blank">صفحة الويبهوك</a>.
</p>
<ul class="icon-list icon-line icon-docs">
    <li>
        انتقل إلى <a href="https://developer.zapier.com/" target="_blank" rel="nofollow">https://developer.zapier.com/</a> وقم بتسجيل الدخول، أو قم بإنشاء حساب جديد.
    </li>
    <li>
        قم بإنشاء تكامل جديد عن طريق النقر على <b>بدء تكامل Zapier</b>، أو قم بزيارة <a href="https://developer.zapier.com/app/new" target="_blank" rel="nofollow">https://developer.zapier.com/app/new</a>. قم بملء جميع الحقول المطلوبة، مثل الاسم والوصف، وانقر على <b>إنشاء</b>، يمكنك إدخال أي نص تريده، ولكن احفظ اسم التطبيق في اعتبارك لأنك ستحتاج إليه لاحقًا.
    </li>
    <li>
        انقر على القائمة اليسرى <b>Triggers</b> ثم <b>Add Trigger</b>.
    </li>
    <li>
        قم بملء جميع الحقول المطلوبة، مثل المفتاح والوصف، وانقر على <b>حفظ والمتابعة</b>، يمكنك إدخال أي نص تريده.
    </li>
    <li>
        في الأعلى انقر على <b>تكوين API</b>، اختر <b>REST Hook</b> كـ <b>نوع المشغل</b>، وانقر على <b>حفظ</b>.
    </li>
    <li>
    ارجع إلى منطقة <b>الإعدادات</b> في المشغل، أو انتقل إلى <a href="https://zapier.com/app/zaps" target="_blank" rel="nofollow">https://zapier.com/app/zaps</a>، وانقر على <b>إنشاء Zap</b>.
</li>
<li>
    ابحث عن تطبيقك الذي تم إنشاؤه حديثًا عن طريق إدخال اسم التطبيق وانقر عليه. في <b>حدث المشغل</b>، حدد المشغل الخاص بك وانقر على <b>المتابعة</b>.
</li>
<li>
    انسخ <b>عنوان URL للويبهوك</b>، ثم انقر على <b>المتابعة</b>، ومن ثم ادخل إلى منطقة إدارة Alz-Bot وأدخله في <b>الإعدادات > متفرقات > ويبهوك > عنوان URL</b>، قم بتفعيل الويبهوك، احفظ الإعدادات وأعد تحميل Alz-Bot.
</li>
<li>
    قم بإجراء شيء لتحفيز ويبهوك مثل إرسال رسالة أو إنشاء مستخدم جديد، ثم انتقل إلى Zapier وانقر على <b>تجربة المشغل</b> ويجب أن ترى بيانات ويبهوك Alz-Bot. انقر على <b>المتابعة</b>.
</li>
<li>
    انقر على الزر الأيمن <b>التصفية</b> وأعد ضبط التصفية لتحفيز التكامل فقط إذا كانت المتغيرات موجودة.
    تحتاج إلى التصفية لأن Alz-Bot سيُرسل جميع ويبهوك إلى جميع الـ zaps.
    مثال: إذا كان يرغب زاب الخاص بك في دمج رسائل Alz-Bot ، فستحتاج إلى ضبط التصفية للمتابعة فقط إذا كان المتغير <b>message</b> موجودًا.
</li>
<li>
    انقر على <b>المتابعة</b>، أو <b>+</b> وأضف تكاملك.
</li>
<li>
    لاستخدام عدة zaps وويبهوك، ستحتاج إلى تحديث <b>الإعدادات > متفرقات > ويبهوك > عنوان URL</b> وأضف معرفات zap الجديدة، مفصولة بفواصل.
    مثال: إذا كان لديك زابين مع عناوين URL <b>https://hooks.zapier.com/hooks/catch/10352851/bbad21f/</b> و <b>https://hooks.zapier.com/hooks/catch/10352851/aaaa66t/</b>، يجب أن يكون العنوان URL <b>https://hooks.zapier.com/hooks/catch/10352851/bbad21f,aaaa66t/</b>.
</li>
</ul>
<hr class="space" />
<h2 id="more-info">مزيد من المعلومات</h2>
<ul class="icon-list icon-line icon-docs">
    <li>
        إذا قمت بتغيير اسم مجلد البرنامج الإضافي بعد التثبيت، يجب عليك تحديثه في الثابتة
        <b>SB_URL</b> في ملف
        <b>config.php</b>.
    </li>
    <li>
        لا تتم إرسال رسائل الترحيب إلى slack ويتم أرشفة المحادثات التي تحتوي فقط على رسالة الترحيب (وبدون استجابة) تلقائيًا.
    </li>
    <li>ترسل رسائل المتابعة مرة واحدة فقط كحد أقصى كل 24 ساعة.</li>
    <li>يظهر دائمًا رسالة منبثقة افتراضية، حتى يقوم المستخدم بإغلاقها يدويًا؛ ثم تظل مغلقة.</li>
    <li>
        تستخدم أقسام المستخدمين والمحادثات في منطقة إدارة Alz-Bot
        التمدد التلقائي على التمرير، والذي يقتصر على 100 نتيجة في التمرير الواحد.
    </li>
    <li>
        لا تظهر رسالة الخصوصية إذا كانت
        <b>خيار الطلب للتسجيل</b> قد تم تمكينه.
    </li>
</ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="footer-docs">
        <script src="../../them-viz/scripts/jquery.min.js"></script>
        <script src="../../them-viz/scripts/main.js"></script>
        <script src="../../them-viz/scripts/slimscroll.min.js"></script>
        <script src="../../them-viz/scripts/tab-accordion.js"></script>
        <script src="../../them-viz/scripts/magnific-popup.min.js"></script>
        <script src="../../them-viz/scripts/prettify.js"></script>
        <script src="../../them-viz/scripts/custom.js?v=4"></script>
        <script>
            let url = document.location.href;
            if (url.includes('?cloud') || localStorage.getItem('cloud')) {
                document.body.classList.add('cloud');
                window.history.replaceState({}, document.title, url.replace('?cloud', ''));
            }
        </script>
    </footer>
</body>
</html>