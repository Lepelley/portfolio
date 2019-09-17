<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portfolio de Vincent Lepelley, développeur web HTML 5 CSS 3 JavaScript PHP SQL">
    <meta name="keywords" content="Vincent, Lepelley, web, developer, développeur, HTML, HTML5, CSS, CSS3, JavaScript, PHP, SQL">
    <meta name="author" content="Vincent Lepelley">  
    <!--<link rel="author" href="http://vincent.lepelley.fr">-->

    <link rel="stylesheet" href="public/css/style.css">
    <title>Vincent Lepelley ~ Développeur Web &raquo; <?php echo $title; ?></title>
</head>
<body>
    <header id="header">
        <h1>Vincent Lepelley ~ Développeur Web &raquo; <?php echo $title; ?></h1>
        <!--<?php echo htmlspecialchars('<h1>Vincent Lepelley<br />Développeur web</h1>'); ?>-->

        <nav>
            <ul class="list-no-style">
<?php
if (isset($page) && $page == 'projects') {
    echo '<li class="active">Projets</li>';
}
else {
    echo '<li><a href="?action=projects">Projets</a></li>';
}
if (isset($page) && $page == 'posts') {
    echo '<li class="active">Blog</li>';
}
else {
    echo '<li><a href="?action=posts">Blog</a></li>';
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

</body>
</html>