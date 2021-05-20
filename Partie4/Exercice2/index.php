<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 - Exercice 2</title>
</head>
<body>
    <?php
        function chaineCaract ($type, $classe, $parametre)
        {
            return 'Jouer à un ' . $type . $classe . $parametre;
        } ?>
        <p> <?= chaineCaract('jeu vidéo ', ' d\'horreur', ' tout seul.')?> </p>
</body>
</html>