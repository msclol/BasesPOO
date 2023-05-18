<?php 
require_once'../pizza.php';
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
    <div>
        <label for="color">Background Color:</label>
        <select name="color" id="color">
            <option value="">--- Choose a color ---</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
        </select>
    </div>
    <?php

$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);

?>

<?php if ($color) : ?>
    <p>You selected <span style="color:<?php echo $color ?>"><?php echo $color ?></span></p>
    <p><a href="index.php">Back to the form</a></p>
<?php else : ?>
    <p>You did not select any color</p>
<?php endif ?>
    
</body>
</html>