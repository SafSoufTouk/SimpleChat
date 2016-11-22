<?php

require_once 'user.php';
$routeExist = preg_match('/^\/SimpleChat\/index.php/', $_SERVER['REQUEST_URI']);

if (!$routeExist) {

    $user = isConnected();
    if ($user) {
        header('Location: ../index.php?page=chat');
    } else {
        header('Location: ../index.php?page=login');
    }
    exit();
}

