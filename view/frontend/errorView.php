<?php $title = 'Error'; ?>

<?php ob_start(); ?>

<section id="container">
    <header><h2>Erreur</h2></header>
    <p><?php echo $errorMessage; ?></p>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
