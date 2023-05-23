<?php
    spl_autoload_register(function($class){   //Mise en place de l'autoloader
        include('classes/'.$class.'.php');

    });
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>
<body>
    <?php
        $carotte = new Legume();
        $carotte->setNom('Carotte');
        echo $carotte->getNom();

        $chien = new Animal();
        $chien->setNom('Chien');
        echo $chien->getNom();

        

    ?>

    
</body>
</html>