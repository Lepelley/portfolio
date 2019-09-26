<?php 
$title = 'Projet ' . $_GET['id'] . ' : ' . htmlspecialchars($project['name']);
$page = 'project';
ob_start(); 
?>
    
<section id="project" class="container">
    <header><h2><?php echo htmlspecialchars($project['name']); ?></h2></header>

    <ul class="list-no-style">
        <li><span class="underline">Site web</span> : <?php echo $project['website']; ?></li>
        <li><span class="underline">Rôle</span> : <?php echo $project['role']; ?></li>
        <li><span class="underline">Date de parution</span> : <?php echo $project['creation_date_fr']; ?></li>
        <li><span class="underline">Langages utilisés</span> : <?php echo $project['technologies']; ?></li>
        <li><span class="underline">Fonctionnalités</span> : <?php echo $project['features']; ?></li>
    </ul>

    <?php echo $project['images']; ?>

    <p class="center"><a href="?action=listProjects">Retour à la page des projets</a></p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>