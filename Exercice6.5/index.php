<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6.5</title>
</head>
<body>
    <h1>Exercice 5 Partie 6 : Les paramètres d'URL PHP</h1>
    <a href="index.php?week=12">Informations</a>
    <p>
        <?php
        if (isset($_GET['week']))
        {
        echo 'Week: '.$_GET['week'];
        }
        ?>
    </p>
</body>
</html>