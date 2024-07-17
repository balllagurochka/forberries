<?php
    require "vendor/autoload.php";
    use app\dto\ProductDto;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="resourses/carts.css">
    <title>Document</title>
</head>
<body>
    <?php require_once __DIR__ . '/components/header.php'?>
    <div class="container">
        <?php
        $products = ProductDto::selectAll();
        foreach ($products as $product) {
            ?>
            <div class="card-wrapper">
                <div class="card" style="width: 18rem;">
                    <img src="uploads/<?= $product['image'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['title'] ?></h5>
                        <p class="card-text"><?= $product['description'] . " " ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $product['price'] . "$" ?></li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Buy</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


</body>
</html>