<?php
 include_once'classes/Client.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Méthode To String</title>
</head>
<body>
    <?php
        echo new Client('toto');
    $client1->setNom('Mounkala');
    echo $client1;

    ?>
</body>
</html>