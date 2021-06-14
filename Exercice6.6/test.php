<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6.6</title>
</head>
<body>
    <p>
        <?php
        if (isset($_GET['building']) && isset($_GET['room']))
        {
        echo 'Building: '.$_GET['building'];?>
        <p>
        <?= 'Room: '.$_GET['room'];
        } 
        else 
        {
        ?>
    </p>
<p><?= 'Données manquantes';}?></p>        
</body>
</html>