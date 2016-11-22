<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>	
        <?php
        session_start();
        include_once('./Model/sqlConnection.php');
        require './Model/checkRoute.php';
        include_once('./Model/user.php');
        

        $page = isset($_GET['page']) ? $_GET['page'] : null;

        $isConnectedUser = isConnected();
        
        if (!$isConnectedUser) {
            $page = 'login';
        }
        if (!$page) {
            include_once('./Controller/chatController.php');
            renderView();
        }

        switch ($page) {
            case 'login':
                include_once('Controller/userController.php');
                renderView();


                break;
            case 'chat':
                include_once('Controller/chatController.php');
                renderView();


                break;

            default:
                break;
        }
        ?>
    </body>
</html>