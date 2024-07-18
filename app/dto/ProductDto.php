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

    public static function getById(int $id): ?array
    {
        $db = PdoConfig::setup();
        $q = $db->prepare('SELECT * FROM products WHERE id = :id');
        $q->execute(['id' => $id]);
        return $q->fetch(\PDO::FETCH_ASSOC);
    }

    public static function deleteById(int $id): void
    {
        $db = PdoConfig::setup();
        $q = $db->prepare('DELETE FROM products WHERE id = :id');
        $q->execute(['id' => $id]);
    }

    public static function updateById(int $id, array $object): void
    {
        $db = PdoConfig::setup();
        $q = $db->prepare("UPDATE products SET title = :title, description = :description, price = :price, image = :image, category_id = :category_id WHERE id = :id");
        $q->execute([
            'title' => $object['title'],
            'description' => $object['description'],
            'price' => $object['price'],
            'image' => $object['image'],
            'category_id' => $object['category_id'],
            'id' => $id
        ]);
    }
}

