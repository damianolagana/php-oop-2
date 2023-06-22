<?php 

require __DIR__ . "/Models/Product.php";
require __DIR__ . "/Models/Category.php";


$dog = new Category("per il cane");
$cat = new Category("per il gatto","fa-solid fa-cat");
$producyCategory = [$dog,$cat];

$products=[
    new Product("GuinzaglioX2",20.00,true,100,"https://picsum.photos/200/300?v=123",$dog),
    new Product("Crocchette10kg",50.00,true,20,"https://picsum.photos/200/300?v=123",$dog),
    new Product("Tiragraffi",25.00,true,50,"https://picsum.photos/200/300?v=123",$cat),

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
    <h1>E-commerce</h1>

    <div>
        <h2>Product</h2>
        <?php foreach($products as $product) {?>
           <div>
                <h3><?=$product->name?></h3>
                <span class="<?=$product->category->icon?>"></span>
                <div>

                </div>
           </div> 
        <?php } ?>
    </div>
    
</body>
</html>