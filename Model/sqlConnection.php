<?php

global $bdd;

try {
    $bdd = new PDO('mysql:host=localhost;dbname=chat-db;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
