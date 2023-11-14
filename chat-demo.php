<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Chat Demo | Alz-Bot</title>
    <meta name="description" content="Connect your Chat Demo bot to Alz-Bot to read and reply to all messages sent to your Chat Demo bot directly in Alz-Bot.">
    <meta property="og:image" content="media/meta-image.jpg" />
<?php
        include('fi-t/linke-hader.php');
        ?>
     <?php
     include('fi-t/user-language.php');
     ?>
</head>
<body>
<div id="preloader"></div>

</nav>
<main>
        <section class="section-base bg-gradient">
            <div class="container">
            <img class="logo" src="media/logo.svg">
                <div class="sb-box">
                    <h4>Alz-Bot Front-end Chat Live Demo</h4>
                    <hr class="space-sm">
                    <p class="text-xs">
                        Click the blue icon on bottom-right of this page to open the chat.
                        The chat is sync with Dialogflow, you can start a general conversation or sending the
                        following messages and the bot will reply.
                    </p>
                    <hr class="space-sm">
                    <div class="row row-list">
                        <div class="col-lg-5">
                            <ul class="icon-list icon-circle text-xs">
                                <li>Show a card</li>
                                <li>Show a slider</li>
                                <li>Show a chips message</li>
                                <li>Ask me the email</li>
                                <li>Can I see the articles?</li>
                                <li>Show me a sequential survey</li>
                                <li>Show a survey</li>
                                <li>Show a Rich Message</li>
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <ul class="icon-list icon-circle text-xs">
                                <li>Opening times please</li>
                                <li>Show some photos</li>
                                <li>Where can I register my account?</li>
                                <li>Send me a message with markup</li>
                                <li>I want to rate this conversation</li>
                                <li>Display a video</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <?php
        include('fi-t/offer-card.php');
 ?>
     <?php
        include('fi-t/review.php');
 ?>
            <?php
        include('fi-t/button-free-trial-and-subscribe.php');
 ?>
    </main>
    <footer>


         <script src="them-viz/scripts/jquery.min.js"></script>
        <script src="them-viz/scripts/main.js"></script>
        <script src="them-viz/scripts/custom.js?v=4"></script>
        <script src="them-viz/scripts/magnific-popup.min.js"></script>
   </footer>
</body>
</html>