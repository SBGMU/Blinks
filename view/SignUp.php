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
                    <p><input type="text" autocomplete="off" name="username" size=40 placeholder="Nom d'utilisateur"></p>
                    <p><input type="email" autocomplete="off" name="email" size=40 placeholder="Email"></p>
                    <p><input type="text" autocomplete="off" name="nom" size=40 placeholder="Nom"></p>
                    <p><input type="text" autocomplete="off" name="prenom" size=40 placeholder="Prénom"></p>
                    <p><input type="password" autocomplete="off" name="motdepasse" size=40 placeholder="Mot de Passe"></p>
                    <p><input type="password" autocomplete="off" name="confirmer_motdepasse" size=40 placeholder="Confirmer Mot de Passe"></p>
                    
                    <input type="submit" name="signup" value="S'INSCRIRE">
            </form>
    </fieldset>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>