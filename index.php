<?php
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
                throw new Exception('Veuillez renseigner un numéro de projet.<br><a class="center" href="?action=listProjects">Retournez à la liste des projets</a>');
            }
        }
        else if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        else if ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Veuillez renseigner un numéro d\'article.<br><a class="center" href="?action=listPosts">Retournez à la liste des projets</a>');
            }
        }
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
        projects();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}
