<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 - Exercice 5</title>
</head>
<body>
<p><strong> Version 1 : sans fonction sans continue </strong></p>
    <?php
    $counter = 0;
    while ($counter < 300) {
        $counter += 1;
        if ($counter % 2 != 0) {
            echo "$counter";
        }
    }
    ?>
<p><strong> Version 2 : sans fonction avec continue </strong></p>
    <?php
    $counter = 0;
    while ($counter < 300) {
        $counter += 1;
        if ($counter % 2 == 0) {
            echo "<br>";
            continue;
        }
        echo "$counter";
    }
    ?>
<!-- <p><strong> Version 3 : avec fonction for (fonctionne pas) </strong></p>
    <?php
    // function number2(){
    //     $min2 = 1;
    //     $max2 = 300;
    //     $nbImpairs = '';

    //     for ($i >= $min2; $i <= $max2; $i++) {
    //         i ($i%2 == 1){
    //             $nbImpairs .=$i. ' ';
    //         }
    //     }
    //     return $nbImpairs;
    // }
    //echo number2();
    ?> -->

<p><strong> Version 3 : avec fonction while </strong></p>
<!-- Idée du PHP : faire des fonctions les plus générales pour pouvoir les réutiliser-->
    <?php
        function impairs ($min, $max) {
            while ($min < $max && $min % 2 == 1) { ?>
            <p><?= $min ?></p>
            <?php $min = $min + 2;
            }
        }
        impairs(1, 300)
        ?>
</body>
</html>