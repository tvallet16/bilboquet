<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/choice.css">



    <title>Document</title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>

    <main>
        <?php if (!isset($_SESSION['login'])): ?>
            <h1>Veuillez vous <a href="login.php">connecter</a> pour avoir nos conseils d'experts</h1>

        <?php else: ?>
        <div class="flex lfBand">
            <div class="midleBand">
                <h1>Bien choisir son bilboquet</h1>
                <div class="flex choices">

                    <?php if ($_SESSION['set']['img1']=="on"): ?>
                        <div class="choice"><img class="imgChoice" src="img/bilboquet-pro.jpg" alt="bilboPro"></div>
                    <?php endif ?>

                    <?php if ($_SESSION['set']['text1']=="on"): ?>
                        <div class="choiceText"> <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex nam at incidunt esse nobis laboriosam explicabo qui eveniet! Aliquid recusandae eos, harum mollitia repellendus voluptatem! Incidunt temporibus tempora blanditiis laudantium.
                        Placeat, dolore quidem. Eius ab eveniet aut a ducimus in debitis maiores fugit, placeat dicta inventore consectetur praesentium laboriosam, commodi exercitationem vero nulla aliquam impedit magni ad doloremque quasi illo.
                        Quis enim accusamus fugiat. Molestiae ipsum laudantium eveniet error minima excepturi quisquam, nostrum voluptatum odit eaque quos a vel! Corrupti dolores blanditiis iste tenetur quas consectetur corporis, laudantium iusto nobis.</p></div>
                    <?php endif ?>
                    
                    <div class="reverse flex">
                        <?php if ($_SESSION['set']['img2']=="on"): ?>
                            <div class="choice"><img class="imgChoiceP" src="img/bilboquetTable.jpg" alt="bilboTable"></div>
                        <?php endif ?>
                        <?php if ($_SESSION['set']['text2']=="on"): ?>
                        <div class="choiceText"> <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex nam at incidunt esse nobis laboriosam explicabo qui eveniet! Aliquid recusandae eos, harum mollitia repellendus voluptatem! Incidunt temporibus tempora blanditiis laudantium.
                        Placeat, dolore quidem. Eius ab eveniet aut a ducimus in debitis maiores fugit, placeat dicta inventore consectetur praesentium laboriosam, commodi exercitationem vero nulla aliquam impedit magni ad doloremque quasi illo.
                        Quis enim accusamus fugiat. Molestiae ipsum laudantium eveniet error minima excepturi quisquam, nostrum voluptatum odit eaque quos a vel! Corrupti dolores blanditiis iste tenetur quas consectetur corporis, laudantium iusto nobis.</p></div>
                    <?php endif ?>
                    </div>
            </div>
            
        </div>
        <?php endif ?>
    </main>
    <?php include_once 'templates/footer.php' ?>

    
</body>
</html>