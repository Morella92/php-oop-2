<?php
    include './product.php';
    include './food.php';
    include './toy.php';
    include './bed.php';
    include './category.php';

    // Istanze della classe Product
    $product1 = new Product("Dog Leash", 5, "Accessories");
    $product2 = new Product("Dog Coat", 20, "Abbigliamento");

    // Istanze della classe Food
    $food1 = new Food("Croquettes", 15, "Pet's Food", 2, "Dry", "Adult");
    $food2 = new Food("Cat's Food", 10, "Pet's Food", 1, "Wet", "Puppy");

    // Istanze della classe Toy
    $toy1 = new Toy("Dog's Ball", 7, "Toys", "Plastica", "Adult");
    $toy2 = new Toy("Mouse", 16, "Toys", "Peluche", "Puppy");

    // Istanze della classe Bed
    $bed1 = new Bed("Dog Pillow", 30, "Pet's Bed", "50x70");
    $bed2 = new Bed("Cat House", 40, "Pet's Bed", "70x90");

    $products = [
        $product1, 
        $product2, 
        $food1, 
        $food2, 
        $toy1, 
        $toy2, 
        $bed1, 
        $bed2
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Negozio di animali</title>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center">
            Il miglior cibo per il tuo amico!
        </h1>
    </div>
</body>
</html>