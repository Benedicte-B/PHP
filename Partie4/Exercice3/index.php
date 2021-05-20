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
    function comparaison ($num1, $num2)
    { 
        if ($num1 > $num2) {
            return 'Le premier nombre est plus grand que le second.';
        } 
        else if ($num1 < $num2) {
            return 'Le premier nombre est plus petit que le second.';
        } 
        else if ($num1 === $num2){
            return 'Les deux nombres sont identiques.';
        }
    }?>
    <p><?= comparaison (6,18) ?></p>
    
    
    
</body>
</html>