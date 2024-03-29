<?php 
$title = 'Contact';
$page = 'contact';
ob_start(); 
?>

<section class="container" id="contact">
    <header><h2>Contact</h2></header>
    <p>Vous pouvez me contacter :</p>
    <ul>
        <li>en remplissant le formulaire suivant</li>
        <li>vous pouvez m'envoyer directement un mail à : <a href="mailto:vincent@lepelley.fr">vincent@lepelley.fr</a></li>
        <li>sur les réseaux sociaux : 
            <ul id="social-media" class="list-no-style">
                <li><a href="https://twitter.com/LepelleyVincent"><img src="public/img/icons8-twitter.svg" alt="Twitter"></a></li>
                <li><a href="https://www.github.com/Leyzou"><img src="public/img/icons8-github.svg" alt="GitHub"></a></li>
                <li><a href="https://www.reddit.com/user/Leyzou/"><img src="public/img/icons8-reddit.svg" alt="Reddit"></a></li>
                <li><a href="https://www.linkedin.com/in/vincent-lepelley/"><img src="public/img/icons8-linkedin-2.svg" alt="LinkedIn"></a></li>
                <li><a href="https://stackoverflow.com/users/9670684/vincent-lepelley"><img src="public/img/icons8-stack-overflow.svg" alt="Stack Overflow"></a></li>
            </ul>
        </li>
    </ul> 

    <form method="post" action="?action=sendMail">
        <fieldset>
            <legend>Formulaire</legend>
            <label for="form-name">Prénom / Pseudo (requis)</label>
            <input type="text" name="name" id="form-name" maxlength="200" placeholder="Vincent" autofocus required> <br>

            <label for="form-mail">E-mail (requis)</label>
            <input type="email" name="mail" id="form-mail" maxlength="200" placeholder="prenom@gmail.com" required> <br>

            <label for="form-phone">Téléphone</label>
            <input type="tel" name="phone" id="form-phone" maxlength="40" placeholder="01.23.45.67.89"> <br>

            <label for="form-website">Site internet</label>
            <input type="url" name="website" id="form-website" maxlength="200" placeholder="https://www.google.fr">
            <br><br>
            
            <label for="form-object">Sujet (requis)</label>
            <input type="text" name="object" id="form-object" maxlength="255" placeholder="Offre d'emploi..." required>
            <textarea name="content" id="form-content" placeholder="Bonjour monsieur Vincent, ..." required></textarea>

            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

            <input type="submit" value="Envoyer">
        </fieldset>

        <?php
        if (isset($email_result) && $email_result != '') {
            echo $email_result;
        }
        ?>
    </form>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
