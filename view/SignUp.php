<?php $title = "Blinks | S'inscrire";
$lienLog = "../index.php";
$valueLog = "SE CONNECTER";
?>  
<link href="../public/css/style.css" rel="stylesheet"> 

<?php ob_start(); ?>

<div class="signup">
    <fieldset>
            <legend><h1>INSCRIPTION</h1></legend>
    
            <form action="home.php" method="POST" autocomplete="off">
                    <p><input type="text" autocomplete="nope" name="username" size=40 placeholder="Nom d'utilisateur *" required></p>
                    <p><input type="text" autocomplete="nope" name="nom" size=40 placeholder="Nom"></p>
                    <p><input type="text" autocomplete="nope" name="prenom" size=40 placeholder="Prénom *" required></p>
                    <p><input type="email" autocomplete="nope" name="email" size=40 placeholder="Email *" required></p>
                    <p><input type="password" autocomplete="new-password" name="motdepasse" size=40 placeholder="Mot de Passe *" required></p>
                    <p><input type="password" autocomplete="new-password" name="confirmer_motdepasse" size=40 placeholder="Confirmez votre mot de passe *" required></p>
                    
                    <input type="submit" name="signup" value="S'INSCRIRE">
            </form>
    </fieldset>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>