<?php 
$title = $post['name'];
$page = 'post';
ob_start(); 
?>

<div id="container">
    <section id="blog">
        <p><a href="?action=listPosts">Revenir au Blog</a></p>
        <article>
            <h1><?php echo $post['name']; ?></h1>
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
        <h2>999 commentaires</h2>

        <form action="post_comment.php" method="post" id="form-comment">
            <fieldset>
                <legend>Ajouter un commentaire</legend>
                <label for="form-name">Prénom / Pseudo</label>
                <input type="text" name="name" id="form-name" maxlength="200" placeholder="Vincent" autofocus required>
                <label for="form-mail">E-mail</label>
                <input type="email" name="mail" id="form-mail" maxlength="200" placeholder="nom@gmail.com">

                <textarea name="content" id="form-content" placeholder="Bonjour Vincent, ..." required></textarea>

                <input type="submit" value="Envoyer">
                
            </fieldset>
        </form>

        <aside><!--Icône gravatar<br>--> Leyzou le 10 septembre 2019</aside>
        <article>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem voluptatum natus aliquid deleniti, quae necessitatibus, ipsa, minus quis tempora odio quia deserunt at doloremque vero optio perspiciatis consequatur voluptates reprehenderit.</p>
        </article>

        <aside><!--Icône gravatar<br>--> Leyzou le 10 septembre 2019</aside>
        <article>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem voluptatum natus aliquid deleniti, quae necessitatibus, ipsa, minus quis tempora odio quia deserunt at doloremque vero optio perspiciatis consequatur voluptates reprehenderit.</p>
        </article>

        <aside><!--Icône gravatar<br>--> Leyzou le 10 septembre 2019</aside>
        <article>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem voluptatum natus aliquid deleniti, quae necessitatibus, ipsa, minus quis tempora odio quia deserunt at doloremque vero optio perspiciatis consequatur voluptates reprehenderit.</p>
        </article>

    </section>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
