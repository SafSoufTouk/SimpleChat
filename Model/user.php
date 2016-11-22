<?php
function checkUser($login, $password) {
    global $bdd;

    $bdd = new PDO('mysql:host=localhost;dbname=chat-db;charset=utf8', 'root', '');

    $pass = md5($password);
    $req = $bdd->prepare('SELECT * FROM user where login = :login and password = :password');
    $req->bindParam(':login', $login, PDO::PARAM_STR);
    $req->bindParam(':password', $pass, PDO::PARAM_STR);
    $req->execute();
    $users = $req->fetchAll();

    return count($users) ? $users[0] : false;
}

function isConnected() {
    return (isset($_SESSION['connectedUser'])) ? true : false;
}
