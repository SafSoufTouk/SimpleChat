<html>
    <head>
        <title>Accueil</title>
        <style type="text/css">


            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                margin: 0 auto;   
                text-decoration: none;
                display: block;
                font-size: 16px;
                cursor: pointer;
                width:30%;
                height:40px;
                margin-top: 20px;

            }
            input[type=text], input[type=password]{
                width:100%;
                margin-top:5px;

            }


            .login_wrapper {
                width: 30%;
                /*height:220px;*/
                margin-right: auto;
                margin-left: auto;
                background: #3B5998;
                border: 1px solid #999999;
                padding: 10px;
                font: 14px 'lucida grande',tahoma,verdana,arial,sans-serif;
                color: #fff;
                padding-bottom: 20px;
            }
            
            .error-msg{
                color: red !important;
            }


            @media only screen and (max-width: 720px) {
                /* For mobile phones: */
                .chat_wrapper {
                    width: 95%;
                    height: 40%;
                }
                .welcome_wrapper {
                    width: 95%;
                }


                .button{ width:100%;
                         margin-right:auto;   
                         margin-left:auto;
                         height:40px;}
            }

        </style>
    </head>

    <body>
        <div class="login_wrapper">
            Connexion :<br />
            <form action="index.php?page=login" method="post">
                Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
                Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
                <?php
                if (isset($erreur))
                    echo '<br /><div class="error-msg">'.$erreur.'</div>';
                ?>
                <input type="submit" name="connexion" value="Connexion" class="button">
            </form>

        </div>
    </body>
</html>

