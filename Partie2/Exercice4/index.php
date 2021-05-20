    <?php
        $age = 12;
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 - Exercice 4</title>
</head>
<body>
    <p><strong>Version avec echo</strong></p>
    <p>
    <?php
        if ($age >= 18){
            echo "Tu es majeur";
        } else {
            echo "Tu n'es pas majeur";
        }
    ?>
    </p>
    <p><strong>Version sans echo</strong></p>
    <?php if ($age >= 18){?>
        <p> Tu es majeur</p>
    <?php } else {?>
        <p> Tu es mineur</p>
    <?php }?>
    
</body>
</html>