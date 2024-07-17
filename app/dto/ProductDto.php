<?php

namespace app\dto;

use app\PdoConfig;
use app\Product;
class ProductDto implements DtoInterface
{
    public static function insert($product) : void
    {
        $db = PdoConfig::setup();
        $q = $db->prepare('INSERT INTO products (title, description, price, image, category_id) VALUES (:title, :description, :price, :image, :category_id)');
        $q->execute([
            'title' => $product->getTitle(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice(),
            'image' => $product->getImage(),
            'category_id' => $product->getCategoryId()
        ]);
    }

    public static function selectAll(): array
    {
        $db = PdoConfig::setup();
        $q = $db->query('SELECT * FROM products');
        return $q->fetchAll(\PDO::FETCH_ASSOC);
    }
}