<?php
    // spl_autoload_register(function($class){
    //     include('classes/'.$class.'.php');
    // });

   include_once'classes/Calculer.php';
   include_once'classes/Calculer.class.php';

?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer</title>
</head>
<body>
    <h2>
    <?php
        if(isset($_POST['calculer'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
        }
        $calculer = new std\Calculer($a,$b);
           echo $calculer->Calculer();

    ?>
    </h2>
   
    <form action="" method="post">
            <h2>Addition</h2>
        <div>
            <input type="number" name="a" placeholder="Entrez le nombre A">
        </div>
        <div>
        <input type="number" name="b" placeholder="Entrez le nombre B">
        </div>
        <div><input type="submit" name ="calculer" value="Calculer"></div>        
    </form>
    <hr>
    <h2>
    <?php
        if(isset($_POST['calculer'])){
            $a = $_POST['a'];
            $b = $_POST['b'];
        }
        $calculer = new importee\Calculer($a,$b);
           echo $calculer->Calculer();

    ?>
    </h2>

    <form action="" method="post">
            <h2>Soustraction</h2>
        <div>
            <input type="number" name="a" placeholder="Entrez le nombre A">
        </div>
        <div>
        <input type="number" name="b" placeholder="Entrez le nombre B">
        </div>
        <div><input type="submit" name ="calculer" value="Soustraire"></div>        
    </form>
   
    
</body>
</html>