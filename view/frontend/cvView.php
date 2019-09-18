<?php 
$title = 'Curriculum vitae';
$page = 'cv';
ob_start(); 
?>
    
<div id="cv">
    <div id="container">

        <p>Cette page est aussi disponible au <a href="public/files/CV_Lepelley_Vincent.pdf">format PDF</a> !</p>

        <header class="row">
            <p><a href="public/img/moi.jpg"><img src="public/img/mini_moi.jpg" alt="Ma photo"></a></p>
            <div class="cv-presentation">
                <h1>Vincent Lepelley</h1>
                <p>Développeur web junior, en recherche d'alternance de 12 mois pour un contrat de professionnalisation ou d'apprentissage. Esprit dynamique, collaboratif,  
                    organisé, curieux, polyvalent, et rigoureux. Je souhaite apporter mes compétences à votre entreprise tout en poursuivant ma formation de développeur web.</p>
            </div>
            <ul class="list-no-style">

                <?php
                    function age($date)
                    {
                        $age = date('Y') - date('Y', strtotime($date));
                        if (date('md') < date('md', strtotime($date))) {
                            return $age - 1;
                        }
                        return $age;
                    }
                ?>

                <li>25 ans</li>
                <li>181, rue Belliard 75018 PARIS</li>
                <li>Mobilité : Ile-de-France</li>
                <li>v.lepelley@gmail.com</li>
                <li>06.03.35.35.80</li>
            </ul>
        </header>
        
        <div class="row">
            <section>
                <h2>Dipl&ocirc;mes et formations</h2>
                <ul>
                    <li>Formation continue en informatique (Cours en ligne) depuis 2008</li>
                    <li>Formation en alternance : Développeur web junior chez OpenClassrooms (pas encore réalisé) : <br>
                        Diplôme RNCP de niveau III (Bac + 2)
                        <ul>
                            <li>Intégrer la maquette d'un site d'une agence web</li>
                            <li>Créer un site en personnalisant un thème WordPress</li>
                            <li>Concevoir une carte interactive de location de vélos</li>
                            <li>Créer un blog pour un écrivain</li>
                            <li>Rédiger un rapport de stage</li>
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
                    <li>Baccalauréat scientifique au Lycée Chaptal (Paris) de septembre 2009 à juillet 2012</li>
                </ul>

                <h2>Expériences et projets professionnels</h2>
                <ul>
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

                <h2>Centres d'intérets</h2>
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
                            <li>Pokémon Go (niveau 40)</li>
                            <li>MOBA (LOL Platine 2 saison 7)</li>
                        </ul>
                    </li>
                    <li>Histoire (Empire romain)</li>
                    <li>Séries (GOT, Doctor Who)</li>
                    <li>Films (Disney)</li>
                </ul>

                <h2>Réseaux sociaux</h2>
                <ul id="social-media" class="list-no-style">
                    <li><a href="https://twitter.com/LepelleyVincent"><img src="public/img/008-twitter.svg" alt="Twitter"></a></li>
                    <li><a href="https://www.reddit.com/user/Leyzou/"><img src="public/img/018-reddit.svg" alt="Reddit"></a></li>
                    <li><a href="https://www.linkedin.com/in/vincent-lepelley/"><img src="public/img/027-linkedin.svg" alt="LinkedIn"></a></li>
                    <li><a href="https://stackoverflow.com/users/9670684/vincent-lepelley"><img src="public/img/050-stack-overflow.svg" alt="Stack Overflow"></a></li>
                </ul>
            </section>
            <aside>
                <h2>Informatique</h2>
                <ul id="aside-progress" class="list-no-style">
                    <li>
                        <label for="html-css">HTML 5 / CSS 3</label>
                        <progress id="html-css" max="100" value="95">95%</progress>
                        <a href="public/files/2507032122.pdf">MOOC HTML 5 / CSS 3</a><br>
                        <a href="public/files/cert-1014-15556199.pdf">Sololearn HTML</a><br>
                        <a href="#">Framework Bootstrap</a>
                    </li>
                    <li>
                        <label for="javascript">JavaScript</label>
                        <progress id="javascript" max="100" value="20">20%</progress>
                        <a href="files/1410480912.pdf">MOOC OpenClassrooms</a>
                    </li>
                    <li>
                        <label for="php">PHP</label>
                        <progress id="php" max="100" value="60">60%</progress>
                        <a href="public/files/8850016665.pdf">MOOC OpenClassrooms</a>
                    </li>
                    <li>
                        <label for="cms">CMS (Wordpress)</label>
                        <progress id="cms" max="100" value="20">20%</progress>
                    </li>
                    <li>
                        <label for="sql">SQL</label>
                        <progress id="sql" max="100" value="60">60%</progress>
                    </li>
                    <li>
                        <label for="git">Git (Github)</label>
                        <progress id="git" max="100" value="60">60%</progress>
                    <li>
                        <label for="algo">Algorithmie</label>
                        <progress id="algo" max="100" value="40">40%</progress>
                    </li>
                    <li>
                        <label for="c">C</label>
                        <progress id="c" max="100" value="60">60%</progress>
                    </li>
                    <li>
                        <label for="java">Java</label>
                        <progress id="java" max="100" value="60">60%</progress>
                    </li>
                    <li>
                        <label for="windows">Système d'exploitation Windows</label>
                        <progress id="windows" max="100" value="50">50%</progress>
                    </li>
                    <li>
                        <label for="linux">Système d'exploitation Linux (Debian)</label>
                        <progress id="linux" max="100" value="20">20%</progress>
                    </li>
                    <li>
                        <label for="office">Logiciels Microsoft Office</label>
                        <progress id="office" max="100" value="50">50%</progress>
                    </li>
                </ul>

                <h2>Langues</h2>
                <ul class="list-no-style">
                    <li>Français (langue maternelle)</li>
                    <li>Anglais (niveau courant)</li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<footer>
    <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div>
</footer>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
