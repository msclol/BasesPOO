<?php   
require_once'./classes/Chien.php';  
require_once'./classes/Produit.php';     
include './classes/Produit2.php'
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Voiture</title>
</head>
<body>
    <div class="container">
        <div class="container__main">
            <h2>Produits</h2>
            <?php 
            $desktop =new Produit();
            $desktop->setNom('Ordinateur de bureau');
            $desktop->setPrix(999);
            $clavier=new Produit();
            $clavier->setNom('clavier');
            $clavier->setPrix(12);
            Produit::setWarranty(20);//Affectation du montant  20€ 

            ?>
            <ul>
                <li><span class="myBold">Valeur de la garantie: </span><?= Produit::getWarranty();?>€</li>
                <li><span class="myBold">Produit:</span> <?= $desktop->getNom();?> - <span class="myBold">Prix: </span><?= $desktop->getPrix();?>€</li>
                <span class="myBold">Tarif garantie comprise: </span> <?= $desktop->getAjouterWarranty()?> <br><br>
                <li><span class="myBold">Produit:</span> <?= $clavier->getNom();?> - <span class="myBold">Prix: </span><?= $clavier->getPrix();?>€</li>
                <span class="myBold">Tarif garantie comprise: </span> <?= $clavier->getAjouterWarranty()?>€

            </ul>
        
            
        </div>
        
        <div class="container__main">
          <!-- <hr> -->
          <h2>Produits</h2>
            <?php
                $laptop     = new Produit();
                $ordinateur = new Produit();
                $ordinateur->setNom('ordinateur portable');  
                $ordinateur->setPrix(999);   
                $ordinateur->exendedWarranty(50); 
                
                $souris = new Produit();
                $souris->setNom('souris');
                $souris->setPrix(12);
                $souris->exendedWarranty(2);
                $laptop->setPrix(1000);
                Produit::setWarranty(10);
                echo 'Montant de la Remise: '.Produit::REMISE;

            ?>
            <ul>
                <li><span class="myBold">Produit:</span> <?=$ordinateur->getNom();?> - Prix:  <?= $ordinateur->getPrix(); ?>€ - <span class="myBold">Couleur: </span><?= Produit::$couleur; ?></li>
                <li><span class="myBold">Produit: </span><?=$souris->getNom();?> - Prix: <?=$souris->getPrix();?>€ - <span class="myBold">Couleur: </span><?=$souris::$couleur;?></li>
                

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
            <p class="lien-vers-pizza"><a href="AffichePizza.php">Vers la classe Pizza</a>  </p>
        </div>
       
        <div class="container__main">
            <?php
                $tablette = new Produit2('Tablette Lenovo',1000);
                echo '<br>'; 
                echo '<strong>'.'Produit:'.'</strong>'.$tablette->getNom().'<br>'.' Prix: '.$tablette->getPrix().'€';

            ?>
        </div>

    </div>

    


    

</body>
</html>