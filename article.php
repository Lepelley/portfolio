<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Portfolio de Vincent Lepelley, développeur web HTML 5 CSS 3 JavaScript PHP SQL">
    <meta name="keywords" content="Vincent, Lepelley, web, developer, développeur, HTML, HTML5, CSS, CSS3, JavaScript, PHP, SQL">
    <meta name="author" content="Vincent Lepelley">  
    <link rel="author" href="http://vincent.lepelley.fr">

    <link rel="stylesheet" href="css/style.css">
    <title>Vincent Lepelley ~ Développeur Web &raquo; Réalisations</title>
</head>
<body>
    <header id="header">
        <h1>Vincent Lepelley ~ Développeur Web &raquo; Blog</h1>
        <!--<?php echo htmlspecialchars('<h1>Vincent Lepelley<br />Développeur web</h1>'); ?>-->

        <nav>
            <ul class="list-no-style">
                <li><a href="index.html">Réalisations</a></li>
                <li class="active">Blog</li>
                <li><a href="cv.html">Curriculum vitae</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="container">
        <section id="blog">
            <p><a href="blog.php">Revenir au Blog</a></p>
           <article>
               <h1>Titre de l'article</h1>
               <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
                    voluptas harum aliquid molestias tempore!

               </p>
           </article>
           <aside>
               <p>
                    Catégories : Bootstrap, CSS, Développement Web<br>
                    Publié par Vincent le 9 septembre 2019<br>
                    Dernière mise à jour le 10 septembre 2019
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
</body>
</html>