<?php   
require_once'./classes/Chien.php';  
require_once'./classes/Produit.php';     
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Voiture</title>
</head>
<body>
    <h1>Produit</h1>
        <?php
            $ordinateur = new Produit();
            $ordinateur->setNom('ordinateur portable');  
            $ordinateur->setPrix(500);       
        ?>
        <ul>
            <li><strong>Produit:</strong> <?=$ordinateur->getNom().' - ';?> Prix:  <?= $ordinateur->getPrix(); ?>€</li>
        </ul>

    <?php
        /**Création du premier chien */
        $chien1 = new Chien();
        $chien1 -> setRace('berger allemand');
        $chien1 -> setNom('naya');
        $chien1 -> setAge(6);

        /**Création du deuxième chien */
        $chien2 = new Chien();
        $chien2 -> setRace('dobermann');
        $chien2 -> setNom('luna');
        $chien2 -> setAge(2);

        echo $chien1->bark().'<br>';
        echo $chien2->bark().'<br>';
        echo $chien1->infos().'<br>';
        echo $chien2->infos().'<br>';
    ?>

</body>
</html>