<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Docs | Alz-Bot </title>
    <meta name="description" content="Alz-Bot  documentation area for all platforms, apps and languages." />
    <meta property="og:image" content="../../media/meta-image.jpg" />
    <link rel="stylesheet" href="../../them-viz/css/bootstrap-grid.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../them-viz/css/styles.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../them-viz/css/magnific-popup.css" />
    <link rel="stylesheet" href="../../them-viz/css/prettify.css" />
    <link rel="stylesheet" href="../../skin.css?v=22" type="text/css" media="all" />
    <link rel="shortcut icon" href="../../media/icon.svg" />
</head>
<body class="scroll-change">
    <div id="preloader"></div>
    <nav class="menu-classic menu-fixed align-right" data-menu-anima="fade-in">
        <div class="container">
        <?php
    $pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    ?>
            <div class="menu-brand">
                <div class="menu-brand">
                    <a href="https://alz-bot.com">
                        <img src="../../media/logo-docs.svg" alt="Logo - Alz-Bot " />
                    </a>
                </div>
                <i class="menu-btn"></i>
                <div class="menu-cnt">
                    <ul id="main-menu">
                   
                        <li>
                            <a href="api/web">API</a>
                        </li>
                        <li>
                            <a href="../../changelog">Change Log</a>
                        </li>
                        <li>
                            <a href="../../index">Home</a>
                        </li>
                        <li class="dropdown">
                    <a href="#">Language</a>
                    <ul>
                        <li><a class="btn btn-ss" href="<?php echo '../../lang/ar/works/docs/' . $pageName; ?>">Arabic<img width="15px;" height="10px;" style="text-align:center;" src="../../media/langs/sa.png" alt="Arabic Flag - Alz-Bot"></a></li>
                        <li><a class="btn btn-ss" href="<?php echo '../../works/docs/' . $pageName; ?>">English<img width="15px;" height="10px;" style="text-align:center;" src="../../media/langs/us.png" alt="English - Alz-Bot"></a></li>
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
                                    <a href="#getting-started">GETTING STARTED</a>
                                </h4>
                                <ul class="nav-getting-started">
                                    <li>
                                        <a href="#installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#activation">Activation</a>
                                    </li>
                                    <li>
                                        <a href="#updates">Updates</a>
                                    </li>
                                    <li>
                                        <a href="#problems">Problems ?</a>
                                    </li>
                                </ul>
                                <h4 class="nav-conversations">
                                    <a href="#conversations">CONVERSATIONS</a>
                                </h4>
                                <ul class="nav-conversations">
                                    <li>
                                        <a href="#manage-conversations">Manage conversations</a>
                                    </li>
                                    <li>
                                        <a href="#text-editor">Text editor</a>
                                    </li>
                                    <li>
                                        <a href="#rich-messages">Rich messages</a>
                                    </li>
                                    <li>
                                        <a href="#attachments">Attachments</a>
                                    </li>
                                </ul>
                                <h4 class="nav-users">
                                    <a href="#users">USERS</a>
                                </h4>
                                <ul class="nav-users">
                                    <li>
                                        <a href="#users-manage">Manage users</a>
                                    </li>
                                    <li>
                                        <a href="#agents">Manage agents</a>
                                    </li>
                                    <li>
                                        <a href="#users-info">Information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-settings">
                                    <a href="#settings">SETTINGS</a>
                                </h4>
                                <ul class="nav-settings">
                                    <li>
                                        <a href="#office-hours">Office hours</a>
                                    </li>
                                    <li>
                                        <a href="#articles">Articles</a>
                                    </li>
                                    <li>
                                        <a href="#multilingual">Language</a>
                                    </li>
                                    <li>
                                        <a href="#departments">Departments</a>
                                    </li>
                                    <li>
                                        <a href="#queue">Queue</a>
                                    </li>
                                    <li>
                                        <a href="#routing">Routing</a>
                                    </li>
                                    <li>
                                        <a href="#manual-routing">Manual routing</a>
                                    </li>
                                    <li>
                                        <a href="#email-piping">Email piping</a>
                                    </li>
                                    <li>
                                        <a href="#pusher">Pusher</a>
                                    </li>
                                    <li>
                                        <a href="#direct-messages">Direct messages</a>
                                    </li>
                                    <li>
                                        <a href="#automations">Automations</a>
                                    </li>
                                    <li>
                                        <a href="#newsletter">Newsletter</a>
                                    </li>
                                    <li>
                                        <a href="#grammarly">Grammarly</a>
                                    </li>
                                    <li>
                                        <a href="#aws">Amazon Web Services</a>
                                    </li>
                                </ul>
                                <h4 class="nav-notifications">
                                    <a href="#notifications">NOTIFICATIONS</a>
                                </h4>
                                <ul class="nav-notifications">
                                    <li>
                                        <a href="#email">Email notifications</a>
                                    </li>
                                    <li>
                                        <a href="#push">Push notifications</a>
                                    </li>
                                    <li>
                                        <a href="#desktop">Desktop notifications</a>
                                    </li>
                                    <li>
                                        <a href="#sms">Text message notifications</a>
                                    </li>
                                    <li>
                                        <a href="#sound">Sound notifications</a>
                                    </li>
                                </ul>
                                <h4 class="nav-wp">
                                    <a href="#wp">WORDPRESS</a>
                                </h4>
                                <ul class="nav-wp">
                                    <li>
                                        <a href="#wp-sync">Users sync</a>
                                    </li>
                                    <li>
                                        <a href="#wp-settings">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-woocommerce">
                                    <a href="#woocommerce">WOOCOMMERCE</a>
                                </h4>
                                <ul class="nav-woocommerce">
                                    <li>
                                        <a href="#woocommerce-dialogflow">Dialogflow</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-merge-fields">Merge fields</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-tickets">
                                    <a href="#tickets">TICKETS</a>
                                </h4>
                                <ul class="nav-tickets">
                                    <li>
                                        <a href="#tickets-installation">Installation and usage</a>
                                    </li>
                                    <li>
                                        <a href="#tickets-info">Information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-dialogflow">
                                    <a href="#dialogflow">DIALOGFLOW</a>
                                </h4>
                                <ul class="nav-dialogflow">
                                    <li>
                                        <a href="#dialogflow-sync">Synchronization</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-bot">Bot creation</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-actions">Actions</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-translation">Automatic translation</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-human-takeover">Human takeover</a>
                                    </li>
                                    <li>
                                        <a href="#smart-reply">Smart Reply</a>
                                    </li>
                                    <li>
                                        <a href="#open-ai">OpenAI</a>
                                    </li>
                                    <li>
                                        <a href="#google-search">Google search</a>
                                    </li>
                                    <li>
                                        <a href="#fulfillment">Fulfillment</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-info">Information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-whatsapp">
                                    <a href="#whatsapp">WHATSAPP</a>
                                </h4>
                                <ul class="nav-whatsapp">
                                    <li>
                                        <a href="#whatsapp-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#whatsapp-fallback">Fallback messages</a>
                                    </li>
                                    <li>
                                        <a href="#whatsapp-shop">Shop</a>
                                    </li>
                                    <li>
                                        <a href="#whatsapp-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-messenger">
                                    <a href="#messenger">MESSENGER</a>
                                </h4>
                                <ul class="nav-messenger">
                                    <li>
                                        <a href="#messenger-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#instagram">Instagram</a>
                                    </li>
                                    <li>
                                        <a href="#messenger-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-twitter">
                                    <a href="#twitter">TWITTER</a>
                                </h4>
                                <ul class="nav-twitter">
                                    <li>
                                        <a href="#twitter-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#twitter-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-gbm">
                                    <a href="#gbm">BUSINESS MESSAGES</a>
                                </h4>
                                <ul class="nav-gbm">
                                    <li>
                                        <a href="#gbm-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#gbm-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-telegram">
                                    <a href="#telegram">TELEGRAM</a>
                                </h4>
                                <ul class="nav-telegram">
                                    <li>
                                        <a href="#telegram-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#telegram-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-viber">
                                    <a href="#viber">VIBER</a>
                                </h4>
                                <ul class="nav-viber">
                                    <li>
                                        <a href="#viber-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#viber-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-slack">
                                    <a href="#slack">SLACK</a>
                                </h4>
                                <ul class="nav-slack">
                                    <li>
                                        <a href="#slack-sync">Synchronization</a>
                                    </li>
                                    <li>
                                        <a href="#slack-departments">Departments linking</a>
                                    </li>
                                    <li>
                                        <a href="#slack-user-fields">User fields</a>
                                    </li>
                                    <li>
                                        <a href="#slack-info">Information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-perfex">
                                    <a href="#perfex">PERFEX</a>
                                </h4>
                                <ul class="nav-perfex">
                                    <li>
                                        <a href="#perfex-installation">Installation</a>
                                    </li>
                                </ul>
                                <h4 class="nav-whmcs">
                                    <a href="#whmcs">WHMCS</a>
                                </h4>
                                <ul class="nav-whmcs">
                                    <li>
                                        <a href="#whmcs-installation">Installation</a>
                                    </li>
                                </ul>
                                <h4 class="nav-zendesk">
                                    <a href="#zendesk">ZENDESK</a>
                                </h4>
                                <ul class="nav-zendesk">
                                    <li>
                                        <a href="#zendesk-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#zendesk-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-ump">
                                    <a href="#ump">ULTIMATE MEMBERSHIP PRO</a>
                                </h4>
                                <ul class="nav-ump">
                                    <li>
                                        <a href="#ump-users">Users syncronization</a>
                                    </li>
                                    <li>
                                        <a href="#ump-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-armember">
                                    <a href="#armember">ARMEMBER</a>
                                </h4>
                                <ul class="nav-armember">
                                    <li>
                                        <a href="#armember-users">Users syncronization</a>
                                    </li>
                                    <li>
                                        <a href="#armember-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-active-ecommerce">
                                    <a href="#active-ecommerce">ACTIVE ECOMMERCE</a>
                                </h4>
                                <ul class="nav-active-ecommerce">
                                    <li>
                                        <a href="#active-ecommerce-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#active-ecommerce-sellers">Sellers chat</a>
                                    </li>
                                </ul>
                                <h4 class="nav-martfury">
                                    <a href="#martfury">MARTFURY</a>
                                </h4>
                                <ul class="nav-martfury">
                                    <li>
                                        <a href="#martfury-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#martfury-private-chat">Private chat</a>
                                    </li>
                                </ul>
                                <h4 class="nav-line">
                                    <a href="#line">LINE</a>
                                </h4>
                                <ul class="nav-line">
                                    <li>
                                        <a href="#line-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#line-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-wechat">
                                    <a href="#wechat">WECHAT</a>
                                </h4>
                                <ul class="nav-wechat">
                                    <li>
                                        <a href="#wechat-installation">Installation</a>
                                    </li>
                                    <li>
                                        <a href="#wechat-info">More information</a>
                                    </li>
                                </ul>
                                <h4 class="nav-more-settings">
                                    <a href="#more-settings">MORE SETTINGS</a>
                                </h4>
                                <ul class="nav-more-settings">
                                    <li>
                                        <a href="#pwa">Progressive Web App</a>
                                    </li>
                                    <li>
                                        <a href="#keyboard">Keyboard shortcuts</a>
                                    </li>
                                    <li>
                                        <a href="#config">Config file</a>
                                    </li>
                                    <li>
                                        <a href="#cron-jobs">Cron jobs</a>
                                    </li>
                                    <li>
                                        <a href="#logs">Logs</a>
                                    </li>
                                    <li>
                                        <a href="#supervisor">Supervisor</a>
                                    </li>
                                    <li>
                                        <a href="#url-parameters">URL parameters</a>
                                    </li>
                                    <li>
                                        <a href="#zapier">Zapier</a>
                                    </li>
                                    <li>
                                        <a href="#more-info">Information</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 docs">
                        <div id="getting-started">
                            <div class="label label-docs">GETTING STARTED</div>
                            <h2 id="installation">Installing Alz-Bot </h2>
                            <div class="tab-box" data-tab-anima="fade-in">
                                <ul class="tab-nav">
                                    <li class="active">
                                        <a href="#">PHP</a>
                                    </li>
                                    <li>
                                        <a href="#">WordPress</a>
                                    </li>
                                    <li>
                                        <a href="#">Cloud</a>
                                    </li>
                                </ul>
                                <div class="panel active">
                                    <p>
                                        To install Alz-Bot  on your server follow the steps below:
                                    </p>
                                    <ul class="icon-list icon-line">
                                        <li>
                                            Open the archive
                                            <b>alz-bot 1.2.3.zip</b> and extract the folder in a server
                                            location of your choice.
                                        </li>
                                        <li>
                                            Navigate to the link
                                            <b>http://[your-site]/alz-bot/admin.php</b> and
                                            complete the installation. Replace [your-site] with with your website URL.
                                            If you change the directory name, replace <b>alz-bot</b> with the new directory name.
                                        </li>
                                        <li>
                                            Once the installation is complete, log in with the email and password you created in the previous step and you're done!
                                        </li>
                                    </ul>
                                    <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                                    <h4>Display the chat</h4>
                                    <p>
                                        To display the chat on your website include the following scripts into the
                                        <b>&lt;head>&lt;/head></b> or
                                        <b>&lt;footer>&lt;/footer></b> area of each page where the chat is shown.
                                        Replace <b>[YOUR-ALZ-BOT-URL]</b> with the URL of your Alz-Bot  installation. Ex. https://example.com/alz-bot/js/main.js.
                                    </p>
                                    <pre class="prettyprint">
                                        &lt;!-- Not required if jQuery is already loaded -->
                                        &lt;script src="[YOUR-ALZ-BOT-URL]/js/min/jquery.min.js">&lt;/script>
                                        &lt;script id="sbinit" src="[YOUR-ALZ-BOT-URL]/js/main.js">&lt;/script>
                                    </pre>
                                    <h4>URL parameters</h4>
                                    <ul class="icon-list icon-line">
                                        <li>
                                            <b>lang=LANGUAGE-CODE</b> See the <a href="#multilingual">multilingual</a> docs for more details.
                                        </li>
                                        <li>
                                            <b>url=APP-URL</b> Use this parameter if your application directory URL / folder has been changed. Replace APP-URL with the FULL URL of the application folder. You can also define the URL via JavaScript:
                                            <b>var SB_INIT_URL = "APP-URL"</b>.
                                        </li>
                                    </ul>
                                    <h4>Site migration</h4>
                                    <p>
                                        If you migrate the chat to a new domain / URL you need to edit the
                                        <b>config.php</b> file (it's in the Alz-Bot  folder) and update the
                                        <b>SB_URL</b> constant with the new URL.
                                    </p>
                                    <h4>Minify JS</h4>
                                    <p>
                                        For performance reasons, you may want to load the minified main.js file: <b>[YOUR-ALZ-BOT-URL]/js/min/main.min.js</b>.
                                        Please note that if you contact us for support you will need to load again the non-minified version.
                                    </p>
                                </div>
                                <div class="panel">
                                    <p>To install Alz-Bot  on WordPress follow the steps below:</p>
                                    <ul class="icon-list icon-line">
                                        <li>
                                            Go to the
                                            <b>Plugins</b> page and click
                                            <b>Add new</b> then
                                            <b>Upload plugin</b> and upload the file
                                            <b>alz-bot 1.2.3.zip</b>.
                                        </li>
                                        <li>
                                            Once the installation is complete you should see a new left menu item named
                                            <b>Alz-Bot </b>. You're done, the chat is automatically shown on all pages.
                                        </li>
                                    </ul>
                                    <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../media/play-video.svg" /></a>
                                </div>
                                <div class="panel active">
                                    <p>
                                        To display the chat on your website go to <a href="https://alz-bot.techn-oviz.com/account/?tab=installation">https://alz-bot.techn-oviz.com/account/?tab=installation</a> and copy the embed code, then paste it into your website pages.
                                        If you are using WordPress, you can download the Alz-Bot Cloud plugin <a href="https://wordpress.org/plugins/ALZ-BOT-cloud/" target="_blank" rel="nofollow">here</a>.
                                    </p>
                                </div>
                            </div>
                            <hr class="space-sm" />
                            <h4 id="requirements">Requirements</h4>
                            <ul class="icon-list icon-line">
                                <li>Your web project must support HTML and PHP, and pages containing the chat must be opened via a web browser.</li>
                                <li>You cannot display the chat on a HTML page opened directly on a local computer. Use a local server like Xampp instead.</li>
                                <li>
                                    Your server must allow the access of the following file:
                                    <b>alz-bot/include/ajax.php</b>
                                </li>
                                <li>
                                    If you're using the WordPress version of Alz-Bot  and you have any security plugins installed, please make sure that they don't block the
                                    <b>alz-bot/include/ajax.php</b> file.
                                </li>
                                <li>JQuery 1.1+</li>
                                <li>PHP 7.4+</li>
                                <li>
                                    In your server settings,
                                    <b>CURL</b>,
                                    <b>ZIP ARCHIVE</b>, must be enabled and working correctly.
                                </li>
                                <li>
                                    Read and write file permissions must be granted for the Alz-Bot
                                    <b>uploads</b>,
                                    <b>resources/language</b> and
                                    <b>apps</b> folders. Alz-Bot  must be able to save and read the files in these folders.
                                </li>
                                <li>MySQL 5.5+</li>
                                <li>MySQL - The SQL mode "ONLY_FULL_GROUP_BY", and the setting "ANSI_QUOTES", must be disabled.</li>
                                <li>All Alz-Bot folders should have 755 permissions, all Alz-Bot files should have 644 permissions.</li>
                            </ul>
                            <p>
                                Once the installation is completed you can check the system requirements from
                                <b>Settings > Miscellaneous > System requirements</b>.
                            </p>
                            <hr class="space" />
                            <h2 id="activation">Activation</h2>
                            <p>
                                To activate Alz-Bot  and enable all of the features (including updates and more secure encryption), you need to enter the Techno Viz purchase code in <b>Admin > Settings > Miscellaneous</b>.
                            </p>
                            <h4>Apps installation</h4>
                            <p>
                                To download, install, and activate the apps go to the
                                <b>Settings > Apps</b> area of Alz-Bot and enter the Techno Viz purchase code or license key.
                            </p>
                            <a href="#" target="_blank" rel="nofollow" class="btn-text">Find your Techno Viz purchase code</a>
                            <hr class="space" />
                            <h2 id="updates">Updates</h2>
                            <ul class="icon-list icon-line">
                                <li>To update Alz-Bot  and the apps, enter the admin area and click on the version number in the lower left corner.</li>
                                <li>
                                    You can also activate automatic updates via
                                    <b>Settings > Miscellaneous</b>.
                                </li>
                                <li>
                                    To enable the updates, you need to have a valid Techno Viz purchase code. To update the Alz-Bot  apps you need to have a separate valid License Key or Techno Viz purchase code for each specific app. Besides, the License Key must not be older than 1 year (only for apps purchased outside of CodeCanyon). If your License Key is expired, you will need to purchase a new license to enable App updates again. Apps purchased on CodeCanyon have lifetime updates.
                                </li>
                                <li>The latest versions of the apps may not work if Alz-Bot  has not been updated to the latest version.</li>
                                <li>If you're using the WordPress version of Alz-Bot , keep in mind that you cannot update Alz-Bot from the WordPress plugins page.</li>
                            </ul>
                            <h4>Manual updates</h4>
                            <p>
                                To manually update Alz-Bot  and the apps go to <a href="https://alz-bot.com/synch/manual.php" target="_blank">https://alz-bot.com/synch/manual.php</a>.
                            </p>
                            <hr class="space" />
                            <h2 id="problems">Having Problems?</h2>
                            <p>
                                If you're having any issues at all, please contact our friendly support team at support@alz-bot.com.
                                Before contacting us, please make sure that your server has all the requirements listed above.
                                On that same note, if you are using the WordPress version, please make sure that your WordPress installation
                                has all the requirements listed above.
                            </p>
                            <h4>General issue</h4>
                            <p>
                                For any issue you can check the system requirements from
                                <b>Settings > Miscellaneous > System requirements</b>.
                                We can not provide support about solving the issues reported by the system requirement function, please contact your hosting or server support if you need help.
                            </p>
                            <h4 id="cross">Blank screen when accessing the admin area</h4>
                            <ul class="icon-list icon-line">
                                <li>Check if the browser console has error (on Chrome you can open it from <b>Settings > More tools > Developer tools > Console</b>).</li>
                                <li>Enable the PHP debug and check the PHP error logs. </li>
                                <li>If you have the WordPress version, disable all security plugins and plugins related to your hosting.</li>
                            </ul>
                            <h4 id="cross">Cross-domain configuration</h4>
                            <p>
                                If you want to use the same chat installation on multiple domains, your server should allow cross-origin requests.
                                To enable cross-origin requests on your server follow the steps below:
                            </p>
                            <h4>
                                Cross-domain configuration via server
                            </h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    <b>For Apache servers</b> — Edit the
                                    <b>.htaccess</b> file of the domain where the plugin is installed and enter the code
                                    <b>&lt;IfModule mod_headers.c>Header set Access-Control-Allow-Origin "*"&lt;/IfModule></b> or <b>&lt;IfModule mod_headers.c="">header('Access-Control-Allow-Origin: *');&lt;/IfModule></b> at the very top of the file.
                                    To make it works you need to have at least <b>AllowOverride +FileInfo</b> or <b>AllowOverride All</b> in the Apache config.
                                </li>
                                <li>
                                    <b>For nginx servers</b> — Edit the file
                                    <b>/etc/nginx/nginx.conf</b> of the domain where the plugin is installed and enter the code
                                    <b>add_header Access-Control-Allow-Origin "*";</b> at the very top of the file. If you're using Plesk go to
                                    <b>Domains > example.com > Apache and nginx settings > Additional nginx directives</b> and insert
                                    <br />
                                    <b>add_header 'Access-Control-Allow-Origin' '*';</b>.
                                    <a href="../../media/docs/plesk-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    <b>For OpenLiteSpeed servers</b> — Visit <a href="https://openlitespeed.org/kb/setting-up-cors-on-openlitespeed/" target="_blank" rel="nofollow">https://openlitespeed.org/kb/setting-up-cors-on-openlitespeed/</a>.
                                </li>
                            </ul>
                            <p>
                                You can view tutorials for the most common server administration software in the list below:
                            </p>
                            <ul class="icon-list icon-line">
                                <li>
                                    <a href="https://support.plesk.com/hc/en-us/articles/115001338265-How-to-set-up-CORS-cross-origin-resource-sharing-in-Plesk-" target="_blank" rel="nofollow">Plesk</a>
                                </li>
                                <li>
                                    <a href="https://enable-cors.org/server_apache.html" target="_blank" rel="nofollow">All Apache servers</a>
                                </li>
                            </ul>
                            <h4>
                                Cross-domain configuration via PHP
                            </h4>
                            <p>
                                If none of the previous solutions work or you can't change the server settings, follow the steps below:
                            </p>
                            <ul class="icon-list icon-line">
                                <li>
                                    Edit the file
                                    <b>alz-bot/config.php</b> and enter the code
                                    <b>define('SB_CROSS_DOMAIN', true);</b> at the end of the file.
                                </li>
                                <li>
                                    Upload the following folders into your destination domain(the domain where the chat should be shown, not the one where Alz-Bot  is installed):
                                    <b>alz-bot/media/fonts</b> and <b>alz-bot/media/icons</b>. You can upload the files where you want, for example, <b>http://www.example.com/chat-files</b>.
                                    If the chat is loaded on multiple domains upload the files on each domain.
                                </li>
                                <li>
                                    Edit again the file
                                    <b>alz-bot/config.php</b> and Enter the code
                                    <b>define('SB_CROSS_DOMAIN_URL', 'YOUR-URL');</b> at the end of the file. Replace <b>YOUR-URL</b> with the URL that points to the files you just uploaded, for example, <b>http://www.example.com/chat-files</b>.
                                    If the chat is loaded on multiple domains replace <b>YOUR-URL</b> with the an array of URLs, for example, <b>["http://www.example.com/chat-files", "http://www.example-2.com/chat-files"]</b>.
                                </li>
                            </ul>
                            <h4>Blocking zoom on iOS devices</h4>
                            <p>
                                When using the chat on iPhones the textarea is automatically zoomed when the user's start typing a new message.
                                To stop the zoom Enter the code below into the
                                <b>&lt;head></b> area of all the pages that include the chat.
                            </p>
                            <pre class="prettyprint">
                                &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
                            </pre>
                            <h4>Hide admin.php from URL</h4>
                            <p>
                                By default, the admin URL is something like
                                <b>https://your-website.com/support/admin.php</b>.
                                You can hide the
                                <b>admin.php</b> part of the URL and make it like
                                <b>https://your-website.com/support/</b> by inserting the following code in your
                                <b>.htaccess</b> file:
                                <pre class="prettyprint">
                                    &lt;ifmodule mod_dir.c> DirectoryIndex admin.php&lt;/ifmodule>
                                </pre>
                            </p>
                            <h4>Chat widget not displaying</h4>
                            <p>You cannot see and test the chat as a user if you're logged-into the admin area. To test the chat as a user, please log out of your admin account. Alternatively, you can use another browser window in “private” or “incognito” mode. Additionally, you can force a logout by executing the SBF.reset() function in the browser console.</p>
                            <h4 id="password-reset">Reset email or password of the admin account</h4>
                            <p>
                                If you can no longer log in to the admin area you can reset your password and email by following the steps below:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Edit your
                                    <b>MySQL Database</b>. You can edit it from your hosting panel, usually with
                                    <b>phpMyAdmin</b>.
                                </li>
                                <li>
                                    Edit the table
                                    <b>sb_users</b>.
                                </li>
                                <li>
                                    Find your admin account, and make sure the value of the column
                                    <b>user_type</b> is
                                    <b>admin</b>.
                                </li>
                                <li>
                                    Reset your password by editing the <b>password</b> column and by inserting the new password as a hash. To generate a hash for your password, visit
                                    <a rel="nofollow" target="_blank" href="https://phppasswordhash.com/">https://phppasswordhash.com/</a>, or Enter the hash <b>$2y$10$i7OComVhUh8BHcyx9VzUfuN.hnNsnKzK1Hd/GKK2KIwBo7Y6stppu</b> (password: 12345678).
                                </li>
                                <li>Reset your email address from the column <b>email</b>.</li>
                            </ul>
                            <p>
                                If you're using the WordPress version, you can delete the user from the database and WordPress will generate it again.
                                You can also create a new WordPress user with administrative privileges, then logout from your current account, and log in with the new one. Once you're into Alz-Bot , change the password of your previous agent from
                                <b>Users > Agents</b>.
                            </p>
                            <h4>Admin account deleted</h4>
                            <p>
                                If you have accidentally deleted all your admin and agent accounts and you can no longer log in to the admin area,
                                you can resolve this issue by following the steps below:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Edit your
                                    <b>MySQL Database</b>. You can edit it from your hosting panel, usually with
                                    <b>phpMyAdmin</b>.
                                </li>
                                <li>
                                    Edit the table
                                    <b>sb_users</b>.
                                </li>
                                <li>
                                    You can convert any existing user to an admin by editing the column
                                    <b>user_type</b>, and entering the value
                                    <b>admin</b>.
                                </li>
                                <li>
                                    You can also add a new user by assigning a value to the columns first_name, last_name, password, email, and user_type fields.
                                    The value of the password column must be a hash.
                                    To generate a hash for your password, visit
                                    <a rel="nofollow" target="_blank" href="https://phppasswordhash.com/">https://phppasswordhash.com/</a>.
                                    Also, the value of the column
                                    <b>user_type</b> must be
                                    <b>admin</b>.
                                </li>
                            </ul>
                            <h4>Server down</h4>
                            <p>
                                If your server and/or website goes down or suddenly stops working after a few minutes of chat usage,
                                the issue could be related to your server's Firewall. This usually happens as a result of an IP Address Banning
                                (Fail2Ban) or Web Application Firewall (ModSecurity) settings. The multiple AJAX requests from the chat to the database
                                are recognized as a "server attack" and so your server places a temporary block on your IP address.
                                This issue should only affect you and/or your developers; visitors/users should not be affected.
                                To confirm whether or not this is the issue, use a VPN service like
                                <a href="https://www.hotspotshield.com/" target="_blank" rel="nofollow">Hotspot Shield</a>.
                                When the server goes down, activate the VPN to change your IP and try accessing your website again.
                                If the website works normally, the issue is confirmed.
                                To solve it temporarily disable fail2ban or contact your hosting support for additional support.
                            </p>
                            <h4>Disable chat via JS</h4>
                            <p>
                                Enter the code
                                <b>var SB_DISABLED = true;</b> into a page to prevent the chat from loading.
                            </p>
                        </div>
                        <hr />
                        <div>
                            <div id="conversations" class="label label-docs">CONVERSATIONS</div>
                            <h2 id="manage-conversations">Manage Conversations</h2>
                            <p>
                                Conversations have a total of four different statuses:
                                <b>mark as read</b>,
                                <b>archive</b>,
                                <b>delete</b> and
                                <b>restore</b>.
                                You can manage the status of a conversation by opening it in the conversations area and then clicking any of
                                the corresponding icon buttons in the top right of the conversation window.
                            </p>
                            <h4>Search for conversations</h4>
                            <p>You can for conversations by department ID, assigned agent ID, conversation title, conversation ID, message text, message attachments name, user first name, user last name, user email</p>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    When you empty the
                                    <b>trash</b>, all the conversations in the trash are permanently deleted.
                                </li>
                                <li>
                                    When a user sends a new message to an archived or trashed conversation, the conversation is automatically restored and will now be visible in the
                                    <b>Inbox area</b>.
                                </li>
                                <li>
                                    Trashed conversations are deleted automatically after 30 days.
                                </li>
                                <li>When a user is deleted, all the conversations and messages are permanently deleted too.</li>
                                <li>
                                    An agent can delete their messages by opening the message menu and clicking
                                    <b>Delete</b>. The message menu becomes visible when you hover the mouse cursor over the message.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="text-editor">Text Editor and Automated Messages Features</h2>
                            <p>The text editor of the admin area and automated messages(example: welcome and subscribe messages) can be used to create stylized messages:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    <label>Links formatting</label> — All text links are automatically converted to clickable hyperlinks.
                                </li>
                                <li>
                                    <label>Text formatting</label> — The editor also supports text formatting syntax:
                                    <ul class="icon-list icon-line">
                                        <li>
                                            To make text
                                            <strong>bold</strong>, surround it with
                                            <b>*</b>: *your text*.
                                        </li>
                                        <li>
                                            To make text
                                            <em>italic</em>, surround it with
                                            <b>__</b>: __your text__.
                                        </li>
                                        <li>
                                            To make text
                                            <del>strikethrough</del>, surround it with
                                            <b>~</b>: ~your text~.
                                        </li>
                                        <li>
                                            To insert a
                                            <b>single-line code</b> comment, surround it with
                                            <b>`</b>: `your text`.
                                        </li>
                                        <li>
                                            To insert a
                                            <code>code block</code>, surround it with
                                            <b>```</b>: ```your text```.
                                        </li>
                                    </ul>
                                </li>
                                <li>HTML and other code languages — For security reasons, no HTML, JavaScript (JS), or other code languages are permitted. However, you can use HTML snippets by utilizing custom rich messages (discussed below).</li>
                                <li>
                                    To insert a line break into a message, use the keyboard combination
                                    <b>SHIFT + ENTER</b> or <b>CTRL + ENTER</b>.
                                </li>
                            </ul>
                            <hr id="merge-fields" class="space-sm" />
                            <h4>Merge fields</h4>
                            <p>
                                Merge fields are strings replaced by external values when used. Merge fields can be used in any message or automated message, including chatbot messages.
                            </p>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>{user_name}</pre>
                                        </td>
                                        <td>Full name of the active user.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{user_email}</pre>
                                        </td>
                                        <td>Email of the active user.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{agent_name}</pre>
                                        </td>
                                        <td>Full name of the active agent.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{agent_email}</pre>
                                        </td>
                                        <td>Email of the active agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="rich-messages">Rich Messages</h2>
                            <p>
                                Rich messages are special messages with interactive features like buttons, dropdowns, or inputs.
                                They allow an agent to request information from the user via a user input form or to diplay interactive contents.
                                Rich messages can be inserted into a chat message using shortcodes. Shortcodes accept various parameters like title and description.
                                The available rich messages are listed below.
                            </p>
                            <h4>How it works:</h4>
                            <hr class="space-sm" />
                            <div class="box-steps">
                                <div class="step-item">
                                    <span>1</span>
                                    <div class="content">
                                        <h3>Create and send</h3>
                                        <div>
                                            <img src="../../media/docs/rich-message-1.jpg" alt="Rich message" />
                                            Create a rich message by inserting the shortcode into the text editor of the admin area. Customize all of the parameters with your information and send your message.
                                        </div>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <span>2</span>
                                    <div class="content">
                                        <h3>Message is displayed</h3>
                                        <div>
                                            <img src="../../media/docs/rich-message-2.jpg" alt="Rich message" />
                                            When a shortcode is used, the user sees the rich message (not the shortcode) and can select or enter the required information to complete the form submission.
                                        </div>
                                    </div>
                                </div>
                                <div class="step-item">
                                    <span>3</span>
                                    <div class="content">
                                        <h3>User's response is submitted</h3>
                                        <div>
                                            <img src="../../media/docs/rich-message-3.jpg" alt="Rich message" />
                                            Once the rich message form has been filled out and sent by the user, a success message is shown and the form data is saved.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="space-sm" />
                            <h4>Rich Messages</h4>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Shortcode</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Card</td>
                                        <td>
                                            <pre>[card image="URL" header="TITLE" description="Lorem ipsum dolor sit amete" link="URL" link-text="Purchase" extra="$399" target="_blank"]</pre>
                                        </td>
                                        <td>Call-to-action card with an image, title, description, link, and more.</td>
                                    </tr>
                                    <tr>
                                        <td>Slider</td>
                                        <td>
                                            <pre>[slider image-1="URL" header-1="TITLE" description-1="Lorem ipsum dolor sit amete" link-1="URL" link-text-1="Purchase" extra-1="$599" image-2="URL" header-2="TITLE" description-2="Lorem ipsum dolor sit amete" link-2="URL" link-text-2="Purchase" extra-2="$399" target="_blank"]</pre>
                                        </td>
                                        <td>Slider of call-to-action cards with an image, title, description, link, and more. You can add up to 10 slides.</td>
                                    </tr>
                                    <tr>
                                        <td>Slider images</td>
                                        <td>
                                            <pre>[slider-images images="URL,URL,URL"]</pre>
                                        </td>
                                        <td>Slider of images.</td>
                                    </tr>
                                    <tr>
                                        <td>Chips</td>
                                        <td>
                                            <pre>[chips options="A,B,C"]</pre>
                                        </td>
                                        <td>List of buttons.</td>
                                    </tr>
                                    <tr>
                                        <td>Buttons</td>
                                        <td>
                                            <pre>[buttons options="A,B,C"]</pre>
                                        </td>
                                        <td>List of buttons.</td>
                                    </tr>
                                    <tr>
                                        <td>Select</td>
                                        <td>
                                            <pre>[select options="A,B,C"]</pre>
                                        </td>
                                        <td>Dropdown list of options.</td>
                                    </tr>
                                    <tr>
                                        <td>Inputs</td>
                                        <td>
                                            <pre>[inputs values="A,B,C" button="Send now"]</pre>
                                        </td>
                                        <td>List of text inputs.</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <pre>[email name="true" last-name="true" phone="true" phone-required="false" placeholder=""]</pre>
                                        </td>
                                        <td>
                                            Form to collect the user's email and phone number.
                                            All attributes are optional. Follow up settings used as default values.
                                            Add the attribute <b>required-messaging-apps="true"</b> to force users to provide their email and phone on messaging apps.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Registration</td>
                                        <td>
                                            <pre>[registration]</pre>
                                        </td>
                                        <td>Registration form.</td>
                                    </tr>
                                    <tr>
                                        <td>Timetable</td>
                                        <td>
                                            <pre>[timetable]</pre>
                                        </td>
                                        <td>Timetable.</td>
                                    </tr>
                                    <tr>
                                        <td>Articles</td>
                                        <td>
                                            <pre>[articles link="https://alz-bot.com/articles-demo"]</pre>
                                        </td>
                                        <td>Articles with search area. The <b>link</b> attribute is used as fallback message for Facebook Messenger, WhatsApp, Telegram messages.</td>
                                    </tr>
                                    <tr>
                                        <td>Rating</td>
                                        <td>
                                            <pre>[rating label-positive="Helpful" label-negative="Not helpful" label="Rate and review" success-negative=""]</pre>
                                        </td>
                                        <td>
                                            Agent rating form.
                                            To make the rating shortcode work on WhatsApp, Messenger, Telegram you need to use Dialogflow and the chatbot, create a
                                            new <b>Intent</b> with <b>rating</b> as <b>input Context</b>, nothing as <b>output Context</b>, a
                                            list of the user's most common messages for a positive rating as <b>Training phrases</b>(e.g. good, positive)
                                            and <b>{ "rating": 1, "force-message": true }</b> as <b>Custom Payload</b> response. For the negative rating create a new intent with same context but replace the training phrases and the custom payload to <b>{ "rating": -1, "force-message": true }</b>
                                            <a href="../../media/docs/rating-intent.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>. The shortcode must include also a <b>title</b> or <b>message</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>List</td>
                                        <td>
                                            <pre>[list values="A,B,C"]</pre>
                                        </td>
                                        <td>Text list.</td>
                                    </tr>
                                    <tr>
                                        <td>List double</td>
                                        <td>
                                            <pre>[list values="A:X,B:Y,C:Z"]</pre>
                                        </td>
                                        <td>Text list with titles.</td>
                                    </tr>
                                    <tr>
                                        <td>List image</td>
                                        <td>
                                            <pre>[list-image values="URL:A,URL:B,URL:C"]</pre>
                                        </td>
                                        <td>Text list with titles and images.</td>
                                    </tr>
                                    <tr>
                                        <td>Table</td>
                                        <td>
                                            <pre>[table header="A,B,C" values="A:B:C,A:B:C,A:B:C"]</pre>
                                        </td>
                                        <td>Table.</td>
                                    </tr>
                                    <tr>
                                        <td>Button</td>
                                        <td>
                                            <pre>[button link="https://alz-bot.com" name="Click here" target="_blank" style="link"]</pre>
                                        </td>
                                        <td>
                                            Display a link or open an article. The attribute
                                            <b>target="_blank"</b> is optional and open the link in a new window.
                                            The attribute
                                            <b>style="link"</b> is optional and change the button design.
                                            To open an article on click the link value must be
                                            <b>#article-ID</b>, replace ID with the article ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Video</td>
                                        <td>
                                            <pre>[video type="youtube" id="0TImic4N1ko" height="350"]</pre>
                                        </td>
                                        <td>
                                            Display a YouTube or Vimeo video. The value of the attribute
                                            <b>type</b> can be
                                            <b>youtube</b> or
                                            <b>vimeo</b>. The attribute
                                            <b>id</b> is the ID of the video, get it from the URL. The attribute
                                            <b>height</b> is optional and sets the video height in px.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td>
                                            <pre>[image url="https://alz-bot.com/media/admin.png"]</pre>
                                        </td>
                                        <td>Image.</td>
                                    </tr>
                                    <tr>
                                        <td>Share</td>
                                        <td>
                                            <pre>[share fb="https://alz-bot.com/" tw="https://alz-bot.com/" li="https://alz-bot.com/" pi="https://alz-bot.com/" wa="https://alz-bot.com/"]</pre>
                                        </td>
                                        <td>Social share buttons.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Global parameters</h4>
                            <p>All of the rich messages support the following parameters:</p>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Parameters</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id="123"</pre>
                                        </td>
                                        <td>
                                            The ID of the rich message (used also to save the JSON data).
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>title="ABC"</pre>
                                        </td>
                                        <td>The rich message title.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message="ABC"</pre>
                                        </td>
                                        <td>The rich message description that appears underneath the title.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>success="ABC"</pre>
                                        </td>
                                        <td>
                                            The message that appears when the user completes and sends the rich message.
                                            The user input is appended to this message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings="ABC"</pre>
                                        </td>
                                        <td>
                                            Extra field for optional extra values.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Rich message response</h4>
                            <p>
                                When a user completes a rich message, the response data is saved in JSON format in the database
                                under table
                                <b>sb_messages</b> and column
                                <b>payload</b>. Example:
                                <pre class="prettyprint lang-json">{"rich-messages":{"4Voyu":{"type":"email","result":{"email":["example@gmail.com","Your email ..."]}}}}</pre>
                            </p>
                            <hr class="space-sm" />
                            <h4>Custom rich messages</h4>
                            <p>
                                You can create custom rich messages with your own custom content by going to
                                <b>Settings > Miscellaneous</b>.
                                Currently, custom rich messages are static and there are no interactive options available as
                                there are with shortcodes. However, you can insert custom HTML codes.
                            </p>
                            <hr id="html-codes" class="space-sm" />
                            <h4>HTML codes</h4>
                            <p>
                                When creating a custom rich message, you can use the following codes:
                            </p>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre class="prettyprint">&lt;a href="https://www.google.com" target="_blank" class="sb-rich-btn sb-btn">Click here&lt;/a></pre>
                                        </td>
                                        <td>Link with button design.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre class="prettyprint">&lt;a href="https://www.google.com" target="_blank" class="sb-rich-btn sb-btn-text">Click here&lt;/a></pre>
                                        </td>
                                        <td>Link.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre class="prettyprint">&lt;div class="sb-image">&lt;img src="https://via.placeholder.com/1500x600" class="sb-image" />&lt;/div></pre>
                                        </td>
                                        <td>Image that zoom on click.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="attachments">Attachments</h2>
                            <p>
                                The allowed file attachments extensions are set in the alz-bot/include/upload.php file.
                                The following image formats are displayed automatically: .jpg, .jpeg, .png.
                            </p>
                            <p>
                                Add new allowed file extensions by adding the code <b>define("SB_FILE_EXTENSIONS", ["exe", "abc", ...])</b> to the <b>config.php</b> file of your Alz-Bot installation folder.
                                Replace ["exe", "abc", ...] with an array containing the extensions you want to allow.
                            </p>
                        </div>
                        <hr />
                        <div id="users">
                            <div class="label label-docs">USERS</div>
                            <h2 id="users-manage">Manage Users</h2>
                            <p>
                                Manage users from the
                                <b>Users area</b> in the left menu of the admin area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Search users</h4>
                            <p>You can search users by name, surname, email, and custom fields.</p>
                            <h4>Delete users</h4>
                            <p>
                                You can delete a user by opening the
                                <b>User edit box</b> and then clicking
                                <b>Delete user</b>.
                                To delete multiple users at once, select the users you want to delete from the Users table and then click the top right
                                <b>Delete icon</b>.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>When a user is deleted, all of their conversations and messages are automatically deleted permanently.</li>
                                <li>If a user of a deleted user come back to the website, a new user is automatically created.</li>
                                <li>Visitors are automatically deleted every 24 hours.</li>
                            </ul>
                            <h4 id="user-table-extra-columns">Additional user table columns</h4>
                            <p>
                                To display additional columns in the user table go to <b>Settings > Admin > Users table additional columns</b> and add the new columns.
                                The value of each column is the slug of the user detail or extra user detail you want to display. The slug is lowercase and with spaces replaced by the char <b>-</b>.
                                For example, the slug of the extra user detail "Date of birth" is "date-of-birth".
                            </p>
                            <h4>User types</h4>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user</pre>
                                        </td>
                                        <td>A "user" is any user with an email.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>lead</pre>
                                        </td>
                                        <td>
                                            A "lead" is any user with no user details, who is automatically registered, and with at least one conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>visitor</pre>
                                        </td>
                                        <td>
                                            A "visitor" is any user who has not started a conversation.
                                            Note: Visitors are automatically deleted every 24 hours.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="agents">Manage Agents</h2>
                            <p>
                                Manage agents from the
                                <b>Users area</b>.
                                An agent is a special user that can log in to the admin area and reply to all of the conversations.
                                There are two types of agents: Agents.
                                Admins are the only ones that can create new Agents;
                                they also have access to the settings area. Agents can only manage users and conversations.
                            </p>
                            <p>
                                If you are using the WordPress version of Alz-Bot , an admin is created on plugin activation with the same user and password of the logged-in user.
                            </p>
                            <hr class="space" />
                            <h2 id="users-info">Information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>New users are automatically displayed in the user table in real time.</li>
                                <li>To view online users and receive the online user notification enable <b>Settings > Users > Register all visitors</b>.</li>
                                <li>To receive the online user notification you need to enable also <b>Settings > Miscellaneous > Pusher</b>.</li>
                                <li>The log-in form is shown only if the registration password field is shown.</li>
                                <li>The password field is always shown when the user system is set to "WordPress".</li>
                                <li>If <b>Settings> Users > Allow Duplicate Emails</b> is enabled and a user enters an already registered email, a new user is created and the email is removed from the old user. The new user will not have access to the old user's messages and conversations. You can also automatically log in a user via <a class="scroll-to" href="#url-parameters">URL parameters</a>.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="settings">
                            <div class="label label-docs">SETTINGS</div>
                            <h2>Settings</h2>
                            <hr class="space" />
                            <h2 id="office-hours">Office Hours</h2>
                            <p>
                                You can set the office hours timetable from
                                <b>Settings > Miscellaneous</b>. Office hours are used for:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Automatically displaying the timetable and a message when a user sends a message during out-of-office hours or if all agents are offline.
                                    To enable this feature set up the <b>Offline message</b> at <b>Settings > Messages > Offline Message</b>. The offline message is sent to the same user maximum 1 time per hour.
                                </li>
                                <li>Disabling and hiding the chat during out-of-office hours.</li>
                                <li>Disabling the Dialogflow chatbot during regular office hours and enabling it during out-of-office hours.</li>
                            </ul>
                            <h4>More information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Blank values in the timetable settings are considered out-of-office hours.</li>
                                <li>
                                    The office hours are in UTC format.
                                    Your UTC is generated automatically when you click the field
                                    <b>Settings > Miscellaneous > UTF offset.</b>
                                    To manually get the UTC offset of your area, go to:
                                    <a target="_blank" rel="nofollow" href="https://browserspy.dk/date.php">https://browserspy.dk/</a> or
                                    <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/List_of_UTC_time_offsets">wikipedia.org/wiki/List_of_UTC_time_offsets</a> and copy the offset (e.g. for UTC −12:00, enter -12).
                                    Only integers are accepted. If your offset is not an integer (e.g. UTC -12:30 or UTC -12:45),
                                    try searching for an alternative UTC offset. If you can't find an integer offset, you will need to manually adjust the times
                                    in the office hours table to fix the gap.
                                </li>
                                <li>The date and time format of the timetable matchs automatically the one used in the country of the browser language of the user.</li>
                                <li>The offline message is not sent automatically if <b>Settings > Dialogflow > Human takeover</b> is active. When the Dialogflow human takeover option is active, the offline message is sent only on human takeover.</li>
                                <li>The offline message is not sent is you're using the Slack app and you or any other agent is online via Slack.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="articles">Knowledge Base Articles</h2>
                            <p>
                                Knowledge base articles provide instant answers to customers to help reduce customer support volume.
                                To manage the articles, go to
                                <b>Settings > Articles</b>. Articles support HTML code, which can be used to add images, videos, and other content.
                                Here are some HTML code examples that you can use:
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Code</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Button</td>
                                        <td>
                                            <pre class="prettyprint">&lt;a href="https://www.google.com" target="_blank" class="sb-rich-btn sb-btn">Click here&lt;/a></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image</td>
                                        <td>
                                            <pre class="prettyprint">&lt;img src="https://via.placeholder.com/1500x600" /></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image with lightbox</td>
                                        <td>
                                            <pre class="prettyprint">&lt;div class="sb-image">&lt;img src="https://via.placeholder.com/1500x600" class="sb-image" />&lt;/div></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Video</td>
                                        <td>
                                            <pre class="prettyprint">&lt;video controls>&lt;source src="video.mp4" type="video/mp4">&lt;/video></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>YouTube and Vimeo</td>
                                        <td>
                                            Enter the
                                            <b>embed code</b> provided by YouTube or Vimeo
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Display articles</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    The articles can be shown in the chat dashboard by enabling them from the
                                    <b>Settings > Chat</b> area.
                                </li>
                                <li>The articles can be shown in a dedicated page by inserting the code <b>&lt;script>var SB_ARTICLES_PAGE = true;&lt;/script></b> into any page showing the chat. To set the location of the articles area Enter the code <b>&lt;div id="sb-articles" class="sb-loading">&lt;/div></b>. If you're using the WordPress version you can use the shortcode <b>[sb-articles]</b>.</li>
                                <li>
                                    Alternatively, articles can be shared via the rich message shortcode,
                                    <b>[articles]</b>.
                                </li>
                            </ul>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <h4>More information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Translate the categories from
                                    <b>Settings > Translations</b> by adding the translation name and its translation.
                                </li>
                                <li>
                                    If you use categories, only the articles assigned to a category are displayed.
                                </li>
                                <li>
                                    If there is at least one translated article in the user's language, only the translated articles are displayed.
                                </li>
                                <li>Articles are synchronized automatically with the Dialogflow knowledge base if the Dialogflow app is installed.</li>
                                <li>You can create an internal chat link to an article with the <a href="#rich-messages">button rich message</a>.</li>
                                <li>You can create external article links with the URL attribute <b>article=ID</b>, repalce <b>ID</b> with the article ID. Example: <a href="https://alz-bot.com/articles-demo?article=Ucsx6" target="_blank">https://alz-bot.com/articles-demo?article=Ucsx6</a>.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="multilingual">Language and Translations</h2>
                            <p>Alz-Bot  is fully multilingual and provides powerful features to detect the user's language on the fly.</p>
                            <h4>Edit translations</h4>
                            <p>
                                To edit the languages of both chat and admin, go to
                                <b>Settings > Translations</b>. Some settings, such as e-mail contents, are directly translatable and therefore do not need to be translated here.
                            </p>
                            <h4>Chat language</h4>
                            <p>
                                Alz-Bot  is already translated into 41 languages. There are many options available to set the language:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    <b>OPTION 1</b>
                                    Go to
                                    <b>Settings > Chat</b> and check the
                                    <b>Translate automatically</b> option.
                                    This feature will automatically use the chat language of the user's browser.
                                </li>
                                <li>
                                    <b>OPTION 2 - PHP ONLY</b>
                                    Add the URL parameter
                                    <b>lang=LANGUAGE-CODE</b> to the script that loads the chat,
                                    replacing "LANGUAGE-CODE" with the two-letters language code you would like to display.
                                    Example:
                                    <b>https://alz-bot.com/alz-bot/js/main.js?lang=en</b>.
                                    Go to
                                    <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">wikipedia.org/wiki/List_of_ISO_639-1_codes</a> for the complete languages code list (see column 639-1).
                                </li>
                                <li>
                                    <b>OPTION 2 - WORDPRESS ONLY</b>
                                    Go to
                                    <b>Settings > WordPress</b> and set the option
                                    <b>Force language</b>.
                                </li>
                                <li>
                                    <b>OPTION 3 - WORDPRESS ONLY</b>
                                    The WordPress version of Alz-Bot  uses the default language of the WordPress installation;
                                    or the language of the current page or post if the website is multilingual.
                                    This feature is compatible with WPML, Polylang, and other multilingual plugins.
                                    Note: This feature is automatically disabled if the option
                                    <b>Chat > Translate automatically</b> is active.
                                </li>
                            </ul>
                            <h4 id="multilingual-admin">Admin language</h4>
                            <p>
                                To translate the admin area follow the steps below:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Translate the texts in your language from the
                                    <b>Settings > Translations</b>.
                                </li>
                            </ul>
                            <p>To set the admin area language you have three options:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Activate the option
                                    <b>Settings > Admin > Automatically translate admin area</b>. This feature automatically translate the admin area to match the agent profile language or the agent browser language.
                                </li>
                                <li>
                                    Edit the file
                                    <b>config.php</b> inside your Alz-Bot  installation directory and Enter the code
                                    <b>define('SB_ADMIN_LANG', 'LANGUAGE-CODE');</b> at the end of the file content. Replace <b>LANGUAGE-CODE</b> with the language code of the language you want to use, use only 2 letters, for example, insert only <b>es</b>, not <b>es_ES</b>.
                                </li>
                            </ul>
                            <h4>Translate custom contents</h4>
                            <p>
                                You can translate almost any custom content: rich messages, titles, descriptions, automatic messages,
                                chat header, and more. To add translations, select the language you want and click the
                                <b>New translation</b> button.
                            </p>
                            <h4>Add a new language</h4>
                            <p>To add a new language, follow the steps below:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Via FTP or a File Manager, go to
                                    <b>alz-bot\resources\languages\front</b>.
                                </li>
                                <li>
                                    Duplicate (copy and paste it in the same directory) the
                                    <b>alz-bot\resources\languages\front\source.json</b> file.
                                </li>
                                <li>
                                    Rename the file with the language code you would like to add. Go to
                                    <a target="_blank" rel="nofollow" href="https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">wikipedia.org/wiki/List_of_ISO_639-1_codes</a>
                                    for the complete languages code list (see column 639-1).
                                </li>
                                <li>
                                    Go to
                                    <b>Settings > Translations</b> and the new language should appear automatically.
                                </li>
                            </ul>
                            <p>
                                To add a new language for the admin area, follow the exact same steps, but use folder
                                <b>admin</b> instead.
                                New languages will not be lost or deleted on plugin updates.
                            </p>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>If a translation string is missing, add it by clicking the button <b>Add new translation</b>.</li>
                                <li>If a translation string is not working, make sure to remove all white spaces and break lines at the start and the end of the string.</li>
                                <li>
                                    The translations edits are not saved in the database but directly in the translation files.
                                    When a translation is edited, and saved, a backup is created into the
                                    <b>uploads</b> folder.
                                    The backup is restored automatically on plugin update and plugin activation.
                                </li>
                                <li>
                                    Some special chars like
                                    <b>&</b> are replaced by the HTML equivalent code (see
                                    <a href="https://www.w3schools.com/html/html_entities.asp" target="_blank" rel="nofollow">https://www.w3schools.com/html/html_entities.asp</a>). Ex.
                                    <b>&</b> is replaced by
                                    <b>&amp;amp;</b>
                                </li>
                                <li>
                                    You can add missing translation strings also by code. Edit the language files located in
                                    <b>alz-bot\resources\languages</b>. Once you edited a file, the new strings will appear in
                                    <b>Settings > Translations</b>.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="departments">Departments</h2>
                            <p>
                                Departments give you the power to distribute conversations and assign various agents to specific departments.
                                For example, you can create a department entitled "Sales" and assign specific conversations to that department.
                                To start using departments, follow the steps below:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to
                                    <b>Settings > Miscellaneous</b> and add your required departments. After saving, reload the page.
                                </li>
                                <li>
                                    Go to
                                    <b>Users > Agents</b> and edit an agent, you will see a new field where you can set the department of the agent.
                                </li>
                                <li>
                                    Reload the page and you're done! In the
                                    <b>Conversations area</b>, you will now see an option to set the department.
                                </li>
                            </ul>
                            <h4>Settings</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    <b>Display in dashboard</b> Displays the departments' list in the chat dashboard and force users to choose a department before starting a conversation.
                                </li>
                                <li>
                                    <b>Display images</b> Displays the department image instead of the department color.
                                </li>
                                <li>
                                    <b>Label</b> Replace the label
                                    <b>Departments</b> (plural) with another text. The name is displayed in the admin and tickets area.
                                </li>
                                <li>
                                    <b>Label single</b> Replace the label
                                    <b>Department</b> (singular) with another text. The name is displayed in the admin and tickets area.
                                </li>
                                <li>
                                    <b>Dashboard title</b> Set the title of the chat dashboard list. Default: Departments.
                                </li>
                            </ul>
                            <h4>How it works</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Agents and admins can only access conversations, users, and agents that have been assigned to their specific department.
                                </li>
                                <li>
                                    When an agent is assigned to a new department, an email notification is sent to all of the agents assigned to the new department.
                                </li>
                                <li>
                                    The
                                    <b>General department</b> is global and gives agents access to all of the conversations within all departments.
                                    Also, all agents without a department are automatically assigned to the General department.
                                </li>
                                <li>
                                    To automatically assign a department to the user conversations you can Enter the JavaScript variable <b>var SB_DEFAULT_DEPARTMENT = ID;</b> into the pages where the chat is displayed, replace ID with the department ID.
                                    For more details check the APIs
                                    <a href="api/use-cases#auto-departments">here</a>.
                                </li>
                                <li>Admins with no assigned department always see the conversations of all departments.</li>
                                <li>The chatbot can assign a department to the active conversation via <a class="scroll-to" href="#dialogflow-actions">dialogflow actions</a>.</li>
                            </ul>
                            <h4>How to assign a department</h4>
                            <p>You can assign a department to a conversation in several ways:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Via <b>Settings > Miscellaneous > Departments settings > Display in dashboard</b>. This setting will force the user to choose a department when starting a new conversation.</li>
                                <li>Via <b>Settings > Automations > More</b>.</li>
                                <li>
                                    Via JavaScript the variable <b>var SB_DEFAULT_DEPARTMENT = ID;</b>. Enter the code into the pages where the chat is displayed and replace ID with the department ID.
                                    For more details check the API
                                    <a href="api/use-cases#auto-departments">here</a>.
                                </li>
                                <li>Via <a href="works/docs/api/js">API</a>.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="queue">Queue</h2>
                            <p>
                                When the queue is activated via
                                <b>Settings > Miscellaneous > Queue</b>,
                                users enter into a queue automatically when an agent's chat limit is reached.
                                When a user enters the queue, a message with the current position in the queue and the estimated waiting time is displayed.
                                Alz-Bot  automatically assigns the conversations to all available agents proportionately.
                                When an agent marks a conversation as completed (by archiving it), the queue is updated and a new conversation is received.
                            </p>
                            <h4>More information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Only online agents are counted as "available" agents; only online agents will receive new conversations.</li>
                                <li>Admins are not included; admins always see all the conversations.</li>
                                <li>Agents must archive a conversation to mark it as completed; this will automatically give them access to the next conversation in the queue.</li>
                                <li>Agents can switch their status between online and offline by hovering over their profile image and then clicking the label of the profile pop-up at the bottom-left of the admin area.</li>
                                <li>Agents can only view their conversations; however, they can see all of the conversations of a single user.</li>
                                <li>Agents can only search and filter their conversations.</li>
                                <li>The waiting time is displayed in minutes and is calculated as follows: queue position X response time = waiting time. For example, if a user is 5th in the queue, and the response time has been set to 4 minutes (via Settings > Miscellaneous > Queue), then the total wait time displayed to the user will be 20 minutes.</li>
                                <li>If a user is in the queue and leaves (e.g. by closing the browser) for more than 1 minute, the conversation is saved; however, once the user comes back, the queue is reset and the user will lose their previous position.</li>
                                <li>The queue is compatible with the departments.</li>
                                <li>If Dialogflow human takeover is active, the queue is activated only on human takeover.</li>
                                <li>For conversations started from messaging apps like WhatsApp, it is not possible to respect the limit of conversations per agent, all conversations will be immediately and proportionally assigned to an agent.</li>
                                <li>Use <b>Settings > Messages > Offline message</b> to prevent the chat from showing the queue update message to the user.</li>
                                <li>When the sound option is active, a sound is played when it's the user's turn.</li>
                            </ul>
                            <h4>How to test the queue</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>To simulate multiple users and agents, open the chat in multiple different browsers (e.g. Opera, Firefox, Brave, Chrome, etc.). Each browser can simulate two users/agents: one in normal mode and one in "private" or "incognito" mode.</li>
                                <li>
                                    To reset the chat and start a new user session, open the browser console, enter
                                    <b>SBF.reset()</b>, and press
                                    <b>ENTER</b>.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="routing">Routing</h2>
                            <p>
                                When the routing is activated via
                                <b>Settings > Miscellaneous > Routing</b>, Alz-Bot  automatically assigns the users conversations to all available agents proportionately.
                            </p>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Conversations are assigned to online agents first. If all agents are offline, conversations are assigned proportionally between all agents.</li>
                                <li>Conversations are assigned to agents with less active conversations. A conversation is active if it's not deleted, or archived. If routing is active, you should archive the conversations once completed.</li>
                                <li>Admins are not included; admins always see all the conversations.</li>
                                <li>Agents can switch their status between online and offline by hovering over their profile image and then clicking the label of the profile pop-up at the bottom-left of the admin area.</li>
                                <li>Agents can view only their conversations; however, they can see all of the conversations of a single user.</li>
                                <li>Agents can search and filter only their conversations.</li>
                                <li>The routing is compatible with the departments.</li>
                                <li>When routing is active agents can manually route conversations to other agents from the right panel of the conversations area.</li>
                                <li>If the conversation is archived and the user reopens it in the future by sending a new message, if the assigned agent in the conversation is offline, the conversation is assigned to another agent.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="manual-routing">Manual routing</h2>
                            <p>
                                When the routing is activated via
                                <b>Settings > Miscellaneous > Hide conversation of other agents</b> agents see only their own conversations and can select the unassigned ones.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li><b>Agents menu</b>: displays the agents' menu to assign the active conversation to another agent.</li>
                                <li><b>Routing if offline</b>: if the conversation is archived and the user reopens it in the future by sending a new message, if the assigned agent in the conversation is offline, the conversation is assigned to another online if there is at least one, otherwise to no agent.</li>
                                <li><b>View unassigned conversations</b>: allow agents to view the unassigned conversations, when an agent replies the conversation is automatically assigned to him and the conversation is removed in real-time from the admin area of the other agents. Check this option to enable the manual routing.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="email-piping">Email piping</h2>
                            <p>
                                Email piping lets you, your agents, and your users reply to chat messages via email.
                            </p>
                            <h4>Activation</h4>
                            <p>
                                To activate the email piping go to
                                <b>Settings > Notifications > Email piping</b> and enter your POP3/IMAP email server information,
                                then set the email address to use for the email piping in
                                <b>
                                    Settings > Notifications > SMTP
                                </b> and you're done! The email address must be the one to which the email piping server connects to.
                                Alz-Bot  will send all emails from this email address and you, your agents, and your users will reply to this email address.
                            </p>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    The setting <b>Notifications > User email notifications</b> must be enabled to send replies to the user email.
                                </li>
                                <li>If you're using the Dialogflow App, and the settings <b>Settings > Dialogflow > Human takeover</b> is active, no emails are sent if the chatbot knows the answer.</li>
                                <li>
                                    If the setting <b>Convert all emails</b> is active, all emails sent to your inbox will be converted to chat messages, mind that all emails, including spam, promotional emails and more would be wrongly converted too.
                                </li>
                                <li>If the setting <b>convert all emails</b> is active, email sent by email addresses of agents and admins will be ignored, use another email address for testing.</li>
                                <li>If the setting <b>convert all emails</b> is active, each email sent directly to the email piping address will generate a new user conversation.</li>
                                <li>You can not use the same email address used for the email piping to reply. All your Alz-Bot  agents and admins must use a different email address.</li>
                                <li>Agents must reply via email from the same email address registered in Alz-Bot .</li>
                                <li>When agents reply in Alz-Bot, emails are always sent to the user, even if user email notifications are disabled.</li>
                                <li>The email is sent to the Agents only if they are offline. If they are online no emails are sent.</li>
                                <li>
                                    For Google Gmail and Google Workspace emails, you need to replace your Google password with a Google app password, details on <a href="https://support.google.com/accounts/answer/185833" target="_blank" rel="nofollow">https://support.google.com/accounts/answer/185833</a> (Create & use App Passwords section).
                                    Enter <b>imap.gmail.com</b> as host and <b>993</b> as port.
                                </li>
                                <li>
                                    Email piping requires
                                    <b>php5-imap</b> module (IMAP module). If it's not installed on your server you can install it with the command
                                    <b>apt-get install php5-imap</b>. If you have issues contact your hosting/server support.
                                </li>
                                <li>
                                    The
                                    <b>Delimiter</b> option add a text at the top of all emails:
                                    <div style="color:#b5b5b5;display:inline">
                                        ### Please type your reply above this line ###
                                    </div>. This text tells Alz-Bot  to delete all the content below it and it's usefult to cut out all of the reply quotes. Activate it if you see duplicated messages in the chat.
                                    If this option is active, you and your users can not use the string
                                    <b>### </b> in the emails.
                                </li>
                                <li>
                                    Email attachments are supported.
                                </li>
                                <li>
                                    In order for email piping to work, email replies must contain the Alz-Bot  recipient's name. Ex. <b>Alz-Bot  | SB2457-4734 &lt;example@email.com></b>.
                                    All major email clients like Outlook Web, Outlook, Gmail, Yahoo Mail, support the recipient's name by default via chatbot reply or reply all buttons.
                                </li>
                                <li>
                                    Because of the nature of how emails work, each email client uses their personal codes, delimiters, and automatic strings, and more.
                                    For this reason, some chat messages converted from emails can contain invalid texts.
                                    We are working to optimize as many email clients as possible, for now, the following email clients are optimized and should not return any invalid text: Outlook Web, Outlook, Gmail, Yahoo Mail.
                                </li>
                                <li>Email piping supports departments, if the user's conversation is assigned to a department, the email notifications are sent only to the agents assigned to that department.</li>
                            </ul>
                            <h4>Cron job</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Alz-Bot tries to process emails via cron jobs every 60 seconds, details <a href="#cron-jobs">here</a>.
                                </li>
                                <li>
                                    You can manually trigger execution and speed up cron jobs via API with the PHP function <a href="api/php#email_piping">sb_email_piping()</a>, or the WEB API function <a href="api/web#email-piping">email-piping</a>.
                                </li>
                                <li>
                                    You can create a cron job that runs the URL <b>[ALZ-BOT-INSTALLATION-URL]/include/api.php?piping=true</b> *. Use the command <b>*/59 * * * * wget [ALZ-BOT-INSTALLATION-URL]/include/api.php?piping=true</b> to run it via a command. Replace <b>[ALZ-BOT-INSTALLATION-URL]</b> with your Alz-Bot URL *.
                                </li>
                                <li>
                                    You can also use this cron job file: <a target="_blank" href="files/cron.zip">download</a>. The cron job command is <b>php -f YOUR-FILE-PATH/cron.php</b>.
                                </li>
                                <li>
                                    If you manually run the cron job, check the setting <b>Disable cron job</b> to stop Alz-Bot from manually triggering it and to improve performance.
                                </li>
                                <li>
                                    <b>*</b> If you are using the cloud version the URL is <b>https://alz-bot.techn-oviz.com/script/include/api.php?piping=true&cloud=API-TOKEN</b>, replace API-TOKEN with your API Token (https://alz-bot.techn-oviz.com/account/?tab=installation)
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="pusher">Pusher</h2>
                            <p>
                                Activate Pusher (recommended) to use the WebSockets instead of HTTP AJAX requests for the chat functionalities.
                                WebSockets drastically improve the chat performance by removing the need for repeated AJAX requests to your server for checking for new messages and conversations.
                                WebSockets also improve responsivness of the chat: faster messages delivery, more accurate online and typing status, more accurate online users list and more.
                            </p>
                            <h4>Activation</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to
                                    <a href="https://dashboard.pusher.com/accounts/sign_up" target="_blank" rel="nofollow">https://dashboard.pusher.com/accounts/sign_up</a> and create a new account.
                                </li>
                                <li>
                                    From your dashboard at
                                    <a href="https://dashboard.pusher.com/" target=" _blank" rel="nofollow">https://dashboard.pusher.com</a>, choose the
                                    <b>Channels</b> product by clicking
                                    <b>Get started</b>.
                                    <a href="../../media/docs/pusher-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Enter the name of your app and choose the cluster closest to your location.
                                    <a href="../../media/docs/pusher-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    From the left menu of the dashboard click
                                    <b>App Settings</b> and enable
                                    <b>client events</b>.
                                    <a href="../../media/docs/pusher-6.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    From the left menu of the dashboard click
                                    <b>Keys</b>, copy
                                    <b>App ID</b>,
                                    <b>Key</b>,
                                    <b>Secret</b>,
                                    <b>Cluster</b>.
                                    <a href="../../media/docs/pusher-5.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Go to
                                    <b>Settings > Miscellaneous > Pusher</b>, and paste app ID, key, secret, cluster.
                                </li>
                                <li>You're done.</li>
                            </ul>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Pusher is free to use for up to 200k messages and 100 concurrent connections per day.
                                    Messages are used for the following functions and more: user registration, online user status, chat messages, and chatbot messages.
                                    Pusher channels count calculation is explained <a href="https://support.pusher.com/hc/en-us/articles/4412259287569-How-Is-My-Message-Count-Calculated-In-Channels-" target="_blank" rel="nofollow">here</a>.
                                </li>
                                <li>
                                    When Pusher is active the following AJAX requests are replaced by WebSockets: checking for new messages, checking for new conversations, online/offline status, typing status, online users list.
                                </li>
                                <li>
                                    When Pusher is active the
                                    <b>last activity</b> value of users and agents is updated only on page load or when they send new messages.
                                </li>
                                <li>
                                    When Pusher is active the option
                                    <b>Settings > Users > Register all visitors</b> is automatically activated and it can not be disabled.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="direct-messages">Direct messages</h2>
                            <p>
                                Direct messages allow you to send а single chat message, email, or text message, to a single user or several users. Read the information below to understand how it works.
                            </p>
                            <h4>General</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To send a message go to the
                                    <b>Users</b> area and click the direct message icon. Direct message buttons are also available in the profile box of the user.
                                </li>
                                <li>
                                    To send a message to all users, enter
                                    <b>All</b> in the
                                    <b>User IDs</b> field.
                                </li>
                                <li>
                                    To send a message to a group of users, enter their IDs in the
                                    <b>User IDs</b> field. You can check the users and then click the direct message icon to enter the IDs automatically.
                                </li>
                                <li>
                                    All message types support
                                    <a class="scroll-to" href="#merge-fields">merge fields</a>.
                                </li>
                            </ul>
                            <h4>Direct chat message</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    The chat message is sent to the active conversation, if any, otherwise to a new conversation.
                                </li>
                                <li>
                                    If the option
                                    <b>Settings > User email notifications</b> is active, all users with an email are notified via email.
                                </li>
                                <li>
                                    If the option
                                    <b>Settings > Text message notifications > Active for users</b> is active, all users with a phone number are notified via text message.
                                </li>
                                <li>
                                    If the option
                                    <b>Settings > Push notifications</b> is active, a push notification is sent to all users.
                                </li>
                                <li>
                                    The message is also sent to messaging apps such as WhatsApp and Messenger if the user is connected to them.
                                </li>
                                <li>
                                    To send a message to all users of a single messaging app enter one of the following strings: <b>whatsapp</b>, <b>messenger</b>, <b>instagram</b>, <b>telegram</b>, <b>twitter</b>, <b>google</b>, <b>wechat</b>. Enter <b>tickets</b> to send a message only to the users who created a Alz-Bot ticket via the Tickets app.
                                </li>
                            </ul>
                            <h4>Direct email</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Email header and email signature are automatically included in all emails, set them from
                                    <b>Settings > Notifications</b>.
                                </li>
                                <li>
                                    The HTML language is supported.
                                </li>
                                <li>
                                    The subject supports merge fields.
                                </li>
                            </ul>
                            <h4>Direct text messages</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To enable direct text messages you must enable the SMS in <b>Settings > Notifications > Text message notifications</b>.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="automations">Automations</h2>
                            <p>
                                Automations allow running multilingual automatic tasks when conditions set by you are met.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To delete a condition, set it to empty. To disable an automation, delete all conditions.
                                </li>
                                <li>
                                    Automations are sent only 1 time to users.
                                </li>
                                <li>
                                    If you used an automation in the past, and users already received it, you need to delete the automation and create a new one to show it to the users.
                                </li>
                                <li>
                                    <b>Repeat</b> only works if used in conjunction with <b>date time</b>.
                                </li>
                                <li>
                                    When <b>date time</b> is used in conjunction with the criteria <b>is exactly</b>, the value must not contain hours and minutes (hh:mm). Ex. 25/10/2021 (25/10/2021 10:30 will not work).
                                </li>
                                <li>The setting <b>Settings > Users > Register all visitors</b> must be active if there are message automations that are executed on page load.</li>
                                <li>
                                    <b>City</b>, <b>countries</b>, <b>languages</b> work automatically only if both the settings <b>Settings > Users > Register all visitors</b> and <b>Settings > Users > Full visitor details</b> are enabled.
                                </li>
                                <li>
                                    <b>Cities</b> work only if the user detail <b>location</b> is set and equal to <b>city, country</b>, or if the user detail <b>city</b> is set.
                                </li>
                                <li>
                                    <b>Countries</b> work only if the user details <b>country_code</b>, or <b>country</b> is set, or if the user detail <b>location</b> is set and equal to <b>city, country</b>. The country name must be in english.
                                </li>
                                <li>
                                    <b>languages</b> work only if the user details <b>browser_language</b>, or <b>language</b> is set.
                                </li>
                                <li>
                                    A visitor is a <b>Returning visitor</b> only if it visits the website again after 24h or more.
                                </li>
                                <li>
                                    The pop-ups appear only if the chat is closed, and they overwrite the default pop-up. You can check the <b>message fallback</b> option to send a message instead of showing the pop-up if the chat is open.
                                </li>
                                <li>
                                    You may need to enable <b>Settings > Users > Register all visitors</b> if you want to send an automated message to new users.
                                </li>
                                <li>
                                    Chat messages and popup fallback messages are sent only if the last user or agent message of the conversation is older than 10 minutes.
                                    This feature prevents unwanted automated messages to be sent during an agent-user conversation.
                                </li>
                                <li>
                                    The <b>Custom variable</b> condition check for the JavaScript variables with the given names and values.
                                    For example, the condition <b>example=ABC</b> is met if into the chat's page there is this JavaScript code: <b>var example = "ABC";</b>.
                                    Add multiple variables separated by commas.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="newsletter">Newsletter</h2>
                            <p>
                                Follow the steps below to complete the synchronization with your newsletter service. The user is subscribed in the following cases: registration form, user update, follow-up message, subscribe message, email shortcode.
                            </p>
                            <h4>Mailchimp</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, follow the docs at <a href="https://mailchimp.com/help/about-api-keys/" target="_blank" rel="nofollow">https://mailchimp.com/help/about-api-keys/</a>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, follow the docs at <a href="https://mailchimp.com/help/find-audience-id/" target="_blank" rel="nofollow">https://mailchimp.com/help/find-audience-id/</a>.
                                </li>
                            </ul>
                            <h4>Sendinblue</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, follow the docs at <a href="https://account.sendinblue.com/advanced/api" target="_blank" rel="nofollow">https://account.sendinblue.com/advanced/api</a>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, follow the docs at <a href="https://my.sendinblue.com/lists" target="_blank" rel="nofollow">https://my.sendinblue.com/lists</a>.
                                </li>
                            </ul>
                            <h4>SendGrid</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, follow the docs at <a href="https://app.sendgrid.com/settings/api_keys" target="_blank" rel="nofollow">https://app.sendgrid.com/settings/api_keys</a>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in SendGrid and click <b>Marketing > Contacts</b>(<a href="https://mc.sendgrid.com/contacts" target="_blank" rel="nofollow">https://mc.sendgrid.com/contacts</a>), then click on a list, or create a new one. The last part of the URL is the list ID. Ex. https://mc.sendgrid.com/contacts/lists/8558c1e7-3c99-4428-a68f-78df2e437f8e (the list ID is 8558c1e7-3c99-4428-a68f-78df2e437f8e).
                                </li>
                            </ul>
                            <h4>Elastic Email</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, enter in Elastic Email, then click <b>Settings</b> from the top right profile menu. Click <b>Create Additional API key</b> (<a href="https://elasticemail.com/account#/settings/new/create-api" target="_blank" rel="nofollow">https://elasticemail.com/account#/settings/new/create-api</a>), set a name and choose <b>Plugin</b> or <b>Full access</b>, or <b>Custom</b> and make sure the permission <b>Contacts</b> is set to <b>View & Modify</b>.
                                </li>
                                <li>
                                    The <b>List ID</b> is the list name. Important! Existing list's or segment names must not have any spaces in them.
                                </li>
                            </ul>
                            <h4>Campaign Monitor</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, enter in Campaign Monitor, then click <b>Account settings</b> from the top right profile menu. Click <b>API keys > Generate API key</b>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in Campaign Monitor, then click <b>List and subscribers</b> from the top menu. Select a list and then click <b>Settings</b> from the left menu and copy the <b>List API ID</b>.
                                </li>
                            </ul>
                            <h4>HubSpot</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, enter in HubSpot, then get it from <b>Settings > Integrations > API key</b>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in HubSpot, then get it from <b>Contacts > List > List details</b>.
                                </li>
                            </ul>
                            <h4>Moosend</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, enter in Moosend, then click <b>Settings > API key</b> .
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in Moosend, then get it from <b>Audience > Email lists</b>.
                                </li>
                            </ul>
                            <h4>GetResponse</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>List ID</b>, enter in GetResponse, then get it from <b>Lists > Your list > Settings</b>(https://app.getresponse.com/lists). Copy the <b>List token</b> value.
                                </li>
                                <li>
                                    To get the <b>Key</b> visit <a target="_blank" rel="nofollow" href="https://app.getresponse.com/api">https://app.getresponse.com/api</a>.
                                </li>
                            </ul>
                            <h4>ConvertKit</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, enter in ConvertKit, then get it from <b>Settings > Advanced > API secret</b> .
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in ConvertKit, then get it from <b>Grow > Landing Pages & Forms</b>. Open you form and copy the numeric part of the URL. For example the ID of the form with URL <b>https://app.convertkit.com/forms/designers/3003412/edit</b> is <b>3003412</b>.
                                </li>
                            </ul>
                            <h4>ActiveCampaign</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, enter in ActiveCampaign, then get it from <b>Account settings > Developer</b>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in ActiveCampaign, then get it from <b>Left menu > Lists</b> or <b>Left menu > Contacts > Lists</b>.
                                    Open your list and copy the list ID in the URL. For example the ID of the list with URL
                                    <b>https://activehosted.com/app/contacts/?listid=1&status=1</b> is <b>1</b>.
                                    The list ID must be in this format: <b>domain:list-ID</b>. The <b>domain</b> is the first part of your dashboard URL. For example the domain of <b>https://activehosted.com/</b> is and the final value to insert in Alz-Bot  is <b>:1</b>.
                                </li>
                            </ul>
                            <h4>MailerLite</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, enter in MailerLite, then get it from <b>Left menu > Integrations > MailerLite API</b>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in MailerLite, then get it from <b>Left menu > Subscribers > Groups</b>. View a group and copy the Group ID from the URL (e.g. <b>....group=18783408688903967...</b>).
                                </li>
                            </ul>
                            <h4>Mailjet</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Key</b>, visit <a href="https://app.mailjet.com/account/apikeys" target="_blank" rel="nofollow">https://app.mailjet.com/account/apikeys</a>, or enter in Mailjet, then get it from <b>Account settings > Account settings</b>.
                                </li>
                                <li>
                                    To get the <b>List ID</b>, enter in MailerLite, then get it from <b>Contacts > Contacts lists > Your list</b>. Get the List ID by clicking the <b>?</b> icon next to the lists's email. E.g. 1202546.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="grammarly">Grammarly</h2>
                            <p>
                                Follow the steps below to start using Grammarly.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Register a developer account at <a href="https://developer.grammarly.com/" target="_blank" rel="nofollow">https://developer.grammarly.com/</a>.
                                </li>
                                <li>
                                    Create a new application, go to the <b>Credentials</b> area and copy the <b>Client ID</b>.
                                    In <b>Origins</b> you must also add the domain where Alz-Bot  is installed.
                                </li>
                                <li>
                                    Paste the <b>Client ID</b> into <b>Settings > Admin > Grammarly > Client ID</b>.
                                </li>
                                <li>
                                    Make sure to turn off the Grammarly Extension in your browser.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="aws">Amazon Web Services</h2>
                            <h4>Amazon S3</h4>
                            <p>
                                Upload attachments to your Amazon S3 bucket instead of the server where Alz-Bot is installed.
                                Follow the steps below to set it up.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Log in to AWS as the root user from <a href="https://aws.amazon.com/" target="_blank" rel="nofollow">https://aws.amazon.com/</a>.
                                </li>
                                <li>
                                    Enter the <b>IAM</b> dashboard and click <b>Left menu > Access management > Users</b>.
                                </li>
                                <li>
                                    Click <b>Add new user</b>, enter the username and continue.
                                </li>
                                <li>
                                    Select <b>Add user to group</b> and on the <b>User groups</b> section below click <b>Create group</b>.
                                    In <b>Permissions policies</b> search for <b>AmazonS3FullAccess</b> and select it. Click <b>Create user group</b>.
                                </li>
                                <li>
                                    Assign the new group to the user you are creating and continue, then click <b>Create user</b>.
                                </li>
                                <li>
                                    Select the newly created user and open the <b>Security credentials</b> tab.
                                </li>
                                <li>
                                    In the <b>Access keys</b> area, click <b>Create access key</b> and select <b>Application running outside AWS</b>. Continue until you get the keys and save them in <b>Alz-Bot > Settings > Miscellaneous > Amazon S3</b>.
                                </li>
                                <li>
                                    Visit the <b>Amazon S3</b> dashboard and click <b>Create bucket</b>.
                                </li>
                                <li>
                                    Set the bucket name and region you want. Save the region and name in <b>Alz-Bot > Settings > Miscellaneous > Amazon S3</b>.
                                    Check <b>ACLs enabled</b> and <b>Bucket owner preferred</b>.
                                    Uncheck <b>Block all public access</b> and all related checkboxes.
                                </li>
                                <li>
                                    Click <b>Create bucket</b>.
                                </li>
                                <li>
                                    This feature is technical and optional. Support does not cover any help related to this feature.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="notifications">
                            <div class="label label-docs">NOTIFICATIONS</div>
                            <h2>Notifications</h2>
                            <p>
                                To understand how notifications work and when they are sent read the information below.
                                If you think notifications are not working, most probably you're just testing them in the wrong way, please read the information below before asking for support.
                            </p>
                            <hr class="space" />
                            <h2 id="email">Email notifications</h2>
                            <p>Both agents and users can receive an email notification when a new message is received.</p>
                            <hr class="space-sm" />
                            <h4>Email notifications for admin and agents</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>When a user sends their first message, if the conversation is assigned to a department, an email is sent only to the agents assigned to that department, if the conversation is assigned to a specific agent, an email is sent only to that agent, otherwise an email is sent to all agents who are not online at the moment. Subsequent emails are sent only to the last agent in the conversation.</li>
                                <li>Email notifications are sent only if the last agent in the conversation is offline.</li>
                                <li>If you're using the Dialogflow App, and <b>Settings > Dialogflow > Human takeover</b> is active, no emails are sent if the chatbot knows the answer.</li>
                                <li>
                                    If you don't receive the emails make sure they are working by sending a test email from <b>Settings > Notifications > Test user email</b> or <b>Test agent email</b>.
                                    If you don't receive the test email, your server, or your SMTP server, is not working. Open the browser console for more details about the error.
                                    Because this is not an issue related to Alz-Bot , the support doesn't cover it, please contact your server/hosting/SMTP support instead.
                                </li>
                            </ul>
                            <h4>Email notifications for users</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>When an agent sends a message to a user, an email is sent to the user only if the user is offline.</li>
                                <li>Only 1 email is sent. Subsequent messages will not trigger a new email alert.</li>
                            </ul>
                            <h4>Create the email</h4>
                            <p>
                                To manage the emails and create the contents go to
                                <b>Settings > Notifications</b>.
                                You can use text and HTML. New lines are automatically converted to
                                <b>&lt;br /></b>.
                                You can use the following merge fields in the email. Merge fields are automatically replaced
                                with the updated information.
                            </p>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>{recipient_name}</pre>
                                        </td>
                                        <td>The name of the user or agent who is receiving the email.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{sender_name}</pre>
                                        </td>
                                        <td>The name of the user or agent who was sending the message that triggered the email notification.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{sender_profile_image}</pre>
                                        </td>
                                        <td>
                                            The profile image of the user or agent who was sending the message that triggered the email notification.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{message}</pre>
                                        </td>
                                        <td>
                                            The links to any attachments that were part of the message that triggered the email notification.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{attachments}</pre>
                                        </td>
                                        <td>
                                            Emails may not be delivered for several reasons; below are the most common ones:
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Problems?</h4>
                            <p>
                                Emails may not be delivered several reasons; below are the most common ones:
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Reason</th>
                                        <th>Description</th>
                                        <th>Solution</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hosting problems</td>
                                        <td>
                                            The email server of your web hosting provider is not able to send emails or the emails are sent
                                            but are automatically detected as spam and deleted by the email clients.
                                        </td>
                                        <td>
                                            Please contact your web hosting provider regarding email support or use your SMTP server by activating it in
                                            <b>Settings > Notifications > SMTP</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>SMTP problems</td>
                                        <td>
                                            The email is not sent also if you activated the SMTP option in the
                                            <b>Notifications</b> area.
                                        </td>
                                        <td>
                                            We don't provide support for problems related to your SMTP. Send a test
                                            email to get details about the issue or use
                                            <a target="_blank" rel="nofollow" href="https://sendgrid.com/solutions/smtp-service/">sendgrid.com</a>,
                                            you can send 40000 emails for 30 days for free, then 100/day forever for free. Note: if you're using Gmail enter
                                            <b>smtp.gmail.com</b> as host and set
                                            <b>465</b> or
                                            <b>587</b> as port. You need also to allow access to Gmail to less secure apps, you can do it from
                                            <a href="https://myaccount.google.com/lesssecureapps" target="_blank" rel="nofollow">https://myaccount.google.com/lesssecureapps</a>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="push">Push notifications</h2>
                            <p>
                                Push notifications are like Desktop notifications but with some key difference.
                                Desktop notifications, also called Web notifications, are requested directly by the client while Push notifications come from a server.
                                The main difference is that the Push notifications work always, also if your device is offline, or Alz-Bot  is not open.
                                Also, they are persistent and always visible until closed.
                                Push notifications require an external service to work. We use Pusher, it is free to use for the admin notifications sent to the agents, and it's free to use for up to 2000 users/devices when sending notifications to the users.
                                Unfortunately, Apple has yet to provide iOS support, but we hope it will come soon.
                            </p>
                            <h4>Activation</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to
                                    <a href="https://dashboard.pusher.com/accounts/sign_up" target="_blank" rel="nofollow">https://dashboard.pusher.com/accounts/sign_up</a> and create a new account.
                                </li>
                                <li>
                                    From your dashboard at
                                    <a href="https://dashboard.pusher.com/" target=" _blank" rel="nofollow">https://dashboard.pusher.com</a>, choose the
                                    <b>Beams</b> product by clicking
                                    <b>Get started</b>.
                                    <a href="../media/docs/pusher-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Enter the
                                    <b>Instance name</b> and create the instance. You can enter any value you want.
                                    <a href="../../media/docs/pusher-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    From the left menu of the dashboard click
                                    <b>Keys</b>, copy the
                                    <b>Instance ID</b> and
                                    <b>Primary key</b>.
                                    <a href="../../media/docs/pusher-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Enter the Alz-Bot  admin area, go to
                                    <b>Settings > Notifications > Push notifications</b>, and paste instance ID, primary key.
                                </li>
                                <li>You're done.</li>
                            </ul>
                            <h4>Activation for users</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Download the service worker file
                                    <a href="../docs/files/service-worker.zip">here</a>.
                                </li>
                                <li>
                                    Upload this file to your site at the following location:
                                    <b>
                                        https://your-site.com/service-worker.js
                                    </b>
                                </li>
                                <li>
                                    Go to
                                    <b>Settings > Notifications > Push notifications > Service Worker URL</b> and enter the URL of the file. Ex.
                                    <b>https://your-site.com/service-worker.js</b>.
                                    If you are using the cloud version, enter <b>https://alz-bot.techn-oviz.com/sw.js</b>.
                                    If you are using the SaaS version, replace <b>alz-bot.techn-oviz.com</b> with your domain.
                                </li>
                                <li>You're done.</li>
                            </ul>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Pusher is free to use for up to 1000 concurrent subscribers.
                                    While you should be able to use the free plan for the admin area and all the agents, you may need a paid plan for Push notifications sent to the users depending on your site traffic.
                                </li>
                                <li>Push notifications are currently not supported on iPhone and iOS devices. Push notifications are supported only on Mac, Windows, and Android devices.</li>
                                <li>Push notifications only work for full HTTPS websites. The only exception is localhost to ease development.</li>
                                <li>When a user click the notification the last page visited by the user is open and the chat is open automatically.</li>
                                <li>On desktop the browser needs to be running since that is the process that receives the push messages.</li>
                                <li>When push notifications are active, they replace desktop notifications.</li>
                                <li>On Android and mobile devices, desktop notifications may not work, in which case you need to use push notifications.</li>
                                <li>If Push notifications are active and not working, disable them and try again.</li>
                                <li>Push notifications can not be received on a desktop PC unless a browser is running.</li>
                            </ul>
                            <h4>Push notifications for admin and agents</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    When an agent click the notification the admin area is open and the right conversation is selected. If the admin area is already open the notification will not open a new tab.
                                </li>
                                <li>
                                    When a user sends their first message, a Push notification is sent to all validated agents; subsequent notifications are sent only to
                                    the last agent in the conversation.
                                </li>
                                <li>
                                    If you're using the Dialogflow App, and <b>Settings > Dialogflow > Human takeover</b> is active, no notifications are sent if the chatbot knows the answer.
                                </li>
                                <li>
                                    If you're using the WordPress version, Push notifications are not supported in the WordPress admin area, you need to access the Alz-Bot  admin area directly, more details
                                    <a class="scroll-to" href="#pwa">here</a>.
                                </li>
                                <li>
                                    If the
                                    <b>Routing</b> setting is active, only the agent assigned to the conversation receive the notification, admins see all conversations but don't receive notifications.
                                </li>
                                <li>
                                    If the
                                    <b>Queue</b> setting is active, only the agent assigned to the conversation receive the notification. Notifications are not sent for messages sent by the user while waiting in queue. Admins see all conversations but don't receive notifications.
                                </li>
                                <li>
                                    If a user conversation is assigned to a department, only the agents assigned to that department receive the notification.
                                </li>
                                <li>
                                    If a user conversation is not assigned to any department, only agents with no assigned department receive the notification.
                                </li>
                                <li>Notifications are not supported on iPhone and iOS devices.</li>
                                <li>Notifications are sent only if the last agent in the conversation is offline.</li>
                                <li>
                                    and <b>Settings > Dialogflow > Human takeover</b> is active, no notifications are sent if the chatbot knows the answer.
                                </li>
                                <li>
                                    If push notifications are not working, make sure you allowed the notifications, in Chrome you can check this from <b>Privacy and Security > Site settings > Notifications</b>.
                                    If they don't work on a mobile device, try these steps too: install the PWA or delete it and install it again, restart the mobile device.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="desktop">Desktop notifications</h2>
                            <h4>Desktop notifications</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Notifications are not sent if the user is viewing a page with include the chat (the user browser is open and visible, and the active page contains the chat).</li>
                                <li>Notifications are not supported on iPhone and iOS devices.</li>
                                <li>Notifications work only for secure URLs that use HTTPS (not HTTP). Your Alz-Bot  admin URL must use HTTPS.</li>
                                <li>When push notifications are active, they replace desktop notifications.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="sms">Text message notifications</h2>
                            <p>
                                Both agents and users can be notified via text message when a new message comes in.
                                Text message notifications are provided by Twilio.
                                Twilio is a paid service, but it is cheap, and you can use the trial version to test text message notifications for free.
                            </p>
                            <h4>Activation</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to
                                    <a href="https://www.twilio.com/referral/5GOe1g" target="_blank" rel="nofollow">https://www.twilio.com</a> and create a new account.
                                </li>
                                <li>
                                    Verify your phone number.
                                    <a href="../../media/docs/sms-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Complete the form and choose <b>SMS</b>.
                                    <a href="../../media/docs/sms-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Once into the dashboard, click <b>Get a Trial Number</b>, then <b>Choose this number</b>.
                                    <a href="../../media/docs/sms-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Enter the Alz-Bot  admin area, go to
                                    <b>Settings > Notifications > Text message notifications</b>, and paste account SID, auth token, trial number (or a purchased phone number).
                                    Find all details in the <a target="_blank" rel="nofollow" href="https://www.twilio.com/console">Twilio dashboard</a>.
                                </li>
                                <li>
                                    If you're using the trial version, you can send notifications only to verified numbers.
                                    Enter the Twilio dashboard and click the left button <b># (Phone Numbers)</b>, then click <b>Verified Caller IDs</b> and add your phone number.
                                    <a href="../../media/docs/sms-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    To start using the service live and to receive text messages in Alz-Bot  you need to purchase a phone number.
                                    After the purchase go to <b>Phone numbers > Manage > Active numbers</b>, click your number, and enter the URL of Alz-Bot ,
                                    get it from <b>Alz-Bot > Settings > Notifications > Text message notifications > Get configuration URL</b>. <a href="../../media/docs/sms-5.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    You're done.
                                </li>
                            </ul>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>All phone numbers must have the country code starting with the symbol <b>+</b> (eg. +15558675310).</li>
                                <li>
                                    You can get the user's phone number via registration form, follow-up message, subscribe messageor, or via <b>[email]</b> shortcode. You can manually enter the user phone from the admin area or via API.
                                </li>
                                <li>When a user sends their first message, if the conversation is assigned to a department, a test message is sent only to the agents assigned to that department, if the conversation is assigned to a specific agent, a text message is sent only to that agent, otherwise an text message is sent an email is sent to all agents who are not online at the moment. Subsequent text messages are sent only to the last agent in the conversation.</li>
                                <li>Text message notifications are sent only if the last agent in the conversation is offline.</li>
                                <li>If you're using the Dialogflow App, and <b>Settings > Dialogflow > Human takeover</b> is active, no text messages are sent if the chatbot knows the answer.</li>
                                <li>To use the Sender ID feature enter the sender name in the <b>Sender number</b> field.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="sound">Sound notifications</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Sounds work only after the user or agent interact with the document (the user or agent clicked somewhere).</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="wp">
                            <div class="label label-docs">WORDPRESS</div>
                            <h2>WordPress</h2>
                            <p>The settings below are related to the WordPress version of Alz-Bot.</p>
                            <hr class="space" />
                            <h2 id="wp-sync">User Synchronization</h2>
                            <p>
                                WordPress users can be automatically synchronized with Alz-Bot  by selecting "WordPress"
                                under the
                                <b>Users system</b> in the
                                <b>Settings > WordPress</b> area.
                                When active, the front-end chat automatically recognize all logged-in WordPress users and create a
                                new Alz-Bot  user account with the same details (name, surname, email, and password).
                                Also, the log-in form recognize the email and password of each WordPress user.
                                On Alz-Bot  login, the user is automatically logged in WordPress as well.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To create a WordPress user when a visitor register to Alz-Bot enable the option <b>Settings > WordPress > WordPress registration</b> and include password and email fields in the registration form, they are required. The WordPress user if logged in automtically.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="wp-settings">More information</h2>
                            <h4>Direct access and PWA</h4>
                            <p>
                                You can access the admin area directly without going through WordPress
                                by navigating to
                                <b>/wp-content/plugins/alz-bot/alz-bot/admin.php</b> and
                                logging in with your default WordPress user or agent email and password.
                                Keep in mind that your wp-content folder might be different.
                                By accessing the admin directly, you will also be able to use the admin area as a Progressive Web App.
                                You can find more details on this by clicking
                                <a class="scroll-to" href="#pwa">here</a>.
                            </p>
                            <h4>Login and logout</h4>
                            <p>
                                To logout from the admin area of Alz-Bot , logout from WordPress from the admin area of Alz-Bot , once logged-out you will be able to login with another WordPress account.
                                To access the admin area from within WordPress you must log in with one of the following WordPress user roles: administrator, author, editor.
                            </p>
                            <h4>Get a page or Post Type ID</h4>
                            <p>
                                To get the ID of a specific page or Post Type, go to the admin area of WordPress and edit the page or post.
                                The ID is displayed in the address bar.
                                Example:
                                <b>http://your-site.com/wp-admin/post.php?post=11&action=edit&lang=en</b>
                                (the page/post ID is equal to 11).
                                <a href="../../media/docs/wp-id.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                            </p>
                            <h4>Get a Post Type slug</h4>
                            <p>
                                The Post Type slug of the blog archive and posts is
                                <b>post</b>. The Post Type of the pages is
                                <b>page</b>.
                                To obtain the slug of a custom Post Type, go to the admin area of WordPress and open the custom Post Type page from the left menu.
                                The slug is displayed in the address bar.
                                Example:
                                <b>http://your-site.com/wp-admin/edit.php?post_type=food</b>
                                (the slug is
                                <b>food</b>).
                                <a href="../../media/docs/wp-slug.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                            </p>
                            <h4>Disable WordPress Emoji</h4>
                            <p>
                                The prevent WordPress from replacing the chat emiji with the WordPress ones Enter the code below in the file
                                <b>functions.php</b> of your theme.
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
                            <h4>WordPress Multisite</h4>
                            <p>
                                If you have multisite installation, you must install Alz-Bot  in the main website.
                            </p>
                        </div>
                        <hr />
                        <div id="woocommerce">
                            <div class="label label-docs">WOOCOMMERCE</div>
                            <h2>WooCommerce</h2>
                            <p>The settings below are related to the WooCommerce App for the WordPress version of Alz-Bot .</p>
                            <hr class="space-sm" />
                            <h2 id="woocommerce-dialogflow">Dialogflow</h2>
                            <h4>Getting started</h4>
                            <p>
                                To start using the Dialogflow chatbot go
                                <b>Settings > WooCommerce > Dialogflow synchronization</b> and click
                                <b>Synchronize entities now</b>, then click
                                <b>Create Intents now</b>. Once the synchronization is completed you're done. The chatbot will start replying to the users' questions.
                            </p>
                            <h4>Built-in Intents questions list</h4>
                            <p>
                                By importing the built-in Intents the chatbot can answer the questions like the below ones. For the full list please visit the Intents area of the Dialogflow console.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="icon-list icon-line icon-docs">
                                        <li>Do you sell any shoes for less than $299?</li>
                                        <li>Show me your bags</li>
                                        <li>Do you have anything for women in promotion?</li>
                                        <li>What are the best shoes of 2020?</li>
                                        <li>Add Abstract Print to the cart</li>
                                        <li>Remove Abstract Print from the cart</li>
                                        <li>What do you sell</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="icon-list icon-line icon-docs">
                                        <li>What's the status of my order?</li>
                                        <li>Where my order will be shipped?</li>
                                        <li>Display the products in my cart!</li>
                                        <li>Do you ship in Australia?</li>
                                        <li>Where do you ship?</li>
                                        <li>Open the shoes page.</li>
                                        <li>Go to the cashmere tank page, please.</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="space-sm" />
                            <h4>Actions</h4>
                            <p>
                                The following actions allow the chatbot to interact with the shop autonomously on behalf of the user.
                                To use an action go to Dialogflow, edit an
                                <b>Intent</b>, and add a new
                                <b>Custom Payload</b> response with the following syntax:
                                <b>{ "ACTION-NAME": ACTION-VALUE }</b>.
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Action code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>{ "woocommerce-update-cart": [ "cart-add", "PRODUCT-NAME-OR-ID" ] }</pre>
                                        </td>
                                        <td>
                                            Adds a product to the user's cart. Replace PRODUCT-NAME-OR-ID with the ID or full name of a product.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "woocommerce-update-cart": [ "cart-remove", "PRODUCT-NAME-OR-ID" ] }</pre>
                                        </td>
                                        <td>
                                            Removes a product from the user's cart. Replace PRODUCT-NAME-OR-ID with the ID or full name of a product.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "woocommerce-checkout": true }</pre>
                                        </td>
                                        <td>
                                            Redirects the user to the checkout page.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Multilingual</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>The multilingual feature is compatible with WPML and Polylang plugins.</li>
                                <li>
                                    To activate the multilingual feature go to
                                    <b>Settings > WordPress > Multilingual plugin</b> and choose WPML or Polylang. The synchronization automatically creates the Entities in all available languages of your website. For a language to work, the chatbot must be translated into that language in Dialogflow, more details
                                    <a href="https://cloud.google.com/dialogflow/es/docs/agents-multilingual" target="_blank" rel="nofollow">here</a>.
                                </li>
                                <li>
                                    The built-in Dialogflow Intents are only in English, to translate them go to your
                                    <a href="https://dialogflow.cloud.google.com/" target="_blank" rel="nofollow">Dialogflow Console</a>, choose the language you want to translate, go to the
                                    <b>Intents</b> page, and translate the existing WooCommerce Intents.
                                </li>
                                <li>
                                    The multilingual feature for the WooCommerce
                                    <b>products attributes</b> requires the
                                    <a href="https://wpml.org/documentation/related-projects/woocommerce-multilingual/?aid=154204&affiliate_key=LgJiCRvycckb" target="_blank" rel="nofollow">WooCommerce Multilingual Plugin</a> if you're using WPML, or
                                    <a href="https://polylang.pro/downloads/polylang-for-woocommerce/" target="_blank" rel="nofollow">Polylang for WooCommerce Plugin</a> if you're using Polylang.
                                </li>
                            </ul>
                            <h4>More information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    If you edit an existing built-in WooCommerce Intent in Dialogflow and then you import again the intents from
                                    <b>
                                        Settings > WooCoommerce > Dialogflow synchronization
                                    </b> you will lose your customization. To keep your edits change the Intent name.
                                </li>
                                <li>The chatbot can display up to 15 products via the slider rich message.</li>
                                <li>The chatbot is automatically updated every 60 min by default, but it can take longer. If you update a product, category, tag, or attribute, please wait a few hours for the new contents to take effect.</li>
                                <li>The synchronization detects the following events: product deleted, product restored from trash, product updated, new product added, product deleted, category or tag deleted, category or tag updated, new category or tag added.</li>
                                <li>To improve the chatbot add all the possible variants of an attribute, including the variants not used in your products. Example: if you sell only yellow and red t-shirts add all possible colors to the attribute color, not only yellow and red.</li>
                                <li>
                                    You can manually synch the chatbot at any time from
                                    <b>
                                        <b>Settings > WooCommerce > Dialogflow synchronization</b>
                                    </b>
                                </li>
                                <li>
                                    Products must have the
                                    <b>Regular price</b> attribute set.
                                </li>
                                <li>
                                    Products names must not use the double-quote char:
                                    <b>"</b>.
                                </li>
                                <li>
                                    Some multilingual feature is not compatible with
                                    <b>sub-domains</b> or
                                    <b>external domains</b> language URLs.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="woocommerce-merge-fields">Merge fields and shortcodes</h2>
                            <p>
                                The following merge fields and shortcodes can be used in emails and messages.
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Description</th>
                                        <th>Compatibility</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>{product_images}</pre>
                                        </td>
                                        <td>Slider of product's images. If there are no results, the full message is replaced by "No results found".</td>
                                        <td>Dialogflow</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{shipping_location_check}</pre>
                                        </td>
                                        <td>Check if the store ship in the given country.</td>
                                        <td>Dialogflow</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_attribute_terms}</pre>
                                        </td>
                                        <td>Attribute terms list of a product's attribute.</td>
                                        <td>Dialogflow</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_attribute_name}</pre>
                                        </td>
                                        <td>Attribute name of an attribute term.</td>
                                        <td>Dialogflow</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{category_link}</pre>
                                        </td>
                                        <td>Category page link.</td>
                                        <td>Dialogflow</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{tag_link}</pre>
                                        </td>
                                        <td>Tag page link.</td>
                                        <td>Dialogflow</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_name}</pre>
                                        </td>
                                        <td>Product name.</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_image}</pre>
                                        </td>
                                        <td>Product image.</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_price}</pre>
                                        </td>
                                        <td>Product price.</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_description}</pre>
                                        </td>
                                        <td>Product description.</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_rating}</pre>
                                        </td>
                                        <td>Product rating. If the product has no ratings yet, the full message is replaced by "[product name] has no ratings or reviews yet.".</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_link}</pre>
                                        </td>
                                        <td>Product link.</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{shipping_locations}</pre>
                                        </td>
                                        <td>List of the shipping countries.</td>
                                        <td>Dialogflow, Messages, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{shop_link}</pre>
                                        </td>
                                        <td>Shop link.</td>
                                        <td>Dialogflow, Messages, Automated messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{cart_link}</pre>
                                        </td>
                                        <td>Cart link.</td>
                                        <td>Dialogflow, Messages, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{cart}</pre>
                                        </td>
                                        <td>List of the products in the user's cart. If the cart is empty, the full message is replaced by "Your cart is currently empty".</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{order_status}</pre>
                                        </td>
                                        <td>Status of the last user's order. If the user has never placed an order, the full message is replaced by "You haven't placed an order yet".</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{order_details}</pre>
                                        </td>
                                        <td>Details of the last order user's order. If the user has never placed an order, the full message is replaced by "You haven't placed an order yet".</td>
                                        <td>Dialogflow, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_card}</pre>
                                        </td>
                                        <td>
                                            Product card. Optional attributes:
                                            <ul class="icon-list icon-line icon-docs">
                                                <li>
                                                    <b>id</b> The product ID.
                                                </li>
                                                <li>
                                                    <b>link-type</b> The action on user click. Available values: purchase, checkout, link. Default: purchase.
                                                </li>
                                                <li>
                                                    <b>link-text</b> The button text. Default: Purchase.
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
                                            Search for the products matching the given attribures and display them in a slider of products cards.
                                            If there are no results, the full message is replaced by "No results found". Optional attributes:
                                            <ul class="icon-list icon-line icon-docs">
                                                <li>
                                                    <b>id</b> The products IDs separated by commas. If this attribute is setted, all other attrbutes are ignored.
                                                </li>
                                                <li>
                                                    <b>tag</b> Display only the products of the given tag.
                                                </li>
                                                <li>
                                                    <b>category</b> Display only the products of the given category.
                                                </li>
                                                <li>
                                                    <b>discounted</b> Set it to true to show only the products in promotions.
                                                </li>
                                                <li>
                                                    <b>rating</b> Display only the products with a rating equal or bigger than the given value. Enter a value from 1 to 5.
                                                </li>
                                                <li>
                                                    <b>max-price</b> Display only the products with a price equal or smaller than the given value. Enter a number.
                                                </li>
                                                <li>
                                                    <b>min-price</b> Display only the products with a price equal or bigger than the given value. Enter a number.
                                                </li>
                                                <li>
                                                    <b>attribute</b> Display only the products with the given attribute term.
                                                </li>
                                                <li>
                                                    <b>link-type</b> The action on user click. Available values: purchase, checkout, link. Default: purchase.
                                                </li>
                                                <li>
                                                    <b>link-text</b> The button text. Default: Purchase.
                                                </li>
                                                <li>
                                                    <b>language</b> The language code of the products to display.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>Dialogflow, Messages, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{payment_methods}</pre>
                                        </td>
                                        <td>Available payment methods.</td>
                                        <td>Dialogflow, Messages, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{coupon}</pre>
                                        </td>
                                        <td>
                                            Generate a coupon code. Optional attributes:
                                            <ul class="icon-list icon-line icon-docs">
                                                <li>
                                                    <b>discount</b> The coupon discount in percentage.
                                                </li>
                                                <li>
                                                    <b>expiration</b> The coupon expiration. Example: '60 seconds', '5 hours', '2 days'.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>Dialogflow, Messages, Automated Messages</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{product_names}</pre>
                                        </td>
                                        <td>Products names.</td>
                                        <td>Only where specified</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{discount_price}</pre>
                                        </td>
                                        <td>Discounted product price or total discounted price of multiple products.</td>
                                        <td>Only where specified</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{original_price}</pre>
                                        </td>
                                        <td>Original product price or total original price of multiple products.</td>
                                        <td>Only where specified</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{carts}</pre>
                                        </td>
                                        <td>Multiple users carts list with products.</td>
                                        <td>Only where specified</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{purchase_button}</pre>
                                        </td>
                                        <td>Purchase product button.</td>
                                        <td>Only where specified</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{html_product_card}</pre>
                                        </td>
                                        <td>Product details card.</td>
                                        <td>Email</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{html_products_list} </pre>
                                        </td>
                                        <td>List of products details cards.</td>
                                        <td>Email</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Rich Messages</h4>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Shortcode</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>[woocommerce-button name="" ids="" coupon="" checkout="true"]</pre>
                                        </td>
                                        <td>
                                            Add a product or multiple products to the user's cart. Optionally apply a coupon code, and redirect the user to the checkout page.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="woocommerce-info">More information</h2>
                            <h4 id="woocommerce-waiting-list">Waiting list</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>The message is sent automatically when a user visits a page of a product that's out of stock.</li>
                                <li>The message is sent automatically when a user tries to purchase a product that's out of stock via the chatbot.</li>
                                <li>The message is sent a maximum of 1 time every 24 hours for each out of stock product.</li>
                                <li>If the user'email is not set, the chat asks for the user' email automatically.</li>
                            </ul>
                            <h4 id="woocommerce-removed-item">Removed item from cart notification</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>If the coupon is included, the chat message is sent only for the first removed item, then again after coupon expiration.</li>
                                <li>The coupon is valid only for the removed items.</li>
                                <li>The following merge fields can be used in the email subject too: {coupon}, {discount_price}, {original_price}, {product_names}, {customer_name}.</li>
                                <li>Only the users with an email will get notified via email.</li>
                            </ul>
                            <h4 id="woocommerce-returning-visitor">Returning visitors notification</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>The chat message is sent after 15 seconds.</li>
                                <li>The chat message is sent to the active conversation, if any, otherwise to a new conversation.</li>
                                <li>A visitor is a "returning visitor" only if at least 24 hours have passed since the last visit.</li>
                                <li>The chat message is sent only 1 time, if the visitor returns again, the message is not sent.</li>
                            </ul>
                            <h4 id="woocommerce-waiting-list">Follow-up message</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>If the message contains a coupon, the message is sent only if there are no other valid coupons assigned to the user.</li>
                            </ul>
                            <h4 id="woocommerce-more-information">Miscellaneous</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>When a visitor completes a purchase, a new Alz-Bot  user with the details provided in the checkout form is automatically created.</li>
                                <li>The automatic messages(abandoned cart message, follow-up messages, ...) are sent to the active conversation, if any, otherwise to a new conversation.</li>
                                <li>The default coupon values are 0% discount and 7 days expiration.</li>
                                <li>Coupons in the trash are still valid, you must permanently delete them.</li>
                                <li>All coupons can be used only 1 time.</li>
                                <li>Expired coupons are deleted automatically via cron jobs.</li>
                                <li>The products pop-up of the admin conversations area search by product name, description, and price.</li>
                                <li>The products pop-up of the admin conversations area is multilingual and displays automatically the products of the user's language if available.</li>
                                <li>To view orders of guest users who did not send any chat message before the purchase you need to enable <b>Settings > Users > Register all visitors</b>.</li>
                                <li>The setting <b>Ticket products selector > Exclude products</b> accepts WooCommerce product IDs separated by commas.</li>
                            </ul>
                            <h4 id="woocommerce-whatsapp">WhatsApp shop</h4>
                            <p>
                                To allow a user to purchase your WooCommerce shop products on WhatsApp the <b>product ID</b> of your WhatsApp shop products must be the same as the <b>product ID</b> of your WooCommerce products.
                                Once the user has sent the WhatsApp order, WooCommerce automatically saves it, use the merge field <b>{catalog_checkout}</b> to send the user the checkout link.
                            </p>
                            <p>
                                Use the plugin <a href="https://wordpress.org/plugins/facebook-for-woocommerce/" target="_blank" rel="nofollow">https://wordpress.org/plugins/facebook-for-woocommerce/</a> to automatically synchronize the WooCommerce products with the WhatsApp shop products.
                            </p>
                        </div>
                        <hr />
                        <div id="tickets">
                            <div class="label label-docs">TICKETS</div>
                            <h2>Tickets</h2>
                            <p>The settings below are related to the Tickets App.</p>
                            <hr class="space-sm" />
                            <h2 id="tickets-installation">Installation and usage</h2>
                            <h4>PHP installation</h4>
                            <p>
                                To display the tickets area include the following script into your page.
                            </p>
                            <pre class="prettyprint">
                                &lt;script src="alz-bot/js/min/jquery.min.js">&lt;/script> &lt;!-- Not required if jQuery is already loaded -->
                                &lt;script id="sbinit" src="alz-bot/js/main.js?mode=tickets">&lt;/script>
                            </pre>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    You can not include both chat and tickets area on the same page. Make sure to remove the script that loads the chat.
                                    You can show the tickets area also by inserting the code <b>&lt;script>SB_TICKETS = true;&lt;/script></b> into any page showing the chat.
                                </li>
                                <li>
                                    To set the position of the tickets area Enter the code
                                    <b>&lt;div id="sb-tickets">&lt;/div></b>. The tickets area will be displayed inside this div element. By default, the tickets area is appended to the
                                    <b>body</b>.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h4>WordPress installation</h4>
                            <p>
                                To display the tickets use the shortcode
                                <b>[sb-tickets]</b>. Insert it in any page, post, or post type item.
                            </p>
                            <h4>Cloud version installation</h4>
                            <p>
                                To display the tickets area include the cloud chat script into your page and add the attribute <b>&mode=tickets</b> to the script URL, e.g. <b>&lt;script id="chat-init" src="https://alz-bot.techn-oviz.com/account/js/init.js?id=65895623&mode=tickets">&lt;/script></b>.
                                You can show the tickets area also by inserting the code <b>&lt;script>SB_TICKETS = true;&lt;/script></b> into any page showing the chat.
                            </p>
                            <br />
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <hr class="space" />
                            <h2 id="tickets-info">Information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Tickets are the same of chat conversations and messages, the only difference from the chat is the front-end panel.</li>
                                <li>Most of the settings of the chat are compatible with the Tickets App but not all of them. The dashboard settings, the pop-up message, and more are not compatible.</li>
                                <li>
                                    Dedicated APIs for the Tickets App are available in the API section.
                                </li>
                                <li>
                                    To remove the mandatory 'New ticket' form for new users, activate the welcome message of
                                    <b>Settings > Messages > Welcome message. The welcome message delay is ignored in the tickets area, the message is sent immediately.</b>.
                                </li>
                                <li>
                                    To manually disable the mandatory registration only on a single page use the JavaScript code
                                    <b>var SB_REGISTRATION_REQUIRED = true</b>. Set it to
                                    <b>true</b> to force the registration instead.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="dialogflow">
                            <div class="label label-docs">DIALOGFLOW</div>
                            <h2>Dialogflow</h2>
                            <p>The settings below are related to the Dialogflow App.</p>
                            <hr class="space-sm" />
                            <h2 id="dialogflow-sync">Synchronization</h2>
                            <p>
                                To start using Dialogflow with Alz-Bot follow the steps below.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to <a href="https://console.cloud.google.com/" target="_blank" rel="nofollow">console.cloud.google.com</a> and sign in.
                                </li>
                                <li>
                                    Activate the Dialogflow API by entering <b>Dialogflow API</b> on the top search bar. Click <b>Dialogflow API</b> and then click <b>Enable</b>. <a href="../../media/docs/dialogflow-api.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Create your first project by clicking the <b>Select a project</b> button on top-left. <a href="../../media/docs/dialogflow-sync-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> Name the project as you want. <a href="../../media/docs/dialogflow-sync-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Select the project and the go to <b>Left menu > APIs and services > OAuth consent screen</b>.
                                    Select <b>External</b> and click <b>Create</b>. <a href="../../media/docs/dialogflow-sync-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                    In <b>App name</b> enter what you want, in <b>User support email</b> and <b>Developer contact information</b> enter your email.
                                    Click <b>Save and continue</b>. <a href="../../media/docs/dialogflow-sync-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    In the scopes area, click <b>Add or remove scopes</b>, scroll bottom and into the <b>Manually add scopes</b> area enter <b>https://www.googleapis.com/auth/dialogflow,https://www.googleapis.com/auth/cloud-language,https://www.googleapis.com/auth/cloud-translation</b>. Click <b>Add to table</b> and then <b>Update</b> and <b>Save and continue</b>. <a href="../../media/docs/dialogflow-sync-5.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    In the test users area, click <b>Add users</b> and add your Google email, use the same email as the currently logged in account. Click <b>Save and continue</b>. <a href="../../media/docs/dialogflow-sync-6.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Go to <b>Left menu > APIs and services > Credentials</b> and click <b>Create credentials</b>, select <b>OAuth client ID</b>. <a href="../../media/docs/dialogflow-sync-7.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                    As <b>Application type</b> select <b>Web application</b>. Enter any name you want.
                                    In <b>Authorised redirect URI</b> enter the redirect URL, get it from <b>Alz-Bot > Settings > Dialogflow > Synchronization > Authorised redirect URI</b>.
                                    Click <b>Create</b>. <a href="../../media/docs/dialogflow-sync-8.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Copy <b>Client ID</b> and <b>Client Secret</b> and paste them into <b>Alz-Bot > Settings > Dialogflow > Synchronization</b>. Save the settings. <a href="../media/docs/dialogflow-sync-9.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Click <b>Alz-Bot > Settings > Dialogflow > Synchronization > Synchronize</b>.
                                    Login with the same Google account you have used till now. On the next screen click <b>Continue</b>. <a href="../../media/docs/dialogflow-sync-10.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a> On the next screen select all scopes and click <b>Continue</b>. <a href="../../media/docs/dialogflow-sync-11.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Copy the <b>Refresh token</b> and paste it into <b>Alz-Bot > Settings > Dialogflow > Synchronization > Refresh token</b>. <a href="../../media/docs/dialogflow-sync-12.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    You are almost done!
                                    Now you have to enter your chatbot Project ID or Agent Name, to get it follow the <a href="#dialogflow-project-id" class="scroll-to">steps below</a>. Note that the app does not need to be approved by Google.
                                </li>
                            </ul>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <hr class="space-sm" />
                            <h4 id="dialogflow-project-id">Get Project ID</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Log in to the Dialogflow ES console by going to
                                    <a target="_blank" rel="nofollow" href="https://dialogflow.cloud.google.com/">dialogflow.cloud.google.com</a>.
                                    You must sign in with the same Google account used during the synchronization.
                                </li>
                                <li>
                                    Click the
                                    <b>gear icon</b> at the top left, near the chatbot name, and open the settings area.
                                    <a href="../../media/docs/dialogflow-id-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
                                    If you haven't created a chatbot yet, follow the <a href="#dialogflow-bot" class="scroll-to">instructions below</a> to create your first bot.
                                </li>
                                <li>
                                    Copy the
                                    <b>Project ID</b>
                                    <a href="../../media/docs/dialogflow-id-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
                                </li>
                                <li>
                                    Make sure to choose
                                    <b>US / GLOBAL</b> on the top left of the Dialogflow dashboard
                                    <a href="../../media/docs/dialogflow-region.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
                                </li>
                            </ul>
                            <h4>Get Dialogflow CX Agent Name</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Log in to the Dialogflow CX console by going to
                                    <a target="_blank" rel="nofollow" href="https://dialogflow.cloud.google.com/cx/">https://dialogflow.cloud.google.com/cx/</a>.
                                </li>
                                <li>
                                    Select the project of the desidered agent and go to the agents page.
                                    You can enter the agents page by selecting the agent and by clicking the top button <b>Agents > View all agents</b>
                                    <a href="../../media/docs/dialogflow-cx-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
                                </li>
                                <li>
                                    Click the options menu for the desiderate agent in click <b>Copy name</b>
                                    <a href="../../media/docs/dialogflow-cx-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
                                </li>
                                <li>
                                    More details at <a target="_blank" rel="nofollow" href="https://cloud.google.com/dialogflow/cx/docs/quick/api#detect-intent-drest">https://cloud.google.com/dialogflow/cx/docs/quick/api#detect-intent-drest</a>.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="dialogflow-bot">Chatbot Creation</h2>
                            <p>
                                If you haven't created a chatbot as of yet, follow the instructions below to create your first bot.
                                The creation and management of your Dialogflow chatbot is handled entirely by Dialogflow.
                                There are a lot of tutorials online that can help you create and configure your Dialogflow bot.
                            </p>
                            <h4>Create a basic chatbot</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To create your first chatbot enter the <a target="_blank" rel="nofollow" href="https://dialogflow.cloud.google.com/">Dialogflow console</a> and create an agent.
                                    As <b>Google project</b> select the same project used during the synchronization.
                                </li>
                                <li>
                                    Add a new <b>Intent</b> from the left menu and open it.
                                </li>
                                <li>
                                    In the <b>Training phrases</b> area adds the user's question you want the chatbot to reply to, add as many variants are you can.
                                    For example, if you want to the chatbot to reply to users asking for your business address, add variants like "what is your address", "address", "where are you".
                                </li>
                                <li>
                                    In the <b>Responses</b> area adds the bot answer as a <b>text response</b>.
                                </li>
                                <li>
                                    You have created your first question and answer! Test if from the right area or from the Alz-Bot  chat.
                                    Add new Intents to populate your chatbot with the questions and answers you want.
                                    You can include basic pre-built questions and answers by enabling the <b>Small Talk</b> feature from the left menu.
                                </li>
                            </ul>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <h4>Here are some great resources to help you build a more complex chatbot:</h4>
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
                            <h2 id="dialogflow-actions">Actions</h2>
                            <p>
                                The following actions give the chatbot the ability to interact with the website autonomously on behalf of the user.
                                To use an action go to Dialogflow, edit an
                                <b>Intent</b>, and add a new
                                <b>Custom Payload</b> response with the following syntax:
                                <b>{ "ACTION-NAME": ACTION-VALUE }</b>.
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Action code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>{ "human-takeover": true }</pre>
                                        </td>
                                        <td>
                                            Disable the chatbot for 5 minutes, notify agents, and leave the conversation marked as unread.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "disable-bot": true }</pre>
                                        </td>
                                        <td>
                                            Disable the chatbot for 5 minutes.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "redirect": "URL" }</pre>
                                        </td>
                                        <td>
                                            Redirect the user to the given URL. Add the value
                                            <b>"new-window": true</b> to open the URL in a new window.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "open-article": ID }</pre>
                                        </td>
                                        <td>
                                            Open the article with the given ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "transcript": true }</pre>
                                        </td>
                                        <td>
                                            Generate the conversation transcript as a text file and download it.
                                            Set it to <b>email</b> to send the transcript to the user's email, add the value <b>message: "Your message"</b> to include a message in the email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "department": ID }</pre>
                                        </td>
                                        <td>
                                            Change or set the conversation department and notify the agents.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "agent": ID }</pre>
                                        </td>
                                        <td>
                                            Change or set the agent assigned to the conversation and notify the agent.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "send-email": { "recipient": "active_user", "message": "", "attachments": [] } }</pre>
                                        </td>
                                        <td>
                                            Send an email to the active user or agents. Attachments syntax: <b>[["name", "link"], ["name", "link"], ...]]</b>.
                                            Recipient value can be <b>active_user</b> or <b>agents</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "update-user": true }</pre>
                                        </td>
                                        <td>
                                            Tells the admin area to update the user of the active conversation.
                                            Use this action in combination with other actions to update the user details of the admin area in real-time.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "archive-chat": true }</pre>
                                        </td>
                                        <td>
                                            Archive the chat and send the close message if active.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>{ "update-user-details": { "email": "", "last_name": "", "first_name": "", "extra": { "phone": ["+123456789", "Phone"] }}}</pre>
                                        </td>
                                        <td>
                                            Update the details of the active user. You can update all details, including <b>first_name</b>, <b>last_name</b>, <b>email</b>, <b>user_type</b>, <b>password</b>
                                            You can update the user extra details, like the phone number, by entering the values into the <b>extra</b> key, the values must use the following syntax: <b>"slug": [value, "label"]</b>.
                                            Download an example <a href="../files/dialogflow-example-1.zip">here</a>. To upload an Intent go to the <b>Intents</b> area and click the 3-dots menu icon on the top-right, then click <b>Upload Intent</b>.
                                            Start the conversation by sending the message "start".
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="dialogflow-translation">Automatic Translation</h2>
                            <p>
                                To enable the language detection feature and automatic translation of agent messages to the language of the user, and user messages to the language of the agent,
                                check the option <b>Settings > Dialogflow > Automatic translation</b> and synchronize Dialogflow.
                                The Google account used for the Dialogflow synchronization must have billing and the <b>cloud-translation</b> service enabled, to do that follow the steps below:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Log in to <a target="_blank" rel="nofollow" href="https://console.cloud.google.com">https://console.cloud.google.com</a> with your Google account and select the project of your Dialogflow Agent.
                                </li>
                                <li>
                                    On the top search bar type <b>cloud translation</b>, select the <b>Cloud Translation API</b> service and enable it. Please note that this is a paid service with a free tier, additional charges may occur.
                                </li>
                                <li>
                                    Enable the billing by clicking <b>Left menu > Billing</b> and by enabling a billing account with a valid payment method. Enable billing for the project of your Dialogflow agent.
                                </li>
                            </ul>
                            <p>Once you completed the Google account setup the automatic translations start working immediately. Here more details:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    The user messages in the admin area are translated automatically in real-time to match the agent language.
                                </li>
                                <li>
                                    The agent messages are translated automatically in real-time to match the user language.
                                </li>
                                <li>
                                    Agents can view the original message by opening the message menu and by clicking <b>View original message</b>.
                                </li>
                                <li>
                                    The agent language is based on the <b>language</b> user detail of the agent if set, otherwise on the browser language, or admin area language.
                                </li>
                                <li>
                                    The user language is based on the <b>language</b> user detail of the user if set, otherwise on the browser language, or it can be detected with the feature <b>Setting > Dialogflow > Language detection</b>.
                                </li>
                            </ul>
                            <h4>Language detection</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>The user message must be at least 2 words long.</li>
                                <li>Language detection is executed only for the first 2 user messages of a conversation.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="dialogflow-human-takeover">Human Takeover</h2>
                            <h4>General information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    When the human takeover is activated the chatbot is automatically disabled for as long as the agent is online.
                                    After that, the chatbot is activated again but no default fallback messages will be sent within 10 days of human takeover if the chatbot doesn't know the answer to the user's question in the same conversation.
                                    You can force a Dialogflow message to be always sent by adding to the Intent the custom Payload value <b>"force-message": true</b>.
                                </li>
                                <li>The chatbot is fully activated again when the conversation is archived or deleted.</li>
                                <li>If you're using Slack, no messages will be sent if the chatbot knows the answer. Once the human takeover is active all conversation's messages are sent to Slack.</li>
                                <li>When a human agent reply to a user the human takeover is activated automatically.</li>
                            </ul>
                            <h4>Human takeover option</h4>
                            <p>When the option <b>Human takeover</b> is active the following happens:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>If enabled, the request is sent only if the message sent by the user is longer than 3 chars and contains at least two words. This optimization prevents mistaken requests.</li>
                                <li>The conversations to which the chatbot was able to answer correctly, are marked as read and moved at the bottom of the <b>Inbox</b> list.</li>
                            </ul>
                            <p>When the user confirms the human takeover, or if it is automatic, the following happens:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>The conversation is marked as unread and moved on top of the <b>Inbox</b>.</li>
                                <li>Any future user messages in the same conversation sent within 10 days of the human takeover, and without an answer from the bot, will trigger agent notifications.</li>
                                <li>If agents email notifications are active, an email notification is sent to the agent assigned to the conversation, or, if the user's conversation is assigned to a department, to the agents assigned to that department, otherwise it is sent to all offline agents.</li>
                                <li>If push notifications are active, a push notification is sent to the agent assigned to the conversation, or, if the user's conversation is assigned to a department, to the agents assigned to that department, otherwise it is sent to all offline agents.</li>
                                <li>If text message notifications are active, a text message is sent to the agent assigned to the conversation, or, if the user's conversation is assigned to a department, to the agents assigned to that department, otherwise it is sent to all offline agents.</li>
                                <li>No human takeover requests within 10 days of the human takeover will be sent in the same conversation.</li>
                                <li>If <b>Settings > Message > Follow up message</b> is active, the message requesting the user's email is sent only if the user does not have the email.</li>
                                <li>If <b>Settings > Messages > Offline Message</b> is active, the offline message is sent only if it is not office hours or if all agents are offline.</li>
                                <li>If <b>Settings > Miscellaneous > Queue</b> is active, the queue is activated.</li>
                            </ul>
                            <h4>Manual human takeover</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    You can manually trigger the human takeover by creating a new
                                    <b>Intent</b> with the following
                                    <b>Custom Payload</b> response:
                                    <b>{ "human-takeover": true }</b>.
                                </li>
                                <li>
                                    The manual takeover automatically notify agents via email and leave the conversation marked as unread.
                                </li>
                                <li>To manually send a human take over request use the chips rich message with ID <b>sb-human-takeover</b>. Ex. <b>[chips id="sb-human-takeover" options="Human support,Cancel" message=""]</b>.</li>
                            </ul>
                            <h4>WhatsApp, Messenger, Telegram</h4>
                            <p>
                                The make the human takeover request work on WhatsApp, Messenger, Telegram you need to create a
                                new <b>Intent</b> with <b>human-takeover</b> as <b>input Context</b>, nothing as <b>output Context</b>, a
                                list of the user's most common confirmation messages as <b>Training phrases</b>(e.g. ok, yes)
                                and <b>{ "human-takeover": true }</b> as <b>Custom Payload</b> response
                                <a href="../../media/docs/human-takeover-intent.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.<br />
                                <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            </p>
                            <hr class="space" />
                            <h2 id="smart-reply">Smart Reply</h2>
                            <p>
                                Smart Reply suggests quick responses in real-time during a conversation. Once active, you will see the suggested replies in the conversation area, if any.
                                There are two ways to populate the suggestions: via bot, via agent Assist.
                            </p>
                            <h4>Bot Suggestions</h4>
                            <p>To use the bot's suggestions just sync Dialogflow normally and train the chatbot as usual. The same chatbot used for the users will be used.</p>
                            <h4>Agent Assist Suggestions</h4>
                            <p>
                                Agent Assist requires techincal knowledge in order to work and it's intended only for enterprise business with a data set of at least 30.000 conversations.
                                If you never used Agent Assist you most likely don't have the knowledge and data to use it, and so you can ignore it.
                                More details at <a href="https://cloud.google.com/agent-assist/docs/conversation-profile" target="_blank" rel="nofollow">https://cloud.google.com/agent-assist/docs/conversation-profile</a>.
                            </p>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Smart reply first look for a suggestion from the bot, if there is at least one it returns the results,
                                    otherwise look for the suggestion via the agent assistant if available.
                                    The agent assistant is never used if the chatbot gives at least one hint.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="open-ai">OpenAI</h2>
                            <p>
                                OpenAI (ChatGPT) integration gives your chatbot the ability to answer general questions about almost anything you can imagine.
                                To start using it, follow the steps below.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Register at <a href="https://beta.openai.com/signup" target="_blank" rel="nofollow">https://beta.openai.com/signup</a>.
                                </li>
                                <li>
                                    Get an API key from <a href="https://beta.openai.com/account/api-keys">https://beta.openai.com/account/api-keys</a> and paste it into <b>Settings > Dialogflow > OpenAI > API key</b>
                                </li>
                            </ul>
                            <h4>Generate user expressions - Option</h4>
                            <p>
                                When this option is active, OpenAI will generate new user expressions in real time when you open the <b>Dialogflow Intent</b> window by clicking the <b>Send to dialogflow</b> menu item of a message in a conversation.
                            </p>
                            <h4>Generate user expressions - Button</h4>
                            <p>
                                When you click the button <b>Generate user expressions</b>, openAI will update your Dialogflow agent and generate new user expressions for each Intent.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Make a backup of your Dialogflow agent first.
                                </li>
                                <li>
                                    This task can take several minutes or even hours if your chatbot has a lot of Intents.
                                    Since the operation takes a long time, your server may interrupt the operation (operation timeout) before it finishes, in which case you need to click the button again.
                                    You can verify if the operation is interrupted by checking the browser console for errors.
                                </li>
                                <li>
                                    This task is performed only once per Intent. Previously processed Intents will be ignored.
                                </li>
                                <li>
                                    This task checks existing user expressions and does not create duplicates.
                                </li>
                                <li>
                                    The first 5 user expressions will be used to generate new user expressions.
                                </li>
                                <li>
                                    Since this is an automated process, we strongly recommend reviewing your Intents after the task has been completed.
                                </li>
                            </ul>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    The OpenAI query is performed only if the chatbot does not know the answer to the user's question and if the length of the user's message is greater than 6 characters.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="google-search">Google search</h2>
                            <p>
                                The Google search features give your chatbot the ability to search for answers on Google and your website and automatically correct misspelled user questions.
                                To start using it, follow the steps below.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Register at <a href="https://programmablesearchengine.google.com/" target="_blank" rel="nofollow">https://programmablesearchengine.google.com/</a>.
                                </li>
                                <li>
                                    Create a search and setup it is as you want. We recommend to add only your website and Wikipedia if you want your chatbot to reply to general questions, leave disabled the option <b>Search the entire web</b>.
                                    Use the setting <b>Entities</b> to exclude invalid results.
                                </li>
                                <li>
                                    Go to <b>Edit search engine > Setup > Basic</b> and copy the <b>Search engine ID</b> value, paste it in Alz-Bot .
                                </li>
                                <li>
                                    To get the API key visit <a href="https://developers.google.com/custom-search/v1/overview" target="_blank" rel="nofollow">https://developers.google.com/custom-search/v1/overview</a> and click <b>Get a key</b>.
                                </li>
                            </ul>
                            <h4>Entities</h4>
                            <p>
                                The <b>Entities</b> setting analyze the user's message and recognize and extract entities like cities, events, dates, and more.
                                Use it to exclude invalid results returned by Google search. To enable this setting follow the steps below.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Log in to <a href="https://console.cloud.google.com/" target="_blank" rel="nofollow">https://console.cloud.google.com</a> with your Google account and select the project of your Dialogflow Agent.
                                </li>
                                <li>
                                    Enter <b>Cloud Natural Language API</b> in the search bar at the top, select <b>Cloud Natural Language API</b> and enable the API  <a href="../../media/docs/cloud-natural-language-api.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>.
                                </li>
                                <li>
                                    Enable the billing by clicking <b>Left menu > Billing</b> and by enabling a billing account with a valid payment method. Enable billing for the project of your Dialogflow agent.
                                </li>
                            </ul>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    The Google search is performed only if the chatbot does not know the answer to the user's question and if the length of the user's message is greater than 6 characters.
                                </li>
                                <li>
                                    If the Google search returns a result, the Dialogflow context <b>google-search</b> is automatically activated.
                                    The context contains the attribute <b>link</b> which is the website's link of the Google search result.
                                    Use the context to create a new intent that provides the link, if the user sends a message like <b>tell me more</b> or <b>I want to know more</b>.
                                </li>
                                <li>
                                    Google Search is not required to activate the spelling correction.
                                    You can disable Google Search and activate only spelling correction.
                                </li>
                                <li>
                                    If Google Search is active, it will have priority over OpenAI.
                                </li>
                            </ul>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <hr class="space" />
                            <h2 id="fulfillment">Fulfillment</h2>
                            <p>The fulfillment data sent to your webhook URL is like below:</p>
