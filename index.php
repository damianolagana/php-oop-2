<?php 

require __DIR__ . "/Models/Product.php";


$guinzaglio = new Product("GuinzaglioX2",20,"cane","Equipment");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>E-commerce</h1>
    <div>
        <h2>Product</h2>
        <ul>
            <li><?= $guinzaglio->name ?></li>
            <li><?= $guinzaglio->price ?></li>
            <li><?= $guinzaglio->type ?></li>
            <li><?= $guinzaglio->category ?></li>
            
        </ul>
    </div>
</body>
</html>