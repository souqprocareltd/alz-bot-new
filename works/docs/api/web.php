<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>WEB API | Support Board</title>
    <meta name="description" content="Support Board API documentation area for all platforms, apps and languages." />
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
  <?php
    $pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    ?>
            <div class="menu-brand">
              <a href="../../../index">
                        <img src="../../../media/logo-api.svg" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                <li>
                        <a href="../../../index">Home</a>
                    </li>
                    <li>
                        <a href="../../docs">Docs</a>
                    </li>
                    <li>
                        <a href="../../../changelog">Change Log</a>
                    </li>

                        <li class="dropdown">
                    <a href="#">Language</a>
                    <ul>
                        <li><a class="btn btn-ss" href="<?php echo '../../../lang/ar/works/docs/api/' . $pageName; ?>">Arabic<img width="15px;" height="10px;" style="text-align:center;" src="../../../media/langs/sa.png" alt="Arabic Flag - Alz-Bot"></a></li>
                        <li><a class="btn btn-ss" href="<?php echo '../../../works/docs/api/' . $pageName; ?>">English<img width="15px;" height="10px;" style="text-align:center;" src="../../../media/langs/us.png" alt="English - Alz-Bot"></a></li>
                    </ul>
                </li>
                </ul>
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
                                <h4 class="active">
                                    <a href="#">WEB API</a>
                                </h4>
                                <h4>
                                    <a href="js">JAVASCRIPT API</a>
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
                                </ul>
                                <h4>
                                    <a href="#users">Users</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#get-user">get-user</a>
                                    </li>
                                    <li>
                                        <a href="#get-user-extra">get-user-extra</a>
                                    </li>
                                    <li>
                                        <a href="#get-user-language">get-user-language</a>
                                    </li>
                                    <li>
                                        <a href="#get-users">get-users</a>
                                    </li>
                                    <li>
                                        <a href="#get-new-users">get-new-users</a>
                                    </li>
                                    <li>
                                        <a href="#get-online-users">get-online-users</a>
                                    </li>
                                    <li>
                                        <a href="#get-users-with-details">get-users-with-details</a>
                                    </li>
                                    <li>
                                        <a href="#get-agent">get-agent</a>
                                    </li>
                                    <li>
                                        <a href="#get-agents-ids">get-agents-ids</a>
                                    </li>
                                    <li>
                                        <a href="#get-user-from-conversation">get-user-from-conversation</a>
                                    </li>
                                    <li>
                                        <a href="#agents-online">agents-online</a>
                                    </li>
                                    <li>
                                        <a href="#search-users">search-users</a>
                                    </li>
                                    <li>
                                        <a href="#add-user">add-user</a>
                                    </li>
                                    <li>
                                        <a href="#update-user">update-user</a>
                                    </li>
                                    <li>
                                        <a href="#delete-user">delete-user</a>
                                    </li>
                                    <li>
                                        <a href="#delete-users">delete-users</a>
                                    </li>
                                    <li>
                                        <a href="#is-online">is-online</a>
                                    </li>
                                    <li>
                                        <a href="#current-url">current-url</a>
                                    </li>
                                    <li>
                                        <a href="#count-users">count-users</a>
                                    </li>
                                    <li>
                                        <a href="#update-user-to-lead">update-user-to-lead</a>
                                    </li>
                                    <li>
                                        <a href="#get-avatar">get-avatar</a>
                                    </li>
                                    <li>
                                        <a href="#get-bot-id">get-bot-id</a>
                                    </li>
                                    <li>
                                        <a href="#is-typing">is-typing</a>
                                    </li>
                                    <li>
                                        <a href="#is-agent-typing">is-agent-typing</a>
                                    </li>
                                    <li>
                                        <a href="#set-typing">set-typing</a>
                                    </li>
                                    <li>
                                        <a href="#login">login</a>
                                    </li>
                                    <li>
                                        <a href="#logout">logout</a>
                                    </li>
                                    <li>
                                        <a href="#update-login">update-login</a>
                                    </li>
                                    <li>
                                        <a href="#delete-leads">delete-leads</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#conversations">Conversations</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#get-conversation">get-conversation</a>
                                    </li>
                                    <li>
                                        <a href="#get-conversations">get-conversations</a>
                                    </li>
                                    <li>
                                        <a href="#get-new-conversations">get-new-conversations</a>
                                    </li>
                                    <li>
                                        <a href="#get-user-conversations">get-user-conversations</a>
                                    </li>
                                    <li>
                                        <a href="#get-new-user-conversations">get-new-user-conversations</a>
                                    </li>
                                    <li>
                                        <a href="#search-conversations">search-conversations</a>
                                    </li>
                                    <li>
                                        <a href="#search-user-conversations">search-user-conversations</a>
                                    </li>
                                    <li>
                                        <a href="#new-conversation">new-conversation</a>
                                    </li>
                                    <li>
                                        <a href="#update-conversation-status">update-conversation-status</a>
                                    </li>
                                    <li>
                                        <a href="#update-conversation-department">update-conversation-department</a>
                                    </li>
                                    <li>
                                        <a href="#update-conversation-agent">update-conversation-agent</a>
                                    </li>
                                    <li>
                                        <a href="#set-rating">set-rating</a>
                                    </li>
                                    <li>
                                        <a href="#get-rating">get-rating</a>
                                    </li>
                                    <li>
                                        <a href="#get-new-messages">get-new-messages</a>
                                    </li>
                                    <li>
                                        <a href="#send-message">send-message</a>
                                    </li>
                                    <li>
                                        <a href="#update-message">update-message</a>
                                    </li>
                                    <li>
                                        <a href="#delete-message">delete-message</a>
                                    </li>
                                    <li>
                                        <a href="#update-messages-status">update-messages-status</a>
                                    </li>
                                    <li>
                                        <a href="#get-agents-in-conversation">get-agents-in-conversation</a>
                                    </li>
                                    <li>
                                        <a href="#transcript">transcript</a>
                                    </li>
                                    <li>
                                        <a href="#direct-message">direct-message</a>
                                    </li>
                                    <li>
                                        <a href="#count-conversations">count-conversations</a>
                                    </li>
                                    <li>
                                        <a href="#check-conversations-assignment">check-conversations-assignment</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#more-methods">More methods</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#send-email">send-email</a>
                                    </li>
                                    <li>
                                        <a href="#send-custom-email">send-custom-email</a>
                                    </li>
                                    <li>
                                        <a href="#email-piping">email-piping</a>
                                    </li>
                                    <li>
                                        <a href="#send-sms">send-sms</a>
                                    </li>
                                    <li>
                                        <a href="#push-notification">push-notification</a>
                                    </li>
                                    <li>
                                        <a href="#get-setting">get-setting</a>
                                    </li>
                                    <li>
                                        <a href="#get-settings">get-settings</a>
                                    </li>
                                    <li>
                                        <a href="#save-settings">save-settings</a>
                                    </li>
                                    <li>
                                        <a href="#saved-replies">saved-replies</a>
                                    </li>
                                    <li>
                                        <a href="#get-articles">get-articles</a>
                                    </li>
                                    <li>
                                        <a href="#save-articles">save-articles</a>
                                    </li>
                                    <li>
                                        <a href="#search-articles">search-articles</a>
                                    </li>
                                    <li>
                                        <a href="#get-articles-categories">get-articles-categories</a>
                                    </li>
                                    <li>
                                        <a href="#save-articles-categories">save-articles-categories</a>
                                    </li>
                                    <li>
                                        <a href="#article-ratings">article-ratings</a>
                                    </li>
                                    <li>
                                        <a href="#get-versions">get-versions</a>
                                    </li>
                                    <li>
                                        <a href="#update">update</a>
                                    </li>
                                    <li>
                                        <a href="#wp-synch">wp-synch</a>
                                    </li>
                                    <li>
                                        <a href="#app-get-key">app-get-key</a>
                                    </li>
                                    <li>
                                        <a href="#app-activation">app-activation</a>
                                    </li>
                                    <li>
                                        <a href="#csv-users">csv-users</a>
                                    </li>
                                    <li>
                                        <a href="#cron-jobs">cron-jobs</a>
                                    </li>
                                    <li>
                                        <a href="#pusher-trigger">pusher-trigger</a>
                                    </li>
                                    <li>
                                        <a href="#chat-css">chat-css</a>
                                    </li>
                                    <li>
                                        <a href="#text-formatting-to-html">text-formatting-to-html</a>
                                    </li>
                                    <li>
                                        <a href="#clear-text-formatting">clear-text-formatting</a>
                                    </li>
                                    <li>
                                        <a href="#get-notes">get-notes</a>
                                    </li>
                                    <li>
                                        <a href="#add-note">add-note</a>
                                    </li>
                                    <li>
                                        <a href="#delete-note">delete-note</a>
                                    </li>
                                    <li>
                                        <a href="#automations-get">automations-get</a>
                                    </li>
                                    <li>
                                        <a href="#automations-save">automations-save</a>
                                    </li>
                                    <li>
                                        <a href="#automations-validate">automations-validate</a>
                                    </li>
                                    <li>
                                        <a href="#automations-run-all">automations-run-all</a>
                                    </li>
                                    <li>
                                        <a href="#automations-run">automations-run</a>
                                    </li>
                                    <li>
                                        <a href="#clean-data">clean-data</a>
                                    </li>
                                    <li>
                                        <a href="#get-translation">get-translation</a>
                                    </li>
                                    <li>
                                        <a href="#get-translations">get-translations</a>
                                    </li>
                                    <li>
                                        <a href="#save-translations">save-translations</a>
                                    </li>
                                    <li>
                                        <a href="#get-departments">get-departments</a>
                                    </li>
                                    <li>
                                        <a href="#reports">reports</a>
                                    </li>
                                    <li>
                                        <a href="#reports-update">reports-update</a>
                                    </li>
                                    <li>
                                        <a href="#updates-available">updates-available</a>
                                    </li>
                                    <li>
                                        <a href="#export-settings">export-settings</a>
                                    </li>
                                    <li>
                                        <a href="#import-settings">import-settings</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#dialogflow">Dialogflow</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#dialogflow-message">dialogflow-message</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-get-intents">dialogflow-get-intents</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-create-intent">dialogflow-create-intent</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-update-intent">dialogflow-update-intent</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-entity">dialogflow-entity</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-get-entity">dialogflow-get-entity</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-get-token">dialogflow-get-token</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-get-agent">dialogflow-get-agent</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-set-active-context">dialogflow-set-active-context</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-curl">dialogflow-curl</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-human-takeover">dialogflow-human-takeover</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow-smart-reply">dialogflow-smart-reply</a>
                                    </li>
                                    <li>
                                        <a href="#open-ai-message">open-ai-message</a>
                                    </li>
                                    <li>
                                        <a href="#open-ai-curl">open-ai-curl</a>
                                    </li>
                                    <li>
                                        <a href="#google-translate">google-translate</a>
                                    </li>
                                    <li>
                                        <a href="#google-language-detection-update-user">google-language-detection-update-user</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#woocommerce">WooCommerce</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#woocommerce-get-customer">woocommerce-get-customer</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-user-orders">woocommerce-get-user-orders</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-order">woocommerce-get-order</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-product">woocommerce-get-product</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-products">woocommerce-get-products</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-search-products">woocommerce-search-products</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-taxonomies">woocommerce-get-taxonomies</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-attributes">woocommerce-get-attributes</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-product-id-by-name">woocommerce-get-product-id-by-name</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-product-images">woocommerce-get-product-images</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-product-taxonomies">woocommerce-get-product-taxonomies</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-attribute-by-term">woocommerce-get-attribute-by-term</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-attribute-by-name">woocommerce-get-attribute-by-name</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-is-in-stock">woocommerce-is-in-stock</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-coupon">woocommerce-coupon</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-coupon-check">woocommerce-coupon-check</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-coupon-delete-expired">woocommerce-coupon-delete-expired</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-url">woocommerce-get-url</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-session">woocommerce-get-session</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-get-session-key">woocommerce-get-session-key</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-payment-methods">woocommerce-payment-methods</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce-shipping-locations">woocommerce-shipping-locations</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#slack">Slack</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#send-slack-message">send-slack-message</a>
                                    </li>
                                    <li>
                                        <a href="#archive-slack-channels">archive-slack-channels</a>
                                    </li>
                                    <li>
                                        <a href="#slack-users">slack-users</a>
                                    </li>
                                    <li>
                                        <a href="#slack-users">slack-presence</a>
                                    </li>
                                    <li>
                                        <a href="#slack-channels">slack-channels</a>
                                    </li>
                                    <li>
                                        <a href="#slack-webhooks">webhooks</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#Webhooks">Webhooks</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#message-sent">message-sent</a>
                                    </li>
                                    <li>
                                        <a href="#email-sent">email-sent</a>
                                    </li>
                                    <li>
                                        <a href="#sms-sent">sms-sent</a>
                                    </li>
                                    <li>
                                        <a href="#new-messages-received">new-messages-received</a>
                                    </li>
                                    <li>
                                        <a href="#bot-message">bot-message</a>
                                    </li>
                                    <li>
                                        <a href="#message-deleted">message-deleted</a>
                                    </li>
                                    <li>
                                        <a href="#rich-message">rich-message</a>
                                    </li>
                                    <li>
                                        <a href="#webhook-new-conversation">new-conversation</a>
                                    </li>
                                    <li>
                                        <a href="#new-conversation-created">new-conversation-created</a>
                                    </li>
                                    <li>
                                        <a href="#conversation-status-updated">conversation-status-updated</a>
                                    </li>
                                    <li>
                                        <a href="#webhook-login">login</a>
                                    </li>
                                    <li>
                                        <a href="#registration">registration</a>
                                    </li>
                                    <li>
                                        <a href="#user-deleted">user-deleted</a>
                                    </li>
                                    <li>
                                        <a href="#new-email-address">new-email-address</a>
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
                                The Web API supplies a collection of HTTP methods that underpin the majority of Alz-Bot functionality.
                                To start using the Web API follow the tutorial below.
                            </p>
                            <h4>Usage</h4>
                            <p>
                                Make a
                                <b>POST</b> call to the file
                                <b>include/api.php</b> of your Alz-Bot installation.
                                You can use the following code to make the calls:
                            </p>
                            <hr class="space-sm" />
                            <div class="tab-box" data-tab-anima="fade-in">
                                <ul class="tab-nav">
                                    <li class="active">
                                        <a href="#">PHP</a>
                                    </li>
                                    <li class="">
                                        <a href="#">JQUERY</a>
                                    </li>
                                </ul>
                                <div class="panel active">
                                    <pre class="prettyprint">
                                        function alz_bot_api($query) {
                                            $ch = curl_init('YOUR-DOMAIN/alz-bot/include/api.php');
                                            $parameters = [
                                                    CURLOPT_RETURNTRANSFER => true,
                                                    CURLOPT_SSL_VERIFYPEER => false,
                                                    CURLOPT_USERAGENT => 'Alz-Bot',
                                                    CURLOPT_POST => true,
                                                    CURLOPT_CONNECTTIMEOUT => 5,
                                                    CURLOPT_POSTFIELDS => http_build_query(array_merge(['token' => 'YOUR-TOKEN'], $query))
                                            ];
                                            curl_setopt_array($ch, $parameters); 
                                            $response = curl_exec($ch);
                                            curl_close($ch);
                                            return json_decode($response, true);
                                        }
                                    </pre>
                                    <p>Usage example: <b>alz_bot_api(['function' => 'get-user', 'user_id' => 123])</b>.</p>
                                    <hr class="space-sm" />
                                </div>
                                <div class="panel">
                                    <b class="warning">Warning! This function is not secure because .js files are accessible by anyone. Make sure this code is only available to the correct user.</b>
                                    <pre class="prettyprint">
                                        $.post('YOUR-DOMAIN/alz-bot/include/api.php', {
                                            function: 'METHOD-NAME',
                                            token: 'YOUR-TOKEN'
                                        }, function (response) {
                                            response = JSON.parse(response);
                                            if (response.success) {
                                                 
                                            }
                                        });
                                    </pre>
                                </div>
                            </div>
                            <p>
                                The variable
                                <b>$response</b> will contains the
                                <b>JSON</b> response. You can add new arguments in the query array:
                                <b>['token' => '', 'function' => '', 'argument-name' => 'value', ...]</b>.
                            </p>
                            <hr class="space-sm" />
                            <p>Replace the following strings with the correct values:</p>
                            <ul class="icon-list icon-line">
                                <li>
                                    Replace
                                    <b>YOUR-DOMAIN</b> with the URL of your website. The full URL must point to the file
                                    <b>include/api.php</b> of your Alz-Bot installation.
                                    It should looks like this:
                                    <b>https://YOUR-DOMAIN.com/alz-bot/include/api.php</b> (if you're using the WordPress version:
                                    <b>https://YOUR-DOMAIN.com/wp-content/plugins/alz-bot/alz-bot/include/api.php</b>.  If you're using the cloud version: <b>https://alz-bot.techn-oviz.com/script/include/api.php</b>).
                                </li>
                                <li>
                                    Replace
                                    <b>YOUR-TOKEN</b> with the token of an admin user. You can get the token from the
                                    <b>Users</b> area by opening the profile box of an
                                    <b>admin</b> user. Only admin tokens are supported and only the admins can view the tokens.
                                    <b>If you're using the cloud version you have to use the token from Account > Installation > API token.</b>
                                    <b class="warning">Warning! This token must be kept always secret.</b>
                                </li>
                                <li>
                                    Replace
                                    <b>METHOD-NAME</b> with the name of the API function you want to use. Get them from the methods list below.
                                </li>
                            </ul>
                            <h4>Information</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Some functions are protected for security reasons, enter the code <b>$GLOBALS['SB_FORCE_ADMIN'] = true</b> before calling the function to execute it correctly. Enter the code <b>$GLOBALS['SB_FORCE_ADMIN'] = false</b> immedidately after the function call for security reasons.
                                </li>
                                <li>
                                    Some functions require the user details of the active user, use the code <b>$GLOBALS['SB_LOGIN'] = ['id' => '', 'first_name' => '', 'last_name' => '', 'email' => '', 'user_type' => '', 'department' => ''];</b> to set the active user.
                                </li>
                            </ul>
                        </div>
                        <hr class="space-lg" />
                        <div id="users">
                            <div class="label label-docs">WEB API</div>
                            <div class="fixed-area label-fixed">Users</div>
                            <h2>Users</h2>
                            <p>Methods to manage users, agents, and admins.</p>
                            <hr />
                            <h2 id="get-user">get-user</h2>
                            <p>Returns the user details of a user.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to get the additional user details. Default:
                                            <b>false</b>.
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
                                        "id": "123456",
                                        "first_name": "John",
                                        "last_name": "Doe",
                                        "email": "johon@example.com",
                                        "profile_image": "https://alz-bot.com/user.svg",
                                        "user_type": "visitor",
                                        "creation_time": "2020-05-12 14:28:57",
                                        "last_activity": "2020-05-12 14:28:57",
                                        "department": null,
                                        "token": "a521773c5a566a251c3fb00e93162b20ff955b12",
                                        "password": "",
                                        "details": [
                                            {
                                                "slug": "location",
                                                "name": "Location",
                                                "value": "New York, United States"
                                            },
                                            {
                                                "slug": "country_code",
                                                "name": "Country code",
                                                "value": "America/New_York"
                                            }
                                            ...
                                        ]
                                    }
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":false}</b> if the user is not found.
                            </p>
                            <hr />
                            <h2 id="get-user-extra">get-user-extra</h2>
                            <p>Returns the additional details of a user.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-user-extra</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>slug</pre>
                                        </td>
                                        <td>
                                            The slug of the setting to retrieve. If this argument is not set, all user details are returned. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>default</pre>
                                        </td>
                                        <td>
                                            The default value to return if the user details are not found. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "slug": "browser",
                                            "name": "Browser",
                                            "value": "Chrome"
                                        },
                                        {
                                            "slug": "current_url",
                                            "name": "Current URL",
                                            "value": "https://alz-bot.com/"
                                        },
                                        {
                                            "slug": "os",
                                            "name": "OS",
                                            "value": "Windows 10"
                                        },
                                        {
                                            "slug": "phone",
                                            "name": "Phone",
                                            "value": "3203057977"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if the user is not found.
                            </p>
                            <hr />
                            <h2 id="get-user-language">get-user-language</h2>
                            <p>Returns the active language code used by the user. By default, it's the user browser language.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user from whom you want to get the language.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                The language code. Examples:
                                <b>es</b>,
                                <b>it</b>. Returns
                                <b>false</b> if the language code is
                                <b>en</b> or not found.
                            </p>
                            <hr />
                            <h2 id="get-users">get-users</h2>
                            <p>Returns the user details of all the users.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-users</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>sorting</pre>
                                        </td>
                                        <td>
                                            Set the order of the returned values. Insert
                                            <b>["column", "order"]</b> and replace
                                            <b>column</b> with one of the
                                            following values:
                                            <b>first_name</b>,
                                            <b>last_name</b>,
                                            <b>email</b>,
                                            <b>profile_image</b>,
                                            <b>user_type</b>,
                                            <b>creation_time</b>,
                                            <b>last_activity</b>,
                                            <b>department</b>. Replace
                                            <b>order</b> with
                                            <b>ASC</b> or
                                            <b>DESC</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_types</pre>
                                        </td>
                                        <td>
                                            Array in
                                            JSON format of user types to include in the return value. Array syntax:
                                            <b>["", "", "", ...]</b>. Accepted values:
                                            <b>visitor</b>,
                                            <b>lead</b>,
                                            <b>user</b>,
                                            <b>agent</b>,
                                            <b>admin</b>. Default: all.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                        </td>
                                        <td>The string to search.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>pagination</pre>
                                        </td>
                                        <td>Integer from 1 to N to limit the results number. Insert 1 to get the first 100 results, 2 for the results from 101 to 200, etc.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>Set it to <b>true</b> to include all users extra details as well. Set it as an array of user extra detail slugs to include only a subset of extra details. Default: false.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_ids</pre>
                                        </td>
                                        <td>
                                            Array of IDs. If set, returns only the users with ID included in the given array of IDs. Array syntax:
                                            <b>["", "", "", ...]</b>. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "880",
                                            "first_name": "User",
                                            "last_name": "#29938",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 08:58:18",
                                            "last_activity": "2020-05-13 09:07:39",
                                            "department": null,
                                            "token": "6d969f64f5ed6263714b9b39f3d3700b66f16820"
                                        },
                                        {
                                            "id": "879",
                                            "first_name": "User",
                                            "last_name": "#86773",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 08:38:41",
                                            "last_activity": "2020-05-13 08:58:12",
                                            "department": null,
                                            "token": "2e5064670707d06b661d04353f4a462ec927f19a"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="get-new-users">get-new-users</h2>
                            <p>Returns the users created after the given date/ID.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-new-users</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>User ID or date and time in the following format: YYYY-MM-DD HH:MM:SS. E.g. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "880",
                                            "first_name": "User",
                                            "last_name": "#29938",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 08:58:18",
                                            "last_activity": "2020-05-13 09:07:39",
                                            "department": null,
                                            "token": "6d969f64f5ed6263714b9b39f3d3700b66f16820"
                                        },
                                        {
                                            "id": "879",
                                            "first_name": "User",
                                            "last_name": "#86773",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 08:38:41",
                                            "last_activity": "2020-05-13 08:58:12",
                                            "department": null,
                                            "token": "2e5064670707d06b661d04353f4a462ec927f19a"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="get-online-users">get-online-users</h2>
                            <p>Returns the online users including Agents.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-online-users</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>exclude_id</pre>
                                        </td>
                                        <td>
                                            Array of users IDs in
                                            JSON format to exclude from the returned values.
                                            Array syntax:
                                            <b>[123, 123, 123, ...]</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>sorting</pre>
                                        </td>
                                        <td>
                                            The name of the database table used for sorting. Default: creation_time.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agents</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to return only agents and admins. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "881",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 09:18:59",
                                            "last_activity": "2020-05-13 09:32:34",
                                            "department": null,
                                            "token": "e435a5c67f4276cdb9c6fc19b7c015990ffc3268"
                                        },
                                        {
                                            "id": "880",
                                            "first_name": "User",
                                            "last_name": "#29938",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 08:58:18",
                                            "last_activity": "2020-05-13 09:32:28",
                                            "department": null,
                                            "token": "6d969f64f5ed6263714b9b39f3d3700b66f16820"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="get-users-with-details">get-users-with-details</h2>
                            <p>Returns an array with the user IDs and details of the users who have the requested details.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-users-with-details</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>details</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of user details. E.g. [ "email", "phone" ].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_ids</pre>
                                        </td>
                                        <td>
                                            Array, or comma-separated string of user IDs.
                                            If this argument is set only the users which have their ID included are returned.
                                            Set it to <b>all</b> or <b>false</b> to search all users, set it to <b>agents</b> to search only agents and admins.
                                            Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "email": [
                                        {
                                            "id": 4561,
                                            "value": "albert@example.com"
                                        },
                                        {
                                            "id": 98436,
                                            "value": "jessica@example.com"
                                        },
                                        ...
                                    ],
                                    "phone": [
                                        {
                                            "id": 12563,
                                            "value": "+4462367136"
                                        },
                                        {
                                            "id": 778956,
                                            "value": "+4462999345"
                                        },
                                        ...
                                    ],
                                    ...
                                } 
                            </pre>
                            <hr />
                            <h2 id="get-agent">get-agent</h2>
                            <p>Return the details of an agent or admin.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-agent</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The agent ID.
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
                                        "id": "123456",
                                        "first_name": "John",
                                        "last_name": "Doe",
                                        "email": "johon@example.com",
                                        "profile_image": "https://alz-bot.com/user.svg",
                                        "user_type": "agent",
                                        "creation_time": "2020-05-12 14:28:57",
                                        "last_activity": "2020-05-12 14:28:57",
                                        "department": null,
                                        "token": "a521773c5a566a251c3fb00e93162b20ff955b12",
                                        "password": "",
                                        "details": [
                                            {
                                                "slug": "location",
                                                "name": "Location",
                                                "value": "New York, United States"
                                            },
                                            {
                                                "slug": "country_code",
                                                "name": "Country code",
                                                "value": "America/New_York"
                                            }
                                            ...
                                        ]
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="get-agents-ids">get-agents-ids</h2>
                            <p>Returns an array with the IDs of Agents.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-agents-ids</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>admins</pre>
                                        </td>
                                        <td>
                                            Set it to <b>false</b> to exclude the admins. Default: true;
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    881,
                                    153,
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get-user-from-conversation">get-user-from-conversation</h2>
                            <p>Returns the user ID and email of the user, or last agent, of the given conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-user-from-conversation</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The conversation ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent</pre>
                                        </td>
                                        <td>
                                            Set it to true to get the last agent who replied to the conversation. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                  "id": "123456",
                                  "email": "email@example.com"
                                }
                            </pre>
                            <hr />
                            <h2 id="agents-online">agents-online</h2>
                            <p>Check if at least one agent or admin is online.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <p>
                                Return
                                <b>true</b> if there are agents or admin online, or
                                <b>false</b> if all Agents are offline.
                            </p>
                            <hr />
                            <h2 id="search-users">search-users</h2>
                            <p>Returns the users matching the search.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>search-users</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to search. The additional user details are supported too.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "881",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 09:18:59",
                                            "last_activity": "2020-05-13 09:32:34",
                                            "department": null,
                                            "token": "e435a5c67f4276cdb9c6fc19b7c015990ffc3268"
                                        },
                                        {
                                            "id": "880",
                                            "first_name": "User",
                                            "last_name": "#29938",
                                            "email": null,
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "visitor",
                                            "creation_time": "2020-05-13 08:58:18",
                                            "last_activity": "2020-05-13 09:32:28",
                                            "department": null,
                                            "token": "6d969f64f5ed6263714b9b39f3d3700b66f16820"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no users are found.
                            </p>
                            <hr />
                            <h2 id="add-user">add-user</h2>
                            <p>Create a new user.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>add-user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>first_name</pre>
                                        </td>
                                        <td>
                                            The first name of the user. Default:
                                            <b>User</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>last_name</pre>
                                        </td>
                                        <td>
                                            The last name of the user. Default:
                                            <b>#RANDOM-NUMBER</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                        </td>
                                        <td>
                                            The email of the user. Default: empty.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>profile_image</pre>
                                        </td>
                                        <td>
                                            The profile picture of the user. Default:
                                            <a href="../../../media/docs/user.png" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>password</pre>
                                        </td>
                                        <td>
                                            The password of the user. Default: empty.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_type</pre>
                                        </td>
                                        <td>
                                            The user type of the user. Accepted values:
                                            <b>visitor</b>,
                                            <b>lead</b>,
                                            <b>user</b>,
                                            <b>agent</b>,
                                            <b>admin</b>. Default:
                                            <b>visitor</b> if the email is not provided, otherwise
                                            <b>user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            Array of additional user details in
                                            JSON format. Any detail is accepted.
                                            Built-in details (IDs):
                                            <b>phone</b>,
                                            <b>city</b>,
                                            <b>language</b>,
                                            <b>country</b>,
                                            <b>birthday</b>,
                                            <b>company</b>,
                                            <b>facebook</b>,
                                            <b>twitter</b>,
                                            <b>linkedin</b>,
                                            <b>website</b>,
                                            <b>ip</b>,
                                            <b>country_code</b>,
                                            <b>browser</b>,
                                            <b>currency</b>,
                                            <b>location</b>,
                                            <b>os</b>,
                                            <b>time_zone</b>,
                                            <b>current_url</b>.
                                            <hr class="space-xs" />
                                            Array syntax:
                                            <pre>{"ID": ["value", "Name"], "ID": ["value", "Name"], ...}</pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": 123456
                                }
                            </pre>
                            <p>
                                Other possible responses:
                                <b>ID of the new user</b> on success, otherwise
                                <b>duplicate-email</b>,
                                <b>invalid-user-type</b>,
                                <b>MySQL error message</b>.
                            </p>
                            <hr />
                            <h2 id="update-user">update-user</h2>
                            <p>Update the details of an existing user.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-user</b>.
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
                                            <pre>first_name</pre>
                                        </td>
                                        <td>
                                            The first name of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>last_name</pre>
                                        </td>
                                        <td>
                                            The last name of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                        </td>
                                        <td>
                                            The email of the user. Insert NULL to delete the email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>profile_image</pre>
                                        </td>
                                        <td>
                                            The profile picture of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>password</pre>
                                        </td>
                                        <td>
                                            The password of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_type</pre>
                                        </td>
                                        <td>
                                            The user type of the user. Accepted values:
                                            <b>visitor</b>,
                                            <b>lead</b>,
                                            <b>user</b>,
                                            <b>agent</b>,
                                            <b>admin</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings_extra</pre>
                                        </td>
                                        <td>
                                            Array of additional user details in
                                            JSON format.
                                            <hr class="space-xs" />
                                            Array syntax:
                                            <pre>{"ID": ["value", "Name"], "ID": ["value", "Name"], ...}</pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <p>
                                Other possible responses:
                                <b>duplicate-email</b>,
                                <b>invalid-user-type</b>,
                                <b>MySQL error message</b>.
                            </p>
                            <hr />
                            <h2 id="delete-user">delete-user</h2>
                            <p>Delete a user and all linked conversations and messages.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>delete-user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The ID of the user to delete.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="delete-users">delete-users</h2>
                            <p>Delete multiple users and all linked conversations and messages.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>delete-users</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_ids</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of IDs of the users to delete. Array syntax:
                                            <b>[123, 123, 123, ...]</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="is-online">is-online</h2>
                            <p>Check if a user is online.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>is-online</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                <b>true</b> if online,
                                <b>false</b> if offline.
                            </p>
                            <hr />
                            <h2 id="current-url">current-url</h2>
                            <p>Get or set the current URL of a user or the last visited URL.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>current-url</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>The ID of the user</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>url</pre>
                                        </td>
                                        <td>The URL to set as "Current URL". If this argument is set the function will only set the value and it will not return any URL.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "https://alz-bot.com"
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true,"response":false}</b> if the URL is not found. Return
                                <b>{"success":true,"response":true}</b> if the
                                <b>url</b> argument is set.
                            </p>
                            <hr />
                            <h2 id="count-users">count-users</h2>
                            <p>Returns the total users' count grouped by user type.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>count-users</b>.
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
                                        "all": "335",
                                        "lead": "288",
                                        "user": "15",
                                        "visitor": "28"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="update-user-to-lead">update-user-to-lead</h2>
                            <p>Change the user type of a user to lead.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-user-to-lead</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="get-avatar">get-avatar</h2>
                            <p>
                                Generate the user profile image by using the first letter of first name, and last name, save the image, and return the image URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-avatar</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>first_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The first name of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>last_name</pre>
                                        </td>
                                        <td>
                                            The last name of the user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-html">
                                https://example.com/alz-bot/uploads/13-04-21/9455859.png
                            </pre>
                            <hr />
                            <h2 id="get-bot-id">get-bot-id</h2>
                            <p>
                                Returns the Alz-Bot bot ID.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-html">
                                123
                            </pre>
                            <hr />
                            <h2 id="is-typing">is-typing</h2>
                            <p>
                                Check if a user or an agent is typing a message in a conversation. This function will not work if Pusher is active.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>is-typing</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user, or the agent, to check.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of conversation to check.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the user is typing, otherwise, return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="is-agent-typing">is-agent-typing</h2>
                            <p>
                                Check if an agent is typing a message in a conversation, and returns the agent details. This function will not work if Pusher is active.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>is-agent-typing</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of conversation to check.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                  "id": "",
                                  "first_name": "",
                                  "last_name": ""
                                }
                            </pre>
                            <p>
                                Return
                                <b>false</b> if no agents are typing.
                            </p>
                            <hr />
                            <h2 id="set-typing">set-typing</h2>
                            <p>
                                Assign the typing status to a user or an agent relative to a conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>set-typing</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user, or the agent.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="login">login</h2>
                            <p>
                                Login a user or an agent. A user can logins in two ways: via email and password, or via user ID and token.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>login</b>
                                        </td>
                                    </tr>
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
                                            <b>Users</b> area by opening the profile box of a user. Default: empty string.
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
                                        "first_name": "User",
                                        "last_name": "#29902",
                                        "email": null,
                                        "user_type": "visitor",
                                        "token": "9b25351047ee758aa97ee4868d130cc1ceb8decf"
                                    },
                                    "YXNkWGNSeTdtRTdDYVkxVG8wckN4YWF6V2s0Tk1mczBSVHdQbHBpOWdmejVUTTdOUUxEUENhdUVoYmROWn..."
                                ]
                            </pre>
                            <p>
                                The last value is the encrypted login data ready to be stored in the <b>sb-login</b> cookie.
                                Use the function
                                <b>SBF.loginCookie(response[1]);</b> to store it. Returns false if login is unsuccessful.
                            </p>
                            <hr />
                            <h2 id="logout">logout</h2>
                            <p>
                                Logout the logged-in user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>logout</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <p>
                                The <b>sb-login</b> cookie must also be deleted from the user's browser.
                            </p>
                            <hr />
                            <h2 id="update-login">update-login</h2>
                            <p>
                                Update the user details of the logged-in user. This function update all the user details, if a detail is not set it will be deleted from the database.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-login</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>profile_image</pre>
                                        </td>
                                        <td>
                                            The profile image URL of the user. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>first_name</pre>
                                        </td>
                                        <td>
                                            The first name of the user. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>last_name</pre>
                                        </td>
                                        <td>
                                            The last name of the user. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                        </td>
                                        <td>
                                            The email of the user. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>department</pre>
                                        </td>
                                        <td>
                                            Update the department of the user. This setting is used in the admin area. Default: empty string.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">YXNkWGNSeTdtRTdDYVkxVG8wckN4YWF6V2s0Tk1mczBSVHdQbHBpOWdmejVUTTdOUUxEUENhdUVoYmROWn...</pre>
                            <p>
                                The response must be saved into the <b>sb-login</b> cookie of the user's browser.
                            </p>
                            <hr />
                            <h2 id="delete-leads">delete-leads</h2>
                            <p>
                                Delete all leads, including all the linked conversations and messages.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>delete-leads</b>.
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
                        <hr class="space-lg" />
                        <div id="conversations">
                            <div class="label label-docs">WEB API</div>
                            <div class="fixed-area label-fixed">Conversations</div>
                            <h2>Conversations</h2>
                            <p>Methods to manage conversations and messages.</p>
                            <hr />
                            <h2 id="get-conversation">get-conversation</h2>
                            <p>Returns a conversation and the messages of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-conversation</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user linked to the conversation.
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
                                        "messages": [
                                            {
                                                "id": "2044",
                                                "user_id": "802",
                                                "message": "Hello!",
                                                "creation_time": "2020-05-0410:06:30",
                                                "attachments": "",
                                                "status_code": "0",
                                                "payload": "",
                                                "conversation_id": "946",
                                                "first_name": "Don",
                                                "last_name": "John",
                                                "profile_image": "https://alz-bot.com/user.svg",
                                                "user_type": "lead"
                                            },
                                            {
                                                "id": "2045",
                                                "user_id": "377",
                                                "message": "Hello,howcanIhelp?",
                                                "creation_time": "2020-05-0410:06:33",
                                                "attachments": "",
                                                "status_code": "0",
                                                "payload": "",
                                                "conversation_id": "946",
                                                "first_name": "Bruce",
                                                "last_name": "Peterson",
                                                "profile_image": "https://alz-bot.com/agent.svg",
                                                "user_type": "agent"
                                            }
                                            ...
                                        ],
                                        "details": {
                                            "user_id": "802",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "lead",
                                            "id": "946",
                                            "title": "",
                                            "conversation_time": "2020-05-0410:06:30",
                                            "conversation_status_code": "3",
                                            "department": null
                                        }
                                    }
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true,"response":{"messages":[],"details":""}}</b> if the conversation is not found.
                            </p>
                            <hr />
                            <h2 id="get-conversations">get-conversations</h2>
                            <p>Returns all the conversations. Each conversation includes the last message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-conversations</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>pagination</pre>
                                        </td>
                                        <td>Integer from 1 to N to limit the results number. Insert 1 to get the first 100 results, 2 for the results from 101 to 200, etc.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>status_code</pre>
                                        </td>
                                        <td>
                                            The status code of the returned conversations. Default: all the conversations in the inbox, excluding the conversations in the trash and archive.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>routing</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> if the
                                            <b>queue</b> or
                                            <b>routing</b> is active in
                                            <b>Settings > Miscellaneous</b>. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>routing_unassigned</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to also view the conversations not assignged to any agent. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>department</pre>
                                        </td>
                                        <td>
                                            Returns only the conversations assigned to the provided department ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>source</pre>
                                        </td>
                                        <td>
                                            Returns only the conversations created from the provided source.
                                            Available sources: em (Email), tk (Ticket), wa (WhatsApp), fb (Facebook Messenger), ig (Instagram), tw (Twitter), wc (WeChat), tx (Text message), gb (Google Business Messages).
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "1431",
                                            "user_id": "632",
                                            "message": "Hello!",
                                            "creation_time": "2020-04-24 10:53:35",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "764",
                                            "message_user_type": "lead",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "conversation_status_code": "2",
                                            "user_type": "lead"
                                        },
                                        {
                                            "id": "1430",
                                            "user_id": "631",
                                            "message": "Hi! Can you help me?",
                                            "creation_time": "2020-04-24 10:38:37",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "763",
                                            "message_user_type": "lead",
                                            "first_name": "Jessica",
                                            "last_name": "Brenson",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "conversation_status_code": "2",
                                            "user_type": "lead"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="get-new-conversations">get-new-conversations</h2>
                            <p>Returns the conversations created after the given date/ID or with a message created after the given date/ID. Each conversation includes the last message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-new-conversations</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>Conversation ID or date and time in the following format: YYYY-MM-DD HH:MM:SS. E.g. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>routing</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> if the
                                            <b>queue</b> or
                                            <b>routing</b> is active in
                                            <b>Settings > Miscellaneous</b>. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>routing_unassigned</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to also view the conversations not assignged to any agent. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "1431",
                                            "user_id": "632",
                                            "message": "Hello!",
                                            "creation_time": "2020-04-24 10:53:35",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "764",
                                            "message_user_type": "lead",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "conversation_status_code": "2",
                                            "user_type": "lead"
                                        },
                                        {
                                            "id": "1430",
                                            "user_id": "631",
                                            "message": "Hi! Can you help me?",
                                            "creation_time": "2020-04-24 10:38:37",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "763",
                                            "message_user_type": "lead",
                                            "first_name": "Jessica",
                                            "last_name": "Brenson",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "conversation_status_code": "2",
                                            "user_type": "lead"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no conversations are found.
                            </p>
                            <hr />
                            <h2 id="get-user-conversations">get-user-conversations</h2>
                            <p>Returns the conversations of a user. Each conversation includes the last message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-user-conversations</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>exclude_id</pre>
                                        </td>
                                        <td>
                                            Exclude a conversation from the results.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agents</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> if the user is an agent or admin. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "2266",
                                            "user_id": "377",
                                            "message": "Hello, how are you?",
                                            "creation_time": "2020-05-12 17:30:35",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "995",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "user_type": "lead",
                                            "conversation_status_code": "3"
                                        },
                                        {
                                            "id": "2266",
                                            "user_id": "5",
                                            "message": "Please leave a feedback.",
                                            "creation_time": "2020-05-12 17:30:35",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "995",
                                            "first_name": "Adam",
                                            "last_name": "Gates",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "user_type": "agent",
                                            "conversation_status_code": "3"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no conversations are found.
                            </p>
                            <hr />
                            <h2 id="get-new-user-conversations">get-new-user-conversations</h2>
                            <p>Returns the user conversations created after the given date/ID or with a message created after the given date/ID. Each conversation includes the last message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-new-user-conversations</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>Conversation ID or date and time in the following format: YYYY-MM-DD HH:MM:SS. E.g. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "2266",
                                            "user_id": "377",
                                            "message": "Hello, how are you?",
                                            "creation_time": "2020-05-12 17:30:35",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "995",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "user_type": "lead",
                                            "conversation_status_code": "3"
                                        },
                                        {
                                            "id": "2266",
                                            "user_id": "5",
                                            "message": "Please leave a feedback.",
                                            "creation_time": "2020-05-12 17:30:35",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "995",
                                            "first_name": "Adam",
                                            "last_name": "Gates",
                                            "profile_image": "https://alz-bot.com/media/user.svg",
                                            "user_type": "agent",
                                            "conversation_status_code": "3"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no conversations are found.
                            </p>
                            <hr />
                            <h2 id="search-conversations">search-conversations</h2>
                            <p>Returns the conversations matching the search.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>search-conversations</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The string to search. The search function search into the attachment's names, the messages, and the user email, first name and last name. </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                  "success": true,
                                  "response": [
                                    {
                                      "id": "2130",
                                      "user_id": "806",
                                      "message": "Hello! How can I help you?",
                                      "creation_time": "2020-05-05 15:45:38",
                                      "attachments": "",
                                      "status_code": "0",
                                      "payload": "",
                                      "conversation_id": "952",
                                      "message_user_type": "admin",
                                      "first_name": "User",
                                      "last_name": "#24254",
                                      "profile_image": "https://alz-bot.com/media/user.svg",
                                      "conversation_status_code": "4",
                                      "user_type": "lead"
                                    },
                                    {
                                      "id": "2127",
                                      "user_id": "805",
                                      "message": "Hi, I need help!",
                                      "creation_time": "2020-05-05 08:12:57",
                                      "attachments": "",
                                      "status_code": "0",
                                      "payload": "",
                                      "conversation_id": "951",
                                      "message_user_type": "user",
                                      "first_name": "Don",
                                      "last_name": "John",
                                      "profile_image": "https://alz-bot.com/media/user.svg",
                                      "conversation_status_code": "0",
                                      "user_type": "user"
                                    }
                                    ...
                                  ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no conversations are found.
                            </p>
                            <hr />
                            <h2 id="search-user-conversations">search-user-conversations</h2>
                            <p>Returns the conversations of the given user ID that matches the search terms.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>search-user-conversations</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The string to search. The search function supports attachment names, messages of the conversations, and the conversation title.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                  "success": true,
                                  "response": [
                                    {
                                        "id": "3362",
                                        "user_id": "2",
                                        "message": "Hello! How can I help you?",
                                        "creation_time": "2020-06-24 17:34:39",
                                        "attachments": "",
                                        "status_code": "0",
                                        "payload": "",
                                        "conversation_id": "1364",
                                        "first_name": "Don",
                                        "last_name": "John",
                                        "profile_image": "https://alz-bot.com/media/user.svg",
                                        "user_type": "lead",
                                        "conversation_status_code": "0"
                                    },
                                    {
                                        "id": "3345",
                                        "user_id": "1195",
                                        "message": "Hi, I need help!",
                                        "creation_time": "2020-06-24 17:06:23",
                                        "attachments": "",
                                        "status_code": "0",
                                        "payload": "",
                                        "conversation_id": "1363",
                                        "first_name": "Don",
                                        "last_name": "John",
                                        "profile_image": "https://alz-bot.com/media/user.svg",
                                        "user_type": "lead",
                                        "conversation_status_code": "2"
                                    }
                                    ...
                                  ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no conversations are found.
                            </p>
                            <hr />
                            <h2 id="new-conversation">new-conversation</h2>
                            <p>Create a new conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>new-conversation</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user linked to the conversation.
                                        </td>
                                    </tr>
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
                                            <pre>title</pre>
                                        </td>
                                        <td>
                                            The title of the conversation. Default: empty.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>department</pre>
                                        </td>
                                        <td>
                                            The ID of a department. You can get the IDs from
                                            <b>Settings > Miscellaneous > Departments</b>. Default: -1.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the agent assigned to the conversation. Default: -1.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>source</pre>
                                        </td>
                                        <td>
                                            Set the conversation source. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            Extra conversation values.  Default: false.
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
                                        "messages": [],
                                        "details": {
                                            "user_id": "882",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "lead",
                                            "id": "1007",
                                            "title": "",
                                            "conversation_time": "2020-05-15 12:51:39",
                                            "conversation_status_code": "0",
                                            "department": null
                                        }
                                    }
                                }
                            </pre>
                            <p>
                                Other possible responses:
                                <b>Conversation details array</b> on success, otherwise
                                <b>user-not-found</b>,
                                <b>MySQL error message</b>
                            </p>
                            <hr />
                            <h2 id="update-conversation-status">update-conversation-status</h2>
                            <p>Update the status code of a conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-conversation-status</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The ID of the conversation.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>status_code</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The status code of the conversation. Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <p>
                                Return
                                <b>invalid-status-code</b> if the status code is invalid.
                            </p>
                            <hr />
                            <h2 id="update-conversation-department">update-conversation-department</h2>
                            <p>Update the department of a conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-conversation-department</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation to update.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>department</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of a department. You can get the IDs from
                                            <b>Settings > Miscellaneous > Departments</b>. The department ID is not validated, so double-check it to make sure it exists.
                                            Set it to <b>false</b> to remove the department.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            A string containing a message for the agents notifications. If set, an all the agents assigned to the new department will be notified via email, push notification, and SMS.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="update-conversation-agent">update-conversation-agent</h2>
                            <p>Assign or update the agent assigned to a conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-conversation-agent</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation to update.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of a agent. Set it to <b>false</b> to remove the agent.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            A string containing a message for the agent notifications. If set, the agent will be notified via email, push notification, and SMS.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="set-rating">set-rating</h2>
                            <p>Assign a rating to a conversation and optionally update a message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>set-rating</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Enter the following array in
                                            JSON format:
                                            <b>{ "settings" : { "conversation_id": "ID", "rating": "RATING" }}</b>. Replace
                                            <b>ID</b> with the ID of the conversation to rate, replace
                                            <b>rating</b> with
                                            <b>1</b> for a positive rating or with
                                            <b>0</b> for a
                                            negative one.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            The payload of the message in
                                            JSON format.
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
                                            The content of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user of the conversation linked to the message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="get-rating">get-rating</h2>
                            <p>Get the ratings of the conversations assigned to an agent.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-rating</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The ID of an agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [4,2]
                                }
                            </pre>
                            <p>
                                The response array: [count of positive ratings, count of negative ratings]. In the example above there are 4 positive ratings and 2 negative ratings.
                            </p>
                            <hr />
                            <h2 id="get-new-messages">get-new-messages</h2>
                            <p>Returns the messages of a conversation created after the given date/ID.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-new-messages</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user of the conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>Message ID or date and time in the following format: YYYY-MM-DD HH:MM:SS. E.g. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "2319",
                                            "user_id": "377",
                                            "message": "Welcome to our support chat!",
                                            "creation_time": "2020-05-12 18:04:50",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "1004",
                                            "first_name": "Virtual",
                                            "last_name": "Agent",
                                            "profile_image": "https://alz-bot.com/bot.svg",
                                            "user_type": "bot"
                                        },
                                        {
                                            "id": "2320",
                                            "user_id": "877",
                                            "message": "Thank you! I need help.",
                                            "creation_time": "2020-05-12 18:04:51",
                                            "attachments": "",
                                            "status_code": "0",
                                            "payload": "",
                                            "conversation_id": "1004",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "lead"
                                        }
                                        ...
                                    ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no conversations are found.
                            </p>
                            <hr />
                            <h2 id="send-message">send-message</h2>
                            <p>Add a new message to an existing conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>send-message</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user who sends the message. Use the API 'get-bot-id' to get the ID of the bot.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The content of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments in
                                            JSON format. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: [].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_status_code</pre>
                                        </td>
                                        <td>
                                            The status code of the conversation.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                            Set it to
                                            <b>skip</b> to leave the current conversation status.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            Array in
                                            JSON format of additional information. You can insert any value.
                                            Array syntax:
                                            <b>{ "key": value, "key": value, ... }</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>queue</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> if the queue is active in
                                            <b>Settings > Miscellaneous > Queue</b>. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>recipient_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user who receive the message. Use this attribute to get the user language.
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
                                        "queue": false,
                                        "notifications": ["sms", "email"]
                                    }
                                }
                            </pre>
                            <p>
                                Other possible responses:
                                <b>invalid-status-code</b>,
                                <b>MySQL error message</b>. The <b>notifications</b> response include the notifications sent to the user or agents.
                            </p>
                            <hr />
                            <h2 id="update-message">update-message</h2>
                            <p>Update an existing message.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-message</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message_id</pre>
                                            <label>Required</label>
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
                                            The content of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments in
                                            JSON format. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: [].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            Array in
                                            JSON format of additional information. You can insert any value.
                                            Array syntax:
                                            <b>{ "key": value, "key": value, ... }</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="delete-message">delete-message</h2>
                            <p>Delete an existing message.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>delete-message</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the message to delete.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="update-messages-status">update-messages-status</h2>
                            <p>Update the status code of multiple messages to read.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update-messages-status</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message_ids</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of message IDs in
                                            JSON format, e.g. [1, 212, 124].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user linked to the messages. Required to update the user's chat if Pusher is active.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="get-agents-in-conversation">get-agents-in-conversation</h2>
                            <p>
                                Returns an array with all the agents with at least one message in the conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-agents-in-conversation</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The conversation ID. It can be an array of conversation IDs.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "1546": [
                                        {
                                            "id": 5463,
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "conversation_id": 1546
                                        },
                                        {
                                            "id": 6413,
                                            "first_name": "Steven",
                                            "last_name": "Travolta",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "conversation_id": 1546
                                        }, 
                                        ...
                                    ],
                                    ...
                                }
                            </pre>
                            <hr />
                            <h2 id="transcript">transcript</h2>
                            <p>
                                Export a conversation in a CSV or TXT file and returns the URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                transcript
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation to export.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            Set it to <b>csv</b> to export the conversation as a CSV file, set it to <b>txt</b> to export the conversation as a text file, set it to <b>false</b> to use the type set in <b>Settings > Admin > Transcript type</b>. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "https://alz-bot.com/uploads/conversation-1021.csv"
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":false}</b> if the conversation is not found.
                            </p>
                            <hr />
                            <h2 id="direct-message">direct-message</h2>
                            <p>
                                Sends a direct message. Details <a href="https://alz-bot.com/docs/#direct-messages" target="_blank">here</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                direct-message
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_ids</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of user IDs, e.g. <b>[45, 89, 65]</b>.
                                        </td>
                                    </tr>
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
                                            <pre>subject</pre>
                                        </td>
                                        <td>
                                            The subject. Required only for emails. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="count-conversations">count-conversations</h2>
                            <p>
                                Counts the number of conversations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                count-conversations
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>status_code</pre>
                                        </td>
                                        <td>
                                            If set, only the conversations with the specified status are counted.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                            Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": 123456
                                }
                            </pre>
                            <hr />
                            <h2 id="check-conversations-assignment">check-conversations-assignment</h2>
                            <p>
                                Checks if a list of conversations is assigned to a department or agent and returns only the conversation IDs that are assigned to that agent and/or department.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert <b>check-conversations-assignment</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_ids</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of IDs of the conversations to check, e.g. [45, 565, 68].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                        </td>
                                        <td>
                                            The agent ID. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>department_id</pre>
                                        </td>
                                        <td>
                                            The department ID. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [1234, 5, ...]
                                }
                            </pre>
                        </div>
                        <hr class="space-lg" />
                        <div id="more-methods">
                            <div class="label label-docs">WEB API</div>
                            <div class="fixed-area label-fixed">More methods</div>
                            <h2>More methods</h2>
                            <p>Various methods that perform different actions.</p>
                            <hr />
                            <h2 id="send-email">send-email</h2>
                            <p>
                                Send an email to an existing user using the email templates of the
                                <b>Settings > Notifications</b> area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>send-email</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>recipient_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user to which send the email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
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
                                            Array of attachments in
                                            JSON format. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: [].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>sender_id</pre>
                                        </td>
                                        <td>
                                            The ID of the sender user. Default: the active user ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <p>
                                Other possible responses:
                                <b>missing-user-id-or-message</b>,
                                <b>security-error</b>,
                                <b>user-email-not-found</b>,
                                <b>user-or-sender-not-found</b>.
                            </p>
                            <hr />
                            <h2 id="send-custom-email">send-custom-email</h2>
                            <p>
                                Sends a generic email to an email address. The sender email and name are the ones set in <b>Settings > Notifications > Email settings</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>send-custom-email</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>to</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The email address.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>subject</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The email subject.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The message of the email.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>sender_suffix</pre>
                                        </td>
                                        <td>
                                            Append the provided text to the sender name. Default: empty.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="email-piping">email-piping</h2>
                            <p>
                                Runs the email piping synchronization with Alz-Bot and converts emails to chat messages.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>email-piping</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>force</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to the execution of the synchronization, by default the synchronization is executed a maximum of one time per minute. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="send-sms">send-sms</h2>
                            <p>
                                Sends a text message to a user or agent. If the template argument is true, the message is translated automatically.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>send-sms</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The text message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>to</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The phone number.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>template</pre>
                                        </td>
                                        <td>
                                            Set it to <b>false</b> to send only the message without the template content. Default: the message is sent within the template of <b>Settings > SMS notifications</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            Set it if the message contains the URL parameter {conversation_url_parameter}.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachment. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b> or <b>["link", "link", ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "sid": "SM1f0e8ae6ade43cb3c0ce4525424e404f",
                                    "date_created": "Fri, 13 Aug 2010 01:16:24 +0000",
                                    "date_updated": "Fri, 13 Aug 2010 01:16:24 +0000",
                                    "date_sent": null,
                                    "account_sid": "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
                                    "to": "+15305431221",
                                    "from": "+15104564545",
                                    "body": "A Test Message",
                                    "status": "queued",
                                    "flags":["outbound"],
                                    "api_version": "2010-04-01",
                                    "price": null,
                                    "uri": "\/2010-04-01\/Accounts\/ACXXXX\/Messages\/SM1f004f.json"
                                }
                            </pre>
                            <hr />
                            <h2 id="push-notification">push-notification</h2>
                            <p>
                                Send a Push notification to an agent, a group of agents, or all agents.
                                <b>Push notifications must be enabled in the settings area</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
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
                                        </td>
                                        <td>
                                            The icon of the notification. Default: Alz-Bot icon or notifications icon.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>interest</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The following values are accepted:
                                            <ul>
                                                <li>Agent or user ID</li>
                                                <li>
                                                    Array of agents or users IDs (ex.
                                                    <b>[1, 2, 3]</b>)
                                                </li>
                                                <li>The string <b>agents</b> to send the notification to all agents without a department assigned.</li>
                                                <li>The string <b>all-agents</b> to send the notification to all agents.</li>
                                                <li>The string <b>department-ID</b> to send the notification to all agents assigned to the given department. Replace ID with the department ID.</li>
                                            </ul>
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
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "publishId": "pubid-781799f5-6el4-4789-bc60-ee293543781"
                                }
                            </pre>
                            <p>
                                Return
                                <b>false</b> it the Push notifications are disabled in the settings area.
                            </p>
                            <hr />
                            <h2 id="get-setting">get-setting</h2>
                            <p>
                                Returns a setting saved in the
                                <b>Settings</b> area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-setting</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>setting</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The setting ID. You can get the IDs of all the settings from the file
                                            <b>resources\json\settings.json</b>.
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
                                        "option": "value",
                                        "option": "value",
                                        ...
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="get-settings">get-settings</h2>
                            <p>Returns an array with all the settings.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-settings</b>.
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
                                        "chat-manual-init": [
                                            false,
                                            "checkbox"
                                        ],
                                        "chat-login-init": [
                                            false,
                                            "checkbox"
                                        ],
                                        "init-dashboard": [
                                            true,
                                            "checkbox"
                                        ],
                                        "chat-timetable-disable": [
                                            false,
                                            "checkbox"
                                        ],
                                        "rtl": [
                                            false,
                                            "checkbox"
                                        ],
                                        "front-auto-translations": [
                                            true,
                                            "checkbox"
                                        ],
                                        ...
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="save-settings">save-settings</h2>
                            <p>
                                Save all settings.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>save-settings</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The settings array. Get it from <a href="#get-settings" class="scroll-to">get-settings</a>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>external_settings</pre>
                                        </td>
                                        <td>
                                            Settings saved to a dedicated row of the table <b>sb_settings</b> of the database.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>external_settings_translations</pre>
                                        </td>
                                        <td>
                                            Translations of the external settings.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="saved-replies">saved-replies</h2>
                            <p>Returns an array with all the saved replies.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>saved-replies</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "reply-name": "hello",
                                            "reply-text": "Hello! How can I help?"
                                        },
                                        {
                                            "reply-name": "email",
                                            "reply-text": "Our email is support@example.com."
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="get-articles">get-articles</h2>
                            <p>
                                Returns an array with all the articles or a single article.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-articles</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The ID of the article. The get the articles IDs, execute this method again without arguments. Default: -1.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>count</pre>
                                        </td>
                                        <td>
                                            The maximum number of returned articles. Default: all.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>full</pre>
                                        </td>
                                        <td>
                                            Boolean. Set it to <b>true</b> to get full length article contents.
                                            Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>categories</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to get the array of all categories, in such a case the response is a double array, first item articles, second item categories.
                                            Set it to the category ID to get only the articles of the give category.
                                            Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>articles_language</pre>
                                        </td>
                                        <td>
                                            Get the articles in the language of the given language code. If there are no articles in the given language code, the articles in the default language are returned instead.
                                            Set it to
                                            <b>all</b> to get all the translations. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "6P2Oq",
                                            "title": "What's new with the API V2?",
                                            "content": "The API V2 is the new iteration of o ...",
                                            "link": "https://alz-bot.com",
                                            "categories": ["K92kl"]
                                        },
                                        {
                                            "title": "Should I move to the new system?",
                                            "content": "Yes. The newest version of the Actions ...",
                                            "link": "https://alz-bot.com",
                                            "id": "qf7kD",
                                            "categories": ["ols85"]
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": {
                                        "id": "6P2Oq",
                                        "title": "What's new with the API V2?",
                                        "content": "The API V2 is the new iteration of our developer API. The new API integrates...",
                                        "link": "https://alz-bot.com",
                                        "categories": ["K92kl"]
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="save-articles">save-articles</h2>
                            <p>
                                Save all the articles.
                                This function deletes all the existing articles and replace them with the ones of the given array.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>save-articles</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>articles</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The array with the articles. Use the API
                                            <b>get-articles</b> to get the articles array.
                                            Array syntax:
                                            <pre>{"articles": [{"id": "", "title": "", "content": "", "link":"", "categories": []}, ...]}</pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>translations</pre>
                                        </td>
                                        <td>
                                            The array with the articles translations. Use the API
                                            <b>get-articles</b> to get the articles array.
                                            Array syntax:
                                            <pre>{ "es": [{"id": "", "title": "", "content": "", "link":"", "categories": []}, ...], "it": [...], ...}</pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="search-articles">search-articles</h2>
                            <p>Returns the articles matching the search.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>search-articles</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The string to search. The search function supports title and content.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>articles_language</pre>
                                        </td>
                                        <td>
                                            Search only the articles in the language of the given language code. If there are no articles in the given language code, the search returns the articles in the default language.
                                            Set it to
                                            <b>all</b> to get all the translations. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "6P2Oq",
                                            "title": "What's new with the API V2?p",
                                            "content": "The API V2 is the new iteration of o ...",
                                            "link": "https://alz-bot.com",
                                            "categories": ["K92kl"]
                                        },
                                        {
                                            "title": "Should I move to the new API?",
                                            "content": "Yes. The newest version (V2) of the Actions ...",
                                            "link": "https://alz-bot.com",
                                            "id": "qf7kD",
                                            "categories": ["K92kl"]
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <p>
                                Return
                                <b>{"success":true, "response":[]}</b> if no articles are found.
                            </p>
                            <hr />
                            <h2 id="get-articles-categories">get-articles-categories</h2>
                            <p>
                                Returns an array with all the articles categories.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-articles-categories</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "Nv9PG",
                                            "title": "Business"
                                        },
                                        {
                                            "id": "csPVh",
                                            "title": "Travel And Tourism"
                                        },
                                        {
                                            "id": "pl5S7",
                                            "title": "Finance"
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="save-articles-categories">save-articles-categories</h2>
                            <p>
                                Save or update the articles categories array.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>save-articles-categories</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>categories</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of categories. Array syntax:
                                            <b>[ { "id": "123456", "title": "Category name" }, { "id": "123456", "title": "Category name" }, ...]</b>.
                                            Get the existing categories array with the method
                                            <a href="#get-articles-categories">get-articles-categories</a>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="article-ratings">article-ratings</h2>
                            <p>
                                Get the ratings of an article or add a new rating to it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>article-ratings</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>article_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the article.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>rating</pre>
                                        </td>
                                        <td>
                                            The rating to add. Insert
                                            <b>1</b> for a positive rating or
                                            <b>0</b> for a
                                            negative one. If this argument is set the method adds the rating, otherwise returns the existing ratings. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "[-1, 1, 1, -1]"
                                }
                            </pre>
                            <p>
                                Returns
                                <b>true</b> if the
                                <b>rating</b> argument is set.
                            </p>
                            <hr />
                            <h2 id="get-versions">get-versions</h2>
                            <p>Returns the installed versions of Alz-Bot and the Apps.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-versions</b>.
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
                                        "sb": "3.0.4",
                                        "dialogflow": "1.0.2",
                                        "slack": "1.0.3"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="update">update</h2>
                            <p>Start the update of Alz-Bot and all the apps. This method forces the update and always overwrite all plugin and apps files.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>update</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "success"
                                }
                            </pre>
                            <hr />
                            <h2 id="wp-synch">wp-synch</h2>
                            <p>
                                Start the synchronization of the WordPress users and import the new WordPress users into Alz-Bot.
                                <b>This method is available only in the WordPress version.</b>
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                wp-synch
                                            </b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="app-get-key">app-get-key</h2>
                            <p>
                                Returns the License Key of a Alz-Bot App like the Slack App or the Dialogflow App.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                app-get-key
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>app_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The app name. E.g. dialogflow, slack, whatsapp, messenger...
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "9300AB16-014ZEE12-91E199EA-997CEX40"
                                }
                            </pre>
                            <hr />
                            <h2 id="app-activation">app-activation</h2>
                            <p>
                                Activate an app, download it, and install it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                app-activation
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>app_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The app name. E.g. dialogflow, slack, whatsapp, messenger...
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>key</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The License Key of the App. You can get the key with the function
                                            <b>app-get-key</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "success"
                                }
                            </pre>
                            <hr />
                            <h2 id="csv-users">csv-users</h2>
                            <p>
                                Export all the users in a CSV file and returns the URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                csv-users
                                            </b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "https://alz-bot.com/uploads/users.csv"
                                }
                            </pre>
                            <hr />
                            <h2 id="cron-jobs">cron-jobs</h2>
                            <p>
                                Run the cron jobs. For more details click
                                <a href="../#cron-jobs">here</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>cron-jobs</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="pusher-trigger">pusher-trigger</h2>
                            <p>
                                Trigger an avent on a Pusher channel.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>pusher-trigger</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>channel</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The channel name.
                                        </td>
                                    </tr>
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
                                            <b>[ "name" => "value" ]</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="chat-css">chat-css</h2>
                            <p>
                                Returns the CSS style for the chat colors.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>chat-css</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>color_1</pre>
                                        </td>
                                        <td>
                                            The first color in RGB or HEX format. Default: the first color saved in the settings area.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>color_2</pre>
                                        </td>
                                        <td>
                                            The second color in RGB or HEX format. Default: the second color saved in the settings area.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>color_3</pre>
                                        </td>
                                        <td>
                                            The third color in RGB or HEX format. Default: the third color saved in the settings area.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>The CSS code.</p>
                            <hr />
                            <h2 id="text-formatting-to-html">text-formatting-to-html</h2>
                            <p>
                                Convert the <a href="../#text-editor">text formatting</a> of chat messages to the equivalent HTML codes and returns the message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>text-formatting-to-html</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The text message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-html">
                                Lorem ipsum dolor &lt;b>sit amet&lt;/b>, &lt;i>consectetur adipiscing elit&lt;/i>, &lt;code>sed&lt;/code> do eiusmod tempor incididunt. 
                            </pre>
                            <hr />
                            <h2 id="clear-text-formatting">clear-text-formatting</h2>
                            <p>
                                Remove the <a href="../#text-editor">text formatting</a> from a chat messages.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>clear-text-formatting</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The text message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-html">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. 
                            </pre>
                            <hr />
                            <h2 id="get-notes">get-notes</h2>
                            <p>
                                Returns the internal notes of a conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-notes</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The conversation ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "id": 98207,
                                        "user_id": "1538",
                                        "name": "Lorem ipsum dolor sit amet",
                                        "message": "Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt."
                                    },
                                    {
                                        "id": 76986,
                                        "user_id": "1596",
                                        "name": "Lorem ipsum dolor",
                                        "message": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor."
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="add-note">add-note</h2>
                            <p>
                                Add a new internal note.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>add-note</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The conversation ID to which link the note to.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the agent or admin who create the note.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The note name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The note message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-html">
                                The note ID
                            </pre>
                            <hr />
                            <h2 id="delete-note">delete-note</h2>
                            <p>
                                Delete an internal note.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>delete-note</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation linked with the note.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>note_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The note ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="automations-get">automations-get</h2>
                            <p>
                                Returns all automations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>automations-get</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "emails": [
                                            {
                                                "id": "0BOaG",
                                                "conditions": [
                                                    [
                                                        "datetime",
                                                        "is-between",
                                                        "10/04/2021 - 13/04/2021"
                                                    ],
                                                    [
                                                        "include_urls",
                                                        "contains",
                                                        "https://example.com"
                                                    ],
                                                    ...
                                                ],
                                                "name": "Excepteur sint",
                                                "message": "Excepteur sint occaecat cupidatat non proident.",
                                                "subject": "Cupidatat non proident"
                                            },
                                            ...
                                        ],
                                        "sms": [
                                            {
                                                "id": "vo2sY",
                                                "conditions": [
                                                    [
                                                        "datetime",
                                                        "is-exactly",
                                                        "13/04/2021"
                                                    ]
                                                ],
                                                "name": "Excepteur sint",
                                                "message": "Excepteur sint occaecat cupidatat non caecat cupidatat non proident"
                                            },
                                            {
                                                "id": "hwkmQ",
                                                "name": "Excepteur sint occaecat cupidatat non proident",
                                                "message": "Excepteur sint occaecat cupidatat non  occaecat cupidatat non proident"
                                            },
                                            ...
                                        ],
                                        "messages": [],
                                        "popups": [
                                            {
                                                "id": "ckN24",
                                                "conditions": [
                                                    [
                                                        "user_type",
                                                        "is-user"
                                                    ],
                                                    [
                                                        "languages",
                                                        "en"
                                                    ]
                                                ],
                                                "name": "s",
                                                "message": "Excepteur sint occaecat cupidatat non prcaecat cupidatat non proident",
                                                "title": "Excepteur sint occaecat",
                                                "profile_image": "https://example.com/image.jpg"
                                            },
                                            ...
                                        ],
                                        "design": [
                                            {
                                                "id": "bX1qA",
                                                "conditions": [
                                                    [
                                                        "user_type",
                                                        "is-user"
                                                    ]
                                                ],
                                                "name": "Excepteur sint",
                                                "message": "Excepteur sint occaecat cupidatat caecat cupidatat non proident",
                                                "title": "",
                                                "color_1": "rgb(0, 235, 26)",
                                                "color_2": "rgb(255, 0, 0)",
                                                "color_3": "rgb(255, 0, 0)",
                                                "background": "https://example.com/image.jpg",
                                                "brand": "https://example.com/image.jpg",
                                                "icon": "https://example.com/image.jpg"
                                            },
                                            ...
                                        ]
                                    },
                                    {
                                        "fr": {
                                            "messages": [
                                                {
                                                    "id": "y6hNE",
                                                    "name": "XXXX",
                                                    "message": "XXXX"
                                                }
                                            ]
                                        },
                                        ...
                                    }
                                ]
                            </pre>
                            <hr />
                            <h2 id="automations-save">automations-save</h2>
                            <p>
                                Save all automations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>automations-save</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automations</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Automations array. Get it from <b>sb_get_automations()</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>translations</pre>
                                        </td>
                                        <td>
                                            Automations translations array. Get it from <b>sb_get_automations()</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="automations-validate">automations-validate</h2>
                            <p>
                                Validate an automations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>automations-validate</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automation</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The automation.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">                              
                                {
                                    "conditions": [
                                        [
                                            "user_type",
                                            "is-user"
                                        ],
                                        ...
                                    ],
                                    "repeat_id": ""
                                }
                            </pre>
                            <p>
                                Returns only the client-side conditions and invalid server-side conditions that can be validated in a later time.
                                If no conditions are returned, the automation is valid and can be executed.
                                Returns <b>false</b> if the automation is invalid.
                            </p>
                            <hr />
                            <h2 id="automations-run-all">automations-run-all</h2>
                            <p>
                                Validate all automations, execute the valid ones, and returns the automations with client-side conditions, invalid server-side conditions, and popup, design automations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>automations-run-all</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "id": "0BOaG",
                                        "conditions": [
                                            [
                                                "datetime",
                                                "is-between",
                                                "10/04/2021 - 13/04/2021"
                                            ],
                                            [
                                                "include_urls",
                                                "contains",
                                                "https://example.com"
                                            ],
                                            ...
                                        ],
                                        "name": "Excepteur sint",
                                        "message": "Excepteur sint occaecat cupidatat non proident.",
                                        "subject": "Cupidatat non proident",
                                        "type": "emails"
                                    },
                                    {
                                        "id": "bX1qA",
                                        "conditions": [
                                            [
                                                "user_type",
                                                "is-user"
                                            ]
                                        ],
                                        "name": "Excepteur sint",
                                        "message": "Excepteur sint occaecat cupidatat caecat cupidatat non proident",
                                        "title": "",
                                        "color_1": "rgb(0, 235, 26)",
                                        "color_2": "rgb(255, 0, 0)",
                                        "color_3": "rgb(255, 0, 0)",
                                        "background": "https://example.com/image.jpg",
                                        "brand": "https://example.com/image.jpg",
                                        "icon": "https://example.com/image.jpg",
                                        "type": "design"
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="automations-run">automations-run</h2>
                            <p>
                                Execute a single automation and optionally validate it before executing it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>automations-run</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>automation</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The automation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>validate</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to validate the automation before executing it. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">                              
                                true
                            </pre>
                            <hr />
                            <h2 id="clean-data">clean-data</h2>
                            <p>
                                This function performs the following tasks: Delete visitors older than 24h. Delete messages in trash older than 30 days.
                                Archive messages with an agent reply as last message older than 24h.
                            </p>
                            <hr class="space-sm" />
                            <h4>Requirements</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    This is an admin function and it works only if the active user is an
                                    <b>agent</b> or an
                                    <b>admin</b>.
                                </li>
                            </ul>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>clean-data</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="get-translation">get-translation</h2>
                            <p>
                                Return the translations in the given language.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-translation</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language_code</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The two-letter language code.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "name": "Arabic",
                                    "front": {
                                        "Activities": "أنشطة",
                                        "All": "الكل",
                                        "All articles": "جميع المقالات",
                                        "All fields are required.": "جميع الحقول مطلوبة",
                                        ...
                                    },
                                    "admin": {
                                        "A conversation was started by": "",
                                        "Activate": "",
                                        "Activation complete! Page reload in progress...": "",
                                        "Add a saved reply": "",
                                        ...
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="get-translations">get-translations</h2>
                            <p>
                                Returns the translations of the back-end and the frond-end, for all the available languages.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-translations</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "ar": {
                                        "name": "Arabic",
                                        "front": {
                                            "Activities": "أنشطة",
                                            "All": "الكل",
                                            "All articles": "جميع المقالات",
                                            "All fields are required.": "جميع الحقول مطلوبة",
                                            ...
                                        },
                                        "admin": {
                                            "A conversation was started by": "",
                                            "Activate": "",
                                            "Activation complete! Page reload in progress...": "",
                                            "Add a saved reply": "",
                                            ...
                                        }
                                    },
                                    "da": {
                                        "name": "Danish",
                                        "front": {
                                            "Activities": "Aktiviteter",
                                            "All": "Alle",
                                            "All articles": "Alle artikler",
                                            "All fields are required.": "Alle felter skal udfyldes.",
                                            ...
                                        },
                                        "admin": {
                                            "A conversation was started by": "",
                                            "Activate": "",
                                            "Activation complete! Page reload in progress...": "",
                                            "Add a saved reply": "",
                                            ...
                                        }
                                    },
                                    ...
                                }
                            </pre>
                            <hr />
                            <h2 id="save-translations">save-translations</h2>
                            <p>
                                Save the translations and overwrite the translations files.
                                Warning! If the given translations array is corrupted you could corrupt the translations files.
                                Make a backup of the translations folder (
                                <b>\resources\languages\</b> first.
                                Each time a translation is saved a backup is created automatically in the
                                <b>uploads</b> folder.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>save-translations</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>translations</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The translations array with all the translations. Use the method
                                            <b>get-translations</b> to get the array.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="get-departments">get-departments</h2>
                            <p>
                                Returns the Alz-Bot departments.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>get-departments</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "1": {
                                        "name": "Example",
                                        "color": "yellow",
                                        "image": "https://example.com/image.png"
                                    },
                                    "2": {
                                        "name": "Example",
                                        "color": "red",
                                        "image": "https://example.com/image.png"
                                    },
                                    ...
                                }
                            </pre>
                            <hr />
                            <h2 id="reports">reports</h2>
                            <p>
                                Returns the the specified reports.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>reports</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The report name. Available values: conversations, missed-conversations, conversations-time, visitors, leads, users, agents-response-time, agents-conversations, agents-conversations-time, agents-ratings, countries, languages, browsers, os, subscribe, follow-up, registrations, articles-searches, articles-ratings, articles-views-single, articles-views, sms-automations, email-automations, message-automations, direct-sms, direct-emails, direct-messages.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>date_start</pre>
                                        </td>
                                        <td>
                                            The start date of the reports. Format: dd/mm/yyyy or yyyy-mm-dd. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>date_end</pre>
                                        </td>
                                        <td>
                                            The end date of the reports. Format: dd/mm/yyyy or yyyy-mm-dd. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>date_end</pre>
                                        </td>
                                        <td>
                                            The timezone of the user who is calling this function, e.g. Europe/London. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                             {
                                "title": "Conversations count",
                                "description": "Count of new conversations started by users.",
                                "data": {
                                    "03/2021": [
                                        2
                                    ],
                                    "04/2021": [
                                        0
                                    ],
                                    "05/2021": [
                                        0
                                    ],
                                    ...
                                },
                                "table": [
                                    "Date",
                                    "Count"
                                ],
                                "table-inverse": true,
                                "label_type": 1,
                                "chart_type": "line"
                             }  
                            </pre>
                            <hr />
                            <h2 id="reports-update">reports-update</h2>
                            <p>
                                Add a new row to the sb_reports database table.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>reports-update</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The report name. Available values: conversations, missed-conversations, conversations-time, visitors, leads, users, agents-response-time, agents-conversations, agents-conversations-time, agents-ratings, countries, languages, browsers, os, subscribe, follow-up, registrations, articles-searches, articles-ratings, articles-views-single, articles-views, sms-automations, email-automations, message-automations, direct-sms, direct-emails, direct-messages.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                        </td>
                                        <td>
                                            The row value. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>external_id</pre>
                                        </td>
                                        <td>
                                            An external ID. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            An extr avalue. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="updates-available">updates-available</h2>
                            <p>
                                Checks if there are updates available for Alz-Bot and the Alz-Bot apps.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>updates-available</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <p>Returns <b>true</b> if updates are available, otherwise returns <b>false</b>.</p>
                            <hr />
                            <h2 id="export-settings">export-settings</h2>
                            <p>
                                Exports the Alz-Bot settings in JSON format.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>export-settings</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                            {
                                "success": true,
                                "response": "http://example.com/alz-bot/uploads/settings_855776223.json"
                            }
                            </pre>
                            <p>Returns the URL of the JSON file containing the settings.</p>
                            <hr />
                            <h2 id="import-settings">import-settings</h2>
                            <p>
                                Imports the Alz-Bot settings in JSON format.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>import-settings</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>file_url</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The URL of the JSON file containing the settings.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                        </div>
                        <hr class="space-lg" />
                        <div id="dialogflow">
                            <div class="label label-docs">WEB API</div>
                            <div class="fixed-area label-fixed">Dialogflow</div>
                            <h2>Dialogflow</h2>
                            <p>
                                Dialogflow Web API list.
                                <b>The Dialogflow App is required to use this set of APIs.</b>
                            </p>
                            <hr />
                            <h2 id="dialogflow-message">dialogflow-message</h2>
                            <p>
                                Send a message to Dialogflow and add the Dialogflow response to an existing conversation as a new message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>dialogflow-message</b>.
                                        </td>
                                    </tr>
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
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The string containing the text of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                        </td>
                                        <td>
                                            The Dialogflow access token. For performance reasons always include this token.
                                            You will get the token after the first call of this method, from the response.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The language of the bot. Default: the main bot language.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments in
                                            JSON format. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment. Dialogflow can read this array.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>event</pre>
                                        </td>
                                        <td>
                                            Trigger a Dialogflow event.
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
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": {
                                        "token": "ya29.a0AfH6SE4SVIeOPWSfxRVfHNcJIoR-IvRTtrEe4P9VXHa",
                                        "messages": [
                                            {
                                                "message": "Hi! How are you doing?",
                                                "attachments": []
                                            }
                                        ],
                                        "response": {
                                            "responseId": "1a5e30d0-d6d4-4f0c-83e3-2fb9e31c2a5e-e15c53b8",
                                            "queryResult": {
                                                "queryText": "Hello",
                                                "action": "input.welcome",
                                                "parameters": [],
                                                "allRequiredParamsPresent": true,
                                                "fulfillmentText": "Hi! How are you doing?",
                                                "fulfillmentMessages": [
                                                    {
                                                        "platform": "ACTIONS_ON_GOOGLE",
                                                        "simpleResponses": {"simpleResponses": [ { "textToSpeech": "Example"} ]}
                                                    },
                                                    {
                                                        "text": { "text": [ "Hi! How are you doing?" ]  }
                                                    }
                                                ],
                                                "intent": {
                                                    "name": "projects/api-project-657752147/agent/intents/fe27e-f39d-4db3-92c2",
                                                    "displayName": "Default Welcome Intent"
                                                },
                                                "intentDetectionConfidence": 1,
                                                "languageCode": "en"
                                            },
                                            "alternativeQueryResults": [
                                                {
                                                    "queryText": "Hello",
                                                    "languageCode": "en"
                                                }
                                            ]
                                        }
                                    }
                                }
                            </pre>
                            <p>
                                Other possible responses:
                                <b>dialogflow-not-active</b>,
                                <b>MySQL, or cURL error message</b>.
                            </p>
                            <hr />
                            <h2 id="dialogflow-get-intents">dialogflow-get-intents</h2>
                            <p>
                                Returns the specified Dialogflow Intent or all Intents.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-get-intents
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>intent_name</pre>
                                        </td>
                                        <td>
                                            The intent name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The agent language. Default: the main agent language.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                  {
                                    "name": "projects/example/agent/intents/1655ee2c-8116-45f1-95fu-93700ff32e8d",
                                    "displayName": "Default Welcome Intent",
                                    "priority": 500000,
                                    "mlEnabled": true,
                                    "events": [ "WELCOME" ],
                                    "trainingPhrases": [
                                      {
                                        "name": "43ca0e72-6055-4b88-af13-b0d241",
                                        "type": "EXAMPLE",
                                        "parts": [
                                          {
                                            "text": "just going to say hi"
                                          }
                                        ]
                                      },
                                      {
                                        "name": "5159aabc-8524-404f-b679-f2228db1",
                                        "type": "EXAMPLE",
                                        "parts": [
                                          {
                                            "text": "Hello"
                                          }
                                        ]
                                      },
                                      ...
                                    ],
                                    "action": "input.welcome",
                                    "messages": [
                                      {
                                        "text": {
                                          "text": [ "Hi! How are you doing?", "Hello! How can I help you?" ]
                                        }
                                      }
                                    ]
                                  },
                                  ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="dialogflow-create-intent">dialogflow-create-intent</h2>
                            <p>
                                Create a new Intent in Dialogflow. The new Intent will be linked the agent synchronized in the admin area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-create-intent
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>expressions</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array with the training phrases. Array syntax:
                                            <b>["", "", ...]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>response</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            String containing the response of the bot when the user input matches a user expression.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_language</pre>
                                        </td>
                                        <td>
                                            The language code of the intent. Default: main agent language. For the languages codes list visit
                                            <a href="https://cloud.google.com/dialogflow/docs/reference/language" target="_blank" rel="nofollow">cloud.google.com/dialogflow/docs/reference/language</a>.
                                            Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-update-intent">dialogflow-update-intent</h2>
                            <p>
                                Update a Dialogflow Intent.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-update-intent
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>intent_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The Intent name. Get it with the function <a href="#dialogflow-get-intents" class="scroll-to">dialogflow-get-intents</a>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>expressions</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array with the training phrases. Array syntax:
                                            <b>["", "", ...]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_language</pre>
                                        </td>
                                        <td>
                                            The language code of the intent. Default: main agent language. For the languages codes list visit
                                            <a href="https://cloud.google.com/dialogflow/docs/reference/language" target="_blank" rel="nofollow">cloud.google.com/dialogflow/docs/reference/language</a>.
                                            Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-entity">dialogflow-entity</h2>
                            <p>
                                Create a new Entity in Dialogflow. The new Entity will be linked the agent synchronized in the admin area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-entity
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>entity_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The unique Entity name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>synonyms</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of Entity values. Single value syntax:
                                            <b>['value' => '', 'synonyms' => ['', '', ...]]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_language</pre>
                                        </td>
                                        <td>
                                            The language code of the intent. For the languages codes list visit
                                            <a href="https://cloud.google.com/dialogflow/docs/reference/language" target="_blank" rel="nofollow">cloud.google.com/dialogflow/docs/reference/language</a>. Default: false.
                                            Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-get-entity">dialogflow-get-entity</h2>
                            <p>Returns a Dialogflow Entity, or all Entities of the agent.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-get-entity
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>entity_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the Entity. Leave empty or insert
                                            <b>all</b> to get all Entities. Default: all.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_language</pre>
                                        </td>
                                        <td>
                                            The language code of the intent. For the languages codes list visit
                                            <a href="https://cloud.google.com/dialogflow/docs/reference/language" target="_blank" rel="nofollow">cloud.google.com/dialogflow/docs/reference/language</a>.
                                            Default: false.
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
                                      "name":"projects/small-talk-43da7/agent/entityTypes/t5td1425-2k13-16cc-a7bb-f119b8d94112a",
                                      "displayName":"woocommerce-products",
                                      "kind":"KIND_MAP",
                                      "autoExpansionMode":"AUTO_EXPANSION_MODE_DEFAULT",
                                      "entities":[
                                         {
                                            "value":"Abstract Print Cotton Blouse",
                                            "synonyms":[
                                               "Abstract Print Cotton Blouse"
                                            ]
                                         },
                                         {
                                            "value":"Cashmere Carpenter Beanie",
                                            "synonyms":[
                                               "Cashmere Carpenter Beanie"
                                            ]
                                         },
                                         ...
                                      ],
                                      "enableFuzzyExtraction":true
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-get-token">dialogflow-get-token</h2>
                            <p>Generate a new Dialogflow Token and returns it. The token is valid for 1 hour.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-get-token
                                            </b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "ya27.a1AfH6SMDu9dn0TfRbNVAIEsSoeJPD1_jr1JpfL15..."
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-get-agent">dialogflow-get-agent</h2>
                            <p>Returns the details of the Dialogflow agent.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-get-agent
                                            </b>.
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
                                        "parent":"projects/woocommerce-abcde",
                                        "displayName": "ABCDE",
                                        "defaultLanguageCode": "en",
                                        "timeZone": "Europe/Madrid",
                                        "enableLogging": true,
                                        "matchMode": "MATCH_MODE_HYBRID" ,
                                        "classificationThreshold": 0.6,
                                        "apiVersion": "API_VERSION_V2",
                                        "tier": "TIER_STANDARD"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-set-active-context">dialogflow-set-active-context</h2>
                            <p>Activate a Dialogflow context in the active user session.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-set-active-context
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>context_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The context name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user linked to the context.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>parameters</pre>
                                        </td>
                                        <td>
                                            Array of Dialogflow parameters linked to the context. Example:
                                            <b>{ "woocommerce-products": "Running Shoes" }</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>life_span</pre>
                                        </td>
                                        <td>
                                            The context lifespan. Default: 5.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                        </td>
                                        <td>
                                            Dialogflow Session Token(it's not the Refresh Token). Pass it if you have it, otherwise it will be generated. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The agent language. Default: main agent language.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "success":true,
                                   "response": {
                                      "responseId":"09f2f825-3dbf-4c27-a5bb-6bd0b71e44b9-1d846bd2",
                                      "queryResult":{
                                         "queryText":"sb-trigger-context",
                                         "parameters":[

                                         ],
                                         "outputContexts":[
                                            {
                                               "name":"projects/abcde/agent/sessions/208/contexts/abcde",
                                               "lifespanCount":4,
                                               "parameters":{
                                                  "woocommerce-products":"Sampras Vibration Dampener"
                                               }
                                            }
                                         ],
                                         "languageCode":"en"
                                      }
                                   }
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-curl">dialogflow-curl</h2>
                            <p>
                                Send data to Dialogflow. Use this method to submit the queries to Dialogflow.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-curl
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>query</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The Dialogflow query in JSON format.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            The call type. Supported values:
                                            <b>POST</b>,
                                            <b>GET</b>,
                                            <b>PATCH</b>. Default: POST.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                        </td>
                                        <td>
                                            Dialogflow Session Token(it's not the Refresh Token). Pass it if you have it, otherwise it will be generated. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "success": true,
                                   "response": "..."
                                }
                            </pre>
                            <p>
                                Returns the Dialogflow response. More details at
                                <a href="https://cloud.google.com/dialogflow/es/docs/reference/rest/v2-overview" target="_blank" rel="nofollow">https://cloud.google.com/dialogflow/es/docs/reference/rest/v2-overview</a>
                            </p>
                            <hr />
                            <h2 id="dialogflow-human-takeover">dialogflow-human-takeover</h2>
                            <p>
                                Trigger the Dialogflow human takeover.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-human-takeover
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The conversation ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>auto_messages</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to send also offline, follow_up and subscribe messages if they are active. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "success": true,
                                   "response": [true, true, ...]
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow-smart-reply">dialogflow-smart-reply</h2>
                            <p>
                                Returns the smart reply suggestions.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                dialogflow-smart-reply
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The text message from which generate the suggestions.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>smart_reply_data</pre>
                                        </td>
                                        <td>
                                            Set it to <b>false</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>dialogflow_language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language. Defualt: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                        </td>
                                        <td>
                                            The Dialogflow access token. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language_detection</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to detect the agent language by the message.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "suggestions": [
	                                   "I would be happy to help!",
	                                    "What can I do for you?",
                                       ...
	                                ],
	                                "token": "ya29.a0AVvZVsrU7gAannWzuztBR-AphpjdWr0JrPoq9au0Ai",
	                                "detected_language": false,
	                                "smart_reply": false
                                }
                            </pre>
                            <hr />
                            <h2 id="open-ai-message">open-ai-message</h2>
                            <p>
                                Send a message to OpenAI and return the response, optionally add the response to an existing conversation as a new message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                open-ai-message
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string containing the text of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>max_tokens</pre>
                                        </td>
                                        <td>
                                            The max number of OpenAI tokens that can be used to generate the message. This parameter changes the response message length. Default: 100.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of the conversation. It set, the OpenAI response is added to an existing conversation as a new message. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "success": true,
                                   "response": [true, 'Excepteur sint occaeca...']
                                }
                            </pre>
                            <p>Return an array with the first value set to <b>true</b> on success, <b>false</b> on error. The second value is the OpenAI message on success, or the error message on error.</p>
                            <hr />
                            <h2 id="open-ai-curl">open-ai-curl</h2>
                            <p>Call the OpenAI API (ChatGPT) and return the response.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                open-ai-curl
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>url_part</pre>
                                        </td>
                                        <td>
                                            The URL part of the API. For example, if you want to call <b>https://api.openai.com/v1/completions</b>, enter only <b>completions</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>post_fields</pre>
                                        </td>
                                        <td>
                                            The parameters of the API in JSON format.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            The HTTP call type. Allowed values: <b>GET</b>, <b>POST</b>, <b>UPLOAD</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "success": true,
                                   "response": "..."
                                }
                            </pre>
                            <p>Returns the openAI response. More details at <a href="https://beta.openai.com/docs/api-reference/" target="_blank" rel="nofollow">https://beta.openai.com/docs/api-reference/</a>.</p>
                            <hr />
                            <h2 id="google-translate">google-translate</h2>
                            <p>
                                Translate multiple strings via Google Translate.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>google-translate</b>.
                                        </td>
                                    </tr>
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
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        [
                                            {
                                                "translatedText": "Ciao mondo",
                                                "detectedSourceLanguage": "en"
                                            },
                                            {
                                                "translatedText": "Come stai?",
                                                "detectedSourceLanguage": "en"
                                            }
                                        ],
                                        "ya29.a0AVvZVsqVHw9U7LxFukwIoQEfwA3JyT_2SSRnP2nX4oQ_XyMP9GQk2O"
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="google-language-detection-update-user">google-language-detection-update-user</h2>
                            <p>
                                Detect the language of a text and assign it to a user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Parameters</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>google-language-detection-update-user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>string</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The text from which to detect the language.
                                        </td>
                                    </tr>
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
                                {
                                   "success": true,
                                   "response": true
                                }
                            </pre>
                        </div>
                        <hr class="space-lg" />
                        <div id="woocommerce">
                            <div class="label label-docs">WEB API</div>
                            <div class="fixed-area label-fixed">WooCommerce</div>
                            <h2>WooCommerce</h2>
                            <p>
                                WooCommerce Web API list.
                                <b>The WooCommerce App is required to use this set of APIs.</b>
                            </p>
                            <hr />
                            <h2 id="woocommerce-get-customer">woocommerce-get-customer</h2>
                            <p>
                                Returns the details of a WooCommerce customer.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-customer
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>session_key</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Get it with the method
                                            <a href="#woocommerce-get-session-key">woocommerce-get-session-key</a>.
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
                                        "customer_id": "1",
                                        "user_id": null,
                                        "username": "",
                                        "first_name": "Don",
                                        "last_name": "John",
                                        "email": "email@example.com",
                                        "date_last_active": "2020-08-03 07:21:18",
                                        "date_registered": null,
                                        "country": "UK",
                                        "postcode": "E14HR",
                                        "city": "London",
                                        "state": "London"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-user-orders">woocommerce-get-user-orders</h2>
                            <p>
                                Returns an array with the orders summary of the user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-user-orders
                                            </b>.
                                        </td>
                                    </tr>
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
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "603",
                                            "date": "2020-10-22 14:58:11",
                                            "total": "19",
                                            "status": "wc-processing"
                                        },
                                        {
                                            "order_id": "602",
                                            "date": "2020-10-19 14:02:35",
                                            "total": "19",
                                            "status": "wc-on-hold",
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-order">woocommerce-get-order</h2>
                            <p>
                                Returns the details of an order.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-order
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>order_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The order ID.
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
                                        "id": "601",
                                        "date": "2020-10-19 14:02:10",
                                        "total": "19",
                                        "status": "wc-on-hold",
                                        "products": [
                                            {
                                                "name": "Sony Play Station 5",
                                                "id": "53",
                                                "quantity": "1",
                                                "price": "199"
                                            }
                                        ],
                                        "billing_address": "Don John\\n501 Baker Street\\nEW578H London, UK",
                                        "shipping_address": "",
                                        "currency_symbol": "€"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-product">woocommerce-get-product</h2>
                            <p>
                                Returns the details of a product.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-product
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The product ID.
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
                                        "id": "53",
                                        "name": "Sony Play Station 5",
                                        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elite...",
                                        "price": "19",
                                        "image": "https://example.com/image.jpg",
                                        "rating": "",
                                        "url": "https://example.com/?p=53"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-products">woocommerce-get-products</h2>
                            <p>
                                Returns the products matching the given query if any, otherwise returns all products.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-products
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>filters</pre>
                                        </td>
                                        <td>
                                            Array of filters. Syntax:
                                            <b>[ "filter" => "value", "filter" => "value", ... ]</b>.
                                            Use filters to only get products that match specific criteria. Available filters:
                                            <ul class="icon-list icon-line">
                                                <li>
                                                    <pre>taxonomy</pre> Taxonomy ID or name. Categories and tags are taxonomies.
                                                </li>
                                                <li>
                                                    <pre>attribute</pre> Product attribute term name. Example: color, size.
                                                </li>
                                                <li>
                                                    <pre>date</pre> Product publication date.
                                                    If the value is a string, returns only the products older than the given date.
                                                    If the value is an array, returns the products between the given dates. Array syntax:
                                                    <b>[ "startDate" => "", "endDate" => "" ]</b>.
                                                    Multiple date formats are supported. Example: 2020-12-30 06:35:59.
                                                </li>
                                                <li>
                                                    <pre>max-price</pre> Product max price. Returns only the products with a price lower than the give one.
                                                </li>
                                                <li>
                                                    <pre>min-price</pre> Product min price. Returns only the products with a price larger than the give one.
                                                </li>
                                                <li>
                                                    <pre>discounted</pre> Products in promotion. Set it to
                                                    <b>true</b> to get only the products in promotion.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>pagination</pre>
                                        </td>
                                        <td>
                                            Limit the number of results to 100. Set it to 0 to get the products from 1 to 100, to 1 to get the products from 101 to 200...
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The products language code. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "53",
                                            "name": "Sony Play Station 5",
                                            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elite...",
                                            "date": "2020-08-03 07:06:25",
                                            "price": "19",
                                            "image": "https://example.com/image.jpg",
                                            "rating": "",
                                            "url": "https://example.com?p=53"
                                        },
                                        {
                                            "id": "54",
                                            "name": "Xbox Series X",
                                            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elite...",
                                            "date": "2020-08-03 07:08:19",
                                            "price": "59",
                                            "image": "https://example.com/image.jpg",
                                            "rating": "",
                                            "url": "https://example.com?p=54"
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-search-products">woocommerce-search-products</h2>
                            <p>
                                Returns the products matching the search.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-search-products
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The search string.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "53",
                                            "name": "Sony Play Station 5",
                                            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elite...",
                                            "date": "2020-08-03 07:06:25",
                                            "price": "19",
                                            "image": "https://example.com/image.jpg",
                                            "rating": "",
                                            "url": "https://example.com?p=53"
                                        },
                                        {
                                            "id": "54",
                                            "name": "Xbox Series X",
                                            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elite...",
                                            "date": "2020-08-03 07:08:19",
                                            "price": "59",
                                            "image": "https://example.com/image.jpg",
                                            "rating": "",
                                            "url": "https://example.com?p=54"
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-taxonomies">woocommerce-get-taxonomies</h2>
                            <p>
                                Returns the WooCommerce product categories or tags.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-taxonomies
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>category</b> or
                                            <b>tag</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The language code of the taxonomies. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "33",
                                            "name": "Clothes",
                                            "slug": "clothes"
                                        },
                                        {
                                            "id": "34",
                                            "name": "Accessories",
                                            "slug": "accessories"
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-attributes">woocommerce-get-attributes</h2>
                            <p>
                                Returns the WooCommerce product attributes and attribute terms.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-attributes
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>terms</b> to get only the terms name of all attributes, and to
                                            <b>attribute</b> to get only the attributes name. Default: all.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The language code of the attributes. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <hr class="space-xs" />
                            <h5>All</h5>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": {
                                        "colors": {
                                            "id": "1",
                                            "name": "Color",
                                            "slug": "pa_color",
                                            "terms": {
                                                "red": "Red",
                                                "yellow": "Yellow",
                                                "green": "Green",
                                                ...
                                            }
                                        },
                                        ...
                                    }
                                }
                            </pre>
                            <h5>Terms</h5>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "name": "Red"
                                        },
                                        {
                                            "name": "Yellow"
                                        },
                                        {
                                            "name": "Small"
                                        },
                                        {
                                            "name": "Medium"
                                        },
                                        {
                                            "name": "Large"
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <h5>Attributes</h5>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "id": "1",
                                            "name": "Color",
                                            "slug": "pa_color"
                                        },
                                        {
                                            "id": "2",
                                            "name": "Size",
                                            "slug": "pa_size"
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-product-id-by-name">woocommerce-get-product-id-by-name</h2>
                            <p>
                                Search a product by name and returns its ID.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-product-id-by-name
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The product name.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": 123 or false
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-product-images">woocommerce-get-product-images</h2>
                            <p>
                                Returns an array with the images of a product.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-product-images
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The product ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        "https://example.com/image.jpg",
                                        "https://example.com/image.jpg",
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-product-taxonomies">woocommerce-get-product-taxonomies</h2>
                            <p>
                                Returns the categories and tags of a product.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-product-taxonomies
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The product ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        {
                                            "term_id": "34",
                                            "name": "Red",
                                            "slug": "red",
                                            "term_group": "0",
                                            "taxonomy": "product_cat"
                                        },
                                        {
                                            "term_id": "35",
                                            "name": "Summer Edition",
                                            "slug": "summer-edition",
                                            "term_group": "0",
                                            "taxonomy": "product_tag"
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-attribute-by-term">woocommerce-get-attribute-by-term</h2>
                            <p>
                                Returns the attribute of an attribute term.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-attribute-by-term
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>term_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The term name.
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
                                        "id": "1",
                                        "name": "Color",
                                        "slug": "pa_color"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-attribute-by-name">woocommerce-get-attribute-by-name</h2>
                            <p>
                                Search an attribute by its name and returns it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-attribute-by-name
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The attribute name.
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
                                        "id": "1",
                                        "name": "Color",
                                        "slug": "pa_color"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-is-in-stock">woocommerce-is-in-stock</h2>
                            <p>
                                Check if a product is in stock.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-is-in-stock
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The product ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true or false
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-coupon">woocommerce-coupon</h2>
                            <p>
                                Generate a coupon and returns the coupon code.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-coupon
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>discount</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Discount percentage. Insert a value from 1 to 100.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>expiration</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Coupon expiration. Example:
                                            <b>3 days</b>,
                                            <b>1 minutes</b>,
                                            <b>60 seconds</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>product_id</pre>
                                        </td>
                                        <td>
                                            String of IDs separated by commas. Example:
                                            <b>11,53,63</b>. If setted the coupon is valid only for the products with the given IDs.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            If setted the coupon is valid only for the user with the given ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [ "fxsocl3490oq", "50" ]
                                }
                            </pre>
                            <p>[ coupon code, discount value ]</p>
                            <hr />
                            <h2 id="woocommerce-coupon-check">woocommerce-coupon-check</h2>
                            <p>
                                Check if there are coupons linked to the given user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-coupon-check
                                            </b>.
                                        </td>
                                    </tr>
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
                                {
                                    "success": true,
                                    "response": true or false
                                }
                            </pre>
                            <p>
                                Returns
                                <b>true</b> if there are coupons linked to the user, otherwise returns
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="woocommerce-coupon-delete-expired">woocommerce-coupon-delete-expired</h2>
                            <p>
                                Delete all expired coupons. This function runs automatically every hour via cron jobs.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-coupon-delete-expired
                                            </b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-url">woocommerce-get-url</h2>
                            <p>
                                Returns a WooCommerce URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-url
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The URL type to get. Accepted values:
                                            <b>tag</b>,
                                            <b>category</b>,
                                            <b>cart</b>,
                                            <b>shop</b>,
                                            <b></b>,
                                            <b>checkout</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The name of the caetgory or link.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The language of the page of the URL. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": "https://example.com/checkout"
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-session">woocommerce-get-session</h2>
                            <p>
                                Returns the session variable of a user. The session variable contains the user cart details and more.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-session
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>session_key</pre>
                                        </td>
                                        <td>
                                            The session key of a user. Get it with the method
                                            <a href="#woocommerce-get-session-key">woocommerce-get-session-key</a>.
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
                                        "cart": {
                                            "d82c8d1619ah8176d665453cfb2e66f0": {
                                                "key": "d82c8d1619ah8176d665453cfb2e66f0",
                                                "product_id": 53,
                                                "variation_id": 0,
                                                "variation": [],
                                                "quantity": 3,
                                                "data_hash": "b5c1d6ca8bae6d4896jf1807cdf713f0",
                                                "line_tax_data": {
                                                    "subtotal": [],
                                                    "total": []
                                                },
                                                "line_subtotal": 57,
                                                "line_subtotal_tax": 0,
                                                "line_total": 57,
                                                "line_tax": 0
                                            }
                                        },
                                        "cart_totals": {
                                            "subtotal": "57.00",
                                            "subtotal_tax": 0,
                                            "shipping_total": "0.00",
                                            "shipping_tax": 0,
                                            "shipping_taxes": [],
                                            "discount_total": 0,
                                            "discount_tax": 0,
                                            "cart_contents_total": "57.00",
                                            "cart_contents_tax": 0,
                                            "cart_contents_taxes": [],
                                            "fee_total": "0.00",
                                            "fee_tax": 0,
                                            "fee_taxes": [],
                                            "total": "57.00",
                                            "total_tax": 0
                                        },
                                        "applied_coupons": "a:0:{}",
                                        "coupon_discount_totals": "a:0:{}",
                                        "coupon_discount_tax_totals": "a:0:{}",
                                        "removed_cart_contents": "a:0:{}",
                                        "customer": {
                                            "id": "1",
                                            "date_modified": "2020-08-20T09:33:03+00:00",
                                            "postcode": "",
                                            "city": "",
                                            "address_1": "",
                                            "address": "",
                                            "address_2": "",
                                            "state": "",
                                            "country": "",
                                            "shipping_postcode": "",
                                            "shipping_city": "",
                                            "shipping_address_1": "",
                                            "shipping_address": "",
                                            "shipping_address_2": "",
                                            "shipping_state": "",
                                            "shipping_country": "",
                                            "is_vat_exempt": "",
                                            "calculated_shipping": "",
                                            "first_name": "",
                                            "last_name": "",
                                            "company": "",
                                            "phone": "",
                                            "email": "",
                                            "shipping_first_name": "",
                                            "shipping_last_name": "",
                                            "shipping_company": ""
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-get-session-key">woocommerce-get-session-key</h2>
                            <p>
                                Returns the session key of a user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-get-session-key
                                            </b>.
                                        </td>
                                    </tr>
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
                                {
                                    "success": true,
                                    "response": "f96ab7c6da236e6754d"
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-payment-methods">woocommerce-payment-methods</h2>
                            <p>
                                Returns the available payment methods of the shop.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-payment-methods
                                            </b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        "Direct bank transfer",
                                        "Check payments",
                                        "Cash on delivery",
                                        "Alipay",
                                        "Multibanco",
                                        "Credit Card (Stripe)"
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce-shipping-locations">woocommerce-shipping-locations</h2>
                            <p>
                                Returns the shop shipping locations, or check if the shop ships to a specific location.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>
                                                woocommerce-shipping-locations
                                            </b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>country_code</pre>
                                        </td>
                                        <td>
                                            A country code. If provided checks if the shop ships to the country of the given given code. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": [
                                        "Australia, Italy, United States, ...",
                                        [
                                            [
                                                "Australia",
                                                "AU"
                                            ],
                                            [
                                                "Italy",
                                                "IT"
                                            ],
                                            [
                                                "United States",
                                                "US"
                                            ],
                                            ...
                                        ],
                                        false
                                    ]
                                }
                            </pre>
                            <p>
                                The last array value is
                                <b>true</b> if the shop does not ship to the returned countries.
                            </p>
                        </div>
                        <hr class="space-lg" />
                        <div id="slack">
                            <div class="label label-docs">WEB API</div>
                            <div class="fixed-area label-fixed">Slack</div>
                            <h2>Slack</h2>
                            <p>
                                Dialogflow Web API list. <b>The Slack App is required to use this set of APIs.</b>
                            </p>
                            <h2 id="send-slack-message">send-slack-message</h2>
                            <p>
                                Send a message to Slack.
                                <b>The Slack App is required and Slack must be active in the settings area.</b>
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>send-slack-message</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user linked to the message.
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
                                        </td>
                                        <td>
                                            The profile image of the sender, it will appear in Slack on the left of the message.
                                            It should be an agent's profile image if the message is from an agent, otherwise the user's profile image.
                                            Supported formats:
                                            <b>PNG</b> and
                                            <b>JPG</b>.
                                            Default:
                                            <a href="../../../media/docs/user.png" class="docs-picture lightbox" data-lightbox-anima="fade-in"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            The content of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Array of attachments in
                                            JSON format. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: [].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>channel</pre>
                                        </td>
                                        <td>
                                            The Slack channel linked to the message. For performance reasons always include the channel.
                                            You will get the channel after the first call of this method, from the response (example: C011JFFGSKY).
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {"success":true,"response":["C011JFFGSKY"]}
                            </pre>
                            <p>
                                Other possible responses:
                                <b>slack-not-active</b>,
                                <b>MySQL or cURL error message</b>.
                            </p>
                            <hr />
                            <h2 id="archive-slack-channels">archive-slack-channels</h2>
                            <p>
                                Archive all the Slack channels.
                                If you have a lot of channels, this operation may take a long time to complete and you could need to execute it again multiple times.
                                Important: All of your slack channels will be archived.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>archive-slack-channels</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": true
                                }
                            </pre>
                            <hr />
                            <h2 id="slack-users">slack-users</h2>
                            <p>
                                Returns the agents-slack members' connection information.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>slack-users</b>.
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
                                        "slack_users": [
                                            {
                                                "id": "U328T701Z",
                                                "name": "Support Schio"
                                            },
                                            {
                                                "id": "UR5F0GK7T",
                                                "name": "Robert Pitt"
                                            }
                                            ...
                                        ],
                                        "agents": [
                                            {
                                                "id": "2",
                                                "name": "Alex Smith"
                                            },
                                            {
                                                "id": "445",
                                                "name": "Federico Schiocchet"
                                            },
                                            {
                                                "id": "724",
                                                "name": "Alberto Prade"
                                            }
                                            ...
                                        ],
                                        "saved": {
                                            "U328T701Z": "445",
                                            "UR5F0GK7T": "2"
                                            ...
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="slack-presence">slack-presence</h2>
                            <p>
                                Check if a Slack agent is online, or if at least one agent is online, or returns all the online users.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>slack-presence</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                        </td>
                                        <td>
                                            The ID of the agent to check. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>list</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to return all online users. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "success": true,
                                    "response": online
                                }
                            </pre>
                            <p>Returns <b>online</b> or <b>offline</b> for single agent check. Returns an array of user IDs for multiple users check.</p>
                            <hr />
                            <h2 id="slack-channels">slack-channels</h2>
                            <p>
                                Returns the list of all Slack channels, including archived channels.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Your admin secret token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>function</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert
                                            <b>slack-channels</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre>
{
    "ok": true,
    "channels": [
        {
            "id": "C012AB3CD",
            "name": "general",
            "is_channel": true,
            "is_group": false,
            "is_im": false,
            "created": 1449252889,
            "creator": "U012A3CDE",
            "is_archived": false,
            "is_general": true,
            "unlinked": 0,
            "name_normalized": "general",
            "is_shared": false,
            "is_ext_shared": false,
            "is_org_shared": false,
            "pending_shared": [],
            "is_pending_ext_shared": false,
            "is_member": true,
            "is_private": false,
            "is_mpim": false,
            "updated": 1678229664302,
            "topic": {
                "value": "Company-wide announcements and work-based matters",
                "creator": "",
                "last_set": 0
            },
            "purpose": {
                "value": "This channel is for team-wide communication and announcements. All team members are in this channel.",
                "creator": "",
                "last_set": 0
            },
            "previous_names": [],
            "num_members": 4
        },
        {
            "id": "C061EG9T2",
            "name": "random",
            "is_channel": true,
            "is_group": false,
            "is_im": false,
            "created": 1449252889,
            "creator": "U061F7AUR",
            "is_archived": false,
            "is_general": false,
            "unlinked": 0,
            "name_normalized": "random",
            "is_shared": false,
            "is_ext_shared": false,
            "is_org_shared": false,
            "pending_shared": [],
            "is_pending_ext_shared": false,
            "is_member": true,
            "is_private": false,
            "is_mpim": false,
            "updated": 1678229664302,
            "topic": {
                "value": "Non-work banter and water cooler conversation",
                "creator": "",
                "last_set": 0
            },
            "purpose": {
                "value": "A place for non-work-related flimflam, faffing, hodge-podge or jibber-jabber you'd prefer to keep out of more focused work-related channels.",
                "creator": "",
                "last_set": 0
            },
            "previous_names": [],
            "num_members": 4
        }
    ],
    "response_metadata": {
        "next_cursor": "dGVhbTpDMDYxRkE1UEI="
    }
}
                            </pre>
                            <hr />
                            <h2 id="slack-webhooks">Webhooks</h2>
                            <h4>slack-message-sent</h4>
                            <p>Webhook sent when a message is sent to Slack.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "slack-message-sent",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "message": "Hi! How are you doing?",
                                        "conversation_id": "1057",
                                        "slack_channel": "C028BGU6TTT"
                                    }
                                }
                            </pre>
                        </div>
                        <hr class="space-lg" />
                        <div id="Webhooks">
                            <div class="label label-docs">WEB API</div>
                            <div class="fixed-area label-fixed">Webhooks</div>
                            <h2>Webhooks</h2>
                            <p>
                                Webhooks are automated messages sent from Alz-Bot to a URL when something happens.
                                They contain custom data and are sent to a unique URL defined by you.
                            </p>
                            <h4>Usage</h4>
                            <ul class="icon-list icon-line">
                                <li>
                                    Login to the administration area and go to
                                    <b>Settings > Miscellaneous > Webhooks</b>.
                                </li>
                                <li>
                                    Enter the destination URL. Alz-Bot will send the data to this URL.
                                    This URL should point to a
                                    <b>PHP</b> file that can read the data received, you can use the code
                                    <b>$response = json_decode(file_get_contents('php://input'), true);</b> to get the data, the
                                    <b>$response</b> variable will be an array.
                                </li>
                                <li>
                                    Insert in the
                                    <b>Secret Key</b> field a secret password of your choice.
                                    This key is included in all the Webhooks, you can use it to validate the Webhook and make sure it is sent by Alz-Bot and not from someone else.
                                </li>
                                <li>Activate the Webhooks and save. Alz-Bot will now start sending the Webhooks of the list below to your URL.</li>
                                <li>
                                    The key
                                    <b>sender-url</b> is included in all the Webhooks and contains the URL from which the webhook is sent.
                                </li>
                                <li>The setting <b>Active webhooks</b> defines what webhooks are active. Enter names of the webhooks separated by commas. Leave it empty to enable all webhooks.</li>
                            </ul>
                            <hr />
                            <h2 id="message-sent">message-sent</h2>
                            <p>Webhook sent when a new message is sent by a user or an agent.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "message-sent",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "user_id": "947",
                                        "conversation_user_id": "947",
                                        "conversation_id": "1057",
                                        "conversation_status": "-1",
                                        "message_id": "2574",
                                        "message": "Hello! How are you?"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="email-sent">email-sent</h2>
                            <p>Webhook sent when a notification email is sent to a user or to an agent.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "email-sent",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "recipient_id": "957",
                                        "message": "Hello! How can I help you?"
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="sms-sent">sms-sent</h2>
                            <p>Webhook sent when a new text message is sent by a user or an agent.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "sms-sent",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "recipent_id": "947",
                                        "message": "Hello! How are you?",
                                        "response": {
                                            "sid": "SM1f0e8ae6ade43cb3c0ce4525424e404f",
                                            "date_created": "Fri, 13 Aug 2010 01:16:24 +0000",
                                            "date_updated": "Fri, 13 Aug 2010 01:16:24 +0000",
                                            "date_sent": null,
                                            "account_sid": "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
                                            "to": "+15305431221",
                                            "from": "+15104564545",
                                            "body": "A Test Message",
                                            "status": "queued",
                                            "flags":["outbound"],
                                            "api_version": "2010-04-01",
                                            "price": null,
                                            "uri": "\/2010-04-01\/Accounts\/ACXXXX\/Messages\/SM1f004f.json"
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="new-messages-received">new-messages-received</h2>
                            <p>Webhook sent when a new message is received.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "new-messages-received",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": [
                                        {
                                            "details": {
                                                "id": "2575",
                                                "user_id": "947",
                                                "message": "Hello! How are you?",
                                                "creation_time": "2020-05-27 08:26:59",
                                                "attachments": "",
                                                "status_code": "0",
                                                "conversation_id": "1057",
                                                "first_name": "Don",
                                                "last_name": "John",
                                                "profile_image": "https://alz-bot.com/user.svg",
                                                "user_type": "user",
                                                "full_name": "Don John"
                                            }
                                        }
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="bot-message">bot-message</h2>
                            <p>Webhook sent when the Dialogflow send a reply to a user message.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "bot-message",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "response": {
                                            "token": "ya29.a0Afkjh8MADFYeT4BgCy3917xqSDdVvw4mgVHrgrLDcgRk9ajWoQAgdjv5e...",
                                            "messages": [
                                                {
                                                    "message": "Hi! How are you doing?"
                                                }
                                            ],
                                            "response": {
                                                "responseId": "46d2c208-2a7f-4ca2-bd7d-6636982b8bee-0f0e27e1",
                                                "queryResult": {
                                                    "queryText": "hi",
                                                    "action": "input.welcome",
                                                    "allRequiredParamsPresent": "true",
                                                    "fulfillmentText": "Hi! How are you doing?",
                                                    "fulfillmentMessages": [
                                                        {
                                                            "text": {
                                                                "text": [
                                                                    "Hi! How are you doing?"
                                                                ]
                                                            }
                                                        }
                                                    ],
                                                    "outputContexts": [
                                                        {
                                                            "name": "projects/api-project-655517752147/agent/sessions...",
                                                            "lifespanCount": "1",
                                                            "parameters": {
                                                                "no-input": "0",
                                                                "no-match": "0"
                                                            }
                                                        }
                                                    ],
                                                    "intent": {
                                                        "name": "projects/api-project-655517752147/agent/intents...",
                                                        "displayName": "Default Welcome Intent"
                                                    },
                                                    "intentDetectionConfidence": "1",
                                                    "languageCode": "en"
                                                },
                                                "alternativeQueryResults": [
                                                    {
                                                        "queryText": "hi",
                                                        "outputContexts": [
                                                            {
                                                                "name": "projects/api-project-655517752147/agent...",
                                                                "parameters": {
                                                                    "no-match": "1",
                                                                    "no-input": "0"
                                                                }
                                                            }
                                                        ],
                                                        "languageCode": "en"
                                                    }
                                                ]
                                            }
                                        },
                                        "message": "Hello",
                                        "conversation_id": 123456
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="message-deleted">message-deleted</h2>
                            <p>Webhook sent when a message is deleted.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "message-deleted",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": "2595"
                                }
                            </pre>
                            <p>
                                The
                                <b>data</b> key contains the ID of the deleted message.
                            </p>
                            <hr />
                            <h2 id="rich-message">rich-message</h2>
                            <p>
                                Webhook sent when the user submits the values inserted in a Rich Message. All the Rich Messages that require the submitting of data fire this Webhook, some of them are the follow-up email form, the registration form, the buttons.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "rich-message",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                            "result": true,
                                            "data": {
                                                "type": "inputs",
                                                "result": {
                                                    "name": [
                                                        "Don Jhon",
                                                        "Name"
                                                    ],
                                                    "your-email": [
                                                        "example@gmail.com",
                                                        "Your Email"
                                                    ],
                                                    "site-url": [
                                                        "www.example.com",
                                                        "Site URL"
                                                    ],
                                                    ...
                                                }
                                            },
                                            "id": "example"
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="Webhook-new-conversation">new-conversation</h2>
                            <p>Webhook sent when a new conversation is received.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "new-conversation-received",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "details": {
                                            "user_id": "947",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "user",
                                            "id": "1057",
                                            "title": "",
                                            "conversation_time": "2020-05-27 08:19:18",
                                            "conversation_status_code": "2",
                                            "department": "",
                                            "agent_id": ""
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="new-conversation-created">new-conversation-created</h2>
                            <p>Webhook sent when a user starts a new conversation.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "new-conversation-created",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "details": {
                                            "user_id": "947",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "user_type": "user",
                                            "id": "1057",
                                            "title": "",
                                            "conversation_time": "2020-05-27 08:19:18",
                                            "conversation_status_code": "2",
                                            "department": "",
                                            "agent_id": ""
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="conversation-status-updated">conversation-status-updated</h2>
                            <p>Webhook sent when the status code of a conversation changes.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "conversation-status-updated",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "conversation_id": "1057",
                                        "status_code": "0"
                                    }
                                }
                            </pre>
                            <p>Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.</p>
                            <hr />
                            <h2 id="webhook-login">login</h2>
                            <p>Webhook sent when a user login successfully from the login form of the chat. This Webhook is sent only if the login is successful.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "login",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "details": {
                                            "id": "948",
                                            "profile_image": "https://alz-bot.com/user.svg",
                                            "first_name": "Don",
                                            "last_name": "John",
                                            "email": "email@example.com",
                                            "user_type": "user",
                                            "token": "9a4642dd232291ad658646bdbb8792c2392bb852"
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="registration">registration</h2>
                            <p>
                                Webhook sent when a user registers successfully from the registration form of the chat. This Webhook is sent only if the registration is successful.
                                This Webhook is sent also if the registration is updated via the registration form of a Rich Message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "registration",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "user": {
                                            "profile_image": [
                                                "https://alz-bot.com/user.svg",
                                                "Profile image"
                                            ],
                                            "first_name": [
                                                "Don",
                                                "First name"
                                            ],
                                            "last_name": [
                                                "John",
                                                "Last name"
                                            ],
                                            "email": [
                                                "example@email.com",
                                                "Email"
                                            ],
                                            "password": [
                                                "12345678",
                                                "Password"
                                            ],
                                            "password-check": [
                                                "12345678",
                                                "Repeat password"
                                            ],
                                            "user_type": [
                                                "user",
                                                ""
                                            ]
                                        },
                                        "extra": {
                                            "phone": [
                                                "+02123456789",
                                                "Phone"
                                            ],
                                            "city": [
                                                "London",
                                                "City"
                                            ],
                                            ...
                                        }
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="user-deleted">user-deleted</h2>
                            <p>Webhook sent when a user is deleted.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "user-deleted",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": "951"
                                }
                            </pre>
                            <p>
                                The
                                <b>data</b> key contains the ID of the deleted user.
                            </p>
                            <h2 id="new-email-address">new-email-address</h2>
                            <p>Webhook sent when a user register his email via the follow-up message or registration form.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "function": "new-email-address",
                                    "key": "xxxxxxxx",
                                    "sender-url": "https://example.com"
                                    "data": {
                                        "name": "John Doe",
                                        "email": "example@email.com"
                                    }
                                }
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