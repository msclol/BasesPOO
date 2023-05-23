<?php 
    spl_autoload_register(function($class){
        include($class.'.php');
    });
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordre de Priorité</title>
</head>
<body>
    <?php
       $objet = new Fille();
       $objet->Bonjour();
    ?>
    
</body>
</html>