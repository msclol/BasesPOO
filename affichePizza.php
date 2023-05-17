<?php 
    require'Pizza.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylePizza.css">

    
    <title>Document</title>
    <!--<link rel="stylesheet" href="./css/style.css">-->
</head>
<body>
    
</body>
</html>
<?php
        Pizza::setEmballage(1);
        $calzone = new Pizza();
        $reine   = new Pizza();
        $royale  = new Pizza();

        $calzone->setNom('calzone');
        $reine->setNom('reine');
        $royale->setNom('royale');

        $calzone->setPrix(15);
        $reine->setPrix(10);
        $royale->setPrix(13);

        // Côté Client
      //  $calzone->setQuantite(1);
        // echo $calzone->Calcul();
    ?>
    <fieldset>
        <legend><h2>Test Pizza class</h2></legend>
               
        <form action="" method="post">
        <select name="pizzaListe">
            <option value="<?= $reine->getNom();?>"><?= $reine->getNom(); ?> Prix:<?= $reine->getPrix();?>€</option>

            <option value="<?= $calzone->getNom(); ?>"><?= $calzone->getNom(); ?> Prix:<?= $calzone->getPrix()?>€</option>

            <option value="<?= $royale->getNom(); ?>"><?= $royale->getNom(); ?> Prix:<?= $royale->getPrix()?>€</option>
        </select>
        
        <p><input type="number" name="qt" placeholder="Quantité de Pizzas"></p> 
        <p><input type="submit" name="commander" value="Commander"></p> 
    </form>

    <?php
        if(isset($_POST['commander'])) {
            $quantite = $_POST['qt'];
            $pizza    = $_POST['pizzaListe'];

            $$pizza->setQuantite($quantite); //Pour récupérer la quantie de l'input:number
            $calcul = $$pizza->Calcul();

            if(is_numeric($quantite)) {
                echo 'Le montant de votre commande sera de '.$calcul.'€ (emballage compris).';
            }
            echo'<br>';
            var_dump ('Valeur de $$pizza: ',$$pizza->setQuantite($quantite));
        }
    ?>

       
        
        

    </fieldset>