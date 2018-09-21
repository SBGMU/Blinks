<?php $title = "Blinks | Se Connecter" ?>

<?php ob_start(); ?>

<div class="login">
    <fieldset>
        <legend><h1>CONNEXION</h1></legend>

        <form action="home.php" method="POST" autocomplete="off">
            <input type="email" name="email" placeholder="Email / Pseudo" />
            <input type="password" name="motdepasse" placeholder="Mot de Passe" />

            <input type="submit" name="connexion" value="CONNEXION">
        </form>
    </fieldset>
    
    <p>Toujours pas Membre ?<a href="SignIn.php"> Inscrivez vous ici</a></p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>