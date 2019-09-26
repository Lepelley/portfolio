<?php

// Include Manager class
require_once('model/ProjectManager.php');
require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function listProjects() 
{
    $projectManager = new \Leyzou\Portfolio\Model\ProjectManager();
    $projects = $projectManager->getProjects();
    require('view/frontend/listProjectsView.php');
}

function project()
{
    $projectManager = new \Leyzou\Portfolio\Model\ProjectManager();
    $project = $projectManager->getProject($_GET['id']);
    require('view/frontend/projectView.php');
}

function listPosts()
{
    $postManager = new \Leyzou\Portfolio\Model\PostManager();
    $posts = $postManager->getPosts();
    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new \Leyzou\Portfolio\Model\PostManager();
    $commentManager = new \Leyzou\Portfolio\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mp | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source https://gravatar.com/site/implement/images/php/
 */
function getGravatar($email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array()) 
{
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ($img) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}

function addComment($postId, $author, $comment)
{
    $commentManager = new \Leyzou\Portfolio\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment, getGravatar($mail));

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !<br><a class="center" href="?action=post&amp;id=' . $_GET['id'] . '">Retourner à l\'article ?</a>');
    }
    else {
        header('Location: ?action=post&id=' . $postId);
    }
}

function cv() 
{
    $age = getAge('1994-08-20');
    require('view/frontend/cvView.php');
}

function contact() 
{
    require('view/frontend/contactView.php');
}

function sendMail()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
        // Build POST request:
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6LekcroUAAAAALr1asXG5Nk8j4VvdbWxp-P4mKmy'; // Clé serveur
        $recaptcha_response = $_POST['recaptcha_response'];
        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        // Take action based on the score returned:
        if ($recaptcha->score >= 0.5) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
            $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
            $website = filter_input(INPUT_POST, 'website',FILTER_SANITIZE_URL);
            $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_NUMBER_INT);
            $from = $email;
            $to = "vincent@lepelley.fr";
            $subject = 'Contact du portfolio de ' . $name . ' (' . $email . ')';
            $message = $website . ' - ' . $phone . ' - ' . $content;
            $headers = "From:" . $from;
            mail($to,$subject,$message, $headers);
    
            $email_result = 'Le mail a été envoyé !';
        } else {
            $email_result = 'Le mail n\'a pas été envoyé !';
        }
    } 

    require('view/frontend/contactView.php');
}

function getAge($date)
{
    $age = date('Y') - date('Y', strtotime($date));
    if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
    }
    return $age;
}