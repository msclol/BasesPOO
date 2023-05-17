<?php require'./Pizza2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Pizza</title>
</head>
<body>
    <?php
    //Appel de la variable de classe
    Pizza2::setEmballage(1);

    //Création des variables d'objet
    $reine = new Pizza2();
    $calzone = new Pizza2();
    $royale = new Pizza2();

    $reine->setNom('Reine');
    $calzone->setNom('Calzone');
    $royale->setNom('Royale'); 

    $reine->setPrix(12);
    $calzone->setPrix(9);
    $royale->setPrix(12); 

   
    

    ?>

<fieldset>
    <legend>
        Choix de votre Pizza
    </legend>
    <h2>Pizza</h2>
    <form action="" method="post">
        <select name="pizzaList">
            <option value="<?= $reine->getNom();?>"><?= $reine->getNom(); ?> Prix:<?= $reine->getPrix();?>€
            </option>
            
            <option value="<?= $calzone->getNom(); ?>"><?= $calzone->getNom(); ?> Prix:<?= $calzone->getPrix()?>€
            </option>
            <option value="<?= $royale->getNom(); ?>"><?= $royale->getNom(); ?> Prix:<?= $royale->getPrix()?>€</option>
        </select>
        
        <p><input type="number" name="qte" placeholder="Quantité de Pizzas"></p> 
        <p><input type="submit" name="commander" value="Commander"></p> 
    </form>
</fieldset>
<br>
<h1>
<?php 
    
    $pizza = $_POST['pizzaList'];
    $quantite = $_POST['qte'];
    echo ($$pizza->setQuantite($quantite));
    


    //$pizza->setQuantite();
    
    // if(isset($_POST['commander'])){
    //     $pizza = $_POST['pizzaList'];
    //     $quantite = $_POST['qte'];

    //     $$pizza->setQuantite($quantite);
    //     $calcul = $$pizza->calcul();

    //     echo 'Le montant de votre commande est de: '.$calcul.'€'.' Tout frais compris';
    // }
?>
</h1>
   
    
</body>
</html>