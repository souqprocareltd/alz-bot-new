<html lang="ar" xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Use cases | API | Alz-Bot</title>
    <meta name="description" content="Alz-Bot Use cases API documentation area for all platforms, apps and languages." />
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
                                <h4>
                                    <a href="php">PHP API</a>
                                </h4>
                                <h4 class="active">
                                    <a href="#">USE CASES</a>
                                </h4>
                                <hr />
                                <ul>
                                    <li>
                                        <a href="#registration-init">Register custom user</a>
                                    </li>
                                    <li>
                                        <a href="#selective-display">Selective chat displaying</a>
                                    </li>
                                    <li>
                                        <a href="#click-show">Display the chat on click</a>
                                    </li>
                                    <li>
                                        <a href="#click-display">Display and hide the chat on click</a>
                                    </li>
                                    <li>
                                        <a href="#auto-departments">Auto departments</a>
                                    </li>
                                    <li>
                                        <a href="#agent-conversation">Assign conversation to agent</a>
                                    </li>
                                    <li>
                                        <a href="#force-conversation">Force a specific conversation</a>
                                    </li>
                                    <li>
                                        <a href="#force-department">Force a specific department</a>
                                    </li>
                                    <li>
                                        <a href="#force-agent">Force a specific agent</a>
                                    </li>
                                    <li>
                                        <a href="#new-message">New message</a>
                                    </li>
                                    <li>
                                        <a href="#popup-scroll">Popup on scroll</a>
                                    </li>
                                    <li>
                                        <a href="#wp-admin-chat">Chat in WordPress admin area</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 docs">
                        <div id="getting-started">
                            <div class="label label-docs">Examples</div>
                            <h2 id="usage">Use cases</h2>
                            <p>
                                Use cases are real-world API examples.
                                They can be a combination of different languages, APIs, and settings. They are built to complete specific tasks.
                            </p>
                        </div>
                        <hr />
                        <div id="registration-init">
                            <h2>Register a custom user and log in it</h2>
                            <p>
                                This use case explains how to manually register a custom user and log-in it before starting the chat.
                                You can register a new user in four ways, JS VARIABLE, PHP API, JS API and PHP + JS + WEB. JS VARIABLE, PHP API and PHP + JS + WEB API are the recommended methods.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                JS VARIABLE
                            </h4>
                            <p>
                                Just Enter the variable <b>SB_DEFAULT_USER</b>. More details <a href="js#variables">here</a>.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                PHP API
                            </h4>
                            <hr class="space-xs" />
                            <h4>
                                <b class="number">1</b> Register the user and login it
                            </h4>
                            <p>
                                Check if an active user is already logged-in by checking the email, if yes, login it, otherwise register a new user.
                            </p>
                            <pre class="prettyprint">
                                require_once($_SERVER["DOCUMENT_ROOT"] . "/alz-bot/include/functions.php");
                                $active_user = sb_get_active_user();
                                if (!$active_user || $active_user["email"] != "don.john@email.com") {
                                    $response = sb_add_user_and_login([ "profile_image" => "https://alz-bot.com/media/docs/user.png", "first_name" => "Don", "last_name" => "John", "email" => "don.john@email.com", "password" => "12345678"], ["phone" => ["123456789", "Phone"], "city" => ["London", "City"]]);
                                    if ($response == "duplicate-email") {
                                        $response = sb_login("don.john@email.com", "12345678");
                                    }
                                }
                            </pre>
                            <hr class="space-sm" />
                            <h4>
                                PHP + JS + WEB API
                            </h4>
                            <hr class="space-xs" />
                            <h4>
                                <b class="number">1</b> Enable the manual initialization
                            </h4>
                            <p>
                                Go to
                                <b>Settings > Chat</b>, check the option
                                <b>Manual initialization</b>, and save.
                            </p>
                            <hr class="space-xs" />
                            <h4>
                                <b class="number">2</b> Print the JS code to register the user and login it
                            </h4>
                            <p>
                                Generate a JS code to insert into all the pages containing the chat.
                                The code checks if an active user is already logged in, if yes, log in it, otherwise register a new user. The code also provides the details to log in an existing user.
                            </p>
                            <pre class="prettyprint">
                                $existing_user_email = 'don.john@email.com';
                                $sb_user = alz-bot_curl(['function' => 'get-user-by', 'by' => 'email', 'value' => $existing_user_email]);
                                $code_login_existing_user = '';
                                if (isset($sb_user['success']) && $sb_user['success']) {
                                   $sb_user = $sb_user['response']; 
                                   $code_login_existing_user = 'SBF.login("", "", "' . $sb_user['id'] . '", "' . $sb_user['token'] . '", () => { SBChat.initChat(); });';
                                }  
                                $code = 'jQuery(document).on("SBReady", function () {
                                            SBF.getActiveUser(true, () => {
                                                if (!SBF.activeUser() || (SBF.activeUser().email != "' . $existing_user_email . '")) {
                                                    SBF.ajax({
                                                        function: "add-user-and-login",
                                                        settings: { profile_image: "https://alz-bot.com/media/docs/user.png", first_name: "Don", last_name: "John", email: "don.john@email.com" },
                                                        settings_extra: { phone: ["123456789", "Phone"], city: ["London", "City"] }
                                                    }, (response) => {
                                                        if (!SBF.errorValidation(response)) {
                                                            SBF.loginCookie(response[1]);
                                                            SBF.activeUser(new SBUser(response[0]));
                                                            SBChat.initChat();
                                                        } else if (response[1] == "duplicate-email") {
                                                           ' . $code_login_existing_user . '
                                                        } else {
                                                            SBChat.initChat();
                                                        }
                                                     });
                                                  }
                                              });
                                          });';
                                echo $code;
                            </pre>
                            <hr class="space-sm" />
                            <h4>
                                JAVASCRIPT API
                            </h4>
                            <hr class="space-xs" />
                            <h4>
                                <b class="number">1</b> Enable the manual initialization
                            </h4>
                            <p>
                                Go to
                                <b>Settings > Chat</b>, check the option
                                <b>Manual initialization</b>, and save.
                            </p>
                            <h4>
                                <b class="number">2</b> Register the user and login it
                            </h4>
                            <p>
                                Check if an active user is already logged-in, if yes, login it, otherwise register a new user.
                                <b class="warning">Warning!</b> This method is not secure, password and user details are visible to everyone.
                            </p>
                            <pre class="prettyprint">
                                jQuery(document).on("SBReady", function () {
                                    SBF.getActiveUser(true, () => {
                                        if (!SBF.activeUser() || (SBF.activeUser().email != "don.john@email.com")) {
                                            SBF.ajax({
                                                function: "add-user-and-login",
                                                settings: { profile_image: "https://alz-bot.com/media/docs/user.png", first_name: "Don", last_name: "John", email: "don.john@email.com", password: "12345678" },
                                                settings_extra: { phone: ["123456789", "Phone"], city: ["London", "City"] }
                                            }, (response) => {
                                                if (!SBF.errorValidation(response)) {
                                                    SBF.loginCookie(response[1]);
                                                    SBF.activeUser(new SBUser(response[0]));
                                                    SBChat.initChat();
                                                } else if (response[1] == "duplicate-email") {
                                                    SBF.login("don.john@email.com", "12345678", "", "", () => { SBChat.initChat(); });
                                                } else console.log(response);
                                            });
                                        } else {
                                            SBChat.initChat();
                                        }
                                    });
                                });
                            </pre>
                        </div>
                        <hr />
                        <div id="selective-display">
                            <h2>Display the chat only on specific pages</h2>
                            <p>This use case explains how to display the chat only on specific pages.</p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Enable the manual initialization
                            </h4>
                            <p>
                                Go to
                                <b>Settings > Chat</b>, check the option
                                <b>Manual initialization</b>, and save.
                            </p>
                            <h4>
                                <b class="number">2</b> Initialize the chat
                            </h4>
                            <p>
                                Initialize the chat with the function
                                <a href="js#initChat" target="_blank">
                                    <b>SBChat.initChat()</b>
                                </a> of the
                                <b>
                                    JavaScript API
                                </b>. You can use the JS variable
                                <b>window.location.href</b> to get the URL and display the chat only if the URL matches your criteria.
                            </p>
                            <pre class="prettyprint">
                                $(document).on("SBReady", function () {
                                    // Example: display the chat only on the contact page
                                    if (window.location.href.indexOf("/contact") > 0) {
                                        SBChat.initChat();
                                    }

                                    // Example: display the chat only on the home page
                                    if (window.location.href == "https://example.com") {
                                        SBChat.initChat();
                                    }
                                });
                            </pre>
                        </div>
                        <hr />
                        <div id="click-show">
                            <h2>Display the chat on click</h2>
                            <p>This use case explains how to display the chat only after the user click a button.</p>
                            <h4>
                                <b class="number">1</b> Enable manual initialization and auto opening
                            </h4>
                            <p>
                                Enable the options
                                <b>Settings > Chat > Manual initialization</b>,
                                <b>Settings > Chat > Open automatically</b>, and save the changes.
                            </p>
                            <h4>
                                <b class="number">2</b> Display the chat
                            </h4>
                            <p>
                                Use the function
                                <b>SBChat.initChat()</b> to display the chat. You can use it as a link with the code
                                <b>javascript:SBChat.initChat()</b>. To open the chat on mobile devices you need to use also the function <b>SBChat.open()</b>. Example:
                            </p>
                            <pre class="prettyprint">
                                &lt;a href="javascript:SBChat.initChat();SBChat.open()">Click here&lt;/a>
                            </pre>
                        </div>
                        <hr />
                        <div id="click-display">
                            <h2>Display and hide the chat on click</h2>
                            <p>This use case explains how to display the chat only after the user click a button, and hide it again when the user close it.</p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Enable the manual initialization
                            </h4>
                            <p>
                                Go to
                                <b>Settings > Chat</b>, check the option
                                <b>Manual initialization</b>, and save.
                            </p>
                            <h4>
                                <b class="number">2</b> Add the click events code
                            </h4>
                            <p>
                                The first click event shows the chat, the second hide it. Replace
                                <b>button-id</b> with the ID of your HTML button or element.
                            </p>
                            <pre class="prettyprint">
                                $("body").on("click", "#button-id", function () {
                                    SBChat.initChat();
                                    $(".sb-chat-btn").show();
                                    setTimeout(function () {
                                        SBChat.open();
                                     }, 500);
                                });

                                $("body").on("click", ".sb-chat .sb-chat-btn", function () {
                                    $(this).hide();
                                });
                            </pre>
                        </div>
                        <hr />
                        <div id="auto-departments">
                            <h2>Create a new conversation and assign a department to it</h2>
                            <p>
                                This use case explains how to create a new conversation, assign a department to it, and open it in the chat.
                                If you want that all the conversations are automatically assigned to a fixed department use the JavaScript variable
                                <b>SB_DEFAULT_DEPARTMENT</b>. You can get the IDs from
                                <b>Settings > Miscellaneous > Departments</b>.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Create a new conversation, and open it
                            </h4>
                            <p>
                                Create a new conversation with the function
                                <a href="js#newConversation" target="_blank">
                                    <b>SBChat.newConversation()</b>
                                </a> of the
                                <b>
                                    JavaScript API
                                </b> and pass the department ID 2 in the function' arguments. After the conversation is created, it's opened with the function
                                <a href="js#openConversation" target="_blank">
                                    <b>SBChat.openConversation()</b>
                                </a>. In the code snippet below, the conversation is created only if the user has no other conversations.
                            </p>
                            <pre class="prettyprint">
                                $(document).on("SBInit", function () {
                                    if (SBF.activeUser() != false && SBF.activeUser().conversations.length == 0) {
                                        SBChat.newConversation(2, -1, "", [], 2, null, function (conversation) {
                                            SBChat.openConversation(conversation.id);
                                        });
                                    }
                                });
                            </pre>
                        </div>
                        <hr />
                        <div id="agent-conversation">
                            <h2>Create a new conversation and assign it to an agent</h2>
                            <p>
                                This use case explains how to create a new conversation, assign an existing agent to it,
                                and allow only that agent to see the conversation in the administration area.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Enable the routing
                            </h4>
                            <p>
                                Go to
                                <b>Settings > Miscellaneous</b>, check the option
                                <b>Routing</b>, and save.
                            </p>
                            <h4>
                                <b class="number">2</b> Create a new conversation, and open it
                            </h4>
                            <p>
                                Create a new conversation with the function
                                <a href="js#newConversation" target="_blank">
                                    <b>SBChat.newConversation()</b>
                                </a> of the
                                <b>
                                    JavaScript API
                                </b> and pass the agent ID 445 in the function' arguments. After the conversation is created, it's opened with the function
                                <a href="js#openConversation" target="_blank">
                                    <b>SBChat.openConversation()</b>
                                </a>.
                            </p>
                            <pre class="prettyprint">
                                $(document).on("SBInit", function () {
                                    if (SBF.activeUser() != false && SBF.activeUser().conversations.length == 0) {
                                        SBChat.newConversation(2, -1, "", [], null, 445, function (conversation) {
                                            SBChat.openConversation(conversation.id);
                                        });
                                    }
                                });
                            </pre>
                        </div>
                        <hr />
                        <div id="force-conversation">
                            <h2>Force a specific conversation</h2>
                            <p>
                                This use case explains how to set a specific conversation when a condition becomes valid and forces the user to use only such conversation until the condition remains valid.
                                The below code uses the conversation title to understand what is the right conversation to use, it searches for the specific conversation by using its title, if it's found, it's opened, otherwise, a new conversation with the searched title is created.
                                This use case can be used in different scenarios, for example, if you want to force the user to use a different conversation for different pages.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Insert this JavaScript code in your website
                            </h4>
                            <pre class="prettyprint">
                                (function ($) {
                                    jQuery(document).on("SBInit", function () {
                                        let conversation_title = "CONVERSATION-NAME";
                                        let conversations = SBF.activeUser().conversations;
                                        if (conversations) {
                                            for (var i = 0; i &lt; conversations.length; i++) {
                                                if (conversations[i].get("title") == conversation_title) {
                                                    SBChat.openConversation(conversations[i].id);
                                                    return;
                                                }
                                            }
                                        }
                                        SBF.ajax({
                                            function: "new-conversation",
                                            title: conversation_title
                                        }, (response) => {
                                            SBChat.setConversation(new SBConversation([], response["details"]));
                                        });
                                    });
                                }(jQuery));
                            </pre>
                            <p>
                                Replace
                                <b>CONVERSATION-NAME</b> with the unique ID of the conversation you want to use.
                            </p>
                            <p>
                                If you're using the tickets area repalce
                                <b>SBInit</b> with
                                <b>SBTicketsInit</b>.
                            </p>
                        </div>
                        <hr />
                        <div id="force-department">
                            <h2>Force a specific department</h2>
                            <p>
                                This use case explains how to assign a specific department to a conversation when a condition becomes valid and forces the user to use only such conversation until the condition remains valid.
                                The code below searches for a conversation with the desidered department, if it's found, it's opened, otherwise, a new conversation assigned to that department is created.
                                This use case forces the user to use a different conversations and departments for different pages.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Insert this JavaScript code in your website
                            </h4>
                            <pre class="prettyprint">
                                (function ($) {
                                    jQuery(document).on("SBInit", function () {
                                        let active_department = "YOUR-DEPARTMENT-ID";
                                        let conversations = SBF.activeUser().conversations;
                                        SBChat.default_department = active_department
                                        if (conversations) {
                                            for (var i = 0; i < conversations.length; i++) {
                                                if (conversations[i].get("department") == active_department) {
                                                    setTimeout(() => { SBChat.openConversation(conversations[i].id) }, 300);
                                                    return;
                                                }
                                            }
                                        }
                                        SBChat.open(false);
                                        SBF.ajax({
                                            function: "new-conversation",
                                            department: active_department
                                        }, (response) => {
                                            SBChat.setConversation(new SBConversation([], response["details"]));
                                        });
                                    });
                                }(jQuery));
                            </pre>
                            <p>
                                Replace
                                <b>YOUR-DEPARTMENT-ID</b> with the ID of the department you want to use.
                            </p>
                            <p>
                                If you're using the tickets area repalce
                                <b>SBInit</b> with
                                <b>SBTicketsInit</b>.
                            </p>
                        </div>
                        <hr />
                        <div id="force-agent">
                            <h2>Force a specific agent</h2>
                            <p>
                                This use case explains how to assign a specific agent to a conversation when a condition becomes valid and forces the user to use only such conversation until the condition remains valid.
                                The code below searches for a conversation with the desidered agent, if it's found, it's opened, otherwise, a new conversation assigned to that agent is created.
                                This use case forces the user to use a different conversations and agents for different pages.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Insert this JavaScript code in your website
                            </h4>
                            <pre class="prettyprint">
                                (function ($) {
                                    if (typeof SB_DEFAULT_AGENT != 'undefined') {
                                         jQuery(document).on("SBInit", function () {
                                            if (!SBF.activeUser()) return;
                                            let conversations = SBF.activeUser().conversations;
                                            if (conversations) {
                                                for (var i = 0; i < conversations.length; i++) {
                                                    if (conversations[i].get("agent_id") == SB_DEFAULT_AGENT) {
                                                        setTimeout(() => { SBChat.openConversation(conversations[i].id) }, 300);
                                                        return;
                                                    }
                                                }
                                            }
                                            $('.sb-list').sbLoading(true);
                                            SBChat.open(false);
                                            SBF.ajax({
                                                function: "new-conversation",
                                                agent_id: SB_DEFAULT_AGENT
                                            }, (response) => {
                                                SBChat.clear();
                                                $('.sb-list').sbLoading(false);
                                                SBChat.setConversation(new SBConversation([], response["details"]));
                                            });
                                        });
                                    }
                                }(jQuery));
                            </pre>
                            <p>
                                In each of your pages Enter the code <b>&lt;script>var SB_DEFAULT_AGENT = 123&lt;/script></b> and change the agent ID with the one you want.
                            </p>
                            <p>
                                If you're using the tickets area repalce
                                <b>SBInit</b> with
                                <b>SBTicketsInit</b>.
                            </p>
                        </div>
                        <hr />
                        <div id="new-message">
                            <h2>Send a new message and open the chat</h2>
                            <p>
                                This use case explains how to send a new message, and open the chat after the message has been sent.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Send the message and open the chat
                            </h4>
                            <p>
                                Check if the same message is already in the conversation with the method
                                <a href="js#sendMessage" target="_blank">
                                    <b>searchMessages()</b>
                                </a> of the
                                <b>
                                    JavaScript API
                                </b>.
                                If the message is not in the conversation send a new message with the function
                                <a href="js#sendMessage" target="_blank">
                                    <b>SBChat.sendMessage()</b>
                                </a>. After the message is sent, open the conversation with the function
                                <a href="js#openConversation" target="_blank">
                                    <b>SBChat.openConversation()</b>
                                </a>, check if the chat is open, and if not, open it with the function
                                <a href="js#open" target="_blank">
                                    <b>SBChat.open()</b>
                                </a>.
                            </p>
                            <pre class="prettyprint">
                                $(document).on("SBInit", function () {
                                    let message = "Do you want to buy the product on this page?";
                                    if (SBChat.conversation == false || SBChat.conversation.searchMessages(message).length == 0) {
                                        SBChat.sendMessage(SBF.setting("bot-id"), message, [], function (response) {
                                            SBChat.openConversation(response["conversation_id"]);
                                            if (!SBChat.chat_open) {
                                                SBChat.open();
                                            }
                                        });
                                    }
                                });
                            </pre>
                        </div>
                        <hr />
                        <div id="popup-scroll">
                            <h2>Display a pop-up message when the user scroll the page</h2>
                            <p>
                                This use case explains how to display a pop-up message when the user scroll the page to a certain position, in this example when the page scroll reaches 500 px.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Check the page scroll and display the pop-up
                            </h4>
                            <p>
                                Check the page scroll via JavaScript and display the pop-up with the function
                                <a href="js#popup" target="_blank">
                                    <b>popup()</b>
                                </a> of the
                                <b>
                                    JavaScript API
                                </b>.
                            </p>
                            <pre class="prettyprint">
                                $(document).on("SBInit", function () {
                                    var showed = false;
                                    $(window).scroll(function () {
                                        var scroll = $(window).scrollTop();
                                        if (scroll > 500 && !showed) {
                                            SBChat.popup(false, { title: "You reached 500 px!", message: "Insert here your message." });
                                            showed = true;
                                        }
                                    });
                                });
                            </pre>
                        </div>
                        <hr />
                        <div id="wp-admin-chat">
                            <h2>Display the chat within the WordPress administration area</h2>
                            <p>
                                This use case explains how to display the chat within the WordPress administration area and automatically identify the logged-in WordPress user.
                            </p>
                            <hr class="space-sm" />
                            <h4>
                                <b class="number">1</b> Enter the code in the functions.php file
                            </h4>
                            <p>
                                Edit the file
                                <b>functions.php</b> of your WordPress Theme (ex. /wp-content/themes/your-theme/functions.php) and Enter the code below at the bottom.
                            </p>
                            <pre class="prettyprint">
                                function sb_enqueue_admin_custom() {
                                    if (!key_exists('page', $_GET) || $_GET['page'] != 'alz-bot') {
                                        wp_enqueue_script('sbinit', SB_URL . '/js/main.js', ['jquery'], SB_VERSION);
                                        $current_user = wp_get_current_user();
                                        if (!empty($current_user->ID)) wp_add_inline_script('sbinit', 'document.cookie = "sb-login=false;expires=Thu, 01 Jan 1970 00:00:01 GMT;path=/;SameSite=None;Secure;" + (location.protocol == "https:" ? "SameSite=None;Secure;" : ""); var SB_WP_ACTIVE_USER = ' . $current_user->ID  . ';');
                                    }
                                }
                                add_action('admin_enqueue_scripts', 'sb_enqueue_admin_custom');
                            </pre>
                            <p>If <b>Settings > Miscellaneous > Cookie domain</b> is set, add also the code <b>domain=YOUR-VALUE</b> to the cookie string above.</p>
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
    </footer>
</body>
</html>