<pre class="prettyprint lang-json">
 {
 	"responseId": "4a58fc4f...",
 	"queryResult": {
 		"queryText": "fullfilment",
 		"parameters": [],
 		"allRequiredParamsPresent": true,
 		"fulfillmentText": "Example",
 		"fulfillmentMessages": [{
 			"text": {
 				"text": ["Response"]
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
 			"displayName": "Fullfilment"
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
                            <p>The <b>payload</b> and <b>session</b> fields contain the Alz-Bot user ID and conversation ID.</p>
                            <hr class="space" />
                            <h2 id="dialogflow-info">Information</h2>
                            <h4>Knowledge Base</h4>
                            <p>
                                Knowledge Base are automatically enabled. Knowledge Base is a feature that gives your chatbot the ability to search within documents (such as a PDF) or web pages to find an answer.
                                To create your first Knowledge Base, go to
                                <a target="_blank" rel="nofollow" href="https://cloud.google.com/dialogflow/docs/knowledge-connectors">cloud.google.com/dialogflow/docs/knowledge-connectors</a>
                            </p>
                            <h4>Dialogflow response</h4>
                            <p>
                                The full Dialogflow
                                <b>JSON</b> response is automatically saved in the database,
                                <b>sb_messages</b>, column
                                <b>payload</b>.
                            </p>
                            <h4>User attachments</h4>
                            <p>
                                User attachments are sent to Dialogflow by appending the attachments to the message details in the following format:
                                <pre>[name:file-name.ext,url:URL,extension:file-extension]</pre>
                                Example:
                                <pre class="prettyprint">
                                    [name:archive.zip,url:https://alz-bot.com/archive.zip,extension:zip]
                                    [name:license.pdf,url:https://alz-bot.com/license.pdf,extension:pdf]
                                </pre>
                            </p>
                            <h4>Bot attachments</h4>
                            <p>
                                To allow the chatbot to send attachments, add a
                                <b>Custom Payload</b> response and insert this JSON code:
                                <pre class="prettyprint lang-json">
                                    { "attachments": [["name", "YOUR-LINK"], ["name", "YOUR-LINK"], ["name", "YOUR-LINK"]]}
                                </pre>
                                Replace "name" with the actual name of the attachment to display and replace "YOUR-LINK" with the actual URL of the file.
                                Images attachments are displayed automatically as images.
                            </p>
                            <h4>Rich messages</h4>
                            <p>
                                To allow Dialogflow to send rich messages, simply enter the rich message shortcode into the
                                <b>TEXT RESPONSE</b> field or add a new <b>Custom Payload</b> response and insert this JSON code: <b>{ "rich-message": "shortcode" }</b>.
                                Replace "shortcode" with the rich message shortcode, to have a valid JSON code you need to replace all <b>"</b> chars with <b>\"</b>.
                                To obtain the shortcodes or to learn how to create a rich message, please click
                                <a class="scroll-to" href="#rich-messages">here</a>.
                            </p>
                            <h4>Rich message response</h4>
                            <p>
                                When the user interacts with rich messages via the Alz-Bot  chat (e.g. by clicking a button),
                                the rich message response is sent to Dialogflow in the following format:
                                <b>ID|response</b>, or <b>ID</b> if the rich message type is registration, email, follow up, in this case the rich message values are sent as array in the <b>queryParams['payload']</b> key.
                                <b>ID</b> is the rich message ID, which can be set by adding the attribute id="YOUR-ID" to the shortcode. If no ID has been set, a random ID will be used instead.
                                <b>response</b> is the input or selection of the user.
                                To block Dialogflow from replying to a rich message add a new intent with <b>ID</b> as the only user expression and no response.
                            </p>
                            <p>
                                If the user is interacting with the chatbot via a messaging app (e.g. WhatsApp),
                                the response of the rich message does not contain the rich message ID and Dialogflow <b>contexts</b> must be used to allow Dialogflow to understand which Intent to activate for a specific rich message response.
                            </p>
                            <h4>Get rich message response for registration, email, follow up</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    From <b>Left menu > Fulfillment</b> enable <b>Webhooks</b>, you only need to enter the URL of the file that will receive the Dialogflow webhook data.
                                </li>
                                <li>
                                    Create an Intent with the ID of the rich message, for the registration form, enter <b>registration</b>, for the follow up form enter <b>sb-follow-up-form</b>, for email forms enter <b>email</b>.
                                </li>
                                <li>
                                    Enable the Fulfillment for the Intent
                                </li>
                                <li>
                                    You're done! The file of the webhook URL will receive the Alz-Bot rich message user details.
                                </li>
                            </ul>
                            <h4>Dialogflow chatbot optimization</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    If the chatbot is replying with the wrong intents, go to
                                    <b>Dialogflow Console > chatbot Settings > ML Settings</b>,
                                    and set the
                                    <b>ML CLASSIFICATION THRESHOLD</b> to a larger number, such as 0.6.
                                </li>
                            </ul>
                            <h4>Sequential survey</h4>
                            <p>
                                To create a sequential survey like the one of the demo you need to Enter the
                                <b>Rich message ID</b> in the
                                <b>Training phrases</b>, check the example below.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to Dialogflow and create a new intent. In the
                                    <b>Training phrases</b> area enter the user expression
                                    <b>survey example</b>. In the
                                    <b>Responses</b> area enter the code
                                    <b>[buttons id="test-survey-1" options="Software,Physical products,Services" title="What is your type of business?" message="Please choose the type that best suits your company." success="Your company type is "]</b>
                                </li>
                                <li>
                                    Create a new intent. Enter the user expression
                                    <b>test-survey-1</b> and as response enter
                                    <b>[select id="seq-survey-2" options="Priority post, Express courier, International courier" title="Shipping methods" message="Choose the preferred shipping method of your customers" success="Your customers preferred shipping method is"]</b>
                                </li>
                                <li>
                                    Create a new intent. Enter the user expression
                                    <b>test-survey-2</b> and as response enter
                                    <b>Thank you for completing our survey!</b>.
                                </li>
                                <li>You're done.</li>
                            </ul>
                            <h4>Bot training</h4>
                            <p>
                                Agents can add new Intents and chatbot responses, and add new training phrases to existing intents on the fly from the admin area by moving the
                                mouse cursor over a message and clicking the Dialogflow Intent icon. New Intents will contain also the responses, while the update of existing intents will add new training phrases only, but not new chatbot responses.
                                If you're using Dialogflow CX, the chatbot responses will be added to the latest flow used in the conversation if any, otherwise to the start flow.
                            </p>
                            <h4 id="dialogflow-departments">Departments linking</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Get the department IDs from <b>Settings > Miscellaneous > departments</b>.
                                </li>
                                <li>
                                    Get the project IDs from the Dialogflow settings area of your agents.
                                </li>
                            </ul>
                            <h4>More information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>You can activate the chatbot via API but sending a message with no text and payload <b>{ "event": "activate-bot" }</b>.</li>
                                <li>Supported chinese language is only Chinese - Simplified. Please use the Dialogflow language Chinese - Simplified (zh-CN) only. The languages codes zh-HK and zh-TW will not work.</li>
                                <li>The following details are sent to Dialogflow in the <b>queryParams</b> parameter when detecting an intent: <b>conversation_id</b>, <b>user_id</b>.</li>
                                <li>To trigger the welcome event in Dialogflow CX, create a <b>Event Handler</b> and insert <b>Welcome</b> as <b>Custom Event</b>.</li>
                                <li>Alz-Bot  articles are synchronized automatically with the Dialogflow knowledge base.</li>
                                <li>Use the JS variable <b>SB_DIALOGFLOW_AGENT = "AGENT ID"</b> to change the default Dialogflow agent, replace "AGENT ID" with the <b>project ID</b>.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="whatsapp">
                            <div class="label label-docs">WHATSAPP</div>
                            <h2>WhatsApp</h2>
                            <p>The settings below are related to the WhatsApp app.</p>
                            <hr class="space-sm" />
                            <h2 id="whatsapp-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    From <b>Settings > Apps</b>, click <b>WhatsApp</b> and enter your license key to install and activate the app.
                                    If you have the cloud version the app is already active.
                                </li>
                            </ul>
                            <h4>WhatsApp Cloud API Setup</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Create a Developer account and a new Facebook app as described at <a href="https://developers.facebook.com/docs/whatsapp/cloud-api/get-started#set-up-developer-assets" target="_blank" rel="nofollow">https://developers.facebook.com/docs/whatsapp/cloud-api/get-started#set-up-developer-assets</a>.
                                </li>
                                <li>
                                    In <b>Alz-Bot > Settings > WhatsApp > Cloud API > Secret key</b> enter a random string then go to <a href="https://developers.facebook.com/apps" target="_blank" rel="nofollow">https://developers.facebook.com/apps</a> and select your app. Click <b>Add product</b> and add <b>WhatsApp</b>, then go to <b>WhatsApp > Configuration</b> and in <b>Webhook URL</b> enter the URL you get from <b>Alz-Bot > Settings > WhatsApp > Cloud API > Configuration URL</b>.
                                    In <b>Verify token</b> enter the secret key you previously entered in Alz-Bot. Click <b>Verify</b> and save, click <b>Webhook fields > Manage</b>, enable the following Webhook fields: <b>messages</b>.
                                    <a href="../../media/docs/whatsapp-cloud-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    In <b>Alz-Bot > Settings > WhatsApp > Cloud API > Token</b> enter the test token for testing, and follow the instructions below for getting the permanent access token.
                                    <ul class="icon-list icon-line icon-docs">
                                        <li>
                                            Visit <a href="https://business.facebook.com" target="_blank" rel="nofollow">https://business.facebook.com</a> and go to <b>Left menu > Settings > More system settings</b>, then go to <b>Users > System Users</b> to view the system user you created, or create a new one. Click on that user and select <b>Add Assets</b>.
                                            The system user needs to be an admin.
                                        </li>
                                        <li>
                                            Click <b>Left menu > Apps</b> and under <b>Select Assets</b> and choose your app. Enable <b>Develop App</b> for that app and save.
                                        </li>
                                        <li>
                                            Click <b>Generate Token</b> and select your app, enable the following permissions: <b>whatsapp_business_management</b>, <b>whatsapp_business_messaging</b>, <b>business_management</b>. Click <b>Generate Token</b> and save. Paste the token in <b>Alz-Bot > Settings > WhatsApp > Cloud API > Token</b>.
                                            <a href="../../media/docs/whatsapp-cloud-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    To get the <b>Phone ID</b> enter <a href="https://developers.facebook.com" target="_blank" rel="nofollow">https://developers.facebook.com</a>,
                                    select your app and go to <b>Left menu > WhatsApp > Getting started</b>.
                                </li>
                                <li>
                                    You can test the integration from <a href="https://developers.facebook.com" target="_blank" rel="nofollow">https://developers.facebook.com</a>,
                                    select your app and go to <b>Left menu > WhatsApp > Getting started</b>. <a href="../../media/docs/whatsapp-cloud-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                            </ul>
                            <h4>360dialog Account Setup</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to <a href="https://www.360dialog.com/" target="_blank" rel="nofollow">https://www.360dialog.com/</a> and create a new account.
                                </li>
                                <li>
                                    Enter your dashboard and from <b>Left menu > WhatsApp Accounts</b> generate the <b>API key</b> and copy and paste it in <b>Alz-Bot > Settings > WhatsApp > 360dialog settings</b>.
                                </li>
                                <li>
                                    Click <b>Alz-Bot > Settings > WhatsApp > 360dialog settings > Synchronize now</b>.
                                </li>
                                <li>
                                    Done! Alz-Bot  should start receiving the WhatsApp messages sent to your number, and you can reply to those messages from Alz-Bot .
                                </li>
                                <li>
                                    Note that you can also use the free sandbox account for testing, more details at <a href="https://docs.360dialog.com/whatsapp-api/whatsapp-api/sandbox" target="_blank" rel="nofollow">https://docs.360dialog.com/whatsapp-api/whatsapp-api/sandbox</a>. The sandbox account has limitations and some features, such as media attachments, will not work.
                                </li>
                            </ul>
                            <h4>Twilio Account Setup</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to
                                    <a href="https://www.twilio.com/referral/5GOe1g" target="_blank" rel="nofollow">https://www.twilio.com</a> and create a new account.
                                </li>
                                <li>
                                    Verify your phone number.
                                    <a href="../../media/docs/sms-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Complete the form and choose <b>WhatsApp</b>, <b>Alerts & Notifications</b>, <b>With no code at all</b>, <b>3rd party integrations</b>.
                                    <a href="../../media/docs/whatsapp-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    From the <a href="https://www.twilio.com/console" target="_blank" rel="nofollow">Twilio console</a>
                                    copy <b>ACCOUNT SID</b> and <b>AUTH TOKEN</b> and paste them into <b>Alz-Bot > Settings > WhatsApp > Twilio settings</b>, save the changes.
                                    <a href="../../media/docs/whatsapp-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    You will now set up a free test account to run some tests and make sure the integration works with Alz-Bot .
                                    From the left menu click <b>Messaging > Settings > WhatsApp sandbox settings</b>
                                    and enter into <b>WHEN A MESSAGE COMES IN</b> and <b>STATUS CALLBACK URL</b> the URL of Alz-Bot ,
                                    get it from <b>Alz-Bot > Settings > WhatsApp > Twilio settings > Get configuration URL</b>.
                                    Mind that localhost will not work, you need a public URL and a live server.
                                    <a href="../../media/docs/whatsapp-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    From the left menu click <b>Messaging > Try it out > Send a WhatsApp message</b>.
                                    Follow the instructions and send the message with the code to the WhatApp number provided. Click the next buttons until the configuration is complete.
                                    <a href="../../media/docs/whatsapp-4.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Done! Alz-Bot  should start receiving the WhatsApp messages sent to the sandbox account, and you can reply to those messages from the Alz-Bot .
                                </li>
                                <li>
                                    To publicly use the WhatsApp integration with your customers you need to update your account and enable billing, you can do that <a href="https://www.twilio.com/console/billing/upgrade" target="_blank" rel="nofollow">here</a>.
                                    After that you will need to purchase a Twilio number, which will be the phone number of your official WhatsApp Business account.
                                    More details <a href="https://www.twilio.com/docs/whatsapp/tutorial/connect-number-business-profile" target="_blank" rel="nofollow">here</a>. You cannot use the phone number of your existing WhatsApp Business account, you must use a Twilio number.
                                    More details <a rel="nofollow" target="_blank" href="https://support.twilio.com/hc/en-us/articles/360052171393-Can-I-activate-my-own-phone-number-for-WhatsApp-on-Twilio-">here</a>.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="whatsapp-fallback">Fallback messages</h2>
                            <p>
                                As for <a rel="nofollow" target="_blank" href="https://www.whatsapp.com/legal/business-policy/">WhatsApp Business Policy</a>,
                                you cannot send outbound marketing and solicitation messages to end users.
                                End user users must reach out to you first.
                                You have 24 hours from when the end user's message was sent from WhatsApp to reply to the message.
                                If you want to send a message after 24 hours from the last user's message you need to use the text message fallback or WhatsApp template message.
                            </p>
                            <h4>Text message fallback</h4>
                            <p>
                                To enable the text message fallback you must set up the SMS in <b>Settings > Notifications > Text message notifications</b>.
                                <br />More details <a class="scroll-to" href="#sms">here</a>
                            </p>
                            <h4>WhatsApp Template Messages</h4>
                            <p>
                                A WhatsApp Template Message is a message format that you can use over and over again to message users once they have opted-in and
                                given your app permission to send them messages.
                                You can not Enter the original message into the template,
                                you must use it to notify the user of a new message and instruct him on how to view it,
                                for example by providing a link to your website where the chat is shown.
                            </p>
                            <h5>WhatsApp Cloud API</h5>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To get the <b>Template name</b> and manage the templates visit <a rel="nofollow" target="_blank" href="https://business.facebook.com/">https://business.facebook.com</a> and go to <b>Left menu > Settings > More system settings</b>, then go to <b>Accounts > WhatsApp accounts > Settings</b> and click <b>WhatsApp Manager</b>.
                                </li>
                                <li>
                                    In <b>Template languages</b> enter all the language codes supported by your template, separated by commas. If a language is not found the fist language code is used instead. Language codes list <a target="_blank" rel="nofollow" href="../docs/files/language-codes.txt">here</a> (copy only the language code, e.g. it, es, en_US).
                                </li>
                                <li>
                                    In <b>Header parameters</b> and <b>Body parameters</b> enter the supported merge fields separated by commas, e.g. {recipient_name}, {conversation_url_parameter}.
                                    The number of parameters entered here must match the number of parameters of the template.
                                    Use this feature if your template uses dynamic values. Order is important, the first merge field will be used as the first template parameter.
                                </li>
                            </ul>
                            <h5>Twilio</h5>
                            <p>
                                Enter the template code into <b>Alz-Bot > Settings > WhatsApp > Template fallback</b>
                                If you're using the Twilio sandbox for testing you can use pre-approved templates like <b>Your {{1}} code is {{2}}</b>,
                                you can replace the variables with the Alz-Bot  ones like <b>{recipient_name}</b>, for example, <b>Your {recipient_name} code is {recipient_email}</b>.
                                More details <a rel="nofollow" target="_blank" href="https://www.twilio.com/docs/whatsapp/tutorial/send-whatsapp-notification-messages-templates">here</a>.
                            </p>
                            <h5>360dialog</h5>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Get the <b>Namespace</b> value from <b>Left menu > WhatsApp accounts > Details</b>.
                                </li>
                                <li>
                                    Get <b>Template name</b> and <b>Template default language</b> from your 360dialog templates area.
                                </li>
                                <li>
                                    In <b>Custom parameters</b> Enter the supported merge fields separated by commas, example: {recipient_name}, {conversation_url_parameter}.
                                    Use this feature if your template uses dynamic values. Order is important, the first merge field will be used as the first template dynamic value.
                                </li>
                                <li>
                                    Alz-Bot  will try to use the template with the same language as the user, if it is not available, it will use the template with the default language. The following template languages are not compatible: en_GB(use en_US), pt_PT(use pt_BR), zh_HK and zh_TW(use zh_CN), es_AR and es_MX(use es_ES).
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="whatsapp-shop">WhatsApp shop</h2>
                            <p>To displays the products of your shop use the merge fields below.</p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Merge field</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>{catalog id="123" product_id="123" body="" footer=""}</b></td>
                                        <td>
                                            Display a single product. Replace <b>id</b> with the catalog ID and <b>product_id</b> with a product ID. The attributes <b>body</b> and <b>footer</b> are optional.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>{catalog id="123" product_id_1_1="123" product_id_1_2="123" product_id_2_1="123" section_1="" section_2="" header="" body="" footer=""}</b></td>
                                        <td>
                                            Display multiple products. Replace <b>id</b> with the catalog ID. Add products by grouping them into sections, via the attributes <b>product_id_[A]_[B]</b>, replace [A] with the section index, starting from 1, replace [B] with the product index, starting from 1 for each section. You must also add the attribute <b>section_[A]=""</b> for each section, replace [A] with the section index. The attributes <b>header</b> and <b>body</b> are required, <b>footer</b> is optional.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    When the user sends the order, the order information is sent to the URL specified in <b>Settings > WhatsApp > Order webhook</b>.
                                    The page at that URL should process the order and send a message to the user via the PHP API function <b>sb_whatsapp_send_message()</b>.
                                </li>
                                <li>
                                    To connect the shop to WooCommerce click <a class="scroll-to" href="#woocommerce-whatsapp">here</a>.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="whatsapp-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    If you does not receive WhatsApp messages make sure you are not assigning the WhatsApp conversations to a department and that the WhatsApp number used for testing is not a phone number of a Alz-Bot admin or agent.
                                    Also, make sure you setup correctly the WhatsApp webhook URL.
                                </li>
                                <li>
                                    If you can not send messages, an error should appear in the admin area when you try to send a message to the user.
                                </li>
                                <li>
                                    We cannot provide support for Twilio or 360dialog configuration, including all related issues.
                                </li>
                                <li>
                                    We cannot provide support in getting your WhatsApp account or WhatsApp message template approved.
                                </li>
                                <li>
                                    WhatsApp conversations and messages are compatible with routing and queue.
                                </li>
                                <li>
                                    If you are testing with the sandbox and after 72 hours you can no longer send messages to your phone number you must link again your phone number to your sandbox.
                                </li>
                                <li>
                                    If you send chips, buttons or select rich messages, with more than 3 options, you can use the <b>whatsapp="Your menu text"</b> shortcode attribute to set the text of the WhatsApp message menu.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="messenger">
                            <div class="label label-docs">MESSENGER</div>
                            <h2>Messenger</h2>
                            <p>The settings below are related to the Messenger app.</p>
                            <hr class="space-sm" />
                            <h2 id="messenger-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    From <b>Settings > Apps</b>, click <b>Messenger</b> and enter your license key to install and activate the app.
                                    If you have the cloud version the app is already active.
                                </li>
                                <li>
                                    Once the App is installed go to
                                    <b>Settings > Messenger</b> and click
                                    <b>Start synchronization</b>.
                                </li>
                                <li>
                                    Complete the synchronization by choosing at least 1 Facebook page and enter the returned information in Settings > Messenger > Facebook pages.
                                </li>
                                <li>
                                    You're done. All messages sent to the Facebook pages and Instagram accounts you selected will appear in the conversation admin area of Alz-Bot .
                                </li>
                            </ul>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <hr class="space-sm" />
                            <h2 id="instagram">Instagram</h2>
                            <p>To link Instagram to your Facebook page and Alz-Bot follow the steps below.</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Enter the Settings area of your Facebook Page and click <b>Left Menu > Instagram</b> (https://www.facebook.com/YOUR-PAGE-SLUG/settings/).
                                </li>
                                <li>
                                    Click <b>Connect account</b> and complete the setup.
                                </li>
                                <li>
                                    Sync Messenger with Alz-Bot again and you're done.
                                </li>
                            </ul>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <hr class="space-sm" />
                            <h2 id="messenger-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    If you don't receive Instagram messages make sure to enable <b>Settings > Privacy > Messages >  Connected tools - Allow access</b> from your Instagram mobile app.
                                    Also, make sure your Instagram account is not setup as a professional account, it must be a business account.
                                </li>
                                <li>
                                    Every Alz-Bot  user has only 1 Facebook and Instagram conversation.
                                </li>
                                <li>
                                    Alz-Bot rich messages are automatically converted to Facebook rich messages when possible, some part of the rich message could be removed or changed.
                                </li>
                                <li>
                                    Only private Facebook messages will get sent to your team inbox. If someone posts a Facebook message on your wall it won't appear in your team inbox.
                                </li>
                                <li>
                                    When someone sends a message to your company Facebook page or Instagram account they will get designated as a lead in Alz-Bot .
                                    You'll only be able to see the user's Facebook or Instagram name and profile picture.
                                </li>
                                <li>
                                    Messenger conversations and messages are compatible with routing and queue.
                                </li>
                                <li>
                                    Dialogflow is supported for Facebook and Instagram, including the following features: Human takeover, Alz-Bot rich messages, language detection and chatbot language switcher.
                                </li>
                                <li>
                                    Follow-up message is supported, but the delay setting is ignored, the message is sent instantly.
                                </li>
                                <li>
                                    Offline message is supported, but the timetable is not sent.
                                </li>
                                <li>
                                    Only 1 Facebook account can be synchronized, to link pages from multiple Facebook accounts, the account synchronized in Alz-Bot  must be an admin of all Facebook pages of the other Facebook accounts.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="twitter">
                            <div class="label label-docs">TWITTER</div>
                            <h2>Twitter</h2>
                            <p>The settings below are related to the Twitter app.</p>
                            <hr class="space-sm" />
                            <h2 id="twitter-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Register at <a target="_blank" rel="nofollow" href="https://developer.twitter.com/">https://developer.twitter.com</a>. Make sure to verify your phone at <a target="_blank" rel="nofollow" href="https://twitter.com/settings/phone">https://twitter.com/settings/phone</a> or the registration will fail.
                                </li>
                                <li>
                                    Create your first app by entering the app name and click<b>Get keys</b>, copy <b>API Key (Consumer key)</b> and <b>API Key Secret (Consumer secret)</b> and paste them in <b>Alz-Bot > Settings > Twitter</b>.
                                </li>
                                <li>
                                    Request the <b>Elevated</b> access from <a target="_blank" rel="nofollow" href="https://developer.twitter.com/en/portal/products/elevated">https://developer.twitter.com/en/portal/products/elevated</a>. Click <b>Apply for Elevated</b> and complete the form as follow:
                                    In the first area <b>In your words</b> and in <b>Will your app use Tweet, Retweet, Like, Follow, or Direct Message functionality?</b> enter <b>I need access to the Account Activity API to start receiving Twitter Direct Messages to my chat software(Alz-Bot ) and to reply to them directly from Alz-Bot , details at https://alz-bot.com/twitter.</b>
                                    Disable all the other fields by clicking No: Are you planning to analyze Twitter data?, Do you plan to display Tweets or aggregate data about Twitter content outside Twitter?, Will your product, service, or analysis make Twitter content or derived information available to a government entity?
                                    <a href="../../media/docs/twitter-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Wait a few days for Twitter to review and approve the Elevated access, you will receive an email from Twitter.
                                </li>
                                <li>
                                    Once you have Elevated access, enter the developers dashboard (<a target="_blank" rel="nofollow" href="https://developer.twitter.com/en/portal/dashboard">https://developer.twitter.com/en/portal/dashboard</a>) and from the left menu click <b>Products > Premium > Dev environments</b> and under <b>Account Activity API / Sandbox</b> click <b>Set up dev environment</b>, in <b>Dev environment label</b> enter <b>sb</b> or the same value entered in <b>Settings > Twitter > Synchronization > Dev environment label</b>.
                                </li>
                                <li>
                                    Enter your app <b>Settings</b> area from <b>Left menu > Projects & Apps > Your project > Your app</b> and under <b>User authentication settings</b> click <b>Set up</b> and activate <b>OAuth 1.0a</b>.
                                    In <b>App permissions</b> check <b>Read and write and Direct message</b>, in <b>Callback URI / Redirect URL</b> enter the URL you get from <b>Alz-Bot > Settings > Twitter > Get callback URL</b>, in <b>Website URL</b> enter your website URL.
                                    <a href="../../media/docs/twitter-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Enter your app <b>Keys and tokens</b> area from <b>Left menu > Projects & Apps > Your project > Your app > Keys and tokens</b> and under <b>Authentication Tokens</b> generate <b>Access Token and Secret</b>, copy and paste them in <b>Alz-Bot > Settings > Twitter</b>.
                                </li>
                                <li>
                                    Enter your Twitter profile username in <b>Alz-Bot > Settings > Twitter > Your username</b>.
                                    Get it from your Twitter profile page, copy the name starting with @ or the URL part containing your username. Ex. <a target="_blank" rel="nofollow" href="https://twitter.com/alz-bot1">https://twitter.com/<b>alz-bot1</b></a>.
                                    <a href="../../media/docs/twitter-3.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>Save the Alz-Bot  settings and click the button <b>Alz-Bot > Settings > Twitter > Subscribe</b> and you're done. All messages sent to your Twitter account will be received by Alz-Bot .</li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="twitter-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>If you receive duplicate messages, the Twitter account you are using for testing may be the same as the one you synced. Try sending a message from another Twitter account.</li>
                                <li>Use a live domain, localhost is not supported.</li>
                                <li>When a message is received from a Twitter user you may send up to 5 messages in response within a 24 hour window. No messages can be sent after 24 hours of receiving the Twitter message.</li>
                                <li>You can send maximum 3 or 4 attachments depending by the media type.</li>
                                <li>The following Alz-Bot rich messages are not supported: images slider, slider, card.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="gbm">
                            <div class="label label-docs">GOOGLE BUSINESS MESSAGES</div>
                            <h2>Google Business Messages</h2>
                            <p>The settings below are related to the Google Business Messages app.</p>
                            <hr class="space-sm" />
                            <h2 id="gbm-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    In <b>Alz-Bot > Settings > Business Messages > Synchronization > Client token</b> enter a random string and save.
                                </li>
                                <li>
                                    Open the Business Communications Developer Console (<a target="_blank" rel="nofollow" href="https://business-communications.cloud.google.com">https://business-communications.cloud.google.com</a>) and sign in with your Business Messages Google account.
                                </li>
                                <li>
                                    Click <b>Partner account settings</b> on top.
                                </li>
                                <li>
                                    Configure the <b>Webhook</b> by entering the <b>Webhook URL</b> and the <b>Client token</b> and save the changes, get the values from <b>Alz-Bot > Settings > Business Messages > Synchronization</b>.
                                </li>
                                <li>
                                    Enter back into the Business Communications Developer Console (<a target="_blank" rel="nofollow" href="https://business-communications.cloud.google.com">https://business-communications.cloud.google.com</a>) and open your partner account.
                                </li>
                                <li>
                                    Click <b>Service account</b> from the left menu and create a new key, download the key and open it with a text editor such as Notepad, copy <b>private_key</b>, <b>client_email</b>, and paste the values in <b>Alz-Bot > Settings > Business Messages > Synchronization</b>.
                                </li>
                                <li>
                                    You are done! To test your agent visit <a target="_blank" rel="nofollow" href="https://business-communications.cloud.google.com/console/">https://business-communications.cloud.google.com/console</a>, click your brand to enter your brand <b>Overview</b> area, under <b>Agent information > Agent test URLs</b> click on the button suitable for your mobile device and open the link from your mobile device.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="gbm-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>The values of chips, buttons and select rich messages must have a maximum of 25 characters, and the maximum 13 values are allowed.</li>
                                <li>Avatar image must be a JPG image of 1024x1024px with a maximum size of 50KB.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="telegram">
                            <div class="label label-docs">TELEGRAM</div>
                            <h2>Telegram</h2>
                            <p>The settings below are related to the Telegram app.</p>
                            <hr class="space-sm" />
                            <h2 id="telegram-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to the admin area of Alz-Bot , then go to
                                    <b>Settings > Apps > Telegram</b>, and enter the
                                    <b>Techno Viz purchase code</b> to install and activate the app.
                                    If you have the cloud version the app is already active.
                                </li>
                                <li>
                                    Go here: <a target="_blank" rel="nofollow" href="https://t.me/botfather">https://t.me/botfather</a>.
                                </li>
                                <li>
                                    If you have already created a Telegram bot in the past, type the command <b>/mybots</b> and open your bot, then click <b>API token</b>.
                                </li>
                                <li>
                                    If you never created a Telegram bot before, type the command <b>/newbot</b> to create a new bot.
                                    The BotFather will ask you for a name and username, enter them and generate the authentication token. More details at <a target="_blank" rel="nofollow" href="https://core.telegram.org/bots">https://core.telegram.org/bots</a>.
                                </li>
                                <li>
                                    Copy the token and paste it into <b>Alz-Bot > Telegram > Token</b>, then click <b>Synchronize now</b>. Your website must use HTTPS (SSL certificate), HTTP is not supported.
                                </li>
                                <li>
                                    You're done. All messages sent to your Telegram bot will appear in the conversation admin area of Alz-Bot.
                                </li>
                            </ul>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <hr class="space-sm" />
                            <h2 id="telegram-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Alz-Bot rich messages are automatically converted to Telegram rich messages when possible, otherwise they are removed from the message.
                                </li>
                                <li>
                                    Telegram conversations and messages are compatible with routing and queue.
                                </li>
                                <li>
                                    Dialogflow is supported, including the following features: Human takeover, Alz-Bot rich messages, language detection and chatbot language switcher.
                                </li>
                                <li>Follow-up message is supported, but the delay setting is ignored, the message is sent instantly.</li>
                                <li>Offline message is supported, but the timetable is not sent.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="viber">
                            <div class="label label-docs">VIBER</div>
                            <h2>Viber</h2>
                            <p>The settings below are related to the Viber app.</p>
                            <hr class="space-sm" />
                            <h2 id="viber-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    From <b>Settings > Apps</b>, click <b>Viber</b> and enter your license key to install and activate the app.
                                    If you have the cloud version the app is already active.
                                </li>
                                <li>
                                    Create the bot at <a target="_blank" rel="nofollow" href="https://partners.viber.com/account/create-bot-account">https://partners.viber.com/account/create-bot-account</a>.
                                </li>
                                <li>
                                    Copy the token and paste it into <b>Alz-Bot > Viber > Token</b>, then click <b>Synchronize now</b>. Your website must use HTTPS (SSL certificate), HTTP is not supported.
                                </li>
                                <li>
                                    You're done. All messages sent to your Viber bot will appear in the conversation admin area of Alz-Bot.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="viber-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Alz-Bot rich messages are automatically converted to Viber rich messages when possible, otherwise they are removed from the message.
                                </li>
                                <li>
                                    Viber conversations and messages are compatible with routing and queue.
                                </li>
                                <li>
                                    Dialogflow is supported, including the following features: Human takeover, Alz-Bot rich messages, language detection and chatbot language switcher.
                                </li>
                                <li>Follow-up message is supported, but the delay setting is ignored, the message is sent instantly.</li>
                                <li>Offline message is supported, but the timetable is not sent.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="slack">
                            <div class="label label-docs">SLACK</div>
                            <h2>Slack</h2>
                            <p>The settings below are related to the Slack App.</p>
                            <hr class="space-sm" />
                            <h2 id="slack-sync">Synchronization</h2>
                            <p>
                                To sync Slack click the button
                                <b>Start synchronization</b> of the
                                <b>Settings > Slack</b> area and follow the instructions.
                            </p>
                            <a href="#" data-lightbox-anima="fade-in" class="link-video lightbox"><img src="../../media/play-video.svg" /></a>
                            <h4 id="knowledge-base">Having Problems?</h4>
                            <p>The synchronization of Slack may not be successful for a number of reasons; below are the most common ones:</p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Problem description</th>
                                        <th>Solution</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>You can receive messages on Slack, but you cannot send messages from Slack to Alz-Bot </td>
                                        <td>
                                            Navigate to
                                            <b>/alz-bot/apps/slack/post.php</b> from your browser.
                                            If you receive a
                                            <b>403 - Forbidden</b> error, you will need to contact your web hosting provider and ask them to set the correct file permissions for this file and/or to add a Firewall role to prevent the firewall from blocking the file.
                                            It must be allowed to be executed freely without any restrictions.
                                            Also, in <b>Workspace Settings > Permissions</b>, you must allow anyone to create public channels. <a href="../../media/docs/slack-info-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                            If you have further issues please contact the Slack support team at <a href="https://api.slack.com/support" target="_blank" rel="nofollow">https://api.slack.com/support</a>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Slack sync not working</td>
                                        <td>
                                            Double check whether or not you chose a public Slack channel when you attempted to synchronize Slack.
                                            If you did not, try syncing Slack once again, this time choosing a public channel instead.
                                            The general channel is a good option.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 id="knowledge-base">Manually archive channels</h4>
                            <p>To archive a channel in Slack, follow these steps:</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Open the Slack channel you want to archive.</li>
                                <li>
                                    On the top right click the gear icon and select
                                    <b>Additional options</b>.
                                    <a href="../../media/docs/slack-archive-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    Click the info icon in the top right area of the screen, then click the
                                    <b>More icon</b>, and then click
                                    <b>Additional options...</b>.
                                    Click
                                    <b>Archive this channel</b>.
                                    <a href="../../media/docs/slack-archive-2.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                            </ul>
                            <h4 id="slack-departments">Departments linking</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Get the department IDs from <b>Settings > Miscellaneous > departments</b>.
                                </li>
                                <li>
                                    Get the channel IDs by clicking the button <b>Get channel IDs</b>.
                                </li>
                            </ul>
                            <h4 id="slack-user-fields">User fields</h4>
                            <p>
                                The setting <b>Settings > Slack > User fields</b> allows you to choose which user details to include in the message sent to the main channel when a new user sends the first message. You can include the slug of your custom user details or the following slugs:
                                <b>browser</b>, <b>browser_language</b>, <b>location</b>, <b>email</b>, <b>user_type</b>, <b>token</b>, <b>creation_time</b>, <b>country_code</b>, <b>current_url</b>, <b>os</b>, <b>city</b>, <b>address</b>, <b>postal_code</b>, <b>phone</b>, <b>birthdate</b>, <b>company</b>, <b>timezone</b>, <b>website</b>. Default: email, browser, browser_language, location.
                            </p>
                            <h4 id="slack-info">Information</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    When a new user sends the first message, a Slack message with the user details and a button to join the user's channel is sent to the main channel selected during the synchronization, or to the channel linked to the conversation's department.
                                    Only the Slack account used during the synchronization will automatically join the user's channel, other Slack members will have to join it manually via the button.
                                </li>
                                <li>
                                    When <b>Settings > Slack > Agent linking</b> is set, if the conversation is assigned to a department, only agents assigned to that department will receive the message, if the conversation is assigned to a single agent only that agent will receive the message.
                                </li>
                                <li>
                                    Slack is free to use. Only large companies may need a paid subscription plan, more details
                                    <a href="https://slack.com/intl/en-gb/pricing" target="_blank" rel="nofollow">here</a>.
                                </li>
                                <li>
                                    Push notifcations are compatible with Slack, when agents send messages via Slack, Push notifications are sent to users.
                                </li>
                                <li>
                                    If you're using Dialogflow, no messages will be received in Slack if the chatbot knows the answer. Once the human takeover is active all conversation's messages are sent to Slack.
                                </li>
                                <li>
                                    The Slack app is compatible with email piping and the messaging apps.
                                </li>
                                <li>
                                    Deleting or leaving a channel is not supported, only archiving a channel is supported.
                                </li>
                                <li>
                                    When a conversation is archived in Alz-Bot , the linked Slack channel is also archived.
                                </li>
                                <li>
                                    When replying via Slack to a user, if the user is notified by email or text message, a Slack message is sent to notify you.
                                </li>
                                <li>
                                    Use the Slack command <b>/archive</b> to archive a conversation from Slack.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="perfex">
                            <div class="label label-docs">PERFEX CRM</div>
                            <h2>Perfex</h2>
                            <p>The settings below are related to the Perfex app.</p>
                            <hr class="space-sm" />
                            <h2 id="perfex-installation">Installation</h2>
                            <p>
                                The installation requires two steps:
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    From <b>Settings > Apps</b>, click <b>Perfex</b> and enter your Techno Viz purchase code to install and activate the app.
                                    Once the App is installed go to
                                    <b>Settings > Perfex</b> and enter the database information and the Perfex URL.
                                    You can get the information from the file <b>application/config/app-config.php</b> in your Perfex installation folder.
                                    If you do not know the Perfex prefix leave it empty, the default prefix is <b>tbl</b>.
                                </li>
                                <li>
                                    Go to the admin area of Perfex, then go to
                                    <b>Setups > Modules</b> and install the Alz-Bot  module by uploading the file
                                    <b>module.zip</b>.
                                    Once the module is installed go to
                                    <b>Setups > Alz-Bot </b> and enter the Alz-Bot  plugin URL. If you're using the WordPress version, the URL must be like this:
                                    <b>https://example.com/wp-content/plugins/alz-bot/alz-bot</b>.
                                </li>
                            </ul>
                            <p>To show Alz-Bot  inside the Perfex admin area, Alz-Bot  must be installed in the same domain and same file system of the Perfex installation.</p>
                            <p>If you have issues, or if you have changed the Perfex database details, make sure the file <b>alz-bot/config.php</b> use the correct Perfex database details. Updating the details in Alz-Bot will not update the details in the config.php file</p>
                        </div>
                        <hr />
                        <div id="zendesk">
                            <div class="label label-docs">Zendesk</div>
                            <h2>Zendesk</h2>
                            <p>The settings below are related to the Zendesk App.</p>
                            <hr class="space-sm" />
                            <h2 id="zendesk-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Get the <b>domain</b> from the URL of your Zendesk admin area, copy the first part of the URL: https://<b>domain</b>.zendesk.com/. For example, the domain of <b>https://alz-bot.zendesk.com/agent/get-started/ticketing-system/ticketing-intro</b> is <b>alz-bot</b>.
                                </li>
                                <li>
                                    Get the <b>API key</b> from <b>Left menu > Admin > Channels > API > Settings</b>. Click <b>Add API token</b>. <a href="../../media/docs/zendesk-1.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>
                                    The <b>email</b> is your Zendesk account email.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="zendesk-info">More information</h2>
                            <ul>
                                <li>Tickets converted by Alz-Bot  are automatically synchronized when new messages are sent and received in Alz-Bot , and they are linked to an existing Zendesk user if any, otherwise a new Zendesk user is created.</li>
                                <li>Alz-Bot  links Zendesk users to Alz-Bot  users via email or phone number.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="whmcs">
                            <div class="label label-docs">WHMCS</div>
                            <h2>WHMCS</h2>
                            <p>The settings below are related to the WHMCS App.</p>
                            <hr class="space-sm" />
                            <h2 id="whmcs-installation">Installation</h2>
                            <p>
                                The process requires two installations, one is the WHMCS add-on, and one is the Alz-Bot  App.
                            </p>
                            <h4>App installation</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to the admin area of Alz-Bot , then go to
                                    <b>Settings > Apps > WHMCS</b>, and enter the
                                    <b>License Key</b> to install the app.
                                    Once the App is installed go to
                                    <b>Settings > Whmcs</b> and enter the database information and the WHMCS URL.
                                </li>
                            </ul>
                            <h4>WHMCS add-on installation</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Enter the folder
                                    <b>alz-bot</b> inside the
                                    <b>addon.zip</b> (download it
                                    <a href="../docs/files/whmcs/addon.zip">here</a>) file into the
                                    <b>/modules/addons/</b> directory of your WHMCS installation.
                                </li>
                                <li>
                                    Go to
                                    <b>Configuration > System Settings > Addon Modules</b>, find the Alz-Bot  module, and click
                                    <b>Activate</b>. More details at
                                    <a target="_blank" rel="nofollow" href="https://docs.whmcs.com/Addon_Modules_Management#Installing_An_Addon">https://docs.whmcs.com/Addon_Modules_Management#Installing_An_Addon</a>
                                </li>
                                <li>
                                    Click the
                                    <b>Configure</b> button and enter the Alz-Bot  plugin URL.
                                </li>
                            </ul>
                            <h4>How to update</h4>
                            <p>
                                Updating the WHMCS App in Alz-Bot  is easy, you can enable the automatic updates or manually update it. Details
                                <a href="#updates">here</a>. To update the WHMCS add-on you will need to download the latest version of the add-on from
                                <a href="../docs/files/whmcs/addon.zip">https://alz-bot.com/works/docs/files/whmcs/addon.zip</a> and manually replace the
                                <b>/modules/addons/alz-bot/</b> directory of your WHMCS installation with the new one just downloaded.
                            </p>
                            <p>If you have issues, or if you have changed the WHMCS database details, make sure the file <b>alz-bot/config.php</b> use the correct WHMCS database details. Updating the details in Alz-Bot will not update the details in the config.php file.</p>
                        </div>
                        <hr />
                        <div id="ump">
                            <div class="label label-docs">ULTIMATE MEMBERSHIP PRO</div>
                            <h2>Ultimate Membership Pro</h2>
                            <p>The settings below are related to the Ultimate Membership Pro app.</p>
                            <hr class="space-sm" />
                            <h2 id="ump-users">Users synchronization</h2>
                            <p>
                                New users are synchronized automatically. To manually syncronize existing users go to
                                <b>Settings > WordPress > Synchronize users</b> and click
                                <b>Import users</b>.
                            </p>
                            <hr class="space-sm" />
                            <h2 id="ump-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    To limits the access to a specific plan only use this shortcode <b>[ihc-hide-content ihc_mb_type="show" ihc_mb_who="4" ihc_mb_template="2"]&lt;script id="sbinit" src="YOUR-URL/alz-bot/alz-bot/js/main.js">&lt;/script>[/ihc-hide-content]</b>
                                    Replace <b>4</b> with the user's level you want and <b>YOUR-URL</b> with your WordPress /plugins/ folder URL. You also need to check <b>Settings > WordPress > Manual init</b>.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="armember">
                            <div class="label label-docs">ARMEMBER</div>
                            <h2>ARMember</h2>
                            <p>The settings below are related to the ARMember app.</p>
                            <hr class="space-sm" />
                            <h2 id="armember-users">Users synchronization</h2>
                            <p>
                                New users are synchronized automatically. To manually syncronize existing users go to
                                <b>Settings > WordPress > Synchronize users</b> and click
                                <b>Import users</b>.
                            </p>
                            <hr class="space-sm" />
                            <h2 id="armember-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    A user is a paid member only if it has at least one active paid plan which is not expired.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="active-ecommerce">
                            <div class="label label-docs">Active eCommerce</div>
                            <h2>Active eCommerce</h2>
                            <p>The settings below are related to the Active eCommerce app.</p>
                            <hr class="space-sm" />
                            <h2 id="active-ecommerce-installation">Installation</h2>
                            <p>
                                The process requires two installations, one is the Alz-Bot  App, and one is the installation in Active eCommerce.
                            </p>
                            <h4>App installation</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to the admin area of Alz-Bot , then go to
                                    <b>Settings > Apps > Active eCommerce</b>, and enter the
                                    <b>License Key</b> to install the app.
                                    Once the App is installed go to
                                    <b>Settings > Active eCommerce</b> and enter the database information, the Active eCommerce URL, and the other settings.
                                </li>
                                <li>
                                    The Secret Key can be found in the file
                                    <b>.env</b> located in the root directory of Active eCommerce. Copy the APP_KEY value.
                                    <a href="../../media/docs/active-ecommerce-env.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                </li>
                                <li>If you have issues, make sure the file <b>alz-bot/config.php</b> use the correct Active eCommerce database details.</li>
                            </ul>
                            <h4>Installation in Active eCommerce</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Edit the file
                                    <b>\resources\views\frontend\inc\footer.blade.php</b> in the directory of Active eCommerce and Enter the code below just after the footer opening tag
                                    <b>&lt;footer</b>. Replace
                                    <b>[YOUR-SITE]</b> with the URL of your Alz-Bot  installation.
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
                            <h4>How to update</h4>
                            <p>
                                Updating the Active eCommerce App in Alz-Bot  is easy, you can enable the automatic updates or manually update it. Details
                                <a href="#updates">here</a>. If you update Active eCommerce, you will need to insert again the code above in the file
                                <b>footer.blade.php</b>.
                            </p>
                            <hr class="space-sm" />
                            <h2 id="active-ecommerce-sellers">Sellers chat</h2>
                            <p>
                                To force sellers to see only the conversations of users writing from their product pages enable the option
                                <b>
                                    Settings > Miscellaneous > Hide conversations of other agents
                                </b>. After that, just click the button
                                <b>Settings > Active eCommerce > Import vendors</b> and you're done!
                                The sellers will be registered in Alz-Bot  and can log in to the admin area.
                            </p>
                            <p>Admins can always see the conversations of all agents(sellers).</p>
                        </div>
                        <hr />
                        <div id="martfury">
                            <div class="label label-docs">Martfury</div>
                            <h2>Martfury</h2>
                            <p>The settings below are related to the Martfury app.</p>
                            <hr class="space-sm" />
                            <h2 id="martfury-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to the admin area of Alz-Bot , then go to
                                    <b>Settings > Apps > Martfury</b>, and enter the
                                    <b>License Key</b> to install the app.
                                </li>
                                <li>
                                    Once the app is installed go to
                                    <b>Settings > Martfury</b> and enter the <b>database information</b>, <b>Martfury URL</b>, <b>Secret key</b>.
                                    Get the information from the
                                    <b>.env</b>file located in the root directory of Martfury.
                                </li>
                                <li>
                                    Set the Martfury path in <b>Settings > Martfury > Martfury path</b>. Get this information by uploading <a href="../docs/files/path.zip" target="_blank">this file</a> in the <b>/public/</b> folder of the root directory of Martfury, after the upload open it via browser (e.g. https://shop.com/public/path.php).
                                </li>
                                <li>To show the chat on the website enter the Alz-Bot code of the <a href="#installation" class="scroll-to">PHP installation</a> into <b>Martfury Admin > Appearance > Custom JS > Footer JS</b>. Do not include jQuery.</li>
                                <li>If you have issues, make sure the file <b>alz-bot/config.php</b> use the correct Martfury database details.</li>
                            </ul>
                            <h4>How to update</h4>
                            <p>
                                Updating the Martfury App in Alz-Bot is easy, you can enable the automatic updates or manually update it. Details
                                <a href="#updates" class="scroll-to">here</a>.
                            </p>
                            <hr class="space-sm" />
                            <h2 id="active-ecommerce-sellers">Sellers chat</h2>
                            <p>
                                To force stores to see only the conversations of users writing from their product pages follow the steps below.
                            </p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Check the options <b>Settings > Martfury > Private chat</b>, <b>Settings > Chat > Disable dashboard</b>, <b>Settings > Chat > Allow only one conversation</b>.
                                </li>
                                <li>
                                    From <b>Settings > Martfury > Import vendors</b> import all vendors.
                                </li>
                                <li>
                                    In <b>Settings > Martfury > Private chat linking</b> each each vendor to the correct store. You can get the vendor IDs from <b>Users > Agents and Admins</b>.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="line">
                            <div class="label label-docs">LINE</div>
                            <h2>LINE</h2>
                            <p>The settings below are related to the LINE app.</p>
                            <hr class="space-sm" />
                            <h2 id="line-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Login at <a target="_blank" rel="nofollow" href="https://developers.line.biz/console/">https://developers.line.biz/console/</a> or create a new account.
                                </li>
                                <li>
                                    Create a new <b>Provider</b> and then a new <b>Messaging API channel</b>, select <b>Messaging API</b> as channel type
                                </li>
                                <li>
                                    From the channel <b>Basic settings</b> area copy <b>Channel secret</b> and paste it into <b>Alz-Bot > Settings > Line > Synchronization > Channel secret</b>.
                                </li>
                                <li>
                                    From the channel <b>Messaging API</b> area generate a <b>Channel access token (long-lived)</b>, copy it and paste it into <b>Alz-Bot > Settings > Line > Synchronization > Access token</b>.
                                </li>
                                <li>
                                    Enter your Webhook URL into <b>Webhook URL</b> and click <b>Verify</b>. Get the Webhook URL from <b>Alz-Bot > Settings > Line > Synchronization > Webhook URL</b>.
                                </li>
                                <li>
                                    Enable <b>Use webhook</b>.
                                </li>
                                <li>
                                    Scane the <b>QR code</b> with your LINE mobile app to start writing to your channel.
                                </li>
                                <li>
                                    You're done. All messages sent to your LINE bot account will appear in the conversation admin area of Alz-Bot.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="line-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    You have 7 days from when the end user's message was sent from WhatsApp to reply to the message.

                                </li>
                                <li>
                                    Stickers are not supported.
                                </li>
                                <li>
                                    Alz-Bot rich messages are automatically converted to LINE rich messages when possible, otherwise they are removed from the message.
                                </li>
                                <li>
                                    LINE conversations and messages are compatible with routing and queue.
                                </li>
                                <li>
                                    Dialogflow is supported, including the following features: Human takeover, Alz-Bot rich messages, language detection and chatbot language switcher.
                                </li>
                                <li>
                                    Follow-up message is supported, but the delay setting is ignored, the message is sent instantly.
                                </li>
                                <li>
                                    Offline message is supported, but the timetable is not sent.
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="wechat">
                            <div class="label label-docs">WECHAT</div>
                            <h2>WeChat</h2>
                            <p>The settings below are related to the WeChat app.</p>
                            <hr class="space-sm" />
                            <h2 id="wechat-installation">Installation</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    From <b>Settings > Apps</b>, click <b>WeChat</b> and enter your license key to install and activate the app.
                                    If you have the cloud version the app is already active.
                                </li>
                                <li>
                                    Visit <a target="_blank" rel="nofollow" href="https://mp.weixin.qq.com/cgi-bin/readtemplate?t=register/step1_tmpl&lang=en_US">https://mp.weixin.qq.com/cgi-bin/readtemplate?t=register/step1_tmpl&lang=en_US</a> and register a <b>Service account</b>.
                                </li>
                                <li>
                                    After the registration enter <b>Official accounts</b> area and from the left menu click <b>Settings and development > WeChat verification</b>. You must complete the verification, it takes a few weeks and costs USD 99, or CNY 300 for chinese entities.
                                </li>
                                <li>
                                    From the left menu click <b>Settings and development > Basic configuration</b> and copy <b>Developer ID(App ID)</b>, <b>Developer Password(App Secret)</b>. Paste the information into <b>Alz-Bot > Settings > WeChat</b>.
                                </li>
                                <li>
                                    From the left menu click <b>Settings and development > Basic configuration</b> and complete the server configuration (服务器配置(已启用).
                                    In <b>Server Address(URL)</b> enter the URL you get from <b>Alz-Bot > Settings > WeChat > Synchronization > Get configuration URL</b>. In <b>Token</b> insert any value you want, the same value must be entered in <b>Alz-Bot > Settings > WeChat > Token</b>.
                                </li>
                                <li>
                                    You're done. All messages sent to your WeChat account will appear in the conversation admin area of Alz-Bot.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h2 id="wechat-info">More information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    If you receive an error like <b>{"errcode":41001,"errmsg":"access_token missing rid: 631111-470b3b22-48553870"}</b> you need
                                    to whitelist your server IP address from <b>Official Account > Settings and Development > Basic Configuration > IP whitelist</b>.
                                </li>
                                <li>
                                    WeChat files and location attachments are not supported and are not received by Alz-Bot.
                                </li>
                                <li>
                                    Links are not supported in WeChat, they are converted to texts.
                                </li>
                                <li>
                                    Alz-Bot rich messages are automatically converted to WeChat rich messages when possible, otherwise they are removed from the message.
                                </li>
                                <li>
                                    WeChat conversations and messages are compatible with routing and queue.
                                </li>
                                <li>
                                    Dialogflow is supported, including the following features: Human takeover, Alz-Bot rich messages, language detection and chatbot language switcher.
                                </li>
                                <li>Follow-up message is supported, but the delay setting is ignored, the message is sent instantly.</li>
                                <li>Offline message is supported, but the timetable is not sent.</li>
                            </ul>
                        </div>
                        <hr />
                        <div id="more-settings">
                            <div class="label label-docs">MORE SETTINGS</div>
                            <h2>More settings</h2>
                            <p>This section contains help for other settings not listed above.</p>
                            <hr class="space-sm" />
                            <h2 id="pwa">Progressive Web App</h2>
                            <p>
                                The Alz-Bot  admin area is a PWA, which means that you can install it on desktop, Mac, or mobile devices and use it like a fully-functional app.
                                Note: This feature is optimized for Google Chrome.
                            </p>
                            <h4>Desktop installation</h4>
                            <p>
                                Enter in your admin area (e.g. https://www.your-site.com/alz-bot/admin.php), and click the
                                <b>+</b> icon on the top right of the URL bar of your Chrome browser.
                                <a href="../../media/docs/pwa.jpg" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                            </p>
                            <h4>Mobile installation - Cloud version only</h4>
                            <p>
                                If you are using the cloud version of Alz-Bot you can use the apps available on Google Play and Apple Store.<br /><br />
                                <a href="https://play.google.com/store/apps/details?id=alz-bot" target="_blank" rel="nofollow">Google Play</a>
                            </p>
                            <h4>Mobile installation</h4>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Enter in your admin area with Google Chrome (e.g. https://www.your-site.com/alz-bot/admin.php)</li>
                                <li>
                                    Open your browser's settings.
                                </li>
                                <li>
                                    Scroll down and tap
                                    <b>Add to Home screen.</b>
                                </li>
                                <li>Confirm by tapping Add.</li>
                            </ul>
                            <h4>WordPress installation</h4>
                            <p>To install the PWA on WordPress, you need to access the admin area directly by going to:</p>
                            <pre>https://www.your-site.com/wp-content/plugins/alz-bot/alz-bot/admin.php</pre>
                            <p>Change "your-site" with the URL of your website and also keep in mind that the "wp-content" folder name may be different from the one of your installation.</p>
                            <h4>Change PWA icon and name</h4>
                            <p>
                                Download the file <b>manifest.json</b> <a href="../docs/files/manifest.json" target="_blank">here</a>.
                                Edit it and replace <b>YOUR NAME</b> with your brand name, <b>YOUR NAME DESCRIPTION</b> with any text you want, and <b>example.png</b> with the relative URL of your icon,
                                the icon size must be 512 x 512 px.
                                After you finished editing the file move it into the  Alz-Bot  installation folder, the same folder where is located the file admin.php.
                                Mind that because this is customization our support doesn't cover it, if you need help you can <a href="../../hire-us">hire us</a>.
                            </p>
                            <hr class="space" />
                            <h2 id="keyboard">Keyboard shortcuts</h2>
                            <p>
                                Admin area keyboard shortcuts are enabled on both PC and MAC and work as follows:
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Shortcut</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>ENTER</pre> or
                                            <pre>SPACE</pre>
                                        </td>
                                        <td>
                                            Confirm or close a dialog alert; the same as clicking
                                            <b>OK</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>ESC</pre> or
                                            <pre>CANCEL</pre>
                                        </td>
                                        <td>
                                            Decline a dialog alert and close it.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>SHIFT + ENTER</b> or <pre>CTRL + ENTER</pre>
                                        </td>
                                        <td>
                                            Add a line break to a message. This only works for the admin editor.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>ESC</pre>
                                        </td>
                                        <td>
                                            Close a lightbox.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>CANCEL</pre>
                                        </td>
                                        <td>
                                            In the admin conversations area, archive a conversation, or delete it.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>CTRL + UP/DOWN ARROW</pre>
                                        </td>
                                        <td>
                                            In the admin conversations area, navigate between the conversations of the list.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>CTRL + RIGHT/LEFT ARROW</pre>
                                        </td>
                                        <td>
                                            In the admin users area, navigate between the users.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>CTRL + V</pre>
                                        </td>
                                        <td>
                                            Paste an image from the clipboard and send it as message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="config">Config file</h2>
                            <p>
                                The
                                <b>config.php</b> file is a special file that contains the MySQL database log-in details and other import settings.
                                Most of the settings are generated automatically, but some are optional.
                                You can add the following settings below:
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>define('SB_UPLOAD_URL', 'YOUR-URL')</pre>
                                        </td>
                                        <td>
                                            Change the uploads directory (the default directory is: /alz-bot/uploads/).
                                            Enter a URL: for example, https://your-site.com/myuplaods/.
                                            For this setting you need also to define the SB_UPLOAD_PATH.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>define('SB_UPLOAD_PATH', 'YOUR-PATH')</pre>
                                        </td>
                                        <td>
                                            Change the uploads directory path (the default path is:  /alz-bot/uploads/).
                                            Enter a PATH: for example, C:\xampp\htdocs\uploads. Finding the root path of your website can be a bit tricky.
                                            You can try copying the path displayed in your FTP client or simply contact your web hosting provider for additional support.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>$GLOBALS['SB_LOCAL_SETTINGS'] = []</pre>
                                        </td>
                                        <td>
                                            Overwrite the default settings. The value is an array of keys and values, each key is a setting, e.g. <b>["registration-required" => [true]]</b>.
                                            View an example <a href="../docs/files/settings.txt" target="_blank">here</a>.
                                            Get the settings list from <b>resources/json/settings.json</b> and the files <b>settings.json</b> inside the app folders.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="cron-jobs">Cron Jobs</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Cron jobs are executed by the first user that visit the website at any given hour of the day.</li>
                                <li>Cron jobs are executed every 60 minutes, but it can take longer, or it can take less time as well, in relation to the traffic of your website. </li>
                                <li>Because cron jobs are initiated by users, if you have less than 1 visitor per minute, it could take longer. As long as there is at least one active user on the site, execution every minute is guaranteed.</li>
                                <li>
                                    You can speed up the cron jobs execution by manually run them via
                                    <a href="https://alz-bot.com/works/docs/api/web#cron-jobs">WEB API</a>, or
                                    <a href="https://alz-bot.com/works/docs/api/php#cron_jobs">PHP API</a>.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="logs">Logs</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>The log file is saved in the Alz-Bot installation directory.</li>
                                <li>The logs record the following actions of agents and administrators: message sent, message deleted, conversation archived, conversation deleted, conversation restored, conversation assigned to an agent, conversation assigned to a department, user updated, user deleted.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="supervisor">Supervisor</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>Supervisors must be administrators.</li>
                                <li>Add multiple supervisors by adding comma separated admin IDs.</li>
                            </ul>
                            <hr class="space" />
                            <h2 id="url-parameters">URL parameters</h2>
                            <h4>Front-end chat</h4>
                            <p>
                                URL parameters allow the chat to perform specific actions on page load. To use them, append the URL parameters below to any URL on your website that displays the chat.
                                Ex. https://example.com/?conversation=1234
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>URL parameter</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>?token=TOKEN</pre>
                                        </td>
                                        <td>
                                            Login an existing user. Replace TOKEN with the user's token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>?conversation=ID</pre>
                                        </td>
                                        <td>
                                            Open a conversation. Replace ID with the conversation ID.
                                            The attribute <b>token</b> is required for not logged in users.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>?chat=open</pre>
                                        </td>
                                        <td>
                                            Open the chat.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Admin area</h4>
                            <p>
                                URL parameters allow the administration area to perform specific actions on page load. To use them, append the URL parameters below to your admin URL.
                                Ex. https://example.com/alz-bot/admin.php?conversation=1234
                            </p>
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>URL parameter</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>?conversation=ID</pre>
                                        </td>
                                        <td>
                                            Open a conversation of the conversations area. Replace ID with the conversation ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>?user=ID</pre>
                                        </td>
                                        <td>
                                            Open the profile box of a user. Replace ID with the user ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>?setting=ID</pre>
                                        </td>
                                        <td>
                                            Open a setting of the settings area. Replace ID with the setting ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>?report=ID</pre>
                                        </td>
                                        <td>
                                            Open a report of the reports area. Replace ID with the report ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>?area=name</pre>
                                        </td>
                                        <td>
                                            Open an area of the admin. Replace name with: conversations, users, settings, reports.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space" />
                            <h2 id="zapier">Zapier</h2>
                            <p>Integrate Zapier with Alz-Bot  by following the steps below. Integration is based on the Alz-Bot  webhooks, each webhook is a Zapier trigger, so you have 15+ Zapier triggers available, for more details visit the <a href="api/web#Webhooks">webhooks</a> page.</p>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    Go to <a href="https://developer.zapier.com/" target="_blank" rel="nofollow">https://developer.zapier.com/</a> and login, or register a new account.
                                </li>
                                <li>
                                    Create a new integration by clicking <b>Start a Zapier Integration</b>, or visit <a href="https://developer.zapier.com/app/new" target="_blank" rel="nofollow">https://developer.zapier.com/app/new</a>. Fill in all required fields, like name and description, and click <b>Create</b>, you can enter any text you want, but keep the name of the app in mind because you will need it later.
                                </li>
                                <li>
                                    From the left menu click <b>Triggers</b> and then <b>Add Trigger</b>.
                                </li>
                                <li>
                                    Fill in all required fields, like key and description, and click <b>Save And Continue</b>, you can enter any text you want.
                                </li>
                                <li>
                                    On top click <b>API Configuration</b>, choose <b>REST Hook</b> as <b>Trigger Type</b>, and click <b>Save</b>.
                                </li>
                                <li>
                                    Go back to the <b>Settings</b> area of the trigger, or go to <a href="https://zapier.com/app/zaps" target="_blank" rel="nofollow">https://zapier.com/app/zaps</a>, and click <b>Create a Zap</b>.
                                </li>
                                <li>
                                    Search for your newly created app by entering the app name and click it. In <b>Trigger Event</b> select your trigger and click <b>continue</b>.
                                </li>
                                <li>
                                    Copy the <b>Webhook URL</b>, click <b>Continue</b>, and then enter the Alz-Bot  admin area and enter it into <b>Settings > Miscellaneous > Webhooks > URL</b>, activate the webhooks, save the settings and reload Alz-Bot .
                                </li>
                                <li>
                                    Make something to trigger a webhook like sending a message, or creating a new user, then go back to Zapier and click <b>Test Trigger</b> and you should see the Alz-Bot  webhook data. Click <b>Continue</b>.
                                </li>
                                <li>
                                    Click the right button <b>Filters</b> and set up the filter in order to trigger the integration only if a variable exists.
                                    You need the filter because Alz-Bot  will send all webhooks to all zaps.
                                    Example: if your zap wants to integrate the messages of Alz-Bot , you will need to set the filter to continue only if the variable <b>message</b> exists.
                                </li>
                                <li>
                                    Click <b>Continue</b>, or <b>+</b> and add your integration.
                                </li>
                                <li>
                                    To use multiple zaps and webhooks you will need to update <b>Settings > Miscellaneous > Webhooks > URL</b> and add the new zap IDs, separated by commas.
                                    Example: if you have two zaps with URLs <b>https://hooks.zapier.com/hooks/catch/10352851/bbad21f/</b> and <b>https://hooks.zapier.com/hooks/catch/10352851/aaaa66t/</b>, the URL must be <b>https://hooks.zapier.com/hooks/catch/10352851/bbad21f,aaaa66t/</b>.
                                </li>
                            </ul>
                            <hr class="space" />
                            <h2 id="more-info">More Information</h2>
                            <ul class="icon-list icon-line icon-docs">
                                <li>
                                    If you change the plugin folder name after the installation, you need to update it in the constant
                                    <b>SB_URL</b> of the file
                                    <b>config.php</b>.
                                </li>
                                <li>
                                    Welcome messages are not sent to slack and conversations containing only the welcome message (and no response) are automatically archived.
                                </li>
                                <li>Follow-up messages are sent a maximum of once every 24 hours.</li>
                                <li>A popup message is always shown default, until the user manually closes it; then it stays closed.</li>
                                <li>The Users and Conversations sections in the Alz-Bot  admin area use auto-pagination on scroll, which is limited to 100 results per scroll.</li>
                                <li>
                                    The privacy message is not shown if the
                                    <b>Require registration</b> option has been enabled.
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
        <?php
        include('../../fi-t/offer-card.php');
 ?>

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