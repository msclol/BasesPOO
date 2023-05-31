<?php
// include_once'./classes/classe1/MaClass1.php';
// include_once'./classes/classe2/MaClasse2.php';

spl_autoload_register(function($class){
    $namespace = str_replace('\\','/',$class);
    include($namespace.'.php');

});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NameSpace et Autoload</title>
</head>
<body>
    <?php
    new classes\classe1\MaClasse1();
    echo '<br>';
    new classes\classe2\MaClasse2();

    ?>
    
</body>
</html>