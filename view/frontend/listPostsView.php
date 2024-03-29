<?php 
$title = 'Blog';
$page = 'posts';
ob_start(); 
?>

<section id="blog" class="container">
        
    <?php
    while ($data = $posts->fetch()) {
    ?>
    <article>
        <header><h2><?php echo $data['name']; ?></h2></header>
        <p>
            <?php echo nl2br($data['content']); ?>
        </p>
        
        <p id="read-more"><a href="?action=post&amp;id=<?php echo $data['id']; ?>#form-comment">Commentaires</a></p>

    </article>
    <aside>
        <p>
            Catégories : <?php echo htmlspecialchars($data['categories']); ?><br>
            Publié par <?php echo $data['author']; ?> le <?php echo $data['creation_date_fr']; ?><br>
            <?php 
            if ($data['modification_date_fr'] != NULL) {
                echo 'Dernière mise à jour le ' . $data['modification_date_fr']; 
            }
            ?>
        </p>
    </aside>
    <?php
    }
    ?>

    <!--<p>Page 1 - <a href="#">2</a></p>-->
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
