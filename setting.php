<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/setting.css">


    <title>Bilboski</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>
    <main>
        <h1>Parametres</h1>

        <div class="flex set-form">

            <form action="controllers/set.php" method="POST">
                <div class="flex set">
                    <p>Afficher le premier texte : </p>
                    <input type="checkbox" name="text1" <?= ($_SESSION['set']['text1'] == 'on') ? 'checked' : '' ?>>
                </div>
                <div class="flex set">

                    <p>Afficher le deuxiemme texte : </p>
                    <input type="checkbox" name="text2" <?= ($_SESSION['set']['text2'] == 'on') ? 'checked' : '' ?>>
                </div>
                <div class="flex set">
                    <p>Afficher l'image 1 : </p>
                    <input type="checkbox" name="img1" <?= ($_SESSION['set']['img1'] == 'on') ? 'checked' : '' ?>>
                </div>
                <div class="flex set">
                    <p>Afficher l'image 2 : </p>
                    <input type="checkbox" name="img2" <?= ($_SESSION['set']['img2'] == 'on') ? 'checked' : '' ?>>
                </div>

       
                <input type="submit" value="valider">
            </form>
        </div>

    </main>
    <?php include_once 'templates/footer.php' ?>
    
</body>
</html>