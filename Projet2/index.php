<?php
include'Mere.php';
include'Fille.php';
include'SFille.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet 2</title>
</head>
<body>
<h2>
    <?php
        // $mere = new Mere();
        // echo $mere->addition(2, 3);

        // echo'<br>';

        // $fille = new Fille();
        // $fille->addition(4, 2);
        // echo $fille->soustraction(1);
        // echo $fille->soustraction(1);
        
        $sFille = new SFille();
        $sFille->addition(10, 5);
        $sFille->soustraction(1);
       
        

    ?>

</h2>

    
</body>
</html>