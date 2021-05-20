    <?php
        $age = 22;
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 - Exercice 1</title>
</head>
<body>
    <p>Option if</p>
    <?php
        if ($age >= 18) {
            echo "Vous êtes majeur";
        }
        else {
            echo "Vous êtes mineur";
        }
    ?>
    <p>Option ternaire</p>
    <?php
        echo $age >= 18 ? "Vous êtes majeur" : "Vous êtes mineur";
    ?>
</body>
</html>