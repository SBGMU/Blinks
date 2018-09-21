<?php

function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=blinks;charset=utf8', 'root', '');
    return $db;
}

function verifIdentification()
{
    $db = $this->dbConnect();

    $erreur = 0;

    $reponse = $db->prepare('SELECT username FROM membres WHERE username = "'. $S_POST['username'] .'" ');
    $pseudo = $reponse->fetch();
    $reponse = $db->prepare('SELECT email FROM membres WHERE email = "'. $S_POST['email'] .'" ');
    $mails = $reponse->fetch();
    
    if(strtolower($_POST['username']) == strtolower($pseudo['username']) ){
        echo 'Désolé, cet identifiant exite déjà.';
        return $erreur = 1;

    }elseif(strtolower($_POST['mail']) == strtolower($mails['email']) ){
        echo 'Désolé, cet email est déjà utilisé !';
        return $erreur = 1;
    }
}

