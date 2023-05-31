<?php
// spl_autoload_register(function($class){   //Mise en place de l'autoloader
//     include('classes/'.$class.'.php');

// });
include'./classes/Tableau2.php';


?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $nom= new Tableau2();
    $nom->setEntete('Nom');
    $prenom= new Tableau2();
    $prenom->setEntete('Prénom');
    $age= new Tableau2();
    $age->setEntete('Age','cacher');
    $caption =new Tableau2();
    $caption->setCaption('Liste des clients');


    $nom1= new Tableau2();
    $nom1->setDonnees('Dupond','',2);
    $prenom1= new Tableau2();
    $prenom1->setDonnees('Jean');
    $age1= new Tableau2();
    $age1->setDonnees(45,'cacher');

    $nom2= new Tableau2();
    $prenom2= new Tableau2();
    $prenom2->setDonnees('Isabelle');
    $age2= new Tableau2();
    $age2->setDonnees(41,'cacher');

    $nom3= new Tableau2();
    $nom3->setDonnees('Dupuis Gilles','','',2);
    $prenom3= new Tableau2();
    $age3= new Tableau2();
    $age3->setDonnees(30,'cacher');
    
    

    echo Tableau2::DEBUT_TABLE;
    echo $caption->getCaption();
    echo Tableau2::DEBUT_TR;
    echo $nom->getEntete();
    echo $prenom->getEntete();
    echo $age->getEntete();
    echo Tableau2::FIN_TR;

    echo Tableau2::DEBUT_TR;
    echo $nom1->getDonnees();
    echo $prenom1->getDonnees();
    echo $age1->getDonnees();
    echo Tableau2::FIN_TR;
    
    echo Tableau2::DEBUT_TR;
    echo $nom2->getDonnees();
    echo $age2->getDonnees();
    echo Tableau2::FIN_TR;

    echo Tableau2::DEBUT_TR;
    echo $nom3->getDonnees();
    echo $age3->getDonnees();
    echo Tableau2::FIN_TR;

    echo Tableau2::FIN_TABLE;


    ?>
    
</body>
</html>