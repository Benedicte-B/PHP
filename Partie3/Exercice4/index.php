<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 3 - Exercice 4, 5, 6 </title>
</head>
<body>
    <p>Départements des Hauts de France</p>
    <p><strong>Exercice 4 et 5 - Version sans crochet</strong></p>
    <?php
        $deptHautsFrance = array (
            '02'  => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme',
        );
        foreach ($deptHautsFrance as $element) {?>
        <p><?= $element ?></p>
    <?php }?>
    <p><strong>Exercice 4 et 5 - Version avec crochet</strong></p>
    <?php
        $deptHDF = [
            '02'  => 'Aisne',
            '59' => 'Nord',
            '60' => 'Oise',
            '62' => 'Pas-de-Calais',
            '80' => 'Somme',
        ];
        foreach ($deptHDF as $element) {?>
        <p><?= $element ?></p>
    <?php }?>
    <p><strong>Exercice 6 </strong></p>
    <?php
    $deptHDF = [
        '02'  => 'Aisne',
        '59' => 'Nord',
        '60' => 'Oise',
        '62' => 'Pas-de-Calais',
        '80' => 'Somme',
    ];
    foreach($deptHDF as $key => $value) {?>
    <p><?= 'Le département ' . $key . ' a le numéro ' . $value;?></p>
    <?php }?>   

</body>
</html>