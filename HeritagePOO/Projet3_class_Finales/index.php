<?php 
    include'Personne.php';
    include'Homme.php';
    include'Femme.php';
    include'EnfantFille.php';
    // include'EnfantGarcon.php';
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
    $personne1 = new Homme('Jean', 114);
    
 

    echo $personne1->parler();
    echo '<br>';
    echo '<br>';

    
    ?>
    
</body>
</html>