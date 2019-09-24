<?php $title = 'Error'; ?>

<?php ob_start(); ?>

<div id="container">
    <header><h2>Erreur</h2></header>
    <p><?php echo $errorMessage; ?></p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
