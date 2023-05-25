<?php
 spl_autoload_register(function($class){   //Mise en place de l'autoloader
        include_once($class.'php');

    });
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personne</title>
</head>
<body>
<?php
    $personne1 = new Personne();
    $personne1->setPrenom('Kouetos');
    echo getPrenom($personne1);

    
?>
    
</body>
</html>