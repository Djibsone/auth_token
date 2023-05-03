<?php

//Connexion à la base de données
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=auth_token;charset=utf8', 'djibril', 'tamou');
        return $db;
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

//Récupérer tous les users
function getUsers(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM users ');
    $req->execute();
    return $req;
}


//Récupérer un user
function getUser($email){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($email));
    return $req;
}

//Récupérer le pseudo user
function getUserPseudo($pseudo){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
    $req->execute(array($pseudo));
    return $req;
}

//Récupérer le token d'un user
function getUserToken($u){
    $db = dbConnect();

    $req = $db->prepare('SELECT token FROM users WHERE token = ?');
    $req->execute(array($u));
    return $req;
}


//Récupérer toutes infos user depuis table password_reset en fction de token_user & token
function getToken($u, $token){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM password_reset WHERE token_user = ? AND token = ?');
    $req->execute(array($u, $token));
    //$user = $req->fetch();
    return $req;
    //return $user;
}

//Récupérer toutes infos user depuis table password_reset en fction de token
function getTokenPasswordReset($token){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM password_reset WHERE token_user = ?');
    $req->execute(array($token));
    return $req;
}

//Ajouter un user
function addUser($pseudo, $email, $password, $token){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO users(pseudo,email,password,token) VALUES(?,?,?,?)');

    if($req->execute(array($pseudo, $email, $password, $token)))
        return true;
    else
        return false;
}

//Ajouter l'infos user dans la table password_reset
function addPasswordReset($token_user, $token){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO password_reset(token_user,token) VALUES(?,?)');

    if($req->execute(array($token_user, $token)))
        return true;
    else
        return false;
}

//Supprimer l'nfos user dans la table password_reset
function delUser($token){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM password_reset WHERE token_user = ?');

    if($req->execute(array($token)))
        return true;
    else
        return false;
}

//Modifier un info user
function updateUser($password, $token){
    $db = dbConnect();

    $req = $db->prepare('UPDATE users SET password = ? WHERE token = ?');

    if($req->execute(array($password, $token)))
        return true;
    else
        return false;
}

