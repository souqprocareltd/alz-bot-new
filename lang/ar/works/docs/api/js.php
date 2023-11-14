<html lang="ar" xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>JavaScript API | Alz-Bot</title>
    <meta name="description" content="Alz-Bot JavaScript API documentation area for all platforms, apps and languages." />
    <meta property="og:image" content="../../../media/meta-image.jpg" />
    <link rel="stylesheet" href="../../../them-viz/css/bootstrap-grid.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../../them-viz/css/styles.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../../css/alz-bot.css" type="text/css" media="all">
    <link rel="stylesheet" href="../../../them-viz/css/magnific-popup.css" />
    <link rel="stylesheet" href="../../../them-viz/css/prettify.css" />
    <link rel="stylesheet" href="../../../them-viz/css-viz/language-translets.css">  
    <link rel="stylesheet" href="../../../skin.css?v=22" type="text/css" media="all" />
    <link rel="shortcut icon" href="../../../media/icon.svg" />
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
                    <a href="../../../index">
                        <img src="../../../media/logo-api.svg" alt="لوجو - آلزا بوت" />
                    </a>
                </div>
                <i class="menu-btn align-center"></i>
                <div class="menu-cnt align-center">
                    <ul id="main-menu">
                    <li>
                            <a href="../../../index">الصفحة الرئيسية</a>
                        </li>
                        <li>
                            <a href="../../../changes">سجل التغييرات</a>
                        </li>
                        <li>
                            <a href="../api/web">واجهة برمجية التطبيقات</a>
                        </li>
                        <li class="dropdown">
                    <a href="#">اللغة</a>
                    <ul>
                        <li><a class="btn btn-ss" href="<?php echo '../../../../../lang/ar/works/docs/api/' . $pageName; ?>">العربية <img width="15px;" height="10px;" style="text-align:center;" src="../../../media/langs/sa.png" alt="علم العربية - الزا بوت"></a></li>
                        <li><a class="btn btn-ss" href="<?php echo '../../../../../works/docs/api/' . $pageName; ?>">الإنجليزية <img width="15px;" height="10px;" style="text-align:center;" src="../../../media/langs/us.png" alt="علم الإنجليزية - الزا بوت"></a></li>
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
            <?php
$pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$userLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($userLanguage === 'ar') {
    echo '<div class="overlay"></div>';
    echo '<div class="language-notification warning">! هذه الصفحة ('. $pageName .') لم يتم ترجمتها بعد إلى اللغة العربية. سيتم تحويلك تلقائياً إلى اللغة الإنجليزية بعد 5 ثوانٍ من الآن.</div>';
    echo '<script>
            setTimeout(function(){
                window.location.href = "../../../../../works/docs/api/'. $pageName .'";
            }, 6000);
          </script>';
} else {
    // إذا كنت ترغب في تحويل المستخدم إلى الصفحة الرئيسية بلغة الإنجليزية، استخدم الكود التالي:
    // header('Location: ../../index.php');
}
?>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="fixed-area-menu">
                            <div class="menu-inner menu-inner-vertical docs-menu" data-height="fullscreen" data-offset="200" data-min-height="400" data-scroll-detect="true">
                                <h4>
                                    <a href="web">WEB API</a>
                                </h4>
                                <h4 class="active">
                                    <a href="#">JAVASCRIPT API</a>
                                </h4>
                                <h4>
                                    <a href="php">PHP API</a>
                                </h4>
                                <h4>
                                    <a href="use-cases">USE CASES</a>
                                </h4>
                                <hr />
                                <h4>
                                    <a href="#getting-started">Getting started</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#usage">Usage</a>
                                    </li>
                                    <li>
                                        <a href="#objects">Objects</a>
                                    </li>
                                    <li>
                                        <a href="#variables">Variables</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#functions">Functions</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#submit">submit</a>
                                    </li>
                                    <li>
                                        <a href="#sendMessage">sendMessage</a>
                                    </li>
                                    <li>
                                        <a href="#updateMessage">updateMessage</a>
                                    </li>
                                    <li>
                                        <a href="#sendEmail">sendEmail</a>
                                    </li>
                                    <li>
                                        <a href="#sendSMS">sendSMS</a>
                                    </li>
                                    <li>
                                        <a href="#desktopNotification">desktopNotification</a>
                                    </li>
                                    <li>
                                        <a href="#getRecipientUserID">getRecipientUserID</a>
                                    </li>
                                    <li>
                                        <a href="#initChat">initChat</a>
                                    </li>
                                    <li>
                                        <a href="#open">open</a>
                                    </li>
                                    <li>
                                        <a href="#openConversation">openConversation</a>
                                    </li>
                                    <li>
                                        <a href="#update">update</a>
                                    </li>
                                    <li>
                                        <a href="#populateConversations">populateConversations</a>
                                    </li>
                                    <li>
                                        <a href="#updateConversations">updateConversations</a>
                                    </li>
                                    <li>
                                        <a href="#newConversation">newConversation</a>
                                    </li>
                                    <li>
                                        <a href="#setConversation">setConversation</a>
                                    </li>
                                    <li>
                                        <a href="#startRealTime">startRealTime</a>
                                    </li>
                                    <li>
                                        <a href="#stopRealTime">stopRealTime</a>
                                    </li>
                                    <li>
                                        <a href="#busy">busy</a>
                                    </li>
                                    <li>
                                        <a href="#lastAgent">lastAgent</a>
                                    </li>
                                    <li>
                                        <a href="#scrollBottom">scrollBottom</a>
                                    </li>
                                    <li>
                                        <a href="#isBottom">isBottom</a>
                                    </li>
                                    <li>
                                        <a href="#showDashboard">showDashboard</a>
                                    </li>
                                    <li>
                                        <a href="#hideDashboard">hideDashboard</a>
                                    </li>
                                    <li>
                                        <a href="#showPanel">showPanel</a>
                                    </li>
                                    <li>
                                        <a href="#hidePanel">hidePanel</a>
                                    </li>
                                    <li>
                                        <a href="#clear">clear</a>
                                    </li>
                                    <li>
                                        <a href="#updateNotifications">updateNotifications</a>
                                    </li>
                                    <li>
                                        <a href="#setConversationStatus">setConversationStatus</a>
                                    </li>
                                    <li>
                                        <a href="#typing">typing</a>
                                    </li>
                                    <li>
                                        <a href="#showArticles">showArticles</a>
                                    </li>
                                    <li>
                                        <a href="#getArticles">getArticles</a>
                                    </li>
                                    <li>
                                        <a href="#searchArticles">searchArticles</a>
                                    </li>
                                    <li>
                                        <a href="#setArticleRating">setArticleRating</a>
                                    </li>
                                    <li>
                                        <a href="#categoryEmoji">categoryEmoji</a>
                                    </li>
                                    <li>
                                        <a href="#searchEmoji">searchEmoji</a>
                                    </li>
                                    <li>
                                        <a href="#insertText">insertText</a>
                                    </li>
                                    <li>
                                        <a href="#privacy">privacy</a>
                                    </li>
                                    <li>
                                        <a href="#popup">pop-up</a>
                                    </li>
                                    <li>
                                        <a href="#slackMessage">slackMessage</a>
                                    </li>
                                    <li>
                                        <a href="#deleteMessage">deleteMessage</a>
                                    </li>
                                    <li>
                                        <a href="#registration">registration</a>
                                    </li>
                                    <li>
                                        <a href="#addUserAndLogin">addUserAndLogin</a>
                                    </li>
                                    <li>
                                        <a href="#getDepartmentCode">getDepartmentCode</a>
                                    </li>
                                    <li>
                                        <a href="#offlineMessage">offlineMessage</a>
                                    </li>
                                    <li>
                                        <a href="#isInitDashboard">isInitDashboard</a>
                                    </li>
                                    <li>
                                        <a href="#isInitDashboard">closeChat</a>
                                    </li>
                                    <li>
                                        <a href="#flashNotification">flashNotification</a>
                                    </li>
                                    <li>
                                        <a href="#playSound">playSound</a>
                                    </li>
                                    <li>
                                        <a href="#automations.runAll">automations.runAll</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#apps">Apps</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#is">is</a>
                                    </li>
                                    <li>
                                        <a href="#wordpress-ajax">wordpress.ajax</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-message">dialogflow.message</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-active">dialogflow.active</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-welcome">dialogflow.welcome</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-openAI">dialogflow.openAI</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-typing">dialogflow.typing</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-humanTakeover">dialogflow.humanTakeover</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-humanTakeoverActive">dialogflow.humanTakeoverActive</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-translate">dialogflow.translate</a>
                                    </li>
                                    <li>
                                        <a href="#updateCart">woocommerce.updateCart</a>
                                    </li>
                                    <li>
                                        <a href="#waitingList">woocommerce.waitingList</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#tickets">Tickets</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#tickets-showPanel">showPanel</a>
                                    </li>
                                    <li>
                                        <a href="#showSidePanels">showSidePanels</a>
                                    </li>
                                    <li>
                                        <a href="#setAgent">setAgent</a>
                                    </li>
                                    <li>
                                        <a href="#activateConversation">activateConversation</a>
                                    </li>
                                    <li>
                                        <a href="#selectConversation">selectConversation</a>
                                    </li>
                                    <li>
                                        <a href="#getActiveConversation">getActiveConversation</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#pusher">Pusher</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#pusher-init">init</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-start">start</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-subscribe">subscribe</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-event">event</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-trigger">trigger</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-presence">presence</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-presence-unsubscribe">presenceUnsubscribe</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-notification">pushNotification</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#more-functions">More functions</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#activeUser">activeUser</a>
                                    </li>
                                    <li>
                                        <a href="#getActiveUser">getActiveUser</a>
                                    </li>
                                    <li>
                                        <a href="#cors">cors</a>
                                    </li>
                                    <li>
                                        <a href="#null">null</a>
                                    </li>
                                    <li>
                                        <a href="#deactivateAll">deactivateAll</a>
                                    </li>
                                    <li>
                                        <a href="#getURL">getURL</a>
                                    </li>
                                    <li>
                                        <a href="#restoreJson">restoreJson</a>
                                    </li>
                                    <li>
                                        <a href="#stringToSlug">stringToSlug</a>
                                    </li>
                                    <li>
                                        <a href="#settingsStringToArray">settingsStringToArray</a>
                                    </li>
                                    <li>
                                        <a href="#random">random</a>
                                    </li>
                                    <li>
                                        <a href="#isAgent">isAgent</a>
                                    </li>
                                    <li>
                                        <a href="#error">error</a>
                                    </li>
                                    <li>
                                        <a href="#errorValidation">errorValidation</a>
                                    </li>
                                    <li>
                                        <a href="#login">login</a>
                                    </li>
                                    <li>
                                        <a href="#logout">logout</a>
                                    </li>
                                    <li>
                                        <a href="#loginCookie">loginCookie</a>
                                    </li>
                                    <li>
                                        <a href="#reset">reset</a>
                                    </li>
                                    <li>
                                        <a href="#dialog">dialog</a>
                                    </li>
                                    <li>
                                        <a href="#lightbox">lightbox</a>
                                    </li>
                                    <li>
                                        <a href="#storage">storage</a>
                                    </li>
                                    <li>
                                        <a href="#setting">setting</a>
                                    </li>
                                    <li>
                                        <a href="#shortcode">shortcode</a>
                                    </li>
                                    <li>
                                        <a href="#openWindow">openWindow</a>
                                    </li>
                                    <li>
                                        <a href="#loadResource">loadResource</a>
                                    </li>
                                    <li>
                                        <a href="#debounce">debounce</a>
                                    </li>
                                    <li>
                                        <a href="#translate">translate</a>
                                    </li>
                                    <li>
                                        <a href="#escape">escape</a>
                                    </li>
                                    <li>
                                        <a href="#convertUTCDateToLocalDate">convertUTCDateToLocalDate</a>
                                    </li>
                                    <li>
                                        <a href="#getLocationTimeString">getLocationTimeString</a>
                                    </li>
                                    <li>
                                        <a href="#beautifyTime">beautifyTime</a>
                                    </li>
                                    <li>
                                        <a href="#dateDB">dateDB</a>
                                    </li>
                                    <li>
                                        <a href="#UTC">UTC</a>
                                    </li>
                                    <li>
                                        <a href="#unix">unix</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#events">Events</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#SBReady">SBReady</a>
                                    </li>
                                    <li>
                                        <a href="#SBInit">SBInit</a>
                                    </li>
                                    <li>
                                        <a href="#SBTicketsInit">SBTicketsInit</a>
                                    </li>
                                    <li>
                                        <a href="#SBLogout">SBLogout</a>
                                    </li>
                                    <li>
                                        <a href="#SBError">SBError</a>
                                    </li>
                                    <li>
                                        <a href="#SBDoubleLoginError">SBDoubleLoginError</a>
                                    </li>
                                    <li>
                                        <a href="#SBUserDeleted">SBUserDeleted</a>
                                    </li>
                                    <li>
                                        <a href="#SBMessageSent">SBMessageSent</a>
                                    </li>
                                    <li>
                                        <a href="#SBBotMessage">SBBotMessage</a>
                                    </li>
                                    <li>
                                        <a href="#SBSlackMessageSent">SBSlackMessageSent</a>
                                    </li>
                                    <li>
                                        <a href="#SBEmailSent">SBEmailSent</a>
                                    </li>
                                    <li>
                                        <a href="#SBNotificaionsUpdate">SBNotificaionsUpdate</a>
                                    </li>
                                    <li>
                                        <a href="#SBConversationOpen">SBConversationOpen</a>
                                    </li>
                                    <li>
                                        <a href="#SBNewMessagesReceived">SBNewMessagesReceived</a>
                                    </li>
                                    <li>
                                        <a href="#SBMessageDeleted">SBMessageDeleted</a>
                                    </li>
                                    <li>
                                        <a href="#SBNewConversationReceived">SBNewConversationReceived</a>
                                    </li>
                                    <li>
                                        <a href="#SBNewConversationCreated">SBNewConversationCreated</a>
                                    </li>
                                    <li>
                                        <a href="#SBActiveConversationChanged">SBActiveConversationChanged</a>
                                    </li>
                                    <li>
                                        <a href="#SBActiveConversationStatusUpdated">SBActiveConversationStatusUpdated</a>
                                    </li>
                                    <li>
                                        <a href="#SBChatOpen">SBChatOpen</a>
                                    </li>
                                    <li>
                                        <a href="#SBChatClose">SBChatClose</a>
                                    </li>
                                    <li>
                                        <a href="#SBQueueUpdate">SBQueueUpdate</a>
                                    </li>
                                    <li>
                                        <a href="#SBBusy">SBBusy</a>
                                    </li>
                                    <li>
                                        <a href="#SBDashboard">SBDashboard</a>
                                    </li>
                                    <li>
                                        <a href="#SBDashboardClosed">SBDashboardClosed</a>
                                    </li>
                                    <li>
                                        <a href="#SBTyping">SBTyping</a>
                                    </li>
                                    <li>
                                        <a href="#SBArticles">SBArticles</a>
                                    </li>
                                    <li>
                                        <a href="#SBPrivacy">SBPrivacy</a>
                                    </li>
                                    <li>
                                        <a href="#SBPopup">SBPopup</a>
                                    </li>
                                    <li>
                                        <a href="#SBFollowUp">SBFollowUp</a>
                                    </li>
                                    <li>
                                        <a href="#SBWelcomeMessage">SBWelcomeMessage</a>
                                    </li>
                                    <li>
                                        <a href="#SBLoginForm">SBLoginForm</a>
                                    </li>
                                    <li>
                                        <a href="#SBRegistrationForm">SBRegistrationForm</a>
                                    </li>
                                    <li>
                                        <a href="#SBRichMessageSubmit">SBRichMessageSubmit</a>
                                    </li>
                                    <li>
                                        <a href="#SBAttachments">SBAttachments</a>
                                    </li>
                                    <li>
                                        <a href="#SBNewEmailAddress">SBNewEmailAddress</a>
                                    </li>
                                    <li>
                                        <a href="#SBPanelActive">SBPanelActive</a>
                                    </li>
                                    <li>
                                        <a href="#SBBotPayload">SBWoocommerceCartUpdated</a>
                                    </li>
                                    <li>
                                        <a href="#SBBotPayload">SBBotPayload</a>
                                    </li>
                                    <li>
                                        <a href="#SBBotAction">SBBotAction</a>
                                    </li>
                                    <li>
                                        <a href="#SBSMSSent">SBSMSSent</a>
                                    </li>
                                    <li>
                                        <a href="#SBActiveUserLoaded">SBActiveUserLoaded</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#miscellaneous">Miscellaneous</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#ajax">AJAX functions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 docs">
                        <div id="getting-started">
                            <div class="label label-docs">Getting started</div>
                            <div class="fixed-area label-fixed">Setup and usage</div>
                            <h2 id="usage">Setup and usage</h2>
                            <p>
                                The JavaScript API supplies a collection of functions and events that underpin the majority of Alz-Bot functionality.
                                To start using the JavaScript API follow the tutorial below.
                            </p>
                            <h4>Usage</h4>
                            <p>
                                Make sure to load the chat by including the following script into the page where you want to use the APIs.
                                Make sure the links are correct. If you're using the WordPress version this step is not required.
                            </p>
                            <pre class="prettyprint">
                                &lt;script src="alz-bot/js/min/jquery.min.js">&lt;/script>
                                &lt;script id="sbinit" src="alz-bot/js/main.js">&lt;/script>
                            </pre>
                            <p>
                                Enter the code snippets, functions, and methods of this documentation into the function below.
                            </p>
                            <pre class="prettyprint">
                                (function ($) {
                                    $(document).on("SBInit", function () {
                                        // Insert your code here
                                    });
                                }(jQuery));
                            </pre>
                            <h4>Function parameters</h4>
                            <p>
                                Enter the function parameters in the same order of this documentation. Example:
                                <b>SBChat.sendMessage(user_id, message, attachments)</b>.
                            </p>
                            <h4>Debug</h4>
                            <p>
                                Check the browser console for errors and debug information.
                            </p>
                        </div>
                        <hr class="space-lg" />
                        <div id="objects">
                            <div class="label label-docs">Getting started</div>
                            <div class="fixed-area label-fixed">Objects</div>
                            <h2>Objects</h2>
                            <p>The JavaScript objects used by Alz-Bot are listed below. In some cases, you will need to use these objects to use a function.</p>
                            <hr />
                            <h4>SBUser</h4>
                            <p>Represents a user.</p>
                            <hr class="space-sm" />
                            <h4>Usage</h4>
                            <pre class="prettyprint">new SBUser(settings, extra)</pre>
                            <ul class="icon-list icon-line">
                                <li>
                                    <b>settings</b> is an array with the user details. Example:
                                    <b>{ first_name: "", last_name: "", profile_image: "", email: "", user_type: "" }</b>
                                </li>
                                <li>
                                    <b>extra</b> is an array with the additional user details. Example:
                                    <b>{ phone: "", city: "", language: "", country: "", birthday: "" }</b>
                                </li>
                            </ul>
                            <h4>Methods</h4>
                            <table class="table table-border docs-table api-table objects-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            Returns the user ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            Returns the user type. Available values: visitor, lead, user, agent, admin.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            Returns the full name of the user: first name and last name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>nameBeautified</pre>
                                        </td>
                                        <td>
                                            Returns the full name of the user if available, otherwise returns the default visitor name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>image</pre>
                                        </td>
                                        <td>
                                            Returns the profile image of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get(key)</pre>
                                        </td>
                                        <td>
                                            Returns the user detail of the given key if available, otherwise returns an empty string. Example:
                                            <b>get("email")</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getExtra(key)</pre>
                                        </td>
                                        <td>
                                            Returns the additional user detail of the given key if available, otherwise returns an empty string. Example:
                                            <b>get("phone")</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>set(key, value)</pre>
                                        </td>
                                        <td>
                                            Update a user detail or add a new one. Example:
                                            <b>set("phone", "(02) 123 456789")</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>setExtra(key, value)</pre>
                                        </td>
                                        <td>
                                            Update an additional user detail or add a new one.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update(function(){})</pre>
                                        </td>
                                        <td>
                                            Connect to the database and update the user details and the additional user details with fresh data from the database. Optionally run a function on complete. This method is asynchronous and requires the user ID to works.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getConversations(function(conversations){}, exclude_id)</pre>
                                        </td>
                                        <td>
                                            Connect to the database and get the user conversations, each conversation includes an excerpt of the last message. Optionally run a function on complete. The parameter
                                            <b>exclude_id</b> can be any conversation ID and it will exclude the conversation with that ID from the returned value. This method is asynchronous and requires the user ID to works.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getConversationsCode(conversations)</pre>
                                        </td>
                                        <td>
                                            Returns the HTML code of the conversations list.
                                            Optionally accepts an array of
                                            <b>SBConversation</b> objects.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getFullConversation(conversation_id, function(conversation){})</pre>
                                        </td>
                                        <td>
                                            Connect to the database and returns a full conversation, including all messages. Optionally run a function on complete. This method is asynchronous and requires a conversation ID to works.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getConversationByID(conversation_id, index)</pre>
                                        </td>
                                        <td>
                                            Search for a conversation with the given ID and returns it, otherwise, returns false. Set <b>index</b> to <b>true</b> to return the conversations array position.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>addConversation(conversation)</pre>
                                        </td>
                                        <td>
                                            Add a new conversation to the user object, the parameter
                                            <b>conversation</b> must be a
                                            <b>SBConversation</b> object. This method doesn't update the database.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>removeConversation(conversation_id)</pre>
                                        </td>
                                        <td>
                                            Remove a conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getLastConversation()</pre>
                                        </td>
                                        <td>
                                            Returns the last conversation if any, otherwise returns false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>isConversationsEmpty()</pre>
                                        </td>
                                        <td>
                                            Return
                                            <b>true</b> if the user has at least 1 conversation, otherwise, return
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>isExtraEmpty()</pre>
                                        </td>
                                        <td>
                                            Return
                                            <b>true</b> if the additional user details have been already set, otherwise return
                                            <b>false</b>. This method returns
                                            <b>true</b> also if the additiona user details list is empty, but it's setted.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>delete(function(){})</pre>
                                        </td>
                                        <td>
                                            Delete the user from the database and all the linked conversations and messages, permanently. Optionally run a function on complete. This method is asynchronous and requires the user ID to works.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language()</pre>
                                        </td>
                                        <td>
                                            Returns the user language.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Variables</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>details</pre>
                                        </td>
                                        <td>
                                            Array with the user details.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            Array with the additional user details.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversations</pre>
                                        </td>
                                        <td>
                                            Array with the user conversations. Each conversation contains only the last message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h4>SBMessage</h4>
                            <p>Represents a message of a conversation.</p>
                            <hr class="space-sm" />
                            <h4>Usage</h4>
                            <pre class="prettyprint">new SBMessage(details)</pre>
                            <ul class="icon-list icon-line">
                                <li>
                                    <b>details</b> is an array with the message details. Example:
                                    <b>{ "id": "2319", "user_id": "377", "message": "Welcome to our support chat!", "creation_time": "2020-05-12 18:04:50", "attachments": "", "status_code": "0", "payload": "", "conversation_id": "1004", "first_name": "Virtual", "last_name": "Agent", "profile_image": "https://alz-bot.com/bot.svg", "user_type": "bot" }</b>
                                </li>
                            </ul>
                            <h4>Methods</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            Returns the message ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Returns the attachments array.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            Returns the message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get(key)</pre>
                                        </td>
                                        <td>
                                            Returns the content of the given key if available, otherwise returns an empty string. Example:
                                            <b>get("message")</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>set(key, value)</pre>
                                        </td>
                                        <td>
                                            Update a message detail or add a new one. Example:
                                            <b>set("message", "Hello!")</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload(key, value)</pre>
                                        </td>
                                        <td>
                                            Set or get the payload. The payload is an associative array containing extra data. Example:
                                            <b>{"rich-messages":{"123":{"type":"buttons","result":"Premium Plan"}}}</b>, it contains the full Dialogflow response if the message is from the Dialogflow bot.
                                            If the
                                            <b>value</b> is set, the method adds or updates the key with the given value.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getCode(translation)</pre>
                                        </td>
                                        <td>
                                            Returns the HTML code of the message, ready to be inserted in the chat DOM element. This method process attachments, Rich Messages, and text formatting.
                                            Set <b>translation</b> to <b>true</b> to get the transalted message is available.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>render(message)</pre>
                                        </td>
                                        <td>
                                            Render the message and format it by adding stylings like bold and italic, and by converting URLs to clickable links. Optionally accept a string and render it instead.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>strip(message)</pre>
                                        </td>
                                        <td>
                                            Remove the <a href="../#text-editor">text formatting</a>. Optionally accept a string and remove the text formatting from it instead.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Variables</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>details</pre>
                                        </td>
                                        <td>
                                            Array with the message details.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h4>SBConversation</h4>
                            <p>Represents a conversation.</p>
                            <hr class="space-sm" />
                            <h4>Usage</h4>
                            <pre class="prettyprint">new SBConversation(messages, details)</pre>
                            <ul class="icon-list icon-line">
                                <li>
                                    <b>messages</b> is an array of
                                    <b>SBMessage</b> objects.
                                </li>
                                <li>
                                    <b>details</b> is optional and it's an array with the conversation details. Example:
                                    <b>{ conversation_status_code: "2", conversation_time: "2020-05-18 11:48:09", department: null, first_name: "Don", last_name: "John", id: "102", profile_image: "https://alz-bot.com/user.jpg", title: "", user_id: "897", user_type: "lead" }</b>
                                </li>
                            </ul>
                            <h4>Methods</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            Returns the conversation ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get(key)</pre>
                                        </td>
                                        <td>
                                            Returns the content of the given key if available, otherwise returns an empty string. Example:
                                            <b>get("conversation_status_code")</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>set(key, value)</pre>
                                        </td>
                                        <td>
                                            Update a conversation detail or add a new one. Example:
                                            <b>set("conversation_status_code", 2)</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getMessage(ID)</pre>
                                        </td>
                                        <td>
                                            Returns the message with the given ID. Return
                                            <b>false</b> if the message is not found.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getLastMessage()</pre>
                                        </td>
                                        <td>
                                            Returns the last message of the conversation. Return
                                            <b>false</b> if there are no messages.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getLastUserMessage(index, agent)</pre>
                                        </td>
                                        <td>
                                            Returns the last message of the conversation sent by the user, this method excludes the messages sent by the bot, the agents, or the admins.
                                            Optionally accepts an index from which start the research of the message, the research is in inverted order, from the last message to the first one. Return
                                            <b>false</b> if there are no messages. Set the argument <b>agent</b> to <b>true</b> to return the last message of the agents or admins, to <b>bot</b> to return the last message of the bot, to <b>no-bot</b> to return the last message of the user or agent excluding the bot, to <b>all</b> to return the last message of the agent or bot.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>updateMessage(ID, message)</pre>
                                        </td>
                                        <td>
                                            Update the message with the given ID. The parameter
                                            <b>message</b> must be a
                                            <b>SBMessage</b> object.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>addMessages(messages)</pre>
                                        </td>
                                        <td>
                                            Add new messages to the conversation. The parameter
                                            <b>messages</b> must be a single
                                            <b>SBMessage</b> object or an array of
                                            <b>SBMessage</b> objects.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getCode()</pre>
                                        </td>
                                        <td>
                                            Returns the HTML code of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>deleteMessage(ID)</pre>
                                        </td>
                                        <td>
                                            Remove the message with the given ID from the conversation object. This method doesn't update the database.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>searchMessages(search, exact_match)</pre>
                                        </td>
                                        <td>
                                            Search for the search string in all the messages of the conversation and returns an array with the messages that match the search.
                                            Set the argument
                                            <b>exact_match</b> to
                                            <b>true</b> to get only the messages with exactly the same content of the search.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getUserMessages(user_type)</pre>
                                        </td>
                                        <td>
                                            Return an array containing only the messages sent by the user, by the bot, or by the agents. Accepted <b>user_type</b> values: <b>user</b>, <b>agents</b>, <b>bot</b>. Default: <b>user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getAttachments()</pre>
                                        </td>
                                        <td>
                                            Returns an array containing all the attachments of the conversation.
                                            Each item is an array containing the following details: filename, link, file extension, message ID. Example:
                                            <b>[["image.jpg", "https://alz-bot.com/image.jpg", "jpg", "5132"], ["file.txt", "https://alz-bot.com/file.txt", "txt", "5135"], ...]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>getLastConversationID()</pre>
                                        </td>
                                        <td>
                                            Returns the ID of the last conversation if any, otherwise returns false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>updateMessagesStatus(ids)</pre>
                                        </td>
                                        <td>
                                            Update the status code of multiple messages to read.
                                            The parameter <b>ids</b> is an array of message IDs and it is optional,
                                            if provided, the check icon is added to the message but the messages status is not updated in the database.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Variables</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>details</pre>
                                        </td>
                                        <td>
                                            Array with the conversation details.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="space-lg" />
                        <div id="variables">
                            <div class="label label-docs">Getting started</div>
                            <div class="fixed-area label-fixed">Variables</div>
                            <h2>Variables</h2>
                            <p>The variables in the list below are publicly accessible via JavaScript.</p>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table">
                                <thead>
                                    <tr>
                                        <th>Variable</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>SB_ARTICLES_PAGE</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to show the articles page instead of the chat.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SB_LOCAL_SETTINGS</pre>
                                        </td>
                                        <td>
                                            Overwrite the default client-side settings. The value is an array of keys and values, each key is a setting, e.g. <b>{ registration-required: false }</b>.
                                            Get the settings list from <b>resources/json/settings.json</b> and the files <b>settings.json</b> inside the app folders.
                                            Some setting name may differ from the one in the JSON file, check the function <b>sb_front_settings()</b> in <b>include/functions.php</b> if a setting is not applied.
                                            Only client-side settings are affected, to overwrite all settings use the PHP method <a href="../#config">here</a>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SB_DISABLED</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> and insert it into a page to prevent the chat or the tickets area from loading.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SB_REGISTRATION_REQUIRED</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> and insert it into a page to disable the mandatory registration, set it to
                                            <b>false</b> to disable the registration.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SB_TICKETS</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> and insert it into a page to force the loading of the tickets area instead of the chat. The Tickets app is required.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SB_DEFAULT_USER</pre>
                                        </td>
                                        <td>
                                            Set the default user details to be used when a new visitor enters the website.
                                            If a registered Alz-Bot user visits the website and their login differs from the default user details, they are logged out and logged in with the new details.
                                            If the user is already registered, they log in automatically.
                                            Make sure to include an email and password hash in the user details array to make sure it works correctly, if the user doesn't have an email, please include a random but unique email, if the user does not have a password hash, includes a random but unique alphanumeric string.
                                            To generate an hash for your password, visit <a rel="nofollow" target="_blank" href="https://phppasswordhash.com/">https://phppasswordhash.com/</a>.
                                            Array example: <b>var SB_DEFAULT_USER = { first_name: 'Don', last_name: 'Jhon', email: 'don.jhon@email.com', profile_image: 'https://example.com/image.jpg', password: '$2y$10$10EN6YKw...', extra: { phone: ['0125345978', 'Phone'], country: ['US', 'Country'] } };</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SB_DEFAULT_DEPARTMENT</pre>
                                        </td>
                                        <td>
                                            Assign it a
                                            <b>department ID</b> and insert it into a page to assign to all new conversations created from the page the department with the assigned ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SB_DEFAULT_AGENT</pre>
                                        </td>
                                        <td>
                                            Assign it an
                                            <b>agent ID</b> and insert it into a page to assign to all new conversations created from the page the agent with the assigned ID.
                                            Use this variable in combination with the option
                                            <b>
                                                Settings > Miscellaneous > Hide conversations of other agents
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.initialized</pre>
                                        </td>
                                        <td>
                                            <b>true</b> if the chat is initialized, otherwise
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.conversation</pre>
                                        </td>
                                        <td>
                                            The active conversation. The value is
                                            <b>false</b> if there isn't any active conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.is_busy</pre>
                                        </td>
                                        <td>
                                            <b>true</b> if the chat is in busy mode, otherwise
                                            <b>false</b>. When the chat is in busy mode no messages or attachments can be sent.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.chat_open</pre>
                                        </td>
                                        <td>
                                            <b>true</b> if the chat is open, otherwise
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.agent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the active agent in the active conversation.
                                            The value is
                                            <b>-1</b> if there isn't any active agent.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.agent_online</pre>
                                        </td>
                                        <td>
                                            <b>true</b> if the active agent is online, otherwise
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.user_online</pre>
                                        </td>
                                        <td>
                                            <b>true</b> if the user is online, otherwise
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.timetable</pre>
                                        </td>
                                        <td>
                                            <b>true</b> if the current time is within the office hours, otherwise
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>SBChat.dashboard</pre>
                                        </td>
                                        <td>
                                            <b>true</b> if the dashboard is active and visible, otherwise
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="space-lg" />
                        <div id="functions">
                            <div class="label label-docs">JAVASCRIPT API</div>
                            <div class="fixed-area label-fixed">Functions</div>
                            <h2>Functions</h2>
                            <p>Functions to manage chat, users, conversations, and messages.</p>
                            <hr />
                            <h2 id="submit">SBChat.submit()</h2>
                            <p>Fire the submit button click event of the chat editor, send a message with the contents inserted by the user (message and/or attachments), and clear the editor.</p>
                            <hr />
                            <h2 id="sendMessage">SBChat.sendMessage()</h2>
                            <p>Add a new message to the active conversation.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user who sends the message. Use the function
                                            <b>SBF.setting("bot-id")</b> to get the ID of the bot. Default: -1 (active user ID).
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment. Default: [].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>. The response is the same of the
                                            <a class="scroll-to" href="#SBMessageSent">
                                                <b>SBMessageSent</b>
                                            </a> event. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            Associative array containing extra data. Example:
                                            <b>{ "event": "delete-message" }</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_status_code</pre>
                                        </td>
                                        <td>
                                            The status code of the conversation, if a new conversation is created.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                            Set it to <b>skip</b> to leave the current conversation status.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="sendMessage">SBChat.updateMessage()</h2>
                            <p>Change the text of an existing message.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message_id</pre>
                                        </td>
                                        <td>
                                            The message ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The user must be active.
                                </li>
                                <li>
                                    If the active user is an agent or administrator, any user's messages can be updated.
                                    If the active user is a user, only the active user's messages can be updated.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="sendEmail">SBChat.sendEmail()</h2>
                            <p>
                                Send an email to the users or agents returned by <a href="#getRecipientUserID" class="scroll-to">getRecipientUserID()</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment. Dialogflow can read this array.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>send_to_active_user</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to send the email to the active user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="sendSMS">SBChat.sendSMS()</h2>
                            <p>
                                Send a text message to the users or agents returned by <a href="#getRecipientUserID" class="scroll-to">getRecipientUserID()</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="desktopNotification">SBChat.desktopNotification()</h2>
                            <p>
                                Send a Desktop notification(Web notification) to the user, or the logged-in agent if the notification is sent from the admin area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>title</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The title of the notification.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>icon</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The icon of the notification.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of the conversation to open when the user clicks the notification.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="getRecipientUserID">SBChat.getRecipientUserID()</h2>
                            <p>
                                If the active user is a user, returns the ID of the last agent who answered the conversation,
                                otherwise returns the ID of the agent the conversation is assigned to, othwesite returns the ID of the department assigned to the conversation, otherwise it returns <b>agents</b> (meaning all agents).
                                If the active user is an admin or agent, returns the active user ID.
                            </p>
                            <hr />
                            <h2 id="initChat">SBChat.initChat()</h2>
                            <p>Initialize the chat and display the chat button.</p>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Use this function in combination with the setting
                                    <b>Manual initialization</b> of the
                                    <b>Settings > Chat</b> area.
                                </li>
                                <li>
                                    This method must not be inserted into the event
                                    <b>$(document).on("SBInit", function () { ... });</b>. Use instead
                                    <b>$(document).on("SBReady", function () { ... });</b>.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="open">SBChat.open()</h2>
                            <p>Open or close the chat window.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>open</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>false</b> to close the chat. Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="openConversation">SBChat.openConversation()</h2>
                            <p>Open a conversation and display it in the chat window.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation to open. Only the conversations of the active user can be opened. Use the function
                                            <b>SBF.activeUser().conversations</b> to get the conversations list.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="update">SBChat.update()</h2>
                            <p>Update the active conversation and check if there are new messages. This function is fired automatically every 1000ms.</p>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. A conversation must be active.
                                </li>
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="populateConversations">SBChat.populateConversations()</h2>
                            <p>Populate the user conversations list of the dashboard with all the conversations of the user.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(conversations) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="updateConversations">SBChat.updateConversations()</h2>
                            <p>Update the user conversations list of the dashboard and check if there are new conversations. This function is fired automatically every 10000ms.</p>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="newConversation">SBChat.newConversation()</h2>
                            <p>Create a new conversation and optionally add the first message to it.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>status_code</pre>
                                        </td>
                                        <td>
                                            The status code of the conversation. Default: 0.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user linked to the new conversation. Default: -1 (active user ID).
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>department</pre>
                                        </td>
                                        <td>
                                            The ID of a department. You can get the IDs from
                                            <b>Settings > Miscellaneous > Departments</b>. Default: NULL.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the agent assigned to the conversation. Default: NULL.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(conversation) { ... }</b>. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="setConversation">SBChat.setConversation()</h2>
                            <p>Set an existing conversation as active conversation.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>conversation</pre>
                                        </td>
                                        <td>
                                            The conversation. It must be a
                                            <b>SBConversation</b> object. Use the function
                                            <b>SBF.activeUser().conversations</b> to get the conversations list.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="startRealTime">SBChat.startRealTime()</h2>
                            <p>Start the real-time check of new messages for the active conversation every 1000ms.</p>
                            <hr />
                            <h2 id="stopRealTime">SBChat.stopRealTime()</h2>
                            <p>Stop the real-time check of new messages.</p>
                            <hr />
                            <h2 id="busy">SBChat.busy()</h2>
                            <p>
                                Show or hide the loading icon and enable or disable the chat busy mode. When the chat is in busy mode no messages or attachments can be sent.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Boolean.
                                            <b>true</b> or
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    The loading icon appears only in the conversation area, not in the dashboard or in other panels.
                                </li>
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="lastAgent">SBChat.lastAgent()</h2>
                            <p>Returns the last agent of the active conversation.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>bot</pre>
                                        </td>
                                        <td>
                                            Boolean. Set it to
                                            <b>false</b> to exclude the bot. Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "user_id": "123456",
                                    "full_name": "Don John",
                                    "profile_image": "https://alz-bot.com/agent.svg"
                                }
                            </pre>
                            <hr />
                            <h2 id="scrollBottom">SBChat.scrollBottom()</h2>
                            <p>
                                Scroll the chat to the bottom.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>top</pre>
                                        </td>
                                        <td>
                                            Boolean. Set it to
                                            <b>true</b> to scroll on top. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="isBottom">SBChat.isBottom()</h2>
                            <p>
                                Checks if the chat is at bottom.
                            </p>
                            <hr />
                            <h2 id="showDashboard">SBChat.showDashboard()</h2>
                            <p>
                                Display the dashboard.
                            </p>
                            <hr />
                            <h2 id="hideDashboard">SBChat.hideDashboard()</h2>
                            <p>
                                Hide the dashboard.
                            </p>
                            <hr />
                            <h2 id="showPanel">SBChat.showPanel()</h2>
                            <p>
                                Shows the specified area inside the chat widget.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The panel name. Available values: <b>articles</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="hidePanel">SBChat.hidePanel()</h2>
                            <p>
                                Hide the active panel inside the chat widget.
                            </p>
                            <hr />
                            <h2 id="clear">SBChat.clear()</h2>
                            <p>
                                Clear the conversation area of the chat widget and the disable the active conversation.
                            </p>
                            <hr />
                            <h2 id="updateNotifications">SBChat.updateNotifications()</h2>
                            <p>
                                Update the red notification counter of the chat button that alerts the user of new messages and new conversations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>add</b> to increase the counter of 1, insert
                                            <b>remove</b> to decrease the counter of 1. Default: add.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation linked to the update of the counter. Use the function
                                            <b>SBF.activeUser().conversations</b> to get the conversations list of the active user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="setConversationStatus">SBChat.setConversationStatus()</h2>
                            <p>
                                Update the status code of a conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>status_code</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The status code to assign to the conversation. Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The user must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="typing">SBChat.typing()</h2>
                            <p>
                                Manage the typing ... label of the chat header.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the active user (or the ID of the active agent if you're in the admin area).
                                            Use the function
                                            <b>SBF.activeUser().id</b> to get the ID of the active user (use the variable
                                            <b>SB_ACTIVE_AGENT["id"]</b> to get the ID of the active agent if you're in the admin area).
                                            Use the variable
                                            <b>SBChat.agent_id</b> to get the ID of the last agent of the conversation. Default: -1.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                        </td>
                                        <td>
                                            <p>Available values: </p>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>check</b> - Check if the user with the given ID is typing and update the chat header.
                                                </li>
                                                <li>
                                                    <b>set</b> - Assign the typing status to the user with the given ID and update the chat header.
                                                </li>
                                                <li>
                                                    <b>start</b> - Display the typing status in the chat header.
                                                </li>
                                                <li>
                                                    <b>stop</b> - Hide the typing status from the chat header.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    The typing label is visible only when a conversation is open.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="showArticles">SBChat.showArticles()</h2>
                            <p>
                                Display the articles area or one single article.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The ID of an article to show. Use the function
                                            <b>SBChat.getArticles()</b> to get the articles list. Default: -1.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="getArticles">SBChat.getArticles()</h2>
                            <p>
                                Returns the articles list or the content of one single article.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The ID of an article to show. Add multiple IDs separated by commas. Use the function
                                            <b>SBChat.getArticles()</b> to get the articles list. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>category</pre>
                                        </td>
                                        <td>
                                            Return only the articles of the given category ID. If set to <b>true</b> return also the categories list. Default: true.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>count</pre>
                                        </td>
                                        <td>
                                            The maximum number of articles to be returned. Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "id": "6P2Oq",
                                        "title": "What's new with the API V2?p",
                                        "content": "The API V2 is the new iteration of our developer API ...",
                                        "link": "https://alz-bot.com",
                                        "categories": ["Nv9PG"]
                                    },
                                    {
                                        "title": "Which API version am I currently using?",
                                        "content": "The API version is configured separately for each ...",
                                        "link": "",
                                        "id": "IDkft",
                                        "categories": []
                                    },
                                    ...
                                ]
                            </pre>
                            <p>If single article, the returned value is the article:</p>
                            <pre class="prettyprint lang-json">
                                {
                                    "id": "6P2Oq",
                                    "title": "What's new with the API V2?p",
                                    "content": "The API V2 is the new iteration of our developer API. The new API integrates Google Cloud Spe API V2 is the new iteration of our developer API. ",
                                    "link": "https://alz-bot.com"
                                }
                            </pre>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Each article of the list contains only an excerpt of the content.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="searchArticles">SBChat.searchArticles()</h2>
                            <p>Display the articles matching the search in the dashboard' articles box.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>String with the search terms. The search function supports the title and the content.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>button</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The search button object.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>target</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The HTML object to Enter the articles into.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The dashboard must be active.
                                </li>
                                <li>
                                    Requirement. The articles be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="setArticleRating">SBChat.setArticleRating()</h2>
                            <p>Set the rating of an article.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>article_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The article ID.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>rating</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The rating to add. Insert
                                            <b>1</b> for a positive rating or
                                            <b>0</b> for a
                                            negative one.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="categoryEmoji">SBChat.categoryEmoji()</h2>
                            <p>Select a category of the emoji box.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>category</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The category name. Available values: Smileys, People, Animals, Food, Travel, Activities, Objects, Symbols.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="searchEmoji">SBChat.searchEmoji()</h2>
                            <p>search for emojis that match the search terms and show them in the emoji box.</p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The search text.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="insertText">SBChat.insertText()</h2>
                            <p>
                                Insert a string in the chat editor.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>text</pre>
                                        </td>
                                        <td>
                                            The string to insert in the editor.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. A conversation must be active and open.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="privacy">SBChat.privacy()</h2>
                            <p>
                                Display the privacy message and force the user to accept the terms before starting the chat.
                            </p>
                            <hr />
                            <h2 id="popup">SBChat.popup()</h2>
                            <p>
                                Display a pop-up message or close it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>close</pre>
                                        </td>
                                        <td>
                                            Boolean. Set it to
                                            <b>true</b> to close the pop-up. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>content</pre>
                                        </td>
                                        <td>
                                            Array with the pop-up content. Array syntax:
                                            <b>{ image: "", title: "", message: "" }</b>. Default: the content inserted in the
                                            <b>Settings > Chat > Popup message</b> area.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The chat must close.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="slackMessage">SBChat.slackMessage()</h2>
                            <p>
                                Send a message to Slack.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the active user (or the ID of the active agent if you're in the admin area).
                                            Use the function
                                            <b>SBF.activeUser().id</b> to get the ID of the active user (use the variable
                                            <b>SB_ACTIVE_AGENT["id"]</b> to get the ID of the active agent if you're in the admin area).
                                            Use the variable
                                            <b>SBChat.agent_id</b> to get the ID of the last agent of the conversation. Default: -1.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>full_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The name of the sender, it will appear in Slack on the left of the message. It should be an agent's name if the message is from an agent, otherwise the user's name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>profile_image</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The profile image of the sender, it will appear in Slack on the left of the message.
                                            It should be an agent's profile image if the message is from an agent, otherwise the user's profile image.
                                            Supported formats:
                                            <b>PNG</b> and
                                            <b>JPG</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments in
                                            <b>JSON</b> format. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. A conversation must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="deleteMessage">SBChat.deleteMessage()</h2>
                            <p>
                                Delete a message from the database and the active conversation if available.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the message to delete. Use the function
                                            <b>SBChat.conversation.messages</b> to get the messages list of the active conversation.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Only the messages of the conversations of the active user can be deleted.
                                </li>
                                <li>
                                    Requirement. A conversation must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="registration">SBChat.registration()</h2>
                            <p>
                                Display the registration or the login area or check if the registration is required.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>check</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to check if the registration is required. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            Insert
                                            <b>registration</b> to display the registration form, insert
                                            <b>login</b> to display the login form.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="addUserAndLogin">SBChat.addUserAndLogin()</h2>
                            <p>
                                Register a new user as a
                                <b>visitor</b> and login it automatically after the registration. Optionally execute a function on complete.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "id": "913",
                                        "profile_image": "https://alz-bot.com/user.svg",
                                        "first_name": "Don",
                                        "last_name": "John",
                                        "email": "hello@example.com",
                                        "user_type": "user",
                                        "token": "9b25351047ee758aa97ee4868d130cc1ceb8decf"
                                    },
                                    "YXNkWGNSeTdtRTdDYVkxVG8wckN4YWF6V2s0Tk1mczBSVHdQbHBpOWdmejVUTTdOUUxEUENhdUVoYmROWn..."
                                ]
                            </pre>
                            <p>
                                The last value is the encrypted login data ready to be stored in the Web Storage of the user' browser.
                                Use the function
                                <b>SBF.loginCookie(response[1]);</b> to store it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    If a user is already logged-in a page reload is required to activate the new user.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="getDepartmentCode">SBChat.getDepartmentCode()</h2>
                            <p>
                                Returns an HTML code with the details of the given department or of all the departments. Department details:
                                <b>id</b>,
                                <b>color</b>,
                                <b>image</b>,
                                <b>name</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>department_id</pre>
                                        </td>
                                        <td>
                                            The ID of the department. If this parameter is not setted or null, the function returns the code of all departments.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint">
                                &lt;div data-color="red">&lt;img src="sales.jpg" />&lt;div>Sales&lt;div>&lt;/div>
                            </pre>
                            <hr />
                            <h2 id="offlineMessage">SBChat.offlineMessage()</h2>
                            <p>
                                Checks if the offline message can be sent and send it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. A conversation must be active.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="isInitDashboard">SBChat.isInitDashboard()</h2>
                            <p>
                                Checks if dashboard is shown by default when the chat widget is initialized.
                            </p>
                            <hr />
                            <h2 id="closeChat">SBChat.closeChat()</h2>
                            <p>
                                Archives a conversation and hide it from the chat widget.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>update_conversation_status</pre>
                                        </td>
                                        <td>
                                            Set it to <b>false</b> to only hide the conversation from the chat widget without setting its status to archived. Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="flashNotification">SBChat.flashNotification()</h2>
                            <p>
                                Starts the flash notification.
                            </p>
                            <hr />
                            <h2 id="playSound">SBChat.playSound()</h2>
                            <p>
                                Play the sound that plays when a new message is received.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>repeat</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to repeat the sound as many times as set in the settings. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="automations.runAll">SBChat.automations.runAll()</h2>
                            <p>
                                Checks all automations and runs them if the trigger conditions are validated.
                            </p>
                        </div>
                        <hr class="space-lg" />
                        <div id="apps">
                            <div class="label label-docs">JAVASCRIPT API</div>
                            <div class="fixed-area label-fixed">Apps</div>
                            <h2>Apps</h2>
                            <p>List of functions of the Alz-Bot apps.</p>
                            <hr />
                            <h2 id="is">SBApps.is()</h2>
                            <p>
                                Checks if an app is available.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The app name, e.g. dialogflow.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="wordpress-ajax">SBApps.wordpress.ajax()</h2>
                            <p>
                                Makes a WordPress AJAX call.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The action. Available values: wp-login, wp-registration, button-purchase. Other values may be available, check main.js file for all values.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>data</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The action parameters, check main.js file for more details.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="dialogflow-message">SBApps.dialogflow.message()</h2>
                            <p>
                                Send a message to Dialogflow and add the Dialogflow response to the active conversation as a new message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment. Dialogflow can read this array.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>delay</pre>
                                        </td>
                                        <td>
                                            Bot response delay in milliseconds.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>parameters</pre>
                                        </td>
                                        <td>
                                            Array of optional information. Array syntax:
                                            <b>{ "name": "value", "name": "value", ...}</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The Dialogflow App is required and Dialogflow must be active in the
                                    <b>Settings</b> area.
                                </li>
                                <li>
                                    Requirement. The user must be active.
                                </li>
                                <li>
                                    Use <b>SBApps.dialogflow.project_id = AGENT_ID</b> to change the default Dialogflow agent.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="dialogflow-active">SBApps.dialogflow.active()</h2>
                            <p>
                                Check if Dialogflow is active or deactivate it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>active</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>false</b> to disable Dialogflow and stop the bot.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the Dialogflow bot is active, otherwise, return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="dialogflow-welcome">SBApps.dialogflow.welcome()</h2>
                            <p>
                                Triggers the Dialogflow welcome Intent and display the Dialogflow welcome message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The Dialogflow App is required and Dialogflow must be active in the <b>Settings</b> area.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="dialogflow-openAI">SBApps.dialogflow.openAI()</h2>
                            <p>
                                Sends a message to OpenAI (ChatGPT), return the response, and optionally adds the response as a new message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Requirement. The Dialogflow App is required and <b>Settings > Dialogflow > OpenAI > Active</b> must be active.
                                </li>
                                <li>
                                    If a conversation is active, the OpenAI response is automatically added as as new message.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="dialogflow-typing">SBApps.dialogflow.typing()</h2>
                            <p>
                                Starts the typing animation of the chat widget.
                            </p>
                            <hr />
                            <h2 id="dialogflow-humanTakeover">SBApps.dialogflow.humanTakeover()</h2>
                            <p>
                                Starts the Dialogflow human takeover of <b>Settings > Dialogflow > Human takeover</b>.
                            </p>
                            <hr />
                            <h2 id="dialogflow-humanTakeoverActive">SBApps.dialogflow.humanTakeoverActive()</h2>
                            <p>
                                Check if human takeover is active for the active conversation.
                            </p>
                            <hr />
                            <h2 id="dialogflow-translate">SBApps.dialogflow.translate()</h2>
                            <p>
                                Translate multiple strings via Google Translate.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>strings</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of the strings to translate, e.g. ["Hello world", "How are you?"].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language_code</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The two-letter language code of the language you want to translate into.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="updateCart">SBApps.woocommerce.updateCart()</h2>
                            <p>
                                Update the cart of the active user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                        </td>
                                        <td>
                                            Available actions:
                                            <b>cart-add</b>,
                                            <b>cart-remove</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product_id</pre>
                                        </td>
                                        <td>
                                            The product ID to add or remove.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="waitingList">SBApps.woocommerce.waitingList()</h2>
                            <p>
                                Display the waiting list message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>request</b>. The other actions are used internally by the script.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product_id</pre>
                                        </td>
                                        <td>
                                            The ID of the product to add to the waiting list.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="space-lg" />
                        <div id="tickets">
                            <div class="label label-docs">JAVASCRIPT API</div>
                            <div class="fixed-area label-fixed">Tickets</div>
                            <h2>Tickets</h2>
                            <p>List of functions of the Tickets App.</p>
                            <hr />
                            <h2 id="tickets-showPanel">SBTickets.showPanel()</h2>
                            <p>
                                Display a panel or the conversation area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The name of the panel to show. Available names:
                                            <b>new-ticket</b>,
                                            <b>privacy</b>,
                                            <b>articles</b>,
                                            <b>edit-profile</b>,
                                            <b>login</b>,
                                            <b>registration</b>. Leave it empty to display the main conversation area.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>title</pre>
                                        </td>
                                        <td>
                                            The title to display as the panel name.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="showSidePanels">SBTickets.showSidePanels()</h2>
                            <p>
                                Display or hide the side panels.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>show</pre>
                                        </td>
                                        <td>
                                            Set it to false to hide the panels.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="setAgent">SBTickets.setAgent()</h2>
                            <p>
                                Get the agent details and populate the agent profile area of the right panel.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the agent.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="activateConversation">SBTickets.activateConversation()</h2>
                            <p>
                                Activate and display a conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>conversation</pre>
                                        </td>
                                        <td>
                                            The conversation to activate as a
                                            <b>SBConversation</b> object.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="selectConversation">SBTickets.selectConversation()</h2>
                            <p>
                                Set the style of a conversation of the left panel as the active conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of the conversation.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="getActiveConversation">SBTickets.getActiveConversation()</h2>
                            <p>
                                Returns the HTML DOM object of the active conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>ID</b> to get only the ID of the conversation.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="space-lg" />
                        <div id="pusher">
                            <div class="label label-docs">JAVASCRIPT API</div>
                            <div class="fixed-area label-fixed">Pusher</div>
                            <h2>Pusher</h2>
                            <p>
                                List of functions for Pusher. More details at
                                <a href="https://pusher.com/" target="_blank" rel="nofollow">pusher.com</a>.
                            </p>
                            <hr />
                            <h2 id="pusher-init">SBPusher.init()</h2>
                            <p>
                                Initialize Pusher and optionally execute a function on initialization completed.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="pusher-start">SBPusher.start()</h2>
                            <p>
                                Start Pusher and Push notifications. Run this function after SBPusher.init() and after the user is active.
                            </p>
                            <hr />
                            <h2 id="pusher-subscribe">SBPusher.subscribe()</h2>
                            <p>
                                Subscribe the active user to a Pusher channel.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>channel_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The channel name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    If Pusher is not initialized the function automatically initializes it.
                                </li>
                                <li>
                                    You can access the channel from
                                    <b>SBPusher.channels['CHANNEL NAME']</b>.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="pusher-event">SBPusher.event()</h2>
                            <p>
                                Subscribe the active user to an event of a Pusher channel and execute the given function when the event is received.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>event</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The event name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>callback</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Function to execute once the event is received. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>channel</pre>
                                        </td>
                                        <td>
                                            The channel name. Default: private-user-[active user ID].
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    If Pusher is not initialized the function automatically initializes it.
                                </li>
                                <li>
                                    If the user is not subscribed to the channel the function automatically subscribes the user.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="pusher-trigger">SBPusher.trigger()</h2>
                            <p>
                                Trigger an avent on a Pusher channel.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>event</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The event name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>data</pre>
                                        </td>
                                        <td>
                                            Array of values. Syntax:
                                            <b>{ "name": "value" }</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>channel</pre>
                                        </td>
                                        <td>
                                            The channel name. Default: private-user-[active user ID].
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="pusher-presence">SBPusher.presence()</h2>
                            <p>
                                Subscribe the active user to the presence channel used for the online status of users and admins.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>index</pre>
                                        </td>
                                        <td>
                                            The presence channel index. Default: 1.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    If Pusher is not initialized the function automatically initializes it.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="pusher-presence-unsubscribe">SBPusher.presenceUnsubscribe()</h2>
                            <p>
                                Unsubscribe the active user from the presence channel.
                            </p>
                            <hr />
                            <h2 id="pusher-notification">SBPusher.pushNotification()</h2>
                            <p>
                                Send a Push notification to the last agent of the conversation, or all agents if no agents have replied yet.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    This function works only if the Push notifications are active in the settings area.
                                </li>
                                <li>
                                    Currently, Push notifications are supported only on Mac, Windows and Android devices. IPhones and iOS devices are not supported.
                                </li>
                                <li>
                                    For more details click
                                    <a href="../#push">here</a>.
                                </li>
                            </ul>
                        </div>
                        <hr class="space-lg" />
                        <div id="more functions">
                            <div class="label label-docs">JAVASCRIPT API</div>
                            <div class="fixed-area label-fixed">More functions</div>
                            <h2>More functions</h2>
                            <p>List of various functions that perform different tasks.</p>
                            <hr />
                            <h2 id="translate">SBF.translate()</h2>
                            <p>
                                Translate a string to the active user language.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>string</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to translate.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Returns the translated string if available, otherwise the original string.
                                </li>
                                <li>
                                    This function works only for the front-end translations.
                                </li>
                                <li>
                                    For more details about the active language check the
                                    <a href="../#multilingual" target="_blank">translations docs</a>.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="activeUser">SBF.activeUser()</h2>
                            <p>
                                Returns the active user as a
                                <b>SBUser</b> object, return
                                <b>false</b> if the active user is not found.
                            </p>
                            <hr class="space-sm" />
                            <h4>Active user JSON representation</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "details": {
                                        "id": "914",
                                        "profile_image": "https://alz-bot.com/user.svg",
                                        "first_name": "User",
                                        "last_name": "#23262",
                                        "email": null,
                                        "user_type": "visitor",
                                        "token": "bc308e274473fb685a729abe8a4bf82d3c49cd2f"
                                    },
                                    "extra": {},
                                    "conversations": []
                                }
                            </pre>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    For the user' methods and more details see the
                                    <a href="#objects" class="scroll-to">SBUser</a> documentation.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="getActiveUser">SBF.getActiveUser()</h2>
                            <p>
                                Activate the logged-in user and returns the user details.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>db</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to verify that the user exists in the database.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "id": "914",
                                    "profile_image": "https://alz-bot.com/user.svg",
                                    "first_name": "Don",
                                    "last_name": "John",
                                    "email": "hello@example.com",
                                    "user_type": "user",
                                    "token": "bc308e274473fb685a729abe8a4bf82d3c49cd2f"
                                }
                            </pre>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    For the user' methods and more details see the
                                    <a href="#objects" class="scroll-to">SBUser</a> documentation.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="cors">SBF.cors()</h2>
                            <p>
                                Execute an HTTP POST or GET request to a URL and returns the response.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>method</pre>
                                        </td>
                                        <td>
                                            Insert
                                            <b>POST</b> or
                                            <b>GET</b>. Default: GET.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>url</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Enter the full URL of the request.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="null">SBF.null()</h2>
                            <p>
                                Check if an existing variable is null or empty.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>variable</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The variable to check.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Return
                                    <b>true</b> if the variable is an empty string, null, 'null', undefined.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="deactivateAll">SBF.deactivateAll()</h2>
                            <p>
                                Hide all the pop-ups and the windows. This function is used mostly in the admin area.
                            </p>
                            <hr />
                            <h2 id="getURL">SBF.getURL()</h2>
                            <p>
                                Search for a parameter in the URL and returns its value or returns an array with all parameters.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The parameter to search. Return
                                            <b>false</b> if the parameter is not found. If the parameter name is not provided an array with all parameters is returned instead. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>url</pre>
                                        </td>
                                        <td>
                                            The URL from which extract the parameters. Default: current URL.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="restoreJson">SBF.restoreJson()</h2>
                            <p>
                                Convert a JSON encoded string into a normal text.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to convert.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="stringToSlug">SBF.stringToSlug()</h2>
                            <p>
                                Convert a string to a slug by removing all special chars, by replacing all spaces with the char
                                <b>-</b>, and by making the string lowercase.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to convert.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Use the function
                                    <b>slugToString(slug)</b> to convert back a slug to a string.
                                </li>
                            </ul>
                            <hr />
                            <h2 id="stringToSlug">SBF.settingsStringToArray()</h2>
                            <p>
                                Convert a string to an array of values. String format:
                                <b>name:value,name:value,...</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to convert.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "name": "value",
                                    "name": "value",
                                    ...
                                }
                            </pre>
                            <hr />
                            <h2 id="random">SBF.random()</h2>
                            <p>
                                Returns a random alphanumeric string.
                            </p>
                            <hr />
                            <h2 id="isAgent">SBF.isAgent()</h2>
                            <p>
                                Check if a user type is an agent. Return
                                <b>true</b> only if the user type is
                                <b>agent</b>,
                                <b>admin</b>, or
                                <b>bot</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_type</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The user type string to check.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="error">SBF.error()</h2>
                            <p>
                                Trigger the custom JavaScript error of Alz-Bot.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            String with the error message or a
                                            <b>Error</b> object.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="errorValidation">SBF.errorValidation()</h2>
                            <p>
                                Check if a response from an AJAX call is a validation error.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>response</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The response from the AJAX call.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="login">SBF.login()</h2>
                            <p>
                                Login a user or an agent. The login can be completed in two ways: via email and password, or via user ID and token.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                        </td>
                                        <td>
                                            The email of the user to login. If this attribute is set you need to set also the password. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>password</pre>
                                        </td>
                                        <td>
                                            The password of the user to login. If this attribute is set you need to set also the email. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user to login. If this attribute is set you need to set also the token. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                        </td>
                                        <td>
                                            The token of the user to login. If this attribute is set you need to set also the user ID.
                                            You can get the token from the
                                            <b>Users</b> area by opening the profile box of a user, only if you're an admin. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "id": "913",
                                        "profile_image": "https://alz-bot.com/user.svg",
                                        "first_name": "Don",
                                        "last_name": "John",
                                        "email": "support@alz-bot.com",
                                        "user_type": "user",
                                        "token": "9b25351047ee758aa97ee4868d130cc1ceb8decf"
                                    },
                                    "YXNkWGNSeTdtRTdDYVkxVG8wckN4YWF6V2s0Tk1mczBSVHdQbHBpOWdmejVUTTdOUUxEUENhdUVoYmROWn..."
                                ]
                            </pre>
                            <p>
                                Return
                                <b>false</b> if login is unsuccessful.
                            </p>
                            <hr />
                            <h2 id="logout">SBF.logout()</h2>
                            <p>
                                Logout the logged-in user and reload the page.
                            </p>
                            <hr />
                            <h2 id="loginCookie">SBF.loginCookie()</h2>
                            <p>
                                Create or update the login cookie.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                        </td>
                                        <td>
                                            The encrypted login string.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="reset">SBF.reset()</h2>
                            <p>
                                Logout the logged-in user, remove all Alz-Bot stored data, and reload the page.
                            </p>
                            <hr />
                            <h2 id="lightbox">SBF.lightbox()</h2>
                            <p>
                                Display the given content in a lightbox.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>content</pre>
                                        </td>
                                        <td>
                                            The content to display. It can be any HTML content, to display an image use the code
                                            <b>&lt;img src="image.jpg" ></b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="storage">SBF.storage()</h2>
                            <p>
                                Manage the local storage of Alz-Bot. The local storage is a technology that saves any data in the browser, permanently.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>key</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the value to set or retrieve.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                        </td>
                                        <td>
                                            The value to save. If not set the function returns the value of the given key.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="storage">SBF.storageTime()</h2>
                            <p>
                                Save a key and the current date and time in the local storage to check in the future if it's within the given number of hours or if it's expired.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>key</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The key to save or check.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>hours</pre>
                                        </td>
                                        <td>
                                            The number of hours to compare to the saved date and time.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                If the
                                <b>hours</b> attribute is set, return
                                <b>true</b> if the sum of saved date and time and the given hours is less than the current date and time, otherwise, return
                                <b>false</b>. Example: if the saved time is 5:00 pm, and you insert 3, the function will return
                                <b>true</b> only if the current time is 8:01 pm or more.
                                <b>true</b>
                            </p>
                            <hr />
                            <h2 id="setting">SBF.setting()</h2>
                            <p>
                                Returns the value of a setting.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Available settings</h4>
                            <p>
                                Some of the available settings and the values are in the list below.
                            </p>
                            <pre class="prettyprint lang-json">
                                {
                                    "registration-required": "",
                                    "registration-timetable": false,
                                    "registration-offline": false,
                                    "registration-link": "",
                                    "visitors-registration": false,
                                    "privacy": false,
                                    "popup": true,
                                    "popup-mobile-hidden": true,
                                    "welcome": false,
                                    "welcome-trigger": "open",
                                    "welcome-delay": 0,
                                    "follow": false,
                                    "follow-delay": "1000",
                                    "chat-manual-init": false,
                                    "chat-login-init": false,
                                    "sound": ["code": "n", "volume": 0.5, "repeat": 5],
                                    "header-name": true,
                                    "desktop-notifications": "all",
                                    "flash-notifications": "all",
                                    "push-notifications": true,
                                    "notifications-icon": "",
                                    "bot-id": "377",
                                    "bot-name": "Bruce Peterson",
                                    "bot-image": "",
                                    "bot-delay": 0,
                                    "bot-office-hours": false,
                                    "dialogflow-active": true,
                                    "dialogflow-human-takeover": false,
                                    "slack-active": false,
                                    "rich-messages": [
                                        "email",
                                        "registration",
                                        "login",
                                        "timetable",
                                        "articles",
                                        "immagine",
                                        "video"
                                    ],
                                    "display-users-thumb": true,
                                    "hide-agents-thumb": true,
                                    "notify-user-email": true,
                                    "notify-agent-email": false,
                                    "translations": false,
                                    "auto-open": false,
                                    "office-hours": true,
                                    "disable-office-hours": false,
                                    "disable-offline": false,
                                    "timetable": false,
                                    "timetable-hide": [
                                        false,
                                        "checkbox"
                                    ],
                                    "articles": true,
                                    "articles-title": "",
                                    "init-dashboard": false,
                                    "wp": false,
                                    "wp-users-system": "sb",
                                    "queue": false,
                                    "queue-message": "",
                                    "queue-message-success": "",
                                    "queue-response-time": "",
                                    "routing": false,
                                    "webhooks": true,
                                    "agents-online": false,
                                    "timetable-message": "",
                                    "tickets-registration-required": true,
                                    "tickets-registration-redirect": "",
                                    "tickets-default-form": "login",
                                    ...
                                }
                            </pre>
                            <hr />
                            <h2 id="shortcode">SBF.shortcode()</h2>
                            <p>
                                Convert a shortcode into an array containing the shortcode name and the shortcode settings.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>shortcode</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The shortcode string. Example:
                                            <b>[rating title="Rate your conversation" message="Tell us your experience." success="Thank you!"]</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    "rating",
                                    {
                                        "title": "Rate your conversation",
                                        "message": "Tell us your experience.",
                                        "success": "Thank you!"
                                    }
                                ]
                            </pre>
                            <hr />
                            <h2 id="openWindow">SBF.openWindow()</h2>
                            <p>
                                Open a web page in a new window.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>link</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The link to open.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>width</pre>
                                        </td>
                                        <td>
                                            The window width in px.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>height</pre>
                                        </td>
                                        <td>
                                            The window height in px.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="loadResource">SBF.loadResource()</h2>
                            <p>
                                Include a .js or .css file in the &lt;head&lt; area of the page.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>url</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The URL of the file to load.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>script</pre>
                                        </td>
                                        <td>
                                            Set to to true for .js files. Default: .css files.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="debounce">SBF.debounce()</h2>
                            <p>
                                Execute the given function only once in a given period, delay milliseconds after its last invocation, the timer is reset on every call.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>bounceFunction</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function() { ... }</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            Insert a random, unique string never used by other debounce instances. The strings #1, #2, #3, #4, ... are reserved and can't be used.'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>interval</pre>
                                        </td>
                                        <td>
                                            The minimum time gap in milliseconds between the new execution and the previous one. Default: 500.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="translate">SBF.translate()</h2>
                            <p>
                                Translate a string using the Alz-Bot translations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>string</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to translate.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="escape">SBF.escape()</h2>
                            <p>
                                Escape a string.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>string</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to escape.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="convertUTCDateToLocalDate">SBF.convertUTCDateToLocalDate()</h2>
                            <p>
                                Convert a date to local time.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The date and time string. Format: Y/m/d H:i:s.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>UTCoffset</pre>
                                        </td>
                                        <td>
                                            An UTC offset. Default: 0.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>Mon Jan 30 2023 10:45:00 GMT+0000 (Greenwich Mean Time)</pre>
                            <hr />
                            <h2 id="getLocationTimeString">SBF.getLocationTimeString()</h2>
                            <p>
                                Returns a string containing the location and current local time of the given timezone.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>details</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array with the location details. Example:
                                            <b>{ "timezone" : "", "country" : "", "city" : "" }</b>.
                                            This function accepts the
                                            <b>extra</b> method of any
                                            <b>SBUser</b> object. Example:
                                            <b>SBF.getLocationTimeString(activeUser().extra, function(){})</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>onSuccess</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Function to execute when the function completes. Syntax:
                                            <b>function(response) { ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>05:15 AM in London, United Kingdom</pre>
                            <hr />
                            <h2 id="beautifyTime">SBF.beautifyTime()</h2>
                            <p>
                                Convert a date to the local format and perform other optimizations to make the date more friendly.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>date</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Date and time in the following format: YYYY-MM-DD HH:MM:SS.
                                            Ex. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extended</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to include minutes and seconds. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>future</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> the date is a future date. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>&lt;span>30/01/2023&lt;/span></pre>
                            <hr />
                            <h2 id="dateDB">SBF.dateDB()</h2>
                            <p>
                                Convert a date format to the date format of the database and set the UTC to +0.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>date</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Date and time in the following format: YYYY-MM-DD HH:MM:SS.
                                            Ex. 2020-05-13 13:35:59. You can remove the time and leave only the date.
                                            Insert
                                            <b>now</b> to get the current date and time.
                                            The dates stored in the database are in UTC+0.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="UTC">SBF.UTC()</h2>
                            <p>
                                Returns the specified date and time in unix format using the UTC offset set in <b>Settings > Miscellaneous > UTC offset</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The date and time string.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>1675075500000</pre>
                            <hr />
                            <h2 id="unix">SBF.unix()</h2>
                            <p>
                                Get the unix timestamp value of a date and time string with format yyyy-mm-dd hh:mm:ss.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The date and time string.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>1675075500000</pre>
                        </div>
                        <hr class="space-lg" />
                        <div id="events">
                            <div class="label label-docs">JAVASCRIPT API</div>
                            <div class="fixed-area label-fixed">Events</div>
                            <h2>Events</h2>
                            <p>Events lets you intercept Alz-Bot actions in real-time and execute a custom JavaScript code when an action is triggered.</p>
                            <h4>Usage</h4>
                            <p>
                                Use the code below and replace
                                <b>EVENT-NAME</b> with the event name. The
                                <b>response</b> represents the returned value if there is only one attribute, otherwise, it's an array of values.
                                <b>JQuery</b> is required.
                            </p>
                            <pre class="prettyprint">
                                $(document).on("EVENT-NAME", function (e, response) {
                                    // Insert your code here
                                });
                            </pre>
                            <p>Example:</p>
                            <pre class="prettyprint">
                                $(document).on("SBMessageSent", function (e, response) {
                                    console.log(response["user_id"]);
                                    console.log(response["conversation_id"]);
                                    console.log(response["message"]);
                                });
                            </pre>
                            <hr />
                            <h2 id="SBReady">SBReady</h2>
                            <p>
                                Event fired on page load after the chat' script
                                <b>main.js</b> has been loaded. This event is fired also in the admin area.
                            </p>
                            <hr />
                            <h2 id="SBInit">SBInit</h2>
                            <p>
                                Event fired on page load when the chat has completed the initialization.
                            </p>
                            <hr />
                            <h2 id="SBTicketsInit">SBTicketsInit</h2>
                            <p>
                                Event fired on page load when the tickets area has completed the initialization. This event is available only when the Tickets App is active.
                            </p>
                            <hr />
                            <h2 id="SBLogout">SBLogout</h2>
                            <p>
                                Event fired when the active user logout.
                            </p>
                            <hr />
                            <h2 id="SBError">SBError</h2>
                            <p>
                                Event fired when a Alz-Bot error occurs.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The error message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function_name</pre>
                                        </td>
                                        <td>
                                            The function name that has generated the error.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBDoubleLoginError">SBDoubleLoginError</h2>
                            <p>
                                Event fired on chat initialization if an agent or an admin is already logged-in.
                            </p>
                            <hr />
                            <h2 id="SBUserDeleted">SBUserDeleted</h2>
                            <p>
                                Event fired when a user is deleted.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The ID of the user that has been deleted.</pre>
                            <hr />
                            <h2 id="SBMessageSent">SBMessageSent</h2>
                            <p>
                                Event fired when a new message has been sent.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user that sent the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user</pre>
                                        </td>
                                        <td>
                                            The user object.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of the conversation linked to the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_status</pre>
                                        </td>
                                        <td>
                                            The status code of the conversation linked to the message.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message_id</pre>
                                        </td>
                                        <td>
                                            The ID of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The text of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            The attachments of the message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBBotMessage">SBBotMessage</h2>
                            <p>
                                Event fired when the Dialogflow bot reply to a message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>response</pre>
                                        </td>
                                        <td>
                                            The response array in
                                            <b>JSON</b> format from Dialogflow.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The input message of the user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBSlackMessageSent">SBSlackMessageSent</h2>
                            <p>
                                Event fired when a message is sent to Slack.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The text of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of the conversation linked to the message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBEmailSent">SBEmailSent</h2>
                            <p>
                                Event fired when a notification email is sent to a user or an agent.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>recipent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user that will receive the email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message of the email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            The attachments of the email.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBNotificationsUpdate">SBNotificationsUpdate</h2>
                            <p>
                                Event fired when the red notification counter of the chat button that alerts the user of new messages and conversations is updated.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                        </td>
                                        <td>
                                            The action value can be
                                            <b>add</b> if the counter is increased by 1, or
                                            <b>remove</b> it the counter is decreased by 1.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The action value can be
                                            <b>add</b> if the counter is increased by 1, or
                                            <b>remove</b> it the counter is decreased by 1.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBConversationOpen">SBConversationOpen</h2>
                            <p>
                                Event fired when a conversation is fully loaded and it's opened in the chat.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>response</pre>
                                        </td>
                                        <td>
                                            The conversation as a
                                            <b>SBConversation</b> object.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBNewMessagesReceived">SBNewMessagesReceived</h2>
                            <p>
                                Event fired when there are new messages in the active conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The list of the new messages. Each message is a SBMessage object.</pre>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>response</pre>
                                        </td>
                                        <td>
                                            The single message as a
                                            <b>SBMessage</b> or an array of
                                            <b>SBMessage</b> objects.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBMessageDeleted">SBMessageDeleted</h2>
                            <p>
                                Event fired when a message is deleted.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The ID of the message that has been deleted.</pre>
                            <hr />
                            <h2 id="SBNewConversationReceived">SBNewConversationReceived</h2>
                            <p>
                                Event fired when a new conversation is received.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The new conversation as a SBConversation object.</pre>
                            <hr />
                            <h2 id="SBNewConversationCreated">SBNewConversationCreated</h2>
                            <p>
                                Event fired when a new conversation is created.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The new conversation as a SBConversation object.</pre>
                            <hr />
                            <h2 id="SBActiveConversationChanged">SBActiveConversationChanged</h2>
                            <p>
                                Event fired when the active conversation is changed.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The new active conversation as a SBConversation object.</pre>
                            <hr />
                            <h2 id="SBActiveConversationStatusUpdated">SBActiveConversationStatusUpdated</h2>
                            <p>
                                Event fired when the active conversation status code is updated.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of the conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>status_code</pre>
                                        </td>
                                        <td>
                                            The new status code of the conversation. Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBChatOpen">SBChatOpen</h2>
                            <p>
                                Event fired when the chat is opened.
                            </p>
                            <hr />
                            <h2 id="SBChatClose">SBChatClose</h2>
                            <p>
                                Event fired when the chat is closed.
                            </p>
                            <hr />
                            <h2 id="SBQueueUpdate">SBQueueUpdate</h2>
                            <p>
                                Event fired when the queue is started and each time the queue is updated.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The position of the user in the queue. If the position is 0 the queue is ended and the user can start the chat.</pre>
                            <hr />
                            <h2 id="SBBusy">SBBusy</h2>
                            <p>
                                Event fired when the busy status of the chat changes. The chat is busy if it's operating, like sending a message.
                                When the chat is busy some functions can not be fired, like sending a new message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                <b>true</b> if the chat is busy, otherwise
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="SBDashboard">SBDashboard</h2>
                            <p>
                                Event fired when the dashboard is displayed.
                            </p>
                            <hr />
                            <h2 id="SBDashboardClosed">SBDashboardClosed</h2>
                            <p>
                                Event fired when the dashboard is closed and a conversation is displayed instead.
                            </p>
                            <hr />
                            <h2 id="SBTyping">SBTyping</h2>
                            <p>
                                Event fired when a user or an agent is typing in the editor.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                <b>true</b> if the user or agent is typing, otherwise
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="SBArticles">SBArticles</h2>
                            <p>
                                Event fired when the articles panel is displayed or when a single article is opened.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The ID of the article. This value is
                                            <b>-1</b> if the articles panel is displayed.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>articles</pre>
                                        </td>
                                        <td>
                                            It can be the array with the single article details or the array with the list of all the articles.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBPrivacy">SBPrivacy</h2>
                            <p>
                                Event fired on chat initialization if the privacy form is displayed.
                            </p>
                            <hr />
                            <h2 id="SBPopup">SBPopup</h2>
                            <p>
                                Event fired when a pop-up message is displayed.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                The array with the contents of the pop-up:
                                <b>{ image: "", title: "", message: "" }</b>.
                            </p>
                            <hr />
                            <h2 id="SBFollowUp">SBFollowUp</h2>
                            <p>
                                Event fired when the follow-up message is sent.
                            </p>
                            <hr />
                            <h2 id="SBWelcomeMessage">SBWelcomeMessage</h2>
                            <p>
                                Event fired when the welcome message is sent.
                            </p>
                            <hr />
                            <h2 id="SBLoginForm">SBLoginForm</h2>
                            <p>
                                Event fired when the user login successfully from the login form of the chat. This event is fired only if the login is successful.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>The user as a SBUser object.</pre>
                            <hr />
                            <h2 id="SBRegistrationForm">SBRegistrationForm</h2>
                            <p>
                                Event fired when the user registers successfully from the registration form of the chat. This event is fired only if the registration is successful.
                                This event is fired also if the registration is updated via the Rich Message form.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user</pre>
                                        </td>
                                        <td>
                                            Array with the user details.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            Array with the additional user details.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBRichMessageSubmit">SBRichMessageSubmit</h2>
                            <p>
                                Event fired when the response from a Rich Message is received.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>result</pre>
                                        </td>
                                        <td>
                                            The response of the Rich Message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>data</pre>
                                        </td>
                                        <td>
                                            The Rich Message details and the data sent by the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The ID of the Rich Message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBAttachments">SBAttachments</h2>
                            <p>
                                Event fired when the user attaches a file.
                            </p>
                            <hr />
                            <h2 id="SBNewEmailAddress">SBNewEmailAddress</h2>
                            <p>
                                Event fired when a user register his email via the follow-up message or registration form.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The full name of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                        </td>
                                        <td>
                                            The email of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>ID</pre>
                                        </td>
                                        <td>
                                            The ID of the rich message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBPanelActive">SBPanelActive</h2>
                            <p>
                                Event fired when a panel of the Tickets area is opened. This event is available only when the Tickets App is active.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The name of the active panel. Values:
                                            <b>new-ticket</b>,
                                            <b>privacy</b>,
                                            <b>articles</b>,
                                            <b>edit-profile</b>,
                                            <b>login</b>,
                                            <b>registration</b>. If the value is empty the main conversation area is active.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                        </td>
                                        <td>
                                            The email of the user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBWoocommerceCartUpdated">SBWoocommerceCartUpdated</h2>
                            <p>
                                Event fired when the chat add a product to the WordPress WooCommerce cart. In most cases, this event is fired by the Dialogflow chatbot.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                        </td>
                                        <td>
                                            <b>cart-add</b> or
                                            <b>cart-remove</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product</pre>
                                        </td>
                                        <td>
                                            The product name or ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBBotPayload">SBBotPayload</h2>
                            <p>
                                Event fired when a Dialogflow message contains a Alz-Bot Payload. Payload examples:
                                <b>human-takeover</b>,
                                <b>redirect</b>,
                                <b>woocommerce-update-cart</b>,
                                <b>woocommerce-checkout</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>The payload name.</p>
                            <hr />
                            <h2 id="SBBotAction">SBBotAction</h2>
                            <p>
                                Event fired when a Dialogflow message contains a Dialogflow action. Currently only the action
                                <b>end</b> (End conversation) is available.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>The action name.</p>
                            <hr />
                            <h2 id="SBSMSSent">SBSMSSent</h2>
                            <p>
                                Event fired when a text message notification is sent to a user or an agent.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>recipent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user that will receive the text message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message of the text message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>response</pre>
                                        </td>
                                        <td>
                                            The Twilio response.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="SBActiveUserLoaded">SBActiveUserLoaded</h2>
                            <p>
                                Event fired when a the active user has been loaded.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>recipent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user that will receive the text message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message of the text message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>response</pre>
                                        </td>
                                        <td>
                                            The Twilio response.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="space-lg" />
                        <div id="miscellaneous">
                            <div class="label label-docs">MISCELLANEOUS</div>
                            <div class="fixed-area label-fixed">AJAX</div>
                            <h2 id="ajax">AJAX functions</h2>
                            <p>List of AJAX functions. The AJAX functions are similar to the WEB API, they use the same function name, the same parameters, and returns the same responses. Use the function below to start an AJAX call:</p>
                            <pre class="prettyprint">
                                SBF.ajax({
                                    function: 'FUNCTION-NAME',
                                    parameter: value,
                                    parameter: value,
                                    ...
                                }, (response) => {

                                   // Insert your code here

                                });
                            </pre>
                            <p>
                                Replace
                                <b>FUNCTION-NAME</b> with the name of one of the functions below. Replace the list of
                                <b>parameter: value</b> with the parameters of the function.
                            </p>
                            <p>
                                Parameters and responses are the same as the WEB API. The response is in
                                <b>JSON</b> format.
                            </p>
                            <b class="warning">Warning! Do not include the token in the parameters. The token must be kept always secret.</b>
                            <hr class="space-sm" />
                            <h4 id="ajax-functions">Functions</h4>
                            <hr class="space-sm" />
                            <table class="table table-border docs-table ajax-table">
                                <thead>
                                    <tr>
                                        <th>Function name</th>
                                        <th>Requirements</th>
                                        <th>Parameters and response</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>saved-replies</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#saved-replies" class="btn-text">Saved replies</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-settings</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-settings" class="btn-text">Get settings</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>save-settings</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#save-settings" class="btn-text">Save settings</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>is-online</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#is-online" class="btn-text">Is online</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>add-user</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    The main user details attributes must be inserted into the attribute <b>settings</b> as an array, the attributes <b>extra</b> becomes <b>extra_settings</b>. Each attribute value must be enclosed in an array.
                                                    Example:<pre class="prettyprint">SBF.ajax({ function: "update-user", user_id: SBF.activeUser().id, settings: { first_name: ["Jack"], email: ["example@email.com"] }, settings_extra: { phone: ["+123456789"] }});</pre>
                                                </li>
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#add-user" class="btn-text">Add user</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>add-user-and-login</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#add-user" class="btn-text">Add user</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-user</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only with the active user ID.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-user" class="btn-text">Get user</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-users" class="btn-text">Get users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-new-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-new-users" class="btn-text">Get new users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-user-extra</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-user-extra" class="btn-text">Get user extra</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-user-language</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-user-language" class="btn-text">Get user language</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-online-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-online-users" class="btn-text">Get online users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-user-from-conversation</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-user-from-conversation" class="btn-text">Get user from conversation</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agents-online</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#agents-online" class="btn-text">Agents online</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#search-users" class="btn-text">Search users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>delete-user</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#delete-user" class="btn-text">Delete user</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>delete-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#delete-users" class="btn-text">Delete users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-user</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    The main user details attributes must be inserted into the attribute <b>settings</b> as an array, the attributes <b>extra</b> becomes <b>extra_settings</b>. Each attribute value must be enclosed in an array.
                                                    Example:<pre class="prettyprint">SBF.ajax({ function: "update-user", user_id: SBF.activeUser().id, settings: { first_name: ["Jack"], email: ["example@email.com"] }, settings_extra: { phone: ["+123456789"] }});</pre>
                                                </li>
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update-user" class="btn-text">Update user</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-user-to-lead</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update-user-to-lead" class="btn-text">Update user to lead</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>count-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#count-users" class="btn-text">Count users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-conversations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                                <li>
                                                    Include the argument
                                                    <b>routing</b> with value
                                                    <b>true</b> if the
                                                    <b>queue</b> or
                                                    <b>routing</b> is active in
                                                    <b>Settings > Miscellaneous</b>.
                                                    Include it as the last argument. Default: false.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-conversations" class="btn-text">Get conversations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-new-conversations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                                <li>
                                                    Include the argument
                                                    <b>queue</b> with value
                                                    <b>true</b> if the
                                                    <b>queue</b> or
                                                    <b>routing</b> is active in
                                                    <b>Settings > Miscellaneous</b>.
                                                    Include it as the last argument. Default: false.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-new-conversations" class="btn-text">Get new conversations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-conversation</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user conversations.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for the conversations of any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-conversation" class="btn-text">Get conversation</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-user-conversations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-user-conversations" class="btn-text">Get user conversations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-new-user-conversations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-new-user-conversations" class="btn-text">Get new user conversations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search-conversations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#search-conversations" class="btn-text">Search conversations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search-user-conversations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                                <li>
                                                    The argument
                                                    <b>user_id</b> is not required. Default: active user ID.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#search-user-conversations" class="btn-text">Search user conversations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>new-conversation</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#new-conversation" class="btn-text">new-conversation</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-conversation-status</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#update-conversation-status" class="btn-text">Update conversation status</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-conversation-department</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the conversations of the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any conversation.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update-conversation-department" class="btn-text">Update department</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-conversation-agent</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the conversations of the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any conversation.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update-conversation-agent" class="btn-text">Update agent</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-new-messages</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-new-messages" class="btn-text">Get new messages</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>send-message</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#send-message" class="btn-text">Send message</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>send-email</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the email can be sent only to
                                                    <b>agents</b> or
                                                    <b>admins</b>.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the email can be sent to any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#send-email" class="btn-text">Send email</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>send-slack-message</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#send-slack-message" class="btn-text">Send Slack message</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-message</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user messages.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user message.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update-message" class="btn-text">Update message</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-messages-status</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user messages.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user message.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update-messages-status" class="btn-text">Update messages status</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>delete-message</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user messages.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user message.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#delete-message" class="btn-text">Delete message</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>slack-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#slack-users" class="btn-text">Slack users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>archive-slack-channels</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#archive-slack-channels" class="btn-text">Archive Slack channels</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>slack-channels</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#slack-channels" class="btn-text">Slack channels</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>current-url</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#current-url" class="btn-text">Current URL</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>set-rating</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the conversations of the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for the conversations of any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#set-rating" class="btn-text">Set rating</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-rating</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-rating" class="btn-text">Get rating</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-articles</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#get-articles" class="btn-text">Get articles</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>save-articles</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#save-articles" class="btn-text">Save articles</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search-articles</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#search-articles" class="btn-text">Search articles</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-articles-categories</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-articles-categories" class="btn-text">Get articles categories</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>save-articles-categories</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#save-articles-categories" class="btn-text">Save articles categories</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>article-ratings</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#article-ratings" class="btn-text">Article ratings</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-versions</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#get-versions" class="btn-text">Get versions</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update" class="btn-text">Update</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>app-get-key</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#app-get-key" class="btn-text">App get key</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>app-activation</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#app-activation" class="btn-text">App activation</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>csv-users</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#csv-users" class="btn-text">Csv users</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>transcript</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the conversations of the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for the conversations of any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#transcript" class="btn-text">Transcript</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>is-agent-typing</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#is-agent-typing" class="btn-text">Is agent typing</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-message</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    The function works only for the active user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#send-bot-message" class="btn-text">Send bot message</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-get-intents</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-get-intents" class="btn-text">Dialogflow get Intents</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-create-intent</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-create-intent" class="btn-text">Dialogflow create Intent</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-update-intent</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-update-intent" class="btn-text">Dialogflow update Intent</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-entity</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-entity" class="btn-text">Dialogflow Entity</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-get-entity</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-get-entity" class="btn-text">Dialogflow get Entity</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-get-token</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#dialogflow-get-token" class="btn-text">Dialogflow get token</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-get-agent</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-get-agent" class="btn-text">Dialogflow get agent</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-set-active-context</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-set-active-context" class="btn-text">Dialogflow set active context</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-curl</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-curl" class="btn-text">Dialogflow curl</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-human-takeover</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-human-takeover" class="btn-text">Dialogflow human takeover</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow-smart-reply</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#dialogflow-smart-reply" class="btn-text">Dialogflow smart reply</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>cron-jobs</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#cron-jobs" class="btn-text">Cron jobs</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-customer</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-customer" class="btn-text">Woocommerce get customer</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-user-orders</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-user-orders" class="btn-text">Woocommerce get user orders</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-order</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-order" class="btn-text">Woocommerce get order</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-product</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-product" class="btn-text">Woocommerce get product</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-products</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-products" class="btn-text">Woocommerce get products</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-search-products</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-search-products" class="btn-text">Woocommerce search products</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-taxonomies</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-taxonomies" class="btn-text">Woocommerce get taxonomies</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-attributes</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-attributes" class="btn-text">Woocommerce get attributes</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-product-id-by-name</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-product-id-by-name" class="btn-text">Woocommerce get product ID by name</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-product-images</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-product-images" class="btn-text">Woocommerce get product images</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-product-taxonomies</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-product-taxonomies" class="btn-text">Woocommerce get product taxonomies</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-attribute-by-term</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-attribute-by-term" class="btn-text">Woocommerce get attribute by term</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-attribute-by-name</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-attribute-by-name" class="btn-text">Woocommerce get attribute by name</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-is-in-stock</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-is-in-stock" class="btn-text">Woocommerce is in stock</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-coupon</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-coupon" class="btn-text">Woocommerce coupon</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-coupon-check</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-coupon-check" class="btn-text">Woocommerce coupon check</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-coupon-delete-expired</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-coupon-delete-expired" class="btn-text">Woocommerce coupon delete expired</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-url</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-url" class="btn-text">Woocommerce get URL</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-session</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-session" class="btn-text">Woocommerce get sesssion</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-get-session-key</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-get-session-key" class="btn-text">Woocommerce get session key</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-payment-methods</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-payment-methods" class="btn-text">Woocommerce payment methods</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>woocommerce-shipping-locations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#woocommerce-shipping-locations" class="btn-text">Woocommerce shipping locations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>chat-css</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#chat-css" class="btn-text">Css</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-avatar</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-avatar" class="btn-text">Get avatar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-agents-ids</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-avatar" class="btn-text">Get avatar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-users-with-details</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-users-with-details" class="btn-text">Get users with details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>send-custom-email</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#send-custom-email" class="btn-text">Send custom email</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>send-sms</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any user.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#send-sms" class="btn-text">Send sms</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>email-piping</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#email-piping" class="btn-text">Email piping</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-notes</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-notes" class="btn-text">Get notes</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>add-note</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#add-note" class="btn-text">Add note</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>delete-note</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#delete-note" class="btn-text">Delete note</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automations-get</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#automations-get" class="btn-text">Automations get</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automations-save</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#automations-save" class="btn-text">Automations save</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automations-validate</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#automations-validate" class="btn-text">Aautomations validate</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automations-run-all</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#automations-run-all" class="btn-text">Automations run all</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automations-run</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#automations-run" class="btn-text">Automations run</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-agents-in-conversation</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for conversations of the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any conversation.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#get-agents-in-conversation" class="btn-text">Get agents in conversation</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-departments</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#get-departments" class="btn-text">Get departments</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>login</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#login" class="btn-text">Login</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>logout</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#logout" class="btn-text">Logout</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>update-login</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for conversations of the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any conversation.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#update-login" class="btn-text">Update login</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>is-typing</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#is-typing" class="btn-text">Is typing</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>set-typing</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#set-typing" class="btn-text">Set typing</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>clean-data</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b> or an
                                                    <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#clean-data" class="btn-text">Clean data</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-translation</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#get-translation" class="btn-text">get-translation</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>get-translations</pre>
                                        </td>
                                        <td></td>
                                        <td>
                                            <a href="web#get-translations" class="btn-text">get-translations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>save-translations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#save-translations" class="btn-text">save-translations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>delete-leads</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. This is an admin function and it works only if the active user is an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#delete-leads" class="btn-text">Delete leads</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>reports</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. This is an admin function and it works only if the active user is an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#reports" class="btn-text">Reports</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>reports-update</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. This is an admin function and it works only if the active user is an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#reports-update" class="btn-text">Reports update</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>direct-message</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#direct-message" class="btn-text">Direct message</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>count-conversations</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>agent</b> or an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#count-conversations" class="btn-text">Count conversations</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>updates-available</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an
                                                    <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#updates-available" class="btn-text">Updates available</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>google-translate</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an <b>admin</b> or an <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#google-translate" class="btn-text">Google translate</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>google-language-detection-update-user</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    If the active user is a
                                                    <b>user</b> the function works only for conversations of the active user.
                                                    If the active user is an
                                                    <b>agent</b> or an
                                                    <b>admin</b> the function works for any conversation.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#google-language-detection-update-user" class="btn-text">Google translate detection update user</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>export-settings</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#export-settings" class="btn-text">Export settings</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>import-settings</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an <b>admin</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#import-settings" class="btn-text">Import settings</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>check-conversations-assignment</pre>
                                        </td>
                                        <td>
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <b>Admin function</b>. The active user must be an <b>admin</b> or an <b>agent</b>.
                                                </li>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="web#check-conversations-assignment" class="btn-text">Check conversations assignment</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-lg" />
                            <h2 id="ajax-only">More AJAX functions</h2>
                            <p>
                                The functions below are available only via AJAX.
                            </p>
                            <h2 id="close-message">close-message</h2>
                            <p>
                                Send the close message to a conversation. You can set the close message in the
                                <b>Settings > Chat</b> area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Requirements</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    This is an admin function and it works only if the active user is an
                                    <b>agent</b>.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>close-message</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>bot_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the bot. Use the function
                                            <b>SBF.setting("bot-id")</b> to get the ID of the bot. If you're in the admin area use instead
                                            <b>SB_ADMIN_SETTINGS['bot-id']</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation to which send the message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": {
                                        "status": "success",
                                        "message-id": 123456,
                                        "queue": false
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="update-user-and-message">update-user-and-message</h2>
                            <p>
                                Update the user details of a user and the content of a message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Requirements</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    If the active user is a
                                    <b>user</b> only the active user can be updated and only the messages linked to the conversations of the user can be updated.
                                    If the active user is an
                                    <b>agent</b> or an
                                    <b>admin</b> the function works for any user and any message.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-user-and-message</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user to update.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                        </td>
                                        <td>
                                            Array with the user details. Array syntax and values:
                                            <b>{ first_name: [""], last_name: [""], profile_image: [""], email: [""], user_type: [""] }</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings_extra</pre>
                                        </td>
                                        <td>
                                            Array with additional user details in
                                            <b>JSON</b> format.
                                            <hr class="space-xs" />
                                            Array syntax:
                                            <pre>{ "ID": ["value", "Name"], "ID": ["value", "Name"], ...}</pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message_id</pre>
                                        </td>
                                        <td>
                                            The ID of the message to update.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The message text.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            Associative array containing extra data. Example:
                                            <b>{"rich-messages":{"123":{"type":"buttons","result":"Premium Plan"}}}</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">true</pre>
                            <hr />
                            <h2 id="get-agent">get-agent</h2>
                            <p>
                                Returns the details of an agent, admin, or bot.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the agent.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "id": "2",
                                    "first_name": "Don",
                                    "last_name": "John",
                                    "department": null,
                                    "flag": "gb.png",
                                    "country_code": "GB",
                                    "details": [
                                        {
                                            "slug": "city",
                                            "name": "City",
                                            "value": "London"
                                        },
                                        {
                                            "slug": "country",
                                            "name": "Country",
                                            "value": "United Kingdom"
                                        },
                                        {
                                            "slug": "sport",
                                            "name": "Sport",
                                            "value": "email@example.com"
                                        },
                                        {
                                            "slug": "timezone",
                                            "name": "Timezone",
                                            "value": "Europe/London"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="user-autodata">user-autodata</h2>
                            <p>
                                Fetch the following detatils about the active user and update the user details: IP, city, location, country, timezone, currency, browser, browser language, os.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The user ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="footer-docs">
        <script src="../../../them-viz/scripts/jquery.min.js"></script>
        <script src="../../../them-viz/scripts/main.js"></script>
        <script src="../../../them-viz/scripts/slimscroll.min.js"></script>
        <script src="../../../them-viz/scripts/tab-accordion.js"></script>
        <script src="../../../them-viz/scripts/magnific-popup.min.js"></script>
        <script src="../../../them-viz/scripts/prettify.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61134801 - 5"></script>
        <script>
            $(document).ready(function () {
                let areas = $('.docs > div[id]');
                let labels = $('.label-fixed');
                $(window).scroll(function () {
                    $(areas).each(function () {
                        if (isScrollView(this)) {
                            $(labels).removeClass('active');
                            $(this).find('.label-fixed').addClass('active');
                        }
                    });
                });
            });
        </script>
    </footer>
</body>
</html>