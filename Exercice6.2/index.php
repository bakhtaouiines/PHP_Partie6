
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
    <?php
        if (isset($_GET['age']))
        {?>
        <p><?= 'Âge: '.$_GET['age'];?></p>
        <?php }else{?>
    <p><?= 'Âge: Donnée manquante';?></p>
    <?php } ?>
</body>
</html>
