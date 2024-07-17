<?php

use app\dto\ProductDto;
use app\Product;

require_once __DIR__ . "/../../vendor/autoload.php";

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_FILES['image'];

$ext = pathinfo($image['name'], PATHINFO_EXTENSION);
$filename = uniqid() . '.' . $ext;
$filepath = "../../uploads/". $filename;
move_uploaded_file($image['tmp_name'], $filepath);

$product = new Product("$title", "$description", $price, $filename, $_POST['category_id']);
echo "<pre>";
print_r($product->toArray());
echo "</pre>";
ProductDto::insert($product);