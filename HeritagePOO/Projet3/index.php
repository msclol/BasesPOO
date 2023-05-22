<?php 
    include'Personne.php';
    include'Homme.php';
    include'Femme.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet-3 Heritage</title>
</head>
<body>
    <h1>Projet-3</h1>
    <?php 
    $personne1 = new Femme('Promesse', 29);
    $homme = new Homme('Cédric', 45);

    echo $personne1->parler();
    echo '<br>';
    echo '<br>';
    echo $homme->parler();

    
    ?>
    
</body>
</html>