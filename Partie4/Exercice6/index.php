<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 - Exercice 6</title>
</head>
<body>
    <?php
    $counter = 0;

    while ($counter < 100) {
        $counter += 1;
        echo $counter."<br>";
    }

    $remplace = array(3, 5);
    $multiple   = array("Fizz", "Buzz");

    $newcounter = str_replace($remplace, $multiple, $counter);
    echo $newcounter."<br>";    
    ?>

    <?php
    function multiples($min, $max) {
        while ($min < $max) {
            if ($min%5 === 0 && $min%3 === 0){
                echo "FizzBuzz <br>";
            }
            else if ($min%5 == 0) {
                echo "Buzz <br>";
            }
            else if ($min%3 == 0) {
                echo "Fizz <br>";
            else {
                echo "{$min} <br>";
            }
            $min = $min + 1;
            }
        }
        multiples (1,100);
    ?>



</body>
</html>