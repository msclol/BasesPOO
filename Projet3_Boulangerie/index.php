<?php
    include 'classes/Boulangerie.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Kouetosine</h1>
    <?php
       $croissant       = new Boulangerie('croissant',0.85);
       $painAuChocolat  = new Boulangerie('pain au chocolat', 1);
       $baguette        = new Boulangerie('baguette', 1.2);

       echo $croissant->getProduit().' '.$croissant->getTarif();
       echo'<br>';
       echo $painAuChocolat->getProduit().' '.$painAuChocolat->getTarif();
       echo'<br>';
       echo $baguette->getProduit().' '.$baguette->getTarif();

       $tarifCroissant = $croissant->getTarif();
       echo'<br>';
       $tarifPainAuChocolat = $painAuChocolat->getTarif();
       echo'<br>';
       $tarifBaguette = $baguette->getTarif();
       echo 'Total à payer: '.($tarifPainAuChocolat + $tarifBaguette);
       Boulangerie::setTirelire(0.5);
       echo'<br>';
       echo 'Tirelire: '.Boulangerie::getTirelire()
    ?>


</body>
</html>