<?php
    include'./classes/Mere.php';
    include'./classes/Enfant.php';

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heritage en PHP</title>
</head>
<body>
    <?php
    $enfant = new Enfant();
     $mere = new Mere();
     var_dump($mere);
     echo'<br>';
     var_dump($enfant);


    ?>

    
</body>
</html>