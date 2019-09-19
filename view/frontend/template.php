<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148243489-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-148243489-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portfolio de Vincent Lepelley, développeur web HTML 5 CSS 3 JavaScript PHP SQL">
    <meta name="keywords" content="Vincent, Lepelley, web, developer, développeur, HTML, HTML5, CSS, CSS3, JavaScript, PHP, SQL">
    <meta name="author" content="Vincent Lepelley">  
    <link rel="author" href="http://vincent.lepelley.fr">

    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="public/css/mobile.css" />
    <title>Vincent Lepelley ~ Développeur Web &raquo; <?php echo $title; ?></title>
</head>
<body>
    <header id="header">
        <h1>Vincent Lepelley ~ Développeur Web &raquo; <?php echo $title; ?></h1>

        <nav>
            <ul class="list-no-style">
                <?php
                if (isset($page) && $page == 'projects') {
                    echo '<li class="active">Projets</li>';
                }
                else {
                    echo '<li><a href="?action=listProjects">Projets</a></li>';
                }
                if (isset($page) && $page == 'posts') {
                    echo '<li class="active">Blog</li>';
                }
                else {
                    echo '<li><a href="?action=listPosts">Blog</a></li>';
                }
                if (isset($page) && $page == 'cv') {
                    echo '<li class="active">Curriculum vitae</li>';
                }
                else {
                    echo '<li><a href="?action=cv">Curriculum vitae</a></li>';
                }
                if (isset($page) && $page == 'contact') {
                    echo '<li class="active">Contact</li>';
                }
                else {
                    echo '<li><a href="?action=contact">Contact</a></li>';
                }
                ?>
            </ul>
        </nav>
    </header>

    <?php echo $content; ?>


    <?php
    // reCaptcha v3 for sending mails
    if (isset($page) && $page == 'contact') {
    ?>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfTd7gUAAAAAPYNVVsuKFiiwrm64ewfEll2hsbD"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfTd7gUAAAAAPYNVVsuKFiiwrm64ewfEll2hsbD', { action: 'contact' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    <?php
    }
    ?>

</body>
</html>