<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6.1</title>
</head>

<body>
    <h1>Exercice 1 Partie 6 : Les paramètres d'URL PHP</h1>
    <a href="index.php?lastname=Nemare&firstname=Jean">Informations</a>
    <p>
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname']))
        {
        echo 'Nom: '.$_GET['lastname'];
        ?>
    </p>
    <p><?='Prénom: '.$_GET['firstname'];}?></p>        
</body>

</html>