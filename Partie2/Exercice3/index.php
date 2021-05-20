    <?php
        $gender = "femme";
        $gender1 = "homme";
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 2 - Exercice 3</title>
</head>
<body>
    <p><strong>Version avec echo</strong></p>
    <p>
    <?php
        if ($gender != "homme"){
            echo 'C\'est une développeuse !!!';
        } else {
            echo "C'est un développeur !!!";
        }
    ?>
    </p>
    <p><strong>Version sans echo</strong></p>
    <?php if ($gender1 != "homme"){ ?>
        <p>C'est une développeuse !!!</p>
    <?php } else {?>
        <p>C'est un développeur !!!</p>
    <?php }?>

    
    </p>
</body>
</html>