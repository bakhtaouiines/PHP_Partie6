<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6.4</title>
</head>
<body>
    <h1>Exercice 4 Partie 6 : Les paramètres d'URL PHP</h1>
    <a href="index.php?language=PHP&server=LAMP">Informations</a>
    <p>
        <?php
        if (isset($_GET['language']) && isset($_GET['server']))
        {
        echo 'Language: '.$_GET['language'];
        ?>
    </p>
    <p><?= 'Serveur: '.$_GET['server'];}?></p>
</body>
</html>