<?php 
$title = 'Projets';
$page = 'projects';
ob_start(); 
?>
    
<section class="container" id="projects">
    <p>
        Développeur web, j'utilise pour mes projets les langages <abbr title="HyperText Markup Language version 5">HTML 5</abbr>,
        <abbr title="Cascading Style Sheets version 3">CSS 3</abbr>, JavaScript, <abbr title="Structured Query Language">SQL</abbr> et 
        <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>. Certains sont aussi réalisés avec le framework CSS, <a href="https://getbootstrap.com/">Bootstrap</a>. <br>
        Vous pouvez retrouver ci-dessous les projets que j'ai réalisés avec diverses informations les concernant (langages, frameworks, fonctionnalités, un lien vers le site ou une démo
        ou quelques images si le site n'est plus disponible).
    </p>

    <h2>Mes projets</h2>
    <ul class="list-no-style">
        <?php
        while ($data = $projects->fetch()) {
        ?>
        <li>
            <figure>
                <a href="?action=project&amp;id=<?php echo $data['id'];?>">
                <img src="public/img/<?php if($data['preview'] == '') echo 'preview_website.png'; else echo $data['preview']; ?>" 
                alt="<?php if($data['preview'] == '') echo 'Pas d\'image disponible pour ce projet'; else echo 'Image de ' . $data['preview']; ?>">
                </a>
                <figcaption><a href="?action=project&amp;id=<?php echo $data['id'];?>"><?php echo htmlspecialchars($data['name']); ?></a></figcaption>
            </figure>
        </li>
        <?php
        }
        ?>
    </ul>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
