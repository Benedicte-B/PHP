<?php
$lastName = 'BERTRAND';
$firstName = 'Bénédicte';
$age = 29;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 1 - Exercice 2</title>
</head>
<body>
<!-- Déclarer trois variables lastname, firstname, age (de type entier), et les afficher-->
<p>Version 1 : On appelle les 3 variables indépendament </p>
    <?php
        
        echo $lastName;
        echo "<br>";
        echo $firstName;
        echo "<br>";
        echo $age;
        echo "<br>";
    ?>
<p>Version 2 : On appelle les 3 variables ensemble </p>
    <?php
        echo $lastName . ' ' . $firstName . ' ' . $age . ' ans';
    ?>
</body>
</html>