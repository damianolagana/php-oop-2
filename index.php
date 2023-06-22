<?php 

require __DIR__ . "/Models/Product.php";
require __DIR__ . "/Models/Category.php";


$dog = new Category("per il cane");
$cat = new Category("per il gatto","fa-solid fa-cat");
$productCategory = [$dog,$cat];

$products=[
    new Product("GuinzaglioX2",20.00,true,100,"https://picsum.photos/200/300?y=123",$dog),
    new Product("Crocchette10kg",50.00,true,20,"https://picsum.photos/200/300?x=123",$dog),
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
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body class="bg-dark text-light">
    <div class="container text-center">
        <h1 class="py-3">E-commerce</h1>
        <div class="row">
           
            <h2 class="py-3">Category</h2>
            <div class="d-flex justify-content-around">
                <?php foreach($productCategory as $category) {?>
                    <div class="col-5 badge bg-danger">
                        <span class="<?= $category->icon ?> fs-2 p-2"></span>
                    </div>
                <?php } ?>
            </div>
        
        </div>

    
        <div class="container">
            <div class="row">
                
                <h2 class="py-3">Product List</h2>
                <div class="pt-4">
                    <?php foreach($products as $product) {?>
                       <div class="py-4">
                            <h3><?=$product->name?> <span class="<?=$product->category->icon?>"></span></h3>
                            
                            <div class="py-2">
                                <small>Price: <?=$product->price?> </small>
                            </div>
                            <img src="<?=$product->image?>" alt="">
                       </div> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>