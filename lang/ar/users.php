<html lang="ar" xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Users Features | Alz-Bot</title>
    <meta name="description" content="Manage users quickly and easily thanks to a fully-featured users system tailor-made for Alz-Bot. Provide a great user experience for bot users and agents.">
    <?php
        include('fi-t/linke-hader.php');
        ?>
     <?php
     include('fi-t/user-language.php');
     ?>
</head>
<div id="preloader"></div>
<nav class="menu-classic menu-fixed scroll-css" data-menu-anima="fade-in">
<div class="container">
        <?php
        include('fi-t/header.php');
        ?>
</div>
</nav>
    <main>
        <section class="section-base bg-gradient">
            <div class="container">
            <?php
        include('fi-t/language-translets.php');
        ?>
                <div class="row align-items-center">
                    <div class="col-lg-6 fade-left">
                        <div class="label">Easily manage user and agent information on the fly</div>
                        <h1>Simple and Powerful User Management</h1>
                        <h3>
                            Manage users quickly and easily thanks to a fully-featured user management system made with Alz-Bot.
                            Provide a great user experience for both users and agents.
                        </h3>
                    </div>
                    <div class="col-lg-6 align-right hidden-md">
                        <img src="media/users.png" alt="Users management" />
                    </div>
                </div>
                <hr class="space" />
                <hr id="registration-and-login" class="space-lg" />
                <div class="row align-items-center">
                    <div class="col-lg-6 align-right">
                        <img class="width-extra-20" src="media/registration-login.png" alt="Registration and login" />
                    </div>
                    <div class="col-lg-6">
                        <h2>Registration and Login</h2>
                        <p>
                            We offer complete user management. Allow visitors to register and log in directly from the chat.
                            Personalize the registration form with custom fields, and require registration before starting a chat.
                        </p>
                        <hr class="space-sm" />
                        <div class="row row-list">
                            <div class="col-lg-8">
                                <ul class="icon-list icon-circle">
                                    <li>Registration and login system</li>
                                    <li>Require registration before starting the chat</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="icon-list icon-circle">
                                    <li>Custom fields</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr id="manage" class="space-lg" />
                <div class="row align-items-center invert-md">
                    <div class="col-lg-6">
                        <h2>Manage Users and Agents</h2>
                        <p>
                            Keep your most important customer data in one place. Create new users on the fly, edit existing ones,
                            limit agent privileges and view or edit user details directly from your conversations.
                        </p>
                        <hr class="space-sm" />
                        <div class="row row-list">
                            <div class="col-lg-7">
                                <ul class="icon-list icon-circle">
                                    <li>Create new users and agents</li>
                                    <li>Edit or delete users and agents</li>
                                </ul>
                            </div>
                            <div class="col-lg-5">
                                <ul class="icon-list icon-circle">
                                    <li>Delete bulk users</li>
                                    <li>Manage privileges</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="margin-negative-left-20 width-extra-20" src="media/admin-users.png" alt="Users management" />
                    </div>
                </div>
                <hr id="search-and-filters" class="space-lg" />
                <div class="row align-items-center">
                    <div class="col-lg-6 align-right">
                        <img class="margin-negative-left-20 width-extra-20" src="media/users-list.png" alt="Users table" />
                    </div>
                    <div class="col-lg-6">
                        <h2>Find, Sort and Filter</h2>
                        <p>
                            Search for users by name, email or any other custom field, and then sort and filter them instantaneously
                            from the user table. View and engage online users by sending the first message.
                        </p>
                        <hr class="space-sm" />
                        <div class="row row-list">
                            <div class="col-lg-7">
                                <ul class="icon-list icon-circle">
                                    <li>View online users</li>
                                    <li>Sort users by name, email and more</li>
                                </ul>
                            </div>
                            <div class="col-lg-5">
                                <ul class="icon-list icon-circle">
                                    <li>Search for users</li>
                                    <li>Filter users</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr id="know-your-customer" class="space-lg" />
                <div class="row align-items-center invert-md">
                    <div class="col-lg-6">
                        <h2>Get to Know Your Customers</h2>
                        <p>
                            Improve customer support with more data and automatically gleans useful information about the
                            user. From country to local time, context is key – and our goal is to keep your customers happy in the long term.
                        </p>
                        <hr class="space-sm" />
                        <div class="row row-list">
                            <div class="col-lg-5">
                                <ul class="icon-list icon-circle">
                                    <li>User OS and browser</li>
                                    <li>User location with map</li>
                                </ul>
                            </div>
                            <div class="col-lg-7">
                                <ul class="icon-list icon-circle">
                                    <li>User IP, local currency and more</li>
                                    <li>User local time and current page</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="margin-negative-left-20 width-extra-20" src="media/user-details.png" alt="User details" />
                    </div>
                </div>
                <hr id="language-detection" class="space-lg" />
                <div class="row align-items-center">
                    <div class="col-lg-6 align-right">
                        <img class="margin-negative-left-20 width-extra-20" src="media/language-detection.png" alt="Language detection" />
                    </div>
                    <div class="col-lg-6">
                        <h2>Language Detection <span class="label">Dialogflow App Required</span></h2>
                        <p>
                            Detect the user's language on the fly by analyzing the user's messages.
                            This feature is powered by Google Cloud and can be used in conjunction with real-time message translations.
                        </p>
                        <hr class="space-sm" />
                        <ul class="icon-list icon-circle">
                            <li>Detect the user's language by analyzing the user's messages</li>
                            <li>Powered by Google Cloud</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include('fi-t/review.php');
 ?>
            <?php
        include('fi-t/button-free-trial-and-subscribe.php');
 ?>
    </main>
    <?php
        include('fi-t/offer-card.php');
 ?>
    <footer>
    <?php
        include('fi-t/footer.php');
 ?>
        <script src="them-viz/scripts/jquery.min.js"></script>
        <script src="them-viz/scripts/glide.min.js"></script>
        <script src="them-viz/scripts/main.js"></script>
        <script src="them-viz/scripts/custom.js?v=4"></script>
    </footer>
</body>
</html>