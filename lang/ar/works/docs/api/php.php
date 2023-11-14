<html lang="ar" xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>PHP API | Alz-Bot</title>
    <meta name="description" content="Alz-Bot PHP API documentation area for all platforms, apps and languages." />
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
                                <h4>
                                    <a href="js">JAVASCRIPT API</a>
                                </h4>
                                <h4 class="active">
                                    <a href="#">PHP API</a>
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
                                        <a href="#login">login</a>
                                    </li>
                                    <li>
                                        <a href="#logout">logout</a>
                                    </li>
                                    <li>
                                        <a href="#get_active_user">get_active_user</a>
                                    </li>
                                    <li>
                                        <a href="#get_user">get_user</a>
                                    </li>
                                    <li>
                                        <a href="#get_user_extra">get_user_extra</a>
                                    </li>
                                    <li>
                                        <a href="#get_user_name">get_user_name</a>
                                    </li>
                                    <li>
                                        <a href="#get_users">get_users</a>
                                    </li>
                                    <li>
                                        <a href="#get_new_users">get_new_users</a>
                                    </li>
                                    <li>
                                        <a href="#get_online_users">get_online_users</a>
                                    </li>
                                    <li>
                                        <a href="#get_online_user_ids">get_online_user_ids</a>
                                    </li>
                                    <li>
                                        <a href="#get_users_with_details">get_users_with_details</a>
                                    </li>
                                    <li>
                                        <a href="#get_agents_ids">get_agents_ids</a>
                                    </li>
                                    <li>
                                        <a href="#search_users">search_users</a>
                                    </li>
                                    <li>
                                        <a href="#add_user">add_user</a>
                                    </li>
                                    <li>
                                        <a href="#add_user_and_login">add_user_and_login</a>
                                    </li>
                                    <li>
                                        <a href="#add_new_user_extra">add_new_user_extra</a>
                                    </li>
                                    <li>
                                        <a href="#update_user">update_user</a>
                                    </li>
                                    <li>
                                        <a href="#update_user_value">update_user_value</a>
                                    </li>
                                    <li>
                                        <a href="#update_login">update_login</a>
                                    </li>
                                    <li>
                                        <a href="#delete_user">delete_user</a>
                                    </li>
                                    <li>
                                        <a href="#delete_users">delete_users</a>
                                    </li>
                                    <li>
                                        <a href="#delete_leads">delete_leads</a>
                                    </li>
                                    <li>
                                        <a href="#current_url">current_url</a>
                                    </li>
                                    <li>
                                        <a href="#count_users">count_users</a>
                                    </li>
                                    <li>
                                        <a href="#update_user_to_lead">update_user_to_lead</a>
                                    </li>
                                    <li>
                                        <a href="#slack_users">slack_users</a>
                                    </li>
                                    <li>
                                        <a href="#is_agent">is_agent</a>
                                    </li>
                                    <li>
                                        <a href="#is_supervisor">sb_supervisor</a>
                                    </li>
                                    <li>
                                        <a href="#get_department">get_department</a>
                                    </li>
                                    <li>
                                        <a href="#password_verify">password_verify</a>
                                    </li>
                                    <li>
                                        <a href="#user_autodata">user_autodata</a>
                                    </li>
                                    <li>
                                        <a href="#is_typing">is_typing</a>
                                    </li>
                                    <li>
                                        <a href="#is_agent_typing">is_agent_typing</a>
                                    </li>
                                    <li>
                                        <a href="#set_typing">set_typing</a>
                                    </li>
                                    <li>
                                        <a href="#is_online">is_online</a>
                                    </li>
                                    <li>
                                        <a href="#is_user_online">is_user_online</a>
                                    </li>
                                    <li>
                                        <a href="#agents_online">agents_online</a>
                                    </li>
                                    <li>
                                        <a href="#get_bot_id">get_bot_id</a>
                                    </li>
                                    <li>
                                        <a href="#get_user_from_conversation">get_user_from_conversation</a>
                                    </li>
                                    <li>
                                        <a href="#get_avatar">get_avatar</a>
                                    </li>
                                    <li>
                                        <a href="#get_active_user_ID">get_active_user_ID</a>
                                    </li>
                                    <li>
                                        <a href="#get_user_by">get_user_by</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#conversations">Conversations</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#get_conversation">get_conversation</a>
                                    </li>
                                    <li>
                                        <a href="#get_conversations">get_conversations</a>
                                    </li>
                                    <li>
                                        <a href="#get_new_conversations">get_new_conversations</a>
                                    </li>
                                    <li>
                                        <a href="#get_user_conversations">get_user_conversations</a>
                                    </li>
                                    <li>
                                        <a href="#get_last_conversation_id_or_create">get_last_conversation_id_or_create</a>
                                    </li>
                                    <li>
                                        <a href="#get_new_user_conversations">get_new_user_conversations</a>
                                    </li>
                                    <li>
                                        <a href="#search_conversations">search_conversations</a>
                                    </li>
                                    <li>
                                        <a href="#search_user_conversations">search_user_conversations</a>
                                    </li>
                                    <li>
                                        <a href="#new_conversation">new_conversation</a>
                                    </li>
                                    <li>
                                        <a href="#update_conversation_status">update_conversation_status</a>
                                    </li>
                                    <li>
                                        <a href="#update_conversation_department">update_conversation_department</a>
                                    </li>
                                    <li>
                                        <a href="#set_rating">set_rating</a>
                                    </li>
                                    <li>
                                        <a href="#get_rating">get_rating</a>
                                    </li>
                                    <li>
                                        <a href="#get_new_messages">get_new_messages</a>
                                    </li>
                                    <li>
                                        <a href="#send_message">send_message</a>
                                    </li>
                                    <li>
                                        <a href="#direct_message">direct_message</a>
                                    </li>
                                    <li>
                                        <a href="#messaging_platforms_send_message">messaging_platforms_send_message</a>
                                    </li>
                                    <li>
                                        <a href="#send_slack_message">send_slack_message</a>
                                    </li>
                                    <li>
                                        <a href="#update_message">update_message</a>
                                    </li>
                                    <li>
                                        <a href="#delete_message">delete_message</a>
                                    </li>
                                    <li>
                                        <a href="#close_message">close_message</a>
                                    </li>
                                    <li>
                                        <a href="#text_formatting_to_html">text_formatting_to_html</a>
                                    </li>
                                    <li>
                                        <a href="#clear_text_formatting">clear_text_formatting</a>
                                    </li>
                                    <li>
                                        <a href="#conversation_security_error">conversation_security_error</a>
                                    </li>
                                    <li>
                                        <a href="#set_agent_active_conversation">set_agent_active_conversation</a>
                                    </li>
                                    <li>
                                        <a href="#is_active_conversation_busy">is_active_conversation_busy</a>
                                    </li>
                                    <li>
                                        <a href="#get_agents_in_conversation">get_agents_in_conversation</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#database">Database</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#db_get">db_get</a>
                                    </li>
                                    <li>
                                        <a href="#db_query">db_query</a>
                                    </li>
                                    <li>
                                        <a href="#db_escape">db_escape</a>
                                    </li>
                                    <li>
                                        <a href="#db_json_enconde">db_json_enconde</a>
                                    </li>
                                    <li>
                                        <a href="#db_check_connection">db_check_connection</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#language">Language and translations</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#sb_">sb_</a>
                                    </li>
                                    <li>
                                        <a href="#get_translations">get_translations</a>
                                    </li>
                                    <li>
                                        <a href="#get_translation">get_translation</a>
                                    </li>
                                    <li>
                                        <a href="#save_translations">save_translations</a>
                                    </li>
                                    <li>
                                        <a href="#get_user_language">get_user_language</a>
                                    </li>
                                    <li>
                                        <a href="#get_admin_language">get_admin_language</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#dialogflow">Dialogflow</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#dialogflow_message">dialogflow_message</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_curl">dialogflow_curl</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_get_token">dialogflow_get_token</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_get_agent">dialogflow_get_agent</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_set_active_context">dialogflow_set_active_context</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_create_intent">dialogflow_create_intent</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_batch_intents">dialogflow_batch_intents</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_batch_intents_delete">dialogflow_batch_intents_delete</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_create_entity">dialogflow_create_entity</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_update_entity">dialogflow_update_entity</a>
                                    </li>
                                    <li>
                                        <a href="#dialogflow_get_entity">dialogflow_get_entity</a>
                                    </li>
                                    <li>
                                        <a href="#open_ai_curl">open_ai_curl</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#wordpress">WordPress</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#wp_get_user">wp_get_user</a>
                                    </li>
                                    <li>
                                        <a href="#wp_get_active_user">wp_get_active_user</a>
                                    </li>
                                    <li>
                                        <a href="#wp_synch">wp_synch</a>
                                    </li>
                                    <li>
                                        <a href="#wp_get_user_id">wp_get_user_id</a>
                                    </li>
                                    <li>
                                        <a href="#wp_post">wp_post</a>
                                    </li>
                                    <li>
                                        <a href="#wp_update_uption">wp_update_uption</a>
                                    </li>
                                    <li>
                                        <a href="#wp_get_option">wp_get_option</a>
                                    </li>
                                    <li>
                                        <a href="#wp_site_url">wp_site_url</a>
                                    </li>
                                    <li>
                                        <a href="#wp_language_settings">wp_language_settings</a>
                                    </li>
                                    <li>
                                        <a href="#wp_language_get_page_id">wp_language_get_page_id</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#woocommerce">WooCommerce</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#woocommerce_get_customer">woocommerce_get_customer</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_user_orders">woocommerce_get_user_orders</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_order">woocommerce_get_order</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_product">woocommerce_get_product</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_products">woocommerce_get_products</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_search_products">woocommerce_search_products</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_taxonomies">woocommerce_get_taxonomies</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_attributes">woocommerce_get_attributes</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_product_id_by_name">woocommerce_get_product_id_by_name</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_product_images">woocommerce_get_product_images</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_product_taxonomies">woocommerce_get_product_taxonomies</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_attribute_by_term">woocommerce_get_attribute_by_term</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_attribute_by_name">woocommerce_get_attribute_by_name</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_is_in_stock">woocommerce_is_in_stock</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_coupon">woocommerce_coupon</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_coupon_check">woocommerce_coupon_check</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_coupon_delete_expired">woocommerce_coupon_delete_expired</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_rating">woocommerce_rating</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_url">woocommerce_get_url</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_session">woocommerce_get_session</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_get_session_key">woocommerce_get_session_key</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_payment_methods">woocommerce_payment_methods</a>
                                    </li>
                                    <li>
                                        <a href="#woocommerce_shipping_locations">woocommerce_shipping_locations</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#pusher">Pusher</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#push_notification">push_notification</a>
                                    </li>
                                    <li>
                                        <a href="#pusher_trigger">pusher_trigger</a>
                                    </li>
                                    <li>
                                        <a href="#pusher_get_online_users">pusher_get_online_users</a>
                                    </li>
                                    <li>
                                        <a href="#pusher_agents_online">pusher_agents_online</a>
                                    </li>
                                    <li>
                                        <a href="#pusher_active">pusher_active</a>
                                    </li>
                                    <li>
                                        <a href="#pusher_init">pusher_init</a>
                                    </li>
                                </ul>
                                <h4>
                                    <a href="#more-functions">More functions</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#email">email</a>
                                    </li>
                                    <li>
                                        <a href="#email_send">email_send</a>
                                    </li>
                                    <li>
                                        <a href="#email_piping">email_piping</a>
                                    </li>
                                    <li>
                                        <a href="#send_sms">send_sms</a>
                                    </li>
                                    <li>
                                        <a href="#send_agents_notifications">send_agents_notifications</a>
                                    </li>
                                    <li>
                                        <a href="#get_setting">get_setting</a>
                                    </li>
                                    <li>
                                        <a href="#get_settings">get_settings</a>
                                    </li>
                                    <li>
                                        <a href="#save_settings">save_settings</a>
                                    </li>
                                    <li>
                                        <a href="#get_multilingual_setting">get_multilingual_setting</a>
                                    </li>
                                    <li>
                                        <a href="#is_error">is_error</a>
                                    </li>
                                    <li>
                                        <a href="#is_validation_error">is_validation_error</a>
                                    </li>
                                    <li>
                                        <a href="#isset">isset</a>
                                    </li>
                                    <li>
                                        <a href="#archive_slack_channels">archive_slack_channels</a>
                                    </li>
                                    <li>
                                        <a href="#get_articles">get_articles</a>
                                    </li>
                                    <li>
                                        <a href="#save_articles">save_articles</a>
                                    </li>
                                    <li>
                                        <a href="#search_articles">search_articles</a>
                                    </li>
                                    <li>
                                        <a href="#get_articles_categories">get_articles_categories</a>
                                    </li>
                                    <li>
                                        <a href="#save_articles_categories">save_articles_categories</a>
                                    </li>
                                    <li>
                                        <a href="#article_ratings">article_ratings</a>
                                    </li>
                                    <li>
                                        <a href="#get_versions">get_versions</a>
                                    </li>
                                    <li>
                                        <a href="#update">update</a>
                                    </li>
                                    <li>
                                        <a href="#wp_synch">wp_synch</a>
                                    </li>
                                    <li>
                                        <a href="#wp_update_option">wp_update_option</a>
                                    </li>
                                    <li>
                                        <a href="#app_get_key">app_get_key</a>
                                    </li>
                                    <li>
                                        <a href="#app_activation">app_activation</a>
                                    </li>
                                    <li>
                                        <a href="#csv_users">csv_users</a>
                                    </li>
                                    <li>
                                        <a href="#transcript">transcript</a>
                                    </li>
                                    <li>
                                        <a href="#json_array">json_array</a>
                                    </li>
                                    <li>
                                        <a href="#office_hours">office_hours</a>
                                    </li>
                                    <li>
                                        <a href="#encryption">encryption</a>
                                    </li>
                                    <li>
                                        <a href="#string_slug">string_slug</a>
                                    </li>
                                    <li>
                                        <a href="#curl">curl</a>
                                    </li>
                                    <li>
                                        <a href="#download">download</a>
                                    </li>
                                    <li>
                                        <a href="#download_file">download_file</a>
                                    </li>
                                    <li>
                                        <a href="#csv">csv</a>
                                    </li>
                                    <li>
                                        <a href="#file">file</a>
                                    </li>
                                    <li>
                                        <a href="#clean_data">clean_data</a>
                                    </li>
                                    <li>
                                        <a href="#get_shortcode">get_shortcode</a>
                                    </li>
                                    <li>
                                        <a href="#cron_jobs">cron_jobs</a>
                                    </li>
                                    <li>
                                        <a href="#css">css</a>
                                    </li>
                                    <li>
                                        <a href="#get_notes">get_notes</a>
                                    </li>
                                    <li>
                                        <a href="#add_note">add_note</a>
                                    </li>
                                    <li>
                                        <a href="#delete_note">delete_note</a>
                                    </li>
                                    <li>
                                        <a href="#automations_get">automations_get</a>
                                    </li>
                                    <li>
                                        <a href="#automations_save">automations_save</a>
                                    </li>
                                    <li>
                                        <a href="#automations_validate">automations_validate</a>
                                    </li>
                                    <li>
                                        <a href="#automations_run_all">automations_run_all</a>
                                    </li>
                                    <li>
                                        <a href="#automations_run">automations_run</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 docs">
                        <div id="getting-started">
                            <div class="label label-docs">Getting started</div>
                            <h2 id="usage">Setup and usage</h2>
                            <div class="fixed-area label-fixed">Setup and usage</div>
                            <p>
                                The PHP API supplies a collection of PHP functions that underpin the majority of Alz-Bot functionality.
                                To start using the PHP API follow the steps below.
                            </p>
                            <h4>Usage</h4>
                            <p>
                                Include the file
                                <b>functions.php</b> in your PHP file. The file is located in the
                                <b>include</b> folder of the plugin folder. You're done! You can start using the functions of this documentation.
                            </p>
                            <pre class="prettyprint">
                                require("include/functions.php");
                            </pre>
                            <p>
                                Get the absolute path of your Alz-Bot installation from <b>Settings > Miscellaneous > Get Path</b>. You can also use the variable
                                <b>$_SERVER["DOCUMENT_ROOT"]</b>. Ex.
                                <b>require($_SERVER["DOCUMENT_ROOT"] . "/alz-bot/include/functions.php");</b>
                            </p>
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
                        <hr class="space" />
                        <div id="users">
                            <div class="label label-docs">PHP API</div>
                            <h2>Users</h2>
                            <p>Functions to manage users, agents, and admins.</p>
                            <hr />
                            <h2 id="login">sb_login()</h2>
                            <div class="fixed-area label-fixed">Users</div>
                            <p>
                                Log in a user or an agent. The login can be completed in two ways: via email and password, or user ID and token.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                        </td>
                                        <td>
                                            The email of the user to log in. If this attribute is set you need to set also the password. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>password</pre>
                                        </td>
                                        <td>
                                            The password of the user to log in. If this attribute is set you need to set also the email. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user to log in. If this attribute is set you need to set also the token. Default: empty string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                        </td>
                                        <td>
                                            The token of the user to log in. If this attribute is set you need to set also the user ID.
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
                                The last value is the encrypted login data ready to be stored in the Web Storage of the user' browser.
                                Returns false if the login is unsuccessful.
                            </p>
                            <hr />
                            <h2 id="logout">sb_logout()</h2>
                            <p>
                                Log out the logged-in user, only on the server-side.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">true</pre>
                            <p>
                                This function logout the user only from the server. Use the
                                <b>Javascript API</b> function
                                <b>SBF.logout();</b> to log out the user also in the client-side.
                            </p>
                            <hr />
                            <h2 id="get_active_user">sb_get_active_user()</h2>
                            <p>Returns the user details of the logged-in user.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>db</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to check if the user exists in the database. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>login_app</pre>
                                        </td>
                                        <td>
                                            Encrypted array with the email and password of the logged-in WordPress user.
                                            This argument is used only in the WordPress version. If set, the function returns the logged-in WordPress user.
                                            Use this code to generate the array:
                                            <b>sb_encryption(json_encode(['id' => "", 'email' => ""))</b>.
                                            Default: false.
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
                            <hr />
                            <h2 id="get_user">sb_get_user()</h2>
                            <p>Returns the user details of the given user ID.</p>
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
                                            The ID of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> to get also the extra user details. Default:
                                            <b>false</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
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
                                        },
                                        ...
                                    ]
                                }
                            </pre>
                            <hr />
                            <h2 id="get_user_extra">sb_get_user_extra()</h2>
                            <p>Returns the extra user details of the given user ID, or the requested one.</p>
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
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get_user_name">sb_get_user_name()</h2>
                            <p>Returns the full name of the active user, or the given one.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user</pre>
                                        </td>
                                        <td>
                                            The user object.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>The user name string</p>
                            <h2 id="get_users">sb_get_users()</h2>
                            <p>Returns the user details of all the users.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            <b>JSON</b> format of user types to include in the returned value. Array syntax:
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
                                        <td>String with the search terms.</td>
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
                                        <td>Set it to <b>true</b> to include all users extra details as well. Set it as an array of user extra detail slugs to include only a subset of extra details.  Default: false.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_ids</pre>
                                        </td>
                                        <td>Array of IDs. If set, returns only the users with ID included in the given array of IDs. Default: false.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get_new_users">sb_get_new_users()</h2>
                            <p>Returns the users created after the given date/ID.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>User ID or date and time in the following format: YYYY-MM-DD HH:MM:SS. Ex. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get_online_users">sb_get_online_users()</h2>
                            <p>Returns the online users or the online agents and admins.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [
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
                            </pre>
                            <hr />
                            <h2 id="get_online_user_ids">sb_get_online_user_ids()</h2>
                            <p>Returns an array with the IDs of the online users and agents.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [ 881, 548, 125, ... ]
                            </pre>
                            <hr />
                            <h2 id="get_users_with_details">sb_get_users_with_details()</h2>
                            <p>Returns an array with the user IDs and details of the users who have the requested details.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>details</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of user details. Ex. [ "email", "phone" ].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_ids</pre>
                                        </td>
                                        <td>
                                            Array, or comma-separated string of user IDs. If this argument is set, only the users which have their ID included are returned.
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
                            <h2 id="get_agents_ids">sb_get_agents_ids()</h2>
                            <p>Returns an array with the IDs of Agents.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="search_users">sb_search_users()</h2>
                            <p>Returns the users matching the search.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            String with the search terms. Additional user details are supported too.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="add_user">sb_add_user()</h2>
                            <p>Create a new user.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array with the user details. Array keys and syntax:
                                            <b>[ "profile_image" => "", "first_name" => "", "last_name" => "", "email" => "", "password" => "", "user_type" => "", "department" => "" ]</b>.
                                            Accepted user_type values:
                                            <b>visitor</b>,
                                            <b>lead</b>,
                                            <b>user</b>,
                                            <b>agent</b>,
                                            <b>admin</b>. Default:
                                            <b>visitor</b> if the email is not provided, otherwise,
                                            <b>user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings_extra</pre>
                                        </td>
                                        <td>
                                            Array of additional user details. Array syntax:
                                            <b>["key" => ["value", "Name"], "key" =>  ["value", "Name"], ...]</b>.
                                            Any detail is accepted.
                                            Built-in details (keys):
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>login_app</pre>
                                        </td>
                                        <td>
                                            Encrypted array with the email and password of the logged-in WordPress user.
                                            This argument is used only in the WordPress version. If set, the new user will use the user details of the given WordPress user ID.
                                            Use this code to generate the array:
                                            <b>sb_encryption(json_encode(['id' => "", 'email' => ""))</b>.
                                            Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>hash_password</pre>
                                        </td>
                                        <td>
                                            Set it to <b>false</b> to skip the password hashing. Use this setting if the passowrd is already hashed.
                                            Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                123456
                            </pre>
                            <p>
                                Responses:
                                <b>ID of the new user</b> on success, otherwise,
                                <b>duplicate-email</b>,
                                <b>invalid-user-type</b>,
                                <b>SQL error message</b>.
                            </p>
                            <hr />
                            <h2 id="add_user_and_login">sb_add_user_and_login()</h2>
                            <p>Create a new user, log in it, and returns the login data for the client-side.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <p>
                                This function uses the same arguments of the
                                <a class="scroll-to" href="#add_user">sb_add_user()</a> function.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                This function returns the same response of the
                                <a class="scroll-to" href="#login">sb_login()</a> function.
                            </p>
                            <hr />
                            <h2 id="add_new_user_extra">sb_add_new_user_extra()</h2>
                            <p>Add additional user details to the user of the given ID. Existing user details will not be updated.</p>
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
                                            The ID of the user to update.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                        </td>
                                        <td>
                                            Array of additional user details. Array syntax:
                                            <b>["key" => ["value", "Name"], "key" =>  ["value", "Name"], ...]</b>.
                                            Any detail is accepted.
                                            Built-in details (keys):
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
                            <h2 id="update_user">sb_update_user()</h2>
                            <p>Update the details of an existing user.</p>
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
                                            Enter the ID of the user to update.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array with the user details. Array keys and syntax:
                                            <b>[ "profile_image" => "", "first_name" => "", "last_name" => "", "email" => "", "password" => "", "user_type" => "", "department" => "" ]</b>.
                                            Accepted user_type values:
                                            <b>visitor</b>,
                                            <b>lead</b>,
                                            <b>user</b>,
                                            <b>agent</b>,
                                            <b>admin</b>. Default:
                                            <b>visitor</b> if the email is not provided, otherwise,
                                            <b>user</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>settings_extra</pre>
                                        </td>
                                        <td>
                                            Array of additional user details. Array syntax:
                                            <b>["key" => ["value", "Name"], "key" =>  ["value", "Name"], ...]</b>.
                                            Any detail is accepted.
                                            Built-in details (keys):
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>hash_password</pre>
                                        </td>
                                        <td>
                                            Set it to <b>false</b> to skip the password hashing. Use this setting if the passowrd is already hashed.
                                            Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <p>
                                Other possible responses:
                                <b>duplicate-email</b>,
                                <b>invalid-user-type</b>,
                                <b>SQL error message</b>.
                            </p>
                            <hr />
                            <h2 id="update_user_value">sb_update_user_value()</h2>
                            <p>Update a single detail, or extra detail, of an existing user, agent, or admin.</p>
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
                                            The ID of the user to update.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>slug</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The unique name of the detail. Ex. first_name, email, city, birthday.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The new value of the detail.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The name of the extra detail. Required only if the user detail to update is an extra detail.
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
                            <h2 id="update_login">sb_update_login()</h2>
                            <p>
                                Update the login details of the logged-in user and returns the login data for the client-side.
                                Use the
                                <b>Javascript API</b> function
                                <b>SBF.loginCookie(response);</b> to update the login details also in the client-side, the
                                <b>response</b> is the response data returned by this function.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>profile_image</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The URL of the profile image of the user.
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
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The last name of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The email of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>department</pre>
                                        </td>
                                        <td>
                                            The ID of the department of the user. You can get the IDs from
                                            <b>Settings > Miscellaneous > Departments</b>. No department ID validation is performed, so double-check the department ID to be sure it exists.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                YXNkWGNSeTdtRTdDYVkxVG8wckN4YWF6V2s0Tk1mczBSVHdQbHBpOWdmejVUTTdOUUxEUENhdUVoYmROWn...
                            </pre>
                            <hr />
                            <h2 id="delete_user">sb_delete_user()</h2>
                            <p>Delete a user and all the linked conversations and messages.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                true
                            </pre>
                            <hr />
                            <h2 id="delete_users">sb_delete_users()</h2>
                            <p>Delete multiple users and all the linked conversations and messages.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                true
                            </pre>
                            <hr />
                            <h2 id="delete_leads">sb_delete_leads()</h2>
                            <p>Delete all leads, including all the linked conversations and messages.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="current_url">sb_current_url()</h2>
                            <p>Get or set the current URL of the user or the last visited URL.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                https://alz-bot.com
                            </pre>
                            <p>
                                Return
                                <b>false</b> if the URL is not found. Return
                                <b>true</b> if the
                                <b>url</b> argument is set.
                            </p>
                            <hr />
                            <h2 id="count_users">sb_count_users()</h2>
                            <p>Returns the total users' count grouped by user type.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "all": "335",
                                    "lead": "288",
                                    "user": "15",
                                    "visitor": "28"
                                }
                            </pre>
                            <hr />
                            <h2 id="update_user_to_lead">sb_update_user_to_lead()</h2>
                            <p>Change the user type to lead.</p>
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
                                            The ID of the user.
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
                            <h2 id="slack_users">sb_slack_users()</h2>
                            <p>
                                Returns the agents-slack members' connection information.
                                <b>The Slack App is required.</b>
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
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
                            </pre>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="is_agent">sb_is_agent()</h2>
                            <p>
                                Check if the given user type string is an admin, an agent, or the bot.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user</pre>
                                        </td>
                                        <td>
                                            A Alz-Bot user, or a string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>exclude_bot</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to return false if the active user is the bot. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>exclude_bot</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to return true only if the active user is an administrator. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the user type string is "admin", "agent", or "bot", otherwise return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="is_supervisor">sb_supervisor()</h2>
                            <p>
                                Check if the active admin is the supervisor and return the supervisor settings if true.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return the supervisor settings if the active agent ID is the same of the one set in <b>Settings > Admin > Supervisor > Admin ID</b>, otherwise returns false.
                            </p>
                            <hr />
                            <h2 id="get_department">sb_get_department()</h2>
                            <p>
                                Returns the department of the active user. This function is used in the
                                <b>admin</b> area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns the department ID if set, otherwise, return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="password_verify">sb_password_verify()</h2>
                            <p>
                                Check if the given password matches the given password hash.
                                The password hash is saved in the database in the
                                <b>password</b> column of the
                                <b>sb_users</b> table.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>password</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The password to check.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>hash</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The password hash.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the password matches the hash, otherwise, return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="user_autodata">sb_user_autodata()</h2>
                            <p>
                                Add the following user details to the active user: city, location, country, timezone, currency, browser, browser language, os.
                                These details are generated automatically.
                            </p>
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
                                            The ID of the active user.
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
                            <h2 id="is_typing">sb_is_typing()</h2>
                            <p>
                                Check if a user or an agent is typing a message in a conversation.
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
                            <h2 id="is_agent_typing">sb_is_agent_typing()</h2>
                            <p>
                                Check if an agent is typing a message in a conversation, and returns the agent details.
                            </p>
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
                            <h2 id="set_typing">sb_set_typing()</h2>
                            <p>
                                Assign the typing status to a user or an agent relative to a conversation.
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
                                            The ID of the user or the agent.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of conversation.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>source</pre>
                                        </td>
                                        <td>
                                            Array to set the typing status on external services. Facebook Messenger: ['fb', USER-ID, FB-PAGE-ID].
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
                            <h2 id="is_online">sb_is_online()</h2>
                            <p>
                                Check if the given date and time are recognized as
                                <b>online</b> by Alz-Bot.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Date and time in the following format: YYYY-MM-DD HH:MM:SS. Ex. 2020-05-13 13:35:59. You can remove the time and leave only the date.
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
                            <h2 id="is_user_online">sb_is_user_online()</h2>
                            <p>
                                Check if the user is online. This function is compatible with Pusher and Slack.
                            </p>
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
                                            The user ID.
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
                            <h2 id="agents_online">sb_agents_online()</h2>
                            <p>
                                Check if at least one agent or admin is online.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                <b>true</b> if there are agents or admin online, or
                                <b>false</b> if all Agents are offline.
                            </p>
                            <hr />
                            <h2 id="get_bot_id">sb_get_bot_id()</h2>
                            <p>
                                Returns the ID of the bot.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                123456
                            </pre>
                            <hr />
                            <h2 id="get_user_from_conversation">sb_get_user_from_conversation()</h2>
                            <p>
                                Returns the details of the user, or last agent, of the given conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="get_avatar">sb_get_avatar()</h2>
                            <p>
                                Generate the user profile image by using the first letter of first name, and last name, save the image, and return the image URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="get_active_user_ID">sb_get_active_user_ID()</h2>
                            <p>
                                Returns the ID of the active user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>The User ID.</p>
                            <hr />
                            <h2 id="get_active_user_ID">sb_get_user_by</h2>
                            <p>
                                Return user info by a given field.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>by</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The field. Accepted values: <b>email</b>, <b>first_name</b>, <b>last_name</b>, <b>phone</b>, <b>[exta]</b>. [extra] is any user additional detail slug.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                        </td>
                                        <td>
                                            The value of the field.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "id": "881",
                                    "first_name": "Don",
                                    "last_name": "John",
                                    "email": "example@example.com",
                                    "user_type": "visitor",
                                    "department": null
                                 }
                            </pre>
                        </div>
                        <hr class="space-lg" />
                        <div id="conversations">
                            <div class="label label-docs">PHP API</div>
                            <h2 class="fixed-area">Conversations</h2>
                            <div class="fixed-area label-fixed">Conversations</div>
                            <p>Functions to manage conversations and messages.</p>
                            <hr />
                            <h2 id="get_conversation">sb_get_conversation()</h2>
                            <p>Returns a conversation and the messages of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user linked to the conversation.
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
                                        },
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
                            </pre>
                            <hr />
                            <h2 id="get_conversations">sb_get_conversations()</h2>
                            <p>Returns all the conversations. Each conversation includes the last message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            The status code of the returned conversations. Default: all the conversations in the inbox, excluding conversations in trash and archive.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
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
                                            Returns only the conversations created from the provided source. Available sources: em (Email), tk (Ticket), wa (WhatsApp), fb (Facebook Messenger), ig (Instagram), tw (Twitter), wc (WeChat), tx (Text message), gb (Google Business Messages).
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get_new_conversations">sb_get_new_conversations()</h2>
                            <p>Returns the conversations created after the given date/ID or with a message created after the given date/ID. Each conversation includes the last message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>Conversation ID or date and time in the following format: YYYY-MM-DD HH:MM:SS. Ex. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get_user_conversations">sb_get_user_conversations()</h2>
                            <p>Returns the conversations of a user. Each conversation includes the last message of the conversation.</p>
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
                                            The ID of the user of the conversations to get.
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
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get_last_conversation_id_or_create">sb_get_last_conversation_id_or_create()</h2>
                            <p>Returns the ID of the last user conversation if any, otherwise create a new conversation and returns its ID.</p>
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
                                            The ID of the user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_status_code</pre>
                                        </td>
                                        <td>
                                            The status code of the conversation to create if not conversations are found. Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>The conversation ID</p>
                            <hr />
                            <h2 id="get_new_user_conversations">sb_get_new_user_conversations()</h2>
                            <p>Returns the user conversations created after the given date/ID or with a message created after the given date/ID. Each conversation includes the last message of the conversation.</p>
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
                                            The ID of the user of the conversations to get.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>datetime</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>Conversation ID or date and time in the following format: YYYY-MM-DD HH:MM:SS. Ex. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="search_conversations">sb_search_conversations()</h2>
                            <p>Returns the conversations matching the search terms.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>String with the search terms. The search function supports attachment names, messages of the conversations, user email, and name of a message of the conversation.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="search_user_conversations">sb_search_user_conversations()</h2>
                            <p>Returns the conversations of the active user or given user ID that matches the search terms.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>search</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>String with the search terms. The search function supports attachment names, messages of the conversations, and the conversation title.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The ID of the user. Default: active user ID
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="new_conversation">sb_new_conversation()</h2>
                            <p>Create a new conversation.</p>
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
                                            The title of the conversation. Default: empty string.
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
                            </pre>
                            <p>
                                Other possible responses:
                                <b>Conversation details array</b> on success, otherwise,
                                <b>user-not-found</b>,
                                <b>SQL error message</b>
                            </p>
                            <hr />
                            <h2 id="update_conversation_status">sb_update_conversation_status()</h2>
                            <p>Update the status code of a conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                true
                            </pre>
                            <p>
                                Return
                                <b>invalid-status-code</b> if the status code is invalid.
                            </p>
                            <hr />
                            <h2 id="update_conversation_department">sb_update_conversation_department()</h2>
                            <p>Update the department of a conversation and optionally send an email to all the agents in the new department.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            <b>Settings > Miscellaneous > Departments</b>. No department ID validation is performed, so double-check the department ID to be sure it exists.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message</pre>
                                        </td>
                                        <td>
                                            A message to send to the agents. If set, an email with the message will be sent to all the agents to notify the department change.
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
                            <h2 id="set_rating">sb_set_rating()</h2>
                            <p>Assign a rating to a conversation and optionally update a message of the conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Enter the following array:
                                            <b>[ "settings" => [ "conversation_id" => "ID", "rating" => "RATING" ] ]</b>. Replace
                                            <b>ID</b> with the ID of the conversation to rate, replace
                                            <b>rating</b> with
                                            <b>1</b> for a
                                            <b>positive</b> rating, with
                                            <b>0</b> for a
                                            <b>negative</b> rating.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            The message payload in
                                            <b>JSON</b> format.
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
                                            The user ID of the conversation linked to the message.
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
                            <h2 id="get_rating">sb_get_rating()</h2>
                            <p>Get the ratings of the conversations assigned to an agent.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>The ID of the agent.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [4, 2]
                            </pre>
                            <p>
                                The response array: [count of positive ratings, count of negative ratings].
                                In the example above there are 4 positive ratings and 2 negative ratings.
                            </p>
                            <hr />
                            <h2 id="get_new_messages">sb_get_new_messages()</h2>
                            <p>Returns the messages of a conversation created after the given date/ID.</p>
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
                                        <td>Date and time in the following format: YYYY-MM-DD HH:MM:SS. Ex. 2020-05-13 13:35:59. You can remove the time and leave only the date. The dates stored in the database are in UTC+0.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>last_id</pre>
                                        </td>
                                        <td>ID of the last message, use this parameter to exclude all messages with a lower ID.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="send_message">sb_send_message()</h2>
                            <p>Add a new message to an existing conversation.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>sender_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the user who sends the message.
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
                                            Array of attachments. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: [];
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_status</pre>
                                        </td>
                                        <td>
                                            The status code of the conversation.
                                            Status codes: live = 0, waiting answer from user = 1, waiting answer from agent = 2, archive = 3, trash = 4.
                                            Set it to <b>skip</b> to leave the current conversation status.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            Array of additional information. You can insert any value.
                                            Array syntax:
                                            <b>{ "key": value, "key": value, ... }</b>. Use this attribute to set an
                                            <b>event</b>, available events:
                                            <b>delete-message</b>,
                                            <b>open-chat</b>.
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
                                    "status": "success",
                                    "message-id": 123456,
                                    "queue": false,
                                    "notifications": ["sms", "email"]
                                }
                            </pre>
                            <p>
                                Other possible responses:
                                <b>invalid-status-code</b>,
                                <b>SQL error message</b>. The <b>notifications</b> response include the notifications sent to the user or agents.
                            </p>
                            <hr />
                            <h2 id="direct_message">sb_direct_message()</h2>
                            <p>
                                Sends a direct chat message, email, or text message to a single user, or several users.
                                No email and text message notifications are sent for direct chat message.
                                You need to send the notifications manually via <a class="scroll-to" href="#email">sb_email()</a> and <a class="scroll-to" href="#send_sms">sb_send_sms()</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_ids</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array, or comma-separated string of user IDs to send the message to. Set it to <b>all</b> to send the message to all users.
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
                                            The email subject. Only required for emails.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <h2 id="messaging_platforms_send_message">sb_messaging_platforms_send_message()</h2>
                            <p>
                                Sends a message to the messaging platform linked to the conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
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
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The conversation ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>message_id</pre>
                                        </td>
                                        <td>
                                            The ID of the Alz-Bot message. Use this argument to avoid duplicated messages.
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
                            <h2 id="send_slack_message">sb_send_slack_message()</h2>
                            <p>
                                Sends a message to Slack.
                                <b>The Slack App is required and Slack must be active in the settings area.</b>
                            </p>
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
                                            The URL of the profile image of the sender, it will appear in Slack on the left of the message.
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
                                            The string containing the message.
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
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: [];
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            Conversation ID. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>channel</pre>
                                        </td>
                                        <td>
                                            The Slack channel linked to the message. For performance reasons always include the channel.
                                            You will get the channel after the first call of this function, from the response (example: C011JFFGSKY). Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                ["success", "C011JFFGSKY"]
                            </pre>
                            <p>
                                Other possible responses:
                                <b>slack-not-active</b>,
                                <b>SQL, or cURL error message</b>.
                            </p>
                            <hr />
                            <h2 id="update_message">sb_update_message()</h2>
                            <p>Update an existing message.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            Array of attachments. Array syntax:
                                            <b>[["name", "link"], ["name", "link"], ...]</b>. Replace
                                            <b>name</b> with the name of the attachment and
                                            <b>link</b> with the full URL of the attachment.
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: [];.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>payload</pre>
                                        </td>
                                        <td>
                                            Array of additional information. You can insert any value.
                                            Array syntax:
                                            <b>{ "key": value, "key": value, ... }</b>.
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
                            <h2 id="delete_message">sb_delete_message()</h2>
                            <p>Delete an existing message.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                true
                            </pre>
                            <hr />
                            <h2 id="close_message">sb_close_message()</h2>
                            <p>
                                Sends the close message to a user conversation. The close message' contents can be set in the
                                <b>Settings > Chat > Close message</b> area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the conversation to send the message to.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>bot_id</pre>
                                        </td>
                                        <td>
                                            The ID of the sender user. Usually the bot ID. You can get the bot ID with the function
                                            <b>sb_get_bot_id()</b>;
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "status": "success",
                                    "message-id": 123456
                                }
                            </pre>
                            <hr />
                            <h2 id="text_formatting_to_html">sb_text_formatting_to_html()</h2>
                            <p>
                                Convert the <a href="../#text-editor">text formatting</a> of chat messages to the equivalent HTML codes and returns the message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="clear_text_formatting">sb_clear_text_formatting()</h2>
                            <p>
                                Remove the <a href="../#text-editor">text formatting</a> from a chat messages.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="conversation_security_error">sb_conversation_security_error()</h2>
                            <p>
                                Verify if the active user is authorized to update the conversation. Agents and admins can always update all conversations, users can only update their own conversations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <p>Returns <b>true</b> if the active user is not authorized, otherwise, returns <b>false</b>.</p>
                            <hr />
                            <h2 id="set_agent_active_conversation">sb_set_agent_active_conversation()</h2>
                            <p>
                                Communicate that an agent is replying to a conversation. The conversation is marked as busy for 2 hours if this function is not executed again by the same agent for another conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            <pre>agent_id</pre>
                                        </td>
                                        <td>
                                            The agent ID. Default: active user ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="is_active_conversation_busy">sb_is_active_conversation_busy()</h2>
                            <p>
                                Checks if an agent is replying to a conversation.
                                This function checks if the function <b>sb_set_agent_active_conversation()</b> has been executed for the given conversation
                                by another agent within 2 hours.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>agent_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The agent ID.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>skip</pre>
                                        </td>
                                        <td>
                                            Set it to the active user ID to exclude the active agent from the check. Default: -1.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns <b>true</b> if an agent is replying to the conversation.</p>
                            <hr />
                            <h2 id="get_agents_in_conversation">sb_sb_get_agents_in_conversation()</h2>
                            <p>
                                Returns an array with all the agents with at least one message in the conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                        </div>
                        <hr class="space-lg" />
                        <div id="database">
                            <div class="label label-docs">PHP API</div>
                            <h2>Database</h2>
                            <div class="fixed-area label-fixed">Database</div>
                            <p>Functions to read data from the database and to save data in it.</p>
                            <hr />
                            <h2 id="db_get">sb_db_get()</h2>
                            <p>Returns the data of a SQL query.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>query</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The SQL query.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>single</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>false</b> if the query should returns multiple results. Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                The result of the query as a single value or as an array of values. Return
                                <b>SBError</b> if the query is invalid.
                            </p>
                            <hr />
                            <h2 id="db_query">sb_db_query()</h2>
                            <p>Execute a SQL query to update the data in the database.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>query</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The SQL query.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>return</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>true</b> if the query should returns a value. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b>, the returns value, or
                                <b>SBError</b> if the query is invalid.
                            </p>
                            <hr />
                            <h2 id="db_escape">sb_db_escape()</h2>
                            <p>
                                Escapes special characters in a string for use it in an SQL query.
                                Use this function to escape every variable used in a SQL query containing strings without a known value.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to escape.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the escaped string.</p>
                            <hr />
                            <h2 id="db_json_enconde">sb_db_json_enconde()</h2>
                            <p>
                                Convert an array to JSON and escape the values for use them in an SQL query.
                                Use this function to convert every variable containing arrays that is used in a SQL query.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>array</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The array to convert and escape.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the converted array.</p>
                            <hr />
                            <h2 id="db_check_connection">sb_db_check_connection()</h2>
                            <p>
                                Checks if the database connection is valid or check if the details provided are valid.
                                All arguments are optional. If an argument is not provided will be used the one provided during the installation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The database name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user</pre>
                                        </td>
                                        <td>
                                            The database username.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>password</pre>
                                        </td>
                                        <td>
                                            The database password.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>host</pre>
                                        </td>
                                        <td>
                                            The database host.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The database port.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the connection is valid, otherwise, returns the connection error message.
                            </p>
                        </div>
                        <hr class="space-lg" />
                        <div id="language">
                            <div class="label label-docs">PHP API</div>
                            <h2>Language and Translations</h2>
                            <div class="fixed-area label-fixed">Language and Translations</div>
                            <p>Functions to translate strings in other languages and to manage the translations.</p>
                            <hr />
                            <h2 id="sb_">sb_()</h2>
                            <p>
                                Translate a string to the active user language. Use the function
                                <b>sb_e($string)</b> to translate and
                                <b>echo</b> the string.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
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
                            <h4>Response</h4>
                            <p>Returns the translated string if available, otherwise, returns the original string.</p>
                            <hr />
                            <h2 id="get_translations">sb_get_translations()</h2>
                            <p>
                                Returns the translations of the back-end and the front-end, for all the available languages.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "ar": {
                                        "name": "Arabic",
                                        "front": {
                                            "Activities": "أنشطة",
                                            "All": "الكل",
                                            ...
                                        },
                                        "admin": {
                                            "A conversation was started by": "",
                                            "Activate": "",
                                            ...
                                        },
                                        "admin/js": {
                                            "Add new user": "",
                                            "Add translation": "",
                                            ...
                                        },
                                        "admin/settings": {
                                            "Active for agents": "",
                                            "Active for users": "",
                                            ...
                                        }
                                    },
                                    "da": {
                                        "name": "Danish",
                                        "front": {
                                            "Activities": "Aktiviteter",
                                            "All": "Alle",
                                            ...
                                        },
                                        ...
                                    },
                                    ...
                                }
                            </pre>
                            <hr />
                            <h2 id="get_translation">sb_get_translation()</h2>
                            <p>
                                Returns the translations of the back-end and the front-end of a single language.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "name": "Arabic",
                                    "front": {
                                        "Activities": "أنشطة",
                                        "All": "الكل",
                                        ...
                                    },
                                    "admin": {
                                        "A conversation was started by": "",
                                        "Activate": "",
                                        ...
                                    },
                                    "admin/js": {
                                        "Add new user": "",
                                        "Add translation": "",
                                        ...
                                    },
                                    "admin/settings": {
                                        "Active for agents": "",
                                        "Active for users": "",
                                        ...
                                    }
                                }
                            </pre>
                            <hr />
                            <h2 id="save_translations">sb_save_translations()</h2>
                            <p>
                                Save the translations and overwrite the translations files.
                                Warning! If the given translations array is corrupted you could corrupt the translations files.
                                Make a backup of the translations folder (
                                <b>\resources\languages\</b>) first.
                                Each time a translation is saved a backup is created automatically in the
                                <b>uploads</b> folder.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>translations</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The translations array with all the translations. Use the function
                                            <b>sb_get_translations()</b> to get it.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">true</pre>
                            <hr />
                            <h2 id="get_user_language">sb_get_user_language()</h2>
                            <p>Returns the active language code used by the user. By default, it's the user browser language.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user from whom you want to get the language. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                The language code. Examples:
                                <b>es</b>,
                                <b>it</b>.
                            </p>
                            <hr />
                            <h2 id="get_admin_language">sb_get_admin_language()</h2>
                            <p>Returns the language code of the admin area relative to the active user.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the agent or admin from whom you want to get the language. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                The language code. Examples:
                                <b>es</b>,
                                <b>it</b>.
                            </p>
                        </div>
                        <hr class="space-lg" />
                        <div id="dialogflow">
                            <div class="label label-docs">PHP API</div>
                            <h2>Dialogflow</h2>
                            <div class="fixed-area label-fixed">Dialogflow</div>
                            <p>
                                Dialogflow App functions to manage the chatbot and more.
                                <b>The Dialogflow App is required to use this set of APIs.</b>
                            </p>
                            <hr />
                            <h2 id="dialogflow_message">sb_dialogflow_message()</h2>
                            <p>
                                Sends a message to Dialogflow and add the Dialogflow response to an existing conversation as a new message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The content of the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>token</pre>
                                        </td>
                                        <td>
                                            Dialogflow Session Token(it's not the Refresh Token). Pass it if you have it, otherwise it will be generated. For performance reasons always include this token.
                                            You will get the token after the first call of this function, from the response. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language code. Default: main agant language code.
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
                                            <b>link</b> with the full URL of the attachment. Dialogflow can read this array. Default: [].
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
                                    <tr>
                                        <td>
                                            <pre>project_id</pre>
                                        </td>
                                        <td>
                                            Set it to change the default Dialogflow agent.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "token": "ya29.a0AfH6SMB5Y04TwKvxeah5pCEtcupfncTOLMlewxlnUAhH5H4HE4SVIeOPWSfxRVfHNcJIoR-IvRTtrEe4P9VXHa",
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
                                                "name": "projects/api-project-655517752147/agent/intents/fe275c2e-f39d-4db3-92c2-e55582ce38fb",
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
                            </pre>
                            <p>
                                Other possible responses:
                                <b>dialogflow-not-active</b>,
                                <b>SQL, or cURL error message</b>.
                            </p>
                            <hr />
                            <h2 id="dialogflow_curl">sb_dialogflow_curl()</h2>
                            <p>
                                Sends data to Dialogflow. Use this function to submit the queries to Dialogflow.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>url_part</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The Dialogflow API partial URL. Examples:
                                            <b>/agent/entityTypes</b>,
                                            <b>/agent/intents:batchUpdate</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>query</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The Dialogflow query in JSON format or as array.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language code. Default: main agant language code.
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
                                            The Dialogflow Session Token(it's not the Refresh Token). Pass it if you have it, otherwise it will be generated. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns the Dialogflow response in associative array format. More details at
                                <a href="https://cloud.google.com/dialogflow/es/docs/reference/rest/v2-overview" target="_blank" rel="nofollow">https://cloud.google.com/dialogflow/es/docs/reference/rest/v2-overview</a>
                            </p>
                            <hr />
                            <h2 id="dialogflow_get_token">sb_dialogflow_get_token()</h2>
                            <p>Generate a new Dialogflow Token and returns it. The token is valid for 1 hour.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                ya27.a1AfH6SMDu9dn0TfRbNVAIEsSoeJPD1_jr1JpfL15...
                            </pre>
                            <hr />
                            <h2 id="dialogflow_get_agent">sb_dialogflow_get_agent()</h2>
                            <p>Returns the details of the Dialogflow agent.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "parent": "projects/woocommerce-abcde",
                                    "displayName": "ABCDE",
                                    "defaultLanguageCode": "en",
                                    "timeZone": "Europe/Madrid",
                                    "enableLogging": true,
                                    "matchMode": "MATCH_MODE_HYBRID" ,
                                    "classificationThreshold": 0.6,
                                    "apiVersion": "API_VERSION_V2",
                                    "tier": "TIER_STANDARD"
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow_set_active_context">sb_dialogflow_set_active_context()</h2>
                            <p>Activate a Dialogflow context in the active user session.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            <pre>parameters</pre>
                                        </td>
                                        <td>
                                            Array of Dialogflow parameters linked to the context. Example:
                                            <b>['woocommerce-products' => 'Running Shoes']</b>. The array can be also a string in JSON format.
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
                                            The Dialogflow refresh token.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of the user linked to the context. Default: active user.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The agent language. Default: active user language.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "responseId": "4f6912db-71ac-41e1-b006-088b7647cb59-fddac234",
                                   "queryResult":{
                                      "queryText": "sb-trigger-context",
                                      "parameters":{
                                         "any": "sb-trigger-context"
                                      },
                                      "allRequiredParamsPresent":true,
                                      "fulfillmentMessages":[
                                         {
                                            "text":{
                                               "text":[
                                                  ""
                                               ]
                                            }
                                         }
                                      ],
                                      "outputContexts":[
                                         {
                                            "name": "projects/abcde/agent/sessions/244/contexts/abcde",
                                            "lifespanCount":1,
                                            "parameters":{
                                               "woocommerce-products": "",
                                               "any": "sb-trigger-context",
                                               "any.original": "sb-trigger-context"
                                            }
                                         }
                                      ],
                                      "intent":{
                                         "name": "projects/abcd/agent/intents/abcde",
                                         "displayName": "woocommerce-waiting-list"
                                      },
                                      "intentDetectionConfidence":0.6,
                                      "languageCode": "en"
                                   }
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow_create_intent">sb_dialogflow_create_intent()</h2>
                            <p>
                                Create a new Dialogflow Intent. The Intent will be linked to the Dialogflow agent synchronized in the admin area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            The language code of the intent. Default: main agent language. For the language codes list visit
                                            <a href="https://cloud.google.com/dialogflow/docs/reference/language" target="_blank" rel="nofollow">cloud.google.com/dialogflow/docs/reference/language</a>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="dialogflow_batch_intents">sb_dialogflow_batch_intents()</h2>
                            <p>Create multiple Dialogflow Intents and allow a deeper customization than the sb_dialogflow_create_intent() function.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>intents</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of Intents. Each Intent must be a
                                            <b>SBDialogflowIntent</b> object.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language code. Default: main agant language code.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "name": "projects/woocommerce-app-rojq/operations/bg-f0adhdc5-a1a1-472b-a06c-15559a12cfc7",
                                   "done":true,
                                   "response":{
                                      "@type": "type.googleapis.com/google.cloud.dialogflow.v2.BatchUpdateIntentsResponse",
                                      "intents":[
                                         {
                                            "name": "projects/abcde/agent/intents/abcde",
                                            "displayName": "Cart details",
                                            "priority":500000,
                                            "outputContexts":[
                                               {
                                                  "name": "projects/abcde/agent/sessions/-/contexts/abcde",
                                                  "lifespanCount":5
                                               }
                                            ],
                                            "messages":[
                                               {
                                                  "text":{
                                                     "text":[
                                                        "Hi there!"
                                                     ]
                                                  }
                                               }
                                            ]
                                         },
                                         ...
                                      ]
                                   }
                                }
                            </pre>
                            <hr />
                            <h2 id="dialogflow_batch_intents_delete">sb_dialogflow_batch_intents_delete()</h2>
                            <p>Delete multiple Intents at once.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>intents</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of Intents. Each Intent must be a
                                            <b>SBDialogflowIntent</b> object. You can get the existing Intents with the function
                                            <b>sb_dialogflow_curl('/agent/intents?pageSize=1000', '', '', 'GET')</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h2 id="dialogflow_create_entity">sb_dialogflow_create_entity()</h2>
                            <p>Create a new Dialogflow Entity.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>entity_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The Entity unique name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>values</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            <b>SBDialogflowEntity</b> object or array of Entity values. Single value syntax:
                                            <b>['value' => '', 'synonyms' => ['', '', ...]]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language code. Default: main agant language code.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> on success, otherwise returns the Dialogflow error response.
                            </p>
                            <hr />
                            <h2 id="dialogflow_update_entity">sb_dialogflow_update_entity()</h2>
                            <p>Update an existing Dialogflow Entity.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>entity_id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The Entity ID. You can get this value with the function
                                            <b>sb_dialogflow_get_entity()</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>values</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            <b>SBDialogflowEntity</b> object or array of Entity values. Single value syntax:
                                            <b>['value' => '', 'synonyms' => ['', '', ...]]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language code. Default: main agant language code.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> on success, otherwise returns the Dialogflow error response.
                            </p>
                            <hr />
                            <h2 id="dialogflow_get_entity">sb_dialogflow_get_entity()</h2>
                            <p>Returns a Dialogflow Entity, or all Entities of the agent.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>entity_id</pre>
                                        </td>
                                        <td>
                                            The ID of the Entity. Leave empty or insert
                                            <b>all</b> to get all Entities. Default: all.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The Dialogflow agent language code. Default: main agant language code.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                   {
                                      "name": "projects/small-talk-43da7/agent/entityTypes/t5td1425-2k13-16cc-a7bb-f119b8d94112a",
                                      "displayName": "woocommerce-products",
                                      "kind": "KIND_MAP",
                                      "autoExpansionMode": "AUTO_EXPANSION_MODE_DEFAULT",
                                      "entities":[
                                         {
                                            "value": "Abstract Print Cotton Blouse",
                                            "synonyms":[
                                               "Abstract Print Cotton Blouse"
                                            ]
                                         },
                                         {
                                            "value": "Cashmere Carpenter Beanie",
                                            "synonyms":[
                                               "Cashmere Carpenter Beanie"
                                            ]
                                         },
                                         ...
                                      ],
                                      "enableFuzzyExtraction":true
                                   }
                                ]
                            </pre>
                            <hr />
                            <h2 id="open_ai_curl">sb_open_ai_curl()</h2>
                            <p>Call the OpenAI API (ChatGPT) and return the response.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            The parameters of the API.
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
                            <p>Returns the openAI response. More details at <a href="https://beta.openai.com/docs/api-reference/" target="_blank" rel="nofollow">https://beta.openai.com/docs/api-reference/</a>.</p>
                        </div>
                        <hr class="space-lg" />
                        <div id="wordpress">
                            <div class="label label-docs">PHP API</div>
                            <h2>WordPress</h2>
                            <div class="fixed-area label-fixed">WordPress</div>
                            <p>
                                WordPress functions.
                            </p>
                            <hr />
                            <h2 id="wp_get_user">sb_wp_get_user()</h2>
                            <p>
                                Returns the details of a WordPress user.
                            </p>
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
                                            The WordPress user ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "id": 123,
                                   "first_name": "Don",
                                   "last_name": "John",
                                   "email": "email@example.com",
                                   "password": "$P$BcCpYeU21wYnXKW2LpJj/F9xRdSmLM/"
                                }
                            </pre>
                            <p>
                                Returns
                                <b>false</b> if no user was found.
                            </p>
                            <hr />
                            <h2 id="wp_get_active_user">sb_wp_get_active_user()</h2>
                            <p>
                                Get the currently active WordPress user and register it as a Alz-Bot user. If a Alz-Bot user is currently active, update it with the WordPress details.
                                After the registration the user is logged-in. Returns the login details and encrypted data of the Alz-Bot user.
                            </p>
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
                                            The currently active WordPress user ID.
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
                            <hr />
                            <h2 id="wp_synch">sb_wp_synch()</h2>
                            <p>
                                Syncronize the WordPress users with the Alz-Bot users. If Ultimate Membership Pro App is installed, the syncronization imports also the additional users details.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="wp_get_user_id">sb_wp_get_user_id()</h2>
                            <p>
                                Returns the user ID of the WordPress user with the given email.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>email</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The user email.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                1234
                            </pre>
                            <p>
                                Returns
                                <b>false</b> if no user was found.
                            </p>
                            <hr />
                            <h2 id="wp_post">sb_wp_post()</h2>
                            <p>
                                Save a new WordPress post (page, post, ...). This function is equivalent to
                                <a href="https://developer.wordpress.org/reference/functions/wp_insert_post/" target="_blank" rel="nofollow">wp_insert_post()</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>post_title</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The post title.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>post_content</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The post content.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>post_type</pre>
                                        </td>
                                        <td>
                                            The post type. Ex.: page, post.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the ID of new post.</p>
                            <hr />
                            <h2 id="wp_update_uption">sb_wp_update_option()</h2>
                            <p>
                                Create or update a WordPress option. This function is equivalent to
                                <a href="https://developer.wordpress.org/reference/functions/update_option/" target="_blank" rel="nofollow">update_option()</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The option name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The option value.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the ID of new option.</p>
                            <hr />
                            <h2 id="wp_get_option">sb_wp_get_option()</h2>
                            <p>
                                Returns the value of a WordPress option. This function is equivalent to
                                <a href="https://developer.wordpress.org/reference/functions/get_option/" target="_blank" rel="nofollow">get_option()</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The option name.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the option value, or <b>false</b> if no option with given name was found.</p>
                            <hr />
                            <h2 id="wp_get_image">sb_wp_get_image()</h2>
                            <p>
                                Returns the URL of the image with the given ID. This function is equivalent to
                                <a href="https://developer.wordpress.org/reference/functions/wp_get_attachment_image_src/" target="_blank" rel="nofollow">wp_get_attachment_image_src()</a>.
                            </p>
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The WordPress image ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                https://example.com/image.jpg
                            </pre>
                            <p>Returns an <b>empty string</b> if no image with the given ID was found.</p>
                            <hr />
                            <h2 id="wp_site_url">sb_wp_site_url()</h2>
                            <p>
                                Returns the website URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                https://www.example.com
                            </pre>
                            <hr />
                            <h2 id="wp_language_settings">sb_wp_language_settings()</h2>
                            <p>
                                Returns the languages settings of WordPress.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>plugin</pre>
                                        </td>
                                        <td>
                                            The multilingual plugin name. Default: the plugin set at <b>Settings > WordPress > Multilingual plugin</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "default": "en",
                                    "languages": [
                                        "en",
                                        "de",
                                        "it"
                                    ],
                                    "post-types": [
                                        "attachment",
                                        "wp_block",
                                        "product",
                                        "product_variation",
                                        "food",
                                        "post",
                                        "page"
                                    ],
                                    "taxonomies": [
                                        "translation_priority",
                                        "product_cat",
                                        "product_tag",
                                        "product_shipping_class",
                                        "pa_colore-prodotti",
                                        "pa_taglia-prodotti",
                                        "category",
                                        "post_tag"
                                    ],
                                    "link-type": "3",
                                    "plugin": "wpml"
                                }
                            </pre>
                            <hr />
                            <h2 id="wp_language_get_page_id">sb_wp_language_get_page_id()</h2>
                            <p>
                                Returns the translated page ID of the given page ID.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The page ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the translated page ID if the translation is found, otherwise returns the given ID.</p>
                        </div>
                        <hr class="space-lg" />
                        <div id="woocommerce">
                            <div class="label label-docs">PHP API</div>
                            <h2>WooCommerce</h2>
                            <div class="fixed-area label-fixed">WooCommerce</div>
                            <p>
                                WooCommerce App functions.
                                <b>The WooCommerce App is required to use this set of APIs.</b>
                            </p>
                            <hr />
                            <h2 id="woocommerce_get_customer">sb_woocommerce_get_customer()</h2>
                            <p>
                                Returns the details of a WooCommerce customer.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>session_key</pre>
                                        </td>
                                        <td>
                                            The customer session key. You can get this value with the function
                                            <a href="#woocommerce_get_session_key">sb_woocommerce_get_session_key()</a>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                   "customer_id": "1",
                                   "user_id":null,
                                   "username": "",
                                   "first_name": "Don",
                                   "last_name": "John",
                                   "email": "email@example.com",
                                   "date_last_active": "2020-08-03 07:21:18",
                                   "date_registered":null,
                                   "country": "UK",
                                   "postcode": "E14HR",
                                   "city": "London",
                                   "state": ""
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_user_orders">sb_woocommerce_get_user_orders()</h2>
                            <p>
                                Returns an array with the orders summary of the user. Use the function
                                <b>sb_woocommerce_get_last_order()</b> to get only the last order of the user.
                            </p>
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
                                            The user ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "id": "602",
                                        "date": "2020-10-19 14:02:35",
                                        "total": "0",
                                        "status": "wc-on-hold",
                                    },
                                    {
                                        "id": "601",
                                        "date": "2020-10-18 14:02:35",
                                        "total": "0",
                                        "status": "wc-processing",
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_order">sb_woocommerce_get_order()</h2>
                            <p>
                                Returns the details of an order.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_product">sb_woocommerce_get_product()</h2>
                            <p>
                                Returns the details of a product.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                    "id": "53",
                                    "name": "Sony Play Station 5",
                                    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elite...",
                                    "price": "19",
                                    "image": "https://example.com/image.jpg",
                                    "rating": "",
                                    "url": "https://example.com/?p=53"
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_products">sb_woocommerce_get_products()</h2>
                            <p>
                                Returns the products matching the given query if any, otherwise returns all products.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                                    <b>true</b> to returns only the products in promotion.
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
                                [
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
                            </pre>
                            <hr />
                            <h2 id="woocommerce_search_products">sb_woocommerce_search_products()</h2>
                            <p>
                                Returns the products matching the search.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [
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
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_taxonomies">sb_woocommerce_get_taxonomies()</h2>
                            <p>
                                Returns the WooCommerce product categories or tags.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [
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
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_attributes">sb_woocommerce_get_attributes()</h2>
                            <p>
                                Returns the WooCommerce product attributes and attribute terms.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            Set it to
                                            <b>terms</b> to returns only the terms name of all attributes, and to
                                            <b>attribute</b> to returns only the attributes name. Default: all.
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
                            </pre>
                            <h5>Terms</h5>
                            <pre class="prettyprint lang-json">
                                [
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
                            </pre>
                            <h5>Attributes</h5>
                            <pre class="prettyprint lang-json">
                                [
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
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_product_id_by_name">sb_woocommerce_get_product_id_by_name()</h2>
                            <p>
                                Search a product by name and returns its ID.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <p>
                                Returns the product ID, or
                                <b>false</b> if no products with the given name are found.
                            </p>
                            <hr />
                            <h2 id="woocommerce_get_product_images">sb_woocommerce_get_product_images()</h2>
                            <p>
                                Returns an array with the images of a product.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [
                                    "https://example.com/image.jpg",
                                    "https://example.com/image.jpg",
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_product_taxonomies">sb_woocommerce_get_product_taxonomies()</h2>
                            <p>
                                Returns the categories and tags of a product.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [
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
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_attribute_by_term">sb_woocommerce_get_attribute_by_term()</h2>
                            <p>
                                Returns the attribute of an attribute term.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                    "id": "1",
                                    "name": "Color",
                                    "slug": "pa_color"
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_attribute_by_name">sb_woocommerce_get_attribute_by_name()</h2>
                            <p>
                                Search an attribute by its name and returns it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                    "id": "1",
                                    "name": "Color",
                                    "slug": "pa_color"
                                }
                            </pre>
                            <hr />
                            <h2 id="woocommerce_is_in_stock">sb_woocommerce_is_in_stock()</h2>
                            <p>
                                Check if a product is in stock.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <p>
                                Return
                                <b>true</b> if the product is available, otherwise return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="woocommerce_coupon">sb_woocommerce_coupon()</h2>
                            <p>
                                Generate a coupon and returns the coupon code.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [ "fxsocl3490oq", "50" ]
                            </pre>
                            <p>[ coupon code, discount value ]</p>
                            <hr />
                            <h2 id="woocommerce_coupon_check">sb_woocommerce_coupon_check()</h2>
                            <p>
                                Check if there are coupons linked to the given user.
                            </p>
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
                                            The user ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns
                                <b>true</b> if there are coupons linked to the user, otherwise returns
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="woocommerce_coupon_delete_expired">sb_woocommerce_coupon_delete_expired()</h2>
                            <p>
                                Delete all expired coupons. This function runs automatically every hour via cron jobs.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="woocommerce_rating">sb_woocommerce_rating()</h2>
                            <p>
                                Calculate and returns the average rating.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>rating</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of ratings. Get this value from the
                                            <b>rating</b> value of a product.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                4.56
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_url">sb_woocommerce_get_url()</h2>
                            <p>
                                Returns a WooCommerce URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <p>
                                Returns the
                                <b>URL</b> if found, otherwise returns an empty string.
                            </p>
                            <hr />
                            <h2 id="woocommerce_get_session">sb_woocommerce_get_session()</h2>
                            <p>
                                Returns the session variable of a user. The session variable contains the user cart details and more.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>session_key</pre>
                                        </td>
                                        <td>
                                            The session key of a user. Get it with the function
                                            <a href="#woocommerce_get_session_key">sb_woocommerce_get_session_key()</a>. Default: active user session key.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
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
                            </pre>
                            <hr />
                            <h2 id="woocommerce_get_session_key">sb_woocommerce_get_session_key()</h2>
                            <p>
                                Returns the session key of a user.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The user ID. Default: active user ID.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns the
                                <b>session key</b> if found, otherwise returns
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="woocommerce_payment_methods">sb_woocommerce_payment_methods()</h2>
                            <p>
                                Returns the available payment methods of the shop.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    "Direct bank transfer",
                                    "Check payments",
                                    "Cash on delivery",
                                    "Alipay",
                                    "Multibanco",
                                    "Credit Card (Stripe)"
                                ]
                            </pre>
                            <hr />
                            <h2 id="woocommerce_shipping_locations">sb_woocommerce_shipping_locations()</h2>
                            <p>
                                Returns the shop shipping locations, or check if the shop ships to a specific location.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                [
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
                            </pre>
                            <p>
                                The last array value is
                                <b>true</b> if the shop does not ship to the returned countries.
                            </p>
                        </div>
                        <hr class="space-lg" />
                        <div id="pusher">
                            <div class="label label-docs">PHP API</div>
                            <h2>Pusher</h2>
                            <div class="fixed-area label-fixed" data-parent="#more-functions">More functions</div>
                            <p>
                                List of functions for Pusher. More details at
                                <a href="https://pusher.com/" target="_blank" rel="nofollow">pusher.com</a>.
                            </p>
                            <hr />
                            <h2 id="push_notification">sb_push_notification()</h2>
                            <p>
                                Sends a Push notification to an agent, user, or all agents.
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
                                    <tr>
                                        <td>
                                            <pre>user_id</pre>
                                        </td>
                                        <td>
                                            The ID of user who sent the message.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>attachments</pre>
                                        </td>
                                        <td>
                                            Message attachments to show the image preview. Syntax: <b>[["name", "url"], ...]</b>.
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
                            <h2 id="pusher_trigger">sb_pusher_trigger()</h2>
                            <p>
                                Trigger an avent on a Pusher channel.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="pusher_get_online_users">sb_pusher_get_online_users()</h2>
                            <p>
                                Returns the array of IDs of online users and agents subscribed to the presence channel.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
                                    {
                                        "id": "1538"
                                    },
                                    {
                                        "id": "1758"
                                    },  
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="pusher_agents_online">sb_pusher_agents_online()</h2>
                            <p>
                                Check if there is at least one agent online by checking the presence channel.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                <b>true</b> if online,
                                <b>false</b> if offline.
                            </p>
                            <hr />
                            <h2 id="pusher_active">sb_pusher_active()</h2>
                            <p>
                                Check if Pusher is active in Settings > Miscellneous > Pusher.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                <b>true</b> if active,
                                <b>false</b> otherwise.
                            </p>
                            <hr />
                            <h2 id="pusher_init">sb_pusher_init()</h2>
                            <p>
                                Initialize the Pusher PHP SDK.
                            </p>
                        </div>
                        <hr class="space-lg" />
                        <div id="more-functions">
                            <div class="label label-docs">PHP API</div>
                            <h2>More functions</h2>
                            <div class="fixed-area label-fixed" data-parent="#more-functions">More functions</div>
                            <p>Various functions that perform different tasks.</p>
                            <hr />
                            <h2 id="email">sb_email()</h2>
                            <p>
                                Sends an email to an existing user using the email templates, and settings, of the
                                <b>Settings > Notifications</b> area. The email is translated automatically.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            <b>JSON</b> format. Array syntax:
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
                                            The ID of the sender user. Default: active user ID.
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
                            <h2 id="email_send">sb_email_send()</h2>
                            <p>
                                Sends a generic email to an email address. The sender email and name are the ones set in <b>Settings > Notifications > Email settings</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="email_piping">sb_email_piping()</h2>
                            <p>
                                Runs the email piping synchronization with Alz-Bot and converts emails to chat messages.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="send_sms">sb_send_sms()</h2>
                            <p>
                                Sends a text message to a user or agent. If the template argument is true, the message is translated automatically.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="send_agents_notifications">sb_send_agents_notifications()</h2>
                            <p>
                                Sends all the agent notifications: email notification, push notification, and SMS notification.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
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
                                    <tr>
                                        <td>
                                            <pre>bottom_message</pre>
                                        </td>
                                        <td>
                                            Additional message to append at the end of the email notification.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>conversation_id</pre>
                                        </td>
                                        <td>
                                            The ID of the conversation linked to the message. If this value is not set the notifications are sent to all agents.
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
                                            It's up to you to upload attachments to a remote server, this argument only accepts the URL of the files already uploaded.
                                            Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>user</pre>
                                        </td>
                                        <td>
                                            User of the conversation as array of user details.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>extra</pre>
                                        </td>
                                        <td>
                                            Array of values.
                                            Enter the value <b>force: true</b> to force the notifications also if the agent is online.
                                            Enter the value <b>email: [email_content]</b> to send a different message only for the email notification.
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
                            <h2 id="get_setting">sb_get_setting()</h2>
                            <p>
                                Returns a setting of the settings area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <p>
                                Returns the
                                <b>value</b> of the setting.
                            </p>
                            <hr />
                            <h2 id="get_settings">sb_get_settings()</h2>
                            <p>Returns an array with all the settings.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
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
                            </pre>
                            <hr />
                            <h2 id="save_settings">sb_save_settings()</h2>
                            <p>
                                Save the chat settings. This function overwrite all settings with the given ones.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>settings</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of settings. You can get the array of the current settings with the function
                                            <a href="#get_settings" class="scroll-to">sb_get_settings()</a>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>external_settings</pre>
                                        </td>
                                        <td>
                                            Array of additional settings.
                                            Each value of the array is saved in a new row of the table
                                            <b>sb_settings</b> of the database. Default [].
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>external_settings_translations</pre>
                                        </td>
                                        <td>
                                            Array of translations of the external settings.
                                            Each language of the array is saved in a new row of the table
                                            <b>sb_settings</b> of the database.
                                            Array syntax:
                                            <b>[ "es" => [], "it" => [], ...]</b>
                                            Default [].
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
                            <h2 id="get_multilingual_setting">sb_get_multilingual_setting()</h2>
                            <p>
                                Returns the translated value a multilingual and multi values setting of the settings area.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the setting. Set it to <b>emails</b> to get the emails settings.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>sub_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The ID of the sub setting. Ex. <b>email-agent</b>. Get the list of all IDs from the file <b>resources/json/settings.json</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>language</pre>
                                        </td>
                                        <td>
                                            The language code.
                                            If there are no translations for the given language code, or if it's set to <b>false</b> or <b>en</b>, the default language is returned instead.
                                            Default: false.
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
                            <h2 id="is_error">sb_is_error()</h2>
                            <p>
                                Check if a variable is of type
                                <b>SBError</b>. Use the method
                                <b>$error->code()</b> to get the error code, the method
                                <b>$result->function_name()</b> to get the function name that generated the error, the method
                                <b>$result->message()</b> to get the error message.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>object</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The variable to check.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the variable is of type
                                <b>SBError</b>, otherwise, return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="is_validation_error">sb_is_validation_error()</h2>
                            <p>
                                Check if a variable is of type
                                <b>SBValidationError</b>. Use the method
                                <b>$error->code()</b> to get the error code.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>object</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The variable to check.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the variable is of type
                                <b>SBValidationError</b>, otherwise, return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="isset">sb_isset()</h2>
                            <p>Check if an array key exists and returns its value only if it exists and if it isn't an empty string.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>array</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The array in which to look for the key.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>key</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The key to search.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>default</pre>
                                        </td>
                                        <td>
                                            The value to returns if the key is not found or if it's empty. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns the value of the key or the default value.
                            </p>
                            <hr />
                            <h2 id="archive_slack_channels">sb_archive_slack_channels()</h2>
                            <p>
                                Archive all the Slack channels.
                                If you have a lot of channels, this operation may take a long time to complete and you could need to execute it again multiple times.
                                Important: All of your slack channels will be archived.
                                <b>The Slack App is required.</b>
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="get_articles">sb_get_articles()</h2>
                            <p>
                                Returns an array with all the articles or a single article.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>

                                    <tr>
                                        <td>
                                            <pre>id</pre>
                                        </td>
                                        <td>
                                            The ID of the article. Add multiple IDs separated by commas. To get the article IDs execute this function without any argument. Default: false.
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
                                            Set it to true to get full-length articles contents. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>categories</pre>
                                        </td>
                                        <td>
                                            Boolean. Set it to true to get the array of all categories. If true the response is a double array, first item articles, second item categories.
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
                                [
                                    {
                                        "id": "6P2Oq",
                                        "title": "What's new with the API V2?p",
                                        "content": "The API V2 is the new iteration of o ...",
                                        "link": "https://alz-bot.com"
                                        "categories": ["ols85"]
                                    },
                                    {
                                        "id": "qf7kD"
                                        "title": "Should I move to the new API?",
                                        "content": "Yes. The newest version (V2) of the Actions ...",
                                        "link": "https://alz-bot.com",
                                        "categories": []
                                    },
                                    ...
                                ]
                            </pre>
                            <p>Single article response</p>
                            <pre class="prettyprint lang-json">
                                {
                                    "id": "6P2Oq",
                                    "title": "What's new with the API V2?p",
                                    "content": "The API V2 is the new iteration of our developer API. The new API integrates...",
                                    "link": "https://alz-bot.com",
                                    "categories": ["ols85"]
                                }
                            </pre>
                            <hr />
                            <h2 id="save_articles">sb_save_articles()</h2>
                            <p>
                                Save all the articles. This function replaces all the existing articles with the articles of the given array.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>articles</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The array with the articles. Use the function
                                            <b>sb_get_articles()</b> to get the articles array.
                                            Array syntax:
                                            <pre>[["id" => "", "title" => "", "content" => "", "link" => ""] , ["title" => "", "content" => "", "link" => "", "id" => ""], ...]</pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>categories</pre>
                                        </td>
                                        <td>
                                            Array of category IDs. Set it to <b>delete_all</b> to delete all categories.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>translations</pre>
                                        </td>
                                        <td>
                                            The array with the articles translations. Use the function
                                            <b>sb_get_articles()</b> to get the articles array.
                                            Array syntax:
                                            <pre>[ "es" => [["id" => "", "title" => "", "content" => "", "link" => ""], ...], "it" => [...], ...]</pre>
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
                            <h2 id="search_articles">sb_search_articles()</h2>
                            <p>Returns the articles matching the search.</p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
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
                                [
                                    {
                                        "id": "6P2Oq",
                                        "title": "What's new with the API V2?p",
                                        "content": "The API V2 is the new iteration of o ...",
                                        "link": "https://alz-bot.com",
                                        "categories": ["ols85"]
                                    },
                                    {
                                        "id": "qf7kD"
                                        "title": "Should I move to the new API?",
                                        "content": "Yes. The newest version (V2) of the Actions ...",
                                        "link": "https://alz-bot.com",
                                        "categories": []
                                    },
                                    ...
                                ]
                            </pre>
                            <hr />
                            <h2 id="get_articles_categories">sb_get_articles_categories()</h2>
                            <p>
                                Returns an array with all the articles categories.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [
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
                            </pre>
                            <hr />
                            <h2 id="save_articles_categories">sb_save_articles_categories()</h2>
                            <p>
                                Save or update the articles categories array.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>categories</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array of categories. Array syntax:
                                            <b>[ { "id": "123456", "title": "Category name" }, { "id": "123456", "title": "Category name" }, ...]</b>.
                                            Get the existing categories array with the function
                                            <a href="#get_articles_categories">get_articles_categories()</a>.
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
                            <h2 id="article_ratings">sb_article_ratings()</h2>
                            <p>
                                Get the ratings of an article or add a new rating to it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                            negative one. If this argument is set the function adds the rating, otherwise returns the existing ratings. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                [-1, 1, 1, -1, ...]
                            </pre>
                            <p>Returns <b>true</b> if the <b>rating</b> argument is set.</p>
                            <hr />
                            <h2 id="get_versions">sb_get_versions()</h2>
                            <p>Returns the installed version of Alz-Bot and the Apps.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "sb": "3.0.4",
                                    "dialogflow": "1.0.2",
                                    "slack": "1.0.3"
                                }
                            </pre>
                            <hr />
                            <h2 id="update">sb_update()</h2>
                            <p>Start the update of Alz-Bot and all the apps. This function forces the update and always overwrite all plugin and apps files.</p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                success
                            </pre>
                            <hr />
                            <h2 id="wp_synch">sb_wp_synch()</h2>
                            <p>
                                Start the synchronization of the WordPress users and import the new WordPress users into Alz-Bot.
                                <b>This function is available only in the WordPress version.</b>
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                true
                            </pre>
                            <hr />
                            <h2 id="wp_update_option">sb_wp_update_option()</h2>
                            <p>
                                Save an option to the wp_options table. This function is equivalent to the WordPress function update_option().
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The option name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>value</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The option value.
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
                            <h2 id="app_get_key">sb_app_get_key()</h2>
                            <p>
                                Returns the License Key of a Alz-Bot App like the Slack App or the Dialogflow App.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>app_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert one of the following values:
                                            <b>
                                                slack
                                            </b>,
                                            <b>
                                                dialogflow
                                            </b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                9300AB16-014ZEE12-91E199EA-997CEX40
                            </pre>
                            <hr />
                            <h2 id="app_activation">sb_app_activation()</h2>
                            <p>
                                Activate an app, download it, and install it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>app_name</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Insert one of the following values:
                                            <b>
                                                slack
                                            </b>,
                                            <b>
                                                dialogflow
                                            </b>.
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
                                success
                            </pre>
                            <hr />
                            <h2 id="csv_users">sb_csv_users()</h2>
                            <p>
                                Export all the users in a CSV file and returns the URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns the
                                <b>URL</b> of the CSV file.
                            </p>
                            <hr />
                            <h2 id="transcript">sb_transcript()</h2>
                            <p>
                                Export a conversation in a CSV or TXT file and returns the URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <p>
                                Returns the
                                <b>URL</b> of the CSV file.
                            </p>
                            <hr />
                            <h2 id="json_array">sb_json_array()</h2>
                            <p>
                                Convert a JSON string to an array.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>json</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The JSON string.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>default</pre>
                                        </td>
                                        <td>
                                            The value to returns if the conversion is unsuccessful. Default: [].
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns a PHP array if the conversion is successful, otherwise, returns the default value.</p>
                            <hr />
                            <h2 id="office_hours">sb_office_hours()</h2>
                            <p>
                                Check if the current time is within the office hours.
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Return
                                <b>true</b> if the current time is within the office hours, otherwise, return
                                <b>false</b>.
                            </p>
                            <hr />
                            <h2 id="encryption">sb_encryption()</h2>
                            <p>
                                Encrypt a string or decrypt an encrypted string.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>string</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to encrypt or decrypt.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>encrypt</pre>
                                        </td>
                                        <td>
                                            Set it to <b>false</b> to decrypt. Default: true.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the encrypted string or the decrypted string.</p>
                            <hr />
                            <h2 id="string_slug">sb_string_slug()</h2>
                            <p>
                                Convert a string to a slug or a slug to a string. When converting a string to a slug all spaces are converted to
                                <b>-</b> and all chars are in
                                <b>lowercase</b>. When converting a slug to a string all the occurrences of the chat
                                <b>-</b> are converted to spaces and the first chat is in
                                <b>uppercase</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>string</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The string to convert.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>action</pre>
                                        </td>
                                        <td>
                                            Insert
                                            <b>slug</b> to convert a string to a slug, insert
                                            <b>string</b> to convert a slug to a string. Default: "slug".
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>Returns the slug or the converted string.</p>
                            <hr />
                            <h2 id="curl">sb_curl()</h2>
                            <p>
                                Sends data to a URL to get a
                                <b>JSON</b> response.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>url</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The destination URL that will receive the data.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>post_fields</pre>
                                        </td>
                                        <td>
                                            Array with the attributes. It can be an array, example:
                                            <b>["attribute" => "value", "attribute" => "value", ...]</b>. It can be a string containing an array in
                                            <b>JSON</b> format.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>header</pre>
                                        </td>
                                        <td>
                                            The HTTP header. It is usually an array like
                                            <b>["Content-Type: application/json", "Content-Length: 123456"]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>method</pre>
                                        </td>
                                        <td>
                                            The HTTP method. Default: POST.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns a PHP array with the data of the JSON array returned by the server.
                            </p>
                            <hr />
                            <h2 id="download">sb_download()</h2>
                            <p>
                                Returns the data of a URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>URL</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The destination URL.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                The file or the data returned by the server.
                            </p>
                            <hr />
                            <h2 id="download_file">sb_download_file()</h2>
                            <p>
                                Download a file, save it in the uploads folder, and return the URL.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>URL</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The destination URL.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>file_name</pre>
                                        </td>
                                        <td>
                                            The file name of the saved file. Default: original file name.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>mime</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to retrieve the file extension automatically. Set it to a mime type string to assign the mime extension to the file name.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                The URL of the file saved in the uploads folder.
                            </p>
                            <hr />
                            <h2 id="csv">sb_csv()</h2>
                            <p>
                                Create a CSV file from an array.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>items</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array containing the data to save in the CSV file. It must be a basic array, each item is a new row in the CSV file.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>header</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            Array containing the header elements. Example:
                                            <b>["ID", "First Name", "Last Name", "Email"]</b>.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>filename</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The name of the CSV file.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <p>
                                Returns the URL of the CSV file. The file is saved into the
                                <b>uploads</b> folder. By default, it's located in the
                                <b>alz-bot</b> plugin folder or in the
                                <b>wp-content/uploads</b> folder if you're using the WordPress version.
                            </p>
                            <hr />
                            <h2 id="file">sb_file()</h2>
                            <p>
                                Create a new file containing the given content and save it in the destination path.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <pre>path</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The file system destination path, the file will be saved there.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>content</pre>
                                            <label>Required</label>
                                        </td>
                                        <td>
                                            The content of the file.
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
                            <h2 id="clean_data">sb_clean_data()</h2>
                            <p>
                                This function performs the following tasks:
                                delete visitors older than 24h, delete messages in trash older than 30 days,
                                archive conversation older than 24h with status code equal to 0 or 1 (waiting an answer from the user or without any user reply).
                            </p>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">true</pre>
                            <hr />
                            <h2 id="cron_jobs">sb_cron_jobs()</h2>
                            <p>
                                Run the cron jobs.
                            </p>
                            <hr />
                            <h2 id="get_shortcode">sb_get_shortcode()</h2>
                            <p>
                                Convert a shortcode into an array containing the shortcode name and the shortcode settings.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
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
                                    <tr>
                                        <td>
                                            <pre>name</pre>
                                        </td>
                                        <td>
                                            The shortcode name. Example: inputs. Default: false.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <pre>type</pre>
                                        </td>
                                        <td>
                                            Set it to <b>merge</b> if the shortcode is a merge field like <b>{}</b>.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-json">
                                {
                                    "shortcode": "[rating title="Rate your conversation" message="Tell us your experience." success="Thank you!"]",
                                    "shortcode_name": "rating",
                                    "title": "Rate your conversation",
                                    "message": "Tell us your experience.",
                                    "success": "Thank you!"
                                }
                            </pre>
                            <hr />
                            <h2 id="cron_jobs">sb_cron_jobs()</h2>
                            <p>
                                Check the cron jobs and run them if the date and time matchs the job time.
                            </p>
                            <hr />
                            <h2 id="css">sb_css()</h2>
                            <p>
                                Returns or echos the CSS style for the chat colors.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                                    <tr>
                                        <td>
                                            <pre>return</pre>
                                        </td>
                                        <td>
                                            Set it to <b>true</b> to return the code instead of echo it. Default: false.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr class="space-sm" />
                            <h4>Response</h4>
                            <pre class="prettyprint lang-html">The CSS code</pre>
                            <hr />
                            <h2 id="get_notes">sb_get_notes()</h2>
                            <p>
                                Returns the internal notes of a conversation.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="add_note">sb_add_note()</h2>
                            <p>
                                Add a new internal note.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="delete_note">sb_delete_note()</h2>
                            <p>
                                Delete an internal note.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="automations_get">sb_automations_get()</h2>
                            <p>
                                Returns all automations.
                            </p>
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
                            <h2 id="automations_save">sb_automations_save()</h2>
                            <p>
                                Save all automations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="automations_validate">sb_automations_validate()</h2>
                            <p>
                                Validate an automations.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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
                            <h2 id="automations_run_all">sb_automations_run_all()</h2>
                            <p>
                                Validate all automations, execute the valid ones, and returns the automations with client-side conditions, invalid server-side conditions, and popup, design automations.
                            </p>
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
                            <h2 id="automations_run">sb_automations_run()</h2>
                            <p>
                                Execute a single automation and optionally validate it before executing it.
                            </p>
                            <hr class="space-sm" />
                            <h4>Arguments</h4>
                            <table class="table table-border docs-table api-table">
                                <tbody>
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