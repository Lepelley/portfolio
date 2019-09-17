<?php $title = 'Error'; ?>

<?php ob_start(); ?>

<div id="container">
    <h1>Erreur</h1>
    <p><?php echo $errorMessage; ?></p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
