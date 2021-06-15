<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6.6</title>
</head>
<body>
    <h1>Exercice 6 Partie 6 : Les paramètres d'URL PHP</h1>
    <a href="index.php?building=12&room=101">Informations</a>
    <p>
        <?php
        if (isset($_GET['building']) && isset($_GET['room']))
        {
        echo 'Building: '.$_GET['building'];?>
        <p>
        <?= 'Room: '.$_GET['room'];
        }
        ?>
    </p>
</body>
</html>