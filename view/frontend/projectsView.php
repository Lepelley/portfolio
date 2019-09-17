<?php 
$title = 'Projets';
$page = 'projects';
ob_start(); 
?>
    
<div id="container">
    <section id="projects">
        <p>
            Développeur web, j'utilise pour mes projets les langages <abbr title="HyperText Markup Language version 5">HTML 5</abbr>,
            <abbr title="Cascading Style Sheets version 3">CSS 3</abbr>, JavaScript, <abbr title="Structured Query Language">SQL</abbr> et 
            <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>. Certains sont aussi réalisés avec le framework CSS, <a href="https://getbootstrap.com/">Bootstrap</a>. <br>
            Vous pouvez retrouver ci-dessous les projets que j'ai réalisés avec diverses informations les concernant (langages, frameworks, fonctionnalités, un lien vers le site ou une démo
            ou quelques images si le site n'est plus disponible).
        </p>

        <h1>Mes projets</h1>
        <ul class="list-no-style">
            <li>
                <figure>
                    <a href="projet_2.html"><img src="public/img/portfolio_v1_mini.png" alt="Image du portfolio version 1"></a>
                    <figcaption><a href="#">Portfolio version 1</a></figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="projet_1.html"><img src="public/img/preview_website.png" alt="Pas d'image disponible pour ce site"></a>
                    <figcaption><a href="#">Fly for Hell<br>Site d'un jeu vidéo</a></figcaption>
                </figure>
            </li>
        </ul>
    </section>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
