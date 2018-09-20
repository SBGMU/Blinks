<?php $title = "Blinks | Se Connecter";
$lienLog = "view/SignUp.php";
$valueLog = "S'INSCRIRE";
?>
<link href="public/css/style.css" rel="stylesheet"> 

<?php ob_start(); ?>

<div class="login">
    <hr>
        <h1>CONNEXION</h1>
    <hr>
    <fieldset>
        <form action="home.php" method="POST" autocomplete="off">
                <p><input autocomplete="off" id="email" type="email" name="email" placeholder="Email / Pseudo" size=40 ></p>
                <p><input autocomplete="off" type="password" name="motdepasse" placeholder="Mot de Passe" size=40 ></p>
                
                <input type="submit" name="connexion" value="CONNEXION">
        </form>
    </fieldset>
    
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>