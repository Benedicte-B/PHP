<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 - Exercice 1</title>
</head>
<body>
    <!-- En PHP on remplit les parenthèses avec les arguments)-->
    <!-- Sert à comparer 2 variables. Ex : majeur/mineur-->
    <?php
    function bonjour ($name, $surname, $age)
    {
        return 'Bonjour ' . $name . ' ' . $surname . ' tu as ' . $age . ' ans.';
    }?>
    <p><?= bonjour('BERTRAND', 'Benedicte', 29)?></p>
    
    
    
</body>
</html>