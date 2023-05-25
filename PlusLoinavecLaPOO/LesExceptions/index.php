<?php
include_once'Personne.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personne</title>
</head>
<body>

<?php
    $personne1 = new Personne('Jean',25);
    echo $personne1->getPrenom();
    echo ' ';

    echo $personne1->getNom();

   


?>
    

    
</body>
</html>