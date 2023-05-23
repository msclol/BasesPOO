<?php
    spl_autoload_register(function($class){   //Mise en place de l'autoloader
        include('classes/'.$class.'.php');
    
    });
    
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloader</title>
</head>
<body>
    <h1>Travail sur l'autoloader   </h1>
    
        <?php
        $instance = new Fille();
        $instance->Bonjour();
        echo'<br>';

        $instance2 = new Mere();
        $instance2->Bonjour();
        
        ?>
    <p></p>
    
</body>
</html>