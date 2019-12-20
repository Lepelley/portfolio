<?php 
$title = 'Curriculum vitae';
$page = 'cv';
ob_start(); 
?>
    
<section id="cv" class="container">

    <p>Cette page est aussi disponible au <a href="public/files/CV_Lepelley_Vincent.pdf">format PDF</a> !</p>

    <header class="row">
        <p><a href="public/img/moi.jpg"><img src="public/img/mini_moi.jpg" alt="Ma photo"></a></p>
        <div class="cv-presentation">
            <h2>Vincent Lepelley</h2>
            <p>Développeur web recherche une contrat d'alternance de 22 mois. Esprit dynamique, collaboratif,  organisé, curieux, polyvalent, et rigoureux. Je souhaite apporter mes compétences à votre entreprise tout en poursuivant ma formation de développeur web.</p>
        </div>
        <ul class="list-no-style">
            <li><?php echo $age; ?> ans</li>
            <li>181, rue Belliard 75018 PARIS</li>
            <li>Mobilité : Ile-de-France</li>
            <li>vincent@lepelley.fr</li>
            <li>06.03.35.35.80</li>
        </ul>
    </header>

    <h3>Réseaux sociaux</h3>
    <ul id="social-media" class="list-no-style">
        <li><a href="https://twitter.com/LepelleyVincent"><img src="public/img/icons8-twitter.svg" alt="Twitter"></a></li>
        <li><a href="https://www.github.com/Leyzou"><img src="public/img/icons8-github.svg" alt="GitHub"></a></li>
        <li><a href="https://www.reddit.com/user/Leyzou/"><img src="public/img/icons8-reddit.svg" alt="Reddit"></a></li>
        <li><a href="https://www.linkedin.com/in/vincent-lepelley/"><img src="public/img/icons8-linkedin-2.svg" alt="LinkedIn"></a></li>
        <li><a href="https://stackoverflow.com/users/9670684/vincent-lepelley"><img src="public/img/icons8-stack-overflow.svg" alt="Stack Overflow"></a></li>
    </ul>
    
    <section class="row">
        <div class="col">
            <h3>Dipl&ocirc;mes et formations</h3>
            <ul>
                <li>Formation continue en informatique, depuis 2008</li>
                <li>Master Bac+4 Développeur full-stack, à la 3W Academy, de novembre 2019 à 2021
                    <ul>
                        <li>PHP (POO), JavaScript, Node.js, Agile, React, Angular, Android</li>
                    </ul>
                </li>
                <li>Licence Sciences et Technologie mention informatique, à l'Université Pierre et Marie Curie (Paris 6, Sorbonne Universités)<br>
                    Niveau licence
                    <ul>
                        <li>Première année en MIPI (mathématiques, informatique, physique, ingénierie)</li>
                        <li>Les deuxième et troisième années en monodisciplinaire informatique (chaque année, une matière d'anglais et deux de 
                            mathématiques, complétées par des matières diverses sur l'informatique)</li>
                    </ul>
                </li>
                <li>Baccalauréat scientifique, au Lycée Chaptal (Paris), de septembre 2009 à juillet 2012</li>
            </ul>

            <h3>Expériences et projets professionnels</h3>
            <ul>
                <li>
                    Projet de formation : Hôtel, en 2019
                    <ul>
                        <li>Développé en PHP orienté objet, avec les bases de données MongoDB et Redis</li>
                        <li>Système d'enregistrement et de connexion</li>
                        <li>Réservation d'une chambre</li>
                        <li>Partie administration : Gérer les chambres, les clients et les réservations</li>
                    </ul>
                </li>
                <li>Réalisation d'un simulateur de course de voiture, en Java, en binôme pour un projet univeritaire (de janvier 2015 à mai 2015)
                    <ul>
                        <li>Participer à un projet d'envergure en informatique et réaliser un simulateur autonome</li>  
                        <li>Se familiariser avec les techniques d'apprentissage automatique</li>
                        <li>Aboutir à une compétition d'intelligence artificielle entre les simulateurs de tous les binômes</li>
                        <li>Notions d'Interface Homme-Machine et paradigme MVC</li>
                    </ul>
                </li>
                <li>Autres expériences, de 2015 à 2018
                    <ul>
                        <li>Manutentionnaire (juin à juillet 2018)</li>
                        <li>Employé de restauration (septembre à novembre 2017)</li>
                        <li>Baby-sitter (décembre 2015 à janvier 2016)</li>
                    </ul>
                </li>
            </ul>

            <h3>Centres d'intérets</h3>
            <ul>
                <li>
                    Sports
                    <ul>
                        <li>Handball (4 ans, travail d'équipe)</li>
                        <li>Athlétisme (6 ans, dépassement de soi)</li>
                    </ul>
                </li>
                <li>
                    Jeux vidéos
                    <ul>
                        <li>RPG (Pokémon, Zelda)</li>
                        <li>Pokémon Go (niveau 40)</li>
                        <li>Jeux de stratégie (Europa Universalis 4)</li>
                        <li>Football Manager (assistant bénévole pour la recherche sur un club)</li>
                    </ul>
                </li>
                <li>Histoire (Empire romain)</li>
                <li>Séries (GOT, Doctor Who, la Casa de Papel)</li>
                <li>Mangas/Animés</li>
                <li>Films (Disney)</li>
            </ul>
        </div>
        <aside>
            <h3>Informatique</h3>
            <ul id="aside-progress" class="list-no-style">
                <li>
                    <label for="html"><img src="public/img/icons8-html-5.svg" alt="HTML 5" title="HTML 5"></label>
                    <span>HTML 5<progress id="html" max="100" value="95">95%</progress></span>
                </li>
                <li>
                    <label for="css"><img src="public/img/icons8-css3.svg" alt="CSS 3" title="CSS 3"></label>
                    <span>CSS 3<progress id="css" max="100" value="95">90%</progress></span>
                </li>
                <!-- Bootstrap -->
                <li>
                    <label for="javascript"><img src="public/img/icons8-javascript.svg" alt="JavaScript" title="JavaScript"></label>
                    <span>JavaScript<progress id="javascript" max="100" value="60">70%</progress></span>
                </li>
                <li>
                    <label for="node-js"><img src="public/img/icons8-nodejs.svg" alt="Node.js" title="Node.js"></label>
                    <span>Node.js<progress id="node-js" max="100" value="20">50%</progress></span>
                </li>
                <li>
                    <label for="php"><img src="public/img/php.svg" alt="PHP" title="PHP"></label>
                    <span>PHP<progress id="php" max="100" value="60">95%</progress></span>
                </li>
                <!--<li>
                    <label for="cms">CMS (Wordpress)</label>
                    <progress id="cms" max="100" value="20">20%</progress>
                </li>-->
                <li>
                    <label for="sql"><img src="public/img/mysql.svg" alt="SQL" title="SQL (MySQL)"></label>
                    <span>SQL (MySQL)<progress id="sql" max="100" value="60">60%</progress></span>
                </li>
                <li>
                    <label for="git"><img src="public/img/icons8-git.svg" alt="Git" title="Git (Github)"></label>
                    <span>Git (Github)<progress id="git" max="100" value="60">60%</progress></span>
                <li>
                    <label for="algo"><img src="public/img/icons8-algo.png" alt="Algorithmie" title="Algorithmie"></label>
                    <span>Algorithmie<progress id="algo" max="100" value="40">40%</progress></span>
                </li>
                <li>
                    <label for="c"><img src="public/img/icons8-c-programming.svg" alt="C" title="Langage C"></label>
                    <span>Langage C<progress id="c" max="100" value="60">60%</progress></span>
                </li>
                <li>
                    <label for="java"><img src="public/img/icons8-java.svg" alt="Java" title="Langage Java"></label>
                    <span>Langage Java<progress id="java" max="100" value="60">60%</progress></span>
                </li>
                <li>
                    <label for="windows"><img src="public/img/icons8-windows-10" alt="Système Windows" alt="Système Windows"></label>
                    <span>Windows OS<progress id="windows" max="100" value="50">50%</progress></span>
                </li>
                <li>
                    <label for="linux"><img src="public/img/icons8-linux-48.png" alt="Linux" title="Système Linux (Debian)"></label>
                    <span>Linux (Debian) OS<progress id="linux" max="100" value="20">3  0%</progress></span>
                </li>
                <li>
                    <label for="office"><img src="public/img/icons8-office-365.svg" alt="Logiciels Office" title="Logiciels Office"></label>
                    <span>Microsoft Office<progress id="office" max="100" value="50">50%</progress></span>
                </li>
                <!-- Visual Studio Code -->
            </ul>

            <h3>Langues</h3>
            <ul class="list-no-style">
                <li>Français (langue maternelle)</li>
                <li>Anglais (niveau courant)</li>
            </ul>
        </aside>
    </section>
</section>

<footer>
    <p><a href="https://icons8.com">Icons8</a></p>
</footer>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
