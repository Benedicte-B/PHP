<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 - Exercice 1</title>
</head>
<body>
    <?php
        function chaineCaract ($type)
        {
            return $type;
        } ?>
        <p> <?= chaineCaract('Jouer à un jeu vidéo')?> </p>
    <!-- Le echo donne la valeur 'jeu vidéo' à la variable type-->
    <!-- Return car on n'utilise pas d'echo dans une fonction -->
</body>
</html>