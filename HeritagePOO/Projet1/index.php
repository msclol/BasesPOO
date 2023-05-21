<?php
    require'./classes/pizza.php';
    require'./classes/pizzaPromo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        Pizza::setEmballage(2);
        PizzaPromo::setRemise(5);

        $pizza = new Pizza('reine',10);
        echo $pizza->getNom().' '.$pizza->getTarif();
        echo'<br>';

        $pizzaPromo = new PizzaPromo('royale',12);
        echo $pizzaPromo->getNom().' '.$pizzaPromo->getTarif();

    ?>

    
</body>
</html>