    <?php
    $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre','Décembre');
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 3 - Exercice 1, 2, 3 </title>
</head>
<body>
    <p>Exercice 1</p>
    <p>
        <!-- Déclaration de variables au dessus du DOCTYPE-->
    </p>

    <p>Exercice 2</p>
    <p>
        <?php
            echo $months[5];
        ?>
    </p>
    <p>Exercice 3 version 1 : boucle avec for utilise un index</p>
    <!-- Variable numéro souvent aussi appelée i : début de la boucle-->
    <!-- Cadré par des valeurs-->
        <?php for ($numero = 0; $numero < 12; $numero++) { ?>
            <p> <?= $months[$numero] ?> </p>
            <!-- = remplace le echo -->
        <?php }?>
    

    <p>Exercice 3 version 2 : boucle for each n'utilise pas d'index</p>
    <!-- Affiche tous les éléments d'un tableau. N'est pas cadré. Principalement utilisé en BDD-->
    <?php
        foreach($months as $element) { ?>
        <p> <?= $element ?> </p>
    <?php }?>

    
</body>
</html>