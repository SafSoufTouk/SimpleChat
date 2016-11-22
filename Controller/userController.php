<?php



function renderView() {
    // on teste si le visiteur a soumis le formulaire de connexion
    if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
        if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {


            $user = checkUser($_POST['login'], $_POST['pass']);
            
            // si on obtient une réponse, alors l'utilisateur est connecté
            if ($user) {
//                session_start();
                $_SESSION['connectedUser'] = $_POST['login'];
                header('Location: index.php?page=chat');
                exit();
            }
            // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
            else{
                $erreur = 'Le login ou le mot de passe est incorrect.';
            }
        } else {
            $erreur = 'Au moins un des champs est vide.';
        }
    }
    
    include '/Views/user/login.php';
}

//$user = checkUser('user1', '0000');
//
//var_dump($user);
//die;


