<?php
    $object = 'Ceci est un objet';
    $message = 'Ceci est un message'; 
    $fontColor = 'toto';
    $nameCompetence = 'HTML';
    $valueCompetence = 70;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP Partie 1 - Exercice 1</title>
</head>
<body>
<!-- Créer 2 variables Object et message. Les afficher --> 
    <p> <strong>Version 1 : le code n'est pas dans un p</strong></p>
    
    <?php
        echo '<p>Bonjour</p>';
        $object = 'Ceci est un objet';
        $message = 'Ceci est un message'; 
        echo $object;
        echo $message;
        echo "<br>";
        echo $object, $message;
    ?>

    <p><strong>Version 2 : insérer le PHP dans un (tout sur le même ligne)/des (saut à la ligne) p</strong></p>
    <p><?php echo $object ?></p>
    <p><?php echo $message ?></p>

    <p> <strong>Version 3 : raccourcis pour supprimer le echo</strong></p>
    <p><?= $object ?></p>
    <p><?= $message ?></p>

    <p class="<?= $fontColor ?>"> <strong>Version 4 : insérer une classe dynamique</strong></p>

    <p> <strong>Version 5 : insérer des valeurs dynamiques</strong></p>
    <p><?= $nameCompetence ?></p>
    <progress value="<?= $valueCompetence ?>" max="100"> 70% </progress>
    <!-- Intérêt : lier le PHP a une base de données pour dynamiser le contenu et réduire le HTML-->

</body>
</html>