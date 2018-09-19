<?php $title = "Blinks | S'inscrire" ?>

<?php ob_start(); ?>

<h1>Devenir Membre</h1>
<input type="text" name="id" placeholder="Pseudo">
<input type="password" name="motdepasse" placeholder="Mot de Passe">
<input type="password" name="confirmer_motdepasse" placeholder="Confirmer Mot de Passe">
<input type="email" name="email" placeholder="Email / Pseudo">

<input type="submit" name="connexion" value="S'inscrire">


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>