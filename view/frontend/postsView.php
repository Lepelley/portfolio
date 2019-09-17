<?php 
$title = 'Blog';
$page = 'posts';
ob_start(); 
?>

<div id="container">
        <section id="blog">
           <article>
               <h1>Mon avis sur Bootstrap</h1>
               <p>
                   <img src="https://media.licdn.com/dms/image/C5612AQFaSozKVXUUZQ/article-cover_image-shrink_720_1280/0?e=1573689600&v=beta&t=M4DtYjhyLYVczUu8Fy7UxykzBuWm19TAnE3L7d-2YeM" alt="Logo Bootstrap">
                    Cet article est un repost de l'article que j'ai posté sur LinkedIn (<a href="#">lien</a>). Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit facere voluptate culpa doloremque fugit tempore eius, error, alias dicta delectus voluptates perferendis amet! At aut
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
                
                <p id="read-more"><a href="article.php">Lire la suite de l'article</a></p>

           </article>
           <aside>
               <p>
                    Catégories : Bootstrap, CSS, Développement Web<br>
                    Publié par Vincent le 9 septembre 2019<br>
                    Dernière mise à jour le 10 septembre 2019
               </p>
           </aside>

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

                    <span id="read-more"><a href="article.php">Lire la suite de l'article</a></span>

               </p>
           </article>
           <aside>
               <p>
                    Catégories : Bootstrap, CSS, Développement Web<br>
                    Publié par Vincent le 9 septembre 2019<br>
                    Dernière mise à jour le 10 septembre 2019
               </p>
           </aside>

           <p>Page 1 - <a href="#">2</a></p>
        </section>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
