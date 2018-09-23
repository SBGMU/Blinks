<?php

function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=blinks;charset=utf8', 'root', '');
    return $db;
}

function getUsernames()
{
    $db = dbConnect();
    $reponse = $db->query('SELECT username FROM membres');

    return $req;
}

function getEmails()
{
    $db = dbConnect();
    $reponse = $db->prepare('SELECT email FROM membres');
    
    return $req;
}

function addUsers()
{
    $req = $bdd->prepare('INSERT INTO membres(username, nom, prenom, email, motdepasse, date_inscription, id_groupe) VALUES(:username, :nom, :prenom, :email, :motdepasse, CURDATE(), 1)');
    $req->execute(array(
        'username' => $username,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'email' => $email,
        'motdepasse' => $motdepasse_hache,
        'date_inscription' => $date_inscription, 
        'id_groupe' => $id_groupe));
}