<?php
    spl_autoload_register(function($class){
        include_once'classes/'.$class.'.php';
    });

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
           $calculer = new Calculer($a,$b);
           echo $calculer->Calculer();

    ?>
    </h2>
   
        <form action="" method="post">
        <div>
            <input type="number" name="a" placeholder="Entrez le nombre A">
        </div>
        <div>
        <input type="number" name="b" placeholder="Entrez le nombre B">
        </div>
        <div><input type="submit" name ="calculer" value="Calculer"></div>
            


        </form>
   
    
</body>
</html>