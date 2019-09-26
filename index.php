<?php
require_once('vendor/autoload.php');
require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == '' || $_GET['action'] == 'listProjects') {
            listProjects();
        }
        else if ($_GET['action'] == 'project') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                project();
            }
            else {
                throw new Exception('Veuillez renseigner un numéro de projet.<br><a class="center" href="?action=listProjects">Retourner à la liste des projets ?</a>');
            }
        }
        // Blog
        else if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        else if ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Veuillez renseigner un numéro d\'article.<br><a class="center" href="?action=listPosts">Retourner à la liste des articles ?</a>');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !<br><a class="center" href="?action=post&amp;id=' . $_GET['id'] . '">Retourner à l\'article ?</a>');
                }
            }
            else {
                throw new Exception('Aucun identifiant d\'article.<br><a class="center" href="?action=listPosts">Retourner à la liste des articles ?</a>');
            }
        }
        // End BLog
        else if ($_GET['action'] == 'cv') {
            cv();
        }
        else if ($_GET['action'] == 'contact') {
            contact();
        }
        else if ($_GET['action'] == 'sendMail') {
			sendMail();
        }
        else {
            throw new Exception('Error 404 : action not found');
        }
    }
    else { // Default page
        listProjects();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}
