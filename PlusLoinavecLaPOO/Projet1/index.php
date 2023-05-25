<?php
    spl_autoload_register(function($class){
        include_once('classes/'.$class.'.php');

    });

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet1</title>
</head>
<body>
    <?php
        $chien = new Animal();
        echo '<br>';
        $chien->setMarque('Chien');
        $chien->setNom('Rex');
        echo $chien->getRace().'<br>';
        echo $chien->getNom().'<br>';

        $mustang = new Voiture();
        echo '<br>';
        $mustang->setMarque('Ford');
        $mustang->setNom('Mustang');
        echo $mustang->getMarque().'<br>';
        echo $mustang->getNom();



    ?>
    
</body>
</html>