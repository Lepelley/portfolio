<?php 
$title = $post['name'];
$page = 'post';
ob_start(); 
?>

<div id="container">
    <section id="blog">
        <p><a href="?action=listPosts">Revenir au Blog</a></p>
        <article>
            <header><h2><?php echo $post['name']; ?></h2></header>
            <p>
                <?php echo nl2br($post['content']); ?>
            </p>
        </article>
        <aside>
            <p>
                Catégories : <?php echo htmlspecialchars($post['categories']); ?><br>
                Publié par <?php echo $post['author']; ?> le <?php echo $post['creation_date_fr']; ?><br>
                <?php 
                if ($post['modification_date_fr'] != NULL) {
                    echo 'Dernière mise à jour le ' . $post['modification_date_fr']; 
                }
                ?>
            </p>
        </aside>
        <h2>Commentaires</h2>

        <form action="?action=addComment&amp;id=<?= $post['id'] ?>" method="post" id="form-comment">
            <fieldset>
                <legend>Ajouter un commentaire</legend>
                <label for="form-name">Prénom / Pseudo</label>
                <input type="text" name="author" id="form-name" maxlength="200" placeholder="Vincent" autofocus required>
                <label for="form-mail">E-mail</label>
                <input type="email" name="mail" id="form-mail" maxlength="200" placeholder="nom@gmail.com">

                <textarea name="comment" id="form-content" placeholder="Bonjour Vincent, ..." required></textarea>

                <input type="submit" value="Envoyer">
                
            </fieldset>
        </form>
<?php
    while ($comment = $comments->fetch()) {
?>
    <p>
        <?php 
        if ($comment['mail'] != '') {
            echo '<div class="gravatar"><img src="' . $comment['mail'] . '" alt="Gravatar de ' . $comment['author'] . '">
                ' . htmlspecialchars($comment['author']) . ' ' . $comment['comment_date_fr'] . '<br>' . nl2br(htmlspecialchars($comment['comment'])) . '</div>';
        }
        else {
            echo htmlspecialchars($comment['author']) . ' ' . $comment['comment_date_fr'] . '<br>' . nl2br(htmlspecialchars($comment['comment']));
        }
        ?>
    </p>

<?php
    }
?>
    </section>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
