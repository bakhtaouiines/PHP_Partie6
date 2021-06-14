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
        $startDate = date('02-05-2016', strtotime($_GET['startDate']));
        if (isset($_GET['startDate']))
        {
        echo $startDate;
        }
        ?>
    <p>
        <?php
        $endDate = date('27-11-2016', strtotime($_GET['endDate']));
        if (isset($_GET['endDate']))
        {
        echo $endDate;
        }
        ?> 
    </p>
</body>
</html>
<!-- strtotime = Transforme un texte anglais en timestamp -->