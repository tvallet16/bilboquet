<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">


    <title>Bilboski</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>

    <main>
        <h1>Connexion</h1>

        <div class="flex">
    
            <form class="flex login" action="controllers/log.php" method="POST" autocomplete="off" >
                <input type="text" name="login"  placeholder="login">
                <input type="password" name="password" placeholder="mot de passe">
                <input type="submit" value="Valider" id="submit">
                <?php if (isset($_SESSION['error'])):?>
                    <p> <?= $_SESSION['error'] ?> </p> 
                <?php endif?>
            </form>
        </div>
    </main>

    <?php include_once 'templates/footer.php' ?>
    
</body>
</html>