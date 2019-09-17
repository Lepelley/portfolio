<?php

// Include Manager class
require_once('model/ProjectManager.php');
require_once('model/PostManager.php');


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
    $post = $postManager->getPost($_GET['id']);
    require('view/frontend/postView.php');
}

function cv() 
{
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
        $recaptcha_secret = '6LfTd7gUAAAAAMlpZ0fgIRInDY0DbwLPax5v-c_A'; // Clé serveur
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
            $to = "v.lepelley@gmail.com";
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