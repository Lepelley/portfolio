<?php
require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'projects') {
            projects();
        }
        else if ($_GET['action'] == 'posts') {
            posts();
        }
        else if ($_GET['action'] == 'cv') {
            cv();
        }
        else if ($_GET['action'] == 'contact') {
            contact();
        }
        else if ($_GET['action'] == '') {
            projects();
        }
        else { // Action not found ? Error 404 !
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
