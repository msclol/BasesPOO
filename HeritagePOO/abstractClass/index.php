<?php
    include'Mere.php';
    include'Fille.php';

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
</head>
<body>
    <h1>Mes Abstract Class</h1>
    <?php
        $fille = new Fille();
        echo $fille->calculer();
    ?>
    
    
</body>
</html>