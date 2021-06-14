<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6.2</title>
</head>
<body>
    <p>
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname']))
        {
        echo 'Nom: '.$_GET['lastname'];?>
    </p>
    <p><?= 'Prénom: '.$_GET['firstname'];}?></p>
    <?php
        if (isset($_GET['age']))
        {
        echo 'Âge: '.$_GET['age'];}
        else
        {
            echo 'Âge: Donnée manquante';
        }?>
    </p>
    
</body>
</html>
