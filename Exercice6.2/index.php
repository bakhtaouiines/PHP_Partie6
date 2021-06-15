<?php
        if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset ($_GET['age']))
        {
            echo 'Âge: '.$_GET['age'];}
        else
        {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6.2</title>
</head>
<body>
    <h1>Exercice 2 Partie 6 : Les paramètres d'URL PHP</h1>
    <a href="index.php?lastname=Nemare&firstname=Jean">Informations</a> 
    <p><?= 'Âge: Donnée manquante';}?></p>
</body>
</html>
