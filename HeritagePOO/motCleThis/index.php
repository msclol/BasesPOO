<?php
include'Mere.php';
include'Enfant.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulation du mot clé this</title>
</head>
<body>
<h2>
    <?php
        $objet = new Enfant();
        $objet->setPrix(50);
        echo $objet->getPrix();
        echo '<br>';
        echo $objet->AfficherPrix();

    ?>

</h2>

    
</body>
</html>