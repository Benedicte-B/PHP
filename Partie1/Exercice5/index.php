<?php
    $answer = 'yes';
    $answer2 = false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 1 - Exercice 5</title>
</head>
<body>
<!-- Utilisation de if et else comme en Javascript-->
<!-- Utilisation des ' ou ", échappement du caractère \ : Option + Maj + /-->
<p><strong>Utilisation du if + else</strong> </p> 
    <p><?php
        if ($answer == 'yes'){
            echo 'Vous avez répondu \'oui\'';
        } else if ($answer == 'no') {
            echo "Vous avez répondu 'non'";
        } else {
            echo 'Rien à dire !'; 
        }
    ?></p>
<p><strong>Utilisation d'une ternaire </strong></p> 
        <p><?php 
            echo 'Vous avez répondu ';
            echo($answer2 ? "'oui'" : "'non'");
        ?>
        </p>

</body>
</html>