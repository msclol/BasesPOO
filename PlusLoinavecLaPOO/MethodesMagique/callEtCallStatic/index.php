<?php
 spl_autoload_register(function($class){   //Mise en place de l'autoloader
        include_once('classes/'.$class.'.php');

    });
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__call</title>
</head>
<body>
<?php
    $objet = new Article();
    $objet->setNom('toto');
    // echo $objet->getNom();
    echo $objet->afficherNom('arg1', 'arg2');
    echo'<br><br>';

    Article::setPrix(50);
    // echo Article::getPrix();
    echo Article::afficherPrix();
?>
<p><em>Ceci est la description de l'article</em></p>
    
</body>
</html>