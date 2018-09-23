<?php

require('model/model.php');
require('view/LogIn.php');



function existUsername()
{
    $pseudo = getUsernames();

    if(strtolower($_POST['username']) == strtolower($pseudo['username'])){
        echo 'Désolé, cet identifiant exite déjà.';
        return $erreur = 1;
    }
}

function existEmail()
{
    $mails = getEmails();

    if(strtolower($_POST['mail']) == strtolower($mails['email']) ){
        echo 'Désolé, cet email est déjà utilisé !';
        return $erreur = 1;
    }
}
function verifConfirmMotdePasse(){
    if(preg_match("#[a-z-.]@[a-z-.].(a-z){3,5}#", $_POST['motdepasse']){
        $pass_hache = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);}
}
