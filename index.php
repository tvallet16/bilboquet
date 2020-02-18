<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/accueil.css">


    <title>Bilboski</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>

    <main>
       
        <div class="flex lfBand">

            <div class="bandL"></div>
            <div class="flex description">
            <h1>Vous avez besoin d'aide pour choisir votre bilboquet?</h1>
        <?php if (isset($_SESSION['login'])):?>
            <h2 class="title"> Bienvenue <?= $_SESSION['login'] ?> </h2>
        <?php else: ?>
            <h2 class="title"> <a href="login.php">Connectez</a> vous pour bien des avantages</h2>
        <?php endif?>
        <h2 class="title">Presentation d'un bilboquet</h2>
                <div class="img-desc"><img class="imgK" src="img/kendama.jpg" alt="kendama"></div>
                <div class="text-desc"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore in expedita modi, totam temporibus voluptates quaerat eos ad alias officia ipsum porro dolore itaque laudantium aut! Quaerat a quam error.
                Eius aperiam atque vel consequatur omnis blanditiis ut quod fugit assumenda perferendis dignissimos sapiente earum veritatis in sint laborum debitis, numquam iusto nam modi! Quos iure ipsam soluta optio sit.
                Iste cupiditate debitis incidunt magnam ab expedita, dolorum corrupti voluptates aliquam dicta facere, voluptatibus doloribus odio modi! Exercitationem voluptatibus aliquid veritatis ullam sunt enim rem adipisci voluptates minus! Vel, nostrum.</p></div>
            </div>
            <div class="bandR"></div>

        </div>
    </main>
    <?php include_once 'templates/footer.php' ?>

</body>
</html>