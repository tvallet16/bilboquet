<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>

            <ul class="flex">
                <div><li><a href="/"><img id="logo" src="img/logoBilbo.png" alt="bilboquet"></a></li></div>
                <li><a href="/">Accueil</a> </li>
                <li><a href="bilboChoice.php">Choisir son bilboquet</a></li>
                <?php if (isset($_SESSION['login']) && $_SESSION['error']=="") :?>
                <div>
                    <li class="profil">
                        <img id="user" src="img/user.png" alt="">
                        <ul class="none">
                            <li><?= $_SESSION['login'] ?></li>
                            <li><a class="link" href="setting.php">Parametres</a> </li>
                            <li><a class="link" href="controllers/logout.php">Déconexion</a> </li>
                        </ul>
                    </li>
                </div>
                <?php else: ?>
                    <li><a href="login.php"> Se connecter </a></li>
                <?php endif ?>
            </ul>

        </nav>
    </header>
</body>
</html